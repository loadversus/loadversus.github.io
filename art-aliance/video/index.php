<?php
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WJQGCKH');</script>
<!-- End Google Tag Manager -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Арт Альянс - Любые виды отделки квартир, помещений и офисов в Харькове и Харьковской области</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/primary.css" rel="stylesheet">
        <link rel="stylesheet" href="css/fonts.css" />
        <link rel="stylesheet" href="css/media.css" />
        <!--LightBox-->
        <link href="css/lightbox.css" rel="stylesheet" />  
        <link rel="icon" href="favicon.ico">
        <style media="all and (min-width:1300px) and (max-width:600px)" type="text/css" >  </style>
        <style media="all and (min-width:1300px) and (max-width:600px)" type="text/css" >  </style>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
       
        <link href="assets/css/system.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/noty/packaged/jquery.noty.packaged.min.js" type="text/javascript"></script>
        <script src="assets/js/core.js" type="text/javascript"></script>
        <link rel="stylesheet" href="/css/slick.css" />
        <link rel="stylesheet" href="/css/slick-theme.css">
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJQGCKH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <ul id="noty_center_layout_container" class="noty_container"></ul>
        <!--Шапка-->
        <div class = "container-fluid">
            <header class="wrapp" style="background: url(img/1.jpg) 100% 56%; background-size: cover;		">
                <div>
                    <div class="row" >
                        <div class="wrapp1">	
                            <!--Шапка-->
                            <section id="head">
                                <div class = "row">
                                    <div class = "col-lg-4 col-md-4 logo"> </div>
                                    <div class = "col-lg-5 col-md-5 col-sm-5 headTitle"> 

                                        <p style="  font-size: 3.2em;">Ремонт квартир, помещений,<br/> офисов в Харькове и Харьковской области</p>
                                    </div>
                                    <div class = "col-lg-3 col-md-3 col-sm-3 phone"><a href="tel://+380930152626">+38(093) 015 26 26</a><br>
