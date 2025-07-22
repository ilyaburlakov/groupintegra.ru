<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>О нас – Группа Интегра | Усиление сотовой связи в Москве и Санкт-Петербурге</title>
    <meta name="description" content="Группа Интегра – эксперты в усилении сотовой связи и интернета для бизнеса в Москве, Санкт-Петербурге и по всей России. Узнайте, как мы помогаем вашему бизнесу с 2007 года.">
    <meta name="keywords" content="о нас, группа интегра, усиление сотовой связи, СУСС, Москва, Санкт-Петербург, Россия, интернет для бизнеса, профессиональные решения">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        :root {
            --main-color: #4A90E2; /* Основной синий */
            --accent-color: #FF6F61; /* Акцентный коралловый */
            --bg-color: #F8F9FA; /* Светлый фон */
            --text-color: #2D2D2D; /* Темный текст */
            --light: #FFFFFF;
            --gray: #6C757D;
            --white: #FFFFFF;
            --black: #000000;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--light);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Прелоадер */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--white);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .preloader-spinner {
            width: 60px;
            height: 60px;
            border: 4px solid rgba(var(--main-color), 0.2);
            border-top-color: var(--main-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
        }

        .preloader-text {
            font-size: 1rem;
            color: var(--gray);
            font-weight: 500;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .preloader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        /* Общие стили */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--text-color);
            text-align: center;
        }

        h2 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        p {
            color: var(--gray);
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--main-color);
            color: var(--white);
            border: none;
            border-radius: 3px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn:hover {
            background: #3A7BD5;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--accent-color);
        }

        .btn-secondary:hover {
            background: #E65A50;
        }

        /* Шапка */
        header {
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            transition: var(--transition);
        }

        header.scrolled {
            padding: 15px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 80px;
            transition: var(--transition);
        }

        .nav-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--text-color);
            cursor: pointer;
            z-index: 1001;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            position: relative;
            transition: var(--transition);
            padding: 5px 0;
        }

        nav ul li a:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--main-color);
            transition: var(--transition);
        }

        nav ul li a:hover {
            color: var(--main-color);
        }

        nav ul li a:hover:after {
            width: 100%;
        }

        /* Секция о нас */
        .about {
            background: var(--bg-color);
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }

        .about-content h1 {
            text-align: left;
        }

        .about-cta {
            text-align: center;
            margin-top: 30px;
        }

        /* Футер */
        footer {
            background: var(--text-color);
            color: var(--white);
            padding: 60px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-logo {
            height: 40px;
            margin-bottom: 15px;
        }

        .footer-about p {
            opacity: 0.8;
            font-size: 0.95rem;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-link {
            width: 35px;
            height: 35px;
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
            font-size: 1.1rem;
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 8px;
        }

        .footer-links h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--main-color);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 8px;
        }

        .footer-links a {
            color: var(--white);
            opacity: 0.8;
            text-decoration: none;
            transition: var(--transition);
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            opacity: 1;
            color: var(--main-color);
            padding-left: 5px;
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            opacity: 0.8;
            font-size: 0.95rem;
        }

        .footer-contact svg {
            margin-right: 10px;
            color: var(--main-color);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .footer-bottom p {
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Адаптивность */
        @media (max-width: 768px) {
            section {
                padding: 60px 0;
            }

            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            p {
                font-size: 1rem;
            }

            .nav-toggle {
                display: block;
            }

            nav {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                max-width: 400px;
                height: 100vh;
                background: var(--white);
                transition: var(--transition);
                padding: 80px 30px;
                z-index: 1000;
            }

            nav.active {
                right: 0;
            }

            nav ul {
                flex-direction: column;
                gap: 20px;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.8rem;
            }

            h2 {
                font-size: 1.3rem;
            }

            p {
                font-size: 0.95rem;
            }

            .btn {
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body class="loading">

<!-- Прелоадер -->
<div class="preloader" id="preloader">
    <div class="preloader-spinner"></div>
    <p class="preloader-text">Группа Интегра</p>
</div>

<!-- Шапка -->
<header id="header">
    <div class="container header-container">
        <a href="/">
            <img src="images/logo.png" alt="Группа Интегра" class="logo">
        </a>
        <button class="nav-toggle" id="navToggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
        <nav id="nav">
            <ul>
                <li><a href="/about.php">О нас</a></li>
                <li><a href="/services.php">Услуги</a></li>
                <li><a href="/catalog.php">Каталог оборудования</a></li>
                <li><a href="/projects.php">Проекты</a></li>
                <li><a href="/contacts.php">Контакты</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Секция о нас -->
<section class="about" id="about">
    <div class="container">
        <div class="about-content" data-aos="fade-up">
            <h1>О Группе Интегра</h1>
            <h2>Надежные решения для вашего бизнеса</h2>
            <p>"Группа Интегра" – это команда профессионалов, которая с 2007 года помогает бизнесу в Москве, Санкт-Петербурге и по всей России обеспечивать стабильную сотовую связь и высокоскоростной интернет. Мы специализируемся на проектировании и установке систем усиления связи (СУСС), предлагая комплексные решения для офисов, промышленных объектов, складов, отелей и других коммерческих помещений.</p>
            
            <h2>Почему выбирают нас</h2>
            <p>Наша цель – сделать связь надежной и доступной в любых условиях. Мы разрабатываем проекты на этапе строительства, адаптируем оборудование под дизайн помещений и обеспечиваем полный цикл услуг – от монтажа до сопровождения. Например, для офисного комплекса мы предусмотрели интеграцию антенн еще на стадии "котлована", что сэкономило клиенту время и бюджет, а в крупном отеле скрыли оборудование в элементах интерьера, сохранив эстетику пространства.</p>
            
            <h2>Наши преимущества</h2>
            <p>Мы понимаем, насколько важна бесперебойная связь для бизнеса. Наши системы справляются с высокой нагрузкой, обеспечивают равномерное покрытие и высокую скорость передачи данных. Работая с нами, вы получаете индивидуальный подход, оперативное реагирование на запросы и гарантию качества. Один из наших клиентов – производственное предприятие – отметил, что наша круглосуточная поддержка помогла избежать простоев и сохранить эффективность работы.</p>
            
            <h2>Для кого мы работаем</h2>
            <p>Наши услуги созданы для владельцев и управляющих коммерческой недвижимости, где стабильная связь и интернет – это не просто удобство, а необходимость. Будь то офисное здание, гостиница или склад – мы обеспечим надежную сеть, которая поддержит ваш бизнес и повысит удовлетворенность ваших клиентов и сотрудников.</p>
            
            <div class="about-cta" data-aos="fade-up" data-aos-delay="100">
                <a href="#contact" class="btn btn-secondary">Связаться с нами</a>
            </div>
        </div>
    </div>
</section>

<!-- Футер -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <img src="images/logo.png" alt="Группа Интегра" class="footer-logo">
                <p>Профессиональное усиление сотовой связи (СУСС) и монтаж слаботочных систем в Москве, Санкт-Петербурге и по всей России с 2007 года.</p>
                <div class="social-links">
                    <a href="#" class="social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                            <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                        </svg>
                    </a>
                </div>
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
                    Санкт-Петербург, ул. Примерная, 123
                </p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    +7 (812) 123-45-67
                </p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    info@integragroup.ru
                </p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2023 Группа Интегра. Все права защищены.</p>
        </div>
    </div>
</footer>

<!-- Скрипты -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-in-out'
    });

    window.addEventListener('load', function() {
        const preloader = document.getElementById('preloader');
        const body = document.body;
        setTimeout(function() {
            preloader.classList.add('hidden');
            body.classList.remove('loading');
        }, 1500);
    });

    const header = document.getElementById('header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    const navToggle = document.getElementById('navToggle');
    const nav = document.getElementById('nav');
    navToggle.addEventListener('click', function() {
        nav.classList.toggle('active');
    });

    const navLinks = document.querySelectorAll('nav ul li a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            nav.classList.remove('active');
        });
    });
</script>

</body>
</html>