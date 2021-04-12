// Массив, в котором будут храниться урлы страниц для "Варианты планировки" и "Выберите фасад"
var urlArr = [];
urlArr[0] = "a1.html";
urlArr[1] = "a2.html";
urlArr[2] = "b1.html";
urlArr[3] = "b2.html";
urlArr[4] = "c1.html";
urlArr[5] = "c2.html";

// Назначаем события всем элементам li, внутри ul с классом square
$('.square li').each(function(index, element){
	$(this).on('click', function(e){
		e.preventDefault();
		clickSquare($(this));
	});
});
// Функция, которая сработает при клике
function clickSquare(obj){
	// Удаляем активный класс, если есть у какого-либо элементам
	$('.square li').each(function(index, element){
		$(this).removeClass('active');
	});
	// Добавляем активный класс объекту, по которому кликнули
	obj.addClass('active');
	// Устанавливаем нужные ссылки элементам "Варианты планировки" и "Выберите фасад"
	str = obj.attr('class').split(" ");
	str = str[0];
	if(str == 'first'){
		$('.plan').children('a').eq(0).attr('href', urlArr[0]);
		$('.facade').children('a').eq(0).attr('href', urlArr[1]);
	}else if(str == 'center'){
		$('.plan').children('a').eq(0).attr('href', urlArr[2]);
		$('.facade').children('a').eq(0).attr('href', urlArr[3]);
	}else if(str == 'last'){
		$('.plan').children('a').eq(0).attr('href', urlArr[4]);
		$('.facade').children('a').eq(0).attr('href', urlArr[5]);
	}
	console.log(str);
}