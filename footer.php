<?php
// Определяем текущую страницу
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$is_gsm = ($current_page == 'gsm' || strpos($_SERVER['REQUEST_URI'], '/gsm') !== false);
$is_slabotochka = ($current_page == 'slabotochka' || $current_page == 'weak-current' || strpos($_SERVER['REQUEST_URI'], '/slabotochka') !== false);
?>

<style>
    .footer {
        background: linear-gradient(135deg, #1E3A8A 0%, #2A52BE 100%);
        color: white;
        padding: 60px 0 30px;
        margin-top: auto;
    }

    .footer-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer-section h3 {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: #ffffff;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-section ul li {
        margin-bottom: 12px;
    }

    .footer-section ul li a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .footer-section ul li a:hover {
        color: #ffffff;
        transform: translateX(5px);
    }

    .footer-contact-info {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
    }

    .contact-item a {
        color: #ffffff;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .contact-item a:hover {
        color: #FFD700;
        transform: scale(1.05);
    }

    .footer-cta {
        background: rgba(255, 255, 255, 0.1);
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        margin-bottom: 40px;
        backdrop-filter: blur(10px);
    }

    .footer-cta h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #ffffff;
    }

    .footer-cta p {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 20px;
        font-size: 1.1rem;
    }

    .footer-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .btn-footer {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.3);
        padding: 12px 24px;
        border-radius: 25px;
        font-weight: 600;
        font-size: 0.95rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        backdrop-filter: blur(10px);
    }

    .btn-footer:hover {
        background: rgba(255, 255, 255, 0.3);
        border-color: rgba(255, 255, 255, 0.5);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .btn-footer.primary {
        background: #E53935;
        border-color: #E53935;
    }

    .btn-footer.primary:hover {
        background: #c62828;
        border-color: #c62828;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        padding-top: 30px;
        text-align: center;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .footer-bottom p {
        color: rgba(255, 255, 255, 0.7);
        margin: 0;
    }

    .footer-social {
        display: flex;
        gap: 15px;
    }

    .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .social-link:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-3px) scale(1.1);
    }

    /* Mobile Styles */
    @media (max-width: 768px) {
        .footer {
            padding: 40px 0 20px;
        }

        .footer-content {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .footer-cta {
            padding: 20px;
        }

        .footer-buttons {
            flex-direction: column;
            align-items: center;
        }

        .btn-footer {
            width: 100%;
            max-width: 300px;
            justify-content: center;
        }

        .footer-bottom {
            flex-direction: column;
            text-align: center;
        }

        .contact-item {
            justify-content: center;
            text-align: center;
        }
    }
</style>

<footer class="footer">
    <div class="footer-container">
        <!-- CTA секция -->
        

        <div class="footer-content">
            <!-- Услуги -->
            <div class="footer-section">
                <h3>Наши услуги</h3>
                <ul>
                    <?php if ($is_gsm): ?>
                        <!-- Меню для GSM раздела -->
                        <li><a href="/gsm.php">→ Усиление сотовой связи</a></li>
                        <li><a href="/catalog.php">→ Каталог оборудования</a></li>
                        <li><a href="/slabotochka.php">→ Слаботочные системы</a></li>
                        <li><a href="/projects.php">→ Наши проекты</a></li>
                    
                    <?php elseif ($is_slabotochka): ?>
                        <!-- Меню для слаботочных систем -->
                        <li><a href="/slabotochka.php">→ Слаботочные системы</a></li>
                        <li><a href="/gsm.php">→ Усиление сотовой связи</a></li>
                        <li><a href="/projects.php">→ Наши проекты</a></li>
                        <li><a href="/services.php">→ Дополнительные услуги</a></li>
                    
                    <?php else: ?>
                        <!-- Основное меню -->
                        <li><a href="/gsm.php">→ Усиление сотовой связи</a></li>
                        <li><a href="/slabotochka.php">→ Слаботочные системы</a></li>
                        <li><a href="/catalog.php">→ Каталог оборудования</a></li>
                        <li><a href="/projects.php">→ Наши проекты</a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- Компания -->
            <div class="footer-section">
                <h3>Компания</h3>
                <ul>
                    <li><a href="/about.php">→ О компании</a></li>
                    <li><a href="/team.php">→ Наша команда</a></li>
                    <li><a href="/certificates.php">→ Сертификаты</a></li>
                    <li><a href="/career.php">→ Карьера</a></li>
                    <li><a href="/news.php">→ Новости</a></li>
                </ul>
            </div>

            <!-- Поддержка -->
            <div class="footer-section">
                <h3>Поддержка</h3>
                <ul>
                    <li><a href="/support.php">→ Техподдержка 24/7</a></li>
                    <li><a href="/faq.php">→ Часто задаваемые вопросы</a></li>
                    <li><a href="/documentation.php">→ Документация</a></li>
                    <li><a href="/warranty.php">→ Гарантийное обслуживание</a></li>
                    <li><a href="/#contact">→ Контакты</a></li>
                </ul>
            </div>

            <!-- Контакты -->
            <div class="footer-section">
                <h3>Контактная информация</h3>
                <div class="footer-contact-info">
                    <div class="contact-item">
                        <span>📧</span>
                        <a href="mailto:info@groupintegra.ru">info@groupintegra.ru</a>
                    </div>
                    <div class="contact-item">
                        <span>📍</span>
                        <span>Санкт-Петербург, Москва</span>
                    </div>
                    <div class="contact-item">
                        <span>🕒</span>
                        <span>Пн-Пт: 9:00-18:00</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2007–2025 Группа Интегра. Все права защищены.</p>
            <div class="footer-social">
                <a href="https://vk.com/integragroup" class="social-link" target="_blank">
                    <span>VK</span>
                </a>
                <a href="https://t.me/integragroup" class="social-link" target="_blank">
                    <span>TG</span>
                </a>
                <a href="mailto:info@groupintegra.ru" class="social-link">
                    <span>✉</span>
                </a>
            </div>
        </div>
    </div>
</footer>

<script>
    // Функции модального окна (если не определены в header.php)
    if (typeof openModal === 'undefined') {
        function openModal() {
            const modal = document.getElementById('requestModal');
            if (modal) {
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            } else {
                // Если модальное окно не найдено, создаем его
                createModal();
            }
        }

        function createModal() {
            const modalHTML = `
                <div id="requestModal" style="display: flex; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); z-index: 10000; align-items: center; justify-content: center;">
                    <div style="background: white; padding: 40px; border-radius: 15px; max-width: 500px; width: 90%; position: relative;">
                        <button onclick="closeModal()" style="position: absolute; top: 15px; right: 20px; background: none; border: none; font-size: 1.5rem; cursor: pointer;">×</button>
                        <h3 style="margin-bottom: 20px; color: #1E3A8A;">Отправить заявку</h3>
                        <form id="requestForm">
                            <input type="text" name="name" placeholder="Ваше имя" required style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 8px;">
                            <input type="tel" name="phone" placeholder="Ваш телефон" required style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 8px;">
                            <input type="email" name="email" placeholder="Ваш email" style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 8px;">
                            <textarea name="message" placeholder="Сообщение" rows="4" style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; resize: vertical;"></textarea>
                            <button type="submit" class="btn-primary" style="width: 100%; background: #1E3A8A; color: white; border: none; padding: 12px; border-radius: 8px; font-weight: 600; cursor: pointer;">Отправить</button>
                        </form>
                    </div>
                </div>
            `;
            document.body.insertAdjacentHTML('beforeend', modalHTML);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('requestModal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }
    }
</script>
</footer>