<a href="tel://+380684252233">+38(068) 425 22 33</a><div>Ежедневно с 10:00 до 19:00</div></div>	
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="clear"> </div>
                <div class="mobile-menu">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
                <div class="row menu">
                    <div id="menu">
                        <div class ="wrapp1">
                            <div class="yellowBg"></div>
                            <nav class="">
                                <ul>
                                    <li><a href="#link3" class="a_1">Гарантии</a></li>
                                    <li><a href="#link1" class="a_2">Калькулятор стоимости</a></li>
                                    <li><a href="#link4" class="a_3">Виды отделки</a></li>
                                    <li><a href="#link2" class="a_4">Выполненные проекты</a></li>
                                </ul>
                            </nav>
                            <div class=" orderPhone">
                                <a href="#call-feedback" data-toggle="modal" data-target="#call-feedback" class="freeCall" attr-a="top"><span>Заказать обратный звонок</span></a>
                            </div>
                        </div>

                    </div>
                </div>	

                <!--Ремонт и форма-->
                <div class="clear"> </div>
                <div class = "row">
                    <div class="wrapp1" style="position:relative">
                        <div class = "remont col-lg-7 col-md-7 col-sm-7">
                            <div class="remontWrapper">
                                <h1 style="  background: #FDD621; margin-top:0;   padding-top: 1px;   font-size: 9.5em;">Ремонт квартир</h1>
                                <p style="  background: #FDD621; padding-top: 5px;  font-size: 27px;">частично и "под ключ" с оплатой по факту, сроком не более 60 дней</p>
                                <ul style="font-size: 20px; ">
                                    <li>Бюджет чернового ремонта "однушки" от 40 000 грн.</li>											
                                    <li>Бесплатный расчет сметы ремонта не более 30 мин!</li>
                                    <li>Скидки на некоторые виды работ до 20%!</li>
                                    <!--<li>Стоимость работы "под ключ" от 1 500 р. кв.м.</li>-->
                                </ul>
                            </div>
                        </div>

                        <div class = "formPresent col-lg-5 col-md-5 col-sm-5">	
                            <div class = "formWrapper">
                                <section>
                                    <h3 style="font-size: 25px; text-align: center;"><span>ОСТАВЬТЕ ЗАЯВКУ</span><br/>на составление сметы</h3>
                                    <form method="post" action="send.php" class="send_form">
                                        <div class = "smetaForm">
                                            <label>Выберите подарок:</label>
                                            <select name="present" style="background: #FFF3B8;">
                                                <option value="Консультация дизайнера">Консультация дизайнера</option>
                                                <option value="Бесплатный вывоз мусора">Бесплатный вывоз мусора</option> 

                                            </select>
                                            <input type="text" placeholder = "Впишите ваше имя" name = "name" required/>
                                            <input type="tel" placeholder = "Укажите номер телефона" name = "phone" required class="phone">
                                            <input type="hidden" value="Форма в первом экране" name="counter">
                                            <div class="button"><button type="submit">Получить смету бесплатно</button></div>
                                        </div>
                                    </form>
                                </section>
                                <p>* Ваши контактные данные в безопасности и не будут переданы третьим лицам</p>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <!--Преимущества-->
            <div class="clear"> </div>
            <div id = "advantages" class="wrapp">
                <div class = "row">
                    <div class = "wrapp1">
                        <div class="col-lg-3 col-md-3 col-sm-3 advantagesBox">
                            <img src = "img/prepayment.png" width="62" height="64" alt=""/>
                            <h4>Поэтапная оплата</h4>
                            <p>Вы понимаете <br/> за какую работу платите</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 advantagesBox">
                            <img src = "img/discounts.png" width="62" height="64" alt=""/>
                            <h4>Скидки <br>на работы</h4>
                            <p>Экономьте до 20% на некоторые виды работ</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 advantagesBox">
                            <img src = "img/freeZamer.png" width="51" height="64" alt=""/>
                            <h4>Бесплатные <br>замеры</h4>
                            <p>Визит мастера бесплатен и не к чему не обязывает</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 advantagesBox">
                            <img src = "img/yourPrice.png" width="62" height="64" alt=""/>
                            <h4>Ваша цена</h4>
                            <p>Выбирайте смету<br/> из 3 вариантов</p>
                        </div>
                    </div>
                </div>
            </div>
			<div class="clear"> </div>
<div class= "gallaryBox wrapp">	
                <h3 id="link2" class="scrollDiv">Галерея работ</h3>

                <div class="test">
                    <div class="row test" >
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 littleImgLeft">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 littleImg"><div data-lightbox="gallImg"><img src="/img/blank.png" class="img1"/></div></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 littleImg"><div data-lightbox="gallImg"><img src="/img/blank.png" class="img2"/></div></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 littleImg"><div data-lightbox="gallImg"><img src="/img/blank.png" class="img3"/></div></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 littleImg"><div data-lightbox="gallImg"><img src="/img/blank.png" class="img4"/></div></div>
                            </div>
                        </div>
                        <!--Большое изображение-->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bigImg wrapp1">
                            <a href="/img/blank.png" ><div id="hidetext"> Посмотреть проект</div><img src="/img/blank.png" class="img9"/></a>
                            <a href="#" id="arrowLeft"><img src="/img/slideArrovLeft.png" width="44" height="82" alt="" class="arrowLeft"/></a>
                            <a href="#" id="arrowRight"><img src="/img/slideArrovRight.png" width="44" height="82" alt="" class="arrowRight"/></a>
                        </div>
                        <!---->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 littleImgRight">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 littleImg"><div data-lightbox="gallImg"><img src="/img/blank.png" class="img5"/></div></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 littleImg"><div data-lightbox="gallImg"><img src="/img/blank.png" class="img6"/></div></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 littleImg"><div data-lightbox="gallImg"><img src="/img/blank.png" class="img7"/></div></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 littleImg"><div data-lightbox="gallImg"><img src="/img/blank.png" class="img8"/></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Детали проекта-->
                <div class="row">
                    <div class="wrapp1 detailProject">
                        <h3 class="projectName">Название проекта</h3>
                        <div class="row">
                            <div class="gallaryParam">
                                <div class="col-lg-4 col-md-4 col-sm-12 gallaryParamWrapp">
                                    <img src="/img/gallaryParam1.gif" width="44" height="44" alt=""/>
                                    <div class="">
                                        <span><span class="gallSquare">600</span> м<sup>2</sup></span><br/> Площадь здания
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 gallaryParamWrapp">
                                    <img src="/img/gallaryParam2.gif" width="44" height="44" alt=""/>
                                    <div class="">
                                        <span class="gallPrice">30 000</span> грн.<br/> Стоимость отделочных работ
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 gallaryParamWrapp">
                                    <img src="/img/gallaryParam3.gif" width="44" height="44" alt=""/>
                                    <div class="">
                                        <span class="gallTime">60</span> дней<br/> Срок выполнения работ
                                    </div>
                                </div>
                            </div>
                            <div class="clear"> </div>
                            <div id="gallaryText1" class="gallaryText">

                            </div>
                        </div>
                    </div>
                </div>




            </div>
			<div class="clear"> </div>
			<section class="vidos">
				<div class="container-fluid">
					<div class="row">
						 <video autoplay muted loop>
							<source src="video/remont.mp4" type="video/mp4">
							<source src="video/remont.webm" type='video/webm' >
							<source src="video/remont.ogg" type='video/ogg' ></source>
							Your browser does not support HTML5 video.
						</video>
					</div>
				</div>
			</section>
            <!--Что необходимо вашему дому-->
            <div class="clear"> </div>
            <div class="wrapp1"><h3 class="mainCaption">Что необходимо вашему дому?</h3></div>
            <!--Дизайн-проект-->
            <div class="row wrapp">
                <div id="container" class="container">
                    <div id="front">
                        <div class="col-lg-12 col-md-12 col-sm-12 stylishDesign">
                            <!-- Содержание лицевой стороны -->
                            <div class="border1">
                                <p class="BigBorder">«Проект стильного дизайна интерьера,»</p>
                                <p class = "littleText">который преобразит дом<br> и подчеркнет индивидуальность?</p>
                            </div>
                            <a href="#" id="projectStyleDesign" class="rotate" >Да, дому нужен дизайн-проект</a>
                        </div>
                    </div>

                    <div id="back">
                        <div class="col-lg-12 col-md-12 col-sm-12 stylishDesign stylishDesignBack rotate">
                            <!-- Содержание оборотной стороны -->
                            <div class="border">
                                <p style="padding:100px 0px 0px 0px;">«Мы создадим эксклюзивный дизайн-проект квартиры, подготовим чертежи и проекты, разработаем оптимальный план расстановки мебели и проведем авторский надзор.»</p>						
                            </div>
                            <a href="#" id="projectStyleDesignBack" data-toggle="modal" data-target="#orderZamer">Получить смету бесплатно</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row wrapp">
                <div id="container2" class="container2">
                    <div id="front2">
                        <div class="col-lg-12 col-md-12 col-sm-12 goodRepair">
                            <!-- Содержание лицевой стороны -->
                            <div class="border2">
                                <p class="BigBorder">«Хороший<br/> косметический ремонт,»</p>
                                <p class = "littleText">после которого дом становится действительно<br/> красивым и уютным?</p>
                            </div>
                            <a href="#" id="goodCosmaticRepair" class="rotate2" style="z-index:160;">Да, дому нужен косметический ремонт</a>	
                        </div>
                    </div>

                    <div id="back2">
                        <div class="col-lg-12 col-md-12 col-sm-12 goodRepair goodRepairBack rotate2">
                            <!-- Содержание оборотной стороны -->
                            <div class="border">
                                <p style="padding:70px 0px 0px 0px;">«Мы освежим вид квартиры или дома при помощи качественных штукатурных и покрасочных работ, оклейки обоев, выравнивания потолков и монтажа плитки, дверей, сантехники – всего необходимого!»</p>					
                            </div>
                            <a href="#" id="goodCosmaticRepairBack"  style="z-index:160;" data-toggle="modal" data-target="#orderZamer2">Получить смету бесплатно</a>	
                        </div>
                    </div>
                </div>
            </div>

            <div class="row wrapp">
                <div id="container3" class="container3">
                    <div id="front3">
                        <div class="col-lg-12 col-md-12 col-sm-12 sureznoRepair">
                            <!-- Содержание лицевой стороны -->
                            <div class="border3">
                                <p class="BigBorder">«Серьезный <br/>капитальный ремонт,»</p>
                                <p class = "littleText">после которого жилище становится стильным, <br/>функциональным, удобным?</p>
                            </div>
                            <a href="#" id="goodCapitalRepair" class="rotate3" style="z-index:160;">Да, дому нужен капитальный ремонт</a>
                        </div>
                    </div>

                    <div id="back3">
                        <div class="col-lg-12 col-md-12 col-sm-12 sureznoRepair sureznoRepairBack rotate3">
                            <!-- Содержание оборотной стороны -->
                            <div class="border">
                                <p style="padding:100px 0px 0px 0px;">«Мы выполним перепланировку помещений любой сложности, проведем комплекс монтажных работ и воплотим ваши месты об идеальном доме для комфортной жизни и ежедневного удовольствия.»</p>
                            </div>
                            <a href="#" id="goodCapitalRepairBack" style="z-index:160;" data-toggle="modal" data-target="#orderZamer3">Вызвать замерщика бесплатно</a>
                        </div>
                    </div>	

                </div>
            </div>

            <!---->
            <!--Калькулятор-->
            <div class="row wrapp">
                <div class="col-lg-12 col-md-12 col-sm-12 calculatorBox">
                    <div id="calc">
                        <h3 id="link1">Узнайте стоимость ремонта</h3>
                        <div class="link-group">
                            <a href="#" class="kvartira act checkLink" tip="1">Квартира</a>
                            <a href="#" class="kottedj checkLink" tip="2">Помещение</a>
                            <a href="#" class="office checkLink" tip="3">Офис</a>
                        </div>
                        <div class="clear"> </div>
                        <div class="calculatorForm">
                            <form method="post" action="test.php" role="form">
                                <div class="leftLabel">Тип ремонта:</div>
                                <div class="formElem">
                                    <select class="typeOfRepair" name="tipRemonta">
                                        <option value="1">Бюджетный ремонт</option>
                                        <option value="2">Капитальный ремонт</option>
                                        <option value="3">Эксклюзивный ремонт</option>
                                    </select>
                                </div>
                                <div class="clear"> </div>
                                <div class="leftLabel">Площадь:</div>
                                <div class="formElem">
                                    <input type="text" name="square" id="square" placeholder="0" class="ploshad" required/>
                                </div>
                                <div class="clear"> </div>
                                <div class="leftLabel">Проект:</div>
                                <div class="formElem">
                                    <select class="designProject" name="designProject">
                                        <option value="1">Не нужен дизайн-проект</option>
                                        <option value="2">Нужен дизайн-проект</option>
                                    </select>
                                </div>
                                <div class="clear"> </div>
                                <div class="yellowButton"><button data-toggle="modal" data-target="#calcRemont" id="calculateFinal">Рассчитать стоимость</button></div>
                            
							
							
							
							</form>
                        </div>

                        <div id="compass"></div>
                        <div id="pen"> </div>
                    </div>
                </div>
            </div>
			<div class="clear"> </div>
			<section class="vidos2">
				<div class="container-fluid">
					<div class="row">
						 <video autoplay muted loop>
							<source src="video/remont2.mp4" type="video/mp4">
							<source src="video/remont2.webm" type='video/webm' >
							<source src="video/remont2.ogg" type='video/ogg' ></source>
							Your browser does not support HTML5 video.
						</video>
					</div>
				</div>
			</section>
			<div class="clear"> </div>
            <!--Гарантии-->
            <div class="row wrapp">
                <div class="col-lg-12 col-md-12 col-sm-12 garantiiBox">
                    <div class="row">
                        <section class="col-lg-12 col-md-12 col-sm-12 garantii">
                            <h3 id="link3" class="scrollDiv">Мы гарантируем вам</h3>
                            <div class="row">
                                <div class = "wrapp1">
                                    <div class="col-lg-4 col-md-4 col-sm-12 garantBox">
                                        <img src = "img/garant1.png" width="147" height="147" alt=""/>
                                        <h4>100% исполнение</h4>
                                        <p>Будут выполнены все работы, <br/>указанные в смете</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 garantBox">
                                        <img src = "img/garant2.png" width="147" height="147" alt=""/>
                                        <h4>Соблюдение сроков</h4>
                                        <p>Мы работаем по плану и завершаем <br/>проект меньше, чем за 60 дней</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 garantBox">
                                        <img src = "img/garant3.png" width="147" height="147" alt=""/>
                                        <h4>До 3 лет гарантии</h4>
                                        <p>Выявленные недочеты подлежат <br/>бесплатному исправлению</p>
                                    </div>
                                </div>
                            </div>
                            <!--Форма-->
                            <div class="garantFormSmeta">

                                <div class = "formWrapper">
                                    <section>

                                        <h3 style="padding:10px 0px 0px 0px;font-size: 26px; text-align: center;font-family: PFDinBold;"><span>ОСТАВЬТЕ ЗАЯВКУ</span><br/>на составление сметы</h3>
                                        <form method="post" action="send.php" class="send_form">
                                            <div class = "smetaForm">
                                                <label>Выберите подарок:</label>
                                                <select style="background: #FFF3B8;" name="present">
                                                    <option value="Бесплатный вывоз мусора">Бесплатный вывоз мусора</option>
                                                    <option value="Консультация дизайнера">Консультация дизайнера</option>
                                                </select>
                                                <input type="text" placeholder = "Впишите ваше имя" name = "name" required/>
                                                <input type="text" placeholder = "Укажите номер телефона" name = "phone" required class="phone">
                                                <input type="text" value="МЫ ГАРАНТИРУЕМ ВАМ" name="counter" class="hide" />
                                                
                                                <div class="button"><button style = "background-color:#FED934 !important; text-shadow: 1px 1px 2px #EAC620, 0 0 1em #EAC620; color:#161616; padding: 7px 35px;">Получить смету бесплатно</button></div>
                                            </div>
                                        </form>
                                    </section>
                                    <p>* Ваши контактные данные в безопасности и не будут переданы третьим лицам</p>
                                </div>
                            </div>
                            <!--Выбор клиентов-->
                            <h3 class="vyborKlientov">ПОЧЕМУ НАС РЕКОМЕНДУЮТ ДРУЗЬЯМ И ЗНАКОМЫМ</h3>
                            <div class="row">
                                <div class = "wrapp1">
                                    <div class="col-lg-4 col-md-4 col-sm-12 garantBox">
                                        <img src = "img/garant4.png" width="83" height="60" alt=""/>
                                        <h4 style="margin-top: 14px;">Взаимодействие с клиентом<br/>и работа на результат</h4>
                                        <p>Мы вместе создаем план-график и советуемся с вами на каждом этапе</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 garantBox">
                                        <img src = "img/garant5.png" width="83" height="65" alt=""/>
                                        <h4>Работа <br/>в рамках сметы</h4>
                                        <p>Все платежи понятны и прописаны в договоре – никаких переплат</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 garantBox">
                                        <img src = "img/garant9.png" width="63" height="69" alt=""/>
                                        <h4>Опыт 14 лет</h4>
                                        <p>Мы делаем ремонт в квартирах и офисах с 2004 года</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!--Отделка под ключ-->
            <div class="clear"> </div>
            <div class="wrapp">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="mainCaption scrollDiv" id="link4">Отделка под ключ включает в себя:</h3>
                    </div>
                </div>

                <div class = "row">
                    <div class = "wrapp1">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="uslugiBox">
                                <h4>Отделка стен</h4>
                                <ul>
                                    <li><img src="/img/pokraska.gif" width="28" height="29" alt=""/>покраска</li>
                                    <li><img src="/img/pokleikaOboev.gif" width="28" height="29" alt=""/>поклейка обоев</li>
                                    <li><img src="/img/obshivka.gif" width="28" height="29" alt=""/>обшивка</li>
                                    <li><img src="/img/decoratShtulaturka.gif" width="28" height="29" alt=""/>декоративная штукатурка</li>
                                    <li><img src="/img/plitka.gif" width="28" height="29" alt=""/>облицовка плиткой</li>
                                </ul>
                            </div>
                            <div class="otherUslugiBox">
                                <ul>
                                    <li><img src="/img/razetki.gif" width="28" height="29" alt=""/>монтаж выключателей и розеток;</li>
                                    <li><img src="/img/provodka.gif" width="28" height="29" alt=""/>разводка электропроводки</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="uslugiBox">
                                <h4>Отделка потолка</h4>
                                <ul>
                                    <li><img src="/img/fakturnoePokr.gif" width="28" height="29" alt=""/>фактурное покрытие</li>
                                    <li><img src="/img/gipsokarton.gif" width="28" height="29" alt=""/>монтаж гипсокартона</li>
                                    <li><img src="/img/natyazgnPotolok.gif" width="28" height="29" alt=""/>натяжные</li>
                                    <li><img src="/img/podvesnPotolok.gif" width="28" height="29" alt=""/>подвесные потолки и пр</li>
                                </ul>
                            </div>
                            <div class="otherUslugiBox">
                                <ul>
                                    <li><img src="/img/truby.gif" width="28" height="29" alt=""/>разводка труб водоснабжения и канализации;</li>
                                    <li><img src="/img/santechnika.gif" width="28" height="29" alt=""/>установка сантехники</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="uslugiBox">
                                <h4>Устройство чистового пола</h4>
                                <ul>
                                    <li><img src="/img/parket.gif" width="28" height="29" alt=""/>паркет</li>
                                    <li><img src="/img/laminat.gif" width="28" height="29" alt=""/>ламинат</li>
                                    <li><img src="/img/plitka2.gif" width="28" height="29" alt=""/>плитка</li>
                                    <li><img src="/img/nalivPoly.gif" width="28" height="29" alt=""/>наливные полы</li>
                                    <li><img src="/img/kovry.gif" width="28" height="29" alt=""/>ковровые покрытия</li>
                                </ul>
                            </div>
                            <div class="otherUslugiBox">
                                <ul>
                                    <li><img src="/img/montazgDveri.gif" width="28" height="29" alt=""/>монтаж дверей</li>
                                    <li><img src="/img/other.gif" width="28" height="29" alt=""/>и прочее..</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Галерея-->
            <div class="clear"> </div>
        <!--<section id="dops">
			<div class="container">
				<div class="row">
					<h2>ЧЕМ МЫ ДОПОЛНИМ УСЛУГИ РЕМОНТА КВАРТИРЫ?</h2>
					<div class="col-sm-3">
						<div class="dop">
							<h3>Входные и межкомнатные двери</h3>
							<div class="pic"><img src="img/dop_img1.jpg" class="img-responsive"></div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="dop">
							<h3>НАТЯЖНЫЕ<br> ПОТОЛКИ</h3>
							<div class="pic"><img src="img/dop_img2.jpg" class="img-responsive"></div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="dop">
							<h3>КОНДИЦИОНИРОВАНИЕ И ВЕНТИЛЯЦИЯ</h3>
							<div class="pic"><img src="img/dop_img3.jpg" class="img-responsive"></div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="dop">
							<h3>СНАБЖЕНИЕ ЛЮБЫМИ МАТЕРИАЛАМИ</h3>
							<div class="pic"><img src="img/dop_img4.jpg" class="img-responsive"></div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
           
            <section class="partners wrapp">
                <h3 class="mainCaption">Наши партнёры</h3>

                <div id="slick-slider">
                        <a><img src="/img/logos/EPICENTR-1.png" width="178" height="104" alt="" /></a>
                        <a><img src="/img/logos/EPICENTR-2.png" width="178" height="104" alt="" /></a>
                        <a><img src="/img/logos/EPICENTR-3.png" width="178" height="104" alt="" /></a>
                        <a><img src="/img/logos/EPICENTR-4.png" width="178" height="104" alt="" /></a>
                        <a><img src="/img/logos/EPICENTR-5.png" width="178" height="104" alt="" /></a>
                        <a><img src="/img/logos/EPICENTR-6.png" width="178" height="104" alt="" /></a>
                        <a><img src="/img/logos/EPICENTR-7.png" width="178" height="104" alt="" /></a>
                        <a><img src="/img/logos/EPICENTR-8.png" width="178" height="104" alt="" /></a>
                        <a><img src="/img/logos/EPICENTR-9.png" width="178" height="104" alt="" /></a>
                        <a><img src="/img/logos/EPICENTR-10.png" width="178" height="104" alt="" /></a>
                        <a><img src="/img/logos/EPICENTR-11.png" width="178" height="104" alt="" /></a>
                    </div>
    

            </section>

            <!--Футер-->
            <footer class="wrapp">
                <h3>Остались вопросы? Звоните!</h3>
                <div><a href="#call-feedback" data-toggle="modal" data-target="#call-feedback" class="freeCall" attr-a="bottom">Бесплатный обратный звонок</a></div>
                <div class="footerPhone"><a href="tel://+380930152626">+38(093) 015 26 26</a><br>
                <a href="tel://+380684252233">+38(068) 425 22 33</a></div>
            </footer>
        </div>

        <!--Модальное окно заказ звонка-->
        <div class="modal fade" id="orderCall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="orderCallForm">
                <div class = "formWrapper1">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3>Заказать звонок</h3>

                    <form method="post" action="send.php" class="send_form">
                        <div class = "smetaForm">
                            <input type="text" placeholder = "Впишите ваше имя" name = "name" required/>
                            <input type="tel" placeholder = "Укажите номер телефона" name = "phone" required class="phone">
                            <input type="text" value="Заказать звонок" name="counter" class="hide" />
							<div class="yellowButton"><button type="submit">Отправить</button></div>
                            <p>* Ваши контактные данные в безопасности и не будут переданы третьим лицам</p>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!--Модальное окно заказ замерщика-->
        <div class="modal fade" id="orderZamer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="orderCallForm">
                <div class = "formWrapper1">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="font-size:24px;">Заказать замерщика</h3>

                    <form method="post" action="send.php" class="send_form">
                        <div class = "smetaForm">
                            <input type="text" placeholder = "Впишите ваше имя" name = "name" required/>
                            <input type="tel" placeholder = "Укажите номер телефона" name = "phone" required class="phone">
                            <input type="text" value="Проект стильного дизайна интерьера" name="counter" class="hide" />
                            <div class="yellowButton"><button type="submit">Заказать замерщика</button></div>
                            <p>* Ваши контактные данные в безопасности и не будут переданы третьим лицам</p>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="modal fade" id="orderZamer2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="orderCallForm">
                <div class = "formWrapper1">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="font-size:24px;">Заказать замерщика</h3>

                    <form method="post" action="send.php" class="send_form">
                        <div class = "smetaForm">
                            <input type="text" placeholder = "Впишите ваше имя" name = "name" required/>
                            <input type="tel" placeholder = "Укажите номер телефона" name = "phone" required class="phone">
                            <input type="text" value="Хороший
косметический ремонт" name="counter" class="hide" />                            
                            <div class="yellowButton"><button type="submit">Заказать замерщика</button></div>
                            <p>* Ваши контактные данные в безопасности и не будут переданы третьим лицам</p>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="modal fade" id="orderZamer3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="orderCallForm">
                <div class = "formWrapper1">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="font-size:24px;">Заказать замерщика</h3>

                    <form method="post" action="send.php" class="send_form">
                        <div class = "smetaForm">
                            <input type="text" placeholder = "Впишите ваше имя" name = "name" required/>
                            <input type="tel" placeholder = "Укажите номер телефона" name = "phone" required  class="phone">
                            <input type="text" value="Серьезный 
капитальный ремонт" name="counter" class="hide" />
                            <div class="yellowButton"><button type="submit">Заказать замерщика</button></div>
                            <p>* Ваши контактные данные в безопасности и не будут переданы третьим лицам</p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="call-feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="orderCallForm">
                <div class = "formWrapper1">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="font-size:24px;">Обратный звонок</h3>

                    <form method="post" action="send.php" class="send_form">
                        <div class = "smetaForm">
                            <input type="text" placeholder = "Впишите ваше имя" name = "name" required/>
                            <input type="tel" placeholder = "Укажите номер телефона" name = "phone" required  class="phone">
                            <input type="text" value="Заказать звонок" name="counter" class="hide" />
                            <div class="yellowButton"><button type="submit">Заказать</button></div>
                            <p>* Ваши контактные данные в безопасности и не будут переданы третьим лицам</p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
<!-- Калькулятор-->
        <div class="modal fade" id="calcRemont" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="orderCallForm">
                <div class = "formWrapper1">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 >Ориентировочная стоимость ремонта:</h3>
                    <div id="stoimostRemonta">50000 гривен</div>		
                    <form method="post" action="calc.php" class="send_form">
                        <div class = "smetaForm">
                            <p class="hiddenForm">
                                <input type="text" placeholder = "Впишите ваше имя" name = "name" required/>
                                <input type="tel" placeholder = "Укажите номер телефона" name = "phone" required class="phone">
                                <input type="hidden" name="remontParam" id="remontParam"/>
                                <input type="text" value="form6" name="counter" class="hide" />
                            </p>
                            <div class="yellowButton"><button id = "vyzovZamer">Получить смету бесплатно</button></div>
                            <p style="font-size:18px;">* Без учета стоимости материалов</p>
                            <p>** Ваши контактные данные в безопасности и не будут переданы третьим лицам</p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        
        <div class="modal fade" id="popup_complete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="orderCallForm">
                <div class = "formWrapper1">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 >Ваш запрос отправлен!</h3>
                    <h4 >Мы свяжемся с вами в ближайшее время.</h4>

                </div>
            </div>
        </div>

        <DIV ID="toTop" ></DIV>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.maskedinput.min.js"></script>
            <script src="js/jslib.js"></script>
            <script src="js/scripts.js"></script>
            <script src="js/lightbox.js"></script>
            <script src="js/calc.js"></script>
            <script src="/js/slick.min.js"></script>

   	
            <script>

                $(".bigImg img").hover(
                        function () {
                            $('#hidetext').css("display", "block");
                        }, function () {
                    $('#hidetext').css("display", "none");
                }
                );

                $("#hidetext").hover(
                        function () {
                            $('#hidetext').css("display", "block");
                        }, function () {
                    $('#hidetext').css("display", "none");
                }
                );
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() != 0) {
                            $('#toTop').fadeIn();
                        } else {
                            $('#toTop').fadeOut();
                        }
                    });
                    $('#toTop').click(function () {
                        $('body,html').animate({scrollTop: 0}, 800);
                    });
                });
            </script>
                        <script>
                                $(document).ready(function(){
                                    $('#slick-slider').slick({
                                        dots: false,
                                        infinite: true,
                                        speed: 300,
                                        autoplay: true,
                                        autoplaySpeed: 2000,
                                        slidesToShow: 4,
                                        slidesToScroll: 1,
                                        responsive: [
                                            {
                                            breakpoint: 1024,
                                            settings: {
                                                slidesToShow: 3,
                                                slidesToScroll: 3,
                                                infinite: true,
                                                dots: true
                                            }
                                            },
                                            {
                                            breakpoint: 600,
                                            settings: {
                                                slidesToShow: 2,
                                                slidesToScroll: 2
                                            }
                                            },
                                            {
                                            breakpoint: 480,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1
                                            }
                                            }
                                        ]
                                        });
                                })
                            </script>
  <script>
// Маска телефона
jQuery(function($) {
	$(".phone").mask("+38(999) 999-9999");
});

        
    <a href="tel:+380505664010" class="hide call-now">.</a>
    </body>
</html>
