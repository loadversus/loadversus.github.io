<?php

$recepient = "somih@rambler.ru"; //artalliancekh@gmail.com"; //artsashasanin@gmail.com";  
$siteName = "1art-alliance.kh.ua";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$pos = trim($_POST["present"]);
$counter = trim($_POST["counter"]);

if (!empty($pos)) {
    $message = "Параметр: $pos \nИмя: $name \nТелефон: $phone";
} else {
    $message = "Имя: $name \nТелефон: $phone";
}

$pagetitle = "Заявка с сайта \"$siteName\" от \"$name\"";
// mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: webmaster@$siteName", "-fwebmaster@$siteName");

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";

/* дополнительные шапки */
$headers .= "From: " . $name . "  <support@$siteName>\r\n";

$mailStatus = mail($recepient, $pagetitle, $message, $headers);

if ($mailStatus && !empty($counter)) {
    print '[
        {
          "result": {
            "status": "success",
            "code": "<script>(function($){
 $(document).ready(function(){
ga(\"send\", \"event\", \"' . $counter . '\", \"submit\");
 yaCounter48115166.reachGoal(\"' . $counter . '\");
$("#hiframe").css("display", "block");
$("#miframe").css("display", "none");
console.log(\"' . $counter . '\");
alert('-----------------');
})
})(jQuery);
</script>"
          }
        }
      ]';
} else {
    print '[
        {
          "result": {
            "status": "fail"
          }
        }
      ]';
}

