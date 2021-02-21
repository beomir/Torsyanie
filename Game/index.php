<?php
	session_start();
	
	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('location: pregra.php');
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
	$('#link0').click(function() {$.scrollTo($('#logo'),500); });
	$('#link1').click(function() {$.scrollTo($('#logo'),500); });
		$('#link1a').click(function() {$.scrollTo($('#logo'),500); });
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
				<li><a id="link0" href="#">Newsy</a></li>
				<li><a href="rejestracja.php">Rejestracja</a>
					
				</li>
				<li><a id="link1" href="#">Zaloguj</a>
				<li><a href="#">Linki</a>
					<ul>
						<li><a target="_blank" rel="noopener noreferrer" href = "instrukcja.php">Instrukcja</a></li>
						<li><a target="_blank" rel="noopener noreferrer" href = "lista_budynkow.php">Lista Budynków</a></li>
						
						
					</ul>
				</li>
				<li><a id="link1a" href="#">Zmień język</a>
				<ul>
					<li><a href = "index.php">русский</a></li>
					<li><a href = "index.php">English</a></li>
					</ul>
				</li>
				
			</ol>
		
		</div>
		</div> 

 <div class="container"> 
            <div class="box"> 
                <div class="box-row"> 
                    <div class="box-cell box1"> 
	
	<a class = "link" href = "rejestracja.php">Rejestracja - załóż darmowe konto!</a>
 <br /><br />
 Zaloguj się i rozpocznij grę <span style= "color: #FFD700">Uratuj Torsjan</span>
 <br /><br />
 <form action="zaloguj.php" method="post">
	Login: <br/> <input type="text" name="login" /> <br/>
	Hasło: <br/> <input type="password" name="haslo" /> <br/> <br/>
	<input type="submit" value="Zaloguj się"/>
 
 </form>
 <?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
 ?>
<br /><br />

</div> 


<div class="box-cell box2"> 
<div style= "background-color: #742222;padding-left: 5px;padding-right: 5px; padding-bottom: 15px;padding-top: 15px;  margin-bottom: 10px; border-radius:15px;"  id = "content1">
<span class="bigtitle">Informacja ogólna</span>
<div style="height:15px;"></div>
Witam wszystkich na stronie gdzie po zarejestrowaniu się ( opcja do wyboru w menu powyżej bądź w menu z lewej strony nad logowaniem ) będziecie mogli rozpocząc rozgrywkę w celu uratowania Torsjan przed Żółtym ptakiem. Gra Uratuj Torsjan to gra ekonomniczno-strategiczna, w której zbierając surowce, wznoszac odpowiednie budynki, 
dbając o wygode oraz wielkość populacji Torsjan poprzez korzystanie z wielu udostepnionych mechanik musisz poprowadzić lud Torsjan do wielkości ;) więcej na ten temat znajdziesz w sekcji Linki -> Instrukcja w menu powyżej. Polecam bardzo nawigacje poprzez 
górne menu, pozowli Ci to zapoznać się z grą wyświetlając podstrony ( takie jak lista budynkow lub instrukcja ) czy też przenosząc Cię w odpowiednie miejsce na tej stronie. Górne menu wraz ze scrollowaniem przez Ciebie strony w dół bądź w góre, będzie podążać 
za Tobą. Poniżej będę zamieszczał newsy dotyczące gry, takie jak eleminowanie odkrytych bugow, zmiany w istniejacych mechanikach, dodanie nowych mechanik. Gra wykorzystuje grafiki znalezione losowo w internecie oraz w sekcji bitwy powycinane 
z filmów autorstwa  <a  target="_blank" rel="noopener noreferrer" class = "link" href = "https://www.youtube.com/channel/UC7XQsqlrMy5ztcWBMd_Up0g">ThrashingMadPL</a>

</div>




<div style= "background-color: #A52A2A;padding-left: 5px; border-top: 2px dotted gray;" id ="content2">
<span class="bigtitle">Newsy</span>
<div style="height:15px;"></div>
<li>18.09.2020
	<ul >
	Dodane:
	</br>- Dokończenie misji wojskowych i krucjat
	</br>- Pole bitwy
	</br>- Gry w kości oraz gry w 3karty w sekcji Targowiska
	</br>- Misje dyplomatyczne
	</br>- Szpiegostwo
	</br>- Plotki
	</br>- Losowe zdarzenia
	</ul>
</li>
<li>03.09.2020
	<ul >
	Dodane:
	</br>- Dokończenie misji wojskowych i krucjat
	</br>- Pole bitwy
	</ul>
</li>
<li>02.09.2020
	<ul >
	Dodane:
	</br>- Werbunek w sekcji Wojskowej
	</br>- Misje wojskowe
	</br>- Zmienne koszty budowy budynków wielopoziomowych
	</br>Poprawione:
	</br>- Lista budynków
	</br>- Instrukcja
	</br>- Bugi z blednie pojawiajacymi się informacjami
	</br>- Optymalizacja kodu ( zrezygnowanie z dwoch interwałów czasowych na rzecz wywolywania funkcji po sobie )
	</ul> 
</li>
<li>01.09.2020
	<ul >
	Dodane:
	</br>- Wybór głównej religii w sekcji Wiara 
	</br>- Mechanika generowania niepokojow religijnych, czystki religijnej
	</ul>
</li>
<li>31.08.2020
	<ul >
	Dodane:
	</br>- Wymiana towarów w sekcji targ 
	</br>- Odnośnik do osobnej strony z cenami towarów
	</br>- Mechanika wysyłania kupców oraz zmienna dochodowość każdego z kierunków handlu
	</ul>
</li>

<li>27.08.2020
	<ul >
	Poprawione:
	</br>- Wybudowanie kolejnego domu, chaty drwala, kamieniołomu, farmy nie spowoduje nie wczytania sie kolejnego pliku z mapą dzielnicy
	</br>- Surowce nie schodza ponizej 0
	</br>Dodane:
	</br>- Mechanika Szkoły-Nauki-Uczonych
	</br>- zwolnienia Drwali, Farmerow, Kamieniarzy
	</br>- burzenie farmy, kamieniołomu, chaty drwala
	</ul>
</li>
<li>25.08.2020
	<ul >
	Podstrony z instrukcją oraz przed grą - zostały uzupełnione, a sama strona główna zostały odświeżona.
	Doszło też do nie wielkich zmian w samym pliku z grą. Nastepnym etapem będzie Ruskie tłumaczenie --> dodawanie brakujących mechanik --> balans rozgrywki
		
		
<img src="news2.jpg">
	</ul>
</li>
<li>24.08.2020
					<ul>
					Wkońcu zmieniłem Stronę główna dedykowaną pod grę na bardziej przyjazną dla oka co możecie zauważyć poniżej jak to wyglądało wczesniej a jak wygląda dzisiaj ;)
					
					<table>
					<tr><td>Wcześniej</td></tr>
					
					<tr><td><img src="indexprzed.jpg"  alt=" "/></td></tr>
					
					<tr><td>Aktualnie</td></tr>
					
					<tr><td><img src="indexpo.jpg"  alt=" "/></td></tr>
					</table>				
					</ul>
				</li>
				
				
<li>23.08.2020
	<ul>
	Usunięcie buga dotyczącego błednego wyświetalnia informacji przy porze roku: Lato
						
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