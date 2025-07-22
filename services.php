<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги усиления сотовой связи | Группа Интегра</title>
    <meta name="description" content="Профессиональные услуги по усилению сотовой связи и интернета от Группы Интегра: замеры сигнала, проектирование, аудит и адаптация оборудования для бизнеса в Москве, Санкт-Петербурге и по всей России.">
    <meta name="keywords" content="усиление сотовой связи, Группа Интегра, замеры сигнала, проектирование связи, аудит GSM, адаптация оборудования, Москва, Санкт-Петербург, Россия, бизнес услуги">
    <meta property="og:title" content="Услуги усиления сотовой связи | Группа Интегра">
    <meta property="og:description" content="Профессиональные решения для бизнеса: замеры сигнала, проектирование, аудит и адаптация в Москве, Санкт-Петербурге и по всей России.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/services.php">
    <meta property="og:image" content="/images/services-og.png">
    <meta property="og:locale" content="ru_RU">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Группа Интегра">
    <link rel="canonical" href="https://example.com/services.php">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        :root {
            --primary-color: #1E3A8A; /* Темно-синий */
            --accent-color: #F97316; /* Яркий оранжевый */
            --bg-color: #F5F7FA; /* Светлый фон */
            --text-color: #1F2A44; /* Темный текст */
            --white: #FFFFFF;
            --gray: #6B7280; /* Серый */
            --border-color: #E5E7EB; /* Светлая граница */
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
            font-family: 'Inter', sans-serif;
            background-color: var(--white);
            color: var(--text-color);
            line-height: 1.7;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 24px;
        }

        section {
            padding: 100px 0;
        }

        h1 {
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-color);
            text-align: center;
            margin-bottom: 48px;
            line-height: 1.2;
        }

        h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-color);
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
            transition: opacity 0.6s ease;
        }

        .preloader-logo {
            width: 120px;
            animation: zoomIn 1.5s ease-in-out forwards;
        }

        @keyframes zoomIn {
            0% {
                transform: scale(0.5);
                filter: blur(10px);
                opacity: 0.3;
            }
            100% {
                transform: scale(1);
                filter: blur(0);
                opacity: 1;
            }
        }

        .preloader-text {
            font-size: 1.1rem;
            color: var(--gray);
            font-weight: 500;
            margin-top: 16px;
            animation: pulseText 1.5s infinite ease-in-out;
        }

        @keyframes pulseText {
            0%, 100% { opacity: 0.6; }
            50% { opacity: 1; }
        }

        .preloader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        /* Секция услуг */
        .services {
            background: var(--bg-color);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr); /* 12-колоночная сетка */
            gap: 24px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .service-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 32px;
            text-align: center;
            min-height: 320px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Разная ширина карточек для симметрии */
        .service-card:nth-child(1) {
            grid-column: span 4; /* Ширина 4 колонки */
        }
        .service-card:nth-child(2) {
            grid-column: span 3; /* Ширина 3 колонки */
        }
        .service-card:nth-child(3) {
            grid-column: span 5; /* Ширина 5 колонок */
        }
        .service-card:nth-child(4) {
            grid-column: span 5; /* Ширина 5 колонок */
        }
        .service-card:nth-child(5) {
            grid-column: span 7; /* Ширина 7 колонок */
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            width: 56px;
            height: 56px;
            margin: 0 auto 24px;
            stroke: var(--accent-color);
            transition: var(--transition);
        }

        .service-card:hover .service-icon {
            transform: scale(1.1);
        }

        .service-card h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .service-card p {
            font-size: 0.95rem;
            color: var(--gray);
            margin-bottom: 24px;
            flex-grow: 1;
        }

        .service-card a {
            display: inline-block;
            padding: 10px 20px;
            background: var(--primary-color);
            color: var(--white);
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
        }

        .service-card a:hover {
            background: #1E40AF;
            transform: translateY(-2px);
        }

        /* Адаптивность */
        @media (max-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(6, 1fr); /* 6-колоночная сетка */
            }

            .service-card:nth-child(1) {
                grid-column: span 3;
            }
            .service-card:nth-child(2) {
                grid-column: span 3;
            }
            .service-card:nth-child(3) {
                grid-column: span 6;
            }
            .service-card:nth-child(4) {
                grid-column: span 3;
            }
            .service-card:nth-child(5) {
                grid-column: span 3;
            }
        }

        @media (max-width: 768px) {
            section {
                padding: 80px 0;
            }

            h1 {
                font-size: 2.25rem;
            }

            .services-grid {
                grid-template-columns: 1fr; /* Одна колонка */
            }

            .service-card {
                grid-column: span 1;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.75rem;
            }

            .service-card h2 {
                font-size: 1.25rem;
            }

            .service-card p {
                font-size: 0.9rem;
            }

            .service-icon {
                width: 48px;
                height: 48px;
            }
        }
    </style>
</head>
<body class="loading">

    <!-- Прелоадер -->
    <div class="preloader" id="preloader">
        <img src="/images/logo.png" alt="Группа Интегра" class="preloader-logo">
        <p class="preloader-text">Группа Интегра</p>
    </div>

    <!-- Хедер -->
    <?php include 'header.php'; ?>

    <!-- Секция услуг -->
    <section class="services" id="services">
        <div class="container">
            <h1 data-aos="fade-up">Наши услуги</h1>
            <div class="services-grid">
                <div class="service-card" data-aos="zoom-in" data-aos-delay="100">
                    <svg class="service-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                    <h2>Замеры сигнала</h2>
                    <p>Точные замеры качества сотовой связи для определения оптимальных решений усиления.</p>
                    <a href="/services/measurements.php">Подробнее</a>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-delay="200">
                    <svg class="service-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <h2>Проектирование</h2>
                    <p>Индивидуальные проекты систем усиления связи для любых объектов.</p>
                    <a href="/services/design.php">Подробнее</a>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-delay="300">
                    <svg class="service-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18V5l12-2v13"></path>
                        <circle cx="6" cy="18" r="3"></circle>
                        <circle cx="18" cy="16" r="3"></circle>
                    </svg>
                    <h2>Аудит систем</h2>
                    <p>Проверка и оптимизация систем усиления GSM для надежной работы.</p>
                    <a href="/services/audit.php">Подробнее</a>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-delay="400">
                    <svg class="service-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 31" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <path d="M9 3v18"></path>
                        <path d="M15 3v18"></path>
                    </svg>
                    <h2>Адаптация</h2>
                    <p>Интеграция оборудования в интерьер с учетом дизайна проекта.</p>
                    <a href="/services/adaptation.php">Подробнее</a>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-delay="500">
                    <svg class="service-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    <h2>Комплексный аудит</h2>
                    <p>Полное обследование и настройка систем связи для максимальной эффективности.</p>
                    <a href="/services/audit.php">Подробнее</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Футер -->
    <?php include 'footer.php'; ?>

    <!-- Скрипты -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Инициализация AOS
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out'
        });

        // Прелоадер
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            const body = document.body;
            setTimeout(() => {
                preloader.classList.add('hidden');
                body.classList.remove('loading');
            }, 2000); // Задержка 2 секунды для анимации
        });
    </script>

    <!-- JSON-LD разметка -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Усиление сотовой связи",
        "provider": {
            "@type": "Organization",
            "name": "Группа Интегра",
            "url": "https://example.com",
            "logo": "https://example.com/images/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+7-812-123-45-67",
                "contactType": "Customer Service",
                "email": "info@integragroup.ru",
                "areaServed": "RU"
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "ул. Примерная, 123",
                "addressLocality": "Санкт-Петербург",
                "addressCountry": "RU"
            }
        },
        "areaServed": {
            "@type": "Country",
            "name": "Russia"
        },
        "description": "Профессиональные услуги по усилению сотовой связи: замеры сигнала, проектирование, аудит и адаптация оборудования для бизнеса в Москве, Санкт-Петербурге и по всей России.",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Услуги усиления связи",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Замеры сигнала",
                        "url": "https://example.com/services/measurements.php"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Проектирование",
                        "url": "https://example.com/services/design.php"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Аудит систем",
                        "url": "https://example.com/services/audit.php"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Адаптация",
                        "url": "https://example.com/services/adaptation.php"
                    }
                }
            ]
        },
        "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Главная",
                    "item": "https://example.com"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Услуги",
                    "item": "https://example.com/services.php"
                }
            ]
        }
    }
    </script>

    <!-- Аналитика -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-XXXXX-Y');
    </script>
    <script>
        setTimeout(function(){
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
            ym('97138737', "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, ecommerce:"dataLayer" });
        }, 2000);
    </script>
</body>
</html>