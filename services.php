<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аудит и технические консультации — Группа Интегра</title>
    <meta name="description" content="Аудит проектов слаботочных систем и усиления связи: проверка проектных решений, смет, объёмов работ и подготовка рекомендаций до начала или приёмки работ.">
    <meta name="keywords" content="аудит слаботочных систем, технический аудит, проверка проекта, проверка сметы, техническая консультация">
    <meta property="og:title" content="Аудит и технические консультации — Группа Интегра">
    <meta property="og:description" content="Проверяем проектные решения, сметы и фактическое выполнение работ, помогаем выявить проблемы до приёмки объекта.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://groupintegra.ru/services.php">
    <link rel="canonical" href="https://groupintegra.ru/services.php">
    <link rel="stylesheet" href="/assets/integra-theme.css">
    <style>
        :root{--blue:#2563EB;--navy:#0B1220;--muted:#64748B;--bg:#F7F8FA;--line:#E2E8F0}
        *{box-sizing:border-box}
        body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;color:#172033;background:#fff;line-height:1.6}
        .audit-hero{background:linear-gradient(135deg,#0B1220,#173A63);color:#fff;padding:96px 20px}
        .audit-container{max-width:1240px;margin:0 auto}
        .audit-hero h1{font-size:clamp(2.3rem,5vw,4.2rem);line-height:1.08;max-width:900px;margin:0 0 22px}
        .audit-hero p{font-size:1.2rem;max-width:820px;color:#D9E5F5;margin:0 0 30px}
        .audit-btn{display:inline-flex;align-items:center;justify-content:center;min-height:48px;padding:0 20px;border-radius:9px;background:var(--blue);color:#fff;text-decoration:none;font-weight:700;border:0;cursor:pointer}
        .audit-section{padding:78px 20px}
        .audit-section.alt{background:var(--bg)}
        .audit-title{font-size:clamp(1.8rem,3vw,2.7rem);margin:0 0 16px;color:var(--navy)}
        .audit-lead{max-width:820px;color:var(--muted);font-size:1.08rem;margin:0 0 38px}
        .audit-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
        .audit-card{border:1px solid var(--line);border-radius:14px;padding:30px;background:#fff}
        .audit-card h3{margin:0 0 12px;font-size:1.2rem}
        .audit-card p{margin:0;color:var(--muted)}
        .audit-list{display:grid;grid-template-columns:repeat(2,1fr);gap:14px 40px;max-width:1000px}
        .audit-list div{padding:15px 18px;border-left:3px solid var(--blue);background:#fff;border-radius:8px}
        .audit-steps{counter-reset:step;display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
        .audit-step{position:relative;padding:28px;border:1px solid var(--line);border-radius:12px;background:#fff}
        .audit-step:before{counter-increment:step;content:"0" counter(step);display:block;font-weight:800;color:var(--blue);font-size:.9rem;margin-bottom:18px}
        .audit-step h3{margin:0 0 10px}
        .audit-step p{margin:0;color:var(--muted)}
        .audit-cta{background:var(--navy);color:#fff;border-radius:18px;padding:44px;display:flex;align-items:center;justify-content:space-between;gap:30px}
        .audit-cta h2{margin:0 0 10px;font-size:2rem}
        .audit-cta p{margin:0;color:#B8C5D6}
        @media(max-width:900px){.audit-grid{grid-template-columns:1fr 1fr}.audit-steps{grid-template-columns:1fr 1fr}}
        @media(max-width:640px){.audit-hero{padding:72px 18px}.audit-section{padding:58px 18px}.audit-grid,.audit-list,.audit-steps{grid-template-columns:1fr}.audit-cta{padding:30px;display:block}.audit-cta .audit-btn{margin-top:22px}}
    </style>
</head>
<body>
<?php include 'header.php'; ?>

<section class="audit-hero">
    <div class="audit-container">
        <h1>Аудит проектов и технические консультации</h1>
        <p>Помогаем заказчику проверить технические решения, состав работ и фактическое выполнение до начала работ, в процессе реализации или перед приёмкой объекта.</p>
        <button class="audit-btn" type="button" onclick="integraOpenModal(); return false;">Обсудить задачу</button>
    </div>
</section>

<section class="audit-section">
    <div class="audit-container">
        <h2 class="audit-title">Что проверяем</h2>
        <p class="audit-lead">Разбираем проект не только по документам, но и сопоставляем решения с реальными условиями объекта и выполненными объёмами.</p>
        <div class="audit-grid">
            <article class="audit-card"><h3>Проектные решения</h3><p>Проверяем состав систем, технические решения, трассы, оборудование и соответствие исходным требованиям.</p></article>
            <article class="audit-card"><h3>Смету и объёмы</h3><p>Сопоставляем заявленные объёмы, состав работ и оборудование с проектной документацией.</p></article>
            <article class="audit-card"><h3>Фактическое выполнение</h3><p>Помогаем выявить расхождения между проектом, отчётностью и тем, что фактически выполнено на объекте.</p></article>
        </div>
    </div>
</section>

<section class="audit-section alt">
    <div class="audit-container">
        <h2 class="audit-title">Результат аудита</h2>
        <p class="audit-lead">Заказчик получает понятную картину текущего состояния проекта и перечень вопросов, которые нужно закрыть.</p>
        <div class="audit-list">
            <div>Замечания к проектным и техническим решениям</div>
            <div>Выявленные расхождения по объёмам и составу работ</div>
            <div>Рекомендации по корректировке решений</div>
            <div>Приоритеты для устранения проблем до приёмки</div>
        </div>
    </div>
</section>

<section class="audit-section">
    <div class="audit-container">
        <h2 class="audit-title">Как работаем</h2>
        <div class="audit-steps">
            <div class="audit-step"><h3>Исходные данные</h3><p>Получаем проект, техническое задание, смету и доступные материалы по объекту.</p></div>
            <div class="audit-step"><h3>Проверка</h3><p>Анализируем документы и, при необходимости, сопоставляем их с фактическим состоянием объекта.</p></div>
            <div class="audit-step"><h3>Фиксация</h3><p>Собираем замечания, расхождения и технические вопросы в структурированный перечень.</p></div>
            <div class="audit-step"><h3>Рекомендации</h3><p>Формируем предложения по исправлению и дальнейшим действиям.</p></div>
        </div>
    </div>
</section>

<section class="audit-section alt">
    <div class="audit-container">
        <div class="audit-cta">
            <div>
                <h2>Нужно проверить проект или спорный участок работ?</h2>
                <p>Опишите объект и задачу — обсудим, какие исходные данные потребуются для проверки.</p>
            </div>
            <button class="audit-btn" type="button" onclick="integraOpenModal(); return false;">Отправить заявку</button>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
