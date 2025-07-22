<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Группа Интегра | Бизнес-парк Останкино. Москва</title>
    <meta name="description" content="Покрытие сотовой связью всей площади мест общего пользования и технических помещений.">
    <meta property="og:url" content="https://groupintegra.ru/ostankino">
    <meta property="og:title" content="Группа Интегра | Бизнес-парк Останкино. Москва">
    <meta property="og:description" content="Покрытие сотовой связью всей площади паркинга и мест общего пользования">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/ostankino-business-p.jpg">
    <link rel="canonical" href="https://groupintegra.ru/ostankino">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        :root {
            --main-color: #2C4B9F; /* Синий */
            --accent-color: #B22530; /* Красный */
            --bg-color: #F8F9FA; /* Светлый фон */
            --text-color: #2D2D2D; /* Темный текст */
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

        /* Cover Section */
        .cover {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-align: center;
            background: url('images/ostankino-business-p.jpg') no-repeat center center/cover;
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

        /* Cards Section */
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

        /* Description Section */
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

        /* Full Image Section */
        .full-image {
            height: 100vh;
            background: url('images/181821.jpg') no-repeat center center/cover;
            background-attachment: scroll;
        }

        /* Text Section */
        .text-section {
            max-width: 800px;
            margin: 0 auto;
        }

        .text-section p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        /* Gallery Section */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .gallery-img {
            height: 460px;
            background: url('images/XXXL_9.jpg') no-repeat center center/cover;
            margin-bottom: 20px;
        }

        .gallery-img.second {
            background-image: url('images/XXXL_10.jpg');
        }

        /* Impact Section */
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

        /* Responsive */
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
    <!-- Подключаем хедер -->
    <?php include 'header.php'; ?>

    <!-- Cover Section -->
    <section class="cover" id="cover">
        <div class="cover-content" data-aos="fade-up">
            <div class="uptitle">Группа Интегра</div>
            <h1 class="title">Бизнес-парк Останкино. Москва</h1>
            <div class="descr">Покрытие сотовой связью всей площади мест общего пользования и технических помещений</div>
        </div>
    </section>

    <!-- Cards Section -->
    <section class="cards" id="cards">
        <div class="container">
            <div class="cards-grid">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-img"></div>
                    <div class="card-title">Объект</div>
                    <div class="card-descr">70 000 квадратных метров</div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-img flat"></div>
                    <div class="card-title">Задача</div>
                    <div class="card-descr">Устойчивая связь в МОПах и лифтовых холлах</div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-img city"></div>
                    <div class="card-title">Город</div>
                    <div class="card-descr">Москва</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Description Section -->
    <section class="description" id="description">
        <div class="container">
            <p data-aos="fade-up">ОСТАНКИНО <a href="https://offer.pioneer.ru/6e9fa2a7-7ec3-eb11-bba0-005056bfae62(49).html" target="_blank">BUSINESS PARK</a> — это офисный комплекс из 6 зданий, который сочетает в своем образе современную европейскую архитектуру, функционализм, новейшие технологии и элементы природного ландшафта.</p>
        </div>
    </section>

    <!-- Full Image Section -->
    <section class="full-image" id="full-image" data-aos="fade-up"></section>

    <!-- Text Section -->
    <section class="text-section" id="text-section">
        <div class="container">
            <p data-aos="fade-up">Для улучшения качества мобильной связи в офисном комплексе ОСТАНКИНО BUSINESS PARK была внедрена комплексная система усиления сигнала. В зданиях комплекса установлены внутренние антенны в лифтовых холлах и местах общего пользования. Это обеспечило стабильную связь во всех необходимых зонах.</p>
            <p data-aos="fade-up" data-aos-delay="100">На крышах зданий размещены всепогодные уличные антенны для приема сигнала от базовых станций операторов связи. Установленные репитеры работают в диапазонах 900/1800/2100 МГц, что позволяет поддерживать все современные стандарты мобильной связи.</p>
            <p data-aos="fade-up" data-aos-delay="200">Благодаря этим техническим решениям, качественным мобильным покрытием обеспечено 100% площади офисного комплекса, включая все рабочие помещения, переговорные комнаты и зоны отдыха. Это полностью соответствует концепции ОСТАНКИНО BUSINESS PARK, сочетающего современную европейскую архитектуру с передовыми технологиями для создания комфортной рабочей среды.</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <div class="container">
            <div class="gallery-grid">
                <div class="gallery-img" data-aos="fade-up"></div>
                <div class="gallery-img second" data-aos="fade-up" data-aos-delay="100"></div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact" id="impact">
        <div class="container">
            <div class="divider" data-aos="fade-up"></div>
            <div class="impact-text" data-aos="fade-up" data-aos-delay="100">Связью покрыто 100% желаемых помещений</div>
            <div class="divider" data-aos="fade-up" data-aos-delay="200"></div>
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

        // Мобильное меню (если не реализовано в header.php)
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav');
        if (burger && nav) {
            burger.addEventListener('click', () => {
                nav.classList.toggle('active');
                burger.classList.toggle('open');
            });
        }
    </script>
</body>
</html>