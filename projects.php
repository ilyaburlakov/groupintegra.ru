<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проекты Группы Интегра — реализованные инженерные решения</title>
    <meta name="description" content="Реализованные проекты Группы Интегра: усиление сотовой связи и инженерные системы на объектах в Москве и Санкт-Петербурге.">
    <meta name="keywords" content="проекты усиления связи, слаботочные системы, Группа Интегра, Останкино, YES Технопарк, YES Ботаника, YES Марата">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Проекты Группы Интегра">
    <meta property="og:description" content="Реализованные объекты и инженерные решения Группы Интегра.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://groupintegra.ru/projects.php">
    <meta property="og:image" content="https://groupintegra.ru/images/ostankino.jpg">
    <meta property="og:locale" content="ru_RU">
    <link rel="canonical" href="https://groupintegra.ru/projects.php">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy:#0B1220; --blue:#2563EB; --red:#EF4444;
            --text:#172033; --muted:#64748B; --line:#E2E8F0; --bg:#F7F8FA; --white:#fff;
            --container:1240px;
        }
        *{box-sizing:border-box}
        body{margin:0;font-family:Inter,Arial,sans-serif;color:var(--text);background:var(--white);line-height:1.65;-webkit-font-smoothing:antialiased}
        .projects-shell{width:min(var(--container),calc(100% - 40px));margin:0 auto}
        .projects-hero{padding:82px 0 52px;border-bottom:1px solid var(--line)}
        .kicker{color:var(--blue);font-size:.8rem;font-weight:800;letter-spacing:.08em;text-transform:uppercase;margin-bottom:12px}
        h1{font-size:clamp(2.4rem,5vw,4rem);line-height:1.05;letter-spacing:-.045em;margin:0 0 18px;max-width:850px}
        .lead{max-width:700px;margin:0;color:var(--muted);font-size:1.08rem}
        .project-list{padding:64px 0 94px;display:grid;grid-template-columns:repeat(2,1fr);gap:24px}
        .project-card{display:grid;grid-template-rows:300px auto;border:1px solid var(--line);border-radius:20px;overflow:hidden;background:var(--white);text-decoration:none;color:inherit;transition:.2s ease}
        .project-card:hover{transform:translateY(-4px);box-shadow:0 18px 50px rgba(15,23,42,.08);border-color:#CBD5E1}
        .project-card.featured{grid-column:1/-1;grid-template-columns:1.3fr .7fr;grid-template-rows:auto}
        .project-image{width:100%;height:100%;min-height:300px;object-fit:cover;display:block}
        .project-card.featured .project-image{min-height:380px}
        .project-content{padding:26px 28px 30px;display:flex;flex-direction:column;justify-content:center}
        .project-meta{color:var(--blue);font-size:.78rem;font-weight:800;letter-spacing:.06em;text-transform:uppercase;margin-bottom:10px}
        .project-content h2{margin:0 0 10px;font-size:1.45rem;line-height:1.18;letter-spacing:-.02em}
        .project-content p{margin:0 0 20px;color:var(--muted);font-size:.95rem}
        .project-link{color:var(--blue);font-weight:700;font-size:.92rem}
        .project-footer{padding-bottom:60px;text-align:center}
        .project-footer a{display:inline-flex;align-items:center;justify-content:center;min-height:48px;padding:0 20px;border-radius:9px;background:var(--navy);color:#fff;text-decoration:none;font-weight:700}
        @media(max-width:800px){
            .projects-shell{width:min(100% - 28px,var(--container))}
            .projects-hero{padding:58px 0 40px}
            .project-list{grid-template-columns:1fr;padding:46px 0 70px}
            .project-card.featured{grid-column:auto;grid-template-columns:1fr;grid-template-rows:300px auto}
            .project-card.featured .project-image{min-height:300px}
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>

<main>
    <section class="projects-hero">
        <div class="projects-shell">
            <div class="kicker">Портфолио</div>
            <h1>Реализованные объекты и инженерные решения</h1>
            <p class="lead">Показываем реальные объекты, на которых Группа Интегра решала задачи по усилению связи и инженерной инфраструктуре.</p>
        </div>
    </section>

    <section class="projects-shell project-list">
        <a class="project-card featured" href="/projects/ostankino.php">
            <img class="project-image" src="/images/ostankino.jpg" alt="Бизнес-парк Останкино, Москва" loading="eager">
            <div class="project-content">
                <div class="project-meta">Москва · усиление связи</div>
                <h2>Бизнес-парк Останкино</h2>
                <p>Объект с высокими требованиями к устойчивости мобильной связи. Подробнее о задаче и реализованном решении — в карточке проекта.</p>
                <span class="project-link">Открыть проект →</span>
            </div>
        </a>

        <a class="project-card" href="/projects/yes-technopark.php">
            <img class="project-image" src="/images/yes_technopark.jpg" alt="YES Технопарк, Москва" loading="lazy">
            <div class="project-content">
                <div class="project-meta">Москва</div>
                <h2>YES Технопарк</h2>
                <p>Инженерная задача на современном объекте с большим количеством помещений и пользовательских зон.</p>
                <span class="project-link">Подробнее →</span>
            </div>
        </a>

        <a class="project-card" href="/projects/yes-botanica.php">
            <img class="project-image" src="/images/yes_botanica.jpg" alt="YES Ботаника, Москва" loading="lazy">
            <div class="project-content">
                <div class="project-meta">Москва</div>
                <h2>YES Ботаника</h2>
                <p>Реализованный объект в жилой инфраструктуре с требованиями к стабильности связи.</p>
                <span class="project-link">Подробнее →</span>
            </div>
        </a>

        <a class="project-card" href="/projects/yes-marata.php">
            <img class="project-image" src="/images/yes_marata.jpg" alt="YES Марата, Санкт-Петербург" loading="lazy">
            <div class="project-content">
                <div class="project-meta">Санкт-Петербург</div>
                <h2>YES Марата</h2>
                <p>Проект в центральной части Санкт-Петербурга с учётом особенностей объекта и городской инфраструктуры.</p>
                <span class="project-link">Подробнее →</span>
            </div>
        </a>

        <a class="project-card" href="/projects/pervaya-liniya.php">
            <img class="project-image" src="/images/pervaya_liniya.jpg" alt="Первая Линия Health Care Resort, Зеленогорск" loading="lazy">
            <div class="project-content">
                <div class="project-meta">Зеленогорск</div>
                <h2>Первая Линия Health Care Resort</h2>
                <p>Объект курортного комплекса с повышенными требованиями к инженерной инфраструктуре.</p>
                <span class="project-link">Подробнее →</span>
            </div>
        </a>
    </section>

    <div class="projects-shell project-footer">
        <a href="/#contact">Обсудить похожий проект</a>
    </div>
</main>

<?php include 'footer.php'; ?>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"CollectionPage",
  "name":"Проекты Группы Интегра",
  "description":"Реализованные проекты Группы Интегра по усилению сотовой связи и инженерным системам.",
  "url":"https://groupintegra.ru/projects.php",
  "publisher":{
    "@type":"Organization",
    "name":"Группа Интегра",
    "url":"https://groupintegra.ru",
    "logo":"https://groupintegra.ru/images/logo.png"
  },
  "mainEntity":{
    "@type":"ItemList",
    "itemListElement":[
      {"@type":"CreativeWork","position":1,"name":"Бизнес-парк Останкино, Москва","url":"https://groupintegra.ru/projects/ostankino.php","image":"https://groupintegra.ru/images/ostankino.jpg"},
      {"@type":"CreativeWork","position":2,"name":"YES Технопарк, Москва","url":"https://groupintegra.ru/projects/yes-technopark.php","image":"https://groupintegra.ru/images/yes_technopark.jpg"},
      {"@type":"CreativeWork","position":3,"name":"YES Ботаника, Москва","url":"https://groupintegra.ru/projects/yes-botanica.php","image":"https://groupintegra.ru/images/yes_botanica.jpg"},
      {"@type":"CreativeWork","position":4,"name":"YES Марата, Санкт-Петербург","url":"https://groupintegra.ru/projects/yes-marata.php","image":"https://groupintegra.ru/images/yes_marata.jpg"},
      {"@type":"CreativeWork","position":5,"name":"Первая Линия Health Care Resort, Зеленогорск","url":"https://groupintegra.ru/projects/pervaya-liniya.php","image":"https://groupintegra.ru/images/pervaya_liniya.jpg"}
    ]
  }
}
</script>
</body>
</html>