<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слаботочные системы | Группа Интегра</title>
    <meta name="description" content="Раздел слаботочных систем Группы Интегра в разработке. Цифровые решения для строительства с онлайн-контролем: СКС, видеонаблюдение, СКУД, Wi-Fi и GSM-усиление в Москве, Санкт-Петербурге и по всей России.">
    <meta name="keywords" content="слаботочные системы, Группа Интегра, цифровизация строительства, онлайн-контроль, СКС, видеонаблюдение, СКУД, Wi-Fi, GSM-усиление, Москва, Санкт-Петербург">
    <meta property="og:title" content="Слаботочные системы | Группа Интегра">
    <meta property="og:description" content="Скоро здесь: цифровые решения для слаботочных систем с онлайн-контролем для заказчиков в Москве, Санкт-Петербурге и по всей России.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/weak-current.php">
    <meta property="og:image" content="/images/weak-current-og.png">
    <meta property="og:locale" content="ru_RU">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Группа Интегра">
    <link rel="canonical" href="https://example.com/weak-current.php">
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
            font-size: 2rem;
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

        /* Секция слаботочных систем */
        .weak-current {
            background: var(--bg-color);
        }

        .weak-current-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 48px;
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .weak-current-icon {
            width: 64px;
            height: 64px;
            margin-bottom: 24px;
            stroke: var(--primary-color);
        }

        .weak-current-content p {
            font-size: 1.1rem;
            color: var(--gray);
            margin-bottom: 24px;
            line-height: 1.6;
        }

        .tag-cloud {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin: 24px 0;
        }

        .tag {
            background: var(--border-color);
            color: var(--text-color);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: var(--transition);
        }

        .tag:hover {
            background: var(--primary-color);
            color: var(--white);
            transform: translateY(-2px);
        }

        .contact-info {
            margin: 24px 0;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            font-size: 1rem;
            color: var(--gray);
        }

        .contact-item svg {
            width: 20px;
            height: 20px;
            stroke: var(--accent-color);
        }

        .contact-item a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .contact-item a:hover {
            color: var(--accent-color);
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: var(--primary-color);
            color: var(--white);
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            margin: 16px 0;
        }

        .btn:hover {
            background: #1E40AF;
            transform: translateY(-2px);
        }

        .back-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: var(--transition);
        }

        .back-link:hover {
            color: var(--accent-color);
            text-decoration: underline;
        }

        /* Адаптивность */
        @media (max-width: 768px) {
            section {
                padding: 80px 0;
            }

            h1 {
                font-size: 2.25rem;
            }

            .weak-current-content {
                padding: 32px;
            }

            h2 {
                font-size: 1.75rem;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.75rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            .weak-current-content p {
                font-size: 1rem;
            }

            .tag {
                font-size: 0.85rem;
                padding: 6px 12px;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.95rem;
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

    <!-- Секция слаботочных систем -->
    <section class="weak-current" id="weak-current">
        <div class="container">
            <div class="weak-current-content" data-aos="fade-up">
                <svg class="weak-current-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                    <polyline points="13 2 13 9 20 9"></polyline>
                </svg>
                <h1>Цифровые слаботочные системы</h1>
                <p>Раздел "Слаботочные системы" находится в стадии разработки. Скоро здесь появится подробная информация о наших решениях в области построения слаботочных сетей любой сложности.</p>
                <p>Мы внедряем цифровизацию строительства, предоставляя заказчикам онлайн-контроль хода проектов через собственную цифровую платформу. Следите за прогрессом в реальном времени, получайте отчеты и управляйте процессом из любой точки мира.</p>
                <div class="tag-cloud" data-aos="fade-up" data-aos-delay="200">
                    <span class="tag">СКС</span>
                    <span class="tag">Видеонаблюдение</span>
                    <span class="tag">СКУД</span>
                    <span class="tag">Wi-Fi сети</span>
                    <span class="tag">GSM-усиление</span>
                    <span class="tag">Охранная сигнализация</span>
                    <span class="tag">Пожарная сигнализация</span>
                    <span class="tag">Автоматизация зданий</span>
                    <span class="tag">Интернет вещей (IoT)</span>
                </div>
                <div class="contact-info" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <a href="tel:+78124430123" aria-label="Позвонить">+7 (812) 443-01-23</a>
                    </div>
                    <div class="contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <a href="mailto:info@groupintegra.ru" aria-label="Написать на почту">info@groupintegra.ru</a>
                    </div>
                </div>
                <a href="/contacts.php" class="btn">Связаться с нами</a>
                <p><a href="/" class="back-link">← Вернуться на главную</a></p>
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
        "@type": "WebPage",
        "name": "Слаботочные системы",
        "description": "Раздел слаботочных систем Группы Интегра в разработке. Цифровые решения для строительства с онлайн-контролем: СКС, видеонаблюдение, СКУД, Wi-Fi и GSM-усиление.",
        "url": "https://example.com/weak-current.php",
        "publisher": {
            "@type": "Organization",
            "name": "Группа Интегра",
            "url": "https://example.com",
            "logo": "https://example.com/images/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+7-812-443-0123",
                "contactType": "Customer Service",
                "email": "info@groupintegra.ru",
                "areaServed": "RU"
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "ул. Примерная, 123",
                "addressLocality": "Санкт-Петербург",
                "addressCountry": "RU"
            }
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
                    "name": "Слаботочные системы",
                    "item": "https://example.com/weak-current.php"
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