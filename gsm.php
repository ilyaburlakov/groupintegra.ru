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
            --main-color: #4A90E2;
            --accent-color: #FF6F61;
            --bg-color: #F8F9FA;
            --text-color: #2D2D2D;
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
            inset: 0;
            background: var(--white);
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
            border-radius: 3px;
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
            border-radius: 3px;
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

/* Секция компетенций - СИММЕТРИЧНАЯ ВЕРСИЯ */
.benefits {
    background: var(--bg-color);
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-top: 40px;
}

.benefit-card {
    background: var(--white);
    padding: 40px 30px;
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: var(--transition);
    position: relative;
    overflow: hidden;
    text-align: center;
    height: 580px; /* Фиксированная высота для симметрии */
    display: flex;
    flex-direction: column;
}

.benefit-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, var(--main-color), var(--accent-color));
}

.benefit-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

.benefit-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--main-color), #3A7BD5);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    color: var(--white);
    position: relative;
    overflow: hidden;
}

.benefit-icon::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.3) 50%, transparent 70%);
    transform: translateX(-100%);
    transition: var(--transition);
}

.benefit-card:hover .benefit-icon::after {
    transform: translateX(100%);
}

.benefit-icon svg {
    width: 36px;
    height: 36px;
    z-index: 1;
}

.benefit-card h3 {
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: var(--text-color);
    height: 60px; /* Фиксированная высота заголовка */
    display: flex;
    align-items: center;
    justify-content: center;
}

.benefit-card p {
    color: var(--gray);
    line-height: 1.6;
    margin-bottom: 25px;
    font-size: 0.95rem;
    height: 80px; /* Фиксированная высота описания */
    display: flex;
    align-items: center;
}

.benefit-features {
    margin-bottom: 25px;
    flex-grow: 1;
}

.benefit-features ul {
    list-style: none;
    text-align: left;
    margin-top: 15px;
}

.benefit-features li {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
    font-size: 0.9rem;
    color: var(--gray);
}

.benefit-features li::before {
    content: '✓';
    color: var(--main-color);
    font-weight: bold;
    margin-right: 10px;
    font-size: 1rem;
    min-width: 16px;
}

.benefit-stats {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    padding: 15px;
    background: var(--bg-color);
    border-radius: 6px;
}

.benefit-stat {
    text-align: center;
}

.benefit-stat-number {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--main-color);
    display: block;
}

.benefit-stat-label {
    font-size: 0.8rem;
    color: var(--gray);
}

/* Адаптивность для симметричной сетки */
@media (max-width: 1200px) {
    .benefits-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .benefit-card {
        height: auto; /* Убираем фиксированную высоту на меньших экранах */
    }
    
    .benefit-card h3 {
        height: auto;
    }
    
    .benefit-card p {
        height: auto;
    }
}

