<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title>Contacts | Tecco</title>
    <?php include "blocks/css.php"; ?>
</head>

<body>

<?php include "blocks/sidebar.php"; ?>
<?php include "blocks/social.php"; ?>

<section class="content contacts" data-page="contact">
	<div class="contacts__leftside">
		<div class="container">
			<p class="content__text contacts__address">Riga<br>
			Krišjāņa Valdemāra iela 118-704
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.39 25.16" fill="#fff" width="31" height="26"><title>icon_arrow_4</title><path d="M314.94,1583.89a1.51,1.51,0,0,0-.11-0.55v0a1.49,1.49,0,0,0-.32-0.49l-11-11a1.5,1.5,0,1,0-2.12,2.12l8.47,8.47H286.05a1.5,1.5,0,0,0,0,3h23.77l-8.57,8.57a1.5,1.5,0,0,0,2.12,2.12L314.51,1585a1.5,1.5,0,0,0,.32-0.49v0a1.51,1.51,0,0,0,.11-0.55" transform="translate(-284.55 -1571.36)"/></svg>
				<span class="contacts__pinsquare">
					<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 11 16" fill="#fff" width="29" height="46"><defs><symbol id="New_Symbol_63" data-name="New Symbol 63" viewBox="0 0 11 16"><path d="M5.5,0C3.3,0,0,1,0,5c0,2,4.4,9,5.5,11C6.6,14,11,7,11,5,11,1,7.7,0,5.5,0Zm0,6.75A1.75,1.75,0,1,1,7.25,5,1.75,1.75,0,0,1,5.5,6.75Z"/></symbol></defs><title>icon_pin_2</title><use data-name="New Symbol 63" width="11" height="16" xlink:href="#New_Symbol_63"/></svg>
				</span>
			</p>
			<div class="contacts__phonemail">
				<a href="mailto:info@tecco.lv" class="content__text contacts__mail">info@tecco.lv</a>
				<p class="content__text contacts__phone">+371 288 02 922</p>
			</div>
			<ul class="contacts__social">
	  			<li><a href="#">
	  				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.71 8.71" fill="none" stroke="#fff" stroke-miterlimit="10" width="37" height="37"><title>icon_inst</title><rect x="0.5" y="0.5" width="7.71" height="7.71" rx="1.98" ry="1.98"/><rect x="2.73" y="2.73" width="3.24" height="3.24" rx="1.62" ry="1.62"/><circle cx="6.64" cy="2.12" r="0.08"/></svg>
	  			</a></li>
	  			<li><a href="#">
	  				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.5 7.5" width="37" height="27" fill="#fff"><defs></defs><title>icon_yt</title><path d="M-812.23,239.73q0,0.32,0,.88t0,0.88c0,0.21,0,.48,0,0.8a6.49,6.49,0,0,1-.13.87,1.37,1.37,0,0,1-.4.72,1.24,1.24,0,0,1-.73.34,38.4,38.4,0,0,1-3.93.15,38.4,38.4,0,0,1-3.93-.15,1.25,1.25,0,0,1-.73-0.34,1.36,1.36,0,0,1-.41-0.72,7.27,7.27,0,0,1-.13-0.87c0-.32,0-0.59,0-0.8s0-.5,0-0.88,0-.67,0-0.88,0-.48,0-0.8a6.46,6.46,0,0,1,.13-0.86,1.37,1.37,0,0,1,.4-0.72,1.24,1.24,0,0,1,.73-0.34,38.4,38.4,0,0,1,3.93-.15,38.4,38.4,0,0,1,3.93.15,1.25,1.25,0,0,1,.73.34,1.36,1.36,0,0,1,.41.72,7.25,7.25,0,0,1,.13.86C-812.25,239.26-812.23,239.52-812.23,239.73Zm-3.17,1.2a0.34,0.34,0,0,0,.18-0.32,0.34,0.34,0,0,0-.18-0.32l-3-1.87a0.35,0.35,0,0,0-.38,0,0.35,0.35,0,0,0-.19.33v3.75a0.35,0.35,0,0,0,.19.33,0.4,0.4,0,0,0,.18,0,0.33,0.33,0,0,0,.2-0.06l3-1.87h0Z" transform="translate(822.72 -236.86)"/></svg>
	  			</a></li>
	  			<li><a href="#">
	  				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.5 9.66" width="17" height="35" fill="#fff"><defs></defs><title>icon_fb</title><path d="M-713.19,218.56h1.51l-0.18,1.66h-1.33v4.83h-2v-4.83h-1v-1.66h1v-1a2.31,2.31,0,0,1,.5-1.62,2.16,2.16,0,0,1,1.66-.55h1.33v1.66h-0.83a1.43,1.43,0,0,0-.37,0,0.32,0.32,0,0,0-.2.14,0.56,0.56,0,0,0-.08.2,1.84,1.84,0,0,0,0,.29v0.83Z" transform="translate(716.19 -215.4)"/></svg>
	  			</a></li>
	  		</ul>
			<form action="send.php" class="contacts__form" method="post" id="contactform">
				<input type="text" name="email" placeholder="Your E-mail" data-required>
				<textarea name="message" placeholder="Your Message"></textarea>
				<button class="button">Send message</button>
				<p class="contacts__success">Спасибо, ваш запрос отправлен</p>
			</form>
		</div>
	</div>
	<div class="contacts__map" id="map">
		<img src="img/cloud.png" alt="@@" class="contacts__mapimage" width="106">
		<img src="img/cloud.png" alt="@@" class="contacts__mapimage" width="144">
		<img src="img/cloud.png" alt="@@" class="contacts__mapimage" width="144">
	</div>
</section>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUaCNfcDZQL7nZK07DQmAHsEetCCMIQ5w&callback=initMap" async defer></script>

<script>
  function initMap() {
    var myLatLng = {lat: 56.975652, lng: 24.136556};

	var image = {
        url: 'img/icon_pin.svg'
    };

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      scrollwheel: false,
      zoom: 15,
	  noClear: true
    });

    // Create a marker and set its position.
    var marker = new google.maps.Marker({
      map: map,
	  icon: image,
      position: myLatLng,
      title: 'Tecco'
    });
  }
</script>

</body>
</html>
