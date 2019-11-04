<!DOCTYPE HTML>
<html>
	<head>
		<title>Калькулятор для любимой!</title>
		<meta charset="utf-8">
		<link href="style.css" rel="stylesheet">
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
	</head>
	<body>
		<table>
			<tr>
				<td colspan="2" style="text-align:left;border: 0px solid black;">
					<input style="text-align:left;width:100px;font-weight:bold" type="text" id="" value='Табл. 1' />
				</td>
				<td style="border: 0px solid black;">
					<input style="width:170px;font-weight:bold" type="text" id="setdatet1" value='' />
				</td>
				<td colspan="14" style="border: 0px solid black;">
					<input style="width:1000px;font-weight:bold" type="text" id="" value="Участие в расходах по содержанию арендованных помещений" />
				</td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td style="font-weight:bold" width="50" rowspan="2">№ заказа</td>
				<td style="font-weight:bold" width="50" rowspan="2">№ п/п</td>
				<td style="font-weight:bold" width="170" rowspan="2">Арендаторы</td>
				<td style="font-weight:bold" width="70" rowspan="2" >№ договора</td>
				<td style="font-weight:bold" width="70">Тепло-энергия</td>
				<td style="font-weight:bold" width="70"><input style="width:65px;font-weight:bold;" id="tarifteploid" onchange="change(this.id)" value=1663.5 /></td>
				<td style="font-weight:bold" width="70">Вода</td>
				<td style="font-weight:bold" width="70"><input style="width:65px;font-weight:bold;" id="tarifvodaid" onchange="change(this.id)" value=33.96 /></td>
				<td style="font-weight:bold" width="70">Стоки</td>
				<td style="font-weight:bold" width="70"><input style="width:65px;font-weight:bold;" id="tarifstokiid" onchange="change(this.id)" value=30.23 /></td>
				<td style="font-weight:bold" width="70">Электро-энергия</td>
				<td style="font-weight:bold" width="70">
					<input style="width:70px;font-weight:bold;" id="tarifelektrogapolingid" onchange="change(this.id)" value=4.95 />
					<input style="width:70px;font-weight:bold;" id="tarifelektroteshspdmid" onchange="change(this.id)" value=3.8 />
				</td>
				<td style="width:100px;font-weight:bold">Итого ком. услуги</td>
				<td style="width:70px;font-weight:bold">ОбщЭксРас</td>
				<td style="width:100px;font-weight:bold">Итого без НДС</td>
				<td style="width:100px;font-weight:bold;">НДС 20%</td>
				<td style="width:100px;font-weight:bold">Всего к оплате</td>
			</tr>
			<tr>
				<td style="font-weight:bold">ГКал</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">м3</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">м3</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">КВтч</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">руб</td>
			</tr>
			<tr>
				<td>
					<input style="width:50px" type="text" id="" value='О8300' />
				</td>
				<td rowspan="2">1</td>
				<td rowspan="2">
					<input style="width:170px" type="text" id="" value='НОЧУ ДО "Школа Лингва"' />
				</td>
				<td><input style="width:70px" type="text" id="" value='118' /></td>
				<td><input type="text" id="lin1teplo" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="lin1teplovych"></td>
				<td><input type="text" id="lin1voda" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="lin1vodavych"></td>
				<td><input type="text" id="lin1stoki" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="lin1stokivych"></td>
				<td><input type="text" id="lin1elektro" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="lin1elektrovych"></td>
				<td id="lin1iku"></td>
				<td><input style="width:70px;" type="text" id="lin1oer" onchange="change(this.id)" value=462.44 /></td>
				<td id="lin1beznds"></td>
				<td id="lin1nds"></td>
				<td id="lin1snds"></td>
			</tr>
			<tr>
				<td>
					<input style="width:50px" type="text" id="" value='' />
				</td>
				<td><input style="width:70px" type="text" id="" value='117' /></td>
				<td><input type="text" id="lin2teplo" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="lin2teplovych"></td>
				<td><input type="text" id="lin2voda" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="lin2vodavych"></td>
				<td><input type="text" id="lin2stoki" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="lin2stokivych"></td>
				<td><input type="text" id="lin2elektro" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="lin2elektrovych"></td>
				<td id="lin2iku"></td>
				<td><input style="width:70px;" type="text" id="lin2oer" onchange="change(this.id)" value=472.68 /></td>
				<td id="lin2beznds"></td>
				<td id="lin2nds"></td>
				<td id="lin2snds"></td>
			</tr>
			<tr>
				<td>
					<input style="width:50px" type="text" id="" value='' />
				</td>
				<td>2</td>
				<td>
					<input type="text" id="" value='ООО "СП-ДМ"' />
				</td>
				<td><input style="width:70px" type="text" id="" value='95' /></td>
				<td><input type="text" id="spdmteplo" onchange="change(this.id)" value=17.32 style="width:70px;" /></td>
				<td id="spdmteplovych"></td>
				<td><input type="text" id="spdmvoda" onchange="change(this.id)" value=9.00 style="width:70px;" /></td>
				<td id="spdmvodavych"></td>
				<td><input type="text" id="spdmstoki" onchange="change(this.id)" value=9.00 style="width:70px;" /></td>
				<td id="spdmstokivych"></td>
				<td><input type="text" id="spdmelektro" onchange="change(this.id)" value=250.00 style="width:70px;" /></td>
				<td id="spdmelektrovych"></td>
				<td id="spdmiku"></td>
				<td><input style="width:70px;" type="text" id="spdmoer" onchange="change(this.id)" value=4680.00 /></td>
				<td id="spdmbeznds"></td>
				<td id="spdmnds"></td>
				<td id="spdmsnds"></td>
			</tr>
			<tr>
				<td>
					<input style="width:50px" type="text" id="" value='' />
				</td>
				<td>3</td>
				<td>
					<input style="width:170px" type="text" id="" value='ИП "Тешабоева Г.А"' />
				</td>
				<td><input style="width:70px" type="text" id="" value='120' /></td>
				<td><input type="text" id="teshteplo" onchange="change(this.id)" value=6.15 style="width:70px;" /></td>
				<td id="teshteplovych"></td>
				<td><input type="text" id="teshvoda" onchange="change(this.id)" value=5.25 style="width:70px;" /></td>
				<td id="teshvodavych"></td>
				<td><input type="text" id="teshstoki" onchange="change(this.id)" value=5.25 style="width:70px;" /></td>
				<td id="teshstokivych"></td>
				<td><input type="text" id="teshelektro" onchange="change(this.id)" value=450.00 style="width:70px;" /></td>
				<td id="teshelektrovych"></td>
				<td id="teshiku"></td>
				<td><input style="width:70px;" type="text" id="teshoer" onchange="change(this.id)" value=1484.00 /></td>
				<td id="teshbeznds"></td>
				<td id="teshnds"></td>
				<td id="teshsnds"></td>
			</tr>
			<tr>
				<td>
					<input style="width:50px" type="text" id="" value='' />
				</td>
				<td>4</td>
				<td>
					<input type="text" id="" value='ИП "Гапонова А.А"' />
				</td>
				<td><input style="width:70px" type="text" id="" value='119' /></td>
				<td><input type="text" id="gapoteplo" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="gapoteplovych"></td>
				<td><input type="text" id="gapovoda" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="gapovodavych"></td>
				<td><input type="text" id="gapostoki" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="gapostokivych"></td>
				<td><input type="text" id="gapoelektro" onchange="change(this.id)" style="width:70px;" /></td>
				<td id="gapoelektrovych"></td>
				<td id="gapoiku"></td>
				<td><input style="width:70px;" type="text" id="gapooer" onchange="change(this.id)" value=182.48 /></td>
				<td id="gapobeznds"></td>
				<td id="gaponds"></td>
				<td id="gaposnds"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td style="font-weight:bold">Итого:</td>
				<td></td>
				<td id="itogoteplo" style="font-weight:bold"></td>
				<td id="itogoteplovych" style="font-weight:bold"></td>
				<td id="itogovoda" style="font-weight:bold"></td>
				<td id="itogovodavych" style="font-weight:bold"></td>
				<td id="itogostoki" style="font-weight:bold"></td>
				<td id="itogostokivych" style="font-weight:bold"></td>
				<td id="itogoelektro" style="font-weight:bold"></td>
				<td id="itogoelektrovych" style="font-weight:bold"></td>
				<td id="itogoiku" style="font-weight:bold"></td>
				<td id="itogooer" style="font-weight:bold"></td>
				<td id="itogobeznds" style="font-weight:bold"></td>
				<td id="itogonds" style="font-weight:bold"></td>
				<td id="itogosnds" style="font-weight:bold"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:left;border: 0px solid black;">
					<input style="text-align:left;width:100px;font-weight:bold" type="text" id="" value='Табл. 2' />
				</td>
				<td style="border: 0px solid black;">
					<input style="width:170px;font-weight:bold" type="text" id="setdatet2" value='' />
				</td>
				<td colspan="14" style="border: 0px solid black;">
					<input style="width:1000px;font-weight:bold" type="text" id="" value="Услуги по предоставлению энергоносителей (на технологию)" />
				</td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td style="font-weight:bold" rowspan="2">№ заказа</td>
				<td style="font-weight:bold" rowspan="2">№ п/п</td>
				<td style="font-weight:bold" rowspan="2">Арендаторы</td>
				<td style="font-weight:bold" rowspan="2" >№ договора</td>
				<td style="font-weight:bold">Тепло-энергия</td>
				<td style="font-weight:bold"><input style="width:65px;font-weight:bold;" id="tarifteploidt2" onchange="change(this.id)" value=1663.5 /></td>
				<td style="font-weight:bold">Вода</td>
				<td style="font-weight:bold"><input style="width:65px;font-weight:bold;" id="tarifvodaidt2" onchange="change(this.id)" value=33.96 /></td>
				<td style="font-weight:bold">Стоки</td>
				<td style="font-weight:bold"><input style="width:65px;font-weight:bold;" id="tarifstokiidt2" onchange="change(this.id)" value=30.23 /></td>
				<td style="font-weight:bold">Электро-энергия</td>
				<td style="font-weight:bold">
					<input style="width:70px;font-weight:bold;" id="tarifelektroteshspdmidt2" onchange="change(this.id)" value=3.8 />
				</td>
				<td style="font-weight:bold">Итого ком. услуги</td>
				<td style="font-weight:bold">ОбщЭксРас</td>
				<td style="font-weight:bold">Итого без НДС</td>
				<td style="font-weight:bold;">НДС 20%</td>
				<td style="font-weight:bold">Всего к оплате</td>
			</tr>
			<tr>
				<td style="font-weight:bold">ГКал</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">м3</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">м3</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">КВтч</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">руб</td>
				<td style="font-weight:bold">руб</td>
			</tr>
			<tr>
				<td>
					<input style="width:50px" type="text" id="" value='' />
				</td>
				<td>1</td>
				<td>
					<input style="width:170px" type="text" id="" value='ООО "СП-ДМ"' />
				</td>
				<td><input style="width:70px" type="text" id="" value='95a' /></td>
				<td><input type="text" id="spdmteplot2" onchange="change(this.id)" value=0.00 style="width:70px;" /></td>
				<td id="spdmteplovycht2"></td>
				<td><input type="text" id="spdmvodat2" onchange="change(this.id)" value=210.00 style="width:70px;" /></td>
				<td id="spdmvodavycht2"></td>
				<td><input type="text" id="spdmstokit2" onchange="change(this.id)" value=210.00 style="width:70px;" /></td>
				<td id="spdmstokivycht2"></td>
				<td><input type="text" id="spdmelektrot2" onchange="change(this.id)" value=12122.00 style="width:70px;" /></td>
				<td id="spdmelektrovycht2"></td>
				<td id="spdmikut2"></td>
				<td><input style="width:70px;" type="text" id="spdmoert2" onchange="change(this.id)" value=4680.00 /></td>
				<td id="spdmbezndst2"></td>
				<td id="spdmndst2"></td>
				<td id="spdmsndst2"></td>
			</tr>
			<tr>
				<td>
					<input style="width:50px" type="text" id="" value='' />
				</td>
				<td>2</td>
				<td>
					<input style="width:170px" type="text" id="" value='ИП "Тешабоева Г.А"' />
				</td>
				<td><input style="width:70px" type="text" id="" value='120a' /></td>
				<td><input type="text" id="teshteplot2" onchange="change(this.id)" value=0.00 style="width:70px;" /></td>
				<td id="teshteplovycht2"></td>
				<td><input type="text" id="teshvodat2" onchange="change(this.id)" value=29.75 style="width:70px;" /></td>
				<td id="teshvodavycht2"></td>
				<td><input type="text" id="teshstokit2" onchange="change(this.id)" value=29.75 style="width:70px;" /></td>
				<td id="teshstokivycht2"></td>
				<td><input type="text" id="teshelektrot2" onchange="change(this.id)" value=12719.00 style="width:70px;" /></td>
				<td id="teshelektrovycht2"></td>
				<td id="teshikut2"></td>
				<td><input style="width:70px;" type="text" id="teshoert2" onchange="change(this.id)" value=1484.00 /></td>
				<td id="teshbezndst2"></td>
				<td id="teshndst2"></td>
				<td id="teshsndst2"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td style="font-weight:bold">Итого:</td>
				<td></td>
				<td id="itogoteplot2" style="font-weight:bold"></td>
				<td id="itogoteplovycht2" style="font-weight:bold"></td>
				<td id="itogovodat2" style="font-weight:bold"></td>
				<td id="itogovodavycht2" style="font-weight:bold"></td>
				<td id="itogostokit2" style="font-weight:bold"></td>
				<td id="itogostokivycht2" style="font-weight:bold"></td>
				<td id="itogoelektrot2" style="font-weight:bold"></td>
				<td id="itogoelektrovycht2" style="font-weight:bold"></td>
				<td id="itogoikut2" style="font-weight:bold"></td>
				<td id="itogooert2" style="font-weight:bold"></td>
				<td id="itogobezndst2" style="font-weight:bold"></td>
				<td id="itogondst2" style="font-weight:bold"></td>
				<td id="itogosndst2" style="font-weight:bold"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="4" style="font-weight:bold">ИТОГО по Арендаторам:</td>
				<td id="itogoteplot1t2" style="font-weight:bold"></td>
				<td id="itogoteplovycht1t2" style="font-weight:bold"></td>
				<td id="itogovodat1t2" style="font-weight:bold"></td>
				<td id="itogovodavycht1t2" style="font-weight:bold"></td>
				<td id="itogostokit1t2" style="font-weight:bold"></td>
				<td id="itogostokivycht1t2" style="font-weight:bold"></td>
				<td id="itogoelektrot1t2" style="font-weight:bold"></td>
				<td id="itogoelektrovycht1t2" style="font-weight:bold"></td>
				<td id="itogoikut1t2" style="font-weight:bold"></td>
				<td id="itogooert1t2" style="font-weight:bold"></td>
				<td id="itogobezndst1t2" style="font-weight:bold"></td>
				<td id="itogondst1t2" style="font-weight:bold"></td>
				<td id="itogosndst1t2" style="font-weight:bold"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="17" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:left;border: 0px solid black;">
					<input style="text-align:left;width:100px;font-weight:bold" type="text" id="" value='Табл. 3' />
				</td>
				<td style="border: 0px solid black;">
					<input style="font-weight:bold" type="text" id="setdatet3" value='' />
				</td>
				<td colspan="9" style="border: 0px solid black;">
					<input style="width:500px;font-weight:bold" type="text" id="" value="Услуги связи" />
				</td>
				<td colspan="5" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td colspan="12" style="font-weight:bold;border: 0px solid black;"></td>
			</tr>
			<tr>
				<td rowspan="2">63035</td>
				<td rowspan="2">1</td>
				<td rowspan="2">Теплосеть</td>
				<td></td>
				<td>522</td>
				<td>527</td>
				<td>мест</td>
				<td colspan="2">Экспл. линии</td>
				<td>Итого</td>
				<td>НДС</td>
				<td>К оплате</td>
			</tr>
			<tr>
				<td>29 т</td>
				<td></td>
				<td>270</td>
				<td></td>
				<td colspan="2"></td>
				<td>270.00</td>
				<td>54.00</td>
				<td>324.00</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>межгород</td>
				<td></td>
				<td>2.15</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>2.15</td>
				<td>0.43</td>
				<td>2.58</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>ИТОГО:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>272.15</td>
				<td>54.43</td>
				<td>326.58</td>
			</tr>
		</table>
		
		<script>
			window.onload = function setdate() {
				var date = new Date();
				var datemonth = date.getMonth();
				var dateyear = date.getFullYear();
				datemontharr = ["Январь","Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
				for (let i = 0; i < datemontharr.length; i++) {
					if (i == datemonth) {
						datemonth = datemontharr[i];
						break;
					};
				};
				document.getElementById("setdatet1").value = datemonth + ' ' + dateyear + ' г.';
				document.getElementById("setdatet2").value = datemonth + ' ' + dateyear + ' г.';
				document.getElementById("setdatet3").value = datemonth + ' ' + dateyear + ' г.';
			};
			
			function pointzeros(number) {
				var count = 0, point = false;
				str = number + "";
				for (i = 0; i < str.length; i++) {
					if (str[i] != ".") {
						point = false;
						count++;
					} else {
						point = true;
						count++;
						break;
					};
				};
				if (point) {
					for (i = count; i < str.length; i++) {
						if (str[i+1] != undefined) {
							return str;
						} else return str + "0";
					};
				} else return str + ".00";
				return str + "00";
			};
			
			function change(target) {
				var tempnumber;
				button();
				tempnumber = document.getElementById(target).value;
				tempnumber = pointzeros(tempnumber);
				document.getElementById(target).value = tempnumber;
			};
			
			var tarifteplo;
			var tarifvoda;
			var tarifstoki;
			var tarifelektroteshspdm;
			var tarifelektrogapoling;
			
			function isNumber (num) {
				var bol;
				if (isNaN(num)) {
						alert('Значение ' + num + ' не число');
						bol = false;
					} else {
						bol = true;
					};
				return bol;
			};
			
			function writepointzeros(t){
				var tempnumber;
				tempnumber = document.getElementById(t).innerHTML;
				tempnumber = pointzeros(tempnumber);
				document.getElementById(t).innerHTML = tempnumber;
			};
					
			function button(){
				var t1, t2, t3, t4, t5, t6, res1, res2, res3, res4, res5, temp;
				tarifteplo = document.getElementById("tarifteploid").value;
				tarifvoda = document.getElementById("tarifvodaid").value;
				tarifstoki = document.getElementById("tarifstokiid").value;
				tarifelektroteshspdm = document.getElementById("tarifelektroteshspdmid").value;
				tarifelektrogapoling = document.getElementById("tarifelektrogapolingid").value;
				tarifteplot2 = document.getElementById("tarifteploidt2").value;
				tarifvodat2 = document.getElementById("tarifvodaidt2").value;
				tarifstokit2 = document.getElementById("tarifstokiidt2").value;
				tarifelektroteshspdmt2 = document.getElementById("tarifelektroteshspdmidt2").value;
				
				function btn(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13, tarifelektro){
					var a, b, c, d, result, bol1, bol2, bol3, bol4, temp;
					a = document.getElementById(t1).value;
					a = Number(a.split(" ").join(""));
					if (isNaN(a)) {
						a = document.getElementById(t1).value;
						alert('Значение ' + a + ' не число');
						return;
					};
					b = document.getElementById(t2).value;
					b = Number(b.split(" ").join(""));
					if (isNaN(b)) {
						b = document.getElementById(t2).value;
						alert('Значение ' + b + ' не число');
						return;
					};
					c = document.getElementById(t3).value;
					c = Number(c.split(" ").join(""));
					if (isNaN(c)) {
						c = document.getElementById(t3).value;
						alert('Значение ' + c + ' не число');
						return;
					};
					d = document.getElementById(t4).value;
					d = Number(d.split(" ").join(""));
					if (isNaN(d)) {
						d = document.getElementById(t4).value;
						alert('Значение ' + d + ' не число');
						return;
					};
					bol1 = isNumber(a);
					bol2 = isNumber(b);
					bol3 = isNumber(c);
					bol4 = isNumber(d);
					if (bol1 && bol2 && bol3 && bol4) {
						a = (document.getElementById(t5).innerHTML = Math.round((+a * tarifteplo + 0.00000000001) * 100) / 100) + "";
						document.getElementById(t5).innerHTML = a.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
						writepointzeros(t5);
						a = Number(a.split(" ").join(""));
						b = (document.getElementById(t6).innerHTML = Math.round((+b * tarifvoda + 0.00000000001) * 100) / 100) + "";
						document.getElementById(t6).innerHTML = b.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
						writepointzeros(t6);
						b = Number(b.split(" ").join(""));
						c = (document.getElementById(t7).innerHTML = Math.round((+c * tarifstoki + 0.00000000001) * 100) / 100) + "";
						document.getElementById(t7).innerHTML = c.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
						writepointzeros(t7);
						c = Number(c.split(" ").join(""));
						d = (document.getElementById(t8).innerHTML = Math.round((+d * tarifelektro + 0.00000000001) * 100) / 100) + "";
						document.getElementById(t8).innerHTML = d.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
						writepointzeros(t8);
						d = Number(d.split(" ").join("")); 
						result = +a + b + c + d;
						result = (Math.round((result + 0.00000000001) * 100) / 100) + "";
						document.getElementById(t9).innerHTML = result.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
						writepointzeros(t9);
						temp = document.getElementById(t10).value;
						temp = Number(temp.split(" ").join(""));
						result = (Math.round((+result + +temp + 0.00000000001) * 100) / 100) + "";
						document.getElementById(t11).innerHTML = result.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
						writepointzeros(t11);
						temp = (Math.round(((+result / 100) * 20 + 0.00000000001) * 100) / 100) + "";
						document.getElementById(t12).innerHTML = temp.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
						writepointzeros(t12);
						temp = (Math.round((+result + ((+result / 100) * 20 + 0.00000000001)) * 100) / 100) + "";
						document.getElementById(t13).innerHTML = temp.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
						writepointzeros(t13);
					};
				};
			
				t1 = "lin1teplo"; t2 = "lin1voda"; t3 = "lin1stoki"; t4 = "lin1elektro"; t5 = "lin1teplovych"; t6 = "lin1vodavych";
				t7 = "lin1stokivych"; t8 = "lin1elektrovych"; t9 = "lin1iku"; t10 = "lin1oer"; t11 = "lin1beznds"; t12 = "lin1nds"; t13 = "lin1snds";
				btn(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13, tarifelektrogapoling);
				t1 = "lin2teplo"; t2 = "lin2voda"; t3 = "lin2stoki"; t4 = "lin2elektro"; t5 = "lin2teplovych"; t6 = "lin2vodavych";
				t7 = "lin2stokivych"; t8 = "lin2elektrovych"; t9 = "lin2iku"; t10 = "lin2oer"; t11 = "lin2beznds"; t12 = "lin2nds"; t13 = "lin2snds";
				btn(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13, tarifelektrogapoling);
				t1 = "spdmteplo"; t2 = "spdmvoda"; t3 = "spdmstoki"; t4 = "spdmelektro"; t5 = "spdmteplovych"; t6 = "spdmvodavych";
				t7 = "spdmstokivych"; t8 = "spdmelektrovych"; t9 = "spdmiku"; t10 = "spdmoer"; t11 = "spdmbeznds"; t12 = "spdmnds"; t13 = "spdmsnds";
				btn(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13, tarifelektroteshspdm);
				t1 = "spdmteplot2"; t2 = "spdmvodat2"; t3 = "spdmstokit2"; t4 = "spdmelektrot2"; t5 = "spdmteplovycht2"; t6 = "spdmvodavycht2";
				t7 = "spdmstokivycht2"; t8 = "spdmelektrovycht2"; t9 = "spdmikut2"; t10 = "spdmoert2"; t11 = "spdmbezndst2"; t12 = "spdmndst2"; t13 = "spdmsndst2";
				btn(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13, tarifelektroteshspdmt2);
				t1 = "teshteplo"; t2 = "teshvoda"; t3 = "teshstoki"; t4 = "teshelektro"; t5 = "teshteplovych"; t6 = "teshvodavych";
				t7 = "teshstokivych"; t8 = "teshelektrovych"; t9 = "teshiku"; t10 = "teshoer"; t11 = "teshbeznds"; t12 = "teshnds"; t13 = "teshsnds";
				btn(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13, tarifelektroteshspdm);
				t1 = "teshteplot2"; t2 = "teshvodat2"; t3 = "teshstokit2"; t4 = "teshelektrot2"; t5 = "teshteplovycht2"; t6 = "teshvodavycht2";
				t7 = "teshstokivycht2"; t8 = "teshelektrovycht2"; t9 = "teshikut2"; t10 = "teshoert2"; t11 = "teshbezndst2"; t12 = "teshndst2"; t13 = "teshsndst2";
				btn(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13, tarifelektroteshspdmt2);
				t1 = "gapoteplo"; t2 = "gapovoda"; t3 = "gapostoki"; t4 = "gapoelektro"; t5 = "gapoteplovych"; t6 = "gapovodavych";
				t7 = "gapostokivych"; t8 = "gapoelektrovych"; t9 = "gapoiku"; t10 = "gapooer"; t11 = "gapobeznds"; t12 = "gaponds"; t13 = "gaposnds";
				btn(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13, tarifelektrogapoling);
				
				function itogo(t1,t2,t3,t4,t5,t6) {
					res1 = document.getElementById(t1).value;
					res1 = Number(res1.split(" ").join(""));
					res2 = document.getElementById(t2).value;
					res2 = Number(res2.split(" ").join(""));
					res3 = document.getElementById(t3).value;
					res3 = Number(res3.split(" ").join(""));
					res4 = document.getElementById(t4).value;
					res4 = Number(res4.split(" ").join(""));
					res5 = document.getElementById(t5).value;
					res5 = Number(res5.split(" ").join(""));
					temp = (document.getElementById(t6).innerHTML = Math.round((+res1 + +res2 + +res3 + +res4 + +res5 + 0.00000000001) * 100) / 100) + "";
					document.getElementById(t6).innerHTML = temp.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
					writepointzeros(t6);
				};
				
				function itogovych(t1,t2,t3,t4,t5,t6) {
					res1 = document.getElementById(t1).innerHTML;
					res1 = Number(res1.split(" ").join(""));
					res2 = document.getElementById(t2).innerHTML;
					res2 = Number(res2.split(" ").join(""));
					res3 = document.getElementById(t3).innerHTML;
					res3 = Number(res3.split(" ").join(""));
					res4 = document.getElementById(t4).innerHTML;
					res4 = Number(res4.split(" ").join(""));
					res5 = document.getElementById(t5).innerHTML;
					res5 = Number(res5.split(" ").join(""));
					temp = (document.getElementById(t6).innerHTML = Math.round((+res1 + +res2 + +res3 + +res4 + +res5 + 0.00000000001) * 100) / 100) + "";
					document.getElementById(t6).innerHTML = temp.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
					writepointzeros(t6);
				};
				
				t1 = "lin1teplo"; t2 = "lin2teplo"; t3 = "spdmteplo"; t4 = "teshteplo"; t5 = "gapoteplo"; t6 = "itogoteplo";
				itogo(t1,t2,t3,t4,t5,t6);
				t1 = "lin1teplovych"; t2 = "lin2teplovych"; t3 = "spdmteplovych"; t4 = "teshteplovych"; t5 = "gapoteplovych"; t6 = "itogoteplovych";
				itogovych(t1,t2,t3,t4,t5,t6);
				t1 = "lin1voda"; t2 = "lin2voda"; t3 = "spdmvoda"; t4 = "teshvoda"; t5 = "gapovoda"; t6 = "itogovoda";
				itogo(t1,t2,t3,t4,t5,t6);
				t1 = "lin1vodavych"; t2 = "lin2vodavych"; t3 = "spdmvodavych"; t4 = "teshvodavych"; t5 = "gapovodavych"; t6 = "itogovodavych";
				itogovych(t1,t2,t3,t4,t5,t6);
				t1 = "lin1stoki"; t2 = "lin2stoki"; t3 = "spdmstoki"; t4 = "teshstoki"; t5 = "gapostoki"; t6 = "itogostoki";
				itogo(t1,t2,t3,t4,t5,t6);
				t1 = "lin1stokivych"; t2 = "lin2stokivych"; t3 = "spdmstokivych"; t4 = "teshstokivych"; t5 = "gapostokivych"; t6 = "itogostokivych";
				itogovych(t1,t2,t3,t4,t5,t6);
				t1 = "lin1elektro"; t2 = "lin2elektro"; t3 = "spdmelektro"; t4 = "teshelektro"; t5 = "gapoelektro"; t6 = "itogoelektro";
				itogo(t1,t2,t3,t4,t5,t6);
				t1 = "lin1elektrovych"; t2 = "lin2elektrovych"; t3 = "spdmelektrovych"; t4 = "teshelektrovych"; t5 = "gapoelektrovych"; t6 = "itogoelektrovych";
				itogovych(t1,t2,t3,t4,t5,t6);
				t1 = "lin1iku"; t2 = "lin2iku"; t3 = "spdmiku"; t4 = "teshiku"; t5 = "gapoiku"; t6 = "itogoiku";
				itogovych(t1,t2,t3,t4,t5,t6);
				t1 = "lin1oer"; t2 = "lin2oer"; t3 = "spdmoer"; t4 = "teshoer"; t5 = "gapooer"; t6 = "itogooer";
				itogo(t1,t2,t3,t4,t5,t6);
				t1 = "lin1beznds"; t2 = "lin2beznds"; t3 = "spdmbeznds"; t4 = "teshbeznds"; t5 = "gapobeznds"; t6 = "itogobeznds";
				itogovych(t1,t2,t3,t4,t5,t6);
				t1 = "lin1snds"; t2 = "lin2snds"; t3 = "spdmsnds"; t4 = "teshsnds"; t5 = "gaposnds"; t6 = "itogosnds";
				itogovych(t1,t2,t3,t4,t5,t6);
				t1 = "lin1nds"; t2 = "lin2nds"; t3 = "spdmnds"; t4 = "teshnds"; t5 = "gaponds"; t6 = "itogonds";
				itogovych(t1,t2,t3,t4,t5,t6);
				
				function itogot2(t1,t2,t3) {
					res1 = document.getElementById(t1).value;
					res1 = Number(res1.split(" ").join(""));
					res2 = document.getElementById(t2).value;
					res2 = Number(res2.split(" ").join(""));
					temp = (document.getElementById(t3).innerHTML = Math.round((+res1 + +res2 + 0.00000000001) * 100) / 100) + "";
					document.getElementById(t3).innerHTML = temp.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
					writepointzeros(t3);
				};
				
				function itogovycht2(t1,t2,t3) {
					res1 = document.getElementById(t1).innerHTML;
					res1 = Number(res1.split(" ").join(""));
					res2 = document.getElementById(t2).innerHTML;
					res2 = Number(res2.split(" ").join(""));
					temp = (document.getElementById(t3).innerHTML = Math.round((+res1 + +res2 + 0.00000000001) * 100) / 100) + "";
					document.getElementById(t3).innerHTML = temp.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
					writepointzeros(t3);
				};
				
				t1 = "spdmteplot2"; t2 = "teshteplot2"; t3 = "itogoteplot2";
				itogot2(t1,t2,t3);
				t1 = "spdmteplovycht2"; t2 = "teshteplovycht2"; t3 = "itogoteplovycht2";
				itogovycht2(t1,t2,t3);
				t1 = "spdmvodat2"; t2 = "teshvodat2"; t3 = "itogovodat2";
				itogot2(t1,t2,t3);
				t1 = "spdmvodavycht2"; t2 = "teshvodavycht2"; t3 = "itogovodavycht2";
				itogovycht2(t1,t2,t3);
				t1 = "spdmstokit2"; t2 = "teshstokit2"; t3 = "itogostokit2";
				itogot2(t1,t2,t3);
				t1 = "spdmstokivycht2"; t2 = "teshstokivycht2"; t3 = "itogostokivycht2";
				itogovycht2(t1,t2,t3);
				t1 = "spdmelektrot2"; t2 = "teshelektrot2"; t3 = "itogoelektrot2";
				itogot2(t1,t2,t3);
				t1 = "spdmelektrovycht2"; t2 = "teshelektrovycht2"; t3 = "itogoelektrovycht2";
				itogovycht2(t1,t2,t3);
				t1 = "spdmikut2"; t2 = "teshikut2"; t3 = "itogoikut2";
				itogovycht2(t1,t2,t3);
				t1 = "spdmoert2"; t2 = "teshoert2"; t3 = "itogooert2";
				itogot2(t1,t2,t3);
				t1 = "spdmbezndst2"; t2 = "teshbezndst2"; t3 = "itogobezndst2";
				itogovycht2(t1,t2,t3);
				t1 = "spdmsndst2"; t2 = "teshsndst2"; t3 = "itogosndst2";
				itogovycht2(t1,t2,t3);
				t1 = "spdmndst2"; t2 = "teshndst2"; t3 = "itogondst2";
				itogovycht2(t1,t2,t3);
				
				t1 = "itogoteplo"; t2 = "itogoteplot2"; t3 = "itogoteplot1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogoteplovych"; t2 = "itogoteplovycht2"; t3 = "itogoteplovycht1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogovoda"; t2 = "itogovodat2"; t3 = "itogovodat1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogovodavych"; t2 = "itogovodavycht2"; t3 = "itogovodavycht1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogostoki"; t2 = "itogostokit2"; t3 = "itogostokit1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogostokivych"; t2 = "itogostokivycht2"; t3 = "itogostokivycht1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogoelektro"; t2 = "itogoelektrot2"; t3 = "itogoelektrot1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogoelektrovych"; t2 = "itogoelektrovycht2"; t3 = "itogoelektrovycht1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogoiku"; t2 = "itogoikut2"; t3 = "itogoikut1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogooer"; t2 = "itogooert2"; t3 = "itogooert1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogobeznds"; t2 = "itogobezndst2"; t3 = "itogobezndst1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogonds"; t2 = "itogondst2"; t3 = "itogondst1t2";
				itogovycht2(t1,t2,t3);
				t1 = "itogosnds"; t2 = "itogosndst2"; t3 = "itogosndst1t2";
				itogovycht2(t1,t2,t3);
			};
		</script>
	 </body>
</html>