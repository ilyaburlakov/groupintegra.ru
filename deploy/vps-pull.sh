#!/usr/bin/env bash
set -Eeuo pipefail

# Group Integra: deployment initiated from the Jino VPS.
# The VPS pulls the public GitHub repository and synchronizes the production
# document root. No inbound SSH/SFTP connection from GitHub Actions is needed.

REPO_URL="${REPO_URL:-https://github.com/ilyaburlakov/groupintegra.ru.git}"
BRANCH="${DEPLOY_BRANCH:-main}"
CHECKOUT_DIR="${DEPLOY_CHECKOUT:-$HOME/deploy/groupintegra.ru}"
WEB_ROOT="${DEPLOY_WEB_ROOT:-$HOME/domains/groupintegra.ru}"
LOG_FILE="${DEPLOY_LOG:-$HOME/deploy/groupintegra-deploy.log}"
LOCK_FILE="${DEPLOY_LOCK:-$HOME/deploy/groupintegra-deploy.lock}"

mkdir -p "$(dirname "$CHECKOUT_DIR")" "$WEB_ROOT" "$(dirname "$LOG_FILE")"

exec 9>"$LOCK_FILE"
if ! flock -n 9; then
  echo "$(date '+%Y-%m-%d %H:%M:%S') deployment already running" >> "$LOG_FILE"
  exit 0
fi

log() {
  echo "$(date '+%Y-%m-%d %H:%M:%S') $*" | tee -a "$LOG_FILE"
}

if [ ! -d "$CHECKOUT_DIR/.git" ]; then
  log "Initial clone: $REPO_URL"
  rm -rf "$CHECKOUT_DIR"
  git clone --branch "$BRANCH" --single-branch "$REPO_URL" "$CHECKOUT_DIR"
fi

cd "$CHECKOUT_DIR"
log "Fetching origin/$BRANCH"
git fetch --prune origin "$BRANCH"
git checkout -q "$BRANCH"
git reset --hard "origin/$BRANCH"
git clean -fd -e .env -e .env.* -e .well-known -e logs -e tmp -e 'catalog/uploads' -e 'catalog/includes/config.local.php'

log "Synchronizing to $WEB_ROOT"
rsync -a --delete-delay \
  --exclude='.git/' \
  --exclude='.github/' \
  --exclude='.env' \
  --exclude='.env.*' \
  --exclude='.well-known/' \
  --exclude='logs/' \
  --exclude='tmp/' \
  --exclude='catalog/' \
  "$CHECKOUT_DIR/" "$WEB_ROOT/"

# Ensure the production root is not writable by the web process through the
# temporary cache-reset helper used by the old GitHub deployment.
rm -f "$WEB_ROOT/_cache_reset.php"

log "Deployment completed at $(git rev-parse --short HEAD)"
