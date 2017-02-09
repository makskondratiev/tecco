<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body> 

<?php include "blocks/sidebar.php"; ?>

<section class="content services">
	<div class="content-tabs">
		<div class="container">
			<ul class="content-tabs__list">
				<li class="active"><a class="content-tabs__link" href="#">Web &amp; mobile Development</a></li>
				<li><a class="content-tabs__link" href="#">IT Outsourcing</a></li>
			</ul>
		</div>
	</div>
	<div class="services__development">
		<div class="container">
			<div class="content__textblock services__textblock">
				<h2 class="content__heading">Web & mobile разработка, поддержка и развитие</h2>
				<p class="content__text">Tecco специализируется на разработке высоконагруженных онлайн сервисов и э-коммерческих проектов на web и mobile платформах. Мы являемся агентством полного цикла, уделяющим внимание каждому из этапов разработки:</p>
				<ul class="services__list">
					<li><p>Проведение исследования</p></li>
					<li><p>Разработка архитектуры, составление технического задания</p></li>
					<li><p>Разработка прототипа</p></li>
					<li><p>Разработка веб и мобильного интерфейса</p></li>
					<li><p>Front end работы</p></li>
					<li><p>Back end работы</p></li>
					<li><p>QA</p></li>
					<li><p>Суппорт проекта</p></li>
					<li><p>Разработка и внедрение стратегии технического развития ресурса</p></li>
					<li><p>Консалтинг</p></li>
					<li><p>Usability аудит</p></li>
					<li><p>Технический аудит (скоро)</p></li>
					<li><p>Аудит безопасности (скоро)</p></li>
				</ul>
			</div>
			<div class="squareblock services__quote">
				<p class="services__quotetext"><span class="services__quotes">«</span><br>
				Безумно остроумная цитата, которая проливает свет на крутость компании и прошаренность ее руководителя</p>
				<p class="services__quoteauthor">Максим Кондратьев<br>Tecco IT CEO</p>
			</div>
		</div>
	</div>
	<div class="services__outsourcing">
		<div class="container">
			<div class="content__textblock services__textblock">
				<h2 class="content__heading">IT outsourcing</h2>
				<p class="content__smalltext">Иногда ввиду многих факторов бизнес сталкивается с необходимостью формирования  отдаленного штата сотрудников, включающего команду разработчиков с тим-лидом, тестировщиков, руководителя проекта и др. специалистов со всей необходимой инфраструктурой.<br><br>
				Tecco располагает всей необходимой компетенцией и возможностями для создания отдаленных команд и организации их труда согласно поставленным задачам.</p>
				<div class="squareblock squareblock_dark services__moreinfo">
					<p class="content__text">Для получения более подробной информации об услугах компании</p>
					<p class="content__text"><a class="content__text_link" href="#">Свяжитесь с нами<img src="img/icon_arrow_3.svg" alt="@@" width="26" height="31"></a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>