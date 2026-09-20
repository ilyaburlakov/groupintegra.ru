<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
require_once 'includes/config.php';
require_once 'includes/functions.php';
$user_id = isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : null;
$session_id = session_id();
$cart_items = getCartItems($user_id, $session_id);
$cart_count = array_sum(array_column($cart_items, 'quantity'));
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= isset($page_title) ? escape($page_title) . ' - Группа Интегра' : 'Каталог - Группа Интегра' ?></title>
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/integra-theme.css">
<link rel="stylesheet" href="/catalog/styles.css">
<style>
.catalog-site-header{position:sticky;top:0;z-index:1000;background:rgba(255,255,255,.96);border-bottom:1px solid #E2E8F0;backdrop-filter:blur(14px)}
.catalog-site-header .inner{width:min(1240px,calc(100% - 40px));min-height:72px;margin:0 auto;display:flex;align-items:center;gap:24px}
.catalog-site-header .brand{font-weight:800;font-size:1.1rem;text-decoration:none;color:#0B1220}
.catalog-site-header .brand span{color:#2563EB}
.catalog-site-header nav{margin-left:auto;display:flex;align-items:center;gap:6px}
.catalog-site-header a{color:#475569;text-decoration:none;font-weight:600;padding:10px 12px;border-radius:8px}
.catalog-site-header a:hover{background:#F8FAFC;color:#1D4ED8}
.catalog-cart{background:#2563EB!important;color:#fff!important;border-radius:9px!important}
@media(max-width:680px){.catalog-site-header .inner{width:calc(100% - 28px);gap:8px}.catalog-site-header nav{gap:0}.catalog-site-header nav a:not(.catalog-cart){display:none}.catalog-site-header a{padding:9px 10px;font-size:.88rem}}
</style>
</head>
<body>
<header class="catalog-site-header">
<div class="inner">
<a class="brand" href="/"><span>INTEGRA</span> · Каталог</a>
<nav>
<a href="/gsm.php">Усиление связи</a>
<a href="/projects.php">Проекты</a>
<a href="/about.php">О компании</a>
<a class="catalog-cart" href="/catalog/cart.php">Корзина<?= $cart_count > 0 ? ' · ' . $cart_count : '' ?></a>
</nav>
</div>
</header>
<main>