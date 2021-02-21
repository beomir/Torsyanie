<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<script src ="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<title>Torsjanie - gra przegladarkowa</title>
<link rel="stylesheet" href="wyglad.css">
<style>
body
{
background-color: #222222;
font-size: 24px;
color: white;

}

a:link		{ color: #209781; text-decoration: none;}
a:visited	{ color: #209781; }
a:active 	{ color: #209781; }
a:hover 	{ color: #E9B64a; }

#container1
{
width: 1300px;
margin-left:auto;
margin-right:auto;
}

#lewa1
{
float:left;
background-color: #222222;
font-size: 24px;
text-align: center;
color: white;
margin-left:auto;
margin-right:auto;
width: 650px;
}
#prawa1
{

float:left;
background-color: #222222;
font-size: 24px;
color: white;
text-align: center;
margin-left:auto;
margin-right:auto;
width: 650px;
}

#logo1
{
background-color: #222222;
font-size: 24px;
color: white;
text-align: center;
padding: 15px;
margin-left:auto;
margin-right:auto;
}

#footer1
{
	background-color: #222222;
font-size: 24px;
color: white;
text-align: left;
padding: 15px;

}

.button1
{
	text-align:center;
padding:5px;
	margin:5px;
	border:3px solid gray;
	float:left;
	border-radius:15px;
}

.button1:hover
{
	background-color: #000000;
	color: white;
	border:3px solid white;
	
}
   

   
</style>
</head>
<body>
<div id = "container1">
<div id = "logo1">
 <h1>Uratuj Torsjan przed zagładą! "Its too late" - żółty ptak</h1>  <br/><br/>
 </div>
<p style="text-align: center; font-size: 50px">Lista Budynków</p>
<div id="lewa1">
<table>
<tr>
<td style="text-align: left"><img class = "button1 tilelink" title="Magazyn Surowców"  src="magazyn.png" alt=" "/></td>
<td style="text-align: left">Magazyn<br/><p style="font-size: 14px">koszt budowy: Drewno: 250 + (wzrost kosztu o 50 za każdy kolejny poziom) | Kamień: 100 + (wzrost kosztu o 50 za każdy kolejny poziom)</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy magazynu potrzeba 30 bezrobotnych<p/>
<p style="font-size: 14px; color: 00FFFF">Pozwala na gromadzenie wiekszych ilosci zasobow<p/></td>
</tr>

<tr> 
<td style="text-align: left"><img class = "button1 tilelink" title="Zamek" src="zamek.png" alt=" " /></td>
<td style="text-align: left">Zamek<br/><p style="font-size: 14px">koszt budowy: Drewno: 100 | Kamien: 500</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Zamku potrzeba 50 bezrobotnych<p/>
<p style="font-size: 14px; color: 00FFFF">Jest wymagany do odniesienia zwyciestwa, powieksza poziom nadzieji oraz złota<p/></td>

</tr>

<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Pałac" src="palac.png" alt=" "/>
</td>
<td style="text-align: left">Pałac<br/><p style="font-size: 14px">koszt budowy: Drewno: 600 | Kamien: 600</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Pałacu potrzeba 40 bezrobotnych oraz wybudowanego Zamku<p/>
<p style="font-size: 14px; color: 00FFFF">Pałac zwiększa przyrost nadzieji<p/></td>
</tr>

<tr>
<td style="text-align: left"><img class = "button1 tilelink" title="Pomnik Bohatera" src="pomnik_bohatera.png" alt=" "/></td>
<td style="text-align: left">Pomnik Bohatera<br/><p style="font-size: 14px">koszt budowy: Drewno: 1000 | Kamien: 1000</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Pomnika Bohatera potrzeba 70 bezrobotnych<p/>
<p style="font-size: 14px; color: 00FFFF">Jest wymagany do odniesienia zwyciestwa, powieksza poziom wk**wienia oraz w niewielkim stopniu wydobywanych surowcow<p/></td>
 
</tr>
<tr>
<td style="text-align: left"><img class = "button1 tilelink" title="Chata drwala" src="chata_drwala.png" alt=" " /></td>
<td style="text-align: left">Chata drwala<br/><p style="font-size: 14px">koszt budowy: Drewno: 50 + (wzrost kosztu o 50 zakażdy kolejny poziom) | Kamień: 20 + (wzrost kosztu o 20 za każdy kolejny poziom)</p>
<p style="font-size: 14px; color: silver">Do budowy Chaty drwala potrzeba 5 bezrobotnych, którzy zostaną drwalami<p/>
<p style="font-size: 14px; color: 00FFFF">Każda wybudowany Kamieniołom zwieksza ilosc Drwali o 5 oraz ilosc gromadzonego drewna<p/></td>

</tr>

<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Kamieniołom" src="kamieniolom.png" alt=" " />
</td>
<td style="text-align: left">Kamieniolom<br/><p style="font-size: 14px">koszt budowy: Drewno: 50 + (wzrost kosztu o 50 za każdy kolejny poziom) | Kamień: 20 + (wzrost kosztu o 20 za każdy kolejny poziom)</p>
<p style="font-size: 14px; color: silver">Do budowy Kamieniołomu potrzeba 5 bezrobotnych, którzy zostaną kamieniarzami<p/>
<p style="font-size: 14px; color: 00FFFF">Każda wybudowany Kamieniołom zwieksza ilosc Kamieniarzy o 5 oraz ilosc wydobywanego kamienia<p/></td>

</tr>

<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Farma" src="farma.png" alt=" "/>
</td>
<td style="text-align: left">Farma<br/><p style="font-size: 14px">koszt budowy: Drewno: 50 + (wzrost kosztu o 30 za każdy kolejny poziomm) | Kamień: 20 + (wzrost kosztu o 10 za każdy kolejny poziom)</p>
<p style="font-size: 14px; color: silver">Do budowy Kamieniołomu potrzeba 5 bezrobotnych, którzy zostaną fjermierami<p/>
<p style="font-size: 14px; color: 00FFFF">Każda wybudowana farma zwieksza ilosc Fjermerow o 5 oraz ilosc zbieranego zboza<p/></td>

</tr>

<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Zbrojownia" src="zbrojownia.jpg" alt=" "/>
</td>
<td style="text-align: left">Zbrojownia<br/><p style="font-size: 14px">koszt budowy: Drewno: 300 | Kamien: 200 | Nadzieja: +1 ( jednarozowy efekt )</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Zbrojowni potrzeba 15 bezrobotnych<p/>
<p style="font-size: 14px; color: 00FFFF">Zbrojownia umożliwia wybudowania koszar<p/></td>

</tr>
</table>
</div>

<div id="prawa1>
<table>
<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Chałupa" src="dom.png" alt=" "/>
</td>
<td style="text-align: left">Chałupa<br/><p style="font-size: 14px">koszt budowy: Drewno: 50 * poziom Chałupy | Kamień: 20 * poziom Chałupy</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Chałupy potrzeba 10 bezrobotnych<p/>
<p style="font-size: 14px; color: 00FFFF">Chałupa powiększa populacje bazową o 4 Torsjan. W chałupie moze mieszkać maksymalnie 15 ludzi, jeżeli bedzie ich wiecej dojdzie do przeludnienia!<p/></td>

</tr>


<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Targowisko" src="targowisko.png" alt=" "/>
</td>
<td style="text-align: left">Targowisko<br/><p style="font-size: 14px">koszt budowy: Drewno: 200 | Kamien: 200</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Targowiska potrzeba 10 bezrobotnych<p/>
<p style="font-size: 14px; color: 00FFFF">Targowisko dodaje możliwość wymiany towarów oraz umożliwia wysyłanie kupców do 3 krain<p/></td>

</tr>

<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Kanalizacje" src="kanalizacja.png" alt=" "/>
</td>
<td style="text-align: left">Kanalizacja<br/><p style="font-size: 14px">koszt budowy: Drewno: 200 | Kamień: 400</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Kanalizacji potrzeba 10 bezrobotnych<p/>
<p style="font-size: 14px; color: 00FFFF">Kanalizacja powiększa maksymalna ilość mieszkańców w chatach do 17 ludzi<p/></td>

</tr>

<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Oberża" src="oberza.png" alt=" "/>
</td>
<td style="text-align: left">Oberża<br/><p style="font-size: 14px">koszt budowy: Drewno: 200 | Kamien: 100</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Oberży potrzeba 7 bezrobotnych<p/>
<p style="font-size: 14px; color: 00FFFF">Oberża jednorazowo podnosi poziom nadzieji oraz wywołuje w niewielkim stopniu wzrost wk**wienia w ciągłym interwale czasowym<p/></td>

</tr>

<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Łaźnie" src="laznie.png" alt=" "/>
</td>
<td style="text-align: left">Łaźnie<br/><p style="font-size: 14px">koszt budowy: Drewno: 350 | Kamien: 400</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Łaźnii potrzeba 30 bezrobotnych<p/>
<p style="font-size: 14px; color: 00FFFF">Łaźnie zwiększają poziom nadzieji i zmniejszaja poziom wkurwienia<p/></td>
</br>
</tr>

<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Koszary" src="koszary.png" alt=" "/>
</td>
<td style="text-align: left">Koszary<br/><p style="font-size: 14px">koszt budowy: Drewno: 300 + 200 za każdy kolejny poziom | Kamien: 300 + 100 za każdy kolejny poziom | Złoto: 0 + 10 za każdy kolejny poziom</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Koszar potrzeba 10 bezrobotnych oraz Zamku<p/>
<p style="font-size: 14px; color: 00FFFF">Koszary wprowadzaja mechanike wojskowosci, pozwalajacą na rekrutacje żołnierzy oraz na wyprawy wojskowe<p/></td>
</br>
</tr>

<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Kościół" src="kosciol.png" alt=" "/>
</td>
<td style="text-align: left">Kościół<br/><p style="font-size: 14px">koszt budowy: Drewno: 150 | Kamien: 500</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Kościoła potrzeba 15 bezrobotnych oraz ponad 100 Torsjan<p/>
<p style="font-size: 14px; color: 00FFFF">Kościół dodaje nadzieje, umożliwia nowy tryb wypraw wojennych oraz dodaje mechanike wiary z możliwością wyboru głównej wiary.<p/></td>

</tr>

<tr>
<td  style="text-align: left"><img class = "button1 tilelink" title="Szkoła" src="szkola.jpg" alt=" "/>
</td>
<td style="text-align: left">Szkoła<br/><p style="font-size: 14px">koszt budowy: Drewno: 300 + 100 za każdy kolejny poziom | Kamien: 300 + 50 za każdy kolejny poziom | Złoto: 0 + 5 za każdy kolejny poziom</p>
<p style="font-size: 14px; color: silver">Do rozpoczęcia budowy Szkoły potrzeba 10 bezrobotnych<p/>
<p style="font-size: 14px; color: 00FFFF">Szkoła dodaje możliwość wyszkolenia uczonych za złoto. Uczeni generują pkt nauki za które można odkrywać technologie<p/></td>

</tr>


</table>
</div>
<div id = "footer1">

<p style="text-align: left">==><a href = "pregra.php">Powrót do strony z instrukcją<a/></p>
<p style="text-align: left">==><a href = "zaloguj.php">Powrót do strony logowania<a/></p>
</div>
 </div>
</body>
</html>