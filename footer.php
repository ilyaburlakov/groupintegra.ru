<!-- footer.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --main-color: #4A90E2; /* Основной синий */
            --accent-color: #FF6F61; /* Акцентный коралловый */
            --text-color: #2D2D2D; /* Темный текст */
            --light: #FFFFFF;
            --gray: #6C757D;
            --white: #FFFFFF;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: var(--text-color);
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Футер */
        footer {
            background: var(--text-color);
            color: var(--white);
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-logo {
            height: 40px;
            margin-bottom: 20px;
        }

        .footer-about p {
            opacity: 0.8;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-link:hover {
            background: var(--main-color);
            transform: translateY(-3px);
        }

        .footer-links h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--main-color);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--white);
            opacity: 0.8;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            opacity: 1;
            color: var(--main-color);
            padding-left: 5px;
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            opacity: 0.8;
        }

        .footer-contact svg {
            margin-right: 10px;
            color: var(--main-color);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .footer-bottom p {
            opacity: 0.7;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <img src="images/logo.png" alt="Группа Интегра" class="footer-logo">
                    <p>Профессиональное усиление сотовой связи (СУСС) и монтаж слаботочных систем в Москве, Санкт-Петербурге и по всей России с 2007 года.</p>
                    
                </div>
                <div class="footer-links">
                    <h3>Услуги</h3>
                    <ul>
                        <li><a href="/services/design.php">Проектирование</a></li>
                        <li><a href="/services/installation.php">Монтаж</a></li>
                        <li><a href="/services/audit.php">Аудит</a></li>
                        <li><a href="/services/support.php">Сопровождение</a></li>
                        <li><a href="/services/adaptation.php">Адаптация</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Решения</h3>
                    <ul>
                        <li><a href="/solutions/offices.php">Для офисов</a></li>
                        <li><a href="/solutions/industrial.php">Для промышленности</a></li>
                        <li><a href="/solutions/retail.php">Для магазинов</a></li>
                        <li><a href="/solutions/hotels.php">Для отелей</a></li>
                        <li><a href="/solutions/parking.php">Для паркингов</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Контакты</h3>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        Санкт-Петербург, ул. Лесопарковая, 46В
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        +7 (812) 443-0123
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        info@groupintegra.ru
                    </p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 Группа Интегра. Все права защищены.</p>
            </div>
        </div>
    </footer>
</body>
</html>