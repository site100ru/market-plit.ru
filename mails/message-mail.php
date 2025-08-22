<?php
	session_start();
	$win = "true";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mes = $_POST['mes'];
	mail("7928283@mail.ru, vasilyev-r@mail.ru", "Вопрос с сайта «Плитный Маркет»", "
		Клиент: ".$name."\n
		Email: ".$email."\n
		Вопрос: ".$mes."\n
	" );
	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Плитный&nbsp;Маркет». В&#160;ближайшее время с Вами свяжется наш специалист.</p>';
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>