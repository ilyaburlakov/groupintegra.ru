<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title>О компании | Группа Интегра | Слаботочные системы</title>
    <meta name="description" content="Более 18 лет опыта в проектировании и монтаже слаботочных систем. Команда сертифицированных специалистов, работа с объектами любой сложности, гарантия качества.">
    <meta name="keywords" content="о компании слаботочные системы, опыт работы слаботочные системы, команда специалистов, сертифицированные инженеры, история компании">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://groupintegra.ru/about/">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --main-color: #4A90E2;
            --accent-color: #e74c3c;
            --soft-red: #FF6F61;
            --bg-color: #F8F9FA;
            --text-color: #2D2D2D;
            --light: #FFFFFF;
            --dark: #2c3e50;
            --transition: all 0.3s ease;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 60px 0;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            color: var(--dark);
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--accent-color);
        }

        /* Header */
        header {
            background: var(--light);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            height: 50px;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        nav ul li a:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: var(--transition);
        }

        nav ul li a:hover {
            color: var(--accent-color);
        }

        nav ul li a:hover:after {
            width: 100%;
        }

        /* Hero */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), url('images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: var(--light);
            text-align: center;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Timeline */
        .timeline-section {
            background: var(--bg-color);
        }

        .timeline-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px 20px;
        }
        
        .timeline {
            position: relative;
            padding-left: 30px;
        }
        
        .timeline:before {
            content: '';
            position: absolute;
            top: 0;
            left: 10px;
            height: 100%;
            width: 2px;
            background: linear-gradient(to bottom, var(--main-color), var(--accent-color));
            animation: lineGrow 1s ease-out;
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 25px;
            opacity: 0;
            transform: translateX(-20px);
            transition: all 0.4s ease;
        }
        
        .timeline-item.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .timeline-item:before {
            content: '';
            position: absolute;
            left: -30px;
            top: 6px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--light);
            border: 3px solid var(--accent-color);
            box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.2);
            transition: all 0.3s ease;
        }
        
        .timeline-item:hover:before {
            transform: scale(1.1);
            box-shadow: 0 0 0 5px rgba(231, 76, 60, 0.3);
        }
        
        .timeline-year {
            font-size: 18px;
            font-weight: 600;
            color: var(--accent-color);
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }
        
        .timeline-item:hover .timeline-year {
            color: #c0392b;
        }
        
        .timeline-content {
            background: var(--light);
            padding: 15px;
            border-radius: 6px;
            font-size: 14px;
            box-shadow: var(--shadow);
            border-left: 3px solid var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .timeline-item:hover .timeline-content {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .timeline-footer {
            margin-top: 30px;
            background: var(--dark);
            color: var(--light);
            padding: 20px;
            border-radius: 6px;
            font-size: 14px;
            animation: fadeInRed 0.6s ease 0.3s forwards;
            opacity: 0;
            border-top: 3px solid var(--accent-color);
        }
        
        .timeline-footer h3 {
            margin-top: 0;
            color: var(--soft-red);
            font-size: 16px;
        }
        
        @keyframes lineGrow {
            from { height: 0; background: var(--main-color); }
            to { height: 100%; background: linear-gradient(to bottom, var(--main-color), var(--accent-color)); }
        }
        
        @keyframes fadeInRed {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); box-shadow: 0 5px 20px rgba(231, 76, 60, 0.2); }
        }

        /* Values */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .value-card {
            background: var(--light);
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border-top: 3px solid var(--soft-red);
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .value-icon {
            width: 60px;
            height: 60px;
            background: var(--soft-red);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: var(--light);
            font-size: 24px;
        }

        /* CTA */
        .cta {
            background: linear-gradient(135deg, var(--main-color), var(--soft-red));
            color: var(--light);
            text-align: center;
            padding: 60px 0;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--light);
            color: var(--accent-color);
            border: none;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 20px;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: var(--light);
            padding: 40px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-logo {
            height: 40px;
            margin-bottom: 15px;
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .footer-contact svg {
            margin-right: 10px;
            color: var(--soft-red);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
            }

            nav ul {
                margin-top: 20px;
            }

            nav ul li {
                margin: 0 10px;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .hero h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .timeline:before {
                left: 5px;
            }

            .timeline-item:before {
                left: -25px;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="container header-container">
        <a href="/">
            <img src="images/logo.png" alt="Группа Интегра" class="logo">
        </a>
        <nav>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/about.html" class="active">О компании</a></li>
                <li><a href="/services.html">Услуги</a></li>
                <li><a href="/projects.html">Проекты</a></li>
                <li><a href="/contacts.html">Контакты</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero -->
<section class="hero">
    <div class="container">
        <h1>О компании Группа Интегра</h1>
        <p>Лидер в области слаботочных систем с 2007 года. Более 500 реализованных проектов по всей России.</p>
    </div>
</section>

<!-- Timeline -->
<section class="timeline-section">
    <div class="container">
        <h2 class="section-title">Наша история</h2>
        <div class="timeline-container">
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2007: Основание компании</div>
                    <div class="timeline-content">Первые проекты в Санкт-Петербурге</div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2013</div>
                    <div class="timeline-content">Расширение комплекса услуг</div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2023</div>
                    <div class="timeline-content">Реализация 500+ проектов по всей России</div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2024</div>
                    <div class="timeline-content">Запуск направления цифровизации строительного процесса</div>
                </div>
                
                <div class="timeline-footer">
                    <h3>Достижения и текущее положение</h3>
                    <p>Реализация проектов для офисных центров, торговых комплексов и промышленных объектов. Награды за инновации в цифровизации. Лидер в области слаботочных систем, работающий с объектами любой сложности по всей России.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section>
    <div class="container">
        <h2 class="section-title">Наши ценности</h2>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">✓</div>
                <h3>Качество</h3>
                <p>Используем только сертифицированное оборудование и материалы</p>
            </div>
            <div class="value-card">
                <div class="value-icon">✱</div>
                <h3>Инновации</h3>
                <p>Внедряем передовые технологии и цифровые решения</p>
            </div>
            <div class="value-card">
                <div class="value-icon">♥</div>
                <h3>Надежность</h3>
                <p>Гарантируем долгосрочную и бесперебойную работу систем</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <div class="container">
        <h2>Готовы к сотрудничеству?</h2>
        <p>Оставьте заявку и мы свяжемся с вами в ближайшее время</p>
        <a href="#contact" class="btn">Оставить заявку</a>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div>
                <img src="images/logo-white.png" alt="Группа Интегра" class="footer-logo">
                <p>Профессиональные решения в области слаботочных систем с 2007 года</p>
            </div>
            <div>
                <h3>Контакты</h3>
                <div class="footer-contact">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        Санкт-Петербург, ул. Лесопарковая, 46
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        +7 (812) 443-01-23
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        info@groupintegra.ru
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Группа Интегра. Все права защищены.</p>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.timeline-item');
        
        function checkVisibility() {
            items.forEach((item, index) => {
                const rect = item.getBoundingClientRect();
                const isVisible = (rect.top <= window.innerHeight * 0.85);
                
                if (isVisible) {
                    setTimeout(() => {
                        item.classList.add('visible');
                    }, index * 120);
                }
            });
        }
        
        // Проверяем при загрузке и добавляем обработчик скролла
        checkVisibility();
        window.addEventListener('scroll', checkVisibility);
        
        // Добавляем небольшую задержку для проверки после загрузки всех ресурсов
        setTimeout(checkVisibility, 300);
    });
</script>

</body>
</html>