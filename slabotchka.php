<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слаботочные системы - Проектирование и монтаж в Москве и СПб | Группа Интегра</title>
    <meta name="description" content="Профессиональное проектирование и монтаж слаботочных систем: СКС, видеонаблюдение, СКУД, Wi-Fi, пожарная сигнализация. Комплексные решения от Группы Интегра с 2007 года.">
    <meta name="keywords" content="слаботочные системы, СКС, видеонаблюдение, СКУД, пожарная сигнализация, автоматизация зданий, проектирование, монтаж, Москва, Санкт-Петербург">
    <meta property="og:title" content="Слаботочные системы - Комплексные решения | Группа Интегра">
    <meta property="og:description" content="Профессиональное проектирование и монтаж слаботочных систем любой сложности с гарантией 5 лет">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://groupintegra.ru/weak-current.php">
    <meta property="og:image" content="/images/weak-current-hero.jpg">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://groupintegra.ru/weak-current.php">
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

        .btn-outline {
            background: transparent;
            border: 2px solid var(--main-color);
            color: var(--main-color);
            border-radius: 3px;
        }

        .btn-outline:hover {
            background: var(--main-color);
            color: var(--light);
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
            justify-content: flex-start;
            color: var(--light);
            overflow: hidden;
            background: none;
        }

        .hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), 
            url('https://groupintegra.ru/images/office.jpg') no-repeat center center/cover;

    z-index: -1;
}


        .hero-content {
            width: 100%;
            padding: 20px;
            text-align: left;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            max-width: 700px;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            max-width: 600px;
        }

        .hero-highlight {
            font-size: 1.2rem;
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 30px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: flex-start;
        }

        /* История и опыт */
        .company-story {
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
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: var(--main-color);
            font-weight: 700;
        }

        .story-text p {
            margin-bottom: 20px;
            color: var(--text-color);
        }

        .story-highlights {
            background: var(--light);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            margin-top: 30px;
        }

        .story-highlights h4 {
            color: var(--accent-color);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .story-highlights ul {
            list-style: none;
        }

        .story-highlights li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 0.95rem;
            color: var(--text-color);
        }

        .story-highlights li::before {
            content: '→';
            color: var(--accent-color);
            font-weight: bold;
            margin-right: 12px;
            font-size: 1.2rem;
        }
        
.story-image {
    width: 1000px;  /* Фиксированный размер */
    max-width: 100%;  /* Адаптивность */
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

        /* Услуги */
        .services {
            background: var(--light);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .service-card {
            background: var(--light);
            padding: 40px 30px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            text-align: center;
            height: 600px;
            display: flex;
            flex-direction: column;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--main-color), var(--accent-color));
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }

        .service-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 25px;
        }

        .service-card h3 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--text-color);
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-card p {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 25px;
            font-size: 0.95rem;
            flex-grow: 1;
        }

        .service-features {
            margin-bottom: 25px;
        }

        .service-features ul {
            list-style: none;
            text-align: left;
        }

        .service-features li {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: var(--gray);
        }

        .service-features li::before {
            content: '✓';
            color: var(--main-color);
            font-weight: bold;
            margin-right: 10px;
            font-size: 1rem;
            min-width: 16px;
        }

        /* Целевая аудитория */
        .target-audience {
            background: var(--bg-color);
        }

        .audience-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-top: 40px;
        }

        .audience-card {
            background: var(--light);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            transition: var(--transition);
        }

        .audience-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.15);
        }

        .audience-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .audience-content {
            padding: 35px;
        }

        .audience-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .audience-description {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .audience-benefits {
            margin-bottom: 25px;
        }

        .audience-benefits h5 {
            color: var(--main-color);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .audience-benefits ul {
            list-style: none;
        }

        .audience-benefits li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: var(--text-color);
        }

        .audience-benefits li::before {
            content: '▶';
            color: var(--accent-color);
            margin-right: 10px;
            margin-top: 2px;
            font-size: 0.8rem;
        }

        /* Преимущества */
        .advantages {
            background: var(--light);
        }

        .advantages-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .advantage-card {
            text-align: center;
            padding: 30px 20px;
        }

        .advantage-icon {
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

        .advantage-icon svg {
            width: 36px;
            height: 36px;
        }

        .advantage-card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .advantage-card p {
            color: var(--gray);
            line-height: 1.6;
        }

        /* Процесс работы */
        .process {
            background: var(--bg-color);
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .process-step {
            background: var(--light);
            padding: 30px 25px;
            border-radius: 8px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .step-number {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background: var(--accent-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--light);
        }

        .process-step h3 {
            font-size: 1.2rem;
            margin: 20px 0 15px;
            color: var(--text-color);
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

        /* Модальное окно */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition);
        }

        .modal.active {
            opacity: 1;
            pointer-events: all;
        }

        .modal-content {
            background: var(--light);
            border-radius: 0;
            width: 90%;
            max-width: 500px;
            padding: 40px;
            position: relative;
            transform: translateY(20px);
            transition: var(--transition);
        }

        .modal.active .modal-content {
            transform: translateY(0);
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--gray);
            transition: var(--transition);
        }

        .modal-close:hover {
            color: var(--accent-color);
        }

        .modal h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--text-color);
        }

        .modal-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .modal-form input,
        .modal-form textarea {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-size: 1rem;
        }

        .modal-form textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* Адаптивность */
        @media (max-width: 1200px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .advantages-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .process-steps {
                grid-template-columns: repeat(2, 1fr);
            }

            .audience-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            section {
                padding: 70px 0;
            }

            .hero-content h1 {
                font-size: 2.5rem;
                max-width: 100%;
            }

            .hero-content p {
                font-size: 1.2rem;
                max-width: 100%;
            }

            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }

            .story-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .services-grid,
            .advantages-grid,
            .process-steps,
            .audience-grid {
                grid-template-columns: 1fr;
            }

            .service-card {
                height: auto;
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

            .service-card {
                padding: 30px 20px;
            }

            .service-image {
                height: 150px;
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
            <h1 data-aos="fade-up">Комплексные слаботочные системы для современного бизнеса</h1>
            <p data-aos="fade-up" data-aos-delay="100">Проектирование, монтаж и обслуживание всех видов слаботочных систем</p>
            <div class="hero-highlight" data-aos="fade-up" data-aos-delay="150">
                15+ лет опыта • 500+ проектов • Цифровизация и онлайн-контроль работ
            </div>
            <p data-aos="fade-up" data-aos-delay="100">Санкт-Петербург | Москва | Россия</p>
            <div class="hero-buttons" data-aos="fade-up" data-aos-delay="200">
                <button class="btn btn-primary" onclick="openModal('Консультация по слаботочным системам')">Получить консультацию</button>
                <a href="#services" class="btn btn-outline">Наши услуги</a>
            </div>
        </div>
    </div>
</section>


<!-- Секция истории и опыта -->
<section class="company-story" id="story">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Проверенная временем экспертиза</h2>
        <div class="story-content">
            <div class="story-text" data-aos="fade-right">
                <h3>От первых проектов до цифровых инноваций</h3>
                <p>С 2007 года мы прошли путь от небольшой команды энтузиастов до профессионалов в области слаботочных систем. Начав с простых СКС проектов, мы постоянно развивались, осваивали новые технологии и расширяли компетенции.</p>
                <p>Сегодня Группа Интегра — это команда специалистов, работающих по международным стандартам качества. Мы стали пионерами в области цифровизации строительных процессов.</p>
                
                <div class="story-highlights">
                    <h4>Ключевые достижения нашего развития:</h4>
                    <ul>
                        <li>2007-2010: Основание и первые 50 проектов</li>
                        <li>2015: Выход на рынок Москвы, масштабирование</li>
                        <li>2018: Внедрение IoT и систем автоматизации зданий</li>
                        <li>2024: Запуск платформы цифрового контроля проектов</li>
                    </ul>
                </div>
            </div>
            <div data-aos="fade-left">
               <img src="/images/img29.jpg" alt="Группа Интегра" class="story-image">
            </div>
        </div>
    </div>
</section>

<!-- Секция услуг -->
<section class="services" id="services">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Наши услуги по слаботочным системам</h2>
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <img src="/images/sks.jpg" alt="Группа Интегра Структурированные кабельные системы" class="service-image">
                <h3>Структурированные кабельные системы (СКС)</h3>
                <p>Проектирование и монтаж современных СКС для передачи данных, голоса и видео с использованием медных и оптоволоконных линий связи.</p>
                <div class="service-features">
                    <ul>
                        <li>Проектирование под требования заказчика</li>
                        <li>Монтаж медных и оптических линий</li>
                        <li>Сертификационные измерения</li>
                        <li>Гарантия на систему 25 лет</li>
                        <li>Поддержка скоростей до 40 Гбит/с</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('СКС - Структурированные кабельные системы')">Заказать расчет</button>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
               <img src="/images/svn.jpg" alt="Группа Интегра Системы видеонаблюдения" class="service-image">
                <h3>Системы видеонаблюдения (CCTV)</h3>
                <p>Комплексные решения видеонаблюдения: от простых систем до интеллектуальных комплексов с аналитикой и распознаванием.</p>
                <div class="service-features">
                    <ul>
                        <li>IP и аналоговые камеры высокого разрешения</li>
                        <li>Видеоаналитика и распознавание лиц</li>
                        <li>Удаленный доступ через мобильные приложения</li>
                        <li>Интеграция с системами безопасности</li>
                        <li>Архивирование до 1 года</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('CCTV - Системы видеонаблюдения')">Заказать расчет</button>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
<img src="/images/skud.jpg" alt="Группа Интегра Системы контроля и управления доступом (СКУД)" class="service-image">                <h3>Системы контроля и управления доступом (СКУД)</h3>
                <p>Современные СКУД для контроля проходов сотрудников и посетителей с использованием карт, биометрии и мобильных приложений.</p>
                <div class="service-features">
                    <ul>
                        <li>Карточные и биометрические считыватели</li>
                        <li>Турникеты и электромагнитные замки</li>
                        <li>Интеграция с системами учета рабочего времени</li>
                        <li>Мобильные приложения для доступа</li>
                        <li>Отчетность и аналитика посещений</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('СКУД - Системы контроля доступа')">Заказать расчет</button>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
<img src="/images/sps.jpg" alt="Группа Интегра Системы пожарной сигнализации" class="service-image">                <h3>Системы пожарной сигнализации</h3>
                <p>Проектирование и монтаж автоматических систем пожарной сигнализации в соответствии с требованиями пожарной безопасности.</p>
                <div class="service-features">
                    <ul>
                        <li>Адресно-аналоговые системы</li>
                        <li>Дымовые, тепловые, газовые датчики</li>
                        <li>Системы оповещения и управления эвакуацией</li>
                        <li>Интеграция с системами дымоудаления</li>
                        <li>Соответствие нормам пожарной безопасности</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('Пожарная сигнализация')">Заказать расчет</button>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="500">
<img src="/images/wifi.jpg" alt="Группа Интегра Корпоративные Wi-Fi сети" class="service-image">                <h3>Корпоративные Wi-Fi сети</h3>
                <p>Проектирование и развертывание профессиональных беспроводных сетей для офисов, торговых центров и промышленных объектов.</p>
                <div class="service-features">
                    <ul>
                        <li>Покрытие любой площади и сложности</li>
                        <li>Поддержка стандартов Wi-Fi 6/6E</li>
                        <li>Гостевые сети и сегментация</li>
                        <li>Централизованное управление</li>
                        <li>Поддержка тысяч одновременных подключений</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('Wi-Fi - Беспроводные сети')">Заказать расчет</button>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="600">
<img src="/images/bms.jpg" alt="Группа Интегра Системы автоматизации зданий (BMS)" class="service-image">                <h3>Системы автоматизации зданий (BMS)</h3>
                <p>Интеллектуальное управление инженерными системами здания: освещение, климат, безопасность в единой экосистеме.</p>
                <div class="service-features">
                    <ul>
                        <li>Управление освещением и климатом</li>
                        <li>Мониторинг энергопотребления</li>
                        <li>Интеграция всех инженерных систем</li>
                        <li>Удаленное управление через приложения</li>
                        <li>Экономия энергоресурсов до 30%</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('BMS - Автоматизация зданий')">Заказать расчет</button>
            </div>
        </div>
    </div>
</section>

<!-- Секция целевой аудитории -->
<section class="target-audience" id="audience">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Кому особенно важны наши решения</h2>
        <div class="audience-grid">
            <div class="audience-card" data-aos="fade-up" data-aos-delay="100">
                <img src="/images/office2.jpg" alt="Группа Интегра Слаботочные системы" class="service-image">
                <div class="audience-content">
                    <h3 class="audience-title">Бизнес-центры и офисные комплексы</h3>
                    <p class="audience-description">Современные офисные здания требуют безупречной IT-инфраструктуры для обеспечения комфортной работы арендаторов и высокого класса объекта.</p>
                    <div class="audience-benefits">
                        <h5>Почему это критически важно:</h5>
                        <ul>
                            <li>Привлечение и удержание премиальных арендаторов</li>
                            <li>Соответствие стандартам класса A и B+</li>
                            <li>Безопасность персонала и имущества</li>
                            <li>Энергоэффективность и снижение эксплуатационных расходов</li>
                            <li>Цифровой контроль позволяет управляющим компаниям отслеживать состояние систем в режиме 24/7</li>
                        </ul>
                    </div>
                    <button class="btn btn-secondary" onclick="openModal('Решения для бизнес-центров')">Получить решение</button>
                </div>
            </div>

            <div class="audience-card" data-aos="fade-up" data-aos-delay="200">
 <img src="/images/tc.jpg" alt="Группа Интегра Слаботочные системы" class="service-image">                <div class="audience-content">
                    <h3 class="audience-title">Торговые центры и ритейл</h3>
                    <p class="audience-description">Розничная торговля зависит от бесперебойной работы IT-систем, безопасности покупателей и эффективного управления большими пространствами.</p>
                    <div class="audience-benefits">
                        <h5>Почему это критически важно:</h5>
                        <ul>
                            <li>Безопасность посетителей и предотвращение потерь</li>
                            <li>Стабильная работа кассовых систем и эквайринга</li>
                            <li>Контроль доступа в служебные помещения</li>
                            <li>Системы оповещения при эвакуации</li>
                            <li>Онлайн-мониторинг позволяет оперативно реагировать на инциденты и управлять системами дистанционно</li>
                        </ul>
                    </div>
                    <button class="btn btn-secondary" onclick="openModal('Решения для ритейла')">Получить решение</button>
                </div>
            </div>

            <div class="audience-card" data-aos="fade-up" data-aos-delay="300">
<img src="/images/gsmprom.jpg" alt="Группа Интегра Слаботочные системы" class="service-image">           
<div class="audience-content">
                    <h3 class="audience-title">Промышленные предприятия</h3>
                    <p class="audience-description">Производственные объекты требуют надежных систем безопасности, контроля доступа и промышленной автоматизации для обеспечения непрерывности процессов.</p>
                    <div class="audience-benefits">
                        <h5>Почему это критически важно:</h5>
                        <ul>
                            <li>Промышленная безопасность и защита персонала</li>
                            <li>Контроль доступа в опасные зоны</li>
                            <li>Интеграция с системами промышленной автоматизации</li>
                            <li>Соответствие требованиям охраны труда</li>
                            <li>Удаленный контроль систем безопасности через цифровую платформу экономит время и ресурсы</li>
                        </ul>
                    </div>
                    <button class="btn btn-secondary" onclick="openModal('Решения для промышленности')">Получить решение</button>
                </div>
            </div>

            <div class="audience-card" data-aos="fade-up" data-aos-delay="400">
<img src="/images/horeca.jpg" alt="Группа Интегра Слаботочные системы" class="service-image">  
<div class="audience-content">
                    <h3 class="audience-title">Гостиничный бизнес и HoReCa</h3>
                    <p class="audience-description">Отели и рестораны нуждаются в современных системах для обеспечения комфорта гостей, безопасности и эффективного управления.</p>
                    <div class="audience-benefits">
                        <h5>Почему это критически важно:</h5>
                        <ul>
                            <li>Безопасность гостей и защита их имущества</li>
                            <li>Современные системы управления номерным фондом</li>
                            <li>Качественный Wi-Fi как обязательный сервис</li>
                            <li>Автоматизация инженерных систем для экономии</li>
                            <li>Цифровой мониторинг помогает поддерживать высокие стандарты сервиса и быстро решать проблемы</li>
                        </ul>
                    </div>
                    <button class="btn btn-secondary" onclick="openModal('Решения для гостиниц')">Получить решение</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Секция преимуществ -->
<section class="advantages" id="advantages">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Почему выбирают нас</h2>
        <div class="advantages-grid">
            <div class="advantage-card" data-aos="fade-up" data-aos-delay="100">
                <div class="advantage-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 12l2 2 4-4"></path>
                        <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c2.35 0 4.5.9 6.1 2.4"></path>
                    </svg>
                </div>
                <h3>15+ лет опыта</h3>
                <p>Успешно реализовали более 500 проектов различной сложности по всей России</p>
            </div>

            <div class="advantage-card" data-aos="fade-up" data-aos-delay="200">
                <div class="advantage-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </div>
                <h3>Цифровизация процессов</h3>
                <p>Собственная платформа онлайн-контроля работ — вы видите прогресс в режиме реального времени</p>
            </div>

            <div class="advantage-card" data-aos="fade-up" data-aos-delay="300">
                <div class="advantage-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h3>Гарантия 5 лет</h3>
                <p>Предоставляем расширенную гарантию на все виды работ и оборудование</p>
            </div>

            <div class="advantage-card" data-aos="fade-up" data-aos-delay="400">
                <div class="advantage-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6"></path>
                        <path d="m15.14 8.86 4.24-4.24m0 11.31-4.24-4.24"></path>
                        <path d="m8.86 8.86-4.24-4.24m0 11.31 4.24-4.24"></path>
                    </svg>
                </div>
                <h3>24/7 поддержка</h3>
                <p>Круглосуточная техническая поддержка и оперативное устранение неисправностей</p>
            </div>
        </div>
    </div>
</section>

<!-- Секция процесса работы -->
<section class="process" id="process">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Этапы работы над проектом</h2>
        <div class="process-steps">
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="step-number">1</div>
                <h3>Техническое обследование</h3>
                <p>Выезд инженера, анализ объекта, определение требований и составление технического задания</p>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="step-number">2</div>
                <h3>Проектирование</h3>
                <p>Разработка проектной документации, подбор оборудования, согласование с заказчиком</p>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-number">3</div>
                <h3>Монтажные работы</h3>
                <p>Профессиональный монтаж системы нашими сертифицированными специалистами</p>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="step-number">4</div>
                <h3>Пуско-наладка и сдача</h3>
                <p>Настройка системы, тестирование, обучение персонала и передача документации</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA секция -->
<section class="cta" id="contact">
    <div class="container">
        <h2 data-aos="fade-up">Готовы реализовать ваш проект?</h2>
        <p data-aos="fade-up" data-aos-delay="100">Получите бесплатную консультацию и коммерческое предложение от наших экспертов с онлайн-контролем выполнения работ</p>
        <div data-aos="fade-up" data-aos-delay="200">
            <button class="btn btn-secondary" onclick="openModal('Бесплатная консультация')">Получить консультацию</button>
        </div>
    </div>
</section>

<!-- Подключаем футер -->
<?php include 'footer.php'; ?>

<!-- Модальное окно -->
<div class="modal" id="modal">
    <div class="modal-content">
        <span class="modal-close" onclick="closeModal()">×</span>
        <h3 id="modalTitle">Заказать консультацию</h3>
        <form class="modal-form" id="modalForm">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="tel" name="phone" placeholder="Ваш телефон" required>
            <input type="email" name="email" placeholder="Ваш email">
            <textarea name="message" placeholder="Опишите ваш проект (тип объекта, площадь, требования)"></textarea>
            <input type="hidden" name="form_type" id="modalFormType">
            <input type="text" name="website" style="display: none;">
            <button type="submit" class="btn">Отправить заявку</button>
        </form>
    </div>
</div>

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

    // Модальное окно
    function openModal(serviceType) {
        const modal = document.getElementById('modal');
        const modalTitle = document.getElementById('modalTitle');
        const formType = document.getElementById('modalFormType');
        
        modalTitle.textContent = 'Заказать: ' + serviceType;
        formType.value = 'Weak Current: ' + serviceType;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    window.addEventListener('click', function(event) {
        const modal = document.getElementById('modal');
        if (event.target === modal) {
            closeModal();
        }
    });

    // Обработка формы
    document.getElementById('modalForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        
        submitBtn.disabled = true;
        submitBtn.textContent = 'Отправка...';
        
        fetch('sendmail.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Заявка успешно отправлена! Мы свяжемся с вами в ближайшее время.');
                this.reset();
                closeModal();
            } else {
                alert('Ошибка отправки: ' + (data.message || 'Попробуйте позже'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ошибка соединения с сервером');
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        });
    });
</script>

<!-- JSON-LD разметка -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Слаботочные системы",
    "description": "Комплексные услуги по проектированию и монтажу слаботочных систем: СКС, видеонаблюдение, СКУД, Wi-Fi, пожарная сигнализация с цифровым контролем",
    "provider": {
        "@type": "Organization",
        "name": "Группа Интегра",
        "url": "https://groupintegra.ru",
        "logo": "https://groupintegra.ru/images/logo.png",
        "foundingDate": "2007",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+7-812-443-0123",
            "contactType": "Customer Service",
            "email": "info@groupintegra.ru",
            "areaServed": "RU"
        }
    },
    "serviceType": [
        "Структурированные кабельные системы",
        "Системы видеонаблюдения",
        "Системы контроля доступа",
        "Пожарная сигнализация",
        "Wi-Fi сети",
        "Автоматизация зданий"
    ],
    "areaServed": ["Москва", "Санкт-Петербург", "Россия"]
}
</script>

</body>
</html>
