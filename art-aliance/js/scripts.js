$(function(){

	 // Плавный скроллинг
	 function getTargetTop(elem){
			var id = elem.attr("href");
			return $(id).offset().top;
		}
		 $('#menu ul a').click(function(event) {
			var target = getTargetTop($(this));
			$('html, body').animate({scrollTop:target}, 900);
			event.preventDefault();
		});
		
		// Mobile version
		$(document).ready(function(){
			$('a').click(function(e){
				var h = $(window).height(),
					z = $(this);
				if( h < 768 ){
					if($(this).attr('href') == '#call-feedback' && $(z).attr('class') != 'freeCall'){
						e.preventDefault();
						setTimeout(function(){
							window.open($('a.call-now').attr('href'), 'Calling...');
							$('#call-feedback span').trigger('click');
						}, 100);
					}
				}
			})
		});

	

		// Калькулятор
		var tip = 1; 			// Тип помещения
		var square = 0; // Площадь помещения
		var typeOfRepair = 1; // Тип ремонта
		var designProject = 1; // Наличие дизайн-проекта
		var price;    // Финальная цена
		$('.checkLink').on('click', function(e){
			e.preventDefault();
			$('.checkLink').removeClass('act');
			$(this).addClass('act');
			// Определяем тип здания
			tip = Number($(this).attr('tip'));
			//alert(typeof(square));
		});

			// Вешаем событие на кнопку
		$('#calculateFinal').on('click', function(){
					// Определяем данные
					var info = ""; 		// Строка с параметрами
					var tipBuild =""; // Тип здания
					var tipInfo = ""; // Название заказанного ремонта
					var dp = ""; 			// Дизайн-проект да,нет
				square = Number($("#square").val());
				if(square == 0 || isNaN(square))
					square = 0;
				designProject = Number($('select.designProject').val());
				typeOfRepair = Number($('select.typeOfRepair').val());
				var kvm; // Стоимость квадратного метра
				// Определяем тип здания
				if(!isNaN(tip)){
					if(tip == 1 || tip == 2){
						if(typeOfRepair == 1){
							kvm = 2000;
						}else if(typeOfRepair == 2){
							kvm = 4000;
						}else if(typeOfRepair == 3){
							kvm = 6000;
						}
					}else if(tip==3){
						if(typeOfRepair == 1){
							kvm = 1500;
						}else if(typeOfRepair == 2){
							kvm = 3500;
						}else if(typeOfRepair == 3){
							kvm = 5000;
						}
					}
					price = square*kvm;
					if(designProject == 2)
						price = price + square*500;
					var str = price+" гривен";
					// Формируем строку с параметрами
					if(tip == 1)
						tipBuild = "Квартира";
					else if(tip == 2)
						tipBuild = "Помещение";
					else if(tip == 3)
						tipBuild = "Офис";
					if(typeOfRepair == 1)
						tipInfo = " Бюджетный ремонт ";
					else if(typeOfRepair == 2)
						tipInfo = " Капитальный ремонт ";
					else if(typeOfRepair == 3)
						tipInfo = " Эксклюзивный ремонт ";
					if(designProject == 2)
						dp = "да";
					if(designProject == 1)
						dp = "нет";
					info = "Заказан: "+tipInfo+"; Здание: "+tipBuild+"; Площадь: "+square+" квадратных метров; Дизайн-проект: "+dp+"; Стоимость: "+str;
					// Записываем данные в контейнер и форму
					$('#stoimostRemonta').text(str);
					$('#remontParam').val(info);
				}
		});

	
		// Кнопка "Вызов замерщика"
		$('#vyzovZamer').on('click', function(){
			// Проверяем скрыт ли div с классом hiddenForm и если да, то показываем его
			if(!$('.hiddenForm').is(':visible')){
				$('.hiddenForm').slideDown(300);
				$('.formWrapper1').css('max-height','440px');
			}else{

			}
		});
			
			$.support.css3d = supportsCSS3D();
			
			var container = $('#container');
			var container2 = $('#container2');
			var container3 = $('#container3');

			$('.rotate').click(function(e){
					container.toggleClass('flipped');
					if(!$.support.css3d){
						$('#front').toggle();
					}
				e.preventDefault();
			});
			
			$('.rotate2').click(function(e){
					container2.toggleClass('flipped');
					if(!$.support.css3d){
						$('#front2').toggle();
					}
				e.preventDefault();
			});
			
			$('.rotate3').click(function(e){
					container3.toggleClass('flipped');
					if(!$.support.css3d){
						$('#front3').toggle();
					}
				e.preventDefault();
			});
			$('#projectStyleDesignBack').click(function(e){
				e.preventDefault(); 
				container.removeClass('flipped');
			});
			$('#goodCosmaticRepairBack').click(function(e){
				e.preventDefault(); 
				container2.removeClass('flipped');
			});
			$('#goodCapitalRepairBack').click(function(e){
				e.preventDefault(); 
				container3.removeClass('flipped');
			});
			
			
			function supportsCSS3D() {
				var props = [
					'perspectiveProperty', 'WebkitPerspective', 'MozPerspective'
				], testDom = document.createElement('a');
					
				for(var i=0; i<props.length; i++){
					if(props[i] in testDom.style){
						return true;
					}
				}
				return false;
			}
	
		///////////////////////////////////////////////////////
		///// Галерея /////
		// Объект project будет содержать всю информацию о 1 наборе галлереи, 1 объект - 1 набор, все проекты объеденены в массив
		var count = 0;
		var projects = new Array(); // Это массив со всеми проектами
		var project7 = {
			img1_mini : 'img/gallery/01/k2_min.jpg',
			img1_max : 'img/gallery/01/k2_min.jpg',
			img2_mini : 'img/gallery/01/k3_min.jpg',
			img2_max : 'img/gallery/01/k3_min.jpg',
			img3_mini : 'img/gallery/01/k4_min.jpg',
			img3_max : 'img/gallery/01/k4_min.jpg',
			img4_mini : 'img/gallery/01/k5_min.jpg',
			img4_max : 'img/gallery/01/k5_min.jpg',
			img5_mini : 'img/gallery/01/k6_min.jpg',
			img5_max : 'img/gallery/01/k6_min.jpg',
			img6_mini : 'img/gallery/01/k7_min.jpg',
			img6_max : 'img/gallery/01/k7_min.jpg',
			img7_mini : 'img/gallery/01/k8_min.jpg',
			img7_max : 'img/gallery/01/k8_min.jpg',
			img8_mini : 'img/gallery/01/k9_min.jpg',
			img8_max : 'img/gallery/01/k9_min.jpg',
			imgBig_mini : 'img/gallery/01/k1_min.jpg',
			imgBig_max : 'img/gallery/01/k1_min.jpg',
			title : 'Капитальный ремонт трехкомнатной квартиры в новостройке',
			square : '102',
			price : '561 000',
			time : '75',
			description : '<img src="img/gallery/01/k10.jpg"/><img src="img/gallery/01/k11.jpg"/>Были проведены следующие работы: демонтаж перегородок, выравнивание стен, подготовка стен под покраску, поклейка обоев, стяжка пола, укладка напольного покрытия, монтаж потолков с точечными светильниками, замена входной двери, установка межкомнатных дверей, монтаж электрики под ключ, разводка и монтаж сантехники, ремонт санузла под ключ.'
		};
		var project2 = {
			img1_mini : 'img/gallery/02/k2_min.jpg',
			img1_max : 'img/gallery/02/k2_min.jpg',
			img2_mini : 'img/gallery/02/k3_min.jpg',
			img2_max : 'img/gallery/02/k3_min.jpg',
			img3_mini : 'img/gallery/02/k4_min.jpg',
			img3_max : 'img/gallery/02/k4_min.jpg',
			img4_mini : 'img/gallery/02/k5_min.jpg',
			img4_max : 'img/gallery/02/k5_min.jpg',
			img5_mini : 'img/gallery/02/k6_min.jpg',
			img5_max : 'img/gallery/02/k6_min.jpg',
			img6_mini : 'img/gallery/02/k7_min.jpg',
			img6_max : 'img/gallery/02/k7_min.jpg',
			img7_mini : 'img/gallery/02/k8_min.jpg',
			img7_max : 'img/gallery/02/k8_min.jpg',
			img8_mini : 'img/gallery/02/k5_min.jpg',
			img8_max : 'img/gallery/02/k5_min.jpg',
			imgBig_mini : 'img/gallery/02/k1_min.jpg',
			imgBig_max : 'img/gallery/02/k1_min.jpg',
			title : 'Комлексный ремонт квартиры общей площадью 93 м<sup>2</sup>',
			square : '93',
			price : '511 550',
			time : '79',
			description : 'Квартира нестандартной планировки, гостиная совмещена с кухней. Произведена стяжка пола, выравнивание стен, поклейка обоев, укладка разнообразных напольных покрытий. В квартире использовались двухуровневые потолки для придания сложности архитектуры, так же на полах в ванной комнате и холле выложен керамогранит с декоративными элементами. Все работы проводились по дизайн проекту!'
		};
		var project3 = {
			img1_mini : 'img/gallery/03/k2_min.jpg',
			img1_max : 'img/gallery/03/k2_min.jpg',
			img2_mini : 'img/gallery/03/k3_min.jpg',
			img2_max : 'img/gallery/03/k3_min.jpg',
			img3_mini : 'img/gallery/03/k4_min.jpg',
			img3_max : 'img/gallery/03/k4_min.jpg',
			img4_mini : 'img/gallery/03/k5_min.jpg',
			img4_max : 'img/gallery/03/k5_min.jpg',
			img5_mini : 'img/gallery/03/k6_min.jpg',
			img5_max : 'img/gallery/03/k6_min.jpg',
			img6_mini : 'img/gallery/03/k7_min.jpg',
			img6_max : 'img/gallery/03/k7_min.jpg',
			img7_mini : 'img/gallery/03/k8_min.jpg',
			img7_max : 'img/gallery/03/k8_min.jpg',
			img8_mini : 'img/gallery/04/k7_min.jpg',
			img8_max : 'img/gallery/04/k7_min.jpg',
			imgBig_mini : 'img/gallery/03/k1_min.jpg',
			imgBig_max : 'img/gallery/03/k1_min.jpg',
			title : 'Капитальный ремонт квартиры общей площадью 82 м<sup>2</sup>',
			square : '82',
			price : '451 500',
			time : '67',
			description : 'В квартире были произведены демонтажные работы. Провели подготовительные работы над потолком, стенами и полом. Произведена укадка ламината и кафельной плитки. Проведены все необходимые работы по монтажу потолков под ключ. Электромонтаж и установка сантехники, монтаж межкомнатных дверей.'
		};
		var project4 = {
			img1_mini : 'img/gallery/04/k2_min.jpg',
			img1_max : 'img/gallery/04/k2_min.jpg',
			img2_mini : 'img/gallery/04/k3_min.jpg',
			img2_max : 'img/gallery/04/k3_min.jpg',
			img3_mini : 'img/gallery/04/k4_min.jpg',
			img3_max : 'img/gallery/04/k4_min.jpg',
			img4_mini : 'img/gallery/04/k5_min.jpg',
			img4_max : 'img/gallery/04/k5_min.jpg',
			img5_mini : 'img/gallery/04/k6_min.jpg',
			img5_max : 'img/gallery/04/k6_min.jpg',
			img6_mini : 'img/gallery/04/k7_min.jpg',
			img6_max : 'img/gallery/04/k7_min.jpg',
			img7_mini : 'img/gallery/04/k8_min.jpg',
			img7_max : 'img/gallery/04/k8_min.jpg',
			img8_mini : 'img/gallery/01/k9_min.jpg',
			img8_max : 'img/gallery/01/k9_min.jpg',
			imgBig_mini : 'img/gallery/04/k1_min.jpg',
			imgBig_max : 'img/gallery/04/k1_min.jpg',
			title : 'Современный ремонт новостройки с дизайн проектом',
			square : '68',
			price : '374 000',
			time : '63',
			description : 'В квартире было решено объединить кухню с комнатой, был произведен демонтаж стены. Все работы проводились строго по дизайн проекту, а именно: демонтажные работы; подготовительные работы над: потолком, стенами, полами;  работа над сантехникой; финишная работа над: потолком, стенами, полами; работа над электромонтажом'
		};
		var project5 = {
			img1_mini : 'img/gallery/05/k2_min.jpg',
			img1_max : 'img/gallery/05/k2_min.jpg',
			img2_mini : 'img/gallery/05/k3_min.jpg',
			img2_max : 'img/gallery/05/k3_min.jpg',
			img3_mini : 'img/gallery/05/k4_min.jpg',
			img3_max : 'img/gallery/05/k4_min.jpg',
			img4_mini : 'img/gallery/05/k5_min.jpg',
			img4_max : 'img/gallery/05/k5_min.jpg',
			img5_mini : 'img/gallery/05/k6_min.jpg',
			img5_max : 'img/gallery/05/k6_min.jpg',
			img6_mini : 'img/gallery/05/k7_min.jpg',
			img6_max : 'img/gallery/05/k7_min.jpg',
			img7_mini : 'img/gallery/05/k8_min.jpg',
			img7_max : 'img/gallery/05/k8_min.jpg',
			img8_mini : 'img/gallery/05/k2_min.jpg',
			img8_max : 'img/gallery/05/k2_min.jpg',
			imgBig_mini : 'img/gallery/05/k1_min.jpg',
			imgBig_max : 'img/gallery/05/k1_min.jpg',
			title : 'Комплексный ремонт двухкомнатной квартиры для молодой семьи',
			square : '65',
			price : '357 500',
			time : '61',
			description : 'Проведены все необходимые подготовительные работы для выравнивания стен и пола, подготовку под обои и настил ламината. В квартире заменена вся проводка, проведены работы над сантехникой. Финишная работа над: потолком, стенами, полом. Ремонт делали исходя из пожеланий клиента, дизайн проект не использовался.'
		};
		var project6 = {
			img1_mini : 'img/gallery/06/k2_min.jpg',
			img1_max : 'img/gallery/06/k2_min.jpg',
			img2_mini : 'img/gallery/06/k3_min.jpg',
			img2_max : 'img/gallery/06/k3_min.jpg',
			img3_mini : 'img/gallery/06/k4_min.jpg',
			img3_max : 'img/gallery/06/k4_min.jpg',
			img4_mini : 'img/gallery/06/k5_min.jpg',
			img4_max : 'img/gallery/06/k5_min.jpg',
			img5_mini : 'img/gallery/06/k6_min.jpg',
			img5_max : 'img/gallery/06/k6_min.jpg',
			img6_mini : 'img/gallery/06/k7_min.jpg',
			img6_max : 'img/gallery/06/k7_min.jpg',
			img7_mini : 'img/gallery/06/k8_min.jpg',
			img7_max : 'img/gallery/06/k8_min.jpg',
			img8_mini : 'img/gallery/06/k2_min.jpg',
			img8_max : 'img/gallery/06/k2_min.jpg',
			imgBig_mini : 'img/gallery/06/k1_min.jpg',
			imgBig_max : 'img/gallery/06/k1_min.jpg',
			title : 'Отделка двухкомнатной квартиры под ключ',
			square : '70',
			price : '385 000',
			time : '72',
			description : 'Выравнивание, шпаклевка и поклейка обоев. Монтаж двухуровнего потолка из гипсокартона в одной из комнат, с последующей покраской. Выравнивание пола, монтаж теплого пола на балконе и в коридое, укладка керамической плитки на пол и стены, укладка ламината. Монтаж сантехники.'
		};
		var project1 = {
			img1_mini : 'img/gallery/07/k2_min.jpg',
			img1_max : 'img/gallery/07/k2_min.jpg',
			img2_mini : 'img/gallery/07/k3_min.jpg',
			img2_max : 'img/gallery/07/k3_min.jpg',
			img3_mini : 'img/gallery/07/k4_min.jpg',
			img3_max : 'img/gallery/07/k4_min.jpg',
			img4_mini : 'img/gallery/07/k5_min.jpg',
			img4_max : 'img/gallery/07/k5_min.jpg',
			img5_mini : 'img/gallery/07/k6_min.jpg',
			img5_max : 'img/gallery/07/k6_min.jpg',
			img6_mini : 'img/gallery/07/k3_min.jpg',
			img6_max : 'img/gallery/07/k3_min.jpg',
			img7_mini : 'img/gallery/07/k4_min.jpg',
			img7_max : 'img/gallery/07/k4_min.jpg',
			img8_mini : 'img/gallery/07/k5_min.jpg',
			img8_max : 'img/gallery/07/k5_min.jpg',
			imgBig_mini : 'img/gallery/07/k1_min.jpg',
			imgBig_max : 'img/gallery/07/k1_min.jpg',
			title : 'Капитальный ремонт однокомнатной квартиры в новостройке',
			square : '46',
			price : '253 000',
			time : '55',
			description : 'Монтаж двухуровневого потолка из гипсокартона со встраиваемыми светильниками на кухне. Так же использовалось нестандартное решение на полу, совмещение плитки с ламинатом. Проведены все необходимые работы по подготовке стен и пола к чистовой отделке. Финишная работа над стенами, полом и потолком. Вынос строительного мусора.'
		};
		// Добавляем объекты в массив
		projects.push(project1);
		projects.push(project2);
		projects.push(project3);
		projects.push(project4);
		projects.push(project5);
		projects.push(project6);
		projects.push(project7);
		
		// Функция, которая устанавливает значения
		function addNewItemGallary(obj){
			$('.img1').attr('src', obj.img1_mini);
			$('.img1').unwrap();
			imghtml = $('.img1').parent().html();
			if (obj.img1_max == '') $('.img1').parent().html('<div>'+imghtml+'</div>');
			else $('.img1').parent().html('<a>'+imghtml+'</a>');
			$('.img2').attr('src', obj.img2_mini);
			$('.img2').unwrap();
			imghtml = $('.img2').parent().html();
			if (obj.img2_max == '') $('.img2').parent().html('<div>'+imghtml+'</div>');
			else $('.img2').parent().html('<a>'+imghtml+'</a>');
			$('.img3').attr('src', obj.img3_mini);
			$('.img3').unwrap();
			imghtml = $('.img3').parent().html();
			if (obj.img3_max == '') $('.img3').parent().html('<div>'+imghtml+'</div>');
			else $('.img3').parent().html('<a>'+imghtml+'</a>');
			$('.img4').attr('src', obj.img4_mini);
			$('.img4').unwrap();
			imghtml = $('.img4').parent().html();
			if (obj.img4_max == '') $('.img4').parent().html('<div>'+imghtml+'</div>');
			else $('.img4').parent().html('<a>'+imghtml+'</a>');
			$('.img5').attr('src', obj.img5_mini);
			$('.img5').unwrap();
			imghtml = $('.img5').parent().html();
			if (obj.img5_max == '') $('.img5').parent().html('<div>'+imghtml+'</div>');
			else $('.img5').parent().html('<a>'+imghtml+'</a>');
			$('.img6').attr('src', obj.img6_mini);
			$('.img6').unwrap();
			imghtml = $('.img6').parent().html();
			if (obj.img6_max == '') $('.img6').parent().html('<div>'+imghtml+'</div>');
			else $('.img6').parent().html('<a>'+imghtml+'</a>');
			$('.img7').attr('src', obj.img7_mini);
			$('.img7').unwrap();
			imghtml = $('.img7').parent().html();
			if (obj.img7_max == '') $('.img7').parent().html('<div>'+imghtml+'</div>');
			else $('.img7').parent().html('<a>'+imghtml+'</a>');
			$('.img8').attr('src', obj.img8_mini);
			$('.img8').unwrap();
			imghtml = $('.img8').parent().html();
			if (obj.img8_max == ''){
				$('.img8').parent().html('<div>'+imghtml+'</div>');
			}else{
				console.log(obj.img8_max);
				$('.img8').parent().html('<a>' + imghtml + '</a>');
			}
			$('.img9').attr('src', obj.imgBig_mini);
			$('.img9').parent().attr('href', obj.imgBig_max);
			$('.projectName').html(obj.title);
			$('.gallSquare').text(obj.square);
			$('.gallPrice').text(obj.price);
			$('.gallTime').text(obj.time);
			$('.gallaryText').html(obj.description);
		}
		
		// События на кнопки листания
		function addEventList(summand){
			if((count == projects.length-1) && (summand == 1)) count = -1;
			if(count == 0 && summand == -1) count = projects.length;
			count=count+summand;
			addNewItemGallary(projects[count]);
		}
		// Предзагрузка изображений
		function preloadImages(projects){
			for(var i=0; i<projects.length; i++){
				$("<img />").attr("src", projects[i].img1_mini);
				$("<img />").attr("src", projects[i].img2_mini);
				$("<img />").attr("src", projects[i].img3_mini);
				$("<img />").attr("src", projects[i].img4_mini);
				$("<img />").attr("src", projects[i].img5_mini);
				$("<img />").attr("src", projects[i].img6_mini);
				$("<img />").attr("src", projects[i].img7_mini);
				$("<img />").attr("src", projects[i].img8_mini);
				$("<img />").attr("src", projects[i].imgBig_mini);
			}

		}
		// Тестовый вызов функции
		//addNewItemGallary(project2);
		$('#arrowLeft').on('click', function(e){
			e.preventDefault();
			addEventList(-1);
		});
		
		$('#arrowRight').on('click', function(e){
			e.preventDefault();
			addEventList(1)
		});
		
		// Изначально установка первого проекта
		preloadImages(projects);
		addNewItemGallary(projects[count]);
		
		// Костыль лайтбокс
		// $('img').on('click', function(){
		// 	if($(window).width()>769)
		// 		minWidth = "980px";
		// 	else
		// 		minWidth = "745px";
		// 	$('#lightboxOverlay').attr('style', 'min-width:'+minWidth+'; min-height:100%; display:block; width:100% important;');
		// })
		//$('#lightboxOverlay').attr('style', 'min-width:745px; min-height:100%; display:block');
	});


