<?php
{
  $dt=date("d F Y, H:i:s"); // дата и время
  $mail="artalliancekh@gmail.com"; // e-mail куда уйдет письмо
  $title="Заказ с сайта ".$_SERVER["SERVER_NAME"]; // заголовок(тема) письма
 $name=$_POST["name"];
  $name=htmlspecialchars($name); // обрабатываем
 $phone=$_POST["phone"];
 $remontParam=$_POST["remontParam"];
 
$mess="<b>Имя:</b> $name<br>";
  $mess.="<b>Телефон:</b> $phone<br>";
  $mess.=" $remontParam<br>";
  $mess.="<b>Дата и Время:</b> $dt";

  $headers="MIME-Version: 1.0\r\n";
  $headers.="Content-type: text/html; charset=utf-8\r\n"; //кодировка
  $headers.="From: feedback@".$_SERVER["SERVER_NAME"]; // откуда письмо (необязательнакя строка)
  mail($mail, $title, $mess, $headers); // отправляем

  // выводим уведомление и перезагружаем страничку
print"
<script>
function reload()
{location = \"/thanks.php\"}; 
setTimeout('reload()',0);
</script>";
}
?>

