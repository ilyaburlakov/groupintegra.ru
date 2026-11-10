<style>
.integra-cookie-banner {
    position:fixed; right:24px; bottom:24px; z-index:10000;
    box-sizing:border-box; width:min(400px, calc(100% - 32px)); padding:20px;
    background:#fff; border:1px solid #e2e8f0; border-radius:16px;
    box-shadow:0 20px 60px rgba(15,23,42,.16);
    font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;
}
.integra-cookie-banner[hidden] { display:none; }
.integra-cookie-banner p { margin:0 0 14px; color:#475569; font-size:.9rem; line-height:1.5; }
.integra-cookie-banner a { color:#1d4ed8; text-decoration:underline; }
.integra-cookie-banner button {
    min-height:42px; padding:0 18px; border:0; border-radius:9px;
    background:#0b1220; color:#fff; font:inherit; font-weight:700; cursor:pointer;
}
@media (max-width:560px) { .integra-cookie-banner { right:16px; bottom:16px; } }
</style>
<aside class="integra-cookie-banner" id="integraCookieBanner" aria-label="Информация о cookie">
    <p>Мы используем файлы cookie для улучшения работы сайта. <a href="/privacy.php" target="_blank" rel="noopener noreferrer">Политика cookie</a></p>
    <button id="integraAcceptCookies" type="button">Принять</button>
</aside>
<script>
(function () {
    var banner = document.getElementById('integraCookieBanner');
    var accept = document.getElementById('integraAcceptCookies');
    try {
        if (localStorage.getItem('cookiesAccepted') === 'true') banner.hidden = true;
    } catch (error) {
        // Keep the notice available when browser storage is unavailable.
    }
    accept.addEventListener('click', function () {
        try { localStorage.setItem('cookiesAccepted', 'true'); } catch (error) {}
        banner.hidden = true;
    });
}());
</script>
