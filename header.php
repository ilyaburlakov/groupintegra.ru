<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$is_gsm = ($current_page == 'gsm' || strpos($_SERVER['REQUEST_URI'], '/gsm') !== false);
$is_slabotochka = ($current_page == 'slabotchka' || $current_page == 'weak-current' || strpos($_SERVER['REQUEST_URI'], '/slabotchka') !== false);
?>
<style>
.integra-header * { box-sizing:border-box !important; }
.integra-header {
    position:sticky !important; top:0 !important; z-index:1000 !important;
    width:100% !important; background:rgba(255,255,255,.96) !important;
    border-bottom:1px solid #E2E8F0 !important;
    box-shadow:0 1px 12px rgba(15,23,42,.05) !important;
    backdrop-filter:blur(14px) !important;
    font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif !important;
}
.integra-header-container {
    max-width:1240px !important; min-height:72px !important; margin:0 auto !important;
    padding:0 20px !important; display:flex !important; align-items:center !important;
    gap:30px !important;
}
.integra-logo-section { display:flex !important; align-items:center !important; flex:0 0 auto !important; }
.integra-logo-section a { display:block !important; line-height:0 !important; }
.integra-logo {
    height:44px !important; width:auto !important; display:block !important;
    transition:opacity .2s ease !important;
}
.integra-logo:hover { opacity:.82 !important; }
.integra-header nav { margin-left:auto !important; }
.integra-nav-menu {
    display:flex !important; align-items:center !important; gap:6px !important;
    list-style:none !important; margin:0 !important; padding:0 !important;
}
.integra-nav-item { margin:0 !important; padding:0 !important; }
.integra-nav-link {
    display:block !important; padding:10px 12px !important; border-radius:8px !important;
    color:#475569 !important; font-size:.92rem !important; font-weight:600 !important;
    text-decoration:none !important; white-space:nowrap !important; transition:.18s ease !important;
}
.integra-nav-link:hover { color:#1D4ED8 !important; background:#F8FAFC !important; }
.integra-header-actions { display:flex !important; align-items:center !important; gap:10px !important; }
.integra-btn-primary {
    display:inline-flex !important; align-items:center !important; justify-content:center !important;
    min-height:44px !important; padding:0 17px !important; border:0 !important; border-radius:9px !important;
    background:#2563EB !important; color:#fff !important; font-size:.9rem !important; font-weight:700 !important;
    cursor:pointer !important; text-decoration:none !important; white-space:nowrap !important; transition:.18s ease !important;
}
.integra-btn-primary:hover { background:#1D4ED8 !important; color:#fff !important; transform:translateY(-1px) !important; }
.integra-btn-secondary {
    display:inline-flex !important; align-items:center !important; justify-content:center !important;
    min-height:44px !important; padding:0 16px !important; border:1px solid #FCA5A5 !important;
    border-radius:9px !important; background:#FEF2F2 !important; color:#B91C1C !important;
    font-size:.88rem !important; font-weight:700 !important; text-decoration:none !important; white-space:nowrap !important;
}
.integra-btn-secondary:hover { background:#FEE2E2 !important; color:#991B1B !important; }
.integra-mobile-toggle {
    display:none !important; margin-left:auto !important; width:42px !important; height:42px !important;
    border:1px solid #CBD5E1 !important; background:#fff !important; border-radius:9px !important;
    color:#334155 !important; font-size:1.15rem !important; cursor:pointer !important;
}

.integra-modal {
    display:none !important; position:fixed !important; inset:0 !important; z-index:99999 !important;
    background:rgba(11,18,32,.72) !important; padding:20px !important; overflow:auto !important;
}
.integra-modal.integra-show { display:flex !important; align-items:center !important; justify-content:center !important; }
.integra-modal-content {
    position:relative !important; width:min(470px,100%) !important; margin:auto !important;
    padding:32px !important; border-radius:18px !important; background:#fff !important;
    box-shadow:0 30px 90px rgba(0,0,0,.28) !important;
}
.integra-modal-close {
    position:absolute !important; top:12px !important; right:14px !important; width:36px !important; height:36px !important;
    border:0 !important; background:#F8FAFC !important; border-radius:9px !important; color:#64748B !important;
    font-size:1.4rem !important; cursor:pointer !important;
}
.integra-modal-close:hover { color:#EF4444 !important; background:#FEF2F2 !important; }
.integra-modal h3 {
    margin:0 40px 22px 0 !important; color:#0B1220 !important;
    font-size:1.45rem !important; font-weight:800 !important;
}
.integra-modal-form { width:100% !important; }
.integra-modal-form input, .integra-modal-form textarea {
    width:100% !important; padding:13px 14px !important; margin:0 0 12px !important;
    border:1px solid #CBD5E1 !important; border-radius:9px !important;
    font:inherit !important; color:#172033 !important; background:#fff !important;
}
.integra-modal-form input:focus, .integra-modal-form textarea:focus {
    outline:none !important; border-color:#2563EB !important; box-shadow:0 0 0 3px rgba(37,99,235,.1) !important;
}
.integra-modal-form textarea { min-height:96px !important; resize:vertical !important; }
.integra-modal-form button {
    width:100% !important; min-height:48px !important; border:0 !important; border-radius:9px !important;
    background:#2563EB !important; color:#fff !important; font-size:1rem !important; font-weight:700 !important;
    cursor:pointer !important;
}
.integra-modal-form button:hover:not(:disabled) { background:#1D4ED8 !important; }
.integra-modal-form button:disabled { opacity:.55 !important; cursor:not-allowed !important; }

@media (max-width: 980px) {
    .integra-header-container { gap:16px !important; }
    .integra-nav-menu { gap:0 !important; }
    .integra-nav-link { padding:10px 8px !important; font-size:.86rem !important; }
}
@media (max-width: 800px) {
    .integra-header-container { min-height:64px !important; padding:0 14px !important; }
    .integra-logo { height:38px !important; }
    .integra-header nav { order:3 !important; width:100% !important; margin:0 !important; }
    .integra-nav-menu {
        position:fixed !important; top:64px !important; left:0 !important; right:0 !important;
        width:100% !important; background:#fff !important; border-bottom:1px solid #E2E8F0 !important;
        box-shadow:0 18px 35px rgba(15,23,42,.08) !important; padding:10px 14px !important;
        flex-direction:column !important; align-items:stretch !important; gap:2px !important;
        transform:translateY(-120%) !important; opacity:0 !important; pointer-events:none !important;
        transition:.2s ease !important;
    }
    .integra-nav-menu.integra-active { transform:translateY(0) !important; opacity:1 !important; pointer-events:auto !important; }
    .integra-nav-link { padding:13px 14px !important; }
    .integra-header-actions { margin-left:auto !important; }
    .integra-btn-secondary { display:none !important; }
    .integra-mobile-toggle { display:block !important; }
}
@media (max-width: 520px) {
    .integra-header-container { padding:0 10px !important; }
    .integra-logo { height:34px !important; }
    .integra-btn-primary { min-height:40px !important; padding:0 12px !important; font-size:.82rem !important; }
}
</style>

<header class="integra-header">
    <div class="integra-header-container">
        <div class="integra-logo-section">
            <a href="/"><img src="/images/logo.png" alt="Группа Интегра" class="integra-logo"></a>
        </div>

        <nav>
            <ul class="integra-nav-menu" id="integraNavMenu">
                <?php if ($is_gsm): ?>
                    <li class="integra-nav-item"><a href="/catalog/" class="integra-nav-link">Каталог оборудования</a></li>
                    <li class="integra-nav-item"><a href="/gsmservices.php" class="integra-nav-link">Услуги</a></li>
                <?php elseif ($is_slabotochka): ?>
                    <li class="integra-nav-item"><a href="/services.php" class="integra-nav-link">Услуги</a></li>
                <?php else: ?>
                    <li class="integra-nav-item"><a href="/gsm.php" class="integra-nav-link">Усиление связи</a></li>
                    <li class="integra-nav-item"><a href="/slabotchka.php" class="integra-nav-link">Слаботочные системы</a></li>
                    <li class="integra-nav-item"><a href="/projects.php" class="integra-nav-link">Проекты</a></li>
                <?php endif; ?>
                <li class="integra-nav-item"><a href="/about.php" class="integra-nav-link">О компании</a></li>
                <li class="integra-nav-item"><a href="/#contact" class="integra-nav-link">Контакты</a></li>
            </ul>
        </nav>

        <div class="integra-header-actions">
            <?php if ($is_gsm): ?>
                <a href="/slabotchka.php" class="integra-btn-secondary">Слаботочные системы</a>
            <?php elseif ($is_slabotochka): ?>
                <a href="/gsm.php" class="integra-btn-secondary">Усиление связи</a>
            <?php endif; ?>
            <button class="integra-btn-primary" onclick="integraOpenModal(); return false;">Обсудить проект</button>
        </div>

        <button class="integra-mobile-toggle" type="button" aria-label="Открыть меню" onclick="integraToggleMobileMenu()">☰</button>
    </div>
</header>

<div id="integraRequestModal" class="integra-modal">
    <div class="integra-modal-content">
        <button class="integra-modal-close" onclick="integraCloseModal(); return false;" type="button" aria-label="Закрыть">×</button>
        <h3>Обсудить проект</h3>
        <form class="integra-modal-form" id="integraRequestForm">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="tel" name="phone" placeholder="Ваш телефон" required>
            <input type="email" name="email" placeholder="Ваш email">
            <textarea name="message" placeholder="Кратко опишите задачу" rows="3"></textarea>
            <input type="hidden" name="form_type" id="integraFormType" value="">
            <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
            <button type="submit">Отправить заявку</button>
        </form>
    </div>
</div>

<script>
window.integraOpenModal = function() {
    var formType = 'Общая заявка с сайта';
    var currentUrl = window.location.pathname;

    if (currentUrl.indexOf('gsm') !== -1) {
        formType = 'Заявка: Усиление сотовой связи (GSM)';
    } else if (currentUrl.indexOf('slabotchka') !== -1 || currentUrl.indexOf('weak-current') !== -1) {
        formType = 'Заявка: Слаботочные системы';
    } else if (currentUrl === '/' || currentUrl === '/index.php') {
        formType = 'Заявка с главной страницы';
    }

    var formTypeField = document.getElementById('integraFormType');
    if (formTypeField) formTypeField.value = formType;

    var modal = document.getElementById('integraRequestModal');
    if (modal) {
        modal.classList.add('integra-show');
        document.body.style.overflow = 'hidden';
    }
};

window.integraCloseModal = function() {
    var modal = document.getElementById('integraRequestModal');
    if (modal) {
        modal.classList.remove('integra-show');
        document.body.style.overflow = '';
    }
};

window.integraToggleMobileMenu = function() {
    var navMenu = document.getElementById('integraNavMenu');
    if (navMenu) navMenu.classList.toggle('integra-active');
};

function initializeIntegra() {
    var modal = document.getElementById('integraRequestModal');
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === this) window.integraCloseModal();
        });
    }

    var form = document.getElementById('integraRequestForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var submitBtn = this.querySelector('button[type="submit"]');
            var originalText = submitBtn.textContent;

            submitBtn.disabled = true;
            submitBtn.textContent = 'Отправка…';

            fetch('/sendmail.php', { method:'POST', body:formData })
                .then(function(response) {
                    if (!response.ok) throw new Error('Network response was not ok');
                    return response.json();
                })
                .then(function(data) {
                    if (data.success) {
                        alert('Заявка успешно отправлена! Мы свяжемся с вами в ближайшее время.');
                        form.reset();
                        window.integraCloseModal();
                    } else {
                        alert('Ошибка отправки: ' + (data.message || 'Попробуйте позже'));
                    }
                })
                .catch(function() {
                    alert('Не удалось отправить заявку. Попробуйте ещё раз позже.');
                })
                .finally(function() {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                });
        });
    }

    window.addEventListener('resize', function() {
        if (window.innerWidth > 800) {
            var navMenu = document.getElementById('integraNavMenu');
            if (navMenu) navMenu.classList.remove('integra-active');
        }
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeIntegra);
} else {
    initializeIntegra();
}
</script>