<?php
	$emails = file(__DIR__ . '/email.txt');
	$emails = array_map('trim', $emails);
	
	function AsField($name, $parameter)
	{
		if(!isset($_REQUEST[$parameter])) return '';
		$value = $_REQUEST[$parameter];
		return "<strong>$name:</strong> $value<br>";
	}
	
	function AsProductField($name, $parameter, $source)
	{
		$value = $source[$parameter];
		return "<strong>$name:</strong> $value<br>";
	}
	
	$message = AsField("Имя", "Name")
			  .AsField("Номер телефона", "Phone")
			  .AsField("Электронная почта", "Email")
			  .AsField("Доставка", "Delivery")
			  .AsField("Адрес доставки", "deliverypoint")
			  .AsField("Сообщение", "Textarea")
			  .AsField("Сообщение", "messagess") ;
	 
	if(isset($_REQUEST["tildapayment"]))
	{
		$payments = $_REQUEST["tildapayment"];
		$products = $payments["products"];
		$message .= "<br><br><strong>Корзина:</strong><br><br>";
		
		foreach($products as $product)
		{
			$message .= AsProductField("Товар", "name", $product)
					   .AsProductField("Цена", "price", $product)
					   .AsProductField("Количество", "quantity", $product)
					   ."<br>";
		}
		$message = str_replace("\n", '', $message)."<br>";
	}
	
	$server = $_SERVER['HTTP_HOST'];
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$subject = "Заявка с сайта: $server";
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers.= "Content-type: text/html; charset=UTF-8\r\n";
	$headers.= "From: $server <informer@$server>\r\n";
	$headers.= "Reply-to: Reply to Name <reply@$server>\r\n";
			
	$message .="<br><strong>Время заявки:</strong> ".date("m.d.Y H:i:s")." <br><strong>IP адрес клиента:</strong> $ip";
	
	$result = mail(implode(',', $emails), $subject, $message, $headers);
	if ($result)
	{
		echo '{"message":"OK","results":["832354:54249962:T201809-1262866888"]}';
	}
	else 
	{
		echo '{"error":"Ошибка отправки - отключена функция (php mail). Обратитесь в поддержку хостинга.","results":["832354:54249962:T201809-1262866888"]}';
	}
?>