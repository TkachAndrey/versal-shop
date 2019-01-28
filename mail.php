<?php
	/* Задаем переменные */
	$name = htmlspecialchars($_POST["name"]);
	$tel = htmlspecialchars($_POST["tel"]);
	$noSpam = htmlspecialchars($_POST["noSpam"]);
	 
	/* Мой адрес и тема сообщения */
	$address = "mr.tkach.a@gmail.com";
	$sub = "Сообщение с моего сайта";
	 
	/* Формат письма */
	$mes = "Сообщение с моего сайта.\n
	Имя отправителя: $name\n
	Телефон отправителя: $tel";
	 
	 
	if (empty($noSpam)) {
		// Оценка поля noSpam - должно быть пустым
		// Отправляю сообщение, используя mail() функцию
	$from  = "From: $name <$tel> \r\n";
	if (mail($address, $sub, $mes, $from)) { 
		// header("location: thanks.html");
		echo '
	    	<div>Заказ отправлен! Оставайтесь на связи.
	    	</div>'
	} else {
	 	echo '
	 		<div>Что-то пошло не так. Попробуйте ещё раз.</div>'
	 	}
	}
	exit; /* Выход без сообщения, если поле noSpam заполнено спам ботами */
?>