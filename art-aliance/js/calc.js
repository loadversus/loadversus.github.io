$(document).ready(function() {
    
    // Menu
    $('.mobile-menu').click(function(e){
        e.preventDefault();
        $('#menu').toggleClass('active');
    })
    $('#menu *').click(function(e){
        e.preventDefault();
        $('#menu').removeClass('active');
	})
	
	// remove click
	$('.bigImg a, .bigImg img').click(function(e){
		if($(this).attr != '#'){
			e.preventDefault();
		}
	});
	$('.littleImg a, .littleImg *').click(function(e){
		e.preventDefault();
	})
	$('.littleImg').find('.nonclick').click(function(e){
		e.preventDefault();
	})

	function number_format(number, decimals, dec_point, thousands_sep) {
		number = (number + '')
				.replace(/[^0-9+\-Ee.]/g, '');
		var n = !isFinite(+number) ? 0 : +number,
				prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
				sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
				dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
				s = '',
				toFixedFix = function (n, prec) {
					var k = Math.pow(10, prec);
					return '' + Math.round(n * k) / k;
				};
		// Fix for IE parseFloat(0.55).toFixed(0) = 0;
		s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
				.split('.');
		if (s[0].length > 3) {
			s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
		}
		if ((s[1] || '')
				.length < prec) {
			s[1] = s[1] || '';
			s[1] += new Array(prec - s[1].length + 1)
					.join('0');
		}
		return s.join(dec);
	}

	$(function () {
		var totals = {};
		var info = [];
		
		function updateTotals() {
			var total = 0;
			for (var id in totals) {
				if (totals.hasOwnProperty(id)) {
					total += totals[id];
				}
			}
			$('.calc-detailed-total').html(number_format(total, 2, '.', ''));
		}

		// Сброс калькулятора
		$(document).ready(function(){
			$('button.clean-submit').click(function(e){
				e.preventDefault();
				$('#calc-sec input').val('');
				$('#calc-sec .calc-detailed-total').text('0.00');
				$('#calc-sec .category-item > td:nth-child(5)').text('0.00');
				updateTotals(total = 0, totals = {});
			})
		});
		
		$('#cost-sheet-form').on('submit', function (e) {
			e.preventDefault();
			var found = false;
			table.find('input.calculate').each(function () {
				var el = $(this);
				var value = parseFloat(el.val());
				if (!isNaN(value) && value > 0) {
					found = true;
					return;
				}
			});
			if (!found) {
				alert('Необходимо заполнить данные для формирования сметы.');
				return;
			}
			let data = '№;Наименование работ;Цена;Кол-во;Ед.изм.;Стоимость, грн.' + "\r\n";
			info.sort(function(a, b) { // сортировка по id категории и виду работ
				if(a['catid'] === b['catid']) {
					return a['id'] - b['id'];
				} else {
					return a['catid'] - b['catid'];
				}
			});
			let catid = 0;
			let npp;
			for(i in info) {
				if(catid != info[i]['catid']) {
					data += info[i]['catname'] + "\r\n";
					catid = info[i]['catid'];
					npp = 1;
				}
				data += npp++ + ';' + info[i]['name'] + ';' + info[i]['price'] + ';' + info[i]['count'] + ';' + info[i]['unit'] + ';' + info[i]['cost'] + "\r\n";
			}
			makeFile(data);
			location.reload();
		});

		function makeFile(csvData) {
			var now = new Date();
			d = [
			  '0' + (now.getMonth() + 1),
			  '0' + now.getDate(),
			  '0' + now.getHours(),
			  '0' + now.getMinutes()
			].map(component => component.slice(-2)); // take last 2 digits of every component
			// join the components into date
			var strYMD = now.getFullYear() + d.slice(0, 2).join('') + '_' + d.slice(2).join('');
			var filename = 'smeta-export-' + strYMD + '.csv';
			var BOM = "\uFEFF";
			csvData = BOM + csvData;
			var blob = new Blob([csvData], { type: "text/csv;charset=utf-8" });
			saveAs(blob, filename);
		}

		var table = $('#calc-detailed table');

		table.find('input.calculate').on('change keyup', function (e) {
			var el = $(this);
			var id = $.trim(el.data('id'));
			if (!(id in totals)) {
				totals[id] = 0;
			}
			var price = parseFloat($.trim(el.data('price')));
			if (isNaN(price) || price < 0) {
				price = 0;
			}
			var count = parseFloat(el.val());
			if (isNaN(count) || count < 0) {
				count = 0;
				if (e.type == 'change') {
					el.val(0);
				}
			}
			var total = count * price;
			totals[id] = count * price;
			if(count > 0) {
				info[id] = {};
				info[id]['count'] = count;
				// add name and...
				info[id]['price'] = price;
				let item = el.closest('tr').find("td:first");
				info[id]['id'] = id;
				info[id]['name'] = $.trim(item.html());
				info[id]['unit'] = $.trim(item.next('td').html());
				if(info[id]['unit'] === 'м²') {
					info[id]['unit'] = 'кв.м';
				}
				let tdcat = el.closest('tr').prevAll('tr:has(.category-title):first').children('td');
				info[id]['catname'] = tdcat.text();
				info[id]['catid'] = tdcat.data('id');
				info[id]['cost'] = totals[id];
			} else if(id in info) {
				delete info[id];
			}
			el.closest('td').next('td').html(number_format(total, 2, '.', ''));
			updateTotals();
		});

		table.find('.category-title').on('click', function (e) {
			e.preventDefault();
			var el = $(this);
			var id = el.data('id');
			if (el.hasClass('collapsed')) {
				el.removeClass('collapsed');
				table.find('.category-items-' + id).css({'display':'table-row'});
				table.find('.title.category-items-' + id).css('display', 'block');
			} else {
				el.addClass('collapsed');
				table.find('.category-items-' + id).hide();
			}
		});
	});
});