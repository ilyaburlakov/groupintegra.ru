<?php
if (!defined('INTEGRA_ARTICLE_PAGE') || empty($article)) {
    http_response_code(404);
    exit;
}
$siteUrl = 'https://groupintegra.ru';
$canonical = $siteUrl . '/articles/' . basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($article['description'], ENT_QUOTES, 'UTF-8') ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:type" content="article">
<meta property="og:site_name" content="Группа Интегра">
<meta property="og:locale" content="ru_RU">
<meta property="og:title" content="<?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:description" content="<?= htmlspecialchars($article['description'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:image" content="<?= htmlspecialchars($siteUrl . $article['image'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="article:published_time" content="2026-09-20">
<meta property="article:modified_time" content="2026-09-20">
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">

<script type="application/ld+json">
<?= json_encode([
 '@context'=>'https://schema.org',
 '@type'=>'Article',
 'headline'=>$article['h1'],
 'description'=>$article['description'],
 'image'=>$siteUrl.$article['image'],
 'datePublished'=>'2026-09-20',
 'dateModified'=>'2026-09-20',
 'author'=>['@type'=>'Organization','name'=>'Группа Интегра','url'=>$siteUrl],
 'publisher'=>['@type'=>'Organization','name'=>'Группа Интегра','url'=>$siteUrl,'logo'=>['@type'=>'ImageObject','url'=>$siteUrl.'/images/logo.png']],
 'mainEntityOfPage'=>['@type'=>'WebPage','@id'=>$canonical]
], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) ?>
</script>
<script type="application/ld+json">
<?= json_encode([
 '@context'=>'https://schema.org',
 '@type'=>'BreadcrumbList',
 'itemListElement'=>[
  ['@type'=>'ListItem','position'=>1,'name'=>'Главная','item'=>$siteUrl.'/'],
  ['@type'=>'ListItem','position'=>2,'name'=>'Полезные материалы','item'=>$siteUrl.'/articles/'],
  ['@type'=>'ListItem','position'=>3,'name'=>$article['h1'],'item'=>$canonical]
 ]
], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) ?>
</script>
<style>
.article-wrap{padding:72px 0}.article-header{max-width:900px;margin:0 auto 42px}.article-kicker{color:#2563EB;font-size:.82rem;font-weight:800;text-transform:uppercase;letter-spacing:.08em;margin-bottom:12px}.article-header h1{font-size:clamp(2.2rem,4.5vw,4rem);line-height:1.05;letter-spacing:-.04em;margin:0 0 18px;color:#172033}.article-lead{font-size:1.16rem;line-height:1.7;color:#64748B;margin:0}.article-hero{width:100%;height:420px;object-fit:cover;border-radius:20px;margin:0 0 44px}.article-body{max-width:860px;margin:0 auto}.article-body h2{font-size:clamp(1.6rem,3vw,2.25rem);line-height:1.15;margin:44px 0 16px;color:#172033}.article-body h3{font-size:1.25rem;margin:30px 0 10px;color:#172033}.article-body p{font-size:1.05rem;color:#334155;margin:0 0 18px}.article-body ul{padding-left:22px;color:#334155}.article-body li{margin:0 0 10px}.article-callout{padding:22px 24px;margin:28px 0;border-left:3px solid #EF4444;background:#F7F8FA;border-radius:0 12px 12px 0;color:#334155}.article-links{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px;margin-top:34px}.article-links a{display:block;padding:22px;border:1px solid #E2E8F0;border-radius:16px;background:#fff;text-decoration:none}.article-links strong{display:block;margin-bottom:7px;color:#172033}.article-links span{color:#64748B;font-size:.92rem}@media(max-width:800px){.article-wrap{padding:54px 0}.article-hero{height:300px}.article-links{grid-template-columns:1fr}}
</style>
</head>
<body>
<?php include '../header.php'; ?>
<main class="article-wrap">
<div class="container">
  <header class="article-header">
    <div class="article-kicker">Полезные материалы · Группа Интегра</div>
    <h1><?= htmlspecialchars($article['h1'], ENT_QUOTES, 'UTF-8') ?></h1>
    <p class="article-lead"><?= htmlspecialchars($article['lead'], ENT_QUOTES, 'UTF-8') ?></p>
  </header>

  <img class="article-hero" src="<?= htmlspecialchars($article['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($article['h1'], ENT_QUOTES, 'UTF-8') ?>">

  <article class="article-body">
    <?php foreach ($article['sections'] as $section): ?>
      <h2><?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8') ?></h2>
      <?php foreach ($section['paragraphs'] as $p): ?>
        <p><?= $p ?></p>
      <?php endforeach; ?>
      <?php if (!empty($section['list'])): ?>
        <ul>
          <?php foreach ($section['list'] as $item): ?>
            <li><?= $item ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <?php if (!empty($section['callout'])): ?>
        <div class="article-callout"><?= $section['callout'] ?></div>
      <?php endif; ?>
    <?php endforeach; ?>

    <h2>Что можно сделать дальше</h2>
    <p><?= htmlspecialchars($article['next'], ENT_QUOTES, 'UTF-8') ?></p>

    <div class="article-links">
      <?php foreach ($article['links'] as $link): ?>
        <a href="<?= htmlspecialchars($link['url'], ENT_QUOTES, 'UTF-8') ?>">
          <strong><?= htmlspecialchars($link['title'], ENT_QUOTES, 'UTF-8') ?></strong>
          <span><?= htmlspecialchars($link['text'], ENT_QUOTES, 'UTF-8') ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </article>
</div>
</main>
<?php include '../footer.php'; ?>
</body>
</html>
