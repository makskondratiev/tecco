<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title>Services | Tecco</title>
    <?php include "blocks/css.php"; ?>
</head>

<body>

<?php include "blocks/sidebar.php"; ?>
<?php include "blocks/social.php"; ?>

<section class="content services" data-page="services">
	<div class="content-tabs">
		<div class="container">
			<ul class="content-tabs__list">
				<li class="active"><a class="content-tabs__link" href="#">Web &amp; mobile Development</a></li>
				<li><a class="content-tabs__link nav" href="#outsourcing">IT Outsourcing</a></li>
			</ul>
		</div>
	</div>
	<div class="services__development">
		<div class="container">
			<div class="content__textblock services__textblock">
				<h2 class="content__heading">Web & mobile разработка, поддержка и развитие</h2>
				<p class="content__text">Tecco специализируется на разработке высоконагруженных онлайн сервисов и<br> э-коммерческих проектов на web и mobile платформах. Мы являемся агентством полного цикла, уделяющим внимание каждому из этапов разработки:</p>
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
				<p class="services__quotetext">
				Безумно остроумная цитата, которая проливает свет на крутость компании и прошаренность ее руководителя</p>
				<p class="services__quoteauthor">Максим Кондратьев<br>Tecco IT CEO</p>
			</div>
		</div>
	</div>
	<div class="services__outsourcing" id="outsourcing">
		<div class="container">
			<div class="content__textblock services__textblock">
				<h2 class="content__heading">IT outsourcing</h2>
				<p class="content__smalltext">Иногда ввиду многих факторов бизнес сталкивается с необходимостью формирования  отдаленного штата сотрудников, включающего команду разработчиков с тим-лидом, тестировщиков, руководителя проекта и др. специалистов со всей необходимой инфраструктурой.<br><br>
				Tecco располагает всей необходимой компетенцией и возможностями для создания отдаленных команд и организации их труда согласно поставленным задачам.</p>
				<a href="#" class="squareblock squareblock_dark services__moreinfo">
					<p class="content__text">Для получения более подробной информации об услугах компании</p>
					<p class="content__text content__text_link" href="#">Свяжитесь с нами
						<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.16 30.39" width="26" height="31" fill="#221f1f"><title>icon_arrow_3</title><path d="M-47.26,887.51a1.52,1.52,0,0,0-.55.11h0a1.49,1.49,0,0,0-.49.33l-11,11a1.5,1.5,0,0,0,0,2.12,1.5,1.5,0,0,0,2.12,0l8.47-8.47v23.77a1.5,1.5,0,0,0,1.5,1.5,1.5,1.5,0,0,0,1.5-1.5V892.63l8.57,8.57a1.5,1.5,0,0,0,2.12,0,1.49,1.49,0,0,0,.44-1.06,1.5,1.5,0,0,0-.44-1.06L-46.2,888a1.49,1.49,0,0,0-.49-0.33h0a1.52,1.52,0,0,0-.55-0.11" transform="translate(59.8 -887.51)"/></svg>
					</p>
				</a>
			</div>
		</div>
	</div>
</section>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