@media (max-width: 768px) {
    .benefits-grid {
        grid-template-columns: 1fr;
    }

    .benefit-stats {
        flex-direction: column;
        gap: 10px;
    }
}


        /* Секция процесса - ПЕРЕРАБОТАННАЯ */
        .process {
            background: var(--light);
            position: relative;
        }

        .process-timeline {
            position: relative;
            margin-top: 50px;
        }

        .process-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, var(--main-color), var(--accent-color));
            transform: translateX(-50%);
        }

        .process-step {
            display: flex;
            align-items: center;
            margin-bottom: 80px;
            position: relative;
        }

        .process-step:nth-child(even) {
            flex-direction: row-reverse;
        }

        .process-step:nth-child(even) .process-content {
            text-align: right;
        }

        .process-number {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--main-color), var(--accent-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--white);
            box-shadow: 0 8px 25px rgba(74, 144, 226, 0.3);
            z-index: 2;
        }

        .process-content {
            width: calc(50% - 40px);
            background: var(--white);
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            position: relative;
            transition: var(--transition);
        }

        .process-content::before {
            content: '';
            position: absolute;
            top: 50%;
            width: 0;
            height: 0;
            border: 15px solid transparent;
        }

        .process-step:nth-child(odd) .process-content::before {
            right: -30px;
            border-left-color: var(--white);
            transform: translateY(-50%);
        }

        .process-step:nth-child(even) .process-content::before {
            left: -30px;
            border-right-color: var(--white);
            transform: translateY(-50%);
        }

        .process-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.12);
        }

        .process-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--main-color), #3A7BD5);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            margin-bottom: 20px;
        }

        .process-icon svg {
            width: 24px;
            height: 24px;
        }

        .process-content h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .process-content p {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .process-details {
            margin-top: 20px;
        }

        .process-details ul {
            list-style: none;
            margin-top: 10px;
        }

        .process-details li {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: var(--gray);
        }

        .process-details li::before {
            content: '→';
            color: var(--accent-color);
            font-weight: bold;
            margin-right: 10px;
        }

        .process-duration {
            display: inline-block;
            padding: 5px 12px;
            background: var(--bg-color);
            color: var(--main-color);
            font-size: 0.85rem;
            font-weight: 600;
            border-radius: 20px;
            margin-top: 15px;
        }

        /* Адаптивность для новых секций */
        @media (max-width: 1200px) {
            .benefits-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .benefits-grid {
                grid-template-columns: 1fr;
            }

            .benefit-stats {
                flex-direction: column;
                gap: 10px;
            }

            .process-timeline::before {
                left: 30px;
            }

            .process-step,
            .process-step:nth-child(even) {
                flex-direction: row;
                padding-left: 70px;
            }

            .process-number {
                left: 30px;
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }

            .process-content,
            .process-step:nth-child(even) .process-content {
                width: 100%;
                text-align: left;
            }

            .process-content::before,
            .process-step:nth-child(even) .process-content::before {
                left: -30px;
                right: auto;
                border-right-color: var(--white);
                border-left-color: transparent;
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
            border-radius: 3px;
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
            border-radius: 3px;
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

<!-- Секция компетенций - СИММЕТРИЧНАЯ ВЕРСИЯ -->
<section class="benefits" id="benefits">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Наши ключевые компетенции</h2>
        <div class="benefits-grid">
            <div class="benefit-card" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14,2 14,8 20,8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10,9 9,9 8,9"></polyline>
                    </svg>
                </div>
                <h3>Комплексное проектирование</h3>
                <p>Полный цикл проектирования систем усиления связи от концепции до рабочих чертежей с учетом архитектурных особенностей объекта.</p>
                <div class="benefit-features">
                    <ul>
                        <li>Анализ радиочастотной обстановки</li>
                        <li>3D моделирование покрытия</li>
                        <li>Расчет бюджета линии связи</li>
                        <li>Подбор оптимального оборудования</li>
                    </ul>
                </div>
                <div class="benefit-stats">
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">500+</span>
                        <span class="benefit-stat-label">проектов</span>
                    </div>
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">15</span>
                        <span class="benefit-stat-label">лет опыта</span>
                    </div>
                </div>
                <a href="/services/design.php" class="btn btn-outline">Подробнее</a>
            </div>

            <div class="benefit-card" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect>
                        <line x1="7" y1="2" x2="7" y2="22"></line>
                        <line x1="17" y1="2" x2="17" y2="22"></line>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <line x1="2" y1="7" x2="7" y2="7"></line>
                        <line x1="2" y1="17" x2="7" y2="17"></line>
                        <line x1="17" y1="17" x2="22" y2="17"></line>
                        <line x1="17" y1="7" x2="22" y2="7"></line>
                    </svg>
                </div>
                <h3>Интеграция в архитектуру</h3>
                <p>Гармоничное встраивание оборудования в дизайн интерьера без ущерба эстетике и функциональности пространства.</p>
                <div class="benefit-features">
                    <ul>
                        <li>Скрытое размещение антенн</li>
                        <li>Дизайнерские решения</li>
                        <li>Минимальное воздействие на интерьер</li>
                        <li>Согласование с архитекторами</li>
                    </ul>
                </div>
                <div class="benefit-stats">
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">100%</span>
                        <span class="benefit-stat-label">интеграция</span>
                    </div>
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">0</span>
                        <span class="benefit-stat-label">видимых антенн</span>
                    </div>
                </div>
                <a href="/services/adaptation.php" class="btn btn-outline">Подробнее</a>
            </div>

            <div class="benefit-card" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        <path d="m22 7-10 5L2 7"></path>
                    </svg>
                </div>
                <h3>Профессиональный монтаж</h3>
                <p>Высококвалифицированная команда инженеров с опытом работы на сложных объектах любой конфигурации.</p>
                <div class="benefit-features">
                    <ul>
                        <li>Сертифицированные специалисты</li>
                        <li>Соблюдение стандартов безопасности</li>
                        <li>Минимальные сроки установки</li>
                        <li>Контроль качества на каждом этапе</li>
                    </ul>
                </div>
                <div class="benefit-stats">
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">50+</span>
                        <span class="benefit-stat-label">специалистов</span>
                    </div>
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">24/7</span>
                        <span class="benefit-stat-label">поддержка</span>
                    </div>
                </div>
                <a href="/services/installation.php" class="btn btn-outline">Подробнее</a>
            </div>

            <div class="benefit-card" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6"></path>
                        <path d="m15.14 8.86 4.24-4.24m0 11.31-4.24-4.24"></path>
                        <path d="m8.86 8.86-4.24-4.24m0 11.31 4.24-4.24"></path>
                    </svg>
                </div>
                <h3>Техническое сопровождение</h3>
                <p>Полный спектр услуг по обслуживанию и модернизации установленных систем с гарантийной поддержкой.</p>
                <div class="benefit-features">
                    <ul>
                        <li>Регулярная диагностика</li>
                        <li>Плановое обслуживание</li>
                        <li>Оперативное устранение неисправностей</li>
                        <li>Модернизация и расширение систем</li>
                    </ul>
                </div>
                <div class="benefit-stats">
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">5</span>
                        <span class="benefit-stat-label">лет гарантии</span>
                    </div>
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">99%</span>
                        <span class="benefit-stat-label">надежность</span>
                    </div>
                </div>
                <a href="/services/support.php" class="btn btn-outline">Подробнее</a>
            </div>

            <div class="benefit-card" data-aos="fade-up" data-aos-delay="500">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 12l2 2 4-4"></path>
                        <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c2.35 0 4.5.9 6.1 2.4"></path>
                    </svg>
                </div>
                <h3>Комплексный аудит</h3>
                <p>Регулярная проверка и оптимизация систем усиления связи для обеспечения максимальной эффективности работы.</p>
                <div class="benefit-features">
                    <ul>
                        <li>Анализ качества покрытия</li>
                        <li>Оценка производительности</li>
                        <li>Выявление слабых мест</li>
                        <li>Рекомендации по улучшению</li>
                    </ul>
                </div>
                <div class="benefit-stats">
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">100+</span>
                        <span class="benefit-stat-label">аудитов</span>
                    </div>
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">95%</span>
                        <span class="benefit-stat-label">улучшений</span>
                    </div>
                </div>
                <a href="/services/audit.php" class="btn btn-outline">Подробнее</a>
            </div>

            <div class="benefit-card" data-aos="fade-up" data-aos-delay="600">
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M12 7v5l3 3"></path>
                    </svg>
                </div>
                <h3>Долгосрочная поддержка</h3>
                <p>Бескомпромиссная поддержка во время и после гарантийного срока с оперативным решением любых вопросов.</p>
                <div class="benefit-features">
                    <ul>
                        <li>Круглосуточная техническая поддержка</li>
                        <li>Выездное обслуживание</li>
                        <li>Обновление программного обеспечения</li>
                        <li>Консультации по эксплуатации</li>
                    </ul>
                </div>
                <div class="benefit-stats">
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">2ч</span>
                        <span class="benefit-stat-label">время отклика</span>
                    </div>
                    <div class="benefit-stat">
                        <span class="benefit-stat-number">10+</span>
                        <span class="benefit-stat-label">лет поддержки</span>
                    </div>
                </div>
                <a href="/services/support.php" class="btn btn-outline">Подробнее</a>
            </div>
        </div>
    </div>
</section>


<!-- Секция процесса работы - ПЕРЕРАБОТАННАЯ -->
<section class="process" id="process">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Этапы реализации проекта усиления связи</h2>
        <div class="process-timeline">
            <div class="process-step" data-aos="fade-right" data-aos-delay="100">
                <div class="process-content">
                    <div class="process-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h3>Техническое обследование</h3>
                    <p>Комплексный анализ объекта с измерением уровня сигнала всех операторов связи и определением оптимальных точек размещения оборудования.</p>
                    <div class="process-details">
                        <ul>
                            <li>Радиочастотные измерения</li>
                            <li>Анализ строительных планов</li>
                            <li>Определение источников помех</li>
                            <li>Расчет зон покрытия</li>
                        </ul>
                    </div>
                    <span class="process-duration">1-3 дня</span>
                </div>
                <div class="process-number">1</div>
            </div>

            <div class="process-step" data-aos="fade-left" data-aos-delay="200">
                <div class="process-content">
                    <div class="process-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <h3>Разработка проекта</h3>
                    <p>Создание детального проекта системы усиления с учетом архитектурных особенностей объекта и требований заказчика.</p>
                    <div class="process-details">
                        <ul>
                            <li>3D моделирование покрытия</li>
                            <li>Выбор оборудования</li>
                            <li>Схемы размещения</li>
                            <li>Сметная документация</li>
                        </ul>
                    </div>
                    <span class="process-duration">14-30 дней</span>
                </div>
                <div class="process-number">2</div>
            </div>

            <div class="process-step" data-aos="fade-right" data-aos-delay="300">
                <div class="process-content">
                    <div class="process-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 12l2 2 4-4"></path>
                            <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c2.35 0 4.5.9 6.1 2.4"></path>
                        </svg>
                    </div>
                    <h3>Согласование решений</h3>
                    <p>Презентация проекта заказчику, внесение корректировок и получение финального одобрения всех технических решений.</p>
                    <div class="process-details">
                        <ul>
                            <li>Презентация проекта</li>
                            <li>Обсуждение деталей</li>
                            <li>Внесение изменений</li>
                            <li>Финальное утверждение</li>
                        </ul>
                    </div>
                    <span class="process-duration">1-3 дня</span>
                </div>
                <div class="process-number">3</div>
            </div>

            <div class="process-step" data-aos="fade-left" data-aos-delay="400">
                <div class="process-content">
                    <div class="process-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="6" width="20" height="8" rx="1"></rect>
                            <path d="m17 14-5 5-5-5"></path>
                        </svg>
                    </div>
                    <h3>Поставка оборудования</h3>
                    <p>Закупка и доставка всего необходимого оборудования от ведущих мировых производителей с гарантией качества.</p>
                    <div class="process-details">
                        <ul>
                            <li>Заказ оборудования</li>
                            <li>Контроль качества</li>
                            <li>Логистика доставки</li>
                            <li>Подготовка к монтажу</li>
                        </ul>
                    </div>
                    <span class="process-duration">14-60 дней</span>
                </div>
                <div class="process-number">4</div>
            </div>

            <div class="process-step" data-aos="fade-right" data-aos-delay="500">
                <div class="process-content">
                    <div class="process-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3>Монтажные работы</h3>
                    <p>Профессиональная установка системы усиления связи с соблюдением всех технических требований и стандартов безопасности.</p>
                    <div class="process-details">
                        <ul>
                            <li>Прокладка кабельных трасс</li>
                            <li>Установка оборудования</li>
                            <li>Подключение системы</li>
                            <li>Первичная настройка</li>
                        </ul>
                    </div>
                    <span class="process-duration">от 10 дней</span>
                </div>
                <div class="process-number">5</div>
            </div>

            <div class="process-step" data-aos="fade-left" data-aos-delay="600">
                <div class="process-content">
                    <div class="process-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                        </svg>
                    </div>
                    <h3>Настройка и оптимизация</h3>
                    <p>Точная настройка параметров системы, оптимизация покрытия и проведение комплексного тестирования работоспособности.</p>
                    <div class="process-details">
                        <ul>
                            <li>Настройка усилителей</li>
                            <li>Оптимизация мощности</li>
                            <li>Тестирование покрытия</li>
                            <li>Устранение интерференций</li>
                        </ul>
                    </div>
                    <span class="process-duration">1-2 дня</span>
                </div>
                <div class="process-number">6</div>
            </div>

            <div class="process-step" data-aos="fade-right" data-aos-delay="700">
                <div class="process-content">
                    <div class="process-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>Сдача объекта</h3>
                    <p>Передача готовой системы заказчику с полным комплектом документации, обучением персонала и предоставлением гарантийных обязательств.</p>
                    <div class="process-details">
                        <ul>
                            <li>Приемо-сдаточные испытания</li>
                            <li>Передача документации</li>
                            <li>Обучение персонала</li>
                            <li>Гарантийные обязательства</li>
                        </ul>
                    </div>
                    <span class="process-duration">1 день</span>
                </div>
                <div class="process-number">7</div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 50px;" data-aos="fade-up" data-aos-delay="800">
            <button class="btn btn-secondary" onclick="openModal('Консультация по этапам работы')">Получить консультацию по проекту</button>
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

    // Прелоадер: увеличение логотипа
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

    function openPdf(pdfFile) {
        window.open(pdfFile, '_blank', 'width=800,height=600');
    }
</script>
</body>
</html>
