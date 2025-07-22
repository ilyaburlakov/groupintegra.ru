<!-- header.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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

        body {
            font-family: 'Roboto', sans-serif;
            color: var(--text-color);
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Шапка */
        header {
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            transition: var(--transition);
        }

        header.scrolled {
            padding: 15px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 80px;
            transition: var(--transition);
        }

        .nav-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--text-color);
            cursor: pointer;
            z-index: 1001;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            position: relative;
            transition: var(--transition);
            padding: 5px 0;
        }

        nav ul li a:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--main-color);
            transition: var(--transition);
        }

        nav ul li a:hover {
            color: var(--main-color);
        }

        nav ul li a:hover:after {
            width: 100%;
        }

        @media (max-width: 768px) {
            .nav-toggle {
                display: block;
            }

            nav {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                max-width: 400px;
                height: 100vh;
                background: var(--white);
                transition: var(--transition);
                padding: 80px 30px;
                z-index: 1000;
            }

            nav.active {
                right: 0;
            }

            nav ul {
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="container header-container">
            <a href="/">
                <img src="images/logo.png" alt="Группа Интегра" class="logo">
            </a>
            <button class="nav-toggle" id="navToggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            <nav id="nav">
                <ul>
                    <li><a href="/about.php">О нас</a></li>
                    <li><a href="/services.php">Услуги</a></li>
                    <li><a href="https://project5000993.tilda.ws/store/?projectid=5000993&storepartuid=856585721051">Каталог оборудования</a></li>
                    <li><a href="/projects.php">Проекты</a></li>
                    <li><a href="/contacts.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <script>
        const header = document.getElementById('header');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        const navToggle = document.getElementById('navToggle');
        const nav = document.getElementById('nav');
        navToggle.addEventListener('click', function() {
            nav.classList.toggle('active');
        });

        const navLinks = document.querySelectorAll('nav ul li a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                nav.classList.remove('active');
            });
        });
    </script>
</body>
</html>