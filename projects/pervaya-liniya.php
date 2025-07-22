<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первая Линия Health Care Resort | Зеленогорск | Группа Интегра</title>
    <meta name="description" content="Первая Линия Health Care Resort в Зеленогорске с надежным покрытием сотовой связью от Группы Интегра. Оздоровительный комплекс на берегу Финского залива.">
    <meta name="keywords" content="Первая Линия, Health Care Resort Зеленогорск, сотовое покрытие, Группа Интегра, оздоровительный комплекс СПб, курорт Финский залив">
    <meta property="og:url" content="https://groupintegra.ru/pervaya-liniya">
    <meta property="og:title" content="Первая Линия Health Care Resort | Зеленогорск | Группа Интегра">
    <meta property="og:description" content="Первая Линия Health Care Resort в Зеленогорске с надежным покрытием сотовой связью от Группы Интегра. Оздоровительный комплекс на берегу Финского залива.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/pervaya-liniya.jpg">
    <link rel="canonical" href="https://groupintegra.ru/pervaya-liniya">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        :root {
            --main-color: #2C4B9F;
            --accent-color: #B22530;
            --bg-color: #F8F9FA;
            --text-color: #2D2D2D;
            --white: #FFFFFF;
            --gray: #6C757D;
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
            background-color: var(--white);
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
            padding: 60px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 40px;
            color: var(--text-color);
            text-align: center;
            position: relative;
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
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--main-color);
            color: var(--white);
            border: none;
            border-radius: 5px;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 10px 40px -2px rgba(0, 11, 48, 0.3);
        }

        .btn:hover {
            background: #1A3A8F;
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--main-color);
            color: var(--main-color);
        }

        .btn-outline:hover {
            background: var(--main-color);
            color: var(--white);
        }

        .cover {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-align: center;
            background: url('images/pervaya-liniya.jpg') no-repeat center center/cover;
        }

        .cover::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .cover-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 20px;
        }

        .cover-content .uptitle {
            font-size: 1.2rem;
            font-family: Arial, sans-serif;
            margin-bottom: 10px;
        }

        .cover-content .title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cover-content .descr {
            font-size: 1.5rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            text-align: center;
        }

        .card {
            padding: 20px;
        }

        .card-img {
            width: 100px;
            height: 100px;
            background: url('images/team.png') no-repeat center center/cover;
            border-radius: 50%;
            margin: 0 auto 20px;
        }

        .card-img.flat {
            background-image: url('images/flat.png');
        }

        .card-img.city {
            background-image: url('images/city.png');
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .card-descr {
            font-size: 1rem;
            color: var(--gray);
        }

        .description {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.7;
        }

        .description a {
            color: var(--main-color);
            text-decoration: underline;
        }

        .full-image {
            height: 100vh;
            background: url('images/pervaya-liniya-full.jpg') no-repeat center center/cover;
            background-attachment: scroll;
        }

        .text-section {
            max-width: 800px;
            margin: 0 auto;
        }

        .text-section p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .gallery-img {
            height: 460px;
            background: url('images/pervaya-liniya-gallery1.jpg') no-repeat center center/cover;
            margin-bottom: 20px;
        }

        .gallery-img.second {
            background-image: url('images/pervaya-liniya-gallery2.jpg');
        }

        .impact {
            text-align: center;
        }

        .impact-text {
            font-size: 2rem;
            font-weight: 700;
            max-width: 800px;
            margin: 20px auto;
        }

        .divider {
            width: 100px;
            height: 2px;
            background: var(--accent-color);
            margin: 20px auto;
        }

        @media (max-width: 980px) {
            .cards-grid {
                grid-template-columns: 1fr;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .cover-content .title {
                font-size: 2rem;
            }

            .cover-content .descr {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 576px) {
            .cover-content .title {
                font-size: 1.8rem;
            }

            .cover-content .descr {
                font-size: 1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .impact-text {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="cover" id="cover">
        <div class="cover-content" data-aos="fade-up">
            <div class="uptitle">Группа Интегра</div>
            <h1 class="title">Первая Линия Health Care Resort | Зеленогорск</h1>
            <div class="descr">Надежное покрытие сотовой связью в оздоровительном комплексе на берегу Финского залива</div>
        </div>
    </section>

    <section class="cards" id="cards">
        <div class="container">
            <div class="cards-grid">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-img"></div>
                    <div class="card-title">Объект</div>
                    <div class="card-descr">Оздоровительный комплекс и апартаменты</div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-img flat"></div>
                    <div class="card-title">Задача</div>
                    <div class="card-descr">Стабильная связь в номерах и медицинских зонах</div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-img city"></div>
                    <div class="card-title">Город</div>
                    <div class="card-descr">Зеленогорск</div>
                </div>
            </div>
        </div>
    </section>

    <section class="description" id="description">
        <div class="container">
            <p data-aos="fade-up">Первая Линия Health Care Resort — оздоровительный комплекс на берегу Финского залива, предлагающий современные медицинские услуги и комфортное проживание. <a href="https://pioneer.ru/en/news/152" target="_blank">Подробнее</a>.</p>
        </div>
    </section>

    <section class="full-image" id="full-image" data-aos="fade-up"></section>

    <section class="text-section" id="text-section">
        <div class="container">
            <h2>Решение для Первой Линии</h2>
            <p data-aos="fade-up">Группа Интегра внедрила систему усиления сигнала в Первой Линии Health Care Resort, обеспечив покрытие в номерах, медицинских центрах и общественных зонах.</p>
            <p data-aos="fade-up" data-aos-delay="100">Всепогодные антенны на крыше поддерживают диапазоны 900/1800/2100 МГц, гарантируя стабильную связь для гостей и персонала.</p>
            <p data-aos="fade-up" data-aos-delay="200">100% территории комплекса покрыто связью, что способствует комфорту и эффективности работы курорта.</p>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="container">
            <div class="gallery-grid">
                <div class="gallery-img" data-aos="fade-up"></div>
                <div class="gallery-img second" data-aos="fade-up" data-aos-delay="100"></div>
            </div>
        </div>
    </section>

    <section class="impact" id="impact">
        <div class="container">
            <div class="divider" data-aos="fade-up"></div>
            <div class="impact-text" data-aos="fade-up" data-aos-delay="100">Связью покрыто 100% желаемых помещений</div>
            <div class="divider" data-aos="fade-up" data-aos-delay="200"></div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out'
        });

        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav');
        if (burger && nav) {
            burger.addEventListener('click', () => {
                nav.classList.toggle('active');
                burger.classList.toggle('open');
            });
        }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Первая Линия Health Care Resort | Зеленогорск | Группа Интегра",
        "description": "Первая Линия Health Care Resort в Зеленогорске с надежным покрытием сотовой связью от Группы Интегра. Оздоровительный комплекс на берегу Финского залива.",
        "url": "https://groupintegra.ru/pervaya-liniya",
        "image": "https://groupintegra.ru/images/pervaya-liniya.jpg",
        "publisher": {
            "@type": "Organization",
            "name": "Группа Интегра",
            "logo": {
                "@type": "ImageObject",
                "url": "https://groupintegra.ru/images/logo.png"
            }
        },
        "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Главная",
                    "item": "https://groupintegra.ru/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Первая Линия",
                    "item": "https://groupintegra.ru/pervaya-liniya"
                }
            ]
        }
    }
    </script>

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