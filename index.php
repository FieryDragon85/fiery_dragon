<html>
	<head>
		<title>Сайт pau.su</title>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	    <link rel="stylesheet" type="text/css" href="style.css">    

		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		   ym(50538220, "init", {
				id:50538220,
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
		   });
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/50538220" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->

		<script src="checkSubmit.js" type="text/javascript" language="javascript"></script>
	</head>
	<body>
		<script src="JavaScript.js"></script>
		<script src="lotto.js"></script>
		<script src="random.js"></script>
		<br />
		<table>
			<tr style="width:1000px;text-align: center;font-weight:bold">
				<td style="border: 0px solid black;">
					<button class="Button textShadow" type="button" id="calculate" onclick="location.href = 'http://pau.su/calculate.php'">Открыть калькулятор</button>
				</td>
			</tr>
			<tr>
				<td style="border: 0px solid black;">
					<br />
				</td>
			</tr>
			<tr>
				<td style="border: 0px solid black;">
					<button class="Button textShadow" type="button" id="lotto" onclick="getlotto()">Играть в лото</button>
				</td>
			</tr>
			<tr>
				<td style="border: 0px solid black;">
					<br />
				</td>
			</tr>
			<tr>
				<td style="border: 0px solid black;">
					<button class="Button textShadow" type="button" id="random" onclick="getrandom()">Рандом (от 1 до 45)</button>
				</td>
			</tr>
			<tr>
				<td style="border: 0px solid black;">
					<br />
				</td>
			</tr>
			<tr>
				<td style="border: 0px solid black;font-weight:bold;">Дата с которой произвести смещение:
					<input style="width:35px;font-weight:bold;" id="setday" onchange="change()" value=13 />.
					<input style="width:35px;font-weight:bold;" id="setmonth" onchange="change()" value=3 />.
					<input style="width:35px;font-weight:bold;" id="setyear" onchange="change()" value=2019 />г.<br />
					Смещение: <input style="width:35px;font-weight:bold;" id="setbias" onchange="change()" value=0 />дней.
				</td>
			</tr>
			<tr>
				<td style="border: 0px solid black;">
					<button class="Button textShadow" type="button" id="calculatedate" onclick="calculatedate()">Вычислить дату</button>
				</td>
			</tr>
			<tr>
				<td style="border: 0px solid black;font-size:14pt;font-weight:bold;color:#AF0000;" id="showdate"></td>
			</tr>
		</table>
		<script>
			function calculatedate() {
				let day, month, year, bias;
				day = document.getElementById("setday").value;
				month = document.getElementById("setmonth").value - 1;
				year = document.getElementById("setyear").value;
				bias = document.getElementById("setbias").value;
				let d = new Date(year, month, day);
				d.setDate(d.getDate() + +bias);
				day = d.getDate();
				month = d.getMonth();
				year = d.getFullYear();
				montharr = ["января","февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря"];
				for (let i = 0; i < montharr.length; i++) {
					if (i == month) {
						month = montharr[i];
						break;
					};
				};
				//document.getElementById("showdate").innerHTML = '<br />' + d;
				document.getElementById("showdate").innerHTML = day + ' ' + month + ' ' + year;
			};
			window.onload = function setdate() {
				let date = new Date();
				let dateday = date.getDate();
				let datemonth = date.getMonth();
				let dateyear = date.getFullYear();
				document.getElementById("setday").value = dateday;
				document.getElementById("setmonth").value = datemonth + 1;
				document.getElementById("setyear").value = dateyear;
			};
		</script>
	</body>
</html>