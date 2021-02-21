<?php
	session_start();
	if (!isset($_SESSION['zalogowany']))
	{
		header('location: index.php');
		exit();
	}
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Torsjanie - gra przegladarkowa</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src ="jquery.scrollTo.min.js"></script>
<style>
body
{
background-color: #222222;
font-size: 24px;
color: white;
margin: 0 !important;
}


.container .box { 
                width:80%; 
                margin-left:auto;
margin-right:auto;
                display:table; 
            } 
            .container .box .box-row { 
                display:table-row; 
            } 
            .container .box .box-cell { 
                display:table-cell; 
                 
                padding:10px; 
            } 
            .container .box .box-cell.box1 { 	   
background-color: #952222;
font-size: 24px;
text-align: center;
color: white;
border-right: 3px solid gray;
padding: 20px;
margin-top: 20px;
margin-left:auto;
margin-right:auto;
width:15%;
				
             } 
            .container .box .box-cell.box2 { 
               padding: 20px;
			   background-color: #A52A2A;
			   font-size: 18px;
			   #content1
{

float:left;
background-color: #742222;
font-size: 24px;
color: white;
padding: 20px;
text-align: justify;
margin-top: 20px;
margin-left:auto;
margin-right:auto;
width: 100%;

}

#content2
{

float:left;

font-size: 24px;
color: white;
padding: 20px;
text-align: justify;

margin-left:auto;
margin-right:auto;
width: 100%;

}
            } 



.link		{ color: #FFD700; text-decoration: none;}
.link:hover 	{ color: #FF4500; }
.bigtitle
{
	font-size:32px;
	letter-spacing: 2px;
	font-weight: 900;
}

#container
{
width: 80%;
margin-left:auto;
margin-right:auto;
}

#logo
{
background-color: #222222;
font-size: 24px;
color: white;
text-align: center;
padding: 15px;
margin-left:auto;
margin-right:auto;
width: 100%;
}


#content0
{
	height: auto;
}


#lewa
{
float:left;
background-color: #952222;
font-size: 24px;
text-align: center;
color: white;
border-right: 3px solid gray;
padding: 20px;
margin-top: 20px;
margin-left:auto;
margin-right:auto;
width: 15%;


}


#content
{
	margin-left:auto;
	margin-right:auto;
	float:left;
	text-align: justify;
	width: 78%;
	
}







a.tilelink
{
color: #ffffff;
text-decoration: none;
}






.overlay { 
   position: fixed; 
   overflow-y: scroll;
   top: 0; right: 10; bottom: 0; left: 0;
	z-index: 150; }



.button2
{
	width: 100%;
	text-align:center;
	padding:5px 0;
	margin:px;
	border:3px solid gray;
	float:center;
	border-radius:15px;
}

.button2:hover
{
	background-color: #000000;
	color: white;
	border:3px solid white;
}



.nav
{ 
	box-sizing: 100%;
	padding: 10px 0;
	background-color: #c34f4f;
	text-align: center;
	border-top: 1px solid #751b1b;
	border-bottom: 1px solid #751b1b;
}

.sticky
{
	box-sizing: 100%;
	position: fixed;
	left: 0;
	top: 0;
	z-index: 100;
}

ol
{
	padding: 0;
	margin: 0;
	list-style-type: none;
	font-size: 18px;
	height: 35px;
	line-height: 200%;
	display: inline-block;
}

ol a
{
	color: #ffffff;
	text-decoration: none;
	display: block;
}

ol > li
{
	float: left;
	width: 150px;
	height: 40px;
	border-right: 1px dashed #751b1b;
}

ol > li:first-child
{
	border-left: 1px dashed #751b1b;
}

ol > li:hover
{
	background-color: #cf6969;
}

ol > li:hover > a
{
	color: #451717;
}

ol > li > ul
{
	list-style-type: none;
	padding: 0;
	margin: 0;
	height: 40px;
	display: none;
}

ol > li:hover > ul
{
	display: block;
}

ol > li > ul > li
{
	background-color:#cf6969;
	position: relative;
	z-index: 100;
	border-top: 1px dashed #751b1b;
}

ol > li > ul > li:hover
{
	background-color: #c34f4f;
}

ol > li > ul > li:hover > a
{
	color: #451717;
}

.sticky
{
	width: 100%;
	position: fixed;
	left: 0;
	top: 0;
	z-index: 100;
}

.center {
  margin-left: auto;
  margin-right: auto;
}

</style>
<script type="text/javascript">


jQuery(function($)
{
	$.scrollTo(0);
	$('#link0').click(function() {$.scrollTo($('#historia'),500); });
	$('#link1').click(function() {$.scrollTo($('#surowce'),500); });
	$('#link1a').click(function() {$.scrollTo($('#surowce'),500); });
	$('#link1b').click(function() {$.scrollTo($('#surowce'),500); });
	$('#link2').click(function() {$.scrollTo($('#populacja'),500); });
		$('#link2a').click(function() {$.scrollTo($('#populacja'),500); });
	$('#link3').click(function() {$.scrollTo($('#Nadzieja'),500); });
		$('#link3a').click(function() {$.scrollTo($('#Nadzieja'),500); });
	$('#link4').click(function() {$.scrollTo($('#plotki'),500); });
		$('#link4a').click(function() {$.scrollTo($('#plotki'),500); });
	$('#link5').click(function() {$.scrollTo($('#poryroku'),500); });
		$('#link5a').click(function() {$.scrollTo($('#poryroku'),500); });
		$('#link5b').click(function() {$.scrollTo($('#poryroku'),500); });
	$('#link6').click(function() {$.scrollTo($('#zdarzenia'),500); });
		$('#link6a').click(function() {$.scrollTo($('#zdarzenia'),500); });
		$('#link6b').click(function() {$.scrollTo($('#zdarzenia'),500); });
	$('#link7').click(function() {$.scrollTo($('#mechaniki'),500); });
		$('#link7a').click(function() {$.scrollTo($('#mechaniki'),500); });
	$('#link8').click(function() {$.scrollTo($('#niewolnicy'),500); });
		$('#link8a').click(function() {$.scrollTo($('#niewolnicy'),500); });
	$('#link9').click(function() {$.scrollTo($('#dyplomatyczne'),500); });
		$('#link9a').click(function() {$.scrollTo($('#dyplomatyczne'),500); });
	$('#link10').click(function() {$.scrollTo($('#szpiegostwo'),500); });
		$('#link10a').click(function() {$.scrollTo($('#szpiegostwo'),500); });
			$('#link10b').click(function() {$.scrollTo($('#szpiegostwo'),500); });
	$('#link11').click(function() {$.scrollTo($('#targ'),500); });
		$('#link11a').click(function() {$.scrollTo($('#targ'),500); });
		$('#link11b').click(function() {$.scrollTo($('#targ'),500); });
	$('#link12').click(function() {$.scrollTo($('#wiara'),500); });
		$('#link12a').click(function() {$.scrollTo($('#wiara'),500); });
	$('#link13').click(function() {$.scrollTo($('#wojskowe'),500); });
		$('#link13a').click(function() {$.scrollTo($('#wojskowe'),500); });
	$('#link14').click(function() {$.scrollTo($('#logo'),500); });
		$('#link14a').click(function() {$.scrollTo($('#logo'),500); });
			$('#link14b').click(function() {$.scrollTo($('#logo'),500); });
				$('#link14c').click(function() {$.scrollTo($('#logo'),500); });
	$('#link15').click(function() {$.scrollTo($('#nauka'),500); });
		$('#link15a').click(function() {$.scrollTo($('#nauka'),500); });
}
);

	

</script>
</head>
<body>
<div id="container">
<div id="logo">
  <h1>Uratuj Torsjan przed zagładą! "Its too late" - żółty ptak</h1>  <br/><br/>
 </div>
 <div class="nav">
			<ol>
				<li><a  id="link14" href="#">Strona Główna</a></li>
				<li><a id="link14a" href="#">Sekcje</a>
					<ul>
					<li><a id="link1"   href = "#">Surowce</a></li>
						<li><a id="link2"    href = "#">Populacja</a></li>
						<li><a id="link3"    href = "#">Nadzieja i W**wienie</a></li>
						<li><a id="link4"    href = "#">Gazeta i Plotki</a></li>
						<li><a id="link5"   href = "#">Pory roku</a></li>
						<li><a id="link6"    href = "#">Wydarzenia</a></li>
						<li><a id="link8"  href = "#">Niewolnicy</a></li>
						<li><a id="link9"   href = "#">Misje dyplomatyczne</a></li>
						<li><a id="link10"  href = "#">Szpiegostwo</a></li>
						<li><a id="link11"   href = "#">Targ</a></li>
						<li><a id="link12"   href = "#">Wiara</a></li>
						<li><a id="link13"  href = "#">Misje wojskowe</a></li>
						<li><a id="link15"  href = "#">Nauka</a></li>
					</ul>
				</li>
				
				<li><a id ="link14c" href="#">Linki</a>
					<ul>
						
						<li><a target="_blank" rel="noopener noreferrer" href = "lista_budynkow.php">Lista Budynków</a></li>
						
						
					</ul>
				</li>
				<li><a id ="link14b" href="#">Zmień język</a>
				<ul>
					<li><a href = "index.php">русский</a></li>
					<li><a href = "index.php">English</a></li>
					</ul>
				</li>
				<li><a id="link14" href="#"><?php
echo '<a  href="logout.php">Wyloguj</a>'
?></a>
			</ol>
		
		</div>
		</div> 

 <div class="container"> 
            <div class="box"> 
                <div class="box-row"> 
                    <div class="box-cell box1"> 
	
	
<b><span style="font-size: 24px;">Zalogowany: </span></b>
</br></br>
<?php
	
echo $_SESSION['user']; ?>
 </br></br><b><span style="font-size: 24px;">Twój e-mail to:  </span></b> 
 </br></br>
<?php
echo $_SESSION['email']  
 ?>
 </br>
 </br>
 Żeby powrócić do strony głównej, wciśnij:
 
 </br>
<?php
echo '<a class = "link" href="logout.php">Wyloguj się</a>'
?>

</br>
</br>
Żeby rozpocząć grę wciśnij:
</br>
<a class = "link" href = "gra.php">Start<a/>
</div> 


<div class="box-cell box2"> 
<div style= "background-color: #742222;padding-left: 5px;padding-right: 5px; padding-bottom: 15px;padding-top: 15px;  margin-bottom: 10px; border-radius:15px;"  id = "content1">
<span class="bigtitle"><?php
	
echo "Witaj ".$_SESSION['user'].'! ';?></span>
<div style="height:15px;"></div>
Poniższa instrukcja jest podzielona na sekcje:
<span class = "link"><ul style = "list-style-type:disc">
				<li tyle ="margin-left:20px"><a id="link0" class = "link" href="#">Historia Torsjan</a></li>

				<li tyle ="margin-left:20px"><a id="link1a"  class = "link" href="#">Rozgrywka</a></li>
					<ul style="list-style-type:disc">
						<li><a id="link1b"  class = "link"  href = "#">Zdobywanie surowców</a></li>
						<li><a id="link2a"  class = "link"  href = "#">Populacja</a></li>
						<li><a id="link3a"  class = "link"  href = "#">Nadzieja i W**wienie</a></li>
						<li><a id="link4a"  class = "link"  href = "#">Torsjańska Gazeta i Plotki</a></li>
						<li><a id="link5a"  class = "link" href = "#">Pory roku</a></li>
						<li><a id="link6a"  class = "link"  href = "#">Wydarzenia</a></li>
						<li><a id="link7a"  class = "link" href = "#">Mechaniki</a></li>
						<ul style = "list-style-type:disc">
						<li><a id="link8a"  class = "link" href = "#">Niewolnicy</a></li>
						<li><a id="link9a"  class = "link"  href = "#">Misje dyplomatyczne</a></li>
						<li><a id="link10a"  class = "link" href = "#">Szpiegostwo</a></li>
						<li><a id="link11a"  class = "link"  href = "#">Targ</a></li>
						<li><a id="link12a"  class = "link"  href = "#">Wiara</a></li>
						<li><a id="link13a" class = "link"  href = "#">Misje wojskowe</a></li>
						<li><a id="link15a" class = "link"  href = "#">Nauka</a></li>
						</ul>
						</li>
					</ul>
				</li>
				</ul>
			</span>
</div>



<div style= "background-color: #A52A2A; padding-left:5px; border-top: 2px dotted gray;" id ="content2">
<span id = "historia" class="bigtitle">Instrukcja</span>

<div style="height:15px;"></div>
<li><span style="color: gray"><b>Historia Torsjan</b></span>
					<ul style="text-align: justify">
<p style="text-indent: 5%;">Niewiele wiemy co dzialo sie z Torsjanami przed historiami spisanymi w pierwszych kronikach, które są datowane na rok Torsjanski 487. Niemniej jednak, co stoi w owych kronikach?
Ano w skrócie, tak żebys cierpliwy graczu jednak swej cierpliwości nie musiał wystawiać na próbe. Torsjanie zamieszkiwali blizej nie okreslony teren na wschodzie. Wiemy jednak,
że kraina ta była zaprawde urodziwa i urodzajna. Wiele poematów Torsjańskich sprzed Wielkiej Ucieczki opisuje piękno tej krainy. </p><p style="text-indent: 5%;">Płody rolne ponoć były tak wielkie, że jedne żniwa wystarczałyby na kilka lat gdyby
nie to, że składować nie było gdzie i przechowywać dłuzej nie było jak. Wiedli sobie tak żywot Torsjanie, nie znajac wojny ( jedynie zabawy na placach treningowych ), pod ciepłym niebem ( tak cieplo bylo, ze w lato nikomu w chatach siedziec sie nie chcialo )
, nie zaznajac ciezkich zim ( w kronikach stoi jakoby Oleksandr Wielki cała zime miał spędzić na Polu po tym jak sie zawzial na Hondurne, zone swoją - ponoc poszlo o tego wieprzka siostry Hondurny... co by go wodz nasz chciał, nie tyle zjesc a co o zgrozo... po wiecej
szczegolow odsylam do kronik, uprzedzam jednak ze ino zgorszyc sie ta czescia lektury sie mozna... i ani razu choroba go nie zmogla! Tak lekkie zimy w Orslandzie byly). Ttorsjanie, lud byl to nie zbyt pracowity - bo nikt od nich nie wymagal, niezbyt waleczny - bo nikt
im nie zagrazal, a na pewno niezbyt religijny - bo po co i w co wierzyc skoro wszystko sie ma ? </p>
<p style="text-indent: 5%;">No i przyszedl wkoncu czas wstretny... Ludzie zaczeli na poczatku gadac, jakoby ktos z dalszego jeszcze wschodu szedl. Glupie rzeczy o tych ludziach gadali - jakoby jakims przedziwnym jezykiem gadali, krzyczac na siebie nie ustannie i żłopiąc jakis eliksir po którym,
śmiać sie nie przestawali, kołysali się jak siostra Hondurny przy zbieraniu jagód, a co najdziwniejsze... za Boga wzieli sobie jakas wielką żółtą kaczkę! Nikt powaznie do tego nie podchodził, bo kto by sie bał wyznawcow jakiejs tam kaczki ? Ale siła ich była... Ludzie zaczeli gadać, jakoby
ze dziesiatki setet setkow ich szly... 
Naj sam pierw zaczely ludzie ginac co na łosie polowali w polnocnych ostepach... po zaginieciu meza siostry Hondurny ( tej od wieprzka ), przeprowadzila sie ta do milosliwie panujacemu Torsjanom od dawna, Oleksandra i siostry swej. Takich historyji bylo wiecej.
Ludzie zaczeli sie gniesc po chatach, przed chatami... Na dzicizne nikt juz nie wyruszal. Ch** wie co sie dzialo z ludzmi, czy ich te wyznawcy kaczki zjadaly, czy w holdzie składały ? Nikt nie wiedzial jak dokladnie bylo, tym bardziej ludzie po domach siedzieli i gadali tylko
kiedy ujsc z ziemi ojcow bedzie trzeba, czy moze cala ta kabala bokiem pojdzie ? Lud torsjan jako ze leniwy i nie bardzo pojętny, siedział tak w domach i dumał nad przyszłościa swą...</p>
<p style="text-indent: 5%;">Az nastal dzien sądny. Przyszli wyznawcy żółtego ptaka pod granice osady torsjan, pchajac przed soba wielki postument swego Boga... Do owego postumentu przytwierdzeni byli zaginieni Torsjanie, niektorzy od nie dawna inni od dawna, ze i poznac ich nie mozna bylo.
Poszedl to Oleksandr wodz nasz, gadac z tymi dziwakami z orszakiem honorowym w ktory naturalnie i Hondurna sie wjebala, bo wszedzie jej pelno musialo byc. Przejebany zywot mial ten nasz wodz... dobrze ze i zakonczyl sie on po tej delegacji, bo chop na skraju zalamania byl od lat...
No nie nagadal sie za dlugo ten wodz nasz... Stanal przed postumentem, zaczal wymachiwac rekoma, nakreslac droge dookola dla ludu zlotek kaczki... Tamci popatrzyli na siebie, eliksir smieszny popili, wydali odglosy zolodkowe, para jaka smrodu z geb ich sie uniosla... no 
i w oka mgnieniu, ciach prach miecza dobyli, leb oleksandra scieli i tyle my wodza widzieli.</p><p style="text-indent: 5%;"> Co madrzejsi torsjanie a nie wielu ich bylo... Wzieli nogi za pas i zaczeli spierdalac. Reszta naturalnie jako to torsjanie... patrzyli z gebami otwartymi na caly proceder... No i jak myslisz graczu cierpliwy ?
No tak,jest dokladnie jak myslisz drogi graczu, wyznawcy żłotego ptaka ich rozjebali... Tylko Ci co madrzejsi byli i zaczeli spierdalac od razu, ujść zdołali... I Tobie wlasnie przyjdzie poprowadzic ten madrzejszy sort ludu torsjan do odbudowy chwały!</p>
<p id = "surowce" style="text-indent: 5%;">Mądrzejsi torsjanie, wedrowali rok caly i pół zanim osiedli daleko na zachodzie, odbudować osade swą, aczkolwiek los nie oszczędzał Torsjan.  Ucieczka przed wyznawcami potężnego Bohatera zwanego Żółtym Ptakiem zmęczyła ich doszczętnie, osiedlili się tutaj w nadzieji, 
że odbudują swoje chaty ( dalej zwane Chałupami ) i pomimo niezbyt urodzajnych gleb, cięzkich warunków atmosferycznych, krążących pogłoskach o innych wyznawcach żółtego ptaka, napełnią 
swe serca nadzieją i ruszą w wielkiej sile na swoje utracone tereny. </p>
<p style="text-indent: 5%;">No naturalnie nie wszystkich spierdalaczy przyjdzie Ci poprowadzic, bo przecież i wśród mądrych są mądrzejsi i głupsi... Naturalnie Ci głupsi poszli szukac dalej, lepszego miejsca ( nimi zarzadzają inni gracze ), a Tobie przyszlo poprowadzić jedynie 16tke, którzy
od niechcenia stłukli jako takie 4 chałupy ( jak to mieli w zwyczaju w Orslandzie ). Nie zawiedź nadzieji i poprowadź chciałoby sie napisać dumny lud... choć nie wiem czy tak można nazwać lud który uciekał przed zółtą kaczką... No nic - udanej zabawy w każdym bądź razie! ;)</p>


					</ul>
				</li>
				</br>
<span class="mediumtitle">Rozgrywka</span>
<div style="height:15px;"></div>
<li ><span style="color: gray"><b>Zdobywanie surowców</b></span>
	<ul>
	Surowce czyli: Drewno, Kamień, Zboże, Złoto jest zdobywane w odpowiednich interwałach czasowych bazujacych przede wszystkim na ilosciach robotnikow ( Drwale, Kamieniarze, Fjermierzy ) wykonujaca odpowiednia czynnosc ( ze złotem, 
	jest nieco inaczej ale zostanie to omówione później ), pomniejszanych lub powiekszanych o odpowiednie czynniki takie jak:
	</br>
	<a id="link5b"  class = "link" href = "#">pory roku</a>,
	</br>
	<a target="_blank" rel="noopener noreferrer"  class = "link"  href = "lista_budynkow.php">budynki</a> ,
	</br>
	<a id="link6b"  class = "link" href = "#">Wydarzenia</a> . 
	</br>	
Poniżej dokładnie jak przybywają poszczególne surowce:
</br><b>Drewno:</b> zmiany ilości drewna są wykonywane co sekunde i sa uzaleznione od: 
</br><i>- ilosci drwali ( powiekszamy ilosc dostepnych drwali za pomoca wybudowania chaty drwala - wiecej w rozdziale o budynkach )
</br>- Pór roku ( wiosna , lato )
</br>- Pomnik Bohatera + 1 drewna na sekunde
</br>- Po wybudowaniu Targowiska włącza sie opcja wymiany towarów 
</br> Drewno jest potrzebne do wybudowania:</i>
</br><b>Kamień:</b> zmiany ilości kamienia są wykonywane co dwie sekundy i sa uzaleznione od:
</br><i>- ilosci kamieniarzy ( powiekszamy ilosc dostepnych kamieniarzy za pomoca wybudowania kamieniołomu - wiecej w rozdziale o budynkach )
</br>- Pór roku ( wiosna, lato)
</br>- Pomnik Bohatera + 1 kamienia na 2 sekundy
</br>- Po wybudowaniu Targowiska włącza sie opcja wymiany towarów
</br> Kamień jest potrzebny do wybudowania:	</i>
</br><b>Zboże:</b> zmiany ilości zboża są wykonywane co trzy sekundy i sa uzaleznione od:
</br><i>- ilosci fjermerów ( powiekszamy ilosc dostepnych fjermerów za pomoca wybudowania farmy - wiecej w rozdziale o budynkach )
</br>- Pór roku ( jesień, zima)
</br>- Pomnik Bohatera +0.5 zboża co 3 sekundy
</br>- Konsumcja ludzi

</br>- Po wybudowaniu Targowiska włącza sie opcja wymiany towarów 
</br> Zboże jest potrzebne do rekrutacji żołnierzy	</i>
<div id = "populacja"></div>
<b>Złoto:</b> wzrost jest generowany przez wybudowanie Zamku oraz Targowiska. 
</br><i>- Zamek zwieksza zasob o 0.05 co 5 sekund
</br>- Targowisko o 0.05 co 4 sekundy.
</br>- Po wybudowaniu Targowiska włącza sie opcja wymiany towarów 
</br> Złoto jest potrzebne do pozyskania niewolników, rekrutacji żołnierzy, misji szpiegowskich, misji dyplomatycznych, misji wojskowych</i>
	</ul>
</li>
<li><span style="color: gray"><b>Populacja</span></b>
	<ul>
	Zmiany populacji Torsjan zależą od wielu czynników i jest to najbardziej złożony system w całej grze. Populacja Torsjan dzieli się na:
</br><b >- Całą populację</b>
</br><b >- Populacja Drwali</b>		
</br><b >- Populacja Kamieniarzy</b>	
</br><b >- Populacja Fjermerów</b>	
</br><b >- Populacja Uczonych</b>
</br><b >- Populacja Kupców</b>
</br><b >- Populacja Bezrobotnych</b>	
	
</br></br><b>Cała populacja:</b>
</br> W interwale <b>4 sekundowym</b> przybywa jeden Torsjanin. W każdym domu mieszka 4 mieszkańców ( maksymalna ilość mieszkańców w domu to 15 
jednakże do obliczeń populacji wykorzystujemy wartość bazową tj. 4 ), ta wartość jest mnożona razy aktualną ilość <b>chałup</b>. Do tego dodajemy wartość niewolników oraz współczynnik dotyczący aktualnej ilości zboża, a dokładniej:
</br>- jeżeli zboże jest wieksze od <i>ilość mieszkańców * 1</i> to wartość Całej populacji nie ulega zmianie
</br>- jeżeli zboże jest w przedziale od <i>ilość mieszkańców * 0.5 do ilość mieszkańców * 1 </i> to wspolcznik Zboze<->Ludzie przybiera postać <b>-1</b>
</br>- jeżeli zboże jest w przedziale od <i>ilość mieszkańców * 0.2 do ilość mieszkańców * 0.5 </i> to wspolcznik Zboze<->Ludzie przybiera postać <b>-2</b>
</br>- jeżeli zboże jest w przedziale od <i>ilość mieszkańców * 0.1 do ilość mieszkańców * 0.2 </i> to wspolcznik Zboze<->Ludzie przybiera postać <b>-2.5</b>
</br>- jeżeli ilość zboża wynosi <i>0</i> to wspolcznik Zboze<->Ludzie przybiera postać <b>-4</b>
</br>- jeżeli ilość mieszkańców przekroczy maksymalną ilość dostępną w chatach to w interwale 4 sekundowym zacznie umierać 5 torsjan 
</br>- jeżeli ilość zboża jest mniejsza od ilości ludzi to wartość Torsjan i Zboża zmienia kolor. Im większy jest współczynnik ujemności tym kolor jest bardziej czerwony.

</br></br><b>Populacja Drwali</b>
</br> Po wybudowaniu chaty drwala z pozycji Bezrobotni awansuje 5 robotników do rangi Drwale. Ilość drwali ulega pomniejszeniu jeżeli suma Drwale + Kamieniarze + Fjermierzy + Bezrobotni jest mniejsza od Całej populacji.
Ilość Drwali wraca do normy co dwie sekundy o jednego drwala jeżeli łączna ilość Torsjan jest wieksza niż Drwale + Kamieniarze + Fjermierzy ( z puli bezrobotnych zostaje awansowany człowiek do profejsi Drwale )
</br></br><b>Populacja Kamieniarzy</b>
</br> Po wybudowaniu kamieniołomu z pozycji Bezrobotni awansuje 5 robotników do rangi Kamieniarze. Ilość kamieniarzy ulega pomniejszeniu jeżeli suma Drwale + Kamieniarze + Fjermierzy + Bezrobotni jest mniejsza od Całej populacji.
Ilość Kamieniarzy wraca do normy co dwie sekundy o jednego kamieniarza jeżeli łączna ilość Torsjan jest wieksza niż Drwale + Kamieniarze + Fjermierzy ( z puli bezrobotnych zostaje awansowany człowiek do profejsi Kamieniarze )
</br></br><b>Populacja Fjermerów</b>
<div id = "Nadzieja"></div> Po wybudowaniu farmy z pozycji Bezrobotni awansuje 5 robotników do rangi Fjermierzy. Ilość fjermerów ulega pomniejszeniu jeżeli suma Drwale + Kamieniarze + Fjermierzy + Bezrobotni jest mniejsza od Całej populacji.
Ilość Fjermerów wraca do normy co dwie sekundy o jednego fjermera jeżeli łączna ilość Torsjan jest wieksza niż Drwale + Kamieniarze + Fjermierzy ( z puli bezrobotnych zostaje awansowany człowiek do profejsi Fjermierzy )
</br></br><b>Populacja Uczonych</b>
</br> Do rozwijania tej części populacji potrzebna jest szkoła. Po jej wybudowaniu odblokowujemy opcję szkolenia uczonych za odpowiednią ilość złota. Wielkość uczonych jest uzależniona od szkolenia i utrzymania wydziału nauk, za który płacimy w interwale czasowym.
Jeżeli zabraknie nam złota to ilość uczonych zacznie się zmniejszać. Uczeni generujący naukę są potrzebni w odkrywaniu nowych technologii ( kafelki podświetlane na niebiesko )
</br></br><b>Populacja Kupców</b>
</br> Pojawia się po wybudowaniu targowiska, a powiększyć ją można po odkryciu technologii. Każdego z kupca z osobna możemy wysłać do innej krainy w celach handlowych. Możliwości zarobkowania w ten sposób są opisane w dziale <a id="link11b"  class = "link" href = "#">Targ</a>.
Kupców możemy stracić tylko poprzez Wydarzenia które będą opisane w gazecie.
</br></br><b>Populacja Bezrobotnych</b>
</br> Jest obliczana na podstawie: Cała populacja - Drwale - Kamieniarze - Fjermierzy. Na podstawie bezrobotnych możemy wznosic budynki ( ktoś musi je budować ) oraz z ich puli po wybudowaniu chaty drwala, kamieniołomu, farmy zostaną przetransferowani
robotnicy do odpowiednich zawodów. 
						
	</ul>
</li>
<li><span style="color: gray"><b>Nadzieja i W**wienie</span></b>
	<ul>
	Te dwa parametry odpwiadają głównie za zwycięstwo oraz porażke w prowadzonej Ciebie grze. Do osiągniecia zwyciestwa/porażki
	potrzebny Ci odpowiedni parametry na poziomie 100pkt. 
	</br></br><b>Nadzieja</b> jest generowana przez:
	</br>- pory roku w interwale 3 sekundowy, jesienią +0.01 a zimą -0.01
	</br>- W interwale 3 sekundowym wzrost o 0.01, jeżeli w Twojej wiosce chaty są zapełnione w nie wiecej niz 80% maxymalnej ilości oraz ilość zboża jest wieksza niżeli ilość mieszkańców
	</br>- W interwale 3 sekundowym spadaek o 0.01, jeżeli ilość zboża spada ponizej cała populacja * 0.1 
	</br>- W intewale 5 sekundowym wzrost o 0.05, jeżeli jest wybudowany Zamek
	</br>- W intewale 3 sekundowym wzrost o 0.01, jeżeli jest wybudowany Kościół
	</br>- W intewale 3 sekundowym wzrost o 0.02, jeżeli jest wybudowany Łaźnie
	</br>- Jednorazowo powiększa sie o 10 w momencie wybudowania Oberży
	</br></br><b>Wk**wienie</b> jest generowana przez:
	</br>- W interwale 3 sekundowym, wzrost o 0.01 jeżeli jest wybudowana Oberża
	<div id = "plotki"></div>- W interwale 3 sekundowym, spadek o 0.01 jeżeli są wybudowana Łaźnie
	</br>- Sprowadzenie Niewolników, każdorazowy wzrost łączny o 4 - 5 w interwale 1 sekunda / 1 pkt
	</br>- W interwale 1 sekundowym, wzrost o 0.01 jeżeli jest wybudowany Pomnik Bohatera
	</br>- W interwale 3 sekundowym wzrost o 0.01, jeżeli w Twojej wiosce chaty są zapełnione wiecej niz 80% maxymalnej ilości oraz ilość zboża jest mniejsza niżeli ilość mieszkańców * 0.5
	



	</ul>
</li>
<li><span style="color: gray"><b>Torsjańska Gazeta i Plotki w sekcji Wydarzeń</span></b>
	<ul>
	</br>W Torsjańskiej gazecie znajdziesz wszystkie informację dotyczące Twojej osady:
</br>- co zostało wybudowane
</br>- co ma do powiedzenia Twój lud na temat zmieniajacych sie pór roku
</br>- informację o przeludnieniu 
</br>- brak możliwości wzniesienia budynków z powodu braku rąk do pracy, surowców lub innych wymagań
</br>- informacje o zdarzeniach losowych
<div id = "poryroku"></div>
</br>W sekcji Plotki znajdziesz wiadomości które będa dotyczyć zdarzeń losowych które być może nadejdą - nie zawsze te informacje się sprawdzą, aczkolwiek będzie można sie czasem do nich przygotować // 25.08 sekcja w przygotowaniu
						
	</ul>
</li>
<li><span style="color: gray"><b>Pory roku</b></span>
	<ul>
	Oddziaływują na ilość generowanych zasobów oraz zasobów specjalnych czyli Nadzieji i Wk**wienia. Pory roku zmieniaja się cyklicznie co 50 sekund. Wydarzenia mogą zmienić taryfikatory - wiecęj na ten temat w sekcji Zdarzenia losowe
	</br></br><b>Jesień</b> + 0.01 nadzieji oraz + zboża w zależności od ilości fjermierów 
	</br><b>Zima</b> - 0.01 nadzieji oraz - zboża w zależności od ilości ludzi
	<div id = "zdarzenia"></div><b>Wiosna</b>w zależności od ilości kamieniarzy i drwali, dodatnie wartości do drewna i kamienia
	</br><b>Lato</b> w zależności od ilości kamieniarzy i drwali, ujemne wartości do drewna i kamienia
	</ul>
</li>
<li><span style="color: gray"><b>Wydarzenia</b></span>
	<ul>
	
	</br>Są to losowo generowane wydarzenia w interwale bazującym na liczbie pseudolosowej. Będą one wpływać na losy rozgrywki. Przy każdym wydarzeniu losowym będziemy mieli możliwość odpowiednio zareagować wybierając jedna z trzech opcji. Między innymi z takimi wydarzeniami będziemy mieli okazje się zmierzyć:
	</br></br>- <b>Anomalia pogodowe:</b> 
	</br>- co każdą porę roku jest możliwe że, dana poru roku będzię specjalną i obrodzi w wydarzenia - dobre lub złe, w zależności od naszego szczęscia ;) 
	

	</br>- <b>Pożar:</b> 
	</br>- <b>Goście:</b>  
	</br>- <b>Susza:</b> 
	</br>- <b>Osuwisko w Kamieniołomie:</b>   
	</br>- <b>Napaść pobliskich zbójów:</b>  
	</br>- <b>Napaść wyznawcow Żółtego ptaka:</b>  
	</br>- <b>Bunt niewolnikow:</b>  
	</br>- <b>Bunt na tle religijnym:</b>  
	</br>- <b>Podżegacze żółtego ptaka:</b> 
	</br>- I kilka innych, o którcyh nie będe spojlerował ;)
<div id = "mechaniki"></div>
	
	</ul>
</li>
<span class="mediumtitle">Mechaniki</span>
<div id = "niewolnicy" style="height:15px;"></div>
<li><span style="color: gray"><b>Niewolnicy</b></span>
	<ul>
<p style="text-indent: 5%;">Gdy zauwazysz, ze znajdujesz sie w tragicznej sytuacji z populacją możesz zakupic niewolnikow... Kazda grupa niewolnikow jest
inna... odbywa to się w podobny sposob jak z tatarami bioracymi ludzi w jasyr w przeszlosci. Musimy oplacic koszty wyprawy po jasyr a dostaniemy tylu ilu uda sie zlapac.
Nie martw sie, zawsze ktos przywedruje z powrotem i wesprze Twoja osadę! ;)</p>
<p style="text-indent: 5%;">Niewolnicy kosztują 50 jednostek złota i przybywa ich w przedziale 30 - 50. Generują oni za każdym zakupem od 4 do 5 wk**wienia. Wk**wienie rośnie w interwale 1 / 1sec. 
Zbyt wielka ich ilość względem ilości mieszkańców może wygenerować ich bunt w ramach Wydarzenia.</p>
<div id = "dyplomatyczne"></div>
	</ul>
</li>
<li><span style="color: gray"><b>Misje dyplomatyczne</b></span>
	<ul>
	
	<p style="text-indent: 5%;"> Ta sekcja umożliwi wysyłanie misji dyplomatycznych do znanych Ci plemion, oraz podpatrzenia informacji dotyczących relacji z nimi. W grze występuję 6 plemion. 3 są plemionami z którymi targujemy oraz 3 z którymi możemy wojować.</p> 
	<b>Plemiona handlowe: </b>
	</br> Relacje z nimi im lepsze tym będą większe dochody z handlu. Podwyższamy ( oraz bardzo rzadko obniżamy jeżeli misja zakończy się niepowodzeniem ) je za pomocą misji dyplomatycznych, które kosztują złoto. Wpływ na relację z nimi może mieć też zdarzenie losowe.
	</br></br><b>Plemiona wojenne: </b>
	</br> Relacje z nimi będą rzutować na częstośc ataków odwetowych na naszą osadę. Relacje z nimi będą się zmniejszać po:
</br> -	niepowodzeniu misji szpiegowskiej
</br> - po ataku na ich plemię
</br> - zdarzenie losowe
<div id = "szpiegostwo"></div>		</br> Wszystkie plemiona w grze handlują ze sobą więc jeżeli wysyłamy kupca do plemienia handlowego to uzyskamy nie wielki bonus w relacjach do lubiącego go plemienia wojennego. Poniżej jak wyglądają zarzyłości pomiędzy plemionami:
</br> Yerisi <--> Maurykowie
</br> Merkowie <--> Plemowie
</br> Opsydianie <--> Nordyskowie
				
	</ul>
</li>
<li><span style="color: gray"><b>Szpiegostwo</b></span>
	<ul>
	
	<p style="text-indent: 5%;">Sekcja szpiegów staje się aktywną po wybudowaniu zamku oraz koszar. W sekcji szpiegów, będziesz mógł za złoto wyszkolić szpiegów. Za posiadanie szpiegów będziesz musiał zapłacić złotem w interwale czasowym. </p>
	<b>Zaczną być aktywne: </b>
	</br> -Współczynnik szpiegostwa, będzie rósł na podobnej zasadzie jak poziom nauki po wyszkoleniu uczonego. Maxymalny poziom szpiegostwa bedzie uzalezniony od aktualnej ilosci posiadanych szpiegów.
	</br>- Informacje na temat poszczególnych plemion ( ile wojsk posiadają ). Dane będą aktualizowane po przeprowadzeniu akcji szpiegoskich o czym w podpunktcie poniżej
	</br>- Możliwa do przeprowadzenia akcja szpiegowska, dzieki ktorej bedziemy mogli zaktualizować informację na temat plemienia oraz druga opcja, w której bedziemy mogli wykraść złoto. Każda akcja szpiegowska będzie obarczona ryzykiem wykrycia i pogorszenia relacji z danym plemieniem o czym więcej w sekcji dyplomatycznej.
		</ul>
</li>
<div id = "targ"></div>						

<li><span style="color: gray"><b>Targ</b></span>
	<ul>
	
	<p style="text-indent: 5%;">Targ jest dostępny po wybudowaniu targowiska i pozwoli na wymiane zasobów pomiedzy sobą. Nie będzie to najbardziej korzystna wymiana ale pozwoli na szybki zastrzyk potrzebnego nam surowca. Targ udostępnia również wysłanie kupców do 3 różnych krain.
	Handel z każdą poszczególną krainą daje odpowiednie bonusy w odpowiednich interwałach czasowych. Bonusy będą się zmieniać z czasem. Wybudowanie targowiska da nam możliwość zarządzania trzema kupcami. Żeby zwiększyć ilość kupców trzeba odkryć odpowiednie technologie.
	</br></br><b>Lokacje do których możemy wysłać kupców:</b>
	</br></br><b>- Maurykowie: </b>plemie żyjące za małym morzem. Handel z nimi wydaje się być najbardziej pewny choć nie wydarzy się w nim nadzwyczajnego. Możemy oczekiwać dochodów na wzglednie równym poziomie - choć nigdy nie spadną za nisko to nie będą też bardzo wysokie.
	</br></br><b>- Plemowie: </b>plemie, które odgrodzone jest od nas pustynią. Wysyłając do nich karawane możemy oczekiwać wyższych dochodów niż podczas handlu z Maurykami ale jest też obarczony większym ryzykiem i dochody mogą być niższe.
	</br></br><b>- Nordyskowie: </b>plemie na dalekiej północy znane z handlu futrami. Wymiana towarowa z tym plemieniem jest najbardziej opłacalna ale obarczona największym ryzykiem więc istnieje możliwość, że w ostatecznym rozrachunku zarobimy najmniej.
	</br></br><b>- Gry losowe: </b>Po wybudowaniu targowiska dostępne będa: Gry w trzy karty, oraz gra w kości! Życze szczęscia!
	</p>
<div id = "wiara"></div>						
	</ul>
</li>
<li><span style="color: gray"><b>Wiara</b></span>
	<ul>
		<p style="text-indent: 5%;">Tutaj wybieramy naszą główną religie, która wygeneruje nam bonusy w sytuacji kiedy nasza religia jest dominującą ( za dominującą uważa się gdy główna religia ma więcej wyznawców niż dwie pozostałe ). 
		Po wybraniu religii głównej oprócz możliwości otrzymania bonusów, zaistnieje możliwość powiększenia się niepokojów religijnych ( w sytuacji gdy Twoja religia nie jest dominującą tj. dwie pozostałe religie mają więcej wyznawców niż religia główna ).</p>
		<p style="text-indent: 5%;">W sytuacji gdy poziom niepokojów wzrośnie do 100, w 5 sekundowym interwale czasowym zacznie rosnąć wk**wienie. Niepokoje religijne można zredukować za pomocą odsykania wyższości religi głównej nad pozostałymi - Można do tego użyć czystek religijnych.
		Czysta religijna obniża ilość wyznawców danej religii o 30% ale generuję każdorazowo 0.5 W**wienia. </p>
		
<div id = "wojskowe"></div>		
	</ul>
</li>
<li><span style="color: gray"><b>Misje wojskowe</b></span>
	<ul>
	
	<p style="text-indent: 5%;">W tej sekcji możemy wsyłać wyprawę wojenną na jedną z trzech plemion wojennych lub ogłosić krucjatę na niewiernych. Po wysłaniu wyprawy zostaniemy automatycznie przeniesieniu do pozycji </b>Pole Bitwy</b> i tam prześledzimy jej losy.</p>
	<b>Wyprawy wojenne</b> są dostępne po wybudowaniu zamku oraz koszar oraz wyszkolenia wojowników dających odpowiednią siłe wojskową. Koszty wypraw wojennych są duże ale łupy kiedy wygramy mogą przejść nasze największe oczekiwania. Potencjalne zyski i straty są opisane przy kafelku z wysyłaniem wyprawy.
	Warto przed wysłaniem wyprawy poznać potencjalne siły przeciwnika wysyłając do nich szpiegach ( szczegóły opisane w sekcji <a id="link10b"  class = "link" href = "#">Szpiegostwo</a> ). 
	</br></br><b>Krucjata</b> jest dostępna po wybudowaniu zamku, koszar oraz kościoła. Jak w sytuacji wypraw wojennych o zwycięstwie lub porażce zadecyduje różnica w siłach naszych wojsk. W oszacowaniu sił przeciwnika nie pomoże nam szpieg ( kultura oraz religia są diametralnie inne i nasz wywiad nie potrafi przeniknąc do ich plemienia ), 
	tutaj będziemy musieli polegać na naszej świętej wierze i prosić wybranego przez nas Boga o zwycięstwo!

		<div id = "nauka"></div>						
	</ul>
</li>
<li><span style="color: gray"><b>Nauka</b></span>
	<ul>
	
	<p style="text-indent: 5%;">W tej sekcji wybudujemy szkołę, w której będziemy mogli zwiększyć nauke naszych obywateli. Nauke wygeneruje dla nas nowa grupa Torsjan, czyli <b>Uczeni</b>. Za pkt nauki możemy odkrywać nowe technologię.</p> 
	<p style="text-indent: 5%;">Możemy wznieść 5 poziomów szkoły. Każdy poziom szkoły pozwoli nam na wykup szkolenia dla 5 dodatkowych
	Uczonych. Jeden uczony generuje 0.04 nauki na 5 sekund. Koszt nauczania 5 uczonych to jednarozowy wydatek 50 złota. Natomiast utrzymanie uczonych i pozwolenie im na badania 
	( a co za tym idzie generowanie pkt Nauki ) to koszt w interwale 5 sekundowym 0.05 złota. Jeżeli złoto nam się skończy to
	pkt nauki zaczna spadać w interwale czasowym 30 sekund - 1 pkt nauki.</p>
						
	</ul>
</li>
</div>
</div>
</div> 
            </div> 
        </div> 

 





<script>
$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
	</script>
</body>
</html>