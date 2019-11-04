"use strict";

function getlotto(){
	var quantity;
	var ticket = [], tickets = [];
	var arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90];

	function compareRandom(a, b) {
		return Math.random() - 0.5;
	};

	function compareNumeric(a, b) {
	  return a - b;
	};

	function getTicket() {
		arr.sort(compareRandom);
		var tmp = [];
		for (var i = 0; i <= arr.length; i++) {
			tmp[i] = arr[i];
		};
		ticket = tmp.splice(0,30);
	};

	function createTickets() {
		quantity = prompt('Сколько билетов Вам нужно?','1');
		for (var k = 1; k <= quantity; k++) {
			getTicket();
			//tickets = tickets.concat(ticket); // очень медленно, циклом в 9 раз быстрее
			for (var i = 0; i < 30; i++) {
				tickets[i + (k * 30 - 30)] = ticket[i];
			};
		};
	};

	function paintover() {
		var red = false;
		for (var count = 1; count <= quantity; count++) {
			document.write('Билет № ' + count);
			ticket = tickets.splice(0,30);
			document.write('<table style="border-collapse: collapse; text-align: center;  width: 300px;">');
			for (var i = 0; i < 30; i += 5) {
				document.write('<tr>');
				for (var j = i; j < i+5; j++) {
					for (var cn = 0; cn < 87; cn++) { // используем 87 чисел из 90
						if (arr[cn] == ticket[j] ) {
							red = true;
							break;
						} else {
							red = false;
						};
					};
					if (red) {
					document.write('<td style="padding: 3px; border: 1px solid black;">' + '<font color="red">' + ticket[j] + '</font>' + '</td>')
					} else {
					document.write('<td style="padding: 3px; border: 1px solid black;">' + ticket[j] + '</td>')
					};
				};
				document.write('</tr>');
			};
			document.write('</table>');
			document.write('<br />');
		};
		document.write('Невыпавшие числа: ' + arr.slice(87,90).sort(compareNumeric));
		document.write('<br />');
		document.write('Порядок выпадения чисел: ' + arr.slice(0,87));
	};

	function from2to4(numn, n) {
		for (var i = 0; i < tickets.length; i+=30 ) {
		var tempticket = tickets.slice(i, i+30);
			for (var j = 0; j < 30; j+=5) {
				var string = tempticket.slice(j, j+5);
				for (var k = 0; k < string.length - (n - 1); k++) {
					var tempnumbers = string.slice(k, k+n);
					if (numn.sort(compareNumeric).join() == tempnumbers.sort(compareNumeric).join()) {
						alert('Поздравляем! Вы выиграли!\nСовпадение первых ' + n + ' чисел идущих подряд\nв любой из строк в билете №' + (i/30 + 1) + '!');
					};
				};
			};
		};
	};

	function from5to30(numn, n) {
		for (var i = 0; i < tickets.length; i += n) {
			var tempticket = tickets.slice(i, i+n);
			if (numn.sort(compareNumeric).join() == tempticket.sort(compareNumeric).join()) {
				alert('Поздравляем! Вы выиграли!\nСовпадение первых ' + n + ' чисел в билете №' + (i/30 + 1) + '!');
			};
		};
	};

	function from31to90(numn, n) {
		for (var i = 0; i < tickets.length; i += 30) {
			var tempticket = tickets.slice(i, i+30);
			var counter = 30;
			for (var j = 0; j < 87; j++) {
				if (counter != 0) {
					for (var k = 0; k < tempticket.length; k++) {
						if (numn[j] == tempticket[k]) {
							counter--;
							break;
						};
					};
				} else {
					break;
				};
			};
			if (counter == 0) {
				alert('Поздравляем! Вы выиграли!\nВы закрыли билет на ' + j + ' ходе в билете №' + (i/30 + 1) + '!');
			};
		};
	};

	function showrules() {
		document.write('В игре участвуют все билеты. Выигрывают билеты в которых:');
		document.write('<br />');
		document.write('1. Совпали первые 2 выпавших числа в любой из строк билета;');
		document.write('<br />');
		document.write('2. Совпали первые 3 выпавших числа в любой из строк билета;');
		document.write('<br />');
		document.write('3. Совпали первые 4 выпавших числа в любой из строк билета;');
		document.write('<br />');
		document.write('4. Совпали первые 5 выпавших числа в любой из строк билета;');
		document.write('<br />');
		document.write('5. Совпали первые 10 выпавших числа в любой трети билета;');
		document.write('<br />');
		document.write('6. Совпали первые 15 выпавших числа в любой половине билета;');
		document.write('<br />');
		document.write('7. Совпали первые 30 выпавших числа в билете;');
		document.write('<br />');
		document.write('8. Совпали все числа в билете.');
		document.write('<br />');
		document.write('<br />');
	};

	function lotto(){
		showrules();
		createTickets();
		arr.sort(compareRandom);
		from2to4(arr.slice(0,2), 2);
		from2to4(arr.slice(0,3), 3);
		from2to4(arr.slice(0,4), 4);
		from5to30(arr.slice(0,5), 5);
		from5to30(arr.slice(0,10), 10);
		from5to30(arr.slice(0,15), 15);
		from5to30(arr.slice(0,30), 30);
		from31to90(arr.slice(0,87));
		paintover();
	};
	lotto();
};