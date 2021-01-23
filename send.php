<?php 
if(isset($_POST['submit'])){
/* Устанавливаем e-mail Кому и от Кого будут приходить письма */    
	$to = "kostya30082005@mail.ru"; // Здесь нужно написать e-mail, куда будут приходить письма	
    $from = "no-reply@Math298.ru"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply@epicblog.net

/* Указываем переменные, в которые будет записываться информация с формы */
	$first_name = $_POST['first_name'];
	$email = $_POST['email'];
	$rezultat = $_POST['rezultat'];
	$class = $_POST['class'];
    $subject = "Ученик сдал работу на сайте f0492518.xsph";//Фиксированная тема письма
	
/* Проверка правильного написания e-mail адреса */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не существует");
}
	
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "Здравствуйте! 
Было отправлено сообщение с сайта! 
Имя отправителя: $first_name 
E-mail: $email 
Класс ученика: $class 
Оценка ученика: $rezultat ";	
	
$headers = "From: $from \r\n";
	
/* Отправка сообщения, с помощью функции mail() */
    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    echo "Ваша оценка была отправлена учителю. Спасибо Вам " . $first_name . ", учитель увидит вашу оценку";
	echo "<br /><br /><a href='http://f0492518.xsph.ru/'>Вернуться на сайт.</a>";
}
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://f0492518.xsph.ru/");}
window.setTimeout("changeurl();",0000);
</script>
