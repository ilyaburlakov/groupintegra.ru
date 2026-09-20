<?php
// Определяем текущую страницу
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$is_gsm = ($current_page == 'gsm' || strpos($_SERVER['REQUEST_URI'], '/gsm') !== false);
$is_slabotochka = ($current_page == 'slabotchka' || $current_page == 'weak-current' || strpos($_SERVER['REQUEST_URI'], '/slabotchka') !== false);
?>
<style>
    /* Сброс стилей для хедера с уникальными классами */
    .integra-header * {
        box-sizing: border-box !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .integra-header {
        background: #ffffff !important;
        border-bottom: 1px solid #e5e7eb !important;
        position: sticky !important;
        top: 0 !important;
        z-index: 1000 !important;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05) !important;
        width: 100% !important;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
    }

    .integra-header-container {
        max-width: 1400px !important;
        margin: 0 auto !important;
        padding: 0 20px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        height: 70px !important;
    }

    .integra-logo-section {
        display: flex !important;
        align-items: center !important;
        flex-shrink: 0 !important;
    }

    .integra-logo-section a {
        display: block !important;
        text-decoration: none !important;
    }

    .integra-logo {
        height: 45px !important;
        width: auto !important;
        transition: opacity 0.3s ease !important;
        display: block !important;
    }

    .integra-logo:hover {
        opacity: 0.8 !important;
    }

    .integra-nav-menu {
        display: flex !important;
        align-items: center !important;
        gap: 25px !important;
        list-style: none !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .integra-nav-item {
        position: relative !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .integra-nav-link {
        color: #374151 !important;
        text-decoration: none !important;
        font-weight: 500 !important;
        font-size: 0.95rem !important;
        padding: 8px 16px !important;
        border-radius: 6px !important;
        transition: all 0.2s ease !important;
        white-space: nowrap !important;
        display: block !important;
    }

    .integra-nav-link:hover {
        color: #1E3A8A !important;
        background: #f8fafc !important;
        text-decoration: none !important;
    }

    .integra-nav-link.integra-active {
        color: #1E3A8A !important;
        background: #eff6ff !important;
        font-weight: 600 !important;
    }

    .integra-header-actions {
        display: flex !important;
        align-items: center !important;
        gap: 18px !important;
        flex-shrink: 0 !important;
    }

    .integra-btn-primary {
        background: #1E3A8A !important;
        color: white !important;
        border: none !important;
        padding: 10px 20px !important;
        border-radius: 6px !important;
        font-weight: 600 !important;
        font-size: 0.9rem !important;
        cursor: pointer !important;
        transition: all 0.2s ease !important;
        text-decoration: none !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 6px !important;
        white-space: nowrap !important;
    }

    .integra-btn-primary:hover {
        background: #1e40af !important;
        text-decoration: none !important;
        color: white !important;
    }

    .integra-btn-secondary {
        background: #E53935 !important;
        color: white !important;
        border: none !important;
        padding: 10px 20px !important;
        border-radius: 6px !important;
        font-weight: 600 !important;
        font-size: 0.9rem !important;
        cursor: pointer !important;
        transition: all 0.2s ease !important;
        text-decoration: none !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 6px !important;
        white-space: nowrap !important;
    }

    .integra-btn-secondary:hover {
        background: #dc2626 !important;
        text-decoration: none !important;
        color: white !important;
    }

    .integra-mobile-toggle {
        display: none !important;
        background: none !important;
        border: 1px solid #d1d5db !important;
        padding: 6px 10px !important;
        border-radius: 6px !important;
        font-size: 1.1rem !important;
        color: #374151 !important;
        cursor: pointer !important;
        transition: all 0.2s ease !important;
    }

    .integra-mobile-toggle:hover {
        background: #f9fafb !important;
        border-color: #9ca3af !important;
        color: #1E3A8A !important;
    }

    /* Mobile Styles */
    @media (max-width: 768px) {
        .integra-header-container {
            height: 65px !important;
            padding: 0 15px !important;
        }

        .integra-logo {
            height: 70px !important;
        }

        .integra-nav-menu {
            position: fixed !important;
            top: 65px !important;
            left: -100% !important;
            width: 100% !important;
            height: calc(100vh - 65px) !important;
            background: white !important;
            flex-direction: column !important;
            justify-content: flex-start !important;
            align-items: stretch !important;
            padding: 20px !important;
            gap: 0 !important;
            transition: left 0.3s ease !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1) !important;
        }

        .integra-nav-menu.integra-active {
            left: 0 !important;
        }

        .integra-nav-link {
            font-size: 1rem !important;
            padding: 16px 20px !important;
            border-radius: 0 !important;
            border-bottom: 1px solid #f3f4f6 !important;
            text-align: left !important;
        }

        .integra-nav-link:hover {
            background: #f8fafc !important;
        }

        .integra-mobile-toggle {
            display: block !important;
        }

        .integra-header-actions {
            gap: 12px !important;
        }

        .integra-btn-primary, .integra-btn-secondary {
            padding: 8px 16px !important;
            font-size: 0.85rem !important;
        }
    }

    @media (max-width: 480px) {
        .integra-header-container {
            padding: 0 10px !important;
            height: 60px !important;
        }

        .integra-logo {
            height: 35px !important;
        }

        .integra-header-actions {
            gap: 8px !important;
        }

        .integra-btn-primary, .integra-btn-secondary {
            padding: 7px 14px !important;
            font-size: 0.8rem !important;
        }
    }

    /* Modal Styles - ИСПРАВЛЕННЫЕ */
    .integra-modal {
        display: none !important;
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100vw !important;
        height: 100vh !important;
        background: rgba(0,0,0,0.6) !important;
        z-index: 99999 !important;
        overflow: auto !important;
    }

    .integra-modal.integra-show {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        padding: 20px !important;
    }

    .integra-modal-content {
        background: white !important;
        padding: 30px !important;
        border-radius: 8px !important;
        max-width: 450px !important;
        width: 90% !important;
        position: relative !important;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3) !important;
        margin: auto !important;
    }

    .integra-modal-close {
        position: absolute !important;
        top: 12px !important;
        right: 15px !important;
        background: none !important;
        border: none !important;
        font-size: 1.5rem !important;
        cursor: pointer !important;
        color: #6b7280 !important;
        padding: 5px !important;
        line-height: 1 !important;
        width: 30px !important;
        height: 30px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }

    .integra-modal-close:hover {
        color: #E53935 !important;
        background: #f3f4f6 !important;
        border-radius: 50% !important;
    }

    .integra-modal h3 {
        margin-bottom: 20px !important;
        color: #1E3A8A !important;
        font-size: 1.4rem !important;
        font-weight: 600 !important;
        padding-right: 30px !important;
    }

    .integra-modal-form {
        width: 100% !important;
    }

    .integra-modal-form input,
    .integra-modal-form textarea {
        width: 100% !important;
        padding: 12px 15px !important;
        margin-bottom: 15px !important;
        border: 1px solid #d1d5db !important;
        border-radius: 6px !important;
        font-size: 0.95rem !important;
        transition: border-color 0.2s ease !important;
        box-sizing: border-box !important;
        font-family: inherit !important;
    }

    .integra-modal-form input:focus,
    .integra-modal-form textarea:focus {
        outline: none !important;
        border-color: #1E3A8A !important;
        box-shadow: 0 0 0 3px rgba(30, 58, 138, 0.1) !important;
    }

    .integra-modal-form textarea {
        resize: vertical !important;
        min-height: 90px !important;
    }

    .integra-modal-form button {
        width: 100% !important;
        background: #1E3A8A !important;
        color: white !important;
        border: none !important;
        padding: 14px 20px !important;
        border-radius: 6px !important;
        font-size: 1rem !important;
        font-weight: 600 !important;
        cursor: pointer !important;
        transition: all 0.2s ease !important;
        font-family: inherit !important;
    }

    .integra-modal-form button:hover:not(:disabled) {
        background: #1e40af !important;
        transform: translateY(-1px) !important;
    }

    .integra-modal-form button:disabled {
        background: #9ca3af !important;
        cursor: not-allowed !important;
        transform: none !important;
    }
</style>

<header class="integra-header">
    <div class="integra-header-container">
        <div class="integra-logo-section">
            <a href="/">
                <img src="/images/logo.png" alt="Группа Интегра" class="integra-logo">
            </a>
        </div>

        <nav>
            <ul class="integra-nav-menu" id="integraNavMenu">
                
                
                <?php if ($is_gsm): ?>
                    <!-- Меню для GSM раздела -->
                    <li class="integra-nav-item">
                        <a href="/catalog/" class="integra-nav-link">Каталог оборудования</a>
                    </li>
                    <li class="integra-nav-item">
                        <a href="gsmservices.php" class="integra-nav-link">Услуги</a>
                    </li>
                
                <?php elseif ($is_slabotochka): ?>
                    <!-- Меню для слаботочных систем -->
                    <li class="integra-nav-item">
                        <a href="https://groupintegra.ru/services.php" class="integra-nav-link">Услуги</a>
                    </li>
                
                <?php else: ?>
                    <!-- Основное меню -->
                <?php endif; ?>

                <li class="integra-nav-item">
                    <a href="/about.php" class="integra-nav-link">О компании</a>
                </li>
                <li class="integra-nav-item">
                    <a href="/#contact" class="integra-nav-link">Контакты</a>
                </li>
            </ul>
        </nav>

        <div class="integra-header-actions">

            <?php if ($is_gsm): ?>
                <a href="https://groupintegra.ru/slabotchka.php" class="integra-btn-secondary">Слаботочные системы</a>
            <?php elseif ($is_slabotochka): ?>
                <a href="/gsm.php" class="integra-btn-secondary">Усиление связи</a>
            <?php endif; ?>
            
            <button class="integra-btn-primary" onclick="integraOpenModal(); return false;">
                Отправить заявку
            </button>
        </div>

        <button class="integra-mobile-toggle" onclick="integraToggleMobileMenu()">
            ☰
        </button>
    </div>
</header>

<!-- Модальное окно для заявки -->
<div id="integraRequestModal" class="integra-modal">
    <div class="integra-modal-content">
        <button class="integra-modal-close" onclick="integraCloseModal(); return false;" type="button">×</button>
        <h3>Отправить заявку</h3>
        <form class="integra-modal-form" id="integraRequestForm">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="tel" name="phone" placeholder="Ваш телефон" required>
            <input type="email" name="email" placeholder="Ваш email">
            <textarea name="message" placeholder="Сообщение" rows="3"></textarea>
            
            <!-- ИСПРАВЛЕНИЕ: Добавляем обязательное поле form_type -->
            <input type="hidden" name="form_type" id="integraFormType" value="">
            
            <!-- Антиспам поле -->
            <input type="text" name="website" style="display: none;">
            
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>

<script>
    // Объявляем глобальные функции
    window.integraOpenModal = function() {
        
        // Определяем тип формы в зависимости от текущей страницы
        var formType = 'Общая заявка с сайта';
        var currentUrl = window.location.pathname;
        
        if (currentUrl.indexOf('gsm') !== -1) {
            formType = 'Заявка: Усиление сотовой связи (GSM)';
        } else if (currentUrl.indexOf('slabotchka') !== -1 || currentUrl.indexOf('weak-current') !== -1) {
            formType = 'Заявка: Слаботочные системы';
        } else if (currentUrl === '/' || currentUrl === '/index.php') {
            formType = 'Заявка с главной страницы';
        }
        
        // Устанавливаем значение поля form_type
        var formTypeField = document.getElementById('integraFormType');
        if (formTypeField) {
            formTypeField.value = formType;
        }
        
        var modal = document.getElementById('integraRequestModal');
        if (modal) {
            modal.classList.add('integra-show');
            document.body.style.overflow = 'hidden';
        } else {
            console.error('Modal element not found!');
        }
    };

    window.integraCloseModal = function() {
        console.log('Closing modal...'); // Для отладки
        var modal = document.getElementById('integraRequestModal');
        if (modal) {
            modal.classList.remove('integra-show');
            document.body.style.overflow = 'auto';
        }
    };

    window.integraToggleMobileMenu = function() {
        var navMenu = document.getElementById('integraNavMenu');
        if (navMenu) {
            navMenu.classList.toggle('integra-active');
        }
    };

    // Ждем полной загрузки DOM
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeIntegra);
    } else {
        initializeIntegra();
    }

    function initializeIntegra() {
        console.log('Initializing Integra components...'); // Для отладки

        // Закрытие модального окна по клику вне его
        var modal = document.getElementById('integraRequestModal');
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    integraCloseModal();
                }
            });
        }

        // Обработка формы заявки
        var form = document.getElementById('integraRequestForm');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                var formData = new FormData(this);
                var submitBtn = this.querySelector('button[type="submit"]');
                var originalText = submitBtn.textContent;
                
                // Проверяем наличие обязательных полей
                console.log('Form data:'); // Для отладки
                for (var pair of formData.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }
                
                submitBtn.disabled = true;
                submitBtn.textContent = 'Отправка...';
                
                fetch('/sendmail.php', {
                    method: 'POST',
                    body: formData
                })
                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(function(data) {
                    console.log('Server response:', data); // Для отладки
                    if (data.success) {
                        alert('Заявка успешно отправлена! Мы свяжемся с вами в ближайшее время.');
                        form.reset();
                        integraCloseModal();
                    } else {
                        alert('Ошибка отправки: ' + (data.message || 'Попробуйте позже'));
                    }
                })
                .catch(function(error) {
                    console.error('Error:', error);
                    alert('Не удалось отправить заявку. Попробуйте ещё раз позже.');
                })
                .finally(function() {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                });
            });
        }

        // Закрытие мобильного меню при изменении размера экрана
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                var navMenu = document.getElementById('integraNavMenu');
                if (navMenu) {
                    navMenu.classList.remove('integra-active');
                }
            }
        });

        // Закрытие мобильного меню при клике на ссылку
        var navLinks = document.querySelectorAll('.integra-nav-link');
        for (var i = 0; i < navLinks.length; i++) {
            navLinks[i].addEventListener('click', function() {
                var navMenu = document.getElementById('integraNavMenu');
                if (navMenu) {
                    navMenu.classList.remove('integra-active');
                }
            });
        }

        // Закрытие модального окна по клавише Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                integraCloseModal();
            }
        });

        console.log('Integra components initialized successfully!'); // Для отладки
    }
</script>
