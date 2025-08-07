<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании - Группа Интегра | История развития с 2007 года</title>
    <meta name="description" content="История развития Группы Интегра с 2007 года: от основания до цифровизации строительства и онлайн-контроля работ. Профессиональные слаботочные системы в Москве и СПб.">
    <meta name="keywords" content="о компании, Группа Интегра, история компании, цифровизация строительства, слаботочные системы, развитие, инновации">
    <meta property="og:title" content="О компании - Группа Интегра | 15+ лет на рынке">
    <meta property="og:description" content="Узнайте историю развития Группы Интегра: от небольшой команды до лидера в области цифровизации строительства">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://groupintegra.ru/about.php">
    <meta property="og:image" content="/images/about-hero.jpg">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://groupintegra.ru/about.php">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        :root {
            --main-color: #4A90E2;
            --accent-color: #FF6F61;
            --bg-color: #F8F9FA;
            --text-color: #2D2D2D;
            --light: #FFFFFF;
            --gray: #6C757D;
            --success: #28A745;
            --warning: #FFC107;
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

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 100px 0;
            position: relative;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 60px;
            position: relative;
            display: inline-block;
            color: var(--text-color);
            text-align: center;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 0;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--main-color);
            color: var(--light);
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
            color: var(--light);
        }

        .btn-secondary {
            background: var(--accent-color);
        }

        .btn-secondary:hover {
            background: #E65A50;
        }

        /* Прелоадер */
        .preloader {
            position: fixed;
            inset: 0;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s;
        }
        .preloader-logo {
            width: 300px;
            max-width: 80vw;
            transition: transform 1.2s cubic-bezier(.4,0,.2,1);
            transform: scale(1);
        }
        .preloader.grow .preloader-logo {
            transform: scale(2);
        }
        .preloader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        /* Герой секция */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            overflow: hidden;
            background: none;
            text-align: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/images/slabotok.png') no-repeat center center/cover;
            filter: brightness(0.4);
            z-index: -1;
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Секция истории */
        .story {
            background: var(--bg-color);
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-top: 40px;
        }

        .story-text {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .story-text h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--main-color);
        }

        .story-text p {
            margin-bottom: 20px;
        }

        .story-image {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        /* Дорожная карта */
        .roadmap {
            background: var(--light);
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 50px auto 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(180deg, var(--main-color), var(--accent-color));
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 80px;
            display: flex;
            align-items: center;
        }

        .timeline-item:nth-child(odd) {
            flex-direction: row;
        }

        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .timeline-content {
            width: calc(50% - 40px);
            background: var(--light);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            position: relative;
            transition: var(--transition);
        }

        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.15);
        }

        .timeline-content::before {
            content: '';
            position: absolute;
            top: 50%;
            width: 0;
            height: 0;
            border: 20px solid transparent;
        }

        .timeline-item:nth-child(odd) .timeline-content::before {
            right: -40px;
            border-left-color: var(--light);
            transform: translateY(-50%);
        }

        .timeline-item:nth-child(even) .timeline-content::before {
            left: -40px;
            border-right-color: var(--light);
            transform: translateY(-50%);
        }

        .timeline-year {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--main-color), var(--accent-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--light);
            box-shadow: 0 8px 25px rgba(74, 144, 226, 0.3);
            z-index: 2;
        }

        .timeline-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--accent-color), #E65A50);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            margin-bottom: 20px;
        }

        .timeline-icon svg {
            width: 30px;
            height: 30px;
        }

        .timeline-content h3 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .timeline-content p {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .timeline-achievements {
            margin-top: 20px;
        }

        .timeline-achievements ul {
            list-style: none;
            margin-top: 10px;
        }

        .timeline-achievements li {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: var(--gray);
        }

        .timeline-achievements li::before {
            content: '→';
            color: var(--accent-color);
            font-weight: bold;
            margin-right: 10px;
        }

        /* Статистика */
        .stats {
            background: linear-gradient(135deg, #3A7BD5 0%, var(--main-color) 100%);
            color: var(--light);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-top: 40px;
        }

        .stat-card {
            text-align: center;
            padding: 30px 20px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            display: block;
            margin-bottom: 10px;
            background: linear-gradient(45deg, rgba(255,255,255,0.9), rgba(255,255,255,0.7));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 1rem;
            opacity: 0.9;
        }



        /* Ценности */
        .values {
            background: var(--light);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 40px;
        }

        .value-card {
            text-align: center;
            padding: 40px 30px;
            background: var(--bg-color);
            border-radius: 12px;
            transition: var(--transition);
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .value-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--main-color), #3A7BD5);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: var(--light);
        }

        .value-icon svg {
            width: 36px;
            height: 36px;
        }

        .value-card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .value-card p {
            color: var(--gray);
            line-height: 1.6;
        }

        /* CTA секция */
        .cta {
            background: linear-gradient(135deg, #3A7BD5 0%, var(--main-color) 100%);
            color: var(--light);
            text-align: center;
            padding: 80px 0;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.9;
            font-size: 1.1rem;
        }

        /* Адаптивность */
        @media (max-width: 1200px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .values-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            section {
                padding: 70px 0;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.2rem;
            }

            .story-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .timeline::before {
                left: 30px;
            }

            .timeline-item,
            .timeline-item:nth-child(even) {
                flex-direction: row;
                padding-left: 70px;
            }

            .timeline-year {
                left: 30px;
                width: 60px;
                height: 60px;
                font-size: 1rem;
            }

            .timeline-content,
            .timeline-item:nth-child(even) .timeline-content {
                width: 100%;
            }

            .timeline-content::before,
            .timeline-item:nth-child(even) .timeline-content::before {
                left: -40px;
                right: auto;
                border-right-color: var(--light);
                border-left-color: transparent;
            }

            .stats-grid,
            .team-grid,
            .values-grid {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 2rem;
                margin-bottom: 40px;
            }
        }

        @media (max-width: 576px) {
            .hero {
                height: 80vh;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .timeline-content {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body class="loading">

<!-- Прелоадер -->
<div class="preloader" id="preloader">
    <img src="/images/logo.png" alt="Группа Интегра" class="preloader-logo">
</div>

<!-- Подключаем хедер -->
<?php include 'header.php'; ?>

<!-- Герой секция -->
<section class="hero" id="hero">
    <div class="container">
        <div class="hero-content">
            <h1 data-aos="fade-up">Группа Интегра</h1>
            <p data-aos="fade-up" data-aos-delay="100">15+ лет инноваций в области слаботочных систем и цифровизации строительства</p>
        </div>
    </div>
</section>

<!-- Секция истории -->
<section class="story" id="story">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Наша история</h2>
        <div class="story-content">
            <div class="story-text" data-aos="fade-right">
                <h3>От идеи до лидерства на рынке</h3>
                <p>Группа Интегра была основана в 2007 году группой инженеров-энтузиастов, объединенных общей идеей создания инновационных решений в области слаботочных систем.</p>
                <p>За годы работы мы прошли путь от небольшой команды до профессионалов в отрасли, внедряя передовые технологии и устанавливая новые стандарты качества.</p>
                <p>Сегодня мы гордимся тем, что стали пионерами в области цифровизации строительных процессов, предоставляя клиентам возможность онлайн-контроля выполнения работ в режиме реального времени.</p>
            </div>
            <div data-aos="fade-left">
                <img src="/images/office.jpg" alt="Группа Интегра" class="story-image">
            </div>
        </div>
    </div>
</section>

<!-- Дорожная карта -->
<section class="roadmap" id="roadmap">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Дорожная карта развития</h2>
        <div class="timeline">
            
            <div class="timeline-item" data-aos="fade-right" data-aos-delay="100">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                    </div>
                    <h3>2007 - Основание компании</h3>
                    <p>Создание Группы Интегра командой из 2 инженеров-энтузиастов в Санкт-Петербурге. Первые проекты по монтажу СКС для малого бизнеса.</p>
                    <div class="timeline-achievements">
                        <ul>
                            <li>Регистрация компании и получение первых заказов</li>
                            <li>Выполнено 12 проектов СКС</li>
                            <li>Формирование основной команды</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-year">2007</div>
            </div>

            <div class="timeline-item" data-aos="fade-left" data-aos-delay="200">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        </svg>
                    </div>
                    <h3>2010 - Расширение услуг</h3>
                    <p>Добавление услуг видеонаблюдения и СКУД в портфолио компании. Первые крупные проекты для офисных комплексов.</p>
                    <div class="timeline-achievements">
                        <ul>
                            <li>Освоение технологий IP-видеонаблюдения</li>
                            <li>Партнерство с ведущими производителями</li>
                            <li>Рост команды до 15 специалистов</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-year">2010</div>
            </div>

            <div class="timeline-item" data-aos="fade-right" data-aos-delay="300">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                            <polyline points="14,2 14,8 20,8"></polyline>
                        </svg>
                    </div>
                    <h3>2012 - Сертификация и стандартизация</h3>
                    <p>Внедрение стандартизированных процессов проектирования и монтажа.</p>
                    <div class="timeline-achievements">
                        <ul>
                            <li>Аккредитация ведущих вендоров</li>
                            <li>Разработка внутренних стандартов качества</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-year">2012</div>
            </div>

            <div class="timeline-item" data-aos="fade-left" data-aos-delay="400">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h3>2015 - Выход на рынок Москвы</h3>
                    <p>Масштабирование деятельности на федеральном уровне. Первые проекты в столичном регионе.</p>
                    <div class="timeline-achievements">
                        <ul>
                            <li>Открытие филиала в Москве</li>
                            <li>Участие в крупных федеральных тендерах</li>
                            <li>Расширение клиентской базы</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-year">2015</div>
            </div>

            <div class="timeline-item" data-aos="fade-right" data-aos-delay="500">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3>2018 - Технологические инновации</h3>
                    <p>Внедрение технологий умного дома, IoT и систем автоматизации зданий. Развитие компетенций в области BMS.</p>
                    <div class="timeline-achievements">
                        <ul>
                            <li>Освоение технологий IoT и BMS</li>
                            <li>Партнерство с tech-стартапами</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-year">2018</div>
            </div>

            <div class="timeline-item" data-aos="fade-left" data-aos-delay="600">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                    </div>
                    <h3>2020 - Адаптация к новым вызовам</h3>
                    <p>Успешная адаптация к пандемийным условиям. Развитие удаленных технологий контроля и мониторинга объектов.</p>
                    <div class="timeline-achievements">
                        <ul>
                            <li>Внедрение удаленного мониторинга</li>
                            <li>Разработка мобильных приложений</li>
                            <li>Рост онлайн-продаж на 200%</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-year">2020</div>
            </div>

            <div class="timeline-item" data-aos="fade-right" data-aos-delay="700">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </div>
                    <h3>2024 - Цифровая трансформация</h3>
                    <p>Запуск собственной цифровой платформы для онлайн-контроля строительных проектов. Революция в прозрачности работ.</p>
                    <div class="timeline-achievements">
                        <ul>
                            <li>Разработка цифровой платформы</li>
                            <li>Внедрение систем онлайн-отчетности</li>
                            <li>Автоматизация процессов управления</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-year">2022</div>
            </div>

            <div class="timeline-item" data-aos="fade-left" data-aos-delay="800">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <h3>2025 - Сегодня</h3>
                    <p>Более 500 успешных проектов, команда из 50+ специалистов, инновационные решения.</p>
                    <div class="timeline-achievements">
                        <ul>
                            <li>500+ завершенных проектов</li>
                            <li>Команда из 50+ профессионалов</li>
                            <li>Собственная платформа контроля объектов</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-year">2024</div>
            </div>

            <div class="timeline-item" data-aos="fade-right" data-aos-delay="900">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <h3>20.. - Будущее уже здесь</h3>
                    <p>Планы на будущее: внедрение ИИ в проектирование, развитие AR/VR технологий, экспансия в регионы России.</p>
                    <div class="timeline-achievements">
                        <ul>
                            <li>Интеграция искусственного интеллекта</li>
                            <li>AR/VR решения для проектирования</li>
                            <li>Открытие 5 новых региональных офисов</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-year">2025</div>
            </div>

        </div>
    </div>
</section>

<!-- Статистика -->
<section class="stats" id="stats">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%; color: white;">Наши достижения в цифрах</h2>
        <div class="stats-grid">
            <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                <span class="stat-number">500+</span>
                <span class="stat-label">Завершенных проектов</span>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                <span class="stat-number">15</span>
                <span class="stat-label">Лет на рынке</span>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                <span class="stat-number">50+</span>
                <span class="stat-label">Сертифицированных специалистов</span>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                <span class="stat-number">24/7</span>
                <span class="stat-label">Техническая поддержка</span>
            </div>
        </div>
    </div>
</section>


<!-- Ценности -->
<section class="values" id="values">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Наши ценности</h2>
        <div class="values-grid">
            <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h3>Надежность</h3>
                <p>Мы гарантируем стабильную работу всех систем и оперативную техническую поддержку 24/7.</p>
            </div>
            <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                </div>
                <h3>Инновации</h3>
                <p>Постоянно внедряем передовые технологии и разрабатываем собственные цифровые решения.</p>
            </div>
            <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="m22 21-3-3m0 0a5.5 5.5 0 1 0-7.78-7.78 5.5 5.5 0 0 0 7.78 7.78Z"></path>
                    </svg>
                </div>
                <h3>Профессионализм</h3>
                <p>Наша команда состоит исключительно из сертифицированных специалистов высокого уровня.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA секция -->
<section class="cta" id="contact">
    <div class="container">
        <h2 data-aos="fade-up">Готовы стать частью нашей истории успеха?</h2>
        <p data-aos="fade-up" data-aos-delay="100">Свяжитесь с нами и узнайте, как мы можем помочь реализовать ваш проект</p>
        <div data-aos="fade-up" data-aos-delay="200">
            <a href="/contacts.php" class="btn btn-secondary">Связаться с нами</a>
        </div>
    </div>
</section>

<!-- Подключаем футер -->
<?php include 'footer.php'; ?>

<!-- Скрипты -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-in-out'
    });

    // Прелоадер
    window.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.getElementById('preloader').classList.add('grow');
        }, 200);
    });
    window.addEventListener('load', function() {
        setTimeout(function() {
            document.getElementById('preloader').classList.add('hidden');
            document.body.classList.remove('loading');
        }, 1200);
    });

    // Анимация счетчиков статистики
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200;

        counters.forEach(counter => {
            const animate = () => {
                const value = counter.innerHTML;
                const data = parseInt(value.replace(/[^\d]/g, ''));
                const time = data / speed;
                
                if (data < time) {
                    counter.innerHTML = Math.ceil(time) + '+';
                    setTimeout(animate, 1);
                } else {
                    counter.innerHTML = value;
                }
            }
            animate();
        });
    }

    // Запуск анимации счетчиков при скролле до секции статистики
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    });

    const statsSection = document.querySelector('.stats');
    if (statsSection) {
        observer.observe(statsSection);
    }
</script>

<!-- JSON-LD разметка -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Группа Интегра",
    "url": "https://groupintegra.ru",
    "logo": "https://groupintegra.ru/images/logo.png",
    "description": "Группа Интегра - лидер в области слаботочных систем и цифровизации строительства с 15-летним опытом работы",
    "foundingDate": "2007",
    "founder": {
        "@type": "Person",
        "name": "Александр Петров"
    },
    "employee": [
        {
            "@type": "Person",
            "name": "Александр Петров",
            "jobTitle": "Генеральный директор"
        },
        {
            "@type": "Person", 
            "name": "Михаил Сидоров",
            "jobTitle": "Технический директор"
        },
        {
            "@type": "Person",
            "name": "Елена Иванова", 
            "jobTitle": "Руководитель проектов"
        }
    ],
    "address": [
        {
            "@type": "PostalAddress",
            "addressLocality": "Санкт-Петербург",
            "addressCountry": "RU"
        },
        {
            "@type": "PostalAddress",
            "addressLocality": "Москва", 
            "addressCountry": "RU"
        }
    ],
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+7-812-443-0123",
        "contactType": "Customer Service",
        "email": "info@groupintegra.ru",
        "areaServed": "RU"
    },
    "sameAs": [
        "https://groupintegra.ru/about.php"
    ]
}
</script>

</body>
</html>
