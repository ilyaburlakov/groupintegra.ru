<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши проекты | Группа Интегра</title>
    <meta name="description" content="Портфолио выполненных проектов Группы Интегра: усиление сотовой связи для Бизнес-парка Останкино, YES Технопарк, YES Ботаника в Москве, YES Марата в Санкт-Петербурге и других объектов по всей России.">
    <meta name="keywords" content="проекты усиления связи, Группа Интегра, Бизнес-парк Останкино, YES Технопарк, YES Ботаника, YES Марата, Первая Линия, Москва, Санкт-Петербург, Россия">
    <meta property="og:title" content="Наши проекты | Группа Интегра">
    <meta property="og:description" content="Ознакомьтесь с нашими проектами по усилению сотовой связи: Останкино, YES Технопарк, YES Ботаника, YES Марата и другие в Москве, Санкт-Петербурге и России.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/projects.php">
    <meta property="og:image" content="/images/projects-og.png">
    <meta property="og:locale" content="ru_RU">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Группа Интегра">
    <link rel="canonical" href="https://example.com/projects.php">
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

        /* Секция проектов */
        .projects {
            background: var(--bg-color);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr); /* 12-колоночная сетка */
            gap: 24px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .project-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        /* Разная ширина карточек для симметрии */
        .project-card:nth-child(1) {
            grid-column: span 6; /* Ширина 6 колонок */
        }
        .project-card:nth-child(2) {
            grid-column: span 3; /* Ширина 3 колонки */
        }
        .project-card:nth-child(3) {
            grid-column: span 3; /* Ширина 3 колонки */
        }
        .project-card:nth-child(4) {
            grid-column: span 4; /* Ширина 4 колонки */
        }
        .project-card:nth-child(5) {
            grid-column: span 4; /* Ширина 4 колонки */
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: var(--transition);
        }

        .project-card:hover .project-image {
            transform: scale(1.05);
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(30, 58, 138, 0.7); /* Полупрозрачный темно-синий */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: var(--transition);
            padding: 24px;
            text-align: center;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .project-overlay h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--white);
            margin-bottom: 16px;
        }

        .project-overlay a {
            display: inline-block;
            padding: 10px 20px;
            background: transparent;
            border: 2px solid var(--white);
            color: var(--white);
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
        }

        .project-overlay a:hover {
            background: var(--accent-color);
            border-color: var(--accent-color);
            transform: translateY(-2px);
        }

        /* Адаптивность */
        @media (max-width: 1024px) {
            .projects-grid {
                grid-template-columns: repeat(6, 1fr); /* 6-колоночная сетка */
            }

            .project-card:nth-child(1) {
                grid-column: span 6;
            }
            .project-card:nth-child(2) {
                grid-column: span 3;
            }
            .project-card:nth-child(3) {
                grid-column: span 3;
            }
            .project-card:nth-child(4) {
                grid-column: span 3;
            }
            .project-card:nth-child(5) {
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

            .projects-grid {
                grid-template-columns: 1fr; /* Одна колонка */
            }

            .project-card {
                grid-column: span 1;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.75rem;
            }

            .project-overlay h3 {
                font-size: 1.25rem;
            }

            .project-overlay a {
                padding: 8px 16px;
                font-size: 0.9rem;
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

    <!-- Секция проектов -->
    <section class="projects" id="projects">
        <div class="container">
            <h1 data-aos="fade-up">Наши проекты</h1>
            <div class="projects-grid">
                <div class="project-card" data-aos="zoom-in" data-aos-delay="100">
                    <img src="/images/ostankino.jpg" alt="Бизнес-парк Останкино, Москва" class="project-image" loading="lazy">
                    <div class="project-overlay">
                        <h3>Бизнес-парк Останкино, Москва</h3>
                        <a href="/projects/ostankino.php" class="btn">Подробнее</a>
                    </div>
                </div>
                <div class="project-card" data-aos="zoom-in" data-aos-delay="200">
                    <img src="/images/yes_technopark.jpg" alt="YES Технопарк, Москва" class="project-image" loading="lazy">
                    <div class="project-overlay">
                        <h3>YES Технопарк, Москва</h3>
                        <a href="/projects/yes-technopark.php" class="btn">Подробнее</a>
                    </div>
                </div>
                <div class="project-card" data-aos="zoom-in" data-aos-delay="300">
                    <img src="/images/yes_botanica.jpg" alt="YES Ботаника, Москва" class="project-image" loading="lazy">
                    <div class="project-overlay">
                        <h3>YES Ботаника, Москва</h3>
                        <a href="/projects/yes-botanica.php" class="btn">Подробнее</a>
                    </div>
                </div>
                <div class="project-card" data-aos="zoom-in" data-aos-delay="400">
                    <img src="/images/yes_marata.jpg" alt="YES Марата, Санкт-Петербург" class="project-image" loading="lazy">
                    <div class="project-overlay">
                        <h3>YES Марата, Санкт-Петербург</h3>
                        <a href="/projects/yes-marata.php" class="btn">Подробнее</a>
                    </div>
                </div>
                <div class="project-card" data-aos="zoom-in" data-aos-delay="500">
                    <img src="/images/pervaya_liniya.jpg" alt="Первая Линия, Health Care Resort, Зеленогорск" class="project-image" loading="lazy">
                    <div class="project-overlay">
                        <h3>Первая Линия, Health Care Resort, Зеленогорск</h3>
                        <a href="/projects/pervaya-liniya.php" class="btn">Подробнее</a>
                    </div>
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
            }, 2000);
        });
    </script>

    <!-- JSON-LD разметка -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "Наши проекты",
        "description": "Портфолио выполненных проектов Группы Интегра по усилению сотовой связи в Москве, Санкт-Петербурге и по всей России.",
        "url": "https://example.com/projects.php",
        "publisher": {
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
        "mainEntity": {
            "@type": "ItemList",
            "itemListElement": [
                {
                    "@type": "CreativeWork",
                    "name": "Бизнес-парк Останкино, Москва",
                    "url": "https://example.com/projects/ostankino.php",
                    "image": "https://example.com/images/ostankino.jpg"
                },
                {
                    "@type": "CreativeWork",
                    "name": "YES Технопарк, Москва",
                    "url": "https://example.com/projects/yes-technopark.php",
                    "image": "https://example.com/images/yes_technopark.jpg"
                },
                {
                    "@type": "CreativeWork",
                    "name": "YES Ботаника, Москва",
                    "url": "https://example.com/projects/yes-botanica.php",
                    "image": "https://example.com/images/yes_botanica.jpg"
                },
                {
                    "@type": "CreativeWork",
                    "name": "YES Марата, Санкт-Петербург",
                    "url": "https://example.com/projects/yes-marata.php",
                    "image": "https://example.com/images/yes_marata.jpg"
                },
                {
                    "@type": "CreativeWork",
                    "name": "Первая Линия, Health Care Resort, Зеленогорск",
                    "url": "https://example.com/projects/pervaya-liniya.php",
                    "image": "https://example.com/images/pervaya_liniya.jpg"
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
                    "name": "Проекты",
                    "item": "https://example.com/projects.php"
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