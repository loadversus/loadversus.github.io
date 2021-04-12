<?php

session_start();
 
// формируем массив с товарами в заказе (если товар один - оставляйте только первый элемент массива)
$products_list = array(
    1 => array( 
            'product_id' => '40',    //код товара (из каталога CRM)
            'price'      => '10000', //цена товара 1
            'count'      => '1'                      //количество товара 1
    ),  
    
);
$products = urlencode(serialize($products_list));
$sender = urlencode(serialize($_SERVER));
 
// параметры запроса
$data = array(
    'key'             => '1c6b8603ab0ada5cf419fca38e6c9977', //Ваш секретный токен
    'order_id'        => number_format(round(microtime(true)*10),0,'.',''), //идентификатор (код) заказа (*автоматически*)
    'country'         => 'UA',              // Географическое напраление заказа UA, RU
    'products'        => $products,                 // массив с товарами в заказе
    'bayer_name'      => $_REQUEST['name'],             // покупатель (Ф.И.О)
    'phone'           => $_REQUEST['phone'],           // телефон
    'email'           => $_REQUEST['email'],           // электронка
    'comment'         => $_REQUEST['product_name'],    // комментарий
    'site'            => $_SERVER['SERVER_NAME'],  // сайт отправляющий запрос
    'ip'              => $_SERVER['REMOTE_ADDR'],  // IP адрес покупателя
    'delivery_type'   => $_REQUEST['delivery'],        // способ доставки
    'delivery_adress' => $_REQUEST['delivery_adress'], // адрес доставки
	'sender'          => $sender,
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source 
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium 
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term   
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content    
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'] // utm_campaign
);
 
// запрос
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://intermagtop.lp-crm.biz/api/addNewOrder.html');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);
//$out – ответ сервера в формате JSON

// $jout=json_decode($out); foreach($jout as $key => $value) {   $mess = $mess."$key =".$value."<br>\n";  } echo $mess;
// foreach($data as $key => $value) {   $mess = $mess."$key =".$value."<br>\n";  } echo $mess;


  $dt=date("d F Y, H:i:s"); // дата и время
  $mail="artalliancekh@gmail.com"; // e-mail куда уйдет письмо
  $title="Заказ с сайта ".$_SERVER["SERVER_NAME"]; // заголовок(тема) письма
 $name=$_POST["name"];
  $name=htmlspecialchars($name); // обрабатываем
 $phone=$_POST["phone"];
 $present=$_POST["present"];
 $counter=$_POST["counter"];
 
$mess="<b>Имя:</b> $name<br>";
  $mess.="<b>Телефон:</b> $phone<br>";
  $mess.="<b>Подарок:</b> $present<br>";
  $mess.="<b>Отправлено с формы:</b> $counter<br>";
  $mess.="<b>Дата и Время:</b> $dt";

  $headers="MIME-Version: 1.0\r\n";
  $headers.="Content-type: text/html; charset=utf-8\r\n"; //кодировка
  $headers.="From: feedback@".$_SERVER["SERVER_NAME"]; // откуда письмо (необязательнакя строка)
  mail($mail, $title, $mess, $headers); // отправляем

 ?>

<script>
function reload()
{location = "thanks.php"}; 
setTimeout('reload()',0);
</script>;
}


