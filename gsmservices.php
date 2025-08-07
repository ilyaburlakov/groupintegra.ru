<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги усиления сотовой связи - Группа Интегра | GSM репитеры в Москве и СПб</title>
    <meta name="description" content="Профессиональные услуги по усилению сотовой связи: замеры сигнала, проектирование, монтаж репитеров GSM. Комплексные решения от Группы Интегра с 2007 года.">
    <meta name="keywords" content="усиление сотовой связи, GSM репитеры, замеры сигнала, проектирование связи, монтаж репитеров, усилители сигнала, Москва, Санкт-Петербург">
    <meta property="og:title" content="Услуги усиления сотовой связи - Группа Интегра">
    <meta property="og:description" content="Профессиональное усиление сотовой связи и интернета любой сложности с гарантией 5 лет">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://groupintegra.ru/gsm-services.php">
    <meta property="og:image" content="/images/gsm-services-hero.jpg">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://groupintegra.ru/gsm-services.php">
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
            height: 60vh;
            min-height: 400px;
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
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), 
                    url('/images/gsm-hero.jpg') no-repeat center center/cover;
            filter: brightness(0.3) contrast(1.1);
            z-index: -1;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 900px;
            padding: 0 20px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
            letter-spacing: -0.02em;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 0;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 400;
            opacity: 0.95;
        }

        /* Основные услуги */
        .main-services {
            background: var(--bg-color);
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

        /* Дополнительные услуги */
        .additional-services {
            background: var(--light);
        }

        .additional-services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .additional-service-card {
            background: var(--bg-color);
            padding: 30px 25px;
            border-radius: 8px;
            text-align: center;
            transition: var(--transition);
            border: 2px solid transparent;
        }

        .additional-service-card:hover {
            transform: translateY(-5px);
            border-color: var(--main-color);
            box-shadow: 0 15px 40px rgba(74, 144, 226, 0.15);
        }

        .additional-service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--main-color), #3A7BD5);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--light);
        }

        .additional-service-icon svg {
            width: 32px;
            height: 32px;
        }

        .additional-service-card h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .additional-service-card p {
            color: var(--gray);
            line-height: 1.6;
            font-size: 0.9rem;
        }

        /* Преимущества */
        .advantages {
            background: var(--bg-color);
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
            background: var(--light);
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .process-step {
            background: var(--bg-color);
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

            .additional-services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .advantages-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .process-steps {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            section {
                padding: 70px 0;
            }

            .hero {
                height: 50vh;
                min-height: 350px;
            }

            .hero-content h1 {
                font-size: 2.5rem;
                margin-bottom: 15px;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .services-grid,
            .additional-services-grid,
            .advantages-grid,
            .process-steps {
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
                height: 45vh;
                min-height: 320px;
            }

            .hero-content h1 {
                font-size: 2.2rem;
                line-height: 1.1;
            }

            .hero-content p {
                font-size: 1rem;
                line-height: 1.5;
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
            <h1 data-aos="fade-up">Услуги усиления сотовой связи</h1>
            <p data-aos="fade-up" data-aos-delay="100">Профессиональные решения для качественной связи в любом месте</p>
        </div>
    </div>
</section>

<!-- Основные услуги -->
<section class="main-services" id="services">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Основные услуги</h2>
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <img src="/images/signal-measurement.jpg" alt="Замеры сигнала сотовой связи" class="service-image">
                <h3>Замеры сигнала</h3>
                <p>Профессиональные замеры качества сотовой связи с помощью специализированного оборудования для определения оптимальных решений усиления.</p>
                <div class="service-features">
                    <ul>
                        <li>Измерение уровня сигнала всех операторов</li>
                        <li>Анализ качества связи по частотам</li>
                        <li>Детальная карта покрытия объекта</li>
                        <li>Рекомендации по размещению оборудования</li>
                        <li>Протокол измерений с гарантиями</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('Замеры сигнала сотовой связи')">Заказать замеры</button>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <img src="/images/gsm-design.jpg" alt="Проектирование систем усиления связи" class="service-image">
                <h3>Проектирование систем</h3>
                <p>Индивидуальное проектирование систем усиления сотовой связи с учетом архитектурных особенностей и требований объекта.</p>
                <div class="service-features">
                    <ul>
                        <li>3D-моделирование покрытия</li>
                        <li>Расчет мощности оборудования</li>
                        <li>Схемы размещения антенн и усилителей</li>
                        <li>Техническое задание для монтажа</li>
                        <li>Спецификация оборудования</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('Проектирование систем усиления связи')">Заказать проектирование</button>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <img src="/images/gsm-installation.jpg" alt="Монтаж репитеров GSM" class="service-image">
                <h3>Монтаж и настройка</h3>
                <p>Профессиональный монтаж репитеров, усилителей и антенных систем с последующей настройкой для оптимальной работы.</p>
                <div class="service-features">
                    <ul>
                        <li>Монтаж репитеров всех частот</li>
                        <li>Установка внутренних и внешних антенн</li>
                        <li>Прокладка коаксиальных кабелей</li>
                        <li>Настройка и балансировка системы</li>
                        <li>Тестирование и сдача в эксплуатацию</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('Монтаж репитеров GSM')">Заказать монтаж</button>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <img src="/images/gsm-audit.jpg" alt="Аудит систем связи" class="service-image">
                <h3>Аудит и оптимизация</h3>
                <p>Комплексный аудит существующих систем усиления связи с выявлением проблем и предложением решений по оптимизации.</p>
                <div class="service-features">
                    <ul>
                        <li>Диагностика работающих систем</li>
                        <li>Выявление причин плохого покрытия</li>
                        <li>Анализ интерференции и помех</li>
                        <li>Рекомендации по модернизации</li>
                        <li>План поэтапного улучшения</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('Аудит систем связи')">Заказать аудит</button>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                <img src="/images/gsm-adaptation.jpg" alt="Адаптация оборудования GSM" class="service-image">
                <h3>Адаптация под интерьер</h3>
                <p>Интеграция оборудования усиления связи в интерьер с учетом дизайна проекта и архитектурных требований.</p>
                <div class="service-features">
                    <ul>
                        <li>Скрытая прокладка кабелей</li>
                        <li>Маскировка антенн под декор</li>
                        <li>Встраивание в подвесные потолки</li>
                        <li>Покраска оборудования в цвет интерьера</li>
                        <li>Минимальное воздействие на дизайн</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('Адаптация под интерьер')">Заказать адаптацию</button>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                <img src="/images/gsm-maintenance.jpg" alt="Обслуживание систем GSM" class="service-image">
                <h3>Техническое обслуживание</h3>
                <p>Регулярное техническое обслуживание систем усиления связи для поддержания оптимальных параметров работы.</p>
                <div class="service-features">
                    <ul>
                        <li>Плановые проверки оборудования</li>
                        <li>Мониторинг качества сигнала</li>
                        <li>Профилактическое обслуживание</li>
                        <li>Устранение неисправностей 24/7</li>
                        <li>Обновление программного обеспечения</li>
                    </ul>
                </div>
                <button class="btn btn-secondary" onclick="openModal('Техническое обслуживание GSM')">Заказать обслуживание</button>
            </div>
        </div>
    </div>
</section>

<!-- Дополнительные услуги -->
<section class="additional-services" id="additional">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Дополнительные услуги</h2>
        <div class="additional-services-grid">
            <div class="additional-service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="additional-service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <h3>Радиочастотное планирование</h3>
                <p>Профессиональное планирование частотного ресурса для исключения интерференции</p>
            </div>

            <div class="additional-service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="additional-service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                        <polyline points="14,2 14,8 20,8"></polyline>
                    </svg>
                </div>
                <h3>Согласование с операторами</h3>
                <p>Получение разрешений и согласований с мобильными операторами связи</p>
            </div>

            <div class="additional-service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="additional-service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6"></path>
                        <path d="m15.14 8.86 4.24-4.24m0 11.31-4.24-4.24"></path>
                        <path d="m8.86 8.86-4.24-4.24m0 11.31 4.24-4.24"></path>
                    </svg>
                </div>
                <h3>Удаленный мониторинг</h3>
                <p>Система онлайн-мониторинга работы репитеров с оповещениями о сбоях</p>
            </div>

            <div class="additional-service-card" data-aos="fade-up" data-aos-delay="400">
                <div class="additional-service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </div>
                <h3>Модернизация систем</h3>
                <p>Upgrade существующих систем под новые стандарты связи 4G/5G</p>
            </div>

            <div class="additional-service-card" data-aos="fade-up" data-aos-delay="500">
                <div class="additional-service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="m22 21-3-3m0 0a5.5 5.5 0 1 0-7.78-7.78 5.5 5.5 0 0 0 7.78 7.78Z"></path>
                    </svg>
                </div>
                <h3>Обучение персонала</h3>
                <p>Подготовка технических специалистов заказчика для обслуживания систем</p>
            </div>

            <div class="additional-service-card" data-aos="fade-up" data-aos-delay="600">
                <div class="additional-service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 9V5a3 3 0 0 0-6 0v4"></path>
                        <rect x="2" y="9" width="20" height="11" rx="2" ry="2"></rect>
                    </svg>
                </div>
                <h3>Экспертиза помех</h3>
                <p>Выявление и устранение источников радиочастотных помех</p>
            </div>
        </div>
    </div>
</section>

<!-- Преимущества -->
<section class="advantages" id="advantages">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Наши преимущества</h2>
        <div class="advantages-grid">
            <div class="advantage-card" data-aos="fade-up" data-aos-delay="100">
                <div class="advantage-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 12l2 2 4-4"></path>
                        <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c2.35 0 4.5.9 6.1 2.4"></path>
                    </svg>
                </div>
                <h3>Опыт 15+ лет</h3>
                <p>Большой опыт в проектировании и монтаже систем усиления сотовой связи</p>
            </div>

            <div class="advantage-card" data-aos="fade-up" data-aos-delay="200">
                <div class="advantage-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </div>
                <h3>Цифровой контроль</h3>
                <p>Онлайн-мониторинг всех этапов работ и состояния оборудования</p>
            </div>

            <div class="advantage-card" data-aos="fade-up" data-aos-delay="300">
                <div class="advantage-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h3>Гарантия 5 лет</h3>
                <p>Расширенная гарантия на все работы и установленное оборудование</p>
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
                <h3>Поддержка 24/7</h3>
                <p>Круглосуточная техническая поддержка и оперативное устранение неисправностей</p>
            </div>
        </div>
    </div>
</section>

<!-- Процесс работы -->
<section class="process" id="process">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: center; width: 100%;">Этапы работы</h2>
        <div class="process-steps">
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="step-number">1</div>
                <h3>Обследование объекта</h3>
                <p>Выезд специалиста, замеры сигнала, анализ особенностей объекта и составление ТЗ</p>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="step-number">2</div>
                <h3>Проектирование</h3>
                <p>Разработка проекта системы усиления, подбор оборудования, согласование</p>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-number">3</div>
                <h3>Монтаж и настройка</h3>
                <p>Установка репитеров и антенн, прокладка кабелей, настройка системы</p>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="step-number">4</div>
                <h3>Тестирование и сдача</h3>
                <p>Контрольные замеры, оптимизация параметров, сдача системы заказчику</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA секция -->
<section class="cta" id="contact">
    <div class="container">
        <h2 data-aos="fade-up">Нужна качественная сотовая связь?</h2>
        <p data-aos="fade-up" data-aos-delay="100">Получите бесплатную консультацию и профессиональное решение проблем со связью</p>
        <div data-aos="fade-up" data-aos-delay="200">
            <button class="btn btn-secondary" onclick="openModal('Консультация по усилению сотовой связи')">Получить консультацию</button>
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
            <textarea name="message" placeholder="Опишите ваш объект и проблемы со связью"></textarea>
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
        formType.value = 'GSM Services: ' + serviceType;
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
    "name": "Услуги усиления сотовой связи",
    "description": "Профессиональные услуги по усилению сотовой связи: замеры сигнала, проектирование, монтаж репитеров GSM с гарантией качества",
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
        "Замеры сигнала сотовой связи",
        "Проектирование систем усиления",
        "Монтаж репитеров GSM",
        "Аудит и оптимизация",
        "Адаптация под интерьер",
        "Техническое обслуживание"
    ],
    "areaServed": ["Москва", "Санкт-Петербург", "Россия"],
    "offers": {
        "@type": "Offer",
        "description": "Комплексные решения по усилению сотовой связи с гарантией 5 лет"
    }
}
</script>

</body>
</html>
