<?php
$region = json_decode('{
    "title": "Слаботочные системы и усиление связи в СПб | Группа Интегра",
    "description": "Проектирование и монтаж слаботочных систем и решений по усилению сотовой связи в Санкт-Петербурге и Ленинградской области.",
    "h1": "Слаботочные системы и усиление связи в Санкт-Петербурге",
    "intro": "Группа Интегра выполняет инженерные работы в Санкт-Петербурге и Ленинградской области: проектирование, монтаж, технический контроль и подготовку объектов к сдаче.",
    "image": "/images/varsh.jpg",
    "projects": [
        [
            "YES Марата",
            "Апарт-отель в Санкт-Петербурге с решением по покрытию сотовой связи.",
            "/projects/yes-marata.php"
        ],
        [
            "Первая Линия",
            "Health Care Resort в Зеленогорске. Проект по обеспечению покрытия связи.",
            "/projects/pervaya-liniya.php"
        ],
        [
            "Проекты Группы Интегра",
            "Полный список опубликованных объектов и реализованных инженерных решений.",
            "/projects.php"
        ]
    ],
    "name": "Санкт-Петербург"
}', true);
$siteUrl = 'https://groupintegra.ru';
$canonical = $siteUrl . '/' . basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($region['title'], ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($region['description'], ENT_QUOTES, 'UTF-8') ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Группа Интегра">
<meta property="og:locale" content="ru_RU">
<meta property="og:title" content="<?= htmlspecialchars($region['title'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:description" content="<?= htmlspecialchars($region['description'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:image" content="<?= htmlspecialchars($siteUrl . $region['image'], ENT_QUOTES, 'UTF-8') ?>">
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<script type="application/ld+json">
<?= json_encode([
 '@context'=>'https://schema.org',
 '@type'=>'WebPage',
 'name'=>$region['title'],
 'description'=>$region['description'],
 'url'=>$canonical,
 'about'=>[
   '@type'=>'Organization',
   'name'=>'Группа Интегра',
   'url'=>$siteUrl,
   'logo'=>$siteUrl.'/images/logo.png'
 ],
 'areaServed'=>[
   ['@type'=>'City','name'=> $region['name'] ?? 'Москва']
 ]
], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) ?>
</script>
<script type="application/ld+json">
<?= json_encode([
 '@context'=>'https://schema.org',
 '@type'=>'BreadcrumbList',
 'itemListElement'=>[
   ['@type'=>'ListItem','position'=>1,'name'=>'Главная','item'=>$siteUrl.'/'],
   ['@type'=>'ListItem','position'=>2,'name'=>$region['h1'],'item'=>$canonical]
 ]
], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) ?>
</script>
</head>
<body>
<?php include 'header.php'; ?>
<main>
<section class="hero" style="background-image:url('<?= htmlspecialchars($region['image'], ENT_QUOTES, 'UTF-8') ?>');">
  <div class="container">
    <div class="hero-content">
      <div class="hero-highlight">Группа Интегра · <?= htmlspecialchars($region['name'], ENT_QUOTES, 'UTF-8') ?></div>
      <h1><?= htmlspecialchars($region['h1'], ENT_QUOTES, 'UTF-8') ?></h1>
      <p><?= htmlspecialchars($region['intro'], ENT_QUOTES, 'UTF-8') ?></p>
      <div class="hero-buttons">
        <button class="btn btn-primary" type="button" onclick="integraOpenModal();return false;">Обсудить объект</button>
        <a class="btn btn-outline" href="/projects.php">Смотреть проекты</a>
      </div>
    </div>
  </div>
</section>

<section>
 <div class="container">
  <div class="section-title">Что выполняем</div>
  <div class="benefits-grid">
   <article class="benefit-card"><h3>Слаботочные системы</h3><p>СКС, видеонаблюдение, СКУД, пожарная сигнализация, СОУЭ, ЛВС и Wi‑Fi.</p></article>
   <article class="benefit-card"><h3>Усиление связи</h3><p>Обследование, проектирование и монтаж систем усиления сотовой связи и DAS.</p></article>
   <article class="benefit-card"><h3>Инженерное сопровождение</h3><p>Координация работ, контроль качества, исполнительная документация и подготовка к сдаче.</p></article>
   <article class="benefit-card"><h3>Работа со строительными объектами</h3><p>Подключаемся к проекту на стадии проектирования, строительства или модернизации.</p></article>
  </div>
 </div>
</section>

<section class="target-industries">
 <div class="container">
  <div class="section-title">Реализованные проекты</div>
  <div class="cards-grid">
   <?php foreach ($region['projects'] as $project): ?>
    <a class="card" href="<?= htmlspecialchars($project[2], ENT_QUOTES, 'UTF-8') ?>" style="padding:26px;text-decoration:none;">
      <div class="card-title"><?= htmlspecialchars($project[0], ENT_QUOTES, 'UTF-8') ?></div>
      <div class="card-descr"><?= htmlspecialchars($project[1], ENT_QUOTES, 'UTF-8') ?></div>
    </a>
   <?php endforeach; ?>
  </div>
 </div>
</section>

<section>
 <div class="container">
  <div class="section-title">Основные услуги</div>
  <div class="cards-grid">
   <a class="card" href="/services/sks.php" style="padding:26px;text-decoration:none;"><div class="card-title">СКС</div><div class="card-descr">Структурированные кабельные системы.</div></a>
   <a class="card" href="/services/video.php" style="padding:26px;text-decoration:none;"><div class="card-title">Видеонаблюдение</div><div class="card-descr">CCTV для зданий и территорий.</div></a>
   <a class="card" href="/services/skud.php" style="padding:26px;text-decoration:none;"><div class="card-title">СКУД</div><div class="card-descr">Контроль доступа и событий.</div></a>
   <a class="card" href="/services/suss.php" style="padding:26px;text-decoration:none;"><div class="card-title">Усиление сотовой связи</div><div class="card-descr">Проектирование и монтаж систем усиления связи.</div></a>
  </div>
 </div>
</section>

<section>
 <div class="container">
  <div class="cta">
   <h2>Нужна оценка объекта в <?= htmlspecialchars($region['name'], ENT_QUOTES, 'UTF-8') ?>?</h2>
   <p>Отправьте краткое описание объекта или проектные материалы — определим следующий инженерный шаг.</p>
   <button class="btn btn-primary" type="button" onclick="integraOpenModal();return false;">Обсудить проект</button>
  </div>
 </div>
</section>
</main>
<?php include 'footer.php'; ?>
</body>
</html>
