<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$is_gsm = ($current_page == 'gsm' || strpos($_SERVER['REQUEST_URI'], '/gsm') !== false);
$is_slabotochka = ($current_page == 'slabotchka' || $current_page == 'weak-current' || strpos($_SERVER['REQUEST_URI'], '/slabotchka') !== false);
?>
<style>
.footer {
    background:#0B1220; color:#fff; padding:64px 0 24px; margin-top:0;
    font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;
}
.footer-container { max-width:1240px; margin:0 auto; padding:0 20px; }
.footer-content {
    display:grid; grid-template-columns:1.2fr 1fr 1fr 1.2fr; gap:42px; padding-bottom:46px;
}
.footer-section h3 { margin:0 0 17px; font-size:1rem; font-weight:700; color:#fff; }
.footer-section ul { list-style:none; padding:0; margin:0; }
.footer-section ul li { margin-bottom:9px; }
.footer-section ul li a {
    color:#94A3B8; text-decoration:none; font-size:.92rem; transition:.18s ease;
}
.footer-section ul li a:hover { color:#fff; }
.footer-contact-info { display:flex; flex-direction:column; gap:12px; }
.contact-item { display:flex; align-items:flex-start; gap:10px; color:#94A3B8; font-size:.92rem; }
.contact-item a { color:#E2E8F0; text-decoration:none; }
.contact-item a:hover { color:#93C5FD; }
.footer-bottom {
    border-top:1px solid rgba(255,255,255,.1); padding-top:22px;
    display:flex; align-items:center; justify-content:space-between; gap:20px;
}
.footer-bottom p { margin:0; color:#64748B; font-size:.82rem; }
.footer-social { display:flex; gap:8px; }
.social-link {
    display:flex; align-items:center; justify-content:center; min-width:38px; height:38px;
    padding:0 10px; border:1px solid rgba(255,255,255,.1); border-radius:8px;
    color:#CBD5E1; text-decoration:none; font-size:.8rem; font-weight:700;
}
.social-link:hover { border-color:rgba(255,255,255,.24); color:#fff; background:rgba(255,255,255,.04); }
@media (max-width:800px) {
    .footer { padding:48px 0 20px; }
    .footer-content { grid-template-columns:1fr 1fr; gap:30px 20px; }
}
@media (max-width:560px) {
    .footer-container { padding:0 14px; }
    .footer-content { grid-template-columns:1fr; }
    .footer-bottom { flex-direction:column; align-items:flex-start; }
}
</style>

<footer class="footer" id="contact">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Группа Интегра</h3>
                <ul>
                    <li><a href="/about.php">О компании</a></li>
                    <li><a href="/projects.php">Реализованные проекты</a></li>
                    <li><a href="/services.php">Услуги и консультации</a></li>
                    <li><a href="/articles/index.php">Полезные материалы</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Направления</h3>
                <ul>
                    <li><a href="/gsm.php">Усиление сотовой связи</a></li>
                    <li><a href="/slabotchka.php">Слаботочные системы</a></li>
                    <li><a href="/projects.php">Проекты</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Для работы с проектом</h3>
                <ul>
                    <li><a href="/#contact">Контакты</a></li>
                    <?php if ($is_gsm): ?><li><a href="/gsmservices.php">Услуги по усилению связи</a></li><?php endif; ?>
                    <?php if ($is_slabotochka): ?><li><a href="/services.php">Дополнительные услуги</a></li><?php endif; ?>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Контакты</h3>
                <div class="footer-contact-info">
                    <div class="contact-item"><span>✉</span><a href="mailto:info@groupintegra.ru">info@groupintegra.ru</a></div>
                    <div class="contact-item"><span>⌂</span><span><a href="/spb.php">Санкт-Петербург</a> · <a href="/moscow.php">Москва</a></span></div>
                    <div class="contact-item"><span>◷</span><span>Пн–Пт: 9:00–18:00</span></div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2007–2026 Группа Интегра. Все права защищены.</p>
            <div class="footer-social">
                <a href="https://t.me/integragroup" class="social-link" target="_blank" rel="noopener noreferrer">TG</a>
                <a href="mailto:info@groupintegra.ru" class="social-link">✉</a>
            </div>
        </div>
    </div>
</footer>
<!-- Deployment sync: explicit articles index link -->
