<?php
// Service data is stored as numeric arrays: [title, text] and [title, text, url].
if (!defined('INTEGRA_SERVICE_PAGE') || empty($service)) {
    http_response_code(404);
    exit;
}

$siteUrl = 'https://groupintegra.ru';
$canonical = $siteUrl . '/services/' . basename($_SERVER['PHP_SELF']);
$title = $service['title'];
$description = $service['description'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Группа Интегра">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="<?= htmlspecialchars($siteUrl . $service['image'], ENT_QUOTES, 'UTF-8') ?>">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

    <script type="application/ld+json">
    <?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $service['name'],
        'serviceType' => $service['serviceType'],
        'description' => $description,
        'url' => $canonical,
        'image' => $siteUrl . $service['image'],
        'provider' => [
            '@type' => 'Organization',
            'name' => 'Группа Интегра',
            'url' => $siteUrl,
            'logo' => $siteUrl . '/images/logo.png'
        ],
        'areaServed' => [
            ['@type' => 'City', 'name' => 'Москва'],
            ['@type' => 'City', 'name' => 'Санкт-Петербург']
        ]
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <script type="application/ld+json">
    <?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Главная', 'item' => $siteUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Услуги', 'item' => $siteUrl . '/services.php'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $service['name'], 'item' => $canonical]
        ]
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>
</head>
<body>
<?php include '../header.php'; ?>

<main>
    <section class="hero" style="background-image:url('<?= htmlspecialchars($service['image'], ENT_QUOTES, 'UTF-8') ?>');">
        <div class="container">
            <div class="hero-content">
                <div class="hero-highlight"><?= htmlspecialchars($service['eyebrow'], ENT_QUOTES, 'UTF-8') ?></div>
                <h1><?= htmlspecialchars($service['h1'], ENT_QUOTES, 'UTF-8') ?></h1>
                <p><?= htmlspecialchars($service['lead'], ENT_QUOTES, 'UTF-8') ?></p>
                <div class="hero-buttons">
                    <button class="btn btn-primary" type="button" onclick="integraOpenModal(); return false;">Обсудить проект</button>
                    <a class="btn btn-outline" href="/slabotchka.php">Все слаботочные системы</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-title">Что входит в решение</div>
            <div class="benefits-grid">
                <?php foreach ($service['components'] as $item): ?>
                    <article class="benefit-card">
                        <h3><?= htmlspecialchars($item[0], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p><?= htmlspecialchars($item[1], ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="target-industries">
        <div class="container">
            <div class="section-title">Для каких объектов</div>
            <div class="industries-grid">
                <?php foreach ($service['objects'] as $item): ?>
                    <article class="industry-card">
                        <div class="industry-content">
                            <h3 class="industry-title"><?= htmlspecialchars($item[0], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p class="industry-description"><?= htmlspecialchars($item[1], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-title">Как выполняем работу</div>
            <div class="process-steps">
                <?php foreach ($service['steps'] as $index => $item): ?>
                    <div class="process-step">
                        <span class="step-number"><?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        <h3><?= htmlspecialchars($item[0], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p><?= htmlspecialchars($item[1], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="additional-services">
        <div class="container">
            <div class="section-title">Что получает заказчик</div>
            <div class="benefits-grid">
                <?php foreach ($service['results'] as $item): ?>
                    <article class="benefit-card">
                        <h3><?= htmlspecialchars($item[0], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p><?= htmlspecialchars($item[1], ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-title">Связанные направления</div>
            <div class="cards-grid">
                <?php foreach ($service['links'] as $link): ?>
                    <a class="card" href="<?= htmlspecialchars($link[2], ENT_QUOTES, 'UTF-8') ?>" style="padding:26px;text-decoration:none;">
                        <div class="card-title"><?= htmlspecialchars($link[0], ENT_QUOTES, 'UTF-8') ?></div>
                        <div class="card-descr"><?= htmlspecialchars($link[1], ENT_QUOTES, 'UTF-8') ?></div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="cta">
                <h2>Нужен расчёт по объекту?</h2>
                <p>Пришлите план, техническое задание или краткое описание объекта. Сориентируем по составу работ и исходным данным для расчёта.</p>
                <button class="btn btn-primary" type="button" onclick="integraOpenModal(); return false;">Обсудить задачу</button>
            </div>
        </div>
    </section>
</main>

<?php include '../footer.php'; ?>
</body>
</html>
