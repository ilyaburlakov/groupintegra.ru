<?php
$blocks = [
['title'=>'Адаптация проектных решений | Группа Интегра','desc'=>'Адаптация проекта усиления сотовой связи под фактические условия объекта: архитектуру, трассы, оборудование, строительную готовность и требования заказчика.'],
['hero'=>'Адаптация проектных решений','lead'=>'Если проект уже разработан, но объект изменился или фактические условия отличаются от исходных данных, проверяем решение и приводим его в рабочее состояние.'],
['items'=>[
['Что проверяем','Проект, расчёты, схемы, трассы, состав оборудования, узлы подключения и исходные требования.'],
['Что сравниваем','Проектные решения сопоставляем с фактической архитектурой, выполненными работами, доступными трассами и смежными системами.'],
['Что исправляем','Выявленные расхождения, технические ограничения и решения, которые невозможно реализовать без корректировки.'],
['Что получает заказчик','Понятный перечень изменений и согласованный технический вариант для дальнейшей реализации.']]],
['steps'=>[
['01','Исходные данные','Получаем проект, планы, замечания и информацию о текущем состоянии объекта.'],
['02','Проверка','Сопоставляем документацию с фактическими условиями и определяем расхождения.'],
['03','Корректировка','Предлагаем технические изменения и согласуем их с заказчиком.'],
['04','Передача','Фиксируем актуальное решение и материалы, необходимые для реализации.']]]
];
?>
<!DOCTYPE html><html lang="ru"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title><?=$blocks[0]['title']?></title><meta name="description" content="<?=$blocks[0]['desc']?>"><link rel="canonical" href="https://groupintegra.ru/services/adaptation.php"><link rel="icon" href="/images/favicon.ico"></head><body>
<?php include '../header.php'; ?><main>
<section class="hero"><div class="hero-content"><div class="hero-highlight">Усиление сотовой связи · проект</div><h1><?=$blocks[1]['hero']?></h1><p><?=$blocks[1]['lead']?></p><div class="hero-buttons"><button class="btn btn-primary" type="button" onclick="integraOpenModal();return false;">Обсудить проект</button><a class="btn btn-outline" href="/gsm.php">Усиление связи</a></div></div></section>
<section><div class="container"><h2 class="section-title">Что получает заказчик</h2><div class="benefits-grid"><?php foreach($blocks[2]['items'] as $i): ?><article class="benefit-card"><h3><?=$i[0]?></h3><p><?=$i[1]?></p></article><?php endforeach; ?></div></div></section>
<section class="additional-services"><div class="container"><h2 class="section-title">Как проходит работа</h2><div class="process-steps"><?php foreach($blocks[3]['steps'] as $s): ?><div class="process-step"><span class="step-number"><?=$s[0]?></span><h3><?=$s[1]?></h3><p><?=$s[2]?></p></div><?php endforeach; ?></div></div></section>
<section><div class="container"><div class="cta"><h2>Проект уже есть, но объект изменился?</h2><p>Передайте проект и актуальные планы. Проверим, что можно оставить без изменений, а что необходимо адаптировать до начала монтажа.</p><button class="btn btn-primary" type="button" onclick="integraOpenModal();return false;">Передать проект</button></div></div></section>
</main><?php include '../footer.php'; ?></body></html>