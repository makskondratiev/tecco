<!-- Всплывающая форма заявки !-->
<form class="popup" id="popup" action="send.php" method="post">
	<p>Заполните заявку!</p>
    <input type="name" name="name" placeholder="Ваше имя" required/>
    <input type="tel" name="tel" placeholder="Телефон" required/>
    <input type="email" name="email" placeholder="E-mail" required/>
    <button class="button" type="submit">Отправить</button>
</form>

<!-- Окно "спасибо за заявку" !-->
<form class="popup" id="success">
	<p>Спасибо, мы свяжемся с Вами в ближайшее время!</p>
</form>