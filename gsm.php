<!-- index.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Усиление сотовой связи (СУСС) в Москве и Санкт-Петербурге – Группа Интегра</title>
    <meta name="description" content="Профессиональное усиление сотовой связи (СУСС) в Москве, Санкт-Петербурге и по всей России. Надёжные решения для зданий от Группы Интегра с 2007 года.">
    <meta name="keywords" content="усиление сотовой связи, СУСС, усиление сигнала, сотовая связь в зданиях, Санкт-Петербург, Москва, Россия, цифровизация связи, монтаж СУСС">
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
            color: var(--white);
            border: none;
            border-radius: 3px; /* Радиус углов 3px */
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

        .btn-outline {
            background: transparent;
            border: 2px solid var(--main-color);
            color: var(--main-color);
            border-radius: 3px; /* Радиус углов 3px */
        }

        .btn-outline:hover {
            background: var(--main-color);
            color: var(--white);
        }

        /* Герой секция */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            color: var(--white);
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
            background: url('images/repiter.jpg') no-repeat center center/cover;
            filter: brightness(0.4);
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
            max-width: 600px;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            max-width: 500px;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: flex-start;
        }

        @media (max-width: 768px) {
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
        }

        /* Секция преимуществ */
        .benefits {
            background: var(--bg-color);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 30px;
            justify-items: center;
        }

        .benefit-card {
            background: var(--white);
            border-radius: 0;
            padding: 40px 20px;
            box-shadow: none;
            transition: var(--transition);
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
            width: 100%;
            max-width: 250px;
            height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            background: rgba(var(--main-color), 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }

        .benefit-icon svg {
            width: 40px;
            height: 40px;
            color: var(--main-color);
        }

        .benefit-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--text-color);
            line-height: 1.3;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .benefit-card p {
            color: var(--gray);
            margin-bottom: 20px;
            flex-grow: 1;
            line-height: 1.5;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
        }

        .benefit-card a {
            margin-top: auto;
            width: 100%;
            text-align: center;
        }

        @media (max-width: 1200px) {
            .benefits-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .benefits-grid {
                grid-template-columns: 1fr;
            }

            .benefit-card {
                max-width: 100%;
                height: 400px;
            }
        }

        @media (max-width: 576px) {
            .benefit-card {
                height: 350px;
            }

            .benefit-card h3 {
                font-size: 1.2rem;
            }

            .benefit-card p {
                font-size: 0.95rem;
                -webkit-line-clamp: 4;
            }
        }

        /* Секция процесса */
        .process {
            background: transparent;
            padding: 80px 0;
        }

        .accordion {
            max-width: 900px;
            margin: 0 auto;
        }

        .accordion-item {
            border-bottom: 1px solid #E5E7EB;
        }

        .accordion-header {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 20px 0;
            background: transparent;
            border: none;
            text-align: left;
            cursor: pointer;
            transition: var(--transition);
        }

        .accordion-icon {
            margin-right: 15px;
        }

        .accordion-icon svg {
            width: 24px;
            height: 24px;
            color: var(--main-color);
            transition: var(--transition);
        }

        .accordion-header:hover .accordion-icon svg {
            color: var(--accent-color);
            transform: scale(1.1);
        }

        .accordion-header h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-color);
            flex-grow: 1;
        }

        .accordion-toggle {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .accordion-toggle svg {
            width: 20px;
            height: 20px;
            color: var(--gray);
            transition: var(--transition);
        }

        .accordion-item.active .accordion-toggle svg {
            transform: rotate(180deg);
            color: var(--main-color);
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            padding: 0 20px;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }

        .accordion-content p {
            font-size: 1rem;
            color: var(--gray);
            line-height: 1.6;
            padding-bottom: 20px;
        }

        .accordion-item.active .accordion-content {
            max-height: 200px;
            padding: 10px 20px;
        }

        .accordion-cta {
            text-align: center;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .accordion {
                max-width: 100%;
                padding: 0 20px;
            }

            .accordion-header h3 {
                font-size: 1.2rem;
            }

            .accordion-content p {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 576px) {
            .accordion-header {
                padding: 15px 0;
            }

            .accordion-header h3 {
                font-size: 1.1rem;
            }

            .accordion-icon svg {
                width: 20px;
                height: 20px;
            }

            .accordion-toggle svg {
                width: 18px;
                height: 18px;
            }
        }

        /* Секция решений */
        .solutions {
            background: var(--bg-color);
        }

        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            justify-items: center;
        }

        .solution-card {
            border-radius: 0;
            overflow: hidden;
            box-shadow: none;
            transition: var(--transition);
            position: relative;
            width: 100%;
            max-width: 400px;
            height: 500px;
            display: flex;
            flex-direction: column;
        }

        .solution-card:hover {
            transform: translateY(-10px);
        }

        .solution-image {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }

        .solution-content {
            padding: 25px;
            background: var(--white);
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 250px;
        }

        .solution-content h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--text-color);
            line-height: 1.3;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .solution-content p {
            color: var(--gray);
            margin-bottom: 20px;
            flex-grow: 1;
            line-height: 1.5;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
        }

        .solution-content button {
            margin-top: auto;
            width: 100%;
            text-align: center;
        }

        @media (max-width: 1200px) {
            .solutions-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .solutions-grid {
                grid-template-columns: 1fr;
            }

            .solution-card {
                max-width: 100%;
                height: 450px;
            }

            .solution-image {
                height: 200px;
            }

            .solution-content {
                min-height: 200px;
            }
        }

        @media (max-width: 576px) {
            .solution-card {
                height: 400px;
            }

            .solution-image {
                height: 150px;
            }

            .solution-content h3 {
                font-size: 1.2rem;
            }

            .solution-content p {
                font-size: 0.95rem;
                -webkit-line-clamp: 3;
            }
        }

        /* Секция проектов */
        .projects {
            background: var(--light);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .project-card {
            border-radius: 0;
            overflow: hidden;
            position: relative;
            height: 300px;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .project-card.full-width {
            grid-column: 1 / -1;
            height: 400px;
        }

        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .project-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 25px;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
            color: var(--white);
            transform: translateY(50px);
            opacity: 0;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            height: 100%;
        }

        .project-card:hover .project-overlay {
            transform: translateY(0);
            opacity: 1;
        }

        .project-card:hover .project-image {
            transform: scale(1.05);
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-overlay h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            line-height: 1.3;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .project-overlay a {
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .projects-grid {
                grid-template-columns: 1fr;
            }

            .project-card.full-width {
                height: 350px;
            }

            .project-card {
                height: 250px;
            }
        }

        @media (max-width: 576px) {
            .project-card.full-width {
                height: 300px;
            }

            .project-card {
                height: 200px;
            }

            .project-overlay h3 {
                font-size: 1.1rem;
            }
        }

        /* Секция рекомендаций */
        .recommendations {
            background: var(--bg-color);
        }

        .recommendations-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            justify-items: center;
        }

        .recommendation-card {
            background: var(--light);
            padding: 30px;
            border-radius: 0;
            box-shadow: none;
            position: relative;
            width: 100%;
            max-width: 400px;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .recommendation-card:before {
            content: '"';
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 5rem;
            color: rgba(var(--main-color), 0.1);
            font-family: serif;
            line-height: 1;
        }

        .recommendation-text {
            font-style: italic;
            margin-bottom: 20px;
            color: var(--text-color);
            position: relative;
            z-index: 1;
            flex-grow: 1;
        }

        .recommendation-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }

        .author-info h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .author-info p {
            font-size: 0.9rem;
            color: var(--gray);
        }

        /* Секция CTA */
        .cta {
            background: linear-gradient(135deg, #3A7BD5 0%, var(--main-color) 100%);
            color: var(--white);
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

        .cta-form {
            max-width: 600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 10px;
        }

        .cta-form input {
            padding: 15px 20px;
            border: none;
            border-radius: 3px; /* Радиус углов 3px */
            font-size: 1rem;
        }

        /* Стили для секции партнеров */
        .partners {
            background: var(--bg-color);
            padding: 80px 0;
        }

        .partners-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            justify-items: center;
        }

        .partner-card {
            background: var(--white);
            border-radius: 0;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: var(--transition);
            width: 100%;
            max-width: 300px;
        }

        .partner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .partner-preview {
            cursor: pointer;
            text-align: center;
        }

        .pdf-preview {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border: 1px solid #eee;
            margin-bottom: 15px;
        }

        .partner-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .partner-card p {
            color: var(--gray);
            font-size: 0.9rem;
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
            background: var(--white);
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
            border-radius: 3px; /* Радиус углов 3px */
            font-size: 1rem;
        }

        .modal-form textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* Анимации */
        [data-aos] {
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        [data-aos="fade-up"] {
            transform: translateY(30px);
            opacity: 0;
        }

        [data-aos].aos-animate {
            transform: translate(0);
            opacity: 1;
        }

        /* Адаптивность */
        @media (max-width: 1200px) {
            .benefits-grid,
            .solutions-grid,
            .recommendations-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            section {
                padding: 70px 0;
            }

            .section-title {
                font-size: 2rem;
                margin-bottom: 40px;
            }

            .cta-form {
                grid-template-columns: 1fr;
            }

            .benefits-grid,
            .solutions-grid,
            .recommendations-grid {
                grid-template-columns: 1fr;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .partners-grid {
                grid-template-columns: 1fr;
            }

            .partner-card {
                max-width: 70%;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 1.8rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }
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
    align-items: center;
    justify-content: center;
    z-index: 9999;
    transition: opacity 0.6s ease;
}

.preloader-logo {
    width: 200px;
    height: auto;
    animation: zoomIn 2s ease-in-out forwards;
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

.preloader.hidden {
    opacity: 0;
    pointer-events: none;
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
            <h1 data-aos="fade-up">Построение профессиональных DAS систем усиления связи для среднего и крупного бизнеса</h1>
            <p data-aos="fade-up" data-aos-delay="100">На любых объектах</p>
            <p data-aos="fade-up" data-aos-delay="100">Санкт-Петербург | Москва | Россия</p>
            <div class="hero-buttons" data-aos="fade-up" data-aos-delay="200">
                <button class="btn btn-primary" onclick="openModal('Заказать консультацию')">Заказать консультацию</button>
                <a href="#projects" class="btn btn-outline">Наши проекты</a>
            </div>
        </div>
    </div>
</section>

<!-- Секция преимуществ -->
<section class="benefits" id="benefits">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Наши ключевые компетенции</h2>
        <div class="benefits-grid">
            <div class="benefit-card" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h3>Проектирование</h3>
                <p>Выполним проектирование уже на этапе "котлована" согласно архитектурным планам объекта, подготовим гибкие решения, учтем возможные изменения в будущем.</p>
                <a href="/services/design.php" class="btn btn-outline">Подробнее</a>
            </div>
            <div class="benefit-card" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                    </svg>
                </div>
                <h3>Адаптация</h3>
                <p>Проведем адаптацию оборудования и комплектующих под требования дизайна объекта. Гармонично впишемся в ваш дизайн, не нарушая его эстетики.</p>
                <a href="/services/adaptation.php" class="btn btn-outline">Подробнее</a>
            </div>
            <div class="benefit-card" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <h3>Монтаж</h3>
                <p>Собственный штат инженерно-технических работников, монтажников и проектировщиков позволяет строить качественные системы любой сложности.</p>
                <a href="/services/installation.php" class="btn btn-outline">Подробнее</a>
            </div>
            <div class="benefit-card" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <h3>Аудит</h3>
                <p>Регулярная проверка и аудит систем усиления GSM необходимы для обеспечения надежной связи в различных помещениях и объектах.</p>
                <a href="/services/audit.php" class="btn btn-outline">Подробнее</a>
            </div>
            <div class="benefit-card" data-aos="fade-up" data-aos-delay="500">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <h3>Сопровождение</h3>
                <p>Бескомпромиссная поддержка во время и после гарантийного срока. Оперативное решение любых вопросов в сжатые сроки.</p>
                <a href="/services/support.php" class="btn btn-outline">Подробнее</a>
            </div>
        </div>
    </div>
</section>

<!-- Секция процесса -->
<section class="process" id="process">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Этапы работы по усилению сотовой связи</h2>
        <div class="accordion" data-aos="fade-up" data-aos-delay="100">
            <div class="accordion-item">
                <button class="accordion-header">
                    <div class="accordion-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h3>Анализ объекта</h3>
                    <span class="accordion-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                </button>
                <div class="accordion-content">
                    <p>Проводим обследование объекта, измеряем уровень сигнала и определяем потребности.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <div class="accordion-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Проектирование</h3>
                    <span class="accordion-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                </button>
                <div class="accordion-content">
                    <p>Разрабатываем индивидуальный проект системы усиления связи (СУСС).</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <div class="accordion-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </div>
                    <h3>Монтаж</h3>
                    <span class="accordion-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                </button>
                <div class="accordion-content">
                    <p>Устанавливаем оборудование с минимальными помехами для вашего бизнеса.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <div class="accordion-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <path d="M3 6h18"></path>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                    </div>
                    <h3>Настройка и тестирование</h3>
                    <span class="accordion-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                </button>
                <div class="accordion-content">
                    <p>Проводим настройку системы и тестируем качество сигнала.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <div class="accordion-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>Сдача проекта</h3>
                    <span class="accordion-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                </button>
                <div class="accordion-content">
                    <p>Передаём готовую систему с гарантией и инструкциями по эксплуатации.</p>
                </div>
            </div>
        </div>
        <div class="accordion-cta" data-aos="fade-up" data-aos-delay="200">
            <button class="btn btn-secondary" onclick="openModal('Консультация по этапам работы')">Заказать консультацию</button>
        </div>
    </div>
</section>

<!-- Секция решений -->
<section class="solutions" id="solutions">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Комплексные решения по усилению сотовой связи</h2>
        <div class="solutions-grid">
            <div class="solution-card" data-aos="fade-up" data-aos-delay="100">
                <img src="images/gsmoffice.jpg" alt="Усиление сотовой связи для офисов" class="solution-image" loading="lazy">
                <div class="solution-content">
                    <h3>Для офисов</h3>
                    <p>Обеспечим стабильный сигнал для офисов в Москве и Санкт-Петербурге. Решения для любых операторов.</p>
                    <button class="btn btn-secondary" onclick="openModal('Для офисов')">Подобрать оборудование</button>
                </div>
            </div>
            <div class="solution-card" data-aos="fade-up" data-aos-delay="200">
                <img src="images/gsmuot.jpeg" alt="Усиление сотовой связи для удалённых объектов" class="solution-image" loading="lazy">
                <div class="solution-content">
                    <h3>Для удалённых объектов</h3>
                    <p>Надёжная связь для удалённых объектов в России. Решения для сложных условий.</p>
                    <button class="btn btn-secondary" onclick="openModal('Для удалённых объектов')">Подобрать оборудование</button>
                </div>
            </div>
            <div class="solution-card" data-aos="fade-up" data-aos-delay="300">
                <img src="images/gsmprom.jpg" alt="Усиление сотовой связи для промышленности" class="solution-image" loading="lazy">
                <div class="solution-content">
                    <h3>Для промышленности</h3>
                    <p>Усиление сигнала для промышленных объектов. Высокая надёжность и производительность.</p>
                    <button class="btn btn-secondary" onclick="openModal('Для промышленности')">Подобрать оборудование</button>
                </div>
            </div>
            <div class="solution-card" data-aos="fade-up" data-aos-delay="400">
                <img src="images/gsnretail.png" alt="Усиление сотовой связи для магазинов и складов" class="solution-image" loading="lazy">
                <div class="solution-content">
                    <h3>Для магазинов и складов</h3>
                    <p>Стабильный сигнал для магазинов и складов в Москве и Санкт-Петербурге. Улучшение связи для бизнеса.</p>
                    <button class="btn btn-secondary" onclick="openModal('Для магазинов и складов')">Подобрать оборудование</button>
                </div>
            </div>
            <div class="solution-card" data-aos="fade-up" data-aos-delay="500">
                <img src="images/gsmguest.png" alt="Усиление сотовой связи для отелей и общепита" class="solution-image" loading="lazy">
                <div class="solution-content">
                    <h3>Для отелей и ресторанов</h3>
                    <p>Качественная связь для отелей и ресторанов. Комфорт для гостей и персонала.</p>
                    <button class="btn btn-secondary" onclick="openModal('Для отелей и ресторанов')">Подобрать оборудование</button>
                </div>
            </div>
            <div class="solution-card" data-aos="fade-up" data-aos-delay="600">
                <img src="images/gsmparking.jpeg" alt="Усиление сотовой связи для паркингов и подземных помещений" class="solution-image" loading="lazy">
                <div class="solution-content">
                    <h3>Для паркингов и подземных помещений</h3>
                    <p>Решения для паркингов и подземных помещений. Связь даже в сложных условиях.</p>
                    <button class="btn btn-secondary" onclick="openModal('Для паркингов и подземных помещений')">Подобрать оборудование</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Секция проектов -->
<section class="projects" id="projects">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Примеры выполненных проектов</h2>
        <div class="projects-grid">
            <div class="project-card full-width" data-aos="fade-up" data-aos-delay="100">
                <img src="images/ostankino.jpg" alt="Бизнес-парк Останкино, Москва" class="project-image" loading="lazy">
                <div class="project-overlay">
                    <h3>Бизнес-парк Останкино, Москва</h3>
                    <a href="/projects/ostankino.php" class="btn btn-outline">Подробнее</a>
                </div>
            </div>
            <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                <img src="images/yes_technopark.jpg" alt="YES Технопарк, Москва" class="project-image" loading="lazy">
                <div class="project-overlay">
                    <h3>YES Технопарк, Москва</h3>
                    <a href="/projects/yes-technopark.php" class="btn btn-outline">Подробнее</a>
                </div>
            </div>
            <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                <img src="images/yes_botanica.jpg" alt="YES Ботаника, Москва" class="project-image" loading="lazy">
                <div class="project-overlay">
                    <h3>YES Ботаника, Москва</h3>
                    <a href="/projects/yes-botanica.php" class="btn btn-outline">Подробнее</a>
                </div>
            </div>
            <div class="project-card" data-aos="fade-up" data-aos-delay="400">
                <img src="images/yes_marata.jpg" alt="YES Марата, Санкт-Петербург" class="project-image" loading="lazy">
                <div class="project-overlay">
                    <h3>YES Марата, Санкт-Петербург</h3>
                    <a href="/projects/yes-marata.php" class="btn btn-outline">Подробнее</a>
                </div>
            </div>
            <div class="project-card" data-aos="fade-up" data-aos-delay="500">
                <img src="images/pevraya_linia.jpg" alt="Перая Линия, Health Care Resort, Зеленогорск" class="project-image" loading="lazy">
                <div class="project-overlay">
                    <h3>Перая Линия, Health Care Resort, Зеленогорск</h3>
                    <a href="/projects/pervaya-liniya.php" class="btn btn-outline">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Секция партнеров -->
<section class="partners" id="partners">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">От наших партнеров</h2>
        <div class="partners-grid">
            <div class="partner-card" data-aos="fade-up" data-aos-delay="100">
                <div class="partner-preview" onclick="openPdf('bazis.pdf')">
                    <img src="images/bazis-preview.jpg" alt="Превью Базис PDF" class="pdf-preview">
                    <h3>Базис</h3>
                    <p>Письмо от компании Базис</p>
                </div>
            </div>
            <div class="partner-card" data-aos="fade-up" data-aos-delay="200">
                <div class="partner-preview" onclick="openPdf('proactive.pdf')">
                    <img src="images/proactive-preview.jpg" alt="Превью Проактив PDF" class="pdf-preview">
                    <h3>Проактив Безопасность</h3>
                    <p>Письмо от компании Проактив Безопасность</p>
                </div>
            </div>
            <div class="partner-card" data-aos="fade-up" data-aos-delay="300">
                <div class="partner-preview" onclick="openPdf('softmak.pdf')">
                    <img src="images/softmak-preview.jpg" alt="Превью Софтмак PDF" class="pdf-preview">
                    <h3>Софтмак</h3>
                    <p>Письмо от компании Софтмак</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Секция CTA -->
<section class="cta" id="contact">
    <div class="container">
        <h2 data-aos="fade-up">Готовы улучшить сотовую связь в вашем здании?</h2>
        <p data-aos="fade-up" data-aos-delay="100">Оставьте заявку и наш специалист свяжется с вами для консультации</p>
        <form class="cta-form" data-aos="fade-up" data-aos-delay="200" id="ctaForm">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="text" name="website" style="display: none;">
            <input type="tel" name="phone" placeholder="Ваш телефон" required>
            <button type="submit" class="btn btn-secondary">Отправить заявку</button>
            <input type="hidden" name="form_type" value="CTA Form">
        </form>
    </div>
</section>

<!-- Подключаем футер -->
<?php include 'footer.php'; ?>

<!-- Модальное окно -->
<div class="modal" id="modal">
    <div class="modal-content">
        <span class="modal-close" onclick="closeModal()">×</span>
        <h3 id="modalTitle">Подобрать оборудование</h3>
        <form class="modal-form" id="modalForm">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="tel" name="phone" placeholder="Ваш телефон" required>
            <input type="email" name="email" placeholder="Ваш email">
            <textarea name="message" placeholder="Опишите ваш объект (площадь, этажность, материалы стен и т.д.)"></textarea>
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

window.addEventListener('load', function() {
    const preloader = document.getElementById('preloader');
    const body = document.body;
    setTimeout(function() {
        preloader.classList.add('hidden');
        body.classList.remove('loading');
    }, 2000);
});

    // Обработка формы CTA
    document.getElementById('ctaForm').addEventListener('submit', function(e) {
        e.preventDefault();
        submitForm(this);
    });

    // Обработка модальной формы
    document.getElementById('modalForm').addEventListener('submit', function(e) {
        e.preventDefault();
        submitForm(this);
    });

    function submitForm(form) {
        const formData = new FormData(form);
        formData.append('website', ''); // Добавляем скрытое поле
        
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        
        submitBtn.disabled = true;
        submitBtn.textContent = 'Отправка...';
        
        fetch('sendmail.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) throw new Error('Ошибка сети');
            return response.json();
        })
        .then(data => {
            if (data.success) {
                showAlert('success', data.message);
                form.reset();
                if (form.id === 'modalForm') closeModal();
            } else {
                showAlert('error', data.message || 'Произошла ошибка');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showAlert('error', 'Ошибка соединения с сервером');
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        });
    }

    function showAlert(type, message) {
        const alert = document.createElement('div');
        alert.className = `alert alert-${type}`;
        alert.textContent = message;
        alert.style.position = 'fixed';
        alert.style.top = '20px';
        alert.style.right = '20px';
        alert.style.padding = '15px';
        alert.style.background = type === 'success' ? '#4CAF50' : '#F44336';
        alert.style.color = 'white';
        alert.style.borderRadius = '4px';
        alert.style.zIndex = '9999';
        
        document.body.appendChild(alert);
        
        setTimeout(() => {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }, 3000);
    }

    // Обновляем тип формы в модальном окне
    function openModal(objectType) {
        const modal = document.getElementById('modal');
        const modalTitle = document.getElementById('modalTitle');
        const formType = document.getElementById('modalFormType');
        
        modalTitle.textContent = 'Подобрать оборудование для ' + objectType;
        formType.value = 'Modal Form: ' + objectType;
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

    const accordionItems = document.querySelectorAll('.accordion-item');
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        header.addEventListener('click', () => {
            accordionItems.forEach(i => {
                if (i !== item) {
                    i.classList.remove('active');
                }
            });
            item.classList.toggle('active');
        });
    });

    function openPdf(pdfFile) {
        window.open(pdfFile, '_blank', 'width=800,height=600');
    }
</script>
</body>
</html>