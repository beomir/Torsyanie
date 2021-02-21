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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src ="jquery.scrollTo.min.js"></script>
<title>Torsjanie - gra przegladarkowa</title>

<style>
body
{
background-color: #222222;
font-size: 24px;
color: white;
margin: 0 !important;
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

}

#logo2
{
width: 800px;
background-color: #222222;
font-size: 24px;
color: white;
text-align: center;
padding: 15px;
margin-left:auto;
margin-right:auto;

}

#lewa
{
float:left;
background-color: #222222;
font-size: 24px;
text-align: center;
color: white;
margin-left:auto;
margin-right:auto;
width: 200px;
}

#lewa2
{
float:left;
background-color: #222222;
font-size: 24px;
text-align: center;
color: white;
margin-left:auto;
margin-right:auto;
min width: 200px;
}

#content
{

float:left;
background-color: #222222;
font-size: 24px;
color: white;
text-align: right;
margin-left:auto;
margin-right:auto;
width: 90%;
}

#footer
{

float:left;
background-color: #222222;
font-size: 24px;
color: white;
text-align: center;
min-height: 500px;
margin-left:auto;
margin-right:auto;
width: 1440;
}

#prawa
{

float:left;
background-color: #222222;
font-size: 24px;
color: white;
text-align: left;
margin-left:auto;
margin-right:auto;
width: 30%;
}

.link		{ color: #FFD700; text-decoration: none;}

a.tilelink
{
color: #ffffff;
text-decoration: none;
}



.litera
{
	text-align:center;
	padding:5px;
	margin:5px;
	border:3px solid gray;
	float:left;
	cursor: pointer;
	border-radius:15px;
}

.litera:hover
{
	background-color: #000000;
	color: white;
	border:3px solid white;
	
}

.reset
{
	color:green;
	cursor:pointer;
	font-size: 48px;
}

.reset:hover
{
	color:white;
}


.overlay { 
   position: fixed; 
   overflow-y: scroll;
   top: 0; right: 10; bottom: 0; left: 0;
	z-index: 150; }

.buttonr1
{
	text-align:center;
	padding:5px;
	margin:5px;
	border:3px solid gray;
	float:center;
	cursor: pointer;
	border-radius:15px;
}

.buttonr1:hover
{
	background-color: #1E90FF;
	color: white;
	border:3px solid white;
}

.buttonr2
{
	text-align:center;
	padding:5px;
	margin:5px;
	border:3px solid gray;
	float:center;
	cursor: pointer;
	border-radius:15px;
}

.buttonr2:hover
{
	background-color: yellow;
	color: white;
	border:3px solid white;
}

.buttonr3
{
	text-align:center;
	padding:5px;
	margin:5px;
	border:3px solid gray;
	float:center;
	cursor: pointer;
	border-radius:15px;
}

.buttonr3:hover
{
	background-color: red;
	color: white;
	border:3px solid white;
}

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

.buttonr4
{
text-align:center;
	padding:5px;
	margin:5px;
	border:3px solid gray;
	float:center;
	cursor: pointer;
	border-radius:15px;
	
	
}

.buttonr4:hover
{
	background-color: #8B0000;
	color: white;
	border:3px solid white;
}

.nav
{ 
	width: 100%;
	padding: 10px 0;
	background-color: #c34f4f;
	text-align: center;
	border-top: 1px solid #751b1b;
	border-bottom: 1px solid #751b1b;
}

.sticky
{
	width: 100%;
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



.tech
{
	text-align:center;
	padding:5px;
	margin:5px;
	border:3px solid gray;
	float:left;
	cursor: pointer;
	border-radius:15px;
}

.tech:hover
{
	background-color: #000000;
	color: white;
	border:3px solid blue;
	
}

.destroy
{
	text-align:center;
	padding:5px;
	margin:5px;
	border:3px solid gray;
	float:left;
	cursor: pointer;
	border-radius:15px;
}

.destroy:hover
{
	background-color: #000000;
	color: white;
	border:3px solid red;
	
}


.styledPtaki {
    border: 0;
    line-height: 2.5;
	cursor: pointer;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: #7FFF00;
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styledPtaki:hover {
    background-color: #FFA500;
	color: red;
}

.styledPtaki:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}

.styledRadogoszcze {
    border: 0;
    line-height: 2.5;
	cursor: pointer;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: red;
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styledRadogoszcze:hover {
    background-color: #800000;
	color: black;
}

.styledRadogoszcze:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}


.styledNemiz {
    border: 0;
    line-height: 2.5;
	cursor: pointer;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: #FF00FF;
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styledNemiz:hover {
    background-color: #0000CD;
	color: red;
}

.styledNemiz:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}

.board
{	 width: 450px;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	
}

.card
{ 
	width: 122px;
	height: 203px;
	display: inline-block;
	margin: 3px;
	background-image: url("buildings/oberza/karty/card.png");
	border: 4px solid #51c8b2;
	border-radius: 4px;
	cursor: pointer;
	filter: brightness(70%);
	transition: all .3s ease-in-out;
}

.card:hover
{
	border: 4px solid #e9b64a;
	filter: brightness(100%);
}

.cardA
{ 
	width: 122px;
	height: 203px;
	display: inline-block;
	margin: 3px;
	background-image: url("buildings/oberza/karty/card.png");
	border: 4px solid #e9b64a;
	border-radius: 4px;
	cursor: pointer;
	filter: brightness(80%);
	transition: all .3s ease-in-out;
}

.cardA:hover
{
	border: 4px solid #e9b64a;
	filter: brightness(100%);
}

.news
{
	filter: brightness(60%);
	transition: all .6s ease-in-out;
	background-color: black;
	border-radius:15px;
	border: solid silver 4px;
}

.news:hover
{
	filter: brightness(100%);
	border: 4px solid gold;
}





</style>
<script type="text/javascript">

jQuery(function($)
{
	$.scrollTo(0);
	$('#link1').click(function() {$.scrollTo($('#Osada'),500); });
	$('#link1a').click(function() {$.scrollTo($('#Osada'),500); });
	$('#link2').click(function() {$.scrollTo($('#WysokaOsada'),500); });
	$('#link3').click(function() {$.scrollTo($('#Las'),500); });
	$('#link4').click(function() {$.scrollTo($('#Kamieniolomy'),500); });
	$('#link5').click(function() {$.scrollTo($('#Farmy'),500); });
	$('#link6').click(function() {$.scrollTo($('#szkola'),500); });
	$('#link7').click(function() {$.scrollTo($('#targ'),500); });
	$('#link7a').click(function() {$.scrollTo($('#szkola'),500); });
	$('#link8').click(function() {$.scrollTo($('#wiara'),500); });
	$('#link9').click(function() {$.scrollTo($('#oberza'),500); });
	$('#link10').click(function() {$.scrollTo($('#koszary'),500); });
	$('#link10a').click(function() {$.scrollTo($('#koszary'),500); });
	$('#link11').click(function() {$.scrollTo($('#wyprawywojenne'),500); });
	$('#link12').click(function() {$.scrollTo($('#polebitwy'),500); });
	$('#link12a').click(function() {$.scrollTo($('#polebitwy'),500); });
	$('#link12b').click(function() {$.scrollTo($('#polebitwy'),500); });
	$('#link12c').click(function() {$.scrollTo($('#polebitwy'),500); });
	$('#link12d').click(function() {$.scrollTo($('#polebitwy'),500); });
	$('#link13').click(function() {$.scrollTo($('#niewolnicyL'),500); });
	$('#link14').click(function() {$.scrollTo($('#plikguildiaszpiegowD'),500); });
	$('#link15').click(function() {$.scrollTo($('#misjedyplomatyczne'),500); });
	$('#link16').click(function() {$.scrollTo($('#misjedyplomatyczne'),500); });
	$('#link16a').click(function() {$.scrollTo($('#misjedyplomatyczne'),500); });
	$('#link0').click(function() {$.scrollTo($('#logo'),500); });
	$('#link99').click(function() {$.scrollTo($('#losowezdarzenia'),500); });
	$('#link98').click(function() {$.scrollTo($('#losowezdarzenia'),1500); });
	
}
);


function odswiezanie()
{

resources();
miesiace();
nazwymiesiacy();
zmienporeroku();
nazwaporyrokuF();
f_color();
f_color2();

mapy();
populacja_uczonych();
grawkosciFobrazek();
losowezdarzeniaF();
plotkioplemionachF();
fakenewsF();

czasgryF();

};
var miesiacnazwa;
var miesiacnumer = 8;
var iloscmiesiecy = 0;
var ilosclat = 0;
var iloscmiesiecy2 = (-1)
//niewolnicy
var egzekucjaniewolnikowV = 0;
var promocjaniewolnikowV = 0;
//mechanika por roku
var porarokunumer = 3;
var nazwaporyroku = "Jesień"
var porarokuUwaga = "Idą zbiory"
var porarokuBonus;
var ratiogierwkosci = 0;
var ratiogierwoberzy = 0;
var iloscszpiegow = 0;
var kosztszpiega = 5 + (iloscszpiegow * 5);
var kosztutrzymaniaszpiega = 0;
var punktyszpiegostwa = 0;
var sprawdzilumajawojowmerkowielvl = 0;
var sprawdzilumajawojowmyerysilvl = 0;
var sprawdzilumajawojowopsydianielvl = 0;

var ukradnijzlotoyerysilvl = 0;
var ukradnijzlotomerkowielvl = 0;
var ukradnijzlotoopsydianielvl = 0;
var kosztwyslaniaszpiega1 = 10;
var kosztwyslaniaszpiega2 = 15;

var populacjayerisow = orsyanie;
var populacjamerkow = Math.floor(orsyanie * 1.5);
var populacjaopsydian = Math.floor(orsyanie * 2);

var szacowanailoscyerisow = 0;
var szacowanailoscymerkow = 0;
var szacowanailoscopsydian = 0;

var powodzeniemisjiszpiegowskiej = 0;
var ukradzionezloto = 0;

var relacjezmaurykami = 30;
var relacjezplemami = 70;
var relacjeznordyskami = (-30);
var relacjezmerkami = 92;
var relacjezopsydianami = 71;
var relacjezyerisami = (-58);
var pktrelacji;

var rodzajplemienia;
var bonusinfo;
var wplywnahandel;
var wplywnahandelMerkowie = 0;
var wplywnahandelYerisi = 0;
var wplywnahandelOpsydianie = 0;
var wplywnahandelNordyskowie = 0;
var wplywnahandelMaurykowie = 0;
var wplywnahandelPlemowie = 0;

var magazynlvl = 1;
var kosztbudowymagazyndrewno = 250 + ( magazynlvl * 50)
var kosztbudowymagazynkamien = 100 + ( magazynlvl * 50)
var zameklvl = 0;
var pomnik_bohateralvl = 0;
var chata_drwalalvl = 1;
var kosztbudowychata_drwaladrewno = 50 + ( chata_drwalalvl * 50)
var kosztbudowychata_drwalakamien = 20 + ( chata_drwalalvl * 20)
var kamieniolomlvl = 1;
var kosztbudowykamieniolomdrewno = 50 + ( kamieniolomlvl * 50)
var kosztbudowykamieniolomkamien = 20 + ( kamieniolomlvl * 20)
var farmalvl = 1;
var kosztbudowyfarmadrewno = 50 + ( farmalvl * 30)
var kosztbudowyfarmakamien = 20 + ( farmalvl * 10)
var iloscdomow = 4;
var kosztbudowyiloscdomowdrewno =  iloscdomow * 50
var kosztbudowyiloscdomowkamien =  iloscdomow * 20

var kosciollvl = 0;
var koszarylvl = 0;
var kosztbudowykoszarydrewno = 300 + ( koszarylvl * 100);
var kosztbudowykoszarykamien = 300 + ( koszarylvl * 100);
var kosztbudowykoszaryzloto = 0 + ( koszarylvl * 10);
var targowiskolvl = 0;
var laznielvl = 0;
var oberzalvl = 0;
var kanalizacjelvl = 0;
var palaclvl = 0;
var szkolalvl = 0;
var kosztbudowyszkoladrewno = 300 + ( koszarylvl * 100);
var kosztbudowyszkolakamien = 300 + ( koszarylvl * 100);
var kosztbudowyszkolazloto = 0 + ( koszarylvl * 50);

var zbrojownialvl = 0;

var orsyanie = 16;
var drwale = chata_drwalalvl * 5
var kamieniarze = kamieniolomlvl * 5;
var fjermierzy = farmalvl * 5;
var bezrobotni = orsyanie - drwale - kamieniarze - fjermierzy - armia - kupcy - uczeni;
var mieszkancydomu = 4;

var drewno = 210;
var kamien = 210;
var zboze = 36;
var zloto = 150.5;

var riots = 1;
var hope = 1;

var motykalvl = 0;
var kosalvl = 0;
var futralvl = 0;
var ociepleniedomowlvl = 0;

var uczeni = 0;
var kupcy = 0;
var wahaniapoptorsjan = 66;
var wahaniapopniewolnikow = 33;
var napiecianiewolnikowV = 0;
var populacjaniewolnikow;
var poziomgrywkosci = 7;
var grawkoscitwojrzut;
var grawkosciprzeciwnikarzut;
var wynikrzutu;
var flagarzutu;
var kosciwtrakcie = 0;
var iloscgierwkosci = 0;
var iloscwygranychwkosci = 0;
var iloscprzegranychwkosci = 0;
var iloscremisowwkosci = 0;
var twojwynikrzutukoscmi;
var losowezdarzenia = 0;
var losowezdarzeniaflaga = 0;
var noweploteczki = 0;
var nowewydarzenie = 0;

var anomaliapogodowa = 0;
var anomaliaznacznik;
var anomaliapogodowaflaga = 0;
var smiercnawyprawiesuma = 0;
var smiercnawyprawie = 0;
var wyprawapozwierzyne = 0;
var ilosczniszczonychbudynkow = 0;

var silaarmiianomaliapogodowa = 0;
var anomaliapogodowezboze = 1;
var anomaliapogodowedrewno = 1;
var anomaliapogodowekamien = 1;
var zdarzeniewtrakcie = 0;

var plotkioplemionach = 0;
var plotkioplemionach2 = 0;
var wydarzenialosoweplemionmer = 1;
var wydarzenialosoweplemionyer = 1;
var wydarzenialosoweplemionops = 1;

var wydarzeniahandelzplemami = 0;
var	wydarzeniahandelzmaurykami = 0;
var	wydarzeniahandelznordyskami = 0;
var wydarzeniadrewno = 0;

var wydarzeniazboze = 0;
var smiercwkamieniolomie =0;
var wydarzeniekamien = 0;
var wydarzeniezloto = 0;
var dlutolvl = 0;

var wolnyhandellvl = 0;
var merkiantylizmlvl = 0;
var protekcjonalizmlvl = 0;
var siekeralvl = 0;
var kiloflvl = 0;
var pilalvl = 0;

var anomaliaczysiewydarzy = 2;
var napascwyznawcowzoltegoptaorsyanie = 0;
var wydrzenieodklikane = 2;

var godzina = 0;
var minuta = 0;
var sekunda = 0;

var dlugoscwyswietlaniawydarzeniakrotkie = 12000;
var dlugoscwyswietlaniawydarzeniadlugie = 22000;

var losoweplemie;
var wygranaV = 0;
var przegranaV = 0;

var zegarek;
var uczeniodklikani = 0;
var futraV = 0;
var ocieplaniedomowV = 0;

function zmienporeroku()
{
	porarokunumer++;if(porarokunumer>4) porarokunumer=1;
	
	var plikporyroku = "<img src=\"poraroku" + porarokunumer + ".jpg\" />";
	var plikporyrokuM = "<img src=\"porarokuM" + porarokunumer + ".jpg\" />";
	
	document.getElementById("poraroku").innerHTML = plikporyroku;
	document.getElementById("porarokuM").innerHTML = plikporyrokuM;
	
	setTimeout (function zmienporeroku() { 
$("#poraroku").fadeOut(500); }, 50500)
$("#poraroku").fadeIn(500);
setTimeout (function zmienporeroku() { 
$("#porarokuM").fadeOut(500); }, 50500)
$("#porarokuM").fadeIn(500);
		//setTimeout("zmienporeroku()",51000);
	
};

function miesiace()
{
	miesiacnumer++;if(miesiacnumer>12) 
	{miesiacnumer=1;
	}
	setTimeout("miesiace()",17000);
	iloscmiesiecy = iloscmiesiecy + 1;
	iloscmiesiecy2 = iloscmiesiecy2 +1;
	nazwymiesiacy();
	if(iloscmiesiecy2>11)
	{
		iloscmiesiecy2=0;
		ilosclat = ilosclat + 1;
	}
	document.getElementById("dlugoscgry").innerHTML = "Lat: " + ilosclat + " , Miesięcy: "+ iloscmiesiecy2;
	if(miesiacnumer==9 || miesiacnumer==12 || miesiacnumer == 3 || miesiacnumer == 6  )
	{
		
		zmienporeroku();
		nazwaporyrokuF();
	}
};



function czasgryF()
{

sekunda = sekunda + 1;
if(sekunda == 60)
{
	sekunda = 0;
	minuta = minuta + 1;
}
if(minuta == 60)
{
	minuta = 0;
	godzina = godzina + 1;
}

godzina = godzina;
minuta =  minuta;


if(sekunda<10 && minuta<10)
{
 document.getElementById("zegar").innerHTML = "0" + godzina+":"+ "0"+minuta+":"+"0"+sekunda;
 zegarek = "0" + godzina+":"+ "0"+minuta+":"+"0"+sekunda;
}
else if(sekunda>=10 && minuta<10)
{
 document.getElementById("zegar").innerHTML =  "0" + godzina+":"+"0"+minuta+":"+sekunda;
 zegarek =  "0" + godzina+":"+"0"+minuta+":"+sekunda;
}
else
	document.getElementById("zegar").innerHTML =  "0" + godzina+":"+minuta+":"+sekunda;
	zegarek = "0" + godzina+":"+minuta+":"+sekunda;

 setTimeout("czasgryF()",1000)

 };


function nazwaporyrokuF()
	{ 
	if(porarokunumer == 1) nazwaporyroku = "Jesień";
	else if (porarokunumer == 2) nazwaporyroku = "Zima";
	else if (porarokunumer == 3) nazwaporyroku = "Wiosna";
	else if (porarokunumer == 4) nazwaporyroku = "Lato";
	
	//setTimeout("nazwaporyrokuF()",51000);
	porarokuBonusyF();
	PoraRokuUwagi();
	f_color();
	losowoscanomalipogodowejF();
	};



function PoraRokuUwagi(zmienporeroku)
{
	if(porarokunumer == "1") porarokuUwaga = "Idą zbiory";
	else if (porarokunumer == "2") porarokuUwaga = "Śniegu jest więcej niż zawsze";
	else if (porarokunumer == "3") porarokuUwaga = "Wszystko kwitnie, aż chcę się pracować!";
	else if (porarokunumer == "4") porarokuUwaga = "Upał, wszyscy są zmęczeni";
	
};



function f_color(nazwaporyrokuF,PoraRokuUwagi,porarokuBonusyF) 
{
	
	
 if (nazwaporyroku == "Jesień")
 {
 var result = nazwaporyroku.fontcolor("#228B22")
 var result1 = porarokuUwaga.fontcolor("#228B22")
 var result9 = porarokuUwaga.fontcolor("#228B22")
 var result2 = porarokuBonus.fontcolor("#228B22")
 
 }
 else if (nazwaporyroku == "Zima") 
 { 
  var result = nazwaporyroku.fontcolor("#1E90FF")
  var result1 = porarokuUwaga.fontcolor("#1E90FF")
  var result9 = porarokuUwaga.fontcolor("#1E90FF")
  var result2 = porarokuBonus.fontcolor("#1E90FF")
  }
  else if (nazwaporyroku == "Wiosna")
 {
  var result = nazwaporyroku.fontcolor("#DAA520")
  var result1 = porarokuUwaga.fontcolor("#DAA520")
  var result9 = porarokuUwaga.fontcolor("#DAA520")
  var result2 = porarokuBonus.fontcolor("#DAA520")
  }
  else if (nazwaporyroku == "Lato")
 {
  var result = nazwaporyroku.fontcolor("#F08080")
  var result1 = porarokuUwaga.fontcolor("#F08080")
  var result9 = porarokuUwaga.fontcolor("#F08080")
  var result2 = porarokuBonus.fontcolor("#F08080")
  }
  
 document.getElementById("nazwaporyroku").innerHTML = result;
 document.getElementById("porarokuUwaga").innerHTML = result1;
 document.getElementById("porarokuUwagaS").innerHTML = result9;
  document.getElementById("porarokuBonus").innerHTML = result2;

};

function f_color2(nazwymiesiacy)
{
	if(miesiacnumer==12||miesiacnumer<3)
	{
		var result3 = miesiacnazwa.fontcolor("#1E90FF")
	}
	else if(miesiacnumer>=3 && miesiacnumer<6)
	{
		var result3 = miesiacnazwa.fontcolor("#DAA520")
	}
	else if(miesiacnumer>=6 && miesiacnumer<9)
	{
		var result3 = miesiacnazwa.fontcolor("#F08080")
	}
	else if(miesiacnumer>=9 && miesiacnumer<=11)
	{
		var result3 = miesiacnazwa.fontcolor("#228B22")
	}
	document.getElementById("miesiacnazwa").innerHTML = result3;
}



var oddporyrokuzboze = 0;
var oddporyrokuhope = 0;
var oddporyrokudrewno = 0;
var oddporyrokukamien = 0;
var grawkartystatus = 0;

function oddzialywanieporroku(nazwaporyrokuF)
{ 
	if (nazwaporyroku == "Jesień") 
	{
		oddporyrokuzboze = Math.round(((fjermierzy * 0.1)*anomaliapogodowezboze)*100)/100;
		oddporyrokuhope = 0.01;
		oddporyrokudrewno = 0;
		oddporyrokukamien = 0;
	}
	else if (nazwaporyroku == "Zima") 
	{
		oddporyrokuzboze = Math.round((((orsyanie * 0.05)*(-1)*anomaliapogodowezboze)*(1-futraV-ocieplaniedomowV))*100)/100;
		oddporyrokuhope =  (-0.01);

	}
	else if (nazwaporyroku == "Wiosna")
	{
		 oddporyrokudrewno = Math.round(((drwale * 0.1)*anomaliapogodowedrewno)*100)/100;
		 oddporyrokukamien = Math.round(((kamieniarze * 0.1)*anomaliapogodowekamien)*100)/100;
		 oddporyrokuzboze = 0;
		oddporyrokuhope =  0;
	}
	else if (nazwaporyroku == "Lato")
		{
		 oddporyrokudrewno = Math.round(((drwale*0.1*(-1))*anomaliapogodowedrewno)*100)/100;
		 oddporyrokukamien = Math.round(((kamieniarze*0.1*(-1))*anomaliapogodowekamien)*100)/100;
		 
		}
		
};

function porarokuBonusyF()
{
	oddzialywanieporroku();
	if(porarokunumer == "1") {porarokuBonus = "+0.01 Nadzieja, +" + oddporyrokuzboze + " Zboże";}
	else if (porarokunumer == "2") {porarokuBonus = "-0.01 Nadzieja, "+ oddporyrokuzboze+ " Zboże";}
	else if (porarokunumer == "3") {porarokuBonus = "+" + oddporyrokudrewno + " Drewno, + " + oddporyrokukamien + " Kamień";}
	else if (porarokunumer == "4") {porarokuBonus =oddporyrokudrewno+ " Drewno, " + oddporyrokukamien +" Kamień";}
	
	
};

//wygrana przegrana alert

function wygrana(sprawdzzamek,sprawdzpomnik) 
{
	if(hope >= 100 && zameklvl >= 1 && pomnik_bohateralvl >= 1 && wygranaV == 0)
		{ 
		alert("Wygrałeś!  Grałeś " + zegarek + ". Poprowadziłeś swój lud do chwały w: " + ilosclat + " lat i " + iloscmiesiecy2 + " miesięcy" + ". Jeżeli klikniesz OK, będziesz mógł kontynuuować swoją rozgrywkę");
		wygranaV = 1;
		document.getElementById("news2a").innerHTML = "WYGRANA";
		$("#news2a").css("color","green")
		}
  
};

function przegrana(pupulacja_orsyan) 
{
	if(riots >= 100 || orsyanie <= 0 && przegranaV == 0)
		{ 
		alert("Przegrałeś! Grałeś " + zegarek + ". Udało Ci się przetrwać: " + ilosclat + " lat i " + iloscmiesiecy2 + " miesięcy" +  ". Jeżeli klikniesz OK, będziesz mógł kontynuuować swoją rozgrywkę");
		przegranaV = 1;
		document.getElementById("news2a").innerHTML = "PRZEGRANA";
		$("#news2a").css("color","red")
		}
  
};


function targdostepF()
{
	if(targowiskolvl==1)
	{
		document.getElementById("targdostep").innerHTML = "Handel dostępny! Kantują jak zawsze";
	}
	else
	{
		document.getElementById("targdostep").innerHTML = "Handel nie dostępny, wybuduj Targowisko żeby zacząć handlować! Targowisko wybudujesz w Osadzie";
	}
};

function wiaradostepF()
{
	if(kosciollvl==1)
	{
		document.getElementById("wiaradostep").innerHTML = "Torsjanie gromko przybywają na nabożeństwa";
	}
	else
	{
		document.getElementById("wiaradostep").innerHTML = "Torsjanie tęsknią za oparciem w wierze. Zbuduj Kościół i ukierunkuj swój lud w słusznej wierze";
	}
};

function oberzadostepF()
{
	if(oberzalvl==1)
	{
		document.getElementById("oberzadostep").innerHTML = "Szefie, przednia zabawa! Zacahry stracil dzisiaj ostatni ząb! ";
	}
	else
	{
		document.getElementById("oberzadostep").innerHTML = "Torsjanom brakuje rozrywki, wybuduj Oberżę w sekcji osada";
	}
};
//zmiana wygladu mapy osady




function mapaosadyF()
{
	if(iloscdomow < 14)
	{var plikOsada = "<img src=\"buildings/settelement/settelement" + iloscdomow + zameklvl +  oberzalvl + pomnik_bohateralvl + targowiskolvl + ".jpg\" />";
	
	document.getElementById("Osada").innerHTML = plikOsada;
	}
	else plikOsada = "<img src=\"buildings/settelement/settelement" + "13" + zameklvl +  oberzalvl + pomnik_bohateralvl + targowiskolvl + ".jpg\" />"
	document.getElementById("iloscdomow").innerHTML = iloscdomow;
	document.getElementById("iloscdomows").innerHTML = iloscdomow;
	document.getElementById("oberzalvl").innerHTML = oberzalvl;
	document.getElementById("oberzalvls").innerHTML = oberzalvl;
	document.getElementById("pomnik_bohateralvl").innerHTML = pomnik_bohateralvl;
	document.getElementById("pomnik_bohateralvls").innerHTML = pomnik_bohateralvl;
	document.getElementById("zameklvl").innerHTML = zameklvl;
	document.getElementById("zameklvls").innerHTML = zameklvl;
	document.getElementById("targowiskolvl").innerHTML = targowiskolvl;
	document.getElementById("targowiskolvls").innerHTML = targowiskolvl;
	document.getElementById("kosztbudowyiloscdomowdrewnoD").innerHTML = kosztbudowyiloscdomowdrewno;
	document.getElementById("kosztbudowyiloscdomowkamienD").innerHTML = kosztbudowyiloscdomowkamien;
	document.getElementById("Osada").innerHTML = plikOsada;
	
};

function WysokaOsadaF()
{
	var plikWysokaOsada = "<img src=\"buildings/Hsettlement/hs1" + ".jpg\" />";
	document.getElementById("WysokaOsada").innerHTML = plikWysokaOsada;
	document.getElementById("magazynlvls").innerHTML = magazynlvl;
	document.getElementById("magazynlvl").innerHTML = magazynlvl;
	document.getElementById("kosciollvl").innerHTML = kosciollvl;
	document.getElementById("kosciollvls").innerHTML = kosciollvl;
	document.getElementById("laznielvl").innerHTML = laznielvl;
	document.getElementById("laznielvls").innerHTML = laznielvl;
	document.getElementById("magazynlvls").innerHTML = magazynlvl;
	document.getElementById("magazynlvl").innerHTML = magazynlvl;
	document.getElementById("kanalizacjelvl").innerHTML = kanalizacjelvl;
	document.getElementById("kanalizacjelvls").innerHTML = kanalizacjelvl;
	document.getElementById("palaclvl").innerHTML = palaclvl;
	document.getElementById("palaclvls").innerHTML = palaclvl;
	document.getElementById("kosztbudowymagazyndrewnoD").innerHTML = kosztbudowymagazyndrewno;
	document.getElementById("kosztbudowymagazynkamienD").innerHTML = kosztbudowymagazynkamien;
	document.getElementById("zbrojownialvls").innerHTML = zbrojownialvl;
	document.getElementById("zbrojownialvl").innerHTML = zbrojownialvl;
	
	
};


function LasF()
{
	if(chata_drwalalvl < 9)
	{
	var plikLas = "<img src=\"buildings/sawmill/sawmill" + chata_drwalalvl + ".jpg\" />";
	document.getElementById("Las").innerHTML = plikLas;
	}
	else plikLas = "<img src=\"buildings/sawmill/sawmill" + "8" + ".jpg\" />"
	document.getElementById("chata_drwalalvls").innerHTML = chata_drwalalvl;
	document.getElementById("chata_drwalalvl").innerHTML = chata_drwalalvl;
	document.getElementById("kosztbudowychata_drwaladrewnoD").innerHTML = kosztbudowychata_drwaladrewno;
	document.getElementById("kosztbudowychata_drwalakamienD").innerHTML = kosztbudowychata_drwalakamien;
};

function KamieniolomyF()
{
	if(kamieniolomlvl < 10)
	{
	var plikkamieniolom = "<img src=\"buildings/quarry/quarry" + kamieniolomlvl + ".jpg\" />";
	document.getElementById("Kamieniolomy").innerHTML = plikkamieniolom;
	}
	else plikkamieniolom = "<img src=\"buildings/quarry/quarry" + "9" + ".jpg\" />";
	document.getElementById("kamieniolomlvls").innerHTML = kamieniolomlvl;
	document.getElementById("kamieniolomlvl").innerHTML = kamieniolomlvl;
	kosztbudowykamieniolomdrewno = 50 + ( kamieniolomlvl * 50)
	kosztbudowykamieniolomkamien = 20 + ( kamieniolomlvl * 20)
	document.getElementById("kosztbudowykamieniolomdrewnoD").innerHTML = kosztbudowykamieniolomdrewno;
	document.getElementById("kosztbudowykamieniolomkamienD").innerHTML = kosztbudowykamieniolomkamien;
	
};

function FarmF()
{
	if(farmalvl < 11)
	{
	var plikfarma = "<img src=\"buildings/farm/farms" + farmalvl + ".jpg\" />";
	document.getElementById("Farmy").innerHTML = plikfarma;
	}
	else plikfarma = "<img src=\"buildings/farm/farms" + "10" + ".jpg\" />";
	document.getElementById("farmalvls").innerHTML = farmalvl;
	document.getElementById("farmalvl").innerHTML = farmalvl;
	document.getElementById("kosztbudowyfarmadrewnoD").innerHTML = kosztbudowyfarmadrewno;
	document.getElementById("kosztbudowyfarmakamienD").innerHTML = kosztbudowyfarmakamien;
	
};

function MotykaF()
{
	var plikmotyka = "<img src=\"research/motykaM" + motykalvl + ".jpg\" />";
	document.getElementById("motyka").innerHTML = plikmotyka;
	if(motykalvl==0)
	{ document.getElementById("motykainfo").innerHTML = "Odkryj Motykę";
	}
	else if(motykalvl==1)
	{ document.getElementById("motykainfo").innerHTML = "Motyka odkryta!";
	}

};


function FutraF()
{
	var plikfutra = "<img src=\"research/futraM" + futralvl + ".jpg\" />";
	document.getElementById("futra").innerHTML = plikfutra;
	if(futralvl==0)
	{ document.getElementById("futrainfo").innerHTML = "Odkryj Futra";
	}
	else if(futralvl==1)
	{ document.getElementById("futrainfo").innerHTML = "Futra odkryte!";
	}

};

function OciepleniedomowF()
{
	var plikociepleniedomow = "<img src=\"research/ocieplanieM" + ociepleniedomowlvl + ".jpg\" />";
	document.getElementById("ociepleniedomow").innerHTML = plikociepleniedomow;
	if(ociepleniedomowlvl==0)
	{ document.getElementById("ociepleniedomowinfo").innerHTML = "Odkryj Ocieplanie domów";
	}
	else if(ociepleniedomowlvl==1)
	{ document.getElementById("ociepleniedomowinfo").innerHTML = "Oocieplanie domów odkryte!";
	}

};

function KosaF()
{
	var plikkosa = "<img src=\"research/kosaM" + kosalvl + ".jpg\" />";
	document.getElementById("kosa").innerHTML = plikkosa;
	if(kosalvl==0)
	{ document.getElementById("kosainfo").innerHTML = "Odkryj Kosę";
	}
	else if(kosalvl==1)
	{ document.getElementById("kosainfo").innerHTML = "Kosa odkryta!";
	}

};

function DlutoF()
{
	var plikdluto = "<img src=\"research/dlutoM" + dlutolvl + ".jpg\" />";
	document.getElementById("dluto").innerHTML = plikdluto;
	if(dlutolvl==0)
	{ document.getElementById("dlutoinfo").innerHTML = "Odkryj Dłuto";
	}
	else if(dlutolvl==1)
	{ document.getElementById("dlutoinfo").innerHTML = "Dłuto odkryte!";
	}

};

function PilaF()
{
	var plikpila = "<img src=\"research/pilaM" + pilalvl + ".jpg\" />";
	document.getElementById("pila").innerHTML = plikpila;
	if(pilalvl==0)
	{ document.getElementById("pilainfo").innerHTML = "Odkryj Piłę";
	}
	else if(pilalvl==1)
	{ document.getElementById("pilainfo").innerHTML = "Piła odkryta!";
	}

};

function KilofF()
{
	var plikkilof = "<img src=\"research/kilofM" + kiloflvl + ".jpg\" />";
	document.getElementById("kilof").innerHTML = plikkilof;
	if(kiloflvl==0)
	{ document.getElementById("kilofinfo").innerHTML = "Odkryj Kilof";
	}
	else if(kiloflvl==1)
	{ document.getElementById("kilofinfo").innerHTML = "Kilof odkryty!";
	}

};

function SiekieraF()
{
	var pliksiekera = "<img src=\"research/siekieraM" + siekeralvl + ".jpg\" />";
	document.getElementById("siekera").innerHTML = pliksiekera;
	if(siekeralvl==0)
	{ document.getElementById("siekerainfo").innerHTML = "Odkryj Siekerę";
	}
	else if(siekeralvl==1)
	{ document.getElementById("siekerainfo").innerHTML = "Siekera odkryta!";
	}

};

function ProtekcjonalizmF()
{
	var plikprotekcjonalizm = "<img src=\"research/protekcojnalizmM" + protekcjonalizmlvl + ".jpg\" />";
	document.getElementById("protekcjonalizm").innerHTML = plikprotekcjonalizm;
	if(protekcjonalizmlvl==0)
	{ document.getElementById("protekcjonalizminfo").innerHTML = "Odkryj Protekcjonalizm";
	}
	else if(protekcjonalizmlvl==1)
	{ document.getElementById("protekcjonalizminfo").innerHTML = "Protekcjonalizm odkryty!";
	}

};

function MerkiantylizmF()
{
	var plikmerkiantylizm = "<img src=\"research/merkantylizmM" + merkiantylizmlvl + ".jpg\" />";
	document.getElementById("merkiantylizm").innerHTML = plikmerkiantylizm;
	if(merkiantylizmlvl==0)
	{ document.getElementById("merkiantylizminfo").innerHTML = "Odkryj Merkiantylizm";
	}
	else if(merkiantylizmlvl==1)
	{ document.getElementById("merkiantylizminfo").innerHTML = "Merkiantylizm odkryty!";
	}

};

function WolnyhandelF()
{
	var plikwolnyhandel = "<img src=\"research/wolnyhandelM" + wolnyhandellvl + ".jpg\" />";
	document.getElementById("wolnyhandel").innerHTML = plikwolnyhandel;
	if(wolnyhandellvl==0)
	{ document.getElementById("wolnyhandelinfo").innerHTML = "Odkryj Wolny handel";
	}
	else if(wolnyhandellvl==1)
	{ document.getElementById("wolnyhandelinfo").innerHTML = "Wolny handel odkryty!";
	}

};

function Research()
{
	WolnyhandelF();
	MerkiantylizmF();
	ProtekcjonalizmF();
	SiekieraF();
	KilofF();
	PilaF();
	DlutoF();
	KosaF();
	MotykaF();
	FutraF();
	OciepleniedomowF();
};

function SzkolaF()
{
	if(szkolalvl < 6)
	{
	var plikszkola = "<img src=\"buildings/school/szkola" + szkolalvl + ".jpg\" />";
	document.getElementById("szkola").innerHTML = plikszkola;
	}
	else plikszkola = "<img src=\"buildings/school/szkola" + "5" + ".jpg\" />";
	document.getElementById("szkolalvl").innerHTML = szkolalvl;
	document.getElementById("szkolalvls").innerHTML = szkolalvl;
	document.getElementById("kosztbudowyszkoladrewnoD").innerHTML = kosztbudowyszkoladrewno;
	document.getElementById("kosztbudowyszkolakamienD").innerHTML = kosztbudowyszkolakamien;
	document.getElementById("kosztbudowyszkolazlotoD").innerHTML = kosztbudowyszkolazloto;
};


function wyprawywojenneF()
{
	if(koszarylvl ==0)
	{plikwyprawywojenne = "<img src=\"wyprawywojenne0.jpg\" />";
	document.getElementById("wyprawywojenne").innerHTML = plikwyprawywojenne;}
	else
	plikwyprawywojenne = "<img src=\"wyprawywojenne1.jpg\" />";
	document.getElementById("wyprawywojenne").innerHTML = plikwyprawywojenne;
	wyprawawF();
	krucjataF();
	wyprawawF2();
	wyprawawF3();
	
};

function wyprawawF()
{
	if(koszarylvl==0)
		{var plikwyprawaW = "<img src=\"wyprawyW0.jpg\" />";
	document.getElementById("wyprawyW").innerHTML = plikwyprawaW;}
	else
	plikwyprawaW = "<img src=\"wyprawyW1.jpg\" />";
	document.getElementById("wyprawyW").innerHTML = plikwyprawaW;
};

function wyprawawF2()
{
	if(koszarylvl==0)
		{var plikwyprawaWo = "<img src=\"wyprawyWo0.jpg\" />";
	document.getElementById("wyprawyWo").innerHTML = plikwyprawaWo;}
	else
	plikwyprawaWo = "<img src=\"wyprawyWo1.jpg\" />";
	document.getElementById("wyprawyWo").innerHTML = plikwyprawaWo;
};

function wyprawawF3()
{
	if(koszarylvl==0)
		{var plikwyprawaWy = "<img src=\"wyprawyWy0.jpg\" />";
	document.getElementById("wyprawyWy").innerHTML = plikwyprawaWy;}
	else
	plikwyprawaWy = "<img src=\"wyprawyWy1.jpg\" />";
	document.getElementById("wyprawyWy").innerHTML = plikwyprawaWy;
};

var plikwypolebitwy = "<img src=\"battlefield/polebitwy0.jpg\" />";
function polebitwyF()
{
	if(koszarylvl==0)
		{plikwypolebitwy = "<img src=\"battlefield/polebitwy0.jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;}
	else
	plikwypolebitwy = "<img src=\"battlefield/polebitwy1.jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	bitwalvl = 1;
	bitwalvlOps = 1;
	bitwalvlYer = 1;
	bitwalvlKru = 1;
};

function krucjataF()
{
	if(koszarylvl==0 || kosciollvl == 0)
		{var plikkrucjata = "<img src=\"krucjata0.jpg\" />";
	document.getElementById("krucjata").innerHTML = plikkrucjata;}
	else
	plikkrucjata = "<img src=\"krucjata1.jpg\" />";
	document.getElementById("krucjata").innerHTML = plikkrucjata;
};

function koszaryF()
{
	if(koszarylvl < 4)
	{
	var plikkoszary = "<img src=\"buildings/barracks/koszary" + koszarylvl + ".jpg\" />";
	document.getElementById("koszary").innerHTML = plikkoszary;
	}
	else plikkoszary = "<img src=\"buildings/barracks/koszary" + "3" + ".jpg\" />";
	document.getElementById("koszarylvl").innerHTML = koszarylvl;
	document.getElementById("koszarylvls").innerHTML = koszarylvl;
	document.getElementById("kosztbudowykoszarydrewnoD").innerHTML = kosztbudowykoszarydrewno;
	document.getElementById("kosztbudowykoszarykamienD").innerHTML = kosztbudowykoszarykamien;
	document.getElementById("kosztbudowykoszaryzlotoD").innerHTML = kosztbudowykoszaryzloto;
	document.getElementById("tarczownicyD").innerHTML = tarczownicy;
	document.getElementById("miecznicyD").innerHTML = miecznicy;
	document.getElementById("konniD").innerHTML = konni;

	document.getElementById("silaarmiiD").innerHTML = silaarmii;
	wyprawywojenneF();
	polebitwyF();
	guildiaszpiegowF();
};

function shieldmanF()
{
	if(koszarylvl == 0)
	{
	var plikshieldman = "<img src=\"buildings/barracks/shieldmanM0.jpg\" />";
	document.getElementById("shieldmanD").innerHTML = plikshieldman;
	}
	else plikshieldman = "<img src=\"buildings/barracks/shieldmanM1.jpg\" />";
	document.getElementById("shieldmanD").innerHTML = plikshieldman;
};

function footmanF()
{
	if(koszarylvl < 2)
	{
	var pliksfootman = "<img src=\"buildings/barracks/footmanM0.jpg\" />";
	document.getElementById("footmanD").innerHTML = pliksfootman;
	}
	else pliksfootman = "<img src=\"buildings/barracks/footmanM1.jpg\" />";
	document.getElementById("footmanD").innerHTML = pliksfootman;
};

function cavalryF()
{
	if(koszarylvl < 3)
	{
	var plikcavalry = "<img src=\"buildings/barracks/cavalryM0.jpg\" />";
	document.getElementById("cavalryD").innerHTML = plikcavalry;
	}
	else plikcavalry = "<img src=\"buildings/barracks/cavalryM1.jpg\" />";
	document.getElementById("cavalryD").innerHTML = plikcavalry;
};

function TargF()
{
	var pliktarg = "<img src=\"buildings/targowisko" + targowiskolvl + ".jpg\" />";
	document.getElementById("targ").innerHTML = pliktarg;
	targdostepF();

};

function WiaraF()
{
	var plikwiara = "<img src=\"buildings/wiara" + kosciollvl + ".jpg\" />";
	document.getElementById("wiara").innerHTML = plikwiara;
	wiaradostepF();

};

function OberzaF()
{
	var plikoberza = "<img src=\"buildings/oberza" + oberzalvl + ".jpg\" />";
	document.getElementById("oberza").innerHTML = plikoberza;
	oberzadostepF();

};

function guildiaszpiegowF()
{
	if(koszarylvl==0)
		{var plikguildiaszpiegow = "<img src=\"guildspy0.jpg\" />";
	document.getElementById("plikguildiaszpiegowD").innerHTML = plikguildiaszpiegow;}
	else
	plikguildiaszpiegow = "<img src=\"guildspy1.jpg\" />";
	document.getElementById("plikguildiaszpiegowD").innerHTML = plikguildiaszpiegow;
};

function mapy()
{
	mapaosadyF();
	WysokaOsadaF();
	LasF();
	KamieniolomyF();
	FarmF();
	Research();
	
	SzkolaF();
	TargF();
	WiaraF();
	OberzaF();
	koszaryF();
	shieldmanF();
	footmanF();
	cavalryF();
	wyprawywojenneF();

	relacjenastart();
	
	
};





//obliczanie surowcow


function displaypopulation()
{
	document.getElementById("orsyanieS").innerHTML = orsyanie;

	document.getElementById("riotsS").innerHTML = riots;
	document.getElementById("hope1").innerHTML = hope;
	
}

function resources()
{
	document.getElementById("drewnoS").innerHTML = drewno;	
	document.getElementById("kamienS").innerHTML = kamien;
	document.getElementById("zbozeS").innerHTML = zboze;
	document.getElementById("zlotoS").innerHTML = zloto;
		document.getElementById("maxsurS").innerHTML = maxsurowce1;
	document.getElementById("maxsur1S").innerHTML = maxsurowce1;
	document.getElementById("maxsur2S").innerHTML = maxsurowce1;
	
	document.getElementById("maxorsyanS").innerHTML = maxorsyan;
	document.getElementById("kosztszpiegaD").innerHTML = kosztszpiega;
	document.getElementById("kosztutrzymaniaszpiegaD").innerHTML = kosztutrzymaniaszpiega;
	document.getElementById("iloscszpiegowD").innerHTML = iloscszpiegow + " / 10";
	document.getElementById("iloscszpiegowD2").innerHTML = iloscszpiegow;
	document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100"; 
	document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
	
	
}

function gold()
{
	if(zloto < 0)
	{
		zloto = 0;
	};
document.getElementById("zlotoS").innerHTML = zloto;
}

var s = drewno;

var interval1 = setInterval( increment1, 1000);
var interval1sec = setInterval( incrementfunctions, 1000);
var interval2sec = setInterval( incrementfunctions2sec, 2000);
var interval3sec = setInterval( incrementfunctions3sec, 3000);
var interval5sec = setInterval( incrementfunctions5sec, 5000);

var interval5secspy = setInterval (incrementfunctions5secspy,5100);
var interval30sec = setInterval (incrementfunctions30sec,30000);

function incrementfunctions30sec()
{
	normowanierelacjidyplomatycznych();
	sprawdzpoziomrelacjiMaurykowie();
	sprawdzpoziomrelacjiPlemowie();
	sprawdzpoziomrelacjiNordyskowie();
	sprawdzpoziomrelacjiMerkowie();
	sprawdzpoziomrelacjiOpsydianie();
	sprawdzpoziomrelacjiYerisi();

}

function incrementfunctions()
{
//aktualizacja poziomu budynkow
	
	displaypopulation();
	populacja_drwali();
	populacja_fjermerow();
	populacja_kamieniarzy();
	populacja_bezrobotnych();
	gold();
	wybudowanyPomnik_bohatera();
	
	sprawdzdrewno();
	sprawdzkamien();
	sprawdzzboze();
	spadekwiary();

	

};

function incrementfunctions2sec()
{
	
	glod_drwali();
	glod_kamieniarzy();
	glod_fjermierow();
	glod();
	
	
};

function incrementfunctions3sec()
{
	wzrostnadzieji();
	wzrostriots();	//dodane 16.08 na koniec prac
	oddzialywanieporroku(); //dodane 18.08
	wybudowanyKosciol(); 
	porarokuBonusyF();
	f_color();
	populacjeplemionrecalculate();
	
	
};





var s5 = 0;

function incrementfunctions5sec()
{
	
naliczaniezlotazhandlu();
wybudowanyzamek();


if( s5 < uczeni * 4 )
{
s5 = Math.round((s5 + uczeni * 0.04 )*100)/100;
}
else if
(s5 >= uczeni * 4)
{
	s5 = uczeni * 4;
	
}
document.getElementById("naukas").innerHTML = s5;

zloto =  Math.round((zloto - (uczeni * 0.02) + wydarzeniezloto)*100)/100;


if(zloto <=0)
{
	uczeni = uczeni - 1;
	zloto = 0;
}

//if(zloto > uczeni * 0.02 && szkolalvl * 5 > uczeni && szkolalvl > 0 && uczeniodklikani >= szkolalvl)
//{
//	uczeni = uczeni + 1;
//	zloto =  Math.round((zloto - (uczeni * 0.02) + wydarzeniezloto)*100)/100;
//};


};

function incrementfunctions5secspy()
{
	
	if(zloto<=0 && iloscszpiegow>0)
{
	iloscszpiegow = iloscszpiegow -1;
}
	else if( punktyszpiegostwa < iloscszpiegow * 10)
{
	punktyszpiegostwa = Math.round((punktyszpiegostwa + iloscszpiegow * 0.3 )*100)/100;
	document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100";
	document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa
}

	else if(punktyszpiegostwa >= iloscszpiegow * 10)
{
	punktyszpiegostwa = iloscszpiegow * 10
	document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100";
	document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa
}

zloto = Math.round((zloto - kosztutrzymaniaszpiega)*100)/100;
};


var maxorsyan = iloscdomow * (15 + (kanalizacjelvl * 2))



//poziom magazynu a dostepne surowce

var maxsurowce1 = 260 + (magazynlvl * 50);


function maxsurowce(sprawdzmagazyn)
{
	maxsurowce1 = 260 + (magazynlvl * 50);
	document.getElementById("maxsurS").innerHTML = maxsurowce1;
	document.getElementById("maxsur1S").innerHTML = maxsurowce1;
	document.getElementById("maxsur2S").innerHTML = maxsurowce1;
};

function sprawdzdrewno(maxsurowce,increment1,sprawdzpomnik,populacja_drwali,oddzialywanieporroku)

{
var stopdrewno = false;
	{
	if(s === maxsurowce1 || s > maxsurowce1)
	{
			stopdrewno = true;
    }
	}
	
	if (stopdrewno == true)
	{
	s = maxsurowce1 - (1 * (drwale / 5) + (pomnik_bohateralvl * pomnikreligia) + oddporyrokudrewno);
	}

else 
{
	s = s;

}	
};

function sprawdzkamien(maxsurowce,increment2,sprawdzpomnik,populacja_kamieniarzy,oddzialywanieporroku)

{
var stopkamien = false;
	{
	if(s2 === maxsurowce1 || s2 > maxsurowce1)
	{
			stopkamien = true;
    }
	}
	
	if (stopkamien == true)
	{
	s2 = maxsurowce1 - (1 * (kamieniarze / 5) + (pomnik_bohateralvl * pomnikreligia) + oddporyrokukamien);
	}

else 
{
	s2 = s2;

}	
};

function sprawdzzboze(maxsurowce,increment3,sprawdzpomnik,populacja_fjermerow,oddzialywanieporroku)

{
var stopzboze = false;
	{
	if(s3 === maxsurowce1 || s3 > maxsurowce1)
	{
			stopzboze = true;
    }
	}
	
	if (stopzboze == true)
	{
	s3 = maxsurowce1 - (1 * (fjermierzy / 5) + (pomnik_bohateralvl * pomnikreligia) + oddporyrokuzboze );
	}

else 
{
	s3 = s3;

}	
};


// surowce

function increment1(populacja_drwali,sprawdzpomnik,oddzialywanieporroku){
	if(s>0)
	{
    s = Math.round((s + 1 * (drwale / 5) + oddporyrokudrewno + siekieraV + pilaV +  wydarzeniadrewno +  (pomnik_bohateralvl * pomnikreligia)+ radogoszczedrewno)*100)/100 ;
	document.getElementById("drewnoS").innerHTML =   s;
	}
	else
	{ 
s=0;
s = Math.round((s + 1 * (drwale / 5) - oddporyrokudrewno +  (pomnik_bohateralvl * pomnikreligia)+ radogoszczedrewno)*100)/100 ;
	
	document.getElementById("drewnoS").innerHTML =   s;}
};




var s2 = kamien;

var interval2 = setInterval( increment2, 2000);



function increment2(populacja_kamieniarzy,sprawdzpomnik, oddzialywanieporroku){
	if(s2>0)
	{
    s2 = Math.round((s2 + 1 * (kamieniarze / 5) + oddporyrokukamien + wydarzeniekamien + dlutoV + kilofV + (pomnik_bohateralvl * pomnikreligia)+ radogoszczekamien)*100)/100 ;
	document.getElementById("kamienS").innerHTML =   s2;
	}
	else if (s2<=0)
	{
	s2 = 0;
	s2 = Math.round((s2 + 1 * (kamieniarze / 5) - oddporyrokukamien + (pomnik_bohateralvl * pomnikreligia)+ radogoszczekamien)*100)/100 ;
	document.getElementById("kamienS").innerHTML =   s2;}
};

var s3 = zboze;

var interval3 = setInterval( increment3, 3000);

function increment3(populacja_fjermerow,pupulacja_orsyan,oddzialywanieporroku){
	
    s3 = Math.round((s3 + 1 * (fjermierzy / 5) + oddporyrokuzboze + wydarzeniazboze + nemizzboze + motykaV + kosaV + ((pomnik_bohateralvl * pomnikreligia) * 0.5 ) - (orsyanie * 0.09))*100)/100;
	if (s3<=0) s3=0;
	
	document.getElementById("zbozeS").innerHTML =   s3;
	
	
};

//mechanika nadzieji

function wzrostnadzieji(increment3,pupulacja_orsyan,poporspoprawa,oddzialywanieporroku,sprawdzoberza)  //dodane 16.08 na koniec prac
{
	hope >= 0;
	if(s3 > 160 && orsyanie < maxorsyan)
	{
	hope = Math.round((hope + (0.01 * zerowanie ))*100)/100;
	};
	if(s3 < 10)
	{ hope = Math.round((hope - (0.01 * zerowanie))*100)/100;
	};
	hope = Math.round((hope + oddporyrokuhope)*100)/100

	document.getElementById("hope1").innerHTML = hope;
	wygrana();
}


//////mechanika wk**rwienia
function wzrostriots(increment3,pupulacja_orsyan,poporspoprawa,sprawdzoberza,sprawdzlaznie)
{
	riots = riots + oberzariots + laznieriots;
	riots >= 0;
if(zboze < 10)
	{ riots = Math.round((riots + (0.01 * zerowanie))*100)/100;
	};	
	if(zboze > 140 && orsyanie < maxorsyan)
	{
	riots = Math.round((riots - (0.01 * zerowanie ))*100)/100;
	};
};

//////wybudowany zamek
function wybudowanyzamek(sprawdzzamek)
{
	
	hope = Math.round ((hope + ((zameklvl) * 0.05 ))*100)/100;
	zloto = Math.round ((zloto + ((zameklvl) * 0.05 ))*100)/100;

	document.getElementById("hope1").innerHTML = hope;
};



// mechanika populacji
var interval4 = setInterval( increment4, 5000);

var s4 = 1

function increment4(){
	s4 = s4 + 1;
	pupulacja_orsyan();
	
};

var zbozeludzie = 0

function glod(increment3,pupulacja_orsyan)
{
	
if(s3>=orsyanie)
	{ zbozeludzie = zbozeludzie; 
	}
	
else if(s3 <= orsyanie && s3 >= orsyanie * 0.5)
	{zbozeludzie = zbozeludzie - 1;
	}
	
else if(s3 < orsyanie * 0.5 && s3 >=  orsyanie * 0.2)
	{zbozeludzie =  zbozeludzie - 2;
	}
	
else if(s3 <=  orsyanie * 0.2 && s3 >= orsyanie * 0.1)
	{zbozeludzie = zbozeludzie - 2.5;
	}
	
else if(s3 <= 0 )
	{zbozeludzie = zbozeludzie - 4;
	}
	
	

	
	
	
};




	var przeludnienie = 0
	var dynamikatorsjan;
	var rozbieznosci;
	

function pupulacja_orsyan(increment4,increment3,glod,niewolnicy1,sprawdzdom,poporspoprawa,egzekucjaniewolnikow)
{
	

	orsyanie = Math.round((mieszkancydomu * iloscdomow * zerowanie ) + (s4 * zerowanie) + egzekucjaniewolnikowV + napascwyznawcowzoltegoptaorsyanie + smiercwkamieniolomie + zbozeludzie + niewolnicy + przeludnienie + nemizludzie) ;
	setTimeout(function tt(){dynamikatorsjan = Math.round((mieszkancydomu * iloscdomow * zerowanie ) + (s4 * zerowanie) + egzekucjaniewolnikowV + smiercwkamieniolomie + napascwyznawcowzoltegoptaorsyanie + zbozeludzie + niewolnicy + przeludnienie + nemizludzie);}
	,1000)
	rozbieznosc = orsyanie - dynamikatorsjan;

	document.getElementById("orsyanieS").innerHTML =  orsyanie;
	przeludnienie7();
	przegrana();
	bezpiecznezbozeF();
	
	niewolnicycheckF();
};

var zerowanie = 1;

function poporspoprawa (pupulacja_orsyan)
{
	
	if ( orsyanie <= 0 ) 
	{ 
orsyanie = 0;
zerowanie = 0;
zbozeludzie = 0;
przeludnienie = 0;
niewolnicy = 0;
};


};

function przeludnienie7(sprawdzdom,pupulacja_orsyan)
{
	if (orsyanie > maxorsyan) {przeludnienie = przeludnienie -5;

	document.getElementById("przeludnienieS").innerHTML =  "Przeludnienie!!! Orsyanie umieraja w meczarniach!! "  + " Wybuduj wiecej chałup!";
document.getElementById("przeludnienieSi").innerHTML =  "Przeludnienie!!! Orsyanie umieraja w meczarniach!! "  + " Wybuduj wiecej chałup!";

setTimeout (function pupulacja_orsyan() { 
$("#przeludnienieS").fadeOut(3000); }, 4000)
$("#przeludnienieS").fadeIn(500);
setTimeout (function pupulacja_orsyan() { 
$("#przeludnienieSi").fadeOut(3000); }, 4000)
$("#przeludnienieSi").fadeIn(500);
		}
		else if (orsyanie <= maxorsyan && orsyanie > 0)
		{przeludnienie = przeludnienie
		
		document.getElementById("przeludnienie2S").innerHTML =  "Ludzie są zadowoleni z zapewnienia im legowisk w chatach";
document.getElementById("przeludnienie2Si").innerHTML =  "Ludzie są zadowoleni z zapewnienia im legowisk w chatach";

setTimeout (function pupulacja_orsyan() { 
$("#przeludnienie2S").fadeOut(3000); }, 12000)
$("#przeludnienie2S").fadeIn(100);
setTimeout (function pupulacja_orsyan() { 
$("#przeludnienie2Si").fadeOut(3000); }, 12000)
$("#przeludnienie2Si").fadeIn(100);
		}
		else if (orsyanie <= 0  )
		{przeludnienie = 0
		
		document.getElementById("przeludnienie3S").innerHTML =  "Ludzie wymarli, Żółty ptak zwyciężył, niech lud Orsyan bedzie przeklety!";
		document.getElementById("przeludnienie3Si").innerHTML =  "Ludzie wymarli, Żółty ptak zwyciężył, niech lud Orsyan bedzie przeklety!";
		}
	
};


var interval5 = setInterval( poporspoprawa, 100);
//przeludnienie




//drwale

var glod_drwali1 = 0
// 16.08 dodane w ifie dla drwali,kamieniarz i fjermerow w celu lepszego obrazowania ubywania ludzi: || orsyanie < kamieniarze + drwale + fjermierzy + bezrobotni
function glod_drwali(populacja_bezrobotnych,populacja_drwali,populacja_kamieniarzy,pupulacja_orsyan,populacja_fjermerow)
{
	if (bezrobotni < 1 || orsyanie < kamieniarze + drwale + fjermierzy + bezrobotni ) glod_drwali1 = glod_drwali1 - 1;
	else if (chata_drwalalvl * 5 > drwale) glod_drwali1 = glod_drwali1 + 1;
	else glod_drwali1 = 0;
	//document.getElementById("glod_drwali1").innerHTML =  glod_drwali1;
};

function populacja_drwali(glod_drwali)
{ 
 drwale = chata_drwalalvl * 5 + glod_drwali1 - zwolnienidrwale;
 if (drwale <= 0) drwale = 0;

 document.getElementById("drwaleS").innerHTML = drwale;
 
};

// kamieniarze
var glod_kamieniarzy1 = 0

function glod_kamieniarzy(populacja_drwali,populacja_kamieniarzy,pupulacja_orsyan,populacja_fjermerow, populacja_bezrobotnych)
{
	if (drwale < 1 || orsyanie <= 0 || orsyanie < kamieniarze + drwale + fjermierzy + bezrobotni ) glod_kamieniarzy1 = glod_kamieniarzy1 - 1;
	else if (kamieniolomlvl * 5 > kamieniarze ) glod_kamieniarzy1 = glod_kamieniarzy1 + 1;
	else glod_kamieniarzy1 = 0;
	//document.getElementById("glod_kamieniarzy1").innerHTML =  glod_kamieniarzy1;
};

function populacja_kamieniarzy()
{ 
 kamieniarze = kamieniolomlvl * 5 + glod_kamieniarzy1 - zwolnienikamieniarze;
 if (kamieniarze <= 0) kamieniarze = 0;

 document.getElementById("kamieniarzeS").innerHTML = kamieniarze;
};

// fjermierzy
var glod_fjermierow1 = 0

function glod_fjermierow(populacja_kamieniarzy,populacja_fjermerow,pupulacja_orsyan, populacja_drwali, populacja_bezrobotnych)
{
	if (kamieniarze < 1 || orsyanie <= 0 || orsyanie < kamieniarze + drwale + fjermierzy + bezrobotni) glod_fjermierow1 = glod_fjermierow1 - 1;
	else if (farmalvl * 5 > fjermierzy) glod_fjermierow1 = glod_fjermierow1 + 1;
	else glod_fjermierow1 = 0;
	//document.getElementById("glod_kamieniarzy1").innerHTML =  glod_kamieniarzy1;
};

function populacja_fjermerow(zwolnijfjermerow)
{
 	
 fjermierzy = farmalvl * 5 + glod_fjermierow1 - zwolnienifjermierzy;
 
 if (fjermierzy <= 0) fjermierzy = 0;
 
  document.getElementById("fjermierzyS").innerHTML = fjermierzy;
  populacja_uczonych();
};

var glod_uczonych1 = 0
// 26.08
//function glod_uczonych()
//{
//	if (bezrobotni < 1 || orsyanie < kamieniarze + drwale + fjermierzy + bezrobotni + uczeni )  glod_uczonych1 = glod_uczonych1 - 1;
//	else if (szkolalvl * 5 > uczeni) glod_uczonych1 = glod_uczonych1 + 1;
//	else glod_uczonych1 = 0;
	//document.getElementById("glod_drwali1").innerHTML =  glod_drwali1;
//};

var wyszkoleniuczeni = 0;

function populacja_uczonych()
{ 
 uczeni = uczeni + wyszkoleniuczeni + glod_uczonych1;
 if (uczeni <= 0) uczeni = 0;

 document.getElementById("uczeniS").innerHTML = uczeni;
 document.getElementById("kupcyS").innerHTML = kupcy;
  document.getElementById("armiaS").innerHTML = armia;
 populacja_kupcow();

};

//bezrobotni
function populacja_bezrobotnych()
{
	bezrobotni = orsyanie - drwale - kamieniarze - fjermierzy - uczeni - kupcy - armia;
	if (bezrobotni <= 0) bezrobotni = 0;

	document.getElementById("bezrobotniS").innerHTML = bezrobotni;
	
};


//
//Budowanie

	function sprawdzmagazyn(increment1,increment2,populacja_bezrobotnych)
{
	
if (s >= kosztbudowymagazyndrewno && s2 >= kosztbudowymagazynkamien && bezrobotni >= 10 )
{s = s - kosztbudowymagazyndrewno ;
s2 = s2 - kosztbudowymagazynkamien;
magazynlvl = magazynlvl + 1;
maxsurowce();


	document.getElementById("budmagS").innerHTML = "Magazyn wybudowany!";
	kosztbudowymagazyndrewno = 250 + ( magazynlvl * 50)
	kosztbudowymagazynkamien = 150 + ( magazynlvl * 50)
	WysokaOsadaF();


setTimeout (function sprawdzmagazyn() { 
$("#budmagS").fadeOut(3000); }, 4000)
$("#budmagS").fadeIn(500);
}
	else if 
(s < kosztbudowymagazyndrewno || s2 < kosztbudowymagazynkamien )
{
document.getElementById("budmagS").innerHTML = "Masz za malo surowcow na Magazyn!";


setTimeout (function sprawdzmagazyn() { 
$("#budmagS").fadeOut(3000); }, 4000)
$("#budmagS").fadeIn(500);
}
else 
{
document.getElementById("budmagS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac magazyn!";	


setTimeout (function sprawdzmagazyn() { 
$("#budmagS").fadeOut(3000);}, 4000)
$("#budmagS").fadeIn(500);
}
}


	function sprawdzzamek(increment1,increment2,populacja_bezrobotnych)
{
	
if (s >= 100 && s2 >= 500 && bezrobotni >= 50 && zameklvl < 1 )
{s = s - 100 ;
s2 = s2 - 500;
zameklvl = zameklvl + 1;
	kupcy = kupcy + 1;
	document.getElementById("budzamS").innerHTML = "Zamek wybudowany!";
	mapaosadyF();


setTimeout (function sprawdzzamek() { 
$("#budzamS").fadeOut(3000); }, 4000)
$("#budzamS").fadeIn(500);
}

else if 
(zameklvl > 0 )
{
document.getElementById("budzamS").innerHTML = "W Twojej osadzie juz jest Zamek!";	


setTimeout (function sprawdzzamek() { 
$("#budzamS").fadeOut(3000); }, 4000)
$("#budzamS").fadeIn(500);
}

else if 
(s < 100 || s2 < 500 )
{
document.getElementById("budzamS").innerHTML = "Masz za malo surowcow na Zamek!";	

setTimeout (function sprawdzzamek() { 
$("#budzamS").fadeOut(3000); }, 4000)
$("#budzamS").fadeIn(500);
}



	else 
	{
document.getElementById("budzamS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Zamek!";

setTimeout (function sprawdzzamek() { 
$("#budzamS").fadeOut(3000); }, 4000)
$("#budzamS").fadeIn(500);
	}
}

//zbrojownia
function sprawdzzbrojownia()
{
	
if (s >= 300 && s2 >= 200 && bezrobotni >= 15)
{s = s - 300 ;
s2 = s2 - 200;
hope = hope + 1;
zbrojownialvl = zbrojownialvl + 1;
	
	document.getElementById("budzbroS").innerHTML = "Zbrojownia wybudowana!";
	WysokaOsadaF();


setTimeout (function() { 
$("#budzbroS").fadeOut(3000); }, 4000)
$("#budzbroS").fadeIn(500);
}

else if 
(zbrojownialvl > 0 )
{
document.getElementById("budzbroS").innerHTML = "W Twojej osadzie juz jest Zbrojownia!";	


setTimeout (function() { 
$("#budzbroS").fadeOut(3000); }, 4000)
$("#budmagS").fadeIn(500);
}

else if 
(s < 300 || s2 < 200 )
{
document.getElementById("budzbroS").innerHTML = "Masz za malo surowcow na Zbrojownie!";	

setTimeout (function() { 
$("#budzbroS").fadeOut(3000); }, 4000)
$("#budzbroS").fadeIn(500);
}



	else 
	{
document.getElementById("budzbroS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Zbrojownie!";

setTimeout (function() { 
$("#budzbroS").fadeOut(3000); }, 4000)
$("#budzbroS").fadeIn(500);
	}
}


//palac
function sprawdzpalac(increment1,increment2,populacja_bezrobotnych)
{
	
	if (s >= 600 && s2 >= 600 && bezrobotni >= 40 && palaclvl < 1 )
	{s = s - 600 ;
	s2 = s2 - 600;
	palaclvl = palaclvl + 1;
	kupcy = kupcy + 1;
	WysokaOsadaF();
	document.getElementById("budpalS").innerHTML = "Pałac wybudowany!";


setTimeout (function sprawdzpalac() { 
$("#budpalS").fadeOut(3000); }, 4000)
$("#budpalS").fadeIn(500);
}

else if 
(palaclvl > 0 )
{
document.getElementById("budpalS").innerHTML = "W Twojej osadzie juz jest Pałac!";	


setTimeout (function sprawdzpalac() { 
$("#budpalS").fadeOut(3000); }, 4000)
$("#budpalS").fadeIn(500);
}

else if 
(s < 600 || s2 < 600 )
{
document.getElementById("budpalS").innerHTML = "Masz za malo surowcow na Pałac!";	

setTimeout (function sprawdzpalac() { 
$("#budpalS").fadeOut(3000); }, 4000)
$("#budpalS").fadeIn(500);
}



	else 
	{
document.getElementById("budpalS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Pałac!";

setTimeout (function sprawdzpalac() { 
$("#budpalS").fadeOut(3000); }, 4000)
$("#budpalS").fadeIn(500);
	}
}

	function sprawdzpomnik(increment1,increment2,populacja_bezrobotnych)
{
	
if (s >= 1000 && s2 >= 1000 && bezrobotni >= 70 && pomnik_bohateralvl < 1  )
{s = s - 1000 ;
s2 = s2 - 1000;
pomnik_bohateralvl = pomnik_bohateralvl + 1;
	
	document.getElementById("budpomS").innerHTML = "Pomnik Bohatera wybudowany!";
	mapaosadyF();

setTimeout (function sprawdzpomnik() { 
$("#budpomS").fadeOut(3000); }, 4000)
$("#budpomS").fadeIn(500);
}

else if 
(pomnik_bohateralvl > 0 )
{
document.getElementById("budpomS").innerHTML = "W Twojej osadzie juz jest Pomnik Bohatera!";	

setTimeout (function sprawdzpomnik() { 
$("#budpomS").fadeOut(3000); }, 4000)
$("#budpomS").fadeIn(500);
}

else if 
(s < 1000 || s2 < 1000 )
{
document.getElementById("budpomS").innerHTML = "Masz za malo surowcow na Pomnik Bohatera!";	

setTimeout (function sprawdzpomnik() { 
$("#budpomS").fadeOut(3000); }, 4000)
$("#budpomS").fadeIn(500);
}

	else 
	{
	document.getElementById("budpomS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Pomnik Bohatera!";	


setTimeout (function sprawdzpomnik() { 
$("#budpomS").fadeOut(3000);myVideo.play(); }, 4000)
$("#budpomS").fadeIn(500);
	}
}

	function sprawdzdrwala(increment1,populacja_bezrobotnych)
{
	
if (s >= kosztbudowychata_drwaladrewno && s2 >= kosztbudowychata_drwalakamien && bezrobotni >= 5) 
{s = s - kosztbudowychata_drwaladrewno;
s2 = s2 - kosztbudowychata_drwalakamien;
chata_drwalalvl = chata_drwalalvl + 1;
	
	document.getElementById("buddrwS").innerHTML = "Chata Drwala wybudowana!";
	 kosztbudowychata_drwaladrewno = 50 + ( chata_drwalalvl * 50);
	 kosztbudowychata_drwalakamien = 20 + ( chata_drwalalvl * 20);
	 LasF();



setTimeout (function sprawdzdrwala() { 
$("#buddrwS").fadeOut(3000); }, 4000)
$("#buddrwS").fadeIn(500);
}

else if 
(s < kosztbudowychata_drwaladrewno || s2 < kosztbudowychata_drwalakamien  )
{
document.getElementById("buddrwS").innerHTML = "Masz za malo surowcow na Chate Drwala!";


setTimeout (function sprawdzdrwala() { 
$("#buddrwS").fadeOut(3000); }, 4000)
$("#buddrwS").fadeIn(500);
}

	else 
	{
document.getElementById("buddrwS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Chate drwala!";	


setTimeout (function sprawdzdrwala() { 
$("#buddrwS").fadeOut(3000);myVideo.play(); }, 4000)
$("#buddrwS").fadeIn(500);
	}
}
	
	function sprawdzkamieniolom(increment1,populacja_bezrobotnych)
{
	
if (s >= kosztbudowykamieniolomdrewno && s2 >= kosztbudowykamieniolomkamien && bezrobotni >= 5) 
{s = s - kosztbudowykamieniolomdrewno;
s2 = s2 - kosztbudowykamieniolomkamien;
kamieniolomlvl = kamieniolomlvl + 1;
	
	document.getElementById("budkamS").innerHTML = "Kamieniolom wybudowany!";
	
KamieniolomyF();

setTimeout (function sprawdzkamieniolom() { 
$("#budkamS").fadeOut(3000); }, 4000)
$("#budkamS").fadeIn(500);
}

else if 
(s < kosztbudowykamieniolomdrewno || s2 < kosztbudowykamieniolomkamien )
{
document.getElementById("budkamS").innerHTML = "Masz za malo surowcow na Kamieniolom!";	


	setTimeout (function sprawdzkamieniolom() { 
$("#budkamS").fadeOut(3000); }, 4000)
$("#budkamS").fadeIn(500);
}

	else 
	document.getElementById("budkamS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Kamieniolom!";	


setTimeout (function sprawdzkamieniolom() { 
$("#budkamS").fadeOut(3000); }, 4000)
$("#budkamS").fadeIn(500);
}

function sprawdzfarma(increment1,populacja_bezrobotnych)
{
	
if (s >= kosztbudowyfarmadrewno && s2 >= kosztbudowyfarmakamien && bezrobotni >= 5) 
{s = s - kosztbudowyfarmadrewno;
s2 = s2 - kosztbudowyfarmakamien;

farmalvl = farmalvl + 1;
	
	document.getElementById("budfarS").innerHTML = "Farma wybudowana!";
	kosztbudowyfarmadrewno = 50 + ( farmalvl * 30)
	kosztbudowyfarmakamien = 20 + ( farmalvl * 10)
	FarmF();
	
	
setTimeout (function sprawdzfarma() { 
$("#budfarS").fadeOut(3000); }, 4000)
$("#budfarS").fadeIn(500);
}

else if 
(s < kosztbudowyfarmadrewno || s2 < kosztbudowyfarmakamien  )
{
document.getElementById("budfarS").innerHTML = "Masz za malo surowcow na Farmę!";	


setTimeout (function sprawdzfarma() { 
$("#budfarS").fadeOut(3000); }, 4000)
$("#budfarS").fadeIn(500);
}

	else 
	document.getElementById("budfarS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Farme!";	
	

setTimeout (function sprawdzfarma() { 
$("#budfarS").fadeOut(3000); }, 4000)
$("#budfarS").fadeIn(500);
};

var motykaV = 0;
var kosaV = 0;
var dlutoV = 0;
var kilofV = 0;
var pilaV = 0;
var siekieraV = 0;

var merkantylizmV = 0;
var protekcjonalizmV = 0;
var wolnyhandelV = 0;

function sprawdzmotyka(increment1,populacja_bezrobotnych)
{
	
if (s >= 200 && zloto >= 50 && s5 >= 35 && motykalvl < 1) 
{s = s - 200;
zloto = Math.round(( zloto - 50 )*100)/100 ;
motykalvl = motykalvl + 1;
s5 = s5 - 35;
document.getElementById("naukas").innerHTML = s5;
motykaV = 0.1 * farmalvl;
	MotykaF();
	document.getElementById("budmotS").innerHTML = "Uczeni odkryli motykę! Czy już nigdy nie bedziemy głodować ?!";


setTimeout (function sprawdzmotyka() { 
$("#budmotS").fadeOut(3000); }, 4000)
$("#budmotS").fadeIn(500);
}

else if 
	(motykalvl>0 )
	{
	document.getElementById("budmotS").innerHTML = "Ekhem... odkrliśmy już motykę...!";	


	setTimeout (function() { 
	$("#budmotS").fadeOut(3000); }, 4000)
	$("#budmotS").fadeIn(500);
	}

else if
(szkolalvl < 1 )
{
document.getElementById("budmotS").innerHTML = "Najpierw wybuduj szkołę!";	


setTimeout (function sprawdzmotyka() { 
$("#budmotS").fadeOut(3000); }, 4000)
$("#budmotS").fadeIn(500);
}

else if 
(s < 200 || zloto < 50 )
{
document.getElementById("budmotS").innerHTML = "Masz za malo surowcow do odkrycia Motyki!";	


setTimeout (function sprawdzmotyka() { 
$("#budmotS").fadeOut(3000); }, 4000)
$("#budmotS").fadeIn(500);
}

	else 
	document.getElementById("budmotS").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest Motyka!";	
	

setTimeout (function sprawdzmotyka() { 
$("#budmotS").fadeOut(3000); }, 4000)
$("#budmotS").fadeIn(500);
};

function sprawdzfutra()
{
	
if (s >= 250 && zloto >= 75 && s5 >= 75 && futralvl < 1) 
{s = s - 250;
zloto = Math.round(( zloto - 75 )*100)/100 ;
futralvl = futralvl + 1;
s5 = s5 - 75;
document.getElementById("naukas").innerHTML = s5;
futraV = 0.2;
	FutraF();
	document.getElementById("budfutra").innerHTML = "Uczeni odkryli Ciepłą odzież! Czy Zimy nie będą takie cięzkie jak zawsze?!";


setTimeout (function sprawdzmotyka() { 
$("#budfutra").fadeOut(3000); }, 4000)
$("#budfutra").fadeIn(500);
}

else if 
	(futralvl>0 )
	{
	document.getElementById("budfutra").innerHTML = "Ekhem... Mamy już ciepłą odzież...!";	


	setTimeout (function() { 
	$("#budfutra").fadeOut(3000); }, 4000)
	$("#budfutra").fadeIn(500);
	}

else if
(szkolalvl < 1 )
{
document.getElementById("budfutra").innerHTML = "Najpierw wybuduj szkołę!";	


setTimeout (function () { 
$("#budfutra").fadeOut(3000); }, 4000)
$("#budfutra").fadeIn(500);
}

else if 
(s < 250 || zloto < 75 )
{
document.getElementById("budfutra").innerHTML = "Masz za malo surowcow do odkrycia Ciepłej odzieży!";	


setTimeout (function () { 
$("#budfutra").fadeOut(3000); }, 4000)
$("#budfutra").fadeIn(500);
}

	else 
	document.getElementById("budmotS").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest Ciepła odzież!";	
	

setTimeout (function () { 
$("#budfutra").fadeOut(3000); }, 4000)
$("#budfutra").fadeIn(500);
};

function sprawdzociepleniedomow()
{
	
if (s >= 350 && zloto >= 100 && s5 >= 95 && ociepleniedomowlvl < 1) 
{s = s - 350;
zloto = Math.round(( zloto - 100 )*100)/100 ;
ociepleniedomowlvl = ociepleniedomowlvl + 1;
s5 = s5 - 95;
document.getElementById("naukas").innerHTML = s5;
ocieplaniedomowV = 0.2;
	OciepleniedomowF();
	document.getElementById("budfutra").innerHTML = "Uczeni odkryli Ocieplanie domów! Czy Zimy nie będą takie ciężkie jak zawsze?!";


setTimeout (function () { 
$("#budfutra").fadeOut(3000); }, 4000)
$("#budfutra").fadeIn(500);
}

else if 
	(ociepleniedomowlvl>0 )
	{
	document.getElementById("budfutra").innerHTML = "Ekhem... Mamy już ocieplane domu...!";	


	setTimeout (function() { 
	$("#budfutra").fadeOut(3000); }, 4000)
	$("#budfutra").fadeIn(500);
	}

else if
(szkolalvl < 1 )
{
document.getElementById("budfutra").innerHTML = "Najpierw wybuduj szkołę!";	


setTimeout (function () { 
$("#budfutra").fadeOut(3000); }, 4000)
$("#budfutra").fadeIn(500);
}

else if 
(s < 350 || zloto < 100 )
{
document.getElementById("budfutra").innerHTML = "Masz za malo surowcow do odkrycia Ocieplania domów!";	


setTimeout (function () { 
$("#budfutra").fadeOut(3000); }, 4000)
$("#budfutra").fadeIn(500);
}

	else 
	document.getElementById("budfutra").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest Ocieplanie domów!";	
	

setTimeout (function () { 
$("#budfutra").fadeOut(3000); }, 4000)
$("#budfutra").fadeIn(500);
};

function sprawdzkosa()
{
	
if (s >= 400 && zloto >= 75 && s5 >= 55 && kosalvl < 1) 
{s = s - 400;
zloto = Math.round(( zloto - 75  )*100)/100  ;
kosalvl = kosalvl + 1;
s5 = s5 - 55;
document.getElementById("naukas").innerHTML = s5;
kosaV = 0.1 * farmalvl;
	KosaF();
	document.getElementById("budmotS").innerHTML = "Uczeni odkryli kosę! Czy już nigdy nie bedziemy głodować ?!";


setTimeout (function() { 
$("#budmotS").fadeOut(3000); }, 4000)
$("#budmotS").fadeIn(500);
}

else if 
	(kosalvl>0 )
	{
	document.getElementById("budkamS").innerHTML = "Ekhem... odkrliśmy już kosę...!";	


	setTimeout (function() { 
	$("#budkamS").fadeOut(3000); }, 4000)
	$("#budkamS").fadeIn(500);
	}

else if
(szkolalvl < 1 )
{
document.getElementById("budmotS").innerHTML = "Najpierw wybuduj szkołę!";	


setTimeout (function() { 
$("#budmotS").fadeOut(3000); }, 4000)
$("#budmotS").fadeIn(500);
}

else if 
(s < 400 || zloto < 75  )
{
document.getElementById("budmotS").innerHTML = "Masz za malo surowcow do odkrycia Kosy!";	


setTimeout (function() { 
$("#budmotS").fadeOut(3000); }, 4000)
$("#budmotS").fadeIn(500);
}

	else 
	document.getElementById("budmotS").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest Kosa!";	
	

setTimeout (function() { 
$("#budmotS").fadeOut(3000); }, 4000)
$("#budmotS").fadeIn(500);
};

		function sprawdzdluto()
	{
		
	if (s >= 75 && s2>= 125 && zloto >= 20 && s5 >= 10 && dlutolvl < 1) 
	{s = s - 75;

	zloto = Math.round(( zloto - 20 )*100)/100;
	s2 = s2 - 125;
	dlutolvl = dlutolvl + 1;
	s5 = s5 - 10;
document.getElementById("naukas").innerHTML = s5;
	dlutoV = 0.1 * kamieniolomlvl;
		DlutoF();
		document.getElementById("budkamS").innerHTML = "Uczeni odkryli dłuto! Czy już nigdy nie bedziemy martwić się o kamień ?!";


	setTimeout (function() { 
	$("#budkamS").fadeOut(3000); }, 4000)
	$("#budkamS").fadeIn(500);
	}
	
	else if 
	(kiloflvl>0 )
	{
	document.getElementById("budkamS").innerHTML = "Ekhem... odkrliśmy już kilof...!";	


	setTimeout (function() { 
	$("#budkamS").fadeOut(3000); }, 4000)
	$("#budkamS").fadeIn(500);
	}

	else if
	(szkolalvl < 1 )
	{
	document.getElementById("budkamS").innerHTML = "Najpierw wybuduj szkołę!";	


	setTimeout (function() { 
	$("#budkamS").fadeOut(3000); }, 4000)
	$("#budkamS").fadeIn(500);
	}

	else if 
	(s < 75 || s2 < 125 || zloto < 20 )
	{
	document.getElementById("budkamS").innerHTML = "Masz za malo surowcow do odkrycia dłuta!";	


	setTimeout (function() { 
	$("#budkamS").fadeOut(3000); }, 4000)
	$("#budkamS").fadeIn(500);
	}

		else 
		document.getElementById("budkamS").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest dłuta!";	
		

	setTimeout (function() { 
	$("#budkamS").fadeOut(3000); }, 4000)
	$("#budkamS").fadeIn(500);
	};
	
function sprawdzkilof()
	{
		
	if (s >= 50 && s2>= 75 && zloto >= 15 && s5 >= 5 && kiloflvl < 1) 
	{s = s - 50;
	zloto = Math.round((zloto - 15)*100)/100;
	s2 = s2 - 75;
	kiloflvl = kiloflvl + 1;
	s5 = s5 - 5;
document.getElementById("naukas").innerHTML = s5;
	kilofV = 0.1 * kamieniolomlvl;
		KilofF();
		document.getElementById("budkamS").innerHTML = "Uczeni odkryli kilof! Czy już nigdy nie bedziemy martwić się o kamień ?!";


	setTimeout (function() { 
	$("#budkamS").fadeOut(3000); }, 4000)
	$("#budkamS").fadeIn(500);
	}

	else if
	(szkolalvl < 1 )
	{
	document.getElementById("budkamS").innerHTML = "Najpierw wybuduj szkołę!";	


	setTimeout (function() { 
	$("#budkamS").fadeOut(3000); }, 4000)
	$("#budkamS").fadeIn(500);
	}

	else if 
	(s < 50 || s2 < 75 || zloto < 15 )
	{
	document.getElementById("budkamS").innerHTML = "Masz za malo surowcow do odkrycia kilofa!";	


	setTimeout (function() { 
	$("#budkamS").fadeOut(3000); }, 4000)
	$("#budkamS").fadeIn(500);
	}

		else 
		document.getElementById("budkamS").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest kilof!";	
		

	setTimeout (function() { 
	$("#budkamS").fadeOut(3000); }, 4000)
	$("#budkamS").fadeIn(500);
	};
	
function sprawdzpila()
	{
		
	if (s >= 350 && zloto >= 25 && s5 >= 25 && pilalvl < 1) 
	{s = s - 350;
	zloto = Math.round(( zloto - 25 )*100)/100  ;
	
	pilalvl = pilalvl + 1;
	s5 = s5 - 25;
document.getElementById("naukas").innerHTML = s5;
	pilaV = 0.1 * chata_drwalalvl;
		DlutoF();
		document.getElementById("buddrwS").innerHTML = "Uczeni odkryli Piłę! Czy już nigdy nie bedziemy martwić się o drewno ?!";


	setTimeout (function() { 
	$("#buddrwS").fadeOut(3000); }, 4000)
	$("#buddrwS").fadeIn(500);
	}
	
	else if 
	(pilalvl>0 )
	{
	document.getElementById("buddrwS").innerHTML = "Ekhem... odkrliśmy już piłę...!";	


	setTimeout (function() { 
	$("#buddrwS").fadeOut(3000); }, 4000)
	$("#buddrwS").fadeIn(500);
	}

	else if
	(szkolalvl < 1 )
	{
	document.getElementById("buddrwS").innerHTML = "Najpierw wybuduj szkołę!";	


	setTimeout (function() { 
	$("#buddrwS").fadeOut(3000); }, 4000)
	$("#buddrwS").fadeIn(500);
	}

	else if 
	(s < 350 || zloto < 25 )
	{
	document.getElementById("buddrwS").innerHTML = "Masz za malo surowcow do odkrycia piły!";	


	setTimeout (function() { 
	$("#buddrwS").fadeOut(3000); }, 4000)
	$("#buddrwS").fadeIn(500);
	}

		else 
		document.getElementById("buddrwS").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest piła!";	
		

	setTimeout (function() { 
	$("#buddrwS").fadeOut(3000); }, 4000)
	$("#buddrwS").fadeIn(500);
	};
	
function sprawdzsiekera()
	{
		
	if (s >= 250 && zloto >= 22 && s5 >= 15 && siekeralvl < 1) 
	{s = s - 250;
	zloto = Math.round(( zloto - 22 )*100)/100 ;
	siekeralvl = siekeralvl + 1;
	s5 = s5 - 15;
document.getElementById("naukas").innerHTML = s5;
	siekieraV = 0.1 * chata_drwalalvl;
		SiekieraF();
		document.getElementById("buddrwS").innerHTML = "Uczeni odkryli Siekierę! Czy już nigdy nie bedziemy martwić się o drewno ?!";


	setTimeout (function() { 
	$("#buddrwS").fadeOut(3000); }, 4000)
	$("#buddrwS").fadeIn(500);
	}
	
	else if 
	(siekeralvl>0 )
	{
	document.getElementById("buddrwS").innerHTML = "Ekhem... odkrliśmy już siekierę...!";	


	setTimeout (function() { 
	$("#buddrwS").fadeOut(3000); }, 4000)
	$("#buddrwS").fadeIn(500);
	}

	else if
	(szkolalvl < 1 )
	{
	document.getElementById("buddrwS").innerHTML = "Najpierw wybuduj szkołę!";	


	setTimeout (function() { 
	$("#buddrwS").fadeOut(3000); }, 4000)
	$("#buddrwS").fadeIn(500);
	}

	else if 
	(s < 250 || zloto < 22 )
	{
	document.getElementById("buddrwS").innerHTML = "Masz za malo surowcow do odkrycia siekiery!";	


	setTimeout (function() { 
	$("#buddrwS").fadeOut(3000); }, 4000)
	$("#buddrwS").fadeIn(500);
	}

		else 
		document.getElementById("buddrwS").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest siekiera!";	
		

	setTimeout (function() { 
	$("#buddrwS").fadeOut(3000); }, 4000)
	$("#buddrwS").fadeIn(500);
	};
	
function sprawdzmerkantylizm()
	{
		
	if (zloto >= 50 && s5 >= 75 && merkiantylizmlvl < 1 && targowiskolvl > 0) 
	{
	zloto = Math.round(( zloto - 50 )*100)/100 ;
	
	merkiantylizmlvl = 1;
	s5 = s5 - 75;
document.getElementById("naukas").innerHTML = s5;
	kupcy = kupcy + 1;
		MerkiantylizmF();
		document.getElementById("targinfo1").innerHTML = "Uczeni odkryli Merkantylizm! Możesz rozdysponować wolnym kupcem";


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}
	
	else if 
	(merkiantylizmlvl>0 )
	{
	document.getElementById("targinfo1").innerHTML = "Ekhem... odkrliśmy już merkantylizm...!";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}
	
	else if 
	(targowiskolvl==0)
	{
	document.getElementById("targinfo1").innerHTML = "Wybudujmy najpierw targowisko...";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}

	else if
	(szkolalvl < 1 )
	{
	document.getElementById("targinfo1").innerHTML = "Najpierw wybuduj szkołę!";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}

	else if 
	( zloto < 50 )
	{
	document.getElementById("targinfo1").innerHTML = "Masz za malo surowcow do odkrycia merkantylizm!";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}

		else 
		document.getElementById("targinfo1").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest merkantylizm!";	
		

	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	};
	
function sprawdzprotekcjonalizm()
	{
		
	if (zloto >= 60 && s5 >= 85 && protekcjonalizmlvl < 1 && targowiskolvl > 0) 
	{
	zloto = Math.round(( zloto - 60 )*100)/100 ;
	
	protekcjonalizmlvl = 1;
	s5 = s5 - 85;
	document.getElementById("naukas").innerHTML = s5;
	kupcy = kupcy + 1;
		ProtekcjonalizmF();
		document.getElementById("targinfo1").innerHTML = "Uczeni odkryli Protekcjonalizm! Możesz rozdysponować wolnym kupcem";


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}
	
	else if 
	(protekcjonalizmlvl>0 )
	{
	document.getElementById("targinfo1").innerHTML = "Ekhem... odkrliśmy już protekcjonalizm...!";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}
	
	else if 
	(targowiskolvl==0)
	{
	document.getElementById("targinfo1").innerHTML = "Wybudujmy najpierw targowisko...";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}

	else if
	(szkolalvl < 1 )
	{
	document.getElementById("targinfo1").innerHTML = "Najpierw wybuduj szkołę!";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}

	else if 
	( zloto < 60 )
	{
	document.getElementById("targinfo1").innerHTML = "Masz za malo surowcow do odkrycia protekcjonalizmu!";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}

		else 
		document.getElementById("targinfo1").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest protekcjonalizm!";	
		

	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	};
	
function sprawdzwolnyhandel()
	{
		
	if (zloto >= 75 && s5 >= 95 && wolnyhandellvl < 1 && targowiskolvl > 0) 
	{
	zloto = Math.round(( zloto - 75  )*100)/100 ;
	
	wolnyhandellvl = 1;
	s5 = s5 - 95;
	document.getElementById("naukas").innerHTML = s5;
	kupcy = kupcy + 1;
		WolnyhandelF();
		document.getElementById("targinfo1").innerHTML = "Uczeni odkryli wolny handel! Możesz rozdysponować wolnym kupcem";


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}
	
	else if 
	(wolnyhandellvl>0 )
	{
	document.getElementById("targinfo1").innerHTML = "Ekhem... odkrliśmy już wolny handel...!";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}
	
	else if 
	(targowiskolvl==0)
	{
	document.getElementById("targinfo1").innerHTML = "Wybudujmy najpierw targowisko...";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}

	else if
	(szkolalvl < 1 )
	{
	document.getElementById("targinfo1").innerHTML = "Najpierw wybuduj szkołę!";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}

	else if 
	( zloto < 75 )
	{
	document.getElementById("targinfo1").innerHTML = "Masz za malo surowcow do odkrycia wolny handel!";	


	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}

		else 
		document.getElementById("targinfo1").innerHTML = "Za mało pkt nauki, żeby Torsjanie poznali sekret jakim jest wolny handel!";	
		

	setTimeout (function() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	};

//zniszcz farme
function zniszczfarma()
{
	if(farmalvl > 1)
	{
		farmalvl = farmalvl - 1;
		s = s + 30;
		riots = riots + 0.3
		document.getElementById("znifraS").innerHTML = "Farma zniszczona!";	
		FarmF();
		setTimeout (function zniszczfarma() { 
$("#znifraS").fadeOut(3000); }, 4000)
$("#znifraS").fadeIn(500);
	}

		
	else 
		document.getElementById("znifraS").innerHTML = "Chcesz zniszczyc ostatnia farme ktora mamy i skazac nas na smierc ?!?!";	
	setTimeout (function zniszczfarma() { 
$("#znifraS").fadeOut(3000); }, 4000)
$("#znifraS").fadeIn(500);
};
//zniszcz drwala
function zniszczdrwala()
{
	if(chata_drwalalvl > 1)
	{
		chata_drwalalvl = chata_drwalalvl - 1;
		s = s + 30;
		riots = riots + 0.3
		document.getElementById("znichaS").innerHTML = "Chata drwala zniszczona!";	
		LasF();
			setTimeout (function zniszczdrwala() { 
$("#znichaS").fadeOut(3000); }, 4000)
$("#znichaS").fadeIn(500);
	}
	else 
		document.getElementById("znichaS").innerHTML = "Chcesz zniszczyc ostatnia chatę drwala ktorą mamy ?!?!";	
	setTimeout (function zniszczdrwala() { 
$("#znichaS").fadeOut(3000); }, 4000)
$("#znichaS").fadeIn(500);
};
//zniszczkamienilom
function zniszczkamienilom()
{
	if(kamieniolomlvl > 1)
	{
		kamieniolomlvl = kamieniolomlvl - 1;
		s = s + 30;
		riots = riots + 0.3
		document.getElementById("znikomS").innerHTML = "Kamieniolom zniszczony!";	
		KamieniolomyF();
		setTimeout (function zniszczkamienilom() { 
$("#znikomS").fadeOut(3000); }, 4000)
$("#znikomS").fadeIn(500);
	}
	else 
		document.getElementById("znikomS").innerHTML = "Kamieniarze nie pozwalaja zniszczyc ostatniego kamieniołomu !";	
	setTimeout (function zniszczkamienilom() { 
$("#znikomS").fadeOut(3000); }, 4000)
$("#znikomS").fadeIn(500);
};




var zwolnienifjermierzy = 0;


function zwolnijfjermerow()
{
	var iloscfjermerowdozwolnienia = document.getElementById("pole").value;
	if(iloscfjermerowdozwolnienia <= fjermierzy)
		
	{ zwolnienifjermierzy =  iloscfjermerowdozwolnienia;
	setTimeout(function() {
    zwolnienifjermierzy = 0;
}, iloscfjermerowdozwolnienia * 2000);
	riots = riots + 0.5;
	document.getElementById("znifraS").innerHTML = "Fjermierzy zwolnieni!";	
	setTimeout (function zwolnijfjermerow() { 
$("#znifraS").fadeOut(3000); }, 4000)
$("#znifraS").fadeIn(500);
}
else 
	document.getElementById("znifraS").innerHTML = "Chcesz zwolnić więcej niż nas pracuję !";	
	setTimeout (function zwolnijfjermerow() { 
$("#znifraS").fadeOut(3000); }, 4000)
$("#znifraS").fadeIn(500);

}

var zwolnienidrwale = 0;


function zwolnijdrwali()
{
	var iloscdrwalidozwolnienia = document.getElementById("pole1").value;
	if(iloscdrwalidozwolnienia <= drwale)
		
	{ zwolnienidrwale =  iloscdrwalidozwolnienia;
	setTimeout(function() {
    zwolnienidrwale = 0;
}, iloscdrwalidozwolnienia * 2000);
	riots = riots + 0.5;
	document.getElementById("znichaS").innerHTML = "Drwale zwolnieni!";	
		setTimeout (function zwolnijdrwali() { 
$("#znichaS").fadeOut(3000); }, 4000)
$("#znichaS").fadeIn(500);
}
else 
	document.getElementById("znichaS").innerHTML = "Chcesz zwolnić więcej niż nas pracuję !";	
setTimeout (function zwolnijdrwali() { 
$("#znichaS").fadeOut(3000); }, 4000)
$("#znichaS").fadeIn(500);

}


var zwolnienikamieniarze = 0;


function zwolnijkamieniarzy()
{
	var ilosckamieniarzydozwolnienia = document.getElementById("pole2").value;
	if(ilosckamieniarzydozwolnienia <= drwale)
		
	{ zwolnienikamieniarze =  ilosckamieniarzydozwolnienia;
	setTimeout(function() {
    zwolnienikamieniarze = 0;
}, ilosckamieniarzydozwolnienia * 2000);
	riots = riots + 0.5;
	document.getElementById("znikomS").innerHTML = "Kamieniarze zwolnieni!";	
	setTimeout (function zwolnijkamieniarzy() { 
$("#znikomS").fadeOut(3000); }, 4000)
$("#znikomS").fadeIn(500);
}
else 
	document.getElementById("znikomS").innerHTML = "Chcesz zwolnić więcej niż nas pracuję !";	
	setTimeout (function zwolnijkamieniarzy() { 
$("#znikomS").fadeOut(3000); }, 4000)
$("#znikomS").fadeIn(500);
}


function sprawdzdom(increment1,populacja_bezrobotnych,sprawdzkanalizacje)
{
	
if (s >= kosztbudowyiloscdomowdrewno && s2 >= kosztbudowyiloscdomowkamien && bezrobotni >= 10 ) 
{s = s - kosztbudowyiloscdomowdrewno;
s2 = s2 - kosztbudowyiloscdomowkamien;
iloscdomow = iloscdomow + 1;
	
	document.getElementById("buddomS").innerHTML = "Chałupa wybudowana!";
	document.getElementById("iloscdomow").innerHTML = iloscdomow;
	document.getElementById("iloscdomows").innerHTML = iloscdomow;
	kosztbudowyiloscdomowdrewno =  iloscdomow * 50
	kosztbudowyiloscdomowkamien =  iloscdomow * 20
	mapaosadyF();
	
	if(kanalizacjelvl == 0 ){
	maxorsyan = iloscdomow * 15;
	}
	else
	{
		maxorsyan = iloscdomow * 17;
	}
	document.getElementById("maxorsyanS").innerHTML = maxorsyan;


	setTimeout (function sprawdzdom() { 
$("#buddomS").fadeOut(3000); }, 4000)
$("#buddomS").fadeIn(500);
}

else if 
(s < kosztbudowyiloscdomowdrewno || s2 < kosztbudowyiloscdomowkamien )
{
document.getElementById("buddomS").innerHTML = "Masz za malo surowcow na Chałupę!";	


setTimeout (function sprawdzdom() { 
$("#buddomS").fadeOut(3000); }, 4000)
$("#buddomS").fadeIn(500);
}

	else 
	document.getElementById("buddomS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Chałupe!";	

setTimeout (function sprawdzdom() { 
$("#buddomS").fadeOut(3000); }, 4000)
$("#buddomS").fadeIn(500);
};

//kosciol
function sprawdzkosciol(increment1,increment2,populacja_bezrobotnych,pupulacja_orsyan)
{
	
if (s >= 150 && s2 >= 500 && bezrobotni >= 15 && orsyanie >= 100 && kosciollvl < 1) 
{s = s - 150;
s2 = s2 - 500;
kosciollvl = kosciollvl + 1;
WiaraF();
wierzeniaF();
document.getElementById("budkosS").innerHTML = "Kościół wybudowany!";
WysokaOsadaF();
krucjataF();


	setTimeout (function sprawdzkosciol() { 
$("#budkosS").fadeOut(3000); }, 4000)
$("#budkosS").fadeIn(500);
}

else if 
(kosciollvl > 0 )
{
document.getElementById("budkosS").innerHTML = "W Twojej osadzie juz jest kosciol!";	


setTimeout (function sprawdzkosciol() { 
$("#budkosS").fadeOut(3000); }, 4000)
$("#budkosS").fadeIn(500);
}

else if 
(s < 150 || s2 < 500 )
{
document.getElementById("budkosS").innerHTML = "Masz za malo surowcow na Kościół!";	


setTimeout (function sprawdzkosciol() { 
$("#budkosS").fadeOut(3000); }, 4000)
$("#budkosS").fadeIn(500);
}

else if 
(orsyanie < 100 )
{
document.getElementById("budkosS").innerHTML = "W Twojej osadzie żyje za mało wiernych żeby wybodować kościół!";	


setTimeout (function sprawdzkosciol() { 
$("#budkosS").fadeOut(3000); }, 4000)
$("#budkosS").fadeIn(500);
}



	else 
	document.getElementById("budkosS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Kościół!";	

setTimeout (function sprawdzkosciol() { 
$("#budkosS").fadeOut(3000); }, 4000)
$("#budkosS").fadeIn(500);
};

//targowisko
function sprawdztargowisko(increment1,increment2,populacja_bezrobotnych)
{
	
if (s >= 200 && s2 >= 200 && bezrobotni >= 10 && targowiskolvl < 1) 
{s = s - 200;
s2 = s2 - 200;

var increasingmerchants1sec = setInterval(function(){
    kupcy = kupcy + 1;
}, 3000); 
	setTimeout(stopincreasingmerchants1sec,10000);


function stopincreasingmerchants1sec()
{
	clearInterval(increasingmerchants1sec);
	populacja_kupcow();
}

targowiskolvl = targowiskolvl + 1;
	
	document.getElementById("budtarS").innerHTML = "Targowisko wybudowane!";
	targdostepF();
	TargF();
	document.getElementById("targowiskolvl").innerHTML = targowiskolvl;
	document.getElementById("targowiskolvls").innerHTML = targowiskolvl;
	mapaosadyF();
	setTimeout (function sprawdztargowisko() { 
$("#budtarS").fadeOut(3000); }, 4000)
$("#budtarS").fadeIn(500);
}


else if 
(targowiskolvl > 0 )
{
document.getElementById("budtarS").innerHTML = "W Twojej osadzie juz jest Targowisko!";	


setTimeout (function sprawdztargowisko() { 
$("#budtarS").fadeOut(3000); }, 4000)
$("#budtarS").fadeIn(500);
}

else if 
(s < 200 || s2 < 200 )
{
document.getElementById("budtarS").innerHTML = "Masz za malo surowcow na Targowisko!";	


setTimeout (function sprawdztargowisko() { 
$("#budtarS").fadeOut(3000); }, 4000)
$("#budtarS").fadeIn(500);
}




	else 
	document.getElementById("budtarS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Targowisko!";	

setTimeout (function sprawdztargowisko() { 
$("#budtarS").fadeOut(3000); }, 4000)
$("#budtarS").fadeIn(500);
};

//kanalizacje
function sprawdzkanalizacje(increment1,increment2,populacja_bezrobotnych,sprawdzdom)
{
	
if (s >= 200 && s2 >= 400 && bezrobotni >= 10 && kanalizacjelvl < 1) 
{s = s - 200;
s2 = s2 - 400;
kanalizacjelvl = kanalizacjelvl + 1;
maxorsyan = iloscdomow * (15 + 2);
WysokaOsadaF();
	document.getElementById("maxorsyanS").innerHTML = maxorsyan;
	document.getElementById("budkanS").innerHTML = "Kanalizacja wybudowana!";
	


	setTimeout (function sprawdzkanalizacje() { 
$("#budkanS").fadeOut(3000); }, 4000)
$("#budkanS").fadeIn(500);
}

else if 
(kanalizacjelvl > 0 )
{
document.getElementById("budkanS").innerHTML = "W Twojej osadzie juz jest Kanalizacja!";	


setTimeout (function sprawdzkanalizacje() { 
$("#budkanS").fadeOut(3000); }, 4000)
$("#budkanS").fadeIn(500);
}

else if 
(s < 200 || s2 < 400 )
{
document.getElementById("budkanS").innerHTML = "Masz za malo surowcow na Kanalizację!";	


setTimeout (function sprawdzkanalizacje() { 
$("#budkanS").fadeOut(3000); }, 4000)
$("#budkanS").fadeIn(500);
}




	else 
	document.getElementById("budkanS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Kanalizację!";	

setTimeout (function sprawdzkanalizacje() { 
$("#budkanS").fadeOut(3000); }, 4000)
$("#budkanS").fadeIn(500);
};

var oberzariots = 0
//oberża
function sprawdzoberza(increment1,increment2,populacja_bezrobotnych)
{
	
if (s >= 200 && s2 >= 100 && bezrobotni >= 7 && oberzalvl < 1) 
{s = s - 200;
s2 = s2 - 100;
oberzalvl = oberzalvl + 1;
hope = hope + 10;
oberzariots = 0.01;
	mapaosadyF();
	document.getElementById("budobeS").innerHTML = "Oberża wybudowana!";
	document.getElementById("oberzalvls").innerHTML = oberzalvl;
	document.getElementById("oberzalvl").innerHTML = oberzalvl;
	
OberzaF();

	setTimeout (function sprawdzoberza() { 
$("#budobeS").fadeOut(3000); }, 4000)
$("#budobeS").fadeIn(500);
}


else if 
(oberzalvl > 0 )
{
document.getElementById("budobeS").innerHTML = "W Twojej osadzie juz jest Oberża!";	


setTimeout (function sprawdzoberza() { 
$("#budobeS").fadeOut(3000); }, 4000)
$("#budobeS").fadeIn(500);
}

else if 
(s < 200 || s2 < 100 )
{
document.getElementById("budobeS").innerHTML = "Masz za malo surowcow na Oberżę!";	


setTimeout (function sprawdzoberza() { 
$("#budobeS").fadeOut(3000); }, 4000)
$("#budobeS").fadeIn(500);
}




	else 
	document.getElementById("budobeS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Oberżę!";	

setTimeout (function sprawdzoberza() { 
$("#budobeS").fadeOut(3000); }, 4000)
$("#budobeS").fadeIn(500);
};

laznieriots = 0
//Łaźnie
function sprawdzlaznie(increment1,increment2,populacja_bezrobotnych)
{
	
if (s >= 350 && s2 >= 400 && bezrobotni >= 30 && laznielvl < 1) 
{s = s - 350;
s2 = s2 - 400;
laznielvl = laznielvl + 1;
laznieriots = (-0.01);

	
	document.getElementById("budlazS").innerHTML = "Laznie wybudowane!";
	WysokaOsadaF();


	setTimeout (function sprawdzlaznie() { 
$("#budlazS").fadeOut(3000); }, 4000)
$("#budlazS").fadeIn(500);
}

else if 
(laznielvl > 0 )
{
document.getElementById("budlazS").innerHTML = "W Twojej osadzie są już Łaźnie!";	


setTimeout (function sprawdzlaznie() { 
$("#budlazS").fadeOut(3000); }, 4000)
$("#budlazS").fadeIn(500);
}

else if 
(s < 350 || s2 < 400 )
{
document.getElementById("budlazS").innerHTML = "Masz za malo surowcow na Łaźnie!";	


setTimeout (function sprawdzlaznie() { 
$("#budlazS").fadeOut(3000); }, 4000)
$("#budlazS").fadeIn(500);
}




	else 
	document.getElementById("budlazS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Łaźnie!";	

setTimeout (function sprawdzlaznie() { 
$("#budlazS").fadeOut(3000); }, 4000)
$("#budlazS").fadeIn(500);
};


//koszary
function sprawdzkoszary(increment1,increment2,populacja_bezrobotnych)
{
	
if (s >= kosztbudowykoszarydrewno && s2 >= kosztbudowykoszarykamien && zloto >= kosztbudowykoszaryzloto && bezrobotni >= 10 && koszarylvl < 4 && zbrojownialvl > 0) 
{s = s - kosztbudowykoszarydrewno;
s2 = s2 - kosztbudowykoszarykamien;
zloto = zloto - kosztbudowykoszaryzloto;
koszarylvl = koszarylvl + 1;
 kosztbudowykoszarydrewno = 300 + ( koszarylvl * 100);
 kosztbudowykoszarykamien = 300 + ( koszarylvl * 100);
 kosztbudowykoszaryzloto = 0 + ( koszarylvl * 10);
koszaryF();
shieldmanF();
footmanF();
cavalryF();
	
	document.getElementById("budkoszS").innerHTML = "Koszary wybudowane!";
	


	setTimeout (function sprawdzkoszary() { 
$("#budkoszS").fadeOut(3000); }, 4000)
$("#budkoszS").fadeIn(500);
}

else if 
(zbrojownialvl < 1 )
{
document.getElementById("budkoszS").innerHTML = "Najpierw musisz wybudować Zbrojownie!";	


setTimeout (function sprawdzkoszary() { 
$("#budkoszS").fadeOut(3000); }, 4000)
$("#budkoszS").fadeIn(500);
}

else if 
(koszarylvl > 3 )
{
document.getElementById("budkoszS").innerHTML = "Rozbudowałeś koszary do maksymalnego poziomu!";	


setTimeout (function sprawdzkoszary() { 
$("#budkoszS").fadeOut(3000); }, 4000)
$("#budkoszS").fadeIn(500);
}

else if 
(s < kosztbudowykoszarydrewno || s2 < kosztbudowykoszarykamien || zloto < kosztbudowykoszaryzloto )
{
document.getElementById("budkoszS").innerHTML = "Masz za malo surowcow na Koszary!";	


setTimeout (function sprawdzkoszary() { 
$("#budkoszS").fadeOut(3000); }, 4000)
$("#budkoszS").fadeIn(500);
}





	else 
	document.getElementById("budkoszS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Koszary!";	

setTimeout (function sprawdzkoszary() { 
$("#budkoszS").fadeOut(3000); }, 4000)
$("#budkoszS").fadeIn(500);
};

///szkola
function sprawdzszkola(increment1,increment2,populacja_bezrobotnych)
{
	
if (s >= kosztbudowyszkoladrewno && s2 >= kosztbudowyszkolakamien && zloto >= kosztbudowyszkolazloto && bezrobotni >= 10 && szkolalvl < 5) 
{s = s - kosztbudowyszkoladrewno;
s2 = s2 - kosztbudowyszkolakamien;
zloto = zloto - kosztbudowyszkolazloto
szkolalvl = szkolalvl + 1;
kosztbudowyszkoladrewno = 300 + ( szkolalvl * 50);
kosztbudowyszkolakamien = 300 + ( szkolalvl * 50);
kosztbudowyszkolazloto = 0 + ( szkolalvl * 5);
SzkolaF();

populacja_uczonych();
	
	document.getElementById("budszkoS").innerHTML = "Poziom szkoly wybudowany!";
	

	setTimeout (function sprawdzszkola() { 
$("#budszkoS").fadeOut(3000); }, 4000)
$("#budszkoS").fadeIn(500);
}

else if 
(szkolalvl > 4 )
{
document.getElementById("budszkoS").innerHTML = "Osiągnąłeś maksymalny poziom szkoły!";	


setTimeout (function sprawdzszkola() { 
$("#budszkoS").fadeOut(3000); }, 4000)
$("#budszkoS").fadeIn(500);
}

else if 
(s < kosztbudowyszkoladrewno || s2 < kosztbudowyszkolakamien || zloto < kosztbudowyszkolazloto )
{
document.getElementById("budszkoS").innerHTML = "Masz za malo surowcow na Szkołe!";	


setTimeout (function sprawdzszkola() { 
$("#budszkoS").fadeOut(3000); }, 4000)
$("#budszkoS").fadeIn(500);
}




	else 
	document.getElementById("budszkoS").innerHTML = "Brak wystarczajacej ilosci rak do pracy zeby wybudowac Szkołę!";	

setTimeout (function sprawdzszkola() { 
$("#budszkoS").fadeOut(3000); }, 4000)
$("#budszkoS").fadeIn(500);
};
//


function sprawdzczeni()
{
	if(szkolalvl * 5 >= uczeni + 5  && szkolalvl > 0 && zloto >= 25 )
	{
		zloto = zloto - 25;
		var increasingthinker1sec = setInterval(function(){
    uczeni = uczeni + 1;
}, 1700); 
	setTimeout(stopincreasingthinker1sec,10000);


function stopincreasingthinker1sec()
{
	clearInterval(increasingthinker1sec);
}

document.getElementById("spruczen").innerHTML = "uczeni pojawiają się w Twojej szkole!";
uczeniodklikani = uczeniodklikani + 1;

setTimeout (function sprawdzczeni() { 
$("#spruczen").fadeOut(3000); }, 4000)
$("#spruczen").fadeIn(500);

	}
	else if (szkolalvl * 5 <= uczeni + 5 || szkolalvl < 1 )
	{
		document.getElementById("spruczen2").innerHTML = "Zbuduj wyzszy poziom szkoły, Uczeni nie maja gdzie sie szkolić!";
		
		setTimeout (function sprawdzczeni() { 
$("#spruczen2").fadeOut(3000); }, 4000)
$("#spruczen2").fadeIn(500);

	}
	
	else if (zloto < 25)
	{
		document.getElementById("spruczen2").innerHTML = "masz za malo zlota na szkolenie Torsjan!";
		
		setTimeout (function sprawdzczeni() { 
$("#spruczen2").fadeOut(3000); }, 4000)
$("#spruczen2").fadeIn(500);
	}
}

//mechanika niewolnikow
var niewolnicy = 0
var nowiniewolnicy = 0;



function niewolnicy1(pupulacja_orsyan)
{
	if (zloto >= 25) 
	{
	nowiniewolnicy = Math.floor(Math.random()*20)+30;
	niewolnicy = niewolnicy + nowiniewolnicy;
	zloto = zloto - 25;
	var riotsSlaves1sec = setInterval(function(){
    riots = riots + 1;
}, 2000); 
	setTimeout(stopintervalRiots1,10000);


function stopintervalRiots1()
{
	clearInterval(riotsSlaves1sec);
}
	//var riotsSlaves1sec = setInterval ( riotsSlaves, 1000);
	//setTimeout ("riotsSlaves1sec",5000);

	document.getElementById("niewolnicy3S").innerHTML = "Przybyło " + nowiniewolnicy + " niewolników!";
document.getElementById("niewolnicy3Si").innerHTML = "Przybyło " + nowiniewolnicy + " niewolników!";

setTimeout (function niewolnicy1() { 
$("#niewolnicy3S").fadeOut(3000); }, 4000)
$("#niewolnicy3S").fadeIn(500);
setTimeout (function niewolnicy1() { 
$("#niewolnicy3Si").fadeOut(3000); }, 4000)
$("#niewolnicy3Si").fadeIn(500);

	}
	else {
	document.getElementById("niewolnicy2S").innerHTML = "Masz za malo zlota zeby kupic niewolnikow!";
	document.getElementById("niewolnicy2Si").innerHTML = "Masz za malo zlota zeby kupic niewolnikow!";


setTimeout (function niewolnicy1() { 
$("#niewolnicy2S").fadeOut(3000); }, 4000)
$("#niewolnicy2S").fadeIn(500);
	};
	
	
};


function bezpiecznezbozeF()
{
	if(s3>=orsyanie)
	{
		
		document.getElementById("bezpiecznezboze0").innerHTML = "Ilość zboża jest odpowiednia";	
		document.getElementById("bezpiecznezboze0i").innerHTML = "Ilość zboża jest odpowiednia";	
			setTimeout (function bezpiecznezbozeF() { 
$("#bezpiecznezboze0").fadeOut(3000); }, 4000)
$("#bezpiecznezboze0").fadeIn(500);
setTimeout (function bezpiecznezbozeF() { 
$("#bezpiecznezboze0i").fadeOut(3000); }, 4000)
$("#bezpiecznezboze0i").fadeIn(500);
$("#zbozeS").css("color","white");
$("#orsyanieS").css("color","white"); 
	document.getElementById("zbozeS").innerHTML = s3 
	document.getElementById("orsyanieS").innerHTML = orsyanie; 
	}
	else if(s3 <= orsyanie && s3 >= orsyanie * 0.5)
	{
		document.getElementById("bezpiecznezboze1").innerHTML = "Twoi Ludzie niedojadają, szerzą się choroby";
		document.getElementById("bezpiecznezboze1i").innerHTML = "Twoi Ludzie niedojadają, szerzą się choroby";

					setTimeout (function bezpiecznezbozeF() { 
$("#bezpiecznezboze1").fadeOut(3000); }, 4000)
$("#bezpiecznezboze1").fadeIn(500);
setTimeout (function bezpiecznezbozeF() { 
$("#bezpiecznezboze1i").fadeOut(3000); }, 4000)
$("#bezpiecznezboze1i").fadeIn(500);

$("#zbozeS").css("color","#2F4F4F");
$("#orsyanieS").css("color","#2F4F4F"); 
	document.getElementById("zbozeS").innerHTML = s3 
	document.getElementById("orsyanieS").innerHTML = orsyanie; 
	}
	else if(s3 < orsyanie * 0.5 && s3 >=  orsyanie * 0.2)
	{
		document.getElementById("bezpiecznezboze2").innerHTML = "Twoi Ludzie dostają głodowe racje! Zrób coś bo wszyscy umrzemy!!!";	
		document.getElementById("bezpiecznezboze2i").innerHTML = "Twoi Ludzie dostają głodowe racje! Zrób coś bo wszyscy umrzemy!!!";	
		$("#zbozeS").css("color","#DC143C");
		$("#orsyanieS").css("color","#DC143C");
		setTimeout (function () { 
		$("#bezpiecznezboze2").fadeOut(3000); }, 4000)
		$("#bezpiecznezboze2").fadeIn(500);
		setTimeout (function () { 
		$("#bezpiecznezboze2i").fadeOut(3000); }, 4000)
		$("#bezpiecznezboze2i").fadeIn(500);
		
	document.getElementById("zbozeS").innerHTML = s3 
	document.getElementById("orsyanieS").innerHTML = orsyanie; 
		
	}
		else if(s3 <=  orsyanie * 0.2 && s3 >= orsyanie * 0.1)
	{
		document.getElementById("bezpiecznezboze3").innerHTML = "Zaczynamy zjadać siebie nawzajem...";	
		document.getElementById("bezpiecznezboze3i").innerHTML = "Zaczynamy zjadać siebie nawzajem...";	
		$("#zbozeS").css("color","#B22222");
		$("#orsyanieS").css("color","#B22222");
		setTimeout (function () { 
		$("#bezpiecznezboze3").fadeOut(3000); }, 4000)
		$("#bezpiecznezboze3").fadeIn(500);
		setTimeout (function () { 
		$("#bezpiecznezboze3i").fadeOut(3000); }, 4000)
		$("#bezpiecznezboze3i").fadeIn(500);
	document.getElementById("zbozeS").innerHTML = s3 
	document.getElementById("orsyanieS").innerHTML = orsyanie; 
		
	}
		else if(s3 <= 0 )
	{
		document.getElementById("bezpiecznezboze4").innerHTML = "Trzeba było dać się zabić jak wódz Oleksander";	
		document.getElementById("bezpiecznezboze4i").innerHTML = "Trzeba było dać się zabić jak wódz Oleksander";
		$("#zbozeS").css("color","#8B0000");
		$("#orsyanieS").css("color","#8B0000");
	document.getElementById("zbozeS").innerHTML = s3 
	document.getElementById("orsyanieS").innerHTML = orsyanie; 
		
	}
	
};
//mechanika wk**wienia


function wybudowanyPomnik_bohatera(sprawdzpomnik)
{
	riots = Math.round ((riots + ((pomnik_bohateralvl * pomnikreligia) * 0.01 ))*100)/100;
	

	document.getElementById("riotsS").innerHTML = riots;
	przegrana();
};


function wybudowanyKosciol(sprawdzkosciol,sprawdzpalac,sprawdzlaznie)
{
	hope = Math.round ((hope + ((kosciollvl) * 0.03 ))*100)/100;
	hope = Math.round ((hope + ((laznielvl) * 0.07 ))*100)/100;
	hope = Math.round ((hope + ((palaclvl) * 0.1 ))*100)/100;
	zloto =  Math.round ((zloto - ((palaclvl) * 0.05 ))*100)/100;
	document.getElementById("hope1").innerHTML = hope;
	if(zloto < 0.04 && tarczownicy > 0)
	{
		tarczownicy = tarczownicy - 1;
		armia = tarczownicy + miecznicy + konni
		silaarmii = ((tarczownicy*1) + (miecznicy*3) + (konni*5))*silawojownikow + silaarmiianomaliapogodowa;
		document.getElementById("tarczownicyD").innerHTML = tarczownicy;
		document.getElementById("silaarmiiD").innerHTML = silaarmii;
		document.getElementById("armeeinfo").innerHTML = "Nie masz pieniedzy!Doszlo do rozwiazania wojsk";
	};
	if(zloto > 0 )
	{
		kosztwojsk = Math.round((miecznicy * 0.1 + konni * 0.2 + tarczownicy * 0.04)*100)/100;
		zloto = Math.round((zloto - kosztwojsk)*100)/100;
		document.getElementById("kosztwojskD").innerHTML = kosztwojsk; 
	};
	if(zloto <= 0)
	{
		zloto = 0;
	};
	
	if( zloto < 0.1 && miecznicy > 0  )
	{
		miecznicy = miecznicy - 1;
		armia = tarczownicy + miecznicy + konni
		silaarmii = ((tarczownicy*1) + (miecznicy*3) + (konni*5))*silawojownikow + silaarmiianomaliapogodowa;
		document.getElementById("miecznicyD").innerHTML = miecznicy;

		document.getElementById("silaarmiiD").innerHTML = silaarmii;
		
		
		document.getElementById("armeeinfo").innerHTML = "Nie masz pieniedzy!Doszlo do rozwiazania wojsk";
	};
	if( zloto < 0.2 && konni > 0  )
	{
		konni = konni - 1;
		armia = tarczownicy + miecznicy + konni
		silaarmii = ((tarczownicy*1) + (miecznicy*3) + (konni*5))*silawojownikow + silaarmiianomaliapogodowa;
		document.getElementById("konniD").innerHTML = konni;

		document.getElementById("silaarmiiD").innerHTML = silaarmii;
		document.getElementById("armeeinfo").innerHTML = "Nie masz pieniedzy!Doszlo do rozwiazania wojsk";
	};
	
};



function wymianatowarowF1Check()
{
	if(targowiskolvl == 0)
	{
		document.getElementById("targinfo1").innerHTML = "Chcesz pohandlować? Wybuduj targowisko!";
		setTimeout (function wymianatowarowF1Check() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}
	else
	{
		wymianatowarowF1();
	}
}

function wymianatowarowF1()
{
	
	var wymianaz = $('#surowce1').val();
	var wymianana = $('#surowce2').val();
	var iloscdowymiany = document.getElementById("wymianatowarow").value; 
	var przelicznik = 0;

	if(wymianaz.substring(1) == wymianana.substring(2))
	{
		document.getElementById("targinfo1").innerHTML = "Naprawde pytasz o wymiane tych samych towarów?Robisz ze mnie głupca?!";
		setTimeout (function wymianatowarowF1() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}
		//drewno
	else if(wymianaz == "zdrewno" && wymianana == "nakamien")
	{
		przelicznik = Math.round ((iloscdowymiany / 5)*100)/100;
	}
	else if(wymianaz == "zdrewno" && wymianana == "nazboze")
	{
		przelicznik = Math.round ((iloscdowymiany / 70)*100)/100;
	}
	
	else if(wymianaz == "zdrewno" && wymianana == "nazloto")
	{
		przelicznik = Math.round ((iloscdowymiany / 100)*100)/100;
	}


	//kamien
	else if(wymianaz == "zkamien" && wymianana == "nadrewno")
	{
		przelicznik = Math.round ((iloscdowymiany / 3)*100)/100;
	}
	else if(wymianaz == "zkamien" && wymianana == "nazboze")
	{
		przelicznik = Math.round ((iloscdowymiany / 70)*100)/100;
	}
	
	else if(wymianaz == "zkamien" && wymianana == "nazloto")
	{
		przelicznik = Math.round ((iloscdowymiany / 100)*100)/100;
	}


	//zboze
	else if(wymianaz == "zzboze" && wymianana == "nadrewno")
	{
		przelicznik = Math.round ((iloscdowymiany * 10)*100)/100;
	}
	else if(wymianaz == "zzboze" && wymianana == "nakamien")
	{
		przelicznik = Math.round ((iloscdowymiany * 5)*100)/100;
	}
	
	else if(wymianaz == "zzboze" && wymianana == "nazloto")
	{
		przelicznik = Math.round ((iloscdowymiany / 2)*100)/100;
	}


	//zloto
	else if(wymianaz == "zzloto" && wymianana == "nadrewno")
	{
		przelicznik = Math.round ((iloscdowymiany * 14)*100)/100;
	}
	else if(wymianaz == "zzloto" && wymianana == "nakamien")
	{
		przelicznik = Math.round ((iloscdowymiany * 7)*100)/100;
	}
	
	else if(wymianaz == "zzloto" && wymianana == "nazboze")
	{
		przelicznik = Math.round ((iloscdowymiany * 1)*100)/100;
	}
	
	document.getElementById("przelicznik1").innerHTML = przelicznik;
	
};

function wymianatowarowF2Check()
{
	if(targowiskolvl == 0)
	{
		document.getElementById("targinfo1").innerHTML = "Chcesz pohandlować? Wybuduj targowisko!";
		setTimeout (function wymianatowarowF1Check() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}
	else
	{
		wymianatowarowF2();
	}
}

function wymianatowarowF2()
{
	{
	
	var wymianaz = $('#surowce1').val();
	var wymianana = $('#surowce2').val();
	var iloscdowymiany = document.getElementById("wymianatowarow").value; 
	var przelicznik = 0;

	if(wymianaz.substring(1) == wymianana.substring(2))
	{
		document.getElementById("targinfo1").innerHTML = "Naprawde chcesz wymienić te same towary?Robisz ze mnie głupca?!";
		setTimeout (function wymianatowarowF2() { 
	$("#targinfo1").fadeOut(3000); }, 4000)
	$("#targinfo1").fadeIn(500);
	}
	
	//jak zamało
		else if ( wymianaz == "zdrewno" && s < iloscdowymiany )
		{ 
	document.getElementById("targinfo1").innerHTML = "Masz za mało drewno żeby dokonać wymiany";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
		}
		
		else if ( wymianaz == "zkamien" && s2 < iloscdowymiany )
		{ 
	document.getElementById("targinfo1").innerHTML = "Masz za mało kamienia żeby dokonać wymiany";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
		}
		
		else if ( wymianaz == "zzboze" && s3 < iloscdowymiany )
		{ 
	document.getElementById("targinfo1").innerHTML = "Masz za mało zboza żeby dokonać wymiany";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
		}
		
		else if ( wymianaz == "zzloto" && zloto < iloscdowymiany )
		{ 
	document.getElementById("targinfo1").innerHTML = "Masz za mało zlota żeby dokonać wymiany";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
		}
		//drewno
	else if(wymianaz == "zdrewno" && wymianana == "nakamien")
	{
		przelicznik = Math.round ((iloscdowymiany / 5)*100)/100;
		s = Math.round((s - iloscdowymiany)*100)/100;
		s2 = Math.round((s2 + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}
	else if(wymianaz == "zdrewno" && wymianana == "nazboze")
	{
		przelicznik = Math.round ((iloscdowymiany / 70)*100)/100;
		s = Math.round((s - iloscdowymiany)*100)/100;
		s3 = Math.round((s3 + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}
	
	else if(wymianaz == "zdrewno" && wymianana == "nazloto")
	{
		przelicznik = Math.round ((iloscdowymiany / 100)*100)/100;
		s = Math.round((s - iloscdowymiany)*100)/100;
		zloto = Math.round((zloto + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}


	//kamien
	else if(wymianaz == "zkamien" && wymianana == "nadrewno")
	{
		przelicznik = Math.round ((iloscdowymiany / 3)*100)/100;
		s2 = Math.round((s2 - iloscdowymiany)*100)/100;
		s = Math.round((s + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}
	else if(wymianaz == "zkamien" && wymianana == "nazboze")
	{
		przelicznik = Math.round ((iloscdowymiany / 70)*100)/100;
		s2 = Math.round((s2 - iloscdowymiany)*100)/100;
		s3 = Math.round((s3 + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}
	
	else if(wymianaz == "zkamien" && wymianana == "nazloto")
	{
		przelicznik = Math.round ((iloscdowymiany / 100)*100)/100;
		s2 = Math.round((s2 - iloscdowymiany)*100)/100;
		zloto = Math.round((zloto + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}


	//zboze
	else if(wymianaz == "zzboze" && wymianana == "nadrewno")
	{
		przelicznik = Math.round ((iloscdowymiany * 10)*100)/100;
		s3 = Math.round((s3 - iloscdowymiany)*100)/100;
		s = Math.round((s + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}
	else if(wymianaz == "zzboze" && wymianana == "nakamien")
	{
		przelicznik = Math.round ((iloscdowymiany * 5)*100)/100;
		s3 = Math.round((s3 - iloscdowymiany)*100)/100;
		s2 = Math.round((s2 + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}
	
	else if(wymianaz == "zzboze" && wymianana == "nazloto")
	{
		przelicznik = Math.round ((iloscdowymiany / 2)*100)/100;
		s3 = Math.round((s3 - iloscdowymiany)*100)/100;
		zloto = Math.round((zloto + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}


	//zloto
	else if(wymianaz == "zzloto" && wymianana == "nadrewno")
	{
		przelicznik = Math.round ((iloscdowymiany * 14)*100)/100;
		zloto = Math.round((zloto - iloscdowymiany)*100)/100;
		s = Math.round((s + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}
	else if(wymianaz == "zzloto" && wymianana == "nakamien")
	{
		przelicznik = Math.round ((iloscdowymiany * 7)*100)/100;
		zloto = Math.round((zloto - iloscdowymiany)*100)/100;
		s2 = Math.round((s2 + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}
	
	else if(wymianaz == "zzloto" && wymianana == "nazboze")
	{
		przelicznik = Math.round ((iloscdowymiany * 1)*100)/100;
		zloto = Math.round((zloto - iloscdowymiany)*100)/100;
		s3 = Math.round((s3 + przelicznik)*100)/100;
		document.getElementById("targinfo1").innerHTML = "Wymiana dokonana";
		setTimeout (function wymianatowarowF2() { 
		$("#targinfo1").fadeOut(3000); }, 4000)
		$("#targinfo1").fadeIn(500);
	}
	
	document.getElementById("przelicznik1").innerHTML = przelicznik;
	
};
};
///kupcy
var wolnikupcy = 0;
var wyslanikupcy = 0;
var kupcyMaurycy = 0;
var kupcyPlemowie = 0;
var kupcyNordyskowie = 0;

function populacja_kupcow()
	{	
		wyslanikupcy = kupcyMaurycy + kupcyPlemowie + kupcyNordyskowie;
		wolnikupcy = kupcy - wyslanikupcy; 
		document.getElementById("wolnikupcyD1").innerHTML = wolnikupcy;
		document.getElementById("wszyscykupcyD1").innerHTML = kupcy;
		document.getElementById("wolnikupcyD2").innerHTML = wolnikupcy;
		document.getElementById("wszyscykupcyD2").innerHTML = kupcy;
		document.getElementById("wolnikupcyD3").innerHTML = wolnikupcy;
		document.getElementById("wszyscykupcyD3").innerHTML = kupcy;
		document.getElementById("kupcyMaurycy1").innerHTML = kupcyMaurycy;
		document.getElementById("kupcyPlemowie1").innerHTML = kupcyPlemowie;
		document.getElementById("kupcyNordyskowie1").innerHTML = kupcyNordyskowie;
	};
	
function sprawdzhandelMaurycy()
{
	if(wolnikupcy>0)
	{
		kupcyMaurycy = kupcyMaurycy + 1;
	}
	else
	{
		document.getElementById("sprawdzhandelerror").innerHTML = "Nie masz wolnego kupca żeby wysłać kogoś do Mauryków";
		setTimeout (function () { 
		$("#sprawdzhandelerror").fadeOut(3000); }, 10000)
	}
};

function confijhandelMaurycy()
{
	if(kupcyMaurycy>0)
	{
		kupcyMaurycy = kupcyMaurycy - 1;
	}
	else
	{
		document.getElementById("sprawdzhandelerror").innerHTML = "Nie mamy wysłanych kupców do tego plemienia!";
		setTimeout (function () { 
		$("#sprawdzhandelerror").fadeOut(3000); }, 10000)
	}
};

function sprawdzhandelPlemowie()
{
	if(wolnikupcy>0)
	{
		kupcyPlemowie = kupcyPlemowie + 1;
	}
	else
	{
		document.getElementById("sprawdzhandelerror").innerHTML = "Nie masz wolnego kupca żeby wysłać kogoś do Plemów";
		setTimeout (function () { 
		$("#sprawdzhandelerror").fadeOut(3000); }, 10000)
	}
};

function confijhandelPlemowie()
{
	if(kupcyPlemowie>0)
	{
		kupcyPlemowie = kupcyPlemowie - 1;
	}
	else
	{
		document.getElementById("sprawdzhandelerror").innerHTML = "Nie mamy wysłanych kupców do tego plemienia!";
		setTimeout (function () { 
		$("#sprawdzhandelerror").fadeOut(3000); }, 10000)
	}
};

function sprawdzhandelNordyskowie()
{
	if(wolnikupcy>0)
	{
		kupcyNordyskowie = kupcyNordyskowie + 1;
	}
	else
	{
		document.getElementById("sprawdzhandelerror").innerHTML = "Nie masz wolnego kupca żeby wysłać kogoś do Nordysków";
		setTimeout (function () { 
		$("#sprawdzhandelerror").fadeOut(3000); }, 10000)
	}
};

function confijhandelNordyskowie()
{
	if(kupcyNordyskowie>0)
	{
		kupcyNordyskowie = kupcyNordyskowie - 1;
	}
	else
	{
		document.getElementById("sprawdzhandelerror").innerHTML = "Nie mamy wysłanych kupców do tego plemienia!";
		setTimeout (function () { 
		$("#sprawdzhandelerror").fadeOut(3000); }, 10000)
	}
};

var losowanie = setInterval( wartoschandlu, 35000);
var wartosckupcowNordyskowie = Math.round((Math.random()*90)+ 30)/100;
var wartosckupcowPlemowie = Math.round((Math.random()*60)+ 50)/100;
var wartosckupcowMaurycy = Math.round((Math.random()*30)+ 70)/100;

function wartoschandlu()
{
	wartosckupcowMaurycyF();
	wartosckupcowPlemowieF();
	wartosckupcowNordyskowieF();
};

function wartosckupcowMaurycyF()
{
	wartosckupcowMaurycy = Math.round((Math.round((Math.random()*15)+ 55)/100 + wydarzeniahandelzmaurykami  + Math.round((wplywnahandelMaurykowie + wplywnahandelYerisi)*100)/100)*100)/100;
	document.getElementById("wartosckupcowMaurycyD").innerHTML = wartosckupcowMaurycy;
};

function wartosckupcowPlemowieF()
{
	wartosckupcowPlemowie = Math.round((Math.round((Math.random()*30)+ 45)/100 + wydarzeniahandelzplemami + Math.round((wplywnahandelPlemowie + wplywnahandelMerkowie)*100)/100)*100)/100;
	document.getElementById("wartosckupcowPlemowieD").innerHTML = wartosckupcowPlemowie;
};

function wartosckupcowNordyskowieF()
{
	wartosckupcowNordyskowie = Math.round((Math.round((Math.random()*65)+ 35)/100 + wydarzeniahandelznordyskami + Math.round((wplywnahandelOpsydianie + wplywnahandelNordyskowie)*100)/100)*100)/100;
	document.getElementById("wartosckupcowNordyskowieD").innerHTML = wartosckupcowNordyskowie;
};

function naliczaniezlotazhandlu(wartosckupcowMaurycyF,wartosckupcowPlemowieF,wartosckupcowNordyskowieF)
{
	zloto = zloto + (kupcyMaurycy *  wartosckupcowMaurycy) + (kupcyPlemowie * wartosckupcowPlemowie ) + ( kupcyNordyskowie * wartosckupcowNordyskowie )
};
// mechanika wiary

var wszyscywierni = zoltoptactwo + radagoszcze + turupitianie;
var zoltoptactwo = 0;
var radagoszcze = 0;
var turupitianie = 0;
var glownareligia = "brak";
var glownareligianumer = 0;
var bezwiary = orsyanie - wszyscywierni;
var glownareligiabonus1 = 0;
var glownareligiabonus2 = 0;
var glownareligiabonus3 = 0;
var flagabonuszkrucjaty = 0;
var bonuszkrucjaty1 = 0;
var bonuszkrucjaty2 = 0;
var bonuszkrucjaty3 = 0;

var zmianywiernych = 0

function wierzeniaF()
{
	
		
		zoltoptactwo = zoltoptactwo + glownareligiabonus1 + Math.round((Math.random()*3)+ 0) ;
		radagoszcze = radagoszcze + glownareligiabonus2 + Math.round((Math.random()*3)+ 0)
		turupitianie = turupitianie + glownareligiabonus3 + Math.round((Math.random()*3)+ 0) ;
		wszyscywierni = zoltoptactwo + radagoszcze + turupitianie;
		bezwiary = orsyanie - wszyscywierni;
		document.getElementById("zolteptakiD").innerHTML = zoltoptactwo;
		document.getElementById("radagoszczeD").innerHTML = radagoszcze;
		document.getElementById("turupitianieD").innerHTML = turupitianie;
		document.getElementById("wszyscywierniD").innerHTML = wszyscywierni;
		document.getElementById("bezwiaryD").innerHTML = bezwiary;
		zmianywiernych1 = setInterval( wiaracheck, 5000);
		
		
};



function zmianywiernychF()
{
	
		zoltoptactwo = bonuszkrucjaty1 + zoltoptactwo + glownareligiabonus1 + Math.round((Math.random()*3)+ 0) ;
		radagoszcze = bonuszkrucjaty2 + radagoszcze + glownareligiabonus2 + Math.round((Math.random()*3)+ 0) ;
		turupitianie = bonuszkrucjaty3 + turupitianie + glownareligiabonus3 + Math.round((Math.random()*3)+ 0) ;
		wszyscywierni = zoltoptactwo + radagoszcze + turupitianie;
		bezwiary = orsyanie - wszyscywierni;
		document.getElementById("zolteptakiD").innerHTML = zoltoptactwo;
		document.getElementById("radagoszczeD").innerHTML = radagoszcze;
		document.getElementById("turupitianieD").innerHTML = turupitianie;
	document.getElementById("wszyscywierniD").innerHTML = wszyscywierni;
	document.getElementById("bezwiaryD").innerHTML = bezwiary;
	
};

function wiaracheck()
{
	if(wszyscywierni<orsyanie - 9)
	{
	var stopcheckingfaith = false;
	{
	if(zmianywiernych == 0)
	{
			stopcheckingfaith = true;
    }
	}
	
	if (stopcheckingfaith == true)
	{
		zmianywiernych = setInterval( zmianywiernychF, 5000);
	}

else 
{
	zmianywiernych = zmianywiernych;

}	
	
	}
	else if(wszyscywierni>orsyanie - 9)
	{
		
		clearInterval(zmianywiernych);
		zmianywiernych = 0;
		
		
	}
niepokojreligijnyF();
niepokojreligijnyF2();
bonusilosciwyznawcowF();
};

var roznicawiernych = 0

function spadekwiary()
{
	if(kosciollvl==1)
	{
	if(wszyscywierni>=orsyanie)
	{
		roznicawiernych = orsyanie - wszyscywierni;
		zoltoptactwo = zoltoptactwo + Math.ceil(roznicawiernych/3);
		radagoszcze = radagoszcze + Math.ceil(roznicawiernych/3);
		turupitianie = turupitianie + Math.ceil(roznicawiernych/3);
		wszyscywierni = zoltoptactwo + radagoszcze + turupitianie;
		bezwiary = orsyanie - wszyscywierni;
		document.getElementById("zolteptakiD").innerHTML = zoltoptactwo;
		document.getElementById("radagoszczeD").innerHTML = radagoszcze;
		document.getElementById("turupitianieD").innerHTML = turupitianie;
	document.getElementById("wszyscywierniD").innerHTML = wszyscywierni;
	document.getElementById("bezwiaryD").innerHTML = bezwiary;
	}
	bezwiary = orsyanie - wszyscywierni;
	document.getElementById("bezwiaryD").innerHTML = bezwiary;
	
	}
};

function zoltoptactwoclick()
{
	if(kosciollvl == 1 && glownareligianumer == 0)
	{
	glownareligia = "Żolto Ptactwo"
	glownareligianumer = 1;
	document.getElementById("glownareligiaD").innerHTML = glownareligia;
	glownareligiaF();
	}
	else if(kosciollvl == 0)
	{
		document.getElementById("errorReligia").innerHTML = "Wybuduj kościół";
	setTimeout (function zoltoptactwoclick() { 
$("#errorReligia").fadeOut(3000); }, 4000)
	$("#errorReligia").fadeIn(500);}
	else
		document.getElementById("errorReligia").innerHTML = "Już wybrałeś główną religie";
		setTimeout (function zoltoptactwoclick() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);
};

function radagoszczeclick()
{
	if(kosciollvl == 1 && glownareligianumer == 0)
	{
	glownareligia = "Radogoszcze"
	glownareligianumer = 2;
	document.getElementById("glownareligiaD").innerHTML = glownareligia;
	glownareligiaF();
	}
	else if(kosciollvl == 0)
	{
		document.getElementById("errorReligia").innerHTML = "Wybuduj kościół";
	setTimeout (function radagoszczeclick() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);
	}
	
	else
		document.getElementById("errorReligia").innerHTML = "Już wybrałeś główną religie";
	setTimeout (function radagoszczeclick() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);
};

function turupitianieclick() //nemizianie
{
	if(kosciollvl == 1 && glownareligianumer == 0)
	{
	glownareligia = "Nemizianie"
	glownareligianumer = 3;
	document.getElementById("glownareligiaD").innerHTML = glownareligia;
	glownareligiaF();
	}
	else if(kosciollvl == 0)
	{
		document.getElementById("errorReligia").innerHTML = "Wybuduj kościół";
	setTimeout (function turupitianieclick() { 
$("#errorReligia").fadeOut(3000); }, 4000)
	$("#errorReligia").fadeIn(500);}
	else
		document.getElementById("errorReligia").innerHTML = "Już wybrałeś główną religie";
		setTimeout (function turupitianieclick() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);
};

function glownareligiaF()
{
	if(glownareligia == "Żolto Ptactwo")
	{
		glownareligiabonus1 = 2;
	}
	else if (glownareligia == "Radogoszcze")
	{
		glownareligiabonus2 = 2;
	}
	else if (glownareligia == "Nemizianie")
	{
		glownareligiabonus3 = 2;
	}
};


 function czystkaPtaki()
{
	if(zoltoptactwo > 3 && kosciollvl == 1)
	{
	
	riots = riots + 0.5;
	zoltoptactwo = Math.round(zoltoptactwo - (zoltoptactwo * 0.3));
	document.getElementById("zolteptakiD").innerHTML = zoltoptactwo;
	document.getElementById("radagoszczeD").innerHTML = radagoszcze;
	document.getElementById("turupitianieD").innerHTML = turupitianie;
	document.getElementById("wszyscywierniD").innerHTML = wszyscywierni;
	document.getElementById("bezwiaryD").innerHTML = bezwiary;
	document.getElementById("errorReligia").innerHTML = "Doszło do czystki wyznawców Żółtego ptaka, ilość wyznawców zmalała o 30%";
	setTimeout (function czystkaPtaki() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);
	}
	else if(kosciollvl == 0)
	{
		document.getElementById("errorReligia").innerHTML = "Wybuduj Kościół";
		setTimeout (function czystkaPtaki() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);
	}
	else
	document.getElementById("errorReligia").innerHTML = "Za mało wyznawców Żółtego ptaka, żeby móc przeprowadzić czystkę";
		setTimeout (function czystkaPtaki() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);	
};

 function czystkaRadogoszcz()
{
	if(radagoszcze > 3 && kosciollvl == 1)
	{
	
	riots = riots + 0.5;
	radagoszcze = Math.round (radagoszcze - (radagoszcze * 0.3));
	document.getElementById("zolteptakiD").innerHTML = zoltoptactwo;
	document.getElementById("radagoszczeD").innerHTML = radagoszcze;
	document.getElementById("turupitianieD").innerHTML = turupitianie;
	document.getElementById("wszyscywierniD").innerHTML = wszyscywierni;
	document.getElementById("bezwiaryD").innerHTML = bezwiary;
	document.getElementById("errorReligia").innerHTML = "Doszło do czystki wyznawców Radogoszcza, ilość wyznawców zmalała o 30%";
	setTimeout (function czystkaRadogoszcz() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);
	}
	else if(kosciollvl == 0)
	{
		document.getElementById("errorReligia").innerHTML = "Wybuduj Kościół";
		setTimeout (function czystkaRadogoszcz() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);
	}
	else
	document.getElementById("errorReligia").innerHTML = "Za mało wyznawców Radogoszcza, żeby móc przeprowadzić czystkę";
		setTimeout (function czystkaPtaki() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);	
};


 function czystkaNemiz()
{
	if(turupitianie > 3 && kosciollvl == 1)
	{
	
	riots = riots + 0.5;
	turupitianie = Math.round(turupitianie - (turupitianie * 0.3));
	document.getElementById("zolteptakiD").innerHTML = zoltoptactwo;
	document.getElementById("radagoszczeD").innerHTML = radagoszcze;
	document.getElementById("turupitianieD").innerHTML = turupitianie;
	document.getElementById("wszyscywierniD").innerHTML = wszyscywierni;
	document.getElementById("bezwiaryD").innerHTML = bezwiary;
	document.getElementById("errorReligia").innerHTML = "Doszło do czystki wyznawców Nemiza, ilość wyznawców zmalała o 30%";
	setTimeout (function czystkaNemiz() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);
	}
	else if(kosciollvl == 0)
	{
		document.getElementById("errorReligia").innerHTML = "Wybuduj Kościół";
		setTimeout (function czystkaPtaki() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);
	}
	else
	document.getElementById("errorReligia").innerHTML = "Za mało wyznawców Nemiza, żeby móc przeprowadzić czystkę";
		setTimeout (function czystkaNemiz() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);	
};

var niepokojreligijny = 0
var wzrostniepokojureligijnego = 0

function niepokojreligijnyF()
{
	if(glownareligia == "Żolto Ptactwo" && zoltoptactwo < radagoszcze + turupitianie)
	{
		wzrostniepokojureligijnego = 1;
		document.getElementById("errorReligia").innerHTML = "Wzrastają niepokoje religijne, zwiększ ilość wyznawców głównej religii względem innych. Jak osiągną 100 to zacznie rosnąć wk**rwienie";
		setTimeout (function niepokojreligijnyF() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);	
	}
	else if(glownareligia == "Radogoszcze" && radagoszcze < zoltoptactwo + turupitianie)
	{
		wzrostniepokojureligijnego = 1;
		document.getElementById("errorReligia").innerHTML = "Wzrastają niepokoje religijne, zwiększ ilość wyznawców głównej religii względem innych. Jak osiągną 100 to zacznie rosnąć wk**rwienie";
		setTimeout (function niepokojreligijnyF() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);	
	}
	else if(glownareligia == "Nemizianie" && turupitianie  < radagoszcze + zoltoptactwo)
	{
		wzrostniepokojureligijnego = 1;
		document.getElementById("errorReligia").innerHTML = "Wzrastają niepokoje religijne, zwiększ ilość wyznawców głównej religii względem innych. Jak osiągną 100 to zacznie rosnąć wk**rwienie";
		setTimeout (function niepokojreligijnyF() { 
$("#errorReligia").fadeOut(3000); }, 4000)
$("#errorReligia").fadeIn(500);	
	}
	else if (glownareligia !== "brak")
	{
		
	if(niepokojreligijny>0)
	{
		wzrostniepokojureligijnego = (-1);
	document.getElementById("errorReligia").innerHTML = "Niepokoje religijne maleją";
		setTimeout (function niepokojreligijnyF() { 
$("#errorReligia").fadeOut(3000); }, 4000)
	$("#errorReligia").fadeIn(500);}
else
	wzrostniepokojureligijnego = 0;
	}
};

function niepokojreligijnyF2()
{
	niepokojreligijny = niepokojreligijny + wzrostniepokojureligijnego;
	niepokojreligijny < 101;
	if(niepokojreligijny == 100)
	{
		riots = riots + 1;
	}
	else if (niepokojreligijny > 100)
	{
		niepokojreligijny = 100;
	}
	document.getElementById("niepokojreligijnyD").innerHTML = niepokojreligijny;
};

var nemizzboze = 0;
var nemizludzie = 0;
var pomnikreligia = 1;
var silawojownikow = 1;
var radogoszczekamien = 0;
var radogoszczedrewno = 0;

function bonusilosciwyznawcowF()
{
	if(glownareligia == "Żolto Ptactwo" && zoltoptactwo > radagoszcze + turupitianie)
	{
		zloto = Math.round((zloto + 0.1)*100)/100;
		pomnikreligia = 2;
		document.getElementById("bonusreligijny1").innerHTML = "bonus do zlota i podwojone bonusy z pomnika bohatera";
		setTimeout (function bonusilosciwyznawcowF() { 
$("#bonusreligijny1").fadeOut(3000); }, 4000)
$("#bonusreligijny1").fadeIn(500);
	}
		else if(glownareligia == "Radogoszcze" && radagoszcze > zoltoptactwo + turupitianie)
			{
				silawojownikow = 2;
				radogoszczekamien = 0.3 * kamieniolomlvl
				radogoszczedrewno = 0.3 * chata_drwalalvl
				document.getElementById("bonusreligijny2").innerHTML = "bonus do sily wojów oraz bonus do kamienia i drewna";
				setTimeout (function bonusilosciwyznawcowF() { 
$("#bonusreligijny2").fadeOut(3000); }, 4000)
$("#bonusreligijny2").fadeIn(500);
			}
		else if(glownareligia == "Nemizianie" && turupitianie  > radagoszcze + zoltoptactwo)
		{
			hope = Math.round((hope + 0.05)*100)/100;
			nemizzboze = 0.3 * farmalvl;
			nemizludzie = Math.round(orsyanie*0.1);
			document.getElementById("bonusreligijny3").innerHTML = "bonus do nadzieji, zboza i przybywania ludzi";
			setTimeout (function bonusilosciwyznawcowF() { 
$("#bonusreligijny3").fadeOut(3000); }, 4000)
$("#bonusreligijny3").fadeIn(500);
		}
};
//wojsko

var bitwalvl = 1;
var bitwalvlOps = 1;
var bitwalvlYer = 1;
var bitwalvlKru = 1;
var tarczownicy = 0;
var miecznicy = 0;
var konni = 0;
var armia = tarczownicy + miecznicy + konni
var silaarmii = ((tarczownicy*1) + (miecznicy*3) + (konni*5))*silawojownikow + silaarmiianomaliapogodowa;

var kosztwojsk = 0

function tarczownikrekrutacja()
{
	if(zloto>= 5 && s3 >= 10 && koszarylvl > 0 && bezrobotni > 0)
	{
		zloto = zloto - 5;
		s3 = s3 - 10;
		tarczownicy = tarczownicy + 1
		
		document.getElementById("armeeinfo").innerHTML = "Do Twojej drużyny dołączył Tarczownik";
		armia = tarczownicy + miecznicy + konni
		silaarmii = ((tarczownicy*1) + (miecznicy*3) + (konni*5))*silawojownikow + silaarmiianomaliapogodowa;
		document.getElementById("tarczownicyD").innerHTML = tarczownicy;
		
		
		

		document.getElementById("silaarmiiD").innerHTML = silaarmii;
		setTimeout (function tarczownikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	else if (koszarylvl< 1)
	{
		document.getElementById("armeeinfo").innerHTML = "Nie mamy gdzie zakwaterować tarczownika, wybuduj koszary!";
		setTimeout (function tarczownikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	
	else if (zloto < 5 || s3 < 10)
	{
		document.getElementById("armeeinfo").innerHTML = "Niestać Cię na tarczownika";
		setTimeout (function tarczownikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	
	else 
	{
		document.getElementById("armeeinfo").innerHTML = "Brak nam wolnych ludzi!";
		setTimeout (function tarczownikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
};

function miecznikrekrutacja()
{
	if(zloto>= 10 && s3 >= 30 && koszarylvl > 1 && bezrobotni > 0)
	{
		zloto = zloto - 10;
		s3 = s3 - 30;
		miecznicy = miecznicy + 1
		
		document.getElementById("armeeinfo").innerHTML = "Do Twojej drużyny dołączył Miecznik";
			armia = tarczownicy + miecznicy + konni
		silaarmii = ((tarczownicy*1) + (miecznicy*3) + (konni*5))*silawojownikow + silaarmiianomaliapogodowa;
		document.getElementById("miecznicyD").innerHTML = miecznicy;
	
		document.getElementById("silaarmiiD").innerHTML = silaarmii;
		setTimeout (function miecznikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	else if (koszarylvl == 0)
	{
		document.getElementById("armeeinfo").innerHTML = "Nie mamy gdzie zakwaterować Miecznika, wybuduj koszary! Aby zrekrutować Mieczników musisz wybudować poziom 2 koszar";
		setTimeout (function miecznikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	
	else if (koszarylvl < 2)
	{
		document.getElementById("armeeinfo").innerHTML = "Za niski poziom koszar żeby zrekrutować Miecznika, Rozbuduj koszary do poziomu 2!";
		setTimeout (function miecznikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	
	else if (zloto < 10 || s3 < 30)
	{
		document.getElementById("armeeinfo").innerHTML = "Niestać Cię na Miecznika";
		setTimeout (function miecznikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	else 
	{
		document.getElementById("armeeinfo").innerHTML = "Brak nam wolnych ludzi!";
		setTimeout (function tarczownikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
};

function konnyrekrutacja()
{
	if(zloto>= 15 && s3 >= 50 && koszarylvl > 2 && bezrobotni > 0)
	{
		zloto = zloto - 15;
		s3 = s3 - 50;
		konni = konni + 1
		
		document.getElementById("armeeinfo").innerHTML = "Do Twojej drużyny dołączył Konny";
		armia = tarczownicy + miecznicy + konni
		silaarmii = ((tarczownicy*1) + (miecznicy*3) + (konni*5))*silawojownikow + silaarmiianomaliapogodowa;
		document.getElementById("konniD").innerHTML = konni;

		document.getElementById("silaarmiiD").innerHTML = silaarmii;
		setTimeout (function konnyrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	else if (koszarylvl == 0 )
	{
		document.getElementById("armeeinfo").innerHTML = "Nie mamy gdzie zakwaterować Konnego, wybuduj koszary! Aby zrekrutować Konnych musisz wybudować poziom 3 koszar";
		setTimeout (function miecznikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	
	else if (koszarylvl< 3)
	{
		document.getElementById("armeeinfo").innerHTML = "Za niski poziom koszar żeby zrekrutować Konnego, Rozbuduj koszary do poziomu 3!";
		setTimeout (function konnyrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	
	else if (zloto < 15 || s3 < 50)
	{
		document.getElementById("armeeinfo").innerHTML = "Niestać Cię na Konnego";
		setTimeout (function konnyrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
	else 
	{
		document.getElementById("armeeinfo").innerHTML = "Brak nam wolnych ludzi!";
		setTimeout (function tarczownikrekrutacja() { 
$("#armeeinfo").fadeOut(3000); }, 4000)
$("#armeeinfo").fadeIn(500);
	}
};

var activebattleexpedition = 0
function aktywnewyprawywojenne()
{
	// if battle expedition is active than block other options
};


var	silamerkow = Math.floor(populacjamerkow * 0.1);

var silayerisow = Math.floor(populacjayerisow * 0.1);

var silaopsydian = Math.floor(populacjaopsydian * 0.1);

var silakrucjata = Math.floor(Math.random() * 10 -8) ;
var iloscwyprawnamerkow = 0;
var potrzebnewojskonamerkow = 10 + (iloscwyprawnamerkow * 10);
var iloscwyprawnaopsydian = 0;
var potrzebnewojskonaopsydian = 15  + (iloscwyprawnaopsydian * 15 );
var iloscwyprawnayerisow = 0;
var potrzebnewojskonayerisow = 5 + (iloscwyprawnayerisow * 5);
var iloscwyprawnakrucjate = 0;
var potrzebnewojskonakrucjate = 15 + (potrzebnewojskonakrucjate * 5);
var prowadzonawyprawa = 0;
var statusbitywyflagaOps = 0;

function silywojskplemion()
{
 populacjamerkow = Math.floor(orsyanie * 1.5 * wydarzenialosoweplemionmer)
 silamerkow = Math.floor(populacjamerkow * 0.1) ;
 
 populacjaopsydian = Math.floor(orsyanie * 2 * wydarzenialosoweplemionops);
 silaopsydian = Math.floor(populacjaopsydian * 0.1);
 
 populacjayerisow = orsyanie * wydarzenialosoweplemionyer;
 silayerisow = Math.floor(populacjayerisow * 0.1);
 
 silakrucjata = Math.floor(Math.random() * 10 -8) ;

 
};

//krucjata
var bitwakrotkaodliczaniekru;
	var bitwakrotkastartkru = 0;
	var bitwakrotkakru = 9;
	
	var bitwadlugabitwakrotkaodliczaniekru;
	var bitwadlugastartkru = 1;
    var bitwadlugakru = 35; 
	var roznicawojskKru;
	
	  
    function bitwakrotkaFkru()
        {
			
			if(bitwakrotkastartkru==1)
			{
			document.getElementById("dlugoscbitwy10secDops").innerHTML = "Do bitwy dojdzie za:" + bitwakrotkakru;
			setTimeout (function bitwakrotkaFkru() { 
			$("#dlugoscbitwy10secDops").fadeOut(1000); }, 8800)
			$("#dlugoscbitwy10secDops").fadeIn(500);
            bitwakrotkakru = bitwakrotkakru-1;


				if (bitwakrotkakru < 0)
				{
				 bitwakrotkakru = 0;
				 bitwakrotkastartkru = 0
				}
	  
            bitwakrotkaodliczaniekru = setTimeout("bitwakrotkaFkru()",1000);
			}
			
				if(bitwakrotkastartkru == 0)
				{
					clearTimeout(bitwakrotkaodliczaniekru);
					bitwakrotkakru = 9;
				};
			
			
        }
		
		
		
		
		 
		  function bitwadlugakruFCheck()
		  {
			  if(bitwadlugastartkru == 1)
			  {
				  bitwadlugakruF();
			  }
				else if(bitwadlugastartkru == 0)
						{
	
						bitwadlugakru = 36;
						bitwadlugakruF();
						};			  
			  
		  };
	  
		  
    function bitwadlugakruF()
        {
           
		   
            bitwadlugakru = bitwadlugakru-1;
			bitwadlugabitwakrotkaodliczaniekru = setTimeout("bitwadlugakruF()",1000);

if (bitwadlugakru == 25  )
{
	document.getElementById("dlugoscbitwy9secD").innerHTML = "Już ich widać wodzu! Będą walczyć w cieniu pomnika swojego Boga! Bóg znami, rozbić niewiernych!"
	setTimeout (function bitwadlugakruF() { 
	$("#dlugoscbitwy9secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy9secD").fadeIn(500);
	poziombitwyKru();
}
else if (bitwadlugakru == 22)
{
	document.getElementById("dlugoscbitwy11secD").innerHTML = "Idą mocno, to będzie cięzki bój!"
	setTimeout (function bitwadlugakruF() { 
	$("#dlugoscbitwy11secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy11secD").fadeIn(500);
	poziombitwyKru();
}

else if (bitwadlugakru == 18)
{
	document.getElementById("dlugoscbitwy13secD").innerHTML = "Nie zauważyli naszego manweru do środka! Już ich mamy wodzu!"
	setTimeout (function bitwadlugakruF() { 
	$("#dlugoscbitwy13secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy13secD").fadeIn(500);
	poziombitwyKru();
}
else if (bitwadlugakru == 14)
{
	document.getElementById("dlugoscbitwy15secD").innerHTML = "O nie! Przejrzeli nas! Odłączyli część sił z flanki i spadną z naszymi na centrum!"
	setTimeout (function bitwadlugakruF() { 
	$("#dlugoscbitwy15secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy15secD").fadeIn(500);
	poziombitwyKru();
}
else if (bitwadlugakru == 10)
{
	document.getElementById("dlugoscbitwy17secD").innerHTML = "Nikt nie wie co będzie dalej, straszny kurz nic nie widać!"
	setTimeout (function bitwadlugakruF() { 
	$("#dlugoscbitwy17secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy17secD").fadeIn(500);
	poziombitwyKru();
}
else if (bitwadlugakru == 8)
{
	document.getElementById("dlugoscbitwy17secD").innerHTML = "Ktoś wyłania się z kurzu na północy, czy to nasi?! Mnogo zabitych..."
	setTimeout (function bitwadlugakruF() { 
	$("#dlugoscbitwy17secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy17secD").fadeIn(500);
	poziombitwyKru();
}
else if (bitwadlugakru == 3)
{
	document.getElementById("dlugoscbitwy17secD").innerHTML = "Nikt nie wie co będzie dalej, straszny kurz nic nie widać!"
	setTimeout (function bitwadlugakruF() { 
	$("#dlugoscbitwy17secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy17secD").fadeIn(500);
	poziombitwyKru();
}



              else if (bitwadlugakru < 0)
   {
		 bitwadlugakru = 0;
		 
		bitwadlugastartkru = 0;
		clearTimeout(bitwadlugabitwakrotkaodliczaniekru);
		
      }
	 
            
		   

        };

//koniec krucjata

//yerisi
var bitwakrotkaodliczanieyer;
	var bitwakrotkastartyer = 0;
	var bitwakrotkayer = 9;
	
	var bitwadlugabitwakrotkaodliczanieyer;
	var bitwadlugastartyer = 1;
    var bitwadlugayer = 29; 
	var roznicawojskYer;
	
	  
    function bitwakrotkaFyer()
        {
			
			if(bitwakrotkastartyer==1)
			{
           document.getElementById("dlugoscbitwy10secDops").innerHTML = "Do bitwy dojdzie za:" + bitwakrotkayer;
		   setTimeout (function bitwakrotkaFyer() { 
		$("#dlugoscbitwy10secDops").fadeOut(1000); }, 8800)
		$("#dlugoscbitwy10secDops").fadeIn(500);
            bitwakrotkayer = bitwakrotkayer-1;


              if (bitwakrotkayer < 0)
   {
		 bitwakrotkayer = 0;
		 bitwakrotkastartyer = 0
      }
	  
            bitwakrotkaodliczanieyer = setTimeout("bitwakrotkaFyer()",1000);
			}
			
			if(bitwakrotkastartyer == 0)
{
	clearTimeout(bitwakrotkaodliczanieyer);
	bitwakrotkayer = 9;
};
			
			
        }
		
		
		
		
		 
		  function bitwadlugayerFCheck()
		  {
			  if(bitwadlugastartyer == 1)
			  {
				  bitwadlugayerF();
			  }
				else if(bitwadlugastartyer == 0)
						{
	
						bitwadlugayer = 30;
						bitwadlugayerF();
						};			  
			  
		  };
	  
		  
    function bitwadlugayerF()
        {
           
		   
            bitwadlugayer = bitwadlugayer-1;
			bitwadlugabitwakrotkaodliczanieyer = setTimeout("bitwadlugayerF()",1000);

if (bitwadlugayer == 19  )
{
	document.getElementById("dlugoscbitwy9secD").innerHTML = "Ruszyli na siebie, Nasze centrum idzie bardzo mocno... ZWARCIE!"
	setTimeout (function bitwadlugayerF() { 
	$("#dlugoscbitwy9secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy9secD").fadeIn(500);
	poziombitwyYer();
}
else if (bitwadlugayer == 15)
{
	document.getElementById("dlugoscbitwy11secD").innerHTML = "Prawa flanka się chwieje!"
	setTimeout (function bitwadlugayerF() { 
	$("#dlugoscbitwy11secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy11secD").fadeIn(500);
	poziombitwyYer();
}

else if (bitwadlugayer == 11)
{
	document.getElementById("dlugoscbitwy13secD").innerHTML = "Prawa się cofa ale środek trzyma sie mocno!"
	setTimeout (function bitwadlugayerF() { 
	$("#dlugoscbitwy13secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy13secD").fadeIn(500);
	poziombitwyYer();
}
else if (bitwadlugayer == 7)
{
	document.getElementById("dlugoscbitwy15secD").innerHTML = "Wodzu, odwody przeszły na prawą flanke!"
	setTimeout (function bitwadlugayerF() { 
	$("#dlugoscbitwy15secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy15secD").fadeIn(500);
	poziombitwyYer();
}
else if (bitwadlugayer == 3)
{
	document.getElementById("dlugoscbitwy17secD").innerHTML = "Bitwa zmierza ku końcowi, jeszcze nie wiemy jak to się skończy"
	setTimeout (function bitwadlugayerF() { 
	$("#dlugoscbitwy17secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy17secD").fadeIn(500);
	poziombitwyYer();
}



              else if (bitwadlugayer < 0)
   {
		 bitwadlugayer = 0;
		 
		bitwadlugastartyer = 0;
		clearTimeout(bitwadlugabitwakrotkaodliczanieyer);
		
      }
	 
            
		   

        };

//koniec yerisow

var bitwakrotkaodliczanieops;
	var bitwakrotkastartops = 0;
	var bitwakrotkaops = 9;
	
	var bitwadlugabitwakrotkaodliczanieops;
	var bitwadlugastartops = 1;
    var bitwadlugaops = 29; 
	var roznicawojskOps;
	
	  
    function bitwakrotkaFops()
        {
			
			if(bitwakrotkastartops==1)
			{
           document.getElementById("dlugoscbitwy10secDops").innerHTML = "Do bitwy dojdzie za:" + bitwakrotkaops;
		   setTimeout (function bitwakrotkaFops() { 
		$("#dlugoscbitwy10secDops").fadeOut(1000); }, 8800)
		$("#dlugoscbitwy10secDops").fadeIn(500);
            bitwakrotkaops = bitwakrotkaops-1;


              if (bitwakrotkaops < 0)
   {
		 bitwakrotkaops = 0;
		 bitwakrotkastartops = 0
      }
	  
            bitwakrotkaodliczanieops = setTimeout("bitwakrotkaFops()",1000);
			}
			
			if(bitwakrotkastartops == 0)
{
	clearTimeout(bitwakrotkaodliczanieops);
	bitwakrotkaops = 9;
};
			
			
        }
		
		
		
		
		 
		  function bitwadlugaopsFCheck()
		  {
			  if(bitwadlugastartops == 1)
			  {
				  bitwadlugaopsF();
			  }
				else if(bitwadlugastartops == 0)
						{
	
						bitwadlugaops = 30;
						bitwadlugaopsF();
						};			  
			  
		  };
	  
		  
    function bitwadlugaopsF()
        {
           
		   
            bitwadlugaops = bitwadlugaops-1;
			bitwadlugabitwakrotkaodliczanieops = setTimeout("bitwadlugaopsF()",1000);

if (bitwadlugaops == 19  )
{
	document.getElementById("dlugoscbitwy9secD").innerHTML = "Ruszyli na siebie, Nasze centrum idzie bardzo mocno, piechota nieco z tyłu..."
	setTimeout (function bitwadlugaopsF() { 
	$("#dlugoscbitwy9secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy9secD").fadeIn(500);
	poziombitwyOps();
}
else if (bitwadlugaops == 15)
{
	document.getElementById("dlugoscbitwy11secD").innerHTML = "Krwawo w centrum, flanki coraz bliżej celu!"
	setTimeout (function bitwadlugaopsF() { 
	$("#dlugoscbitwy11secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy11secD").fadeIn(500);
	poziombitwyOps();
}

else if (bitwadlugaops == 12)
{
	document.getElementById("dlugoscbitwy13secD").innerHTML = "Prawa i centrum w pełnym zwarciu, na lewej harce!"
	setTimeout (function bitwadlugaopsF() { 
	$("#dlugoscbitwy13secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy13secD").fadeIn(500);
	poziombitwyOps();
}
else if (bitwadlugaops == 9)
{
	document.getElementById("dlugoscbitwy15secD").innerHTML = "Wodzu lewa ledwo sie trzyma! W centrum i na prawej opada kurz"
	setTimeout (function bitwadlugaopsF() { 
	$("#dlugoscbitwy15secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy15secD").fadeIn(500);
	poziombitwyOps();
}
else if (bitwadlugaops == 6)
{
	document.getElementById("dlugoscbitwy17secD").innerHTML = "Nadchodzi zmierzch, aczkolwiek nikt nie daje za wygraną!"
	setTimeout (function bitwadlugaopsF() { 
	$("#dlugoscbitwy17secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy17secD").fadeIn(500);
	poziombitwyOps();
}
else if (bitwadlugaops == 3)
{
	document.getElementById("dlugoscbitwy17secD").innerHTML = "Bitwa zmierza ku końcowi, jeszcze nie wiemy jak to się skończy"
	setTimeout (function bitwadlugaopsF() { 
	$("#dlugoscbitwy17secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy17secD").fadeIn(500);
	poziombitwyOps();
}



              else if (bitwadlugaops < 0)
   {
		 bitwadlugaops = 0;
		 
		bitwadlugastartops = 0;
		clearTimeout(bitwadlugabitwakrotkaodliczanieops);
		
      }
	 
            
		   

        };



var roznicawojsk;
//// Merkowie start
	var odliczanie;
	var odliczaniestart = 0;
	var odliczanie1;
	var odliczaniestart1 = 1;
      var dlugoscbitwy9sec = 9;
    function dlugoscbitwy9secF()
        {
			
			if(odliczaniestart==1)
			{
           document.getElementById("dlugoscbitwy10secD").innerHTML = "Do bitwy dojdzie za:" + dlugoscbitwy9sec;
		   setTimeout (function dlugoscbitwy9secF() { 
		$("#dlugoscbitwy10secD").fadeOut(1000); }, 8800)
		$("#dlugoscbitwy10secD").fadeIn(500);
            dlugoscbitwy9sec = dlugoscbitwy9sec-1;


              if (dlugoscbitwy9sec < 0)
   {
		 dlugoscbitwy9sec = 0;
		 odliczaniestart = 0
      }
	  
            odliczanie = setTimeout("dlugoscbitwy9secF()",1000);
			}
			
			if(odliczaniestart == 0)
{
	clearTimeout(odliczanie);
	dlugoscbitwy9sec = 9;
};
			
			
        }
		
		
		
		
		  var dlugoscbitwy19sec = 32;
		  function dlugoscbitwy19secFCHECK()
		  {
			  if(odliczaniestart1 == 1)
			  {
				  dlugoscbitwy19secF();
			  }
				else if(odliczaniestart1 == 0)
						{
	
						dlugoscbitwy19sec = 33;
						dlugoscbitwy19secF();
						};			  
			  
		  };
	  
		  
    function dlugoscbitwy19secF()
        {
           
		   
            dlugoscbitwy19sec = dlugoscbitwy19sec-1;
			odliczanie1 = setTimeout("dlugoscbitwy19secF()",1000);

if (dlugoscbitwy19sec == 22  )
{
	document.getElementById("dlugoscbitwy9secD").innerHTML = "Przeklęte dzikusy chowały się w górach! Silne zgrupowanie na trakcie!"
	setTimeout (function wyprawanamerkow() { 
	$("#dlugoscbitwy9secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy9secD").fadeIn(500);
	poziombitwy();
}
else if (dlugoscbitwy19sec == 17)
{
	document.getElementById("dlugoscbitwy11secD").innerHTML = "Idą mocno na całej linii!"
	setTimeout (function wyprawanamerkow() { 
	$("#dlugoscbitwy11secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy11secD").fadeIn(500);
	poziombitwy();
}

else if (dlugoscbitwy19sec == 13)
{
	document.getElementById("dlugoscbitwy13secD").innerHTML = "Mocne zderzenie w centrum! Nad strumieniem coraz bliżej!"
	setTimeout (function wyprawanamerkow() { 
	$("#dlugoscbitwy13secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy13secD").fadeIn(500);
	poziombitwy();
}
else if (dlugoscbitwy19sec == 10)
{
	document.getElementById("dlugoscbitwy15secD").innerHTML = "Straszny kocioł nic nie widać!"
	setTimeout (function wyprawanamerkow() { 
	$("#dlugoscbitwy15secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy15secD").fadeIn(500);
	poziombitwy();
}
else if (dlugoscbitwy19sec == 7)
{
	document.getElementById("dlugoscbitwy17secD").innerHTML = "Powoli opada kurz, to nasi się cofają czy to oni?!"
	setTimeout (function wyprawanamerkow() { 
	$("#dlugoscbitwy17secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy17secD").fadeIn(500);
	poziombitwy();
}
else if (dlugoscbitwy19sec == 3)
{
	document.getElementById("dlugoscbitwy17secD").innerHTML = "Bitwa zmierza ku końcowi, jeszcze nie wiemy jak to wszystko się skończy!"
	setTimeout (function wyprawanamerkow() { 
	$("#dlugoscbitwy17secD").fadeOut(3000); }, 8000)
	$("#dlugoscbitwy17secD").fadeIn(500);
	poziombitwy();
}



              else if (dlugoscbitwy19sec < 0)
   {
		 dlugoscbitwy19sec = 0;
		 
		odliczaniestart1 = 0;
		clearTimeout(odliczanie1);
		
      }
	 
            
		   

        };



var zolnierzenamerkow = 0;




function wyprawanamerkow()
{
	zolnierzenamerkow = document.getElementById("zolnierzenaMerkow").value;
	
	if(koszarylvl > 0 && zolnierzenamerkow <= silaarmii && silaarmii >= potrzebnewojskonamerkow && prowadzonawyprawa == 0 && zloto >= 100 && s >= 200)
	{
	relacjezmerkami = relacjezmerkami - 20;
	relacjezplemami = relacjezplemami - 5;
	sprawdzpoziomrelacjiMerkowie();
	sprawdzpoziomrelacjiPlemowie();
	zloto = zloto - 100;
	s = s - 200;
	zolnierzenamerkow = document.getElementById("zolnierzenaMerkow").value;
	silaarmii = silaarmii - zolnierzenamerkow;
	setTimeout("bitwazmerkami()",34000);
	
	
	document.getElementById("armeeinfo1").innerHTML = "Wojska na merkow WYSŁANE!";
	odliczaniestart = 1;
	dlugoscbitwy9secF();
	dlugoscbitwy19secFCHECK();
	iloscwyprawnamerkow = iloscwyprawnamerkow + 1;
	prowadzonawyprawa = 1;
	silywojskplemion();
	statusbitwymer();
	roznicawojsk = setTimeout(roznicawojskF, 5000);
	document.getElementById("silaarmiiD").innerHTML = silaarmii;
	poziombitwy();
	setTimeout (function () { 
	$("#armeeinfo1").fadeOut(3000); }, 8000)
	$("#armeeinfo1").fadeIn(500);
	document.getElementById("armeeinfo1a").innerHTML = "Wojska na merkow WYSŁANE! o przebiegu bitwy dowiesz sie wiecej z dziennika bitewnego ponizej";
	setTimeout (function () { 
	$("#armeeinfo1a").fadeOut(3000); }, 8000)
	$("#armeeinfo1a").fadeIn(500);
	
	
	}
	
	else if (prowadzonawyprawa > 0)
	{
		document.getElementById("armeeinfo1").innerHTML = "Już wysłałeś wyprawę, poczekaj aż ta się skończy i wyślij kolejną!";
		setTimeout (function () { 
	$("#armeeinfo0").fadeOut(3000); }, 8000)
	$("#armeeinfo0").fadeIn(500);
	}
	else if (koszarylvl<1)
	{
		document.getElementById("armeeinfo1").innerHTML = "Żeby móc prowadzić wyprawy wojenne, wybuduj najpierw koszary!";
		setTimeout (function () { 
	$("#armeeinfo0").fadeOut(3000); }, 8000)
	$("#armeeinfo0").fadeIn(500);
	}
	else if (silaarmii < potrzebnewojskonamerkow)
	{
		document.getElementById("armeeinfo1").innerHTML = "Nie masz wystarczającej siły Wojów żeby przeprowadzic kampanie";
		setTimeout (function () { 
	$("#armeeinfo0").fadeOut(3000); }, 8000)
	$("#armeeinfo0").fadeIn(500);
	}
	else if(zloto < 100 || s < 200)
	{
		document.getElementById("armeeinfo1").innerHTML = "Wygląda na to że nas nie stać na wysłanie wojów";
		setTimeout (function () { 
	$("#armeeinfo0").fadeOut(3000); }, 8000)
	$("#armeeinfo0").fadeIn(500);
	}
	else if(zolnierzenamerkow>silaarmii)
	{
		document.getElementById("armeeinfo1").innerHTML = "Ekhem... Wodzu nie mamy tylu Wojów ile planujesz wysłać - przemyśl swoje działanie...";
	}
	
};

function statusbitwymer()
{
	if(zolnierzenamerkow>silamerkow)
	{
		statusbitywyflagaMer = 1;
	}
	else if(zolnierzenamerkow==silamerkow)
	{
		statusbitywyflagaMer = 2;
	}
	else if(zolnierzenamerkow<silamerkow)
	{
		statusbitywyflagaMer = 3;
	}
	
};


function roznicawojskF() {
  if(zolnierzenamerkow<silamerkow - 2)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że mają potęzną przewagę liczebną! Jesteśmy zgubieni!";
		setTimeout (function roznicawojskF() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenamerkow<=silamerkow)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że mają przewagę liczebną! Możemy tego nie wygrać wodzu!";
		setTimeout (function roznicawojskF() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenamerkow>=silamerkow + 1)
  {
		document.getElementById("armeeinfo4").innerHTML = "Siły wyglądają na wyrównane, cięzko stwierdzić kto wyjdzie ze starcia zwycięsko";
		setTimeout (function roznicawojskF() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenamerkow>=silamerkow + 2)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że powinniśmy sobie poradzić";
		setTimeout (function roznicawojskF() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else 
	  document.getElementById("armeeinfo4").innerHTML = "Nie możemy tego przegrać!";
  setTimeout (function roznicawojskF() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
	poziombitwy();
};

var zdobytezlotowbitwie = 0;
var zdobytedrewnowbitwie = 0;
var zdobytezbozewbitwie = 0;
var zdobytekamienwbitwie = 0;
var nadziejazdobytawbitwie = 0;
var riotszdobytawbitwie = 0;
var utratasil = 0;
function bitwazmerkami()
{
	if(zolnierzenamerkow>silamerkow)
	{
		zdobytezlotowbitwie = Math.round(((Math.random()*300)+ 90)*100)/100;
		zdobytedrewnowbitwie = Math.round(((Math.random()*300)+ 90)*100)/100;
		nadziejazdobytawbitwie = Math.round(((Math.random()*5)+ 0.5)*100)/100;
		document.getElementById("armeeinfo3").innerHTML = "Zwycięstwo!!";
		document.getElementById("armeeinfo3a").innerHTML = "Merkowie pobici! Przywiezliśmy łupy, Złoto: " + zdobytezlotowbitwie + " , Drewno: " + zdobytedrewnowbitwie + ", a nedzieja napelniła serca naszego ludu! Nadzieja +" + nadziejazdobytawbitwie + " .Relacje z Merkami pomniejszone o 20, a z Plemami o 5pkt";
		document.getElementById("armeeinfo2a").innerHTML = "Wojsko powróciło z kampanii wojennej";
		zloto = zloto + zdobytezlotowbitwie;
		s = s + zdobytedrewnowbitwie;
		hope = hope + nadziejazdobytawbitwie;
		setTimeout (function bitwazmerkami() { 
	$("#armeeinfo3").fadeOut(3000); }, 4000)
	$("#armeeinfo3").fadeIn(500);
	setTimeout (function bitwazmerkami() { 
	$("#armeeinfo3a").fadeOut(3000); }, 6000)
	$("#armeeinfo3a").fadeIn(500);
	setTimeout (function bitwazmerkami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
	prowadzonawyprawa = 0;
	silaarmii = (silaarmii)*1 + (zolnierzenamerkow)*1 ;
	document.getElementById("silaarmiiD").innerHTML = silaarmii
	zolnierzenamerkow = 0;
	}
	else if (zolnierzenamerkow==silamerkow)
	{
		zdobytezlotowbitwie = Math.round(((Math.random()*100)+ 50)*100)/100;
		zdobytedrewnowbitwie = Math.round(((Math.random()*100)+ 50)*100)/100;
		nadziejazdobytawbitwie = Math.round(((Math.random()*0.5)+ 0.1)*100)/100;
		utratasil = Math.floor(zolnierzenamerkow * 0.5)
		document.getElementById("armeeinfo3").innerHTML = "Bitwa była zażarta,ciężko wskazać zwycieżce udało nam się porwać tylko:  Złota: " + zdobytezlotowbitwie + ",  Drewna: " + zdobytedrewnowbitwie + ". Jako, że uszliśmy z bitwy łupami to wzroszła również nieznacznie nadzieja: " + nadziejazdobytawbitwie + " a straty w ludziach oceniam na:" + utratasil + " .Relacje z Merkami pomniejszone o 20, a z Plemami o 5pkt";
		document.getElementById("armeeinfo2a").innerHTML = "Wojsko powróciło z kampanii wojennej";
		zloto = zloto + zdobytezlotowbitwie;
		s = s + zdobytedrewnowbitwie;
		hope = hope + nadziejazdobytawbitwie;
		silaarmii = (silaarmii)*1 + (zolnierzenamerkow)*1 ;
		silaarmii = silaarmii - utratasil
		document.getElementById("silaarmiiD").innerHTML = silaarmii
		setTimeout (function bitwazmerkami() { 
	$("#armeeinfo3").fadeOut(3000); }, 4000)
	$("#armeeinfo3").fadeIn(500);
		setTimeout (function bitwazmerkami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
		prowadzonawyprawa = 0;
	zolnierzenamerkow = 0;
	}
	else if (zolnierzenamerkow<silamerkow)
	{
		
		nadziejazdobytawbitwie = Math.round(((Math.random()*4)+ 1.5)*100)/100;
		riotszdobytawbitwie = Math.round(((Math.random()*4)+ 1.5)*100)/100;
		utratasil = Math.floor(zolnierzenamerkow * 0.7)
		hope = hope - nadziejazdobytawbitwie;
		riots = riots + riotszdobytawbitwie;
		silaarmii = (silaarmii)*1 + (zolnierzenamerkow)*1 ;
		silaarmii = silaarmii - utratasil;
		document.getElementById("silaarmiiD").innerHTML = silaarmii
		document.getElementById("armeeinfo3").innerHTML = "Pobili nas doszczętnie. Utrata Nadzieji: " + nadziejazdobytawbitwie + " , wzrost W**wienia" + riotszdobytawbitwie + " Stracilismy: " + utratasil + " .Relacje z Merkami pomniejszone o 20, a z Plemami o 5pkt";
		document.getElementById("armeeinfo2a").innerHTML = "Resztki wojsk dołączyły do garnizonu";

		setTimeout (function bitwazmerkami() { 
	$("#armeeinfo3").fadeOut(3000); }, 4000)
	$("#armeeinfo3").fadeIn(500);
	setTimeout (function bitwazmerkami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
		
		prowadzonawyprawa = 0;
		zolnierzenamerkow = 0;
	}
	poziombitwy();
	setTimeout ("polebitwyF()",5000);
};

 function poziombitwy()
  {
	  if (bitwalvl <= 9)
	  {bitwalvl = bitwalvl + 1;
	  zmianamapybitwy();}
	  else if( bitwalvl>9)
	  {
	  bitwalvl = 2;
	  plikwypolebitwy = "<img src=\"battlefield/polebitwy" + bitwalvl + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  };
  };
  
 

  function zmianamapybitwy()
  {
	  if(statusbitywyflagaMer==1)
	  {
 plikwypolebitwy = "<img src=\"battlefield/merkowiever1/polebitwy" + bitwalvl + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
	  else if(statusbitywyflagaMer==2)
	  {
 plikwypolebitwy = "<img src=\"battlefield/merkowiever2/polebitwy" + bitwalvl + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
	  else if(statusbitywyflagaMer==3)
	  {
 plikwypolebitwy = "<img src=\"battlefield/merkowiever3/polebitwy" + bitwalvl + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
  };
/// Merkowie koniec

/// Opsydianie start
	



var zolnierzenaopsydian = 0;//document.getElementById("zolnierzenaOpsydian").value;



function wyprawanaopsydian()
{
	zolnierzenaopsydian = document.getElementById("zolnierzenaOpsydian").value;
	
	if(koszarylvl > 0 && zolnierzenaopsydian <= silaarmii && silaarmii >= potrzebnewojskonaopsydian && prowadzonawyprawa == 0 && zloto >= 150 )
	{
		relacjezopsydianami = relacjezopsydianami - 20;
		relacjeznordyskami = relacjeznordyskami - 5;
		sprawdzpoziomrelacjiNordyskowie();
		sprawdzpoziomrelacjiOpsydianie();
	zloto = zloto - 150;
	s = s - 300;
	
	silaarmii = silaarmii - zolnierzenaopsydian;

setTimeout("bitwazopsydianami()",31000);
	document.getElementById("armeeinfo1b").innerHTML = "Wojska na Opsydian WYSŁANE!";
	bitwakrotkastartops = 1;
	bitwakrotkaFops();
	bitwadlugaopsFCheck();
	iloscwyprawnaopsydian = iloscwyprawnaopsydian + 1;
	prowadzonawyprawa = 1;
	silywojskplemion();
	statusbitwy();
	roznicawojskOps = setTimeout(roznicawojskFOps, 5000);
	document.getElementById("silaarmiiD").innerHTML = silaarmii;
	poziombitwyOps();
	setTimeout (function wyprawanaopsydian() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);

	
	
	}
	
	else if (prowadzonawyprawa > 0)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Już wysłałeś wyprawę, poczekaj aż ta się skończy i wyślij kolejną!";
		setTimeout (function wyprawanaopsydian() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
	else if (koszarylvl<1)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Żeby móc prowadzić wyprawy wojenne, wybuduj najpierw koszary!";
		setTimeout (function wyprawanaopsydian() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
	else if (silaarmii < potrzebnewojskonaopsydian)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Nie masz wystarczającej siły Wojów żeby przeprowadzic kampanie";
		setTimeout (function wyprawanaopsydian() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
	else if(zolnierzenaopsydian>silaarmii)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Ekhem... Wodzu nie mamy tylu Wojów ile planujesz wysłać - przemyśl swoje działanie...";
	}
	else if(zloto < 150 || s < 200)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Wygląda na to że nas nie stać na wysłanie wojów";
		setTimeout (function wyprawanaopsydian() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
};

function statusbitwy()
{
	if(zolnierzenaopsydian>silaopsydian)
	{
		statusbitywyflagaOps = 1;
	}
	else if(zolnierzenaopsydian==silaopsydian)
	{
		statusbitywyflagaOps = 2;
	}
	else if(zolnierzenaopsydian<silaopsydian)
	{
		statusbitywyflagaOps = 3;
	}
	
};


function roznicawojskFOps() {
  if(zolnierzenaopsydian<silaopsydian - 2)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że mają potęzną przewagę liczebną! Jesteśmy zgubieni!";
		setTimeout (function roznicawojskFOps() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenaopsydian<=silaopsydian)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że mają przewagę liczebną! Możemy tego nie wygrać wodzu!";
		setTimeout (function roznicawojskFOps() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenaopsydian>=silaopsydian + 1)
  {
		document.getElementById("armeeinfo4").innerHTML = "Siły wyglądają na wyrównane, cięzko stwierdzić kto wyjdzie ze starcia zwycięsko";
		setTimeout (function roznicawojskFOps() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenaopsydian>=silaopsydian + 2)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że powinniśmy sobie poradzić";
		setTimeout (function roznicawojskFOps() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else 
	  document.getElementById("armeeinfo4").innerHTML = "Nie możemy tego przegrać!";
  setTimeout (function roznicawojskFOps() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
	poziombitwyOps();
};


function bitwazopsydianami()
{
	if(zolnierzenaopsydian>silaopsydian)
	{
		zdobytezlotowbitwie = Math.round(((Math.random()*500)+ 200)*100)/100;
		zdobytezbozewbitwie = Math.round(((Math.random()*300)+ 150)*100)/100;
		nadziejazdobytawbitwie = Math.round(((Math.random()*8)+ 1.5)*100)/100;
		document.getElementById("armeeinfo3").innerHTML = "Zwycięstwo!!";
		document.getElementById("armeeinfo3a").innerHTML = "Opsydianie pobici! Przywiezliśmy łupy, Złoto: " + zdobytezlotowbitwie + " , Zboże: " + zdobytezbozewbitwie + ", a nadzieja napelniła serca naszego ludu! Nadzieja+" + nadziejazdobytawbitwie + " .Relacje z Opsydianami pomniejszone o 20, a z Nordyskami o 5pkt";
		document.getElementById("armeeinfo2a").innerHTML = "Wojsko powróciło z kampanii wojennej";
		zloto = zloto + zdobytezlotowbitwie;
		s3 = s3 + zdobytezbozewbitwie;
		hope = hope + nadziejazdobytawbitwie;
		prowadzonawyprawa = 0;
		silaarmii = (silaarmii)*1 + (zolnierzenaopsydian)*1 ;
		document.getElementById("silaarmiiD").innerHTML = silaarmii
		setTimeout (function bitwazopsydianami() { 
	$("#armeeinfo3").fadeOut(3000); }, 4000)
	$("#armeeinfo3").fadeIn(500);
	setTimeout (function bitwazopsydianami() { 
	$("#armeeinfo3a").fadeOut(3000); }, 6000)
	$("#armeeinfo3a").fadeIn(500);
	setTimeout (function bitwazopsydianami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
		zolnierzenaopsydian = 0;
	}
	else if (zolnierzenaopsydian==silaopsydian)
	{
		zdobytezlotowbitwie = Math.round(((Math.random()*100)+ 70)*100)/100;
		zdobytezbozewbitwie = Math.round(((Math.random()*100)+ 70)*100)/100;
		nadziejazdobytawbitwie = Math.round(((Math.random()*2)+ 1.5)*100)/100;
		utratasil = Math.floor(zolnierzenaopsydian * 0.5)
		document.getElementById("armeeinfo3").innerHTML = "Bitwa była zażarta,ciężko wskazać zwycieżce udało nam się porwać tylko:  Złota: " + zdobytezlotowbitwie + ",  Zboże: " + zdobytezbozewbitwie + ". Jako, że uszliśmy z bitwy łupami to wzroszła również nieznacznie nadzieja: " + nadziejazdobytawbitwie + " a straty w ludziach oceniam na:" + utratasil + " .Relacje z Opsydianami pomniejszone o 20, a z Nordyskami o 5pkt"; 
		document.getElementById("armeeinfo2a").innerHTML = "Wojsko powróciło z kampanii wojennej";
		zloto = zloto + zdobytezlotowbitwie;
		s = s + zdobytedrewnowbitwie;
		hope = hope + nadziejazdobytawbitwie;
		silaarmii = (silaarmii)*1 + (zolnierzenaopsydian)*1 ;
		silaarmii = silaarmii - utratasil;
		prowadzonawyprawa = 0;
		document.getElementById("silaarmiiD").innerHTML = silaarmii
		setTimeout (function bitwazopsydianami() { 
	$("#armeeinfo3").fadeOut(3000); }, 4000)
	$("#armeeinfo3").fadeIn(500);
		setTimeout (function bitwazopsydianami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
		zolnierzenaopsydian = 0;
	}
	else if (zolnierzenaopsydian<silaopsydian)
	{
		
		
		nadziejazdobytawbitwie = Math.round(((Math.random()*4)+ 1.5)*100)/100;
		riotszdobytawbitwie = Math.round(((Math.random()*4)+ 1.5)*100)/100;
		utratasil = Math.floor(zolnierzenaopsydian * 0.7)
		hope = hope - nadziejazdobytawbitwie;
		riots = riots + riotszdobytawbitwie;
		silaarmii = (silaarmii)*1 + (zolnierzenaopsydian)*1 ;
		silaarmii = silaarmii - utratasil;
		prowadzonawyprawa = 0;
		document.getElementById("silaarmiiD").innerHTML = silaarmii
		document.getElementById("armeeinfo3").innerHTML = "Pobili nas doszczętnie. Utrata Nadzieji: " + nadziejazdobytawbitwie + " , wzrost W**wienia" + riotszdobytawbitwie + "Usiekli naszych wojów w sile: " + utratasil + " .Relacje z Opsydianami pomniejszone o 20, a z Nordyskami o 5pkt";
		document.getElementById("armeeinfo2a").innerHTML = "Resztki wojsk dołączyły do garnizonu";
		setTimeout (function bitwazopsydianami() { 
	$("#armeeinfo3").fadeOut(3000); }, 4000)
	$("#armeeinfo3").fadeIn(500);
	setTimeout (function bitwazopsydianami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
		zolnierzenaopsydian = 0;
	}
	poziombitwyOps();
	setTimeout ("polebitwyF()",5000);
};

 function poziombitwyOps()
  {
	  if (bitwalvlOps <= 10)
	  {bitwalvlOps = bitwalvlOps + 1;
	  zmianamapybitwyOps();}
	  else if( bitwalvlOps>10)
	  {
	  bitwalvlOps = 2;
	  plikwypolebitwy = "<img src=\"battlefield/polebitwy" + bitwalvlOps + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  };
  };
  
  
  
  function zmianamapybitwyOps()
  {
	  if(statusbitywyflagaOps==1)
	  {
 plikwypolebitwy = "<img src=\"battlefield/opsydianiever1/polebitwyods" + bitwalvlOps + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
	  else if(statusbitywyflagaOps==2)
	  {
 plikwypolebitwy = "<img src=\"battlefield/opsydianiever2/polebitwyods" + bitwalvlOps + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
	  else if(statusbitywyflagaOps==3)
	  {
 plikwypolebitwy = "<img src=\"battlefield/opsydianiever3/polebitwyods" + bitwalvlOps + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
  };
/// opsydianie koniec


// yerisowie kontynuacja

var zolnierzenayerisow = 0; //document.getElementById("zolnierzenaYerisow").value;



function wyprawanayerisow()
{
	zolnierzenayerisow = document.getElementById("zolnierzenaYerisow").value;
	
	if(koszarylvl > 0 && zolnierzenayerisow <= silaarmii && silaarmii >= potrzebnewojskonayerisow && prowadzonawyprawa == 0 && zloto >= 50  )
	{
		relacjezyerisami = relacjezyerisami - 20;
		relacjezmaurykami = relacjezmaurykami - 5;
		sprawdzpoziomrelacjiMaurykowie();
		sprawdzpoziomrelacjiYerisi();
	zloto = zloto - 50;
	s = s - 100;
	
	silaarmii = silaarmii - zolnierzenayerisow;
	setTimeout("bitwazyerisami()",31000);
	

	document.getElementById("armeeinfo1b").innerHTML = "Wojska na Yerysów WYSŁANE!";
	bitwakrotkastartyer = 1;
	bitwakrotkaFyer();
	bitwadlugayerFCheck();
	iloscwyprawnayerisow = iloscwyprawnayerisow + 1;
	prowadzonawyprawa = 1;
	silywojskplemion();
	statusbitwyyer();
	roznicawojskYer = setTimeout(roznicawojskFYer, 5000);
	document.getElementById("silaarmiiD").innerHTML = silaarmii;
	poziombitwyYer();
	setTimeout (function wyprawanayerisow() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	
	
	
	}
	
	else if (prowadzonawyprawa > 0)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Już wysłałeś wyprawę, poczekaj aż ta się skończy i wyślij kolejną!";
		setTimeout (function wyprawanayerisow() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
	else if (koszarylvl<1)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Żeby móc prowadzić wyprawy wojenne, wybuduj najpierw koszary!";
		setTimeout (function wyprawanayerisow() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
	else if (silaarmii < potrzebnewojskonayerisow)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Nie masz wystarczającej siły Wojów żeby przeprowadzic kampanie";
		setTimeout (function wyprawanayerisow() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
	else if(zolnierzenayerisow>silaarmii)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Ekhem... Wodzu nie mamy tylu Wojów ile planujesz wysłać - przemyśl swoje działanie...";
	}
	else if(zloto < 50 || s < 200)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Wygląda na to że nas nie stać na wysłanie wojów";
		setTimeout (function wyprawanayerisow() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
};

function statusbitwyyer()
{
	if(zolnierzenayerisow>silayerisow)
	{
		statusbitywyflagaYer = 1;
	}
	else if(zolnierzenayerisow==silayerisow)
	{
		statusbitywyflagaYer = 2;
	}
	else if(zolnierzenayerisow<silayerisow)
	{
		statusbitywyflagaYer = 3;
	}
	
};

function roznicawojskFYer() {
  if(zolnierzenayerisow<silayerisow - 2)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że mają potęzną przewagę liczebną! Jesteśmy zgubieni!";
		setTimeout (function roznicawojskFYer() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenayerisow<=silayerisow)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że mają przewagę liczebną! Możemy tego nie wygrać wodzu!";
		setTimeout (function roznicawojskFYer() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenayerisow>=silayerisow + 1)
  {
		document.getElementById("armeeinfo4").innerHTML = "Siły wyglądają na wyrównane, cięzko stwierdzić kto wyjdzie ze starcia zwycięsko";
		setTimeout (function roznicawojskFYer() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenayerisow>=silayerisow + 2)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że powinniśmy sobie poradzić";
		setTimeout (function roznicawojskFYer() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else 
	  document.getElementById("armeeinfo4").innerHTML = "Nie możemy tego przegrać!";
  setTimeout (function roznicawojskFYer() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
	poziombitwyYer();
};


function bitwazyerisami()
{
	if(zolnierzenayerisow>silayerisow)
	{
		zdobytezlotowbitwie = Math.round(((Math.random()*280)+ 50)*100)/100;
		zdobytekamienwbitwie = Math.round(((Math.random()*280)+ 50)*100)/100;
		nadziejazdobytawbitwie = Math.round(((Math.random()*4)+ 0.3)*100)/100;
		document.getElementById("armeeinfo3").innerHTML = "Zwycięstwo!!";
		document.getElementById("armeeinfo3a").innerHTML = "Yerisi pobici! Przywiezliśmy łupy, Złoto: " + zdobytezlotowbitwie + " , Kamień: " + zdobytekamienwbitwie + ", a nadzieja napelniła serca naszego ludu! Nadzieja+" + nadziejazdobytawbitwie + " .Relacje z Yerisami pomniejszone o 20, a z Maurykami o 5pkt";
		document.getElementById("armeeinfo2a").innerHTML = "Wojsko powróciło z kampanii wojennej";
		zloto = zloto + zdobytezlotowbitwie;
		s2 = s2 + zdobytekamienwbitwie;
		hope = hope + nadziejazdobytawbitwie;
		setTimeout (function bitwazyerisami() { 
	$("#armeeinfo3").fadeOut(3000); }, 6000)
	$("#armeeinfo3").fadeIn(500);
	setTimeout (function bitwazyerisami() { 
	$("#armeeinfo3a").fadeOut(3000); }, 8000)
	$("#armeeinfo3a").fadeIn(500);
	setTimeout (function bitwazyerisami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
	silaarmii = (silaarmii)*1 + (zolnierzenayerisow)*1;
	document.getElementById("silaarmiiD").innerHTML = silaarmii;	
	prowadzonawyprawa = 0;
	zolnierzenayerisow = 0;
	}
	else if (zolnierzenayerisow==silayerisow)
	{
		zdobytezlotowbitwie = Math.round(((Math.random()*100)+ 20)*100)/100;
		zdobytekamienwbitwie = Math.round(((Math.random()*100)+ 20)*100)/100;
		nadziejazdobytawbitwie = Math.round(((Math.random()*2)+ 0.3)*100)/100;
		utratasil = Math.floor(zolnierzenayerisow * 0.5)
		document.getElementById("armeeinfo3").innerHTML = "Bitwa była zażarta,ciężko wskazać zwycieżce udało nam się porwać tylko:  Złota: " + zdobytezlotowbitwie + ",  Kamień: " + zdobytekamienwbitwie + ". Jako, że uszliśmy z bitwy łupami to wzroszła również nieznacznie nadzieja: " + nadziejazdobytawbitwie + " a straty w ludziach oceniam na:" + utratasil + " .Relacje z Yerisami pomniejszone o 20, a z Maurykami o 5pkt";	
		document.getElementById("armeeinfo2a").innerHTML = "Wojsko powróciło z kampanii wojennej";
		zloto = zloto + zdobytezlotowbitwie;
		s2 = s2 + zdobytekamienwbitwie;
		hope = hope + nadziejazdobytawbitwie;
		silaarmii = (silaarmii)*1 + (zolnierzenayerisow)*1;	
		silaarmii = silaarmii - utratasil;
		document.getElementById("silaarmiiD").innerHTML = silaarmii
		setTimeout (function bitwazyerisami() { 
	$("#armeeinfo3").fadeOut(3000); }, 4000)
	$("#armeeinfo3").fadeIn(500);
		setTimeout (function bitwazyerisami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
		
	prowadzonawyprawa = 0;
	zolnierzenayerisow = 0;
	}
	else if (zolnierzenayerisow<silayerisow)
	{
		nadziejazdobytawbitwie = Math.round(((Math.random()*4)+ 1.5)*100)/100;
		riotszdobytawbitwie = Math.round(((Math.random()*4)+ 1.5)*100)/100;
		utratasil = Math.floor(zolnierzenayerisow * 0.7)
		hope = hope - nadziejazdobytawbitwie;
		riots = riots + riotszdobytawbitwie;
		silaarmii = (silaarmii)*1 + (zolnierzenayerisow)*1;
		silaarmii = silaarmii - utratasil;
		document.getElementById("silaarmiiD").innerHTML = silaarmii
		document.getElementById("armeeinfo3").innerHTML = "Pobili nas doszczętnie. Utrata Nadzieji: " + nadziejazdobytawbitwie + " , wzrost W**wienia" + riotszdobytawbitwie + "Straciliśmy: " + utratasil + " siły wojów .Relacje z Yerisami pomniejszone o 20, a z Maurykami o 5pkt";
		document.getElementById("armeeinfo2a").innerHTML = "Resztki wojsk dołączyły do garnizonu";
		setTimeout (function bitwazyerisami() { 
	$("#armeeinfo3").fadeOut(3000); }, 4000)
	$("#armeeinfo3").fadeIn(500);
	setTimeout (function bitwazyerisami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
			
	prowadzonawyprawa = 0;
	zolnierzenayerisow = 0;
	}
	poziombitwyYer();
	setTimeout ("polebitwyF()",7000);
};

 function poziombitwyYer()
  {
	  if (bitwalvlYer <= 9)
	  {bitwalvlYer = bitwalvlYer + 1;
	  zmianamapybitwyYer();}
	  else if( bitwalvlYer>9)
	  {
	  bitwalvlYer = 2;
	  plikwypolebitwy = "<img src=\"battlefield/polebitwy" + bitwalvlYer + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  };
  };
  
  
  
  function zmianamapybitwyYer()
  {
	  if(statusbitywyflagaYer==1)
	  {
 plikwypolebitwy = "<img src=\"battlefield/yerisiver1/polebitwy" + bitwalvlYer + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
	  else if(statusbitywyflagaYer==2)
	  {
 plikwypolebitwy = "<img src=\"battlefield/yerisiver2/polebitwy" + bitwalvlYer + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
	  else if(statusbitywyflagaYer==3)
	  {
 plikwypolebitwy = "<img src=\"battlefield/yerisiver3/polebitwy" + bitwalvlYer + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
  };
/// yerisowie koniec kontynuacji

///krucjata poczatek kontynuacji

var zolnierzenakrucjate = 0;//document.getElementById("zolnierzenaKrucjate").value;



function wyprawanakrucjate()
{
	zolnierzenakrucjate = document.getElementById("zolnierzenaKrucjate").value;
	
	if(koszarylvl > 0 && kosciollvl > 0 && zloto >= 000 && s >= 000 )
	{
	zloto = zloto - 300;
	s = s - 200;
	
	silaarmii = silaarmii - zolnierzenakrucjate;
	setTimeout("bitwakrucjata()",37000);
	
	document.getElementById("armeeinfo1b").innerHTML = "Wojska na Krucjatę WYSŁANE! W imię naszego Boga!";
	bitwakrotkastartkru = 1;
	bitwakrotkaFkru();
	bitwadlugakruFCheck();
	iloscwyprawnakrucjate = iloscwyprawnakrucjate + 1;
	prowadzonawyprawa = 1;
	silywojskplemion();
	statusbitwykru();
	roznicawojskKru = setTimeout(roznicawojskFKru, 5000);
	document.getElementById("silaarmiiD").innerHTML = silaarmii;
	poziombitwyKru();
	setTimeout (function wyprawanakrucjate() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	
	
	
	}
	
	else if (prowadzonawyprawa > 0)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Już wysłałeś wyprawę, poczekaj aż ta się skończy i wyślij kolejną!";
		setTimeout (function wyprawanakrucjate() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
	else if (koszarylvl<1)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Żeby móc wysłać krucjatę, wybuduj najpierw koszary!";
		setTimeout (function wyprawanakrucjate() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
	else if (kosciollvl<1)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Żeby móc wysłać krucjatę, wybuduj wcześniej kościół!";
		setTimeout (function wyprawanakrucjate() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
	else if (silaarmii < potrzebnewojskonakrucjate)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Nie masz wystarczającej siły Wojów żeby przeprowadzic kampanie";
		setTimeout (function wyprawanakrucjate() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
	else if(zolnierzenakrucjate>silaarmii)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Ekhem... Wodzu nie mamy tylu Wojów ile planujesz wysłać - przemyśl swoje działanie...";
	}
	else if(zloto < 300 || s < 200)
	{
		document.getElementById("armeeinfo1b").innerHTML = "Wygląda na to że nas nie stać na zorganizowanie Krucjaty";
		setTimeout (function wyprawanakrucjate() { 
	$("#armeeinfo1b").fadeOut(3000); }, 8000)
	$("#armeeinfo1b").fadeIn(500);
	}
};

function statusbitwykru()
{
	if(zolnierzenakrucjate>silakrucjata)
	{
		statusbitywyflagaKru = 1;
	}
	else if(zolnierzenakrucjate==silakrucjata)
	{
		statusbitywyflagaKru = 2;
	}
	else if(zolnierzenakrucjate<silakrucjata)
	{
		statusbitywyflagaKru = 3;
	}
	
};

function roznicawojskFKru() {
  if(zolnierzenakrucjate<silakrucjata - 2)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że mają potęzną przewagę liczebną! Jesteśmy zgubieni!";
		setTimeout (function roznicawojskFKru() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenakrucjate<=silakrucjata)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że mają przewagę liczebną! Możemy tego nie wygrać wodzu!";
		setTimeout (function roznicawojskFKru() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenakrucjate>=silakrucjata + 1)
  {
		document.getElementById("armeeinfo4").innerHTML = "Siły wyglądają na wyrównane, cięzko stwierdzić kto wyjdzie ze starcia zwycięsko";
		setTimeout (function roznicawojskFKru() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else if(zolnierzenakrucjate>=silakrucjata + 2)
  {
		document.getElementById("armeeinfo4").innerHTML = "Wygląda na to że powinniśmy sobie poradzić";
		setTimeout (function roznicawojskFKru() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
  }
  else 
	  document.getElementById("armeeinfo4").innerHTML = "Nie możemy tego przegrać!";
  setTimeout (function roznicawojskFKru() { 
	$("#armeeinfo4").fadeOut(3000); }, 6000)
	$("#armeeinfo4").fadeIn(500);
	poziombitwyKru();
};


function bitwakrucjata()
{
	if(zolnierzenakrucjate>silakrucjata)
	{
		zdobytezlotowbitwie = Math.round(((Math.random()*200)+ 70)*100)/100;
		zdobytezbozewbitwie = Math.round(((Math.random()*100)+ 70)*100)/100;
		zdobytedrewnowbitwie = Math.round(((Math.random()*100)+ 70)*100)/100;
		nadziejazdobytawbitwie = Math.round(((Math.random()*2)+ 0.3)*100)/100;
		flagabonuszkrucjaty = 1;
		bonuszkrucjatyF();
		document.getElementById("armeeinfo3").innerHTML = "Zwycięstwo!!";
		document.getElementById("armeeinfo3a").innerHTML = "Krucjata odniosła sukces! Przywiezliśmy łupy, Złoto: " + zdobytezlotowbitwie + " , Zboże: " + zdobytezbozewbitwie +  " , Drewno: " + zdobytedrewnowbitwie +", a nadzieja napelniła serca naszego ludu! Nadzieja+" + nadziejazdobytawbitwie;
		document.getElementById("armeeinfo2a").innerHTML = "Wojsko powróciło z kampanii wojennej";
		zloto = zloto + zdobytezlotowbitwie;
		s3 = s3 + zdobytezbozewbitwie;
		s = s + zdobytedrewnowbitwie;
		hope = hope + nadziejazdobytawbitwie;
		setTimeout (function bitwakrucjata() { 
	$("#armeeinfo3").fadeOut(3000); }, 6000)
	$("#armeeinfo3").fadeIn(500);
	setTimeout (function bitwakrucjata() { 
	$("#armeeinfo3a").fadeOut(3000); }, 8000)
	$("#armeeinfo3a").fadeIn(500);
	setTimeout (function bitwakrucjata() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
		silaarmii = (silaarmii)*1 + (zolnierzenakrucjate)*1 ;	
document.getElementById("silaarmiiD").innerHTML = silaarmii;
prowadzonawyprawa = 0;
zolnierzenakrucjate = 0;
	}
	else if (zolnierzenakrucjate==silakrucjata)
	{
		zdobytezlotowbitwie = Math.round(((Math.random()*200)+ 70)*100)/100;
		zdobytedrewnowbitwie = Math.round(((Math.random()*100)+ 70)*100)/100;
		nadziejazdobytawbitwie = Math.round(((Math.random()*2)+ 0.3)*100)/100;
		utratasil = Math.floor(zolnierzenakrucjate * 0.5)
		document.getElementById("armeeinfo3").innerHTML = "Bitwa była zażarta,ciężko wskazać zwycieżce udało nam się porwać tylko:  Złota: " + zdobytezlotowbitwie + ",  Drewno: " + zdobytedrewnowbitwie + ". Jako, że uszliśmy z bitwy łupami to wzroszła również nieznacznie nadzieja: " + nadziejazdobytawbitwie + " a straty w ludziach oceniam na:" + utratasil;	
		document.getElementById("armeeinfo2a").innerHTML = "Wojsko powróciło z kampanii wojennej";
		zloto = zloto + zdobytezlotowbitwie;
		s = s + zdobytedrewnowbitwie;
		hope = hope + nadziejazdobytawbitwie;
		silaarmii = (silaarmii)*1 + (zolnierzenakrucjate)*1;
		silaarmii = silaarmii - utratasil;
		document.getElementById("silaarmiiD").innerHTML = silaarmii
		setTimeout (function bitwazyerisami() { 
	$("#armeeinfo3").fadeOut(3000); }, 4000)
	$("#armeeinfo3").fadeIn(500);
		setTimeout (function bitwazyerisami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
		
prowadzonawyprawa = 0;
zolnierzenakrucjate = 0;
	}
	else if (zolnierzenakrucjate<silakrucjata)
	{
		nadziejazdobytawbitwie = Math.round(((Math.random()*4)+ 1.5)*100)/100;
		riotszdobytawbitwie = Math.round(((Math.random()*4)+ 1.5)*100)/100;
		utratasil = Math.floor(zolnierzenakrucjate * 0.7)
		hope = hope - nadziejazdobytawbitwie;
		riots = riots + riotszdobytawbitwie;
		silaarmii = (silaarmii)*1 + (zolnierzenakrucjate)*1;
		silaarmii = silaarmii - utratasil;
		document.getElementById("silaarmiiD").innerHTML = silaarmii
		document.getElementById("armeeinfo3").innerHTML = "Pobili nas doszczętnie. Utrata Nadzieji: " + nadziejazdobytawbitwie + " , wzrost W**wienia" + riotszdobytawbitwie + "Straciliśmy: " + utratasil + " siły wojów";
		document.getElementById("armeeinfo2a").innerHTML = "Resztki wojsk dołączyły do garnizonu";
		setTimeout (function bitwazyerisami() { 
	$("#armeeinfo3").fadeOut(3000); }, 4000)
	$("#armeeinfo3").fadeIn(500);
	setTimeout (function bitwazyerisami() { 
	$("#armeeinfo2a").fadeOut(3000); }, 6000)
	$("#armeeinfo2a").fadeIn(2500);
		prowadzonawyprawa = 0;
		zolnierzenakrucjate = 0;
	}
	poziombitwyKru();
	setTimeout ("polebitwyF()",5000);
};

 function poziombitwyKru()
  {
	  if (bitwalvlKru <= 11)
	  {bitwalvlKru = bitwalvlKru + 1;
	  zmianamapybitwyKru();}
	  else if( bitwalvlKru>12)
	  {
	  bitwalvlKru = 2;
	  plikwypolebitwy = "<img src=\"battlefield/polebitwy" + bitwalvlKru + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  };
  };
  
  

  function zmianamapybitwyKru()
  {
	  if(statusbitywyflagaKru==1)
	  {
 plikwypolebitwy = "<img src=\"battlefield/krucjataver1/polebitwy" + bitwalvlKru + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
	  else if(statusbitywyflagaKru==2)
	  {
 plikwypolebitwy = "<img src=\"battlefield/krucjataver2/polebitwy" + bitwalvlKru + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
	  else if(statusbitywyflagaKru==3)
	  {
 plikwypolebitwy = "<img src=\"battlefield/krucjataver3/polebitwy" + bitwalvlKru + ".jpg\" />";
	document.getElementById("polebitwy").innerHTML = plikwypolebitwy;
	  }
  };

function bonuszkrucjatyF()
{
	if(glownareligia == "Żolto Ptactwo" && flagabonuszkrucjaty == 1)
	{
		bonuszkrucjaty1 = 2;
		setTimeout(function(){bonuszkrucjaty1 = 0;
		flagabonuszkrucjaty = 0;
		},15000);
	}
	else if(glownareligia == "Radogoszcze" && flagabonuszkrucjaty == 1)
	{
		bonuszkrucjaty2 = 2;
		setTimeout(function(){bonuszkrucjaty2 = 0;
		flagabonuszkrucjaty = 0;
		},15000);
	}
	else if(glownareligia == "Nemizianie" && flagabonuszkrucjaty == 1)
	{
		bonuszkrucjaty3 = 2;
		setTimeout(function(){bonuszkrucjaty3 = 0;
		flagabonuszkrucjaty = 0;
		},15000);
	}
}
/// krucjata koniec kontynuacji
function promocjaniewolnikow()
{
	if(populacjaniewolnikow>10 && zloto>20)
	{
		var dziesiecprocentniewolnikow = Math.round(populacjaniewolnikow * 0.1);
		zloto = zloto - 20;
		populacjaniewolnikow = populacjaniewolnikow - Math.ceil(populacjaniewolnikow *0.1);
		populacjatorsyanshow = populacjatorsyanshow + Math.ceil(populacjaniewolnikow *0.1);
		promocjaniewolnikowV = promocjaniewolnikowV + Math.ceil(populacjaniewolnikow *0.1);
		document.getElementById("promocjaniewolnikowD").innerHTML = "Awans społeczny dla  "+ dziesiecprocentniewolnikow + " niewolników"; 
		document.getElementById("t4").innerHTML = populacjaniewolnikow; 
		document.getElementById("t3").innerHTML = populacjatorsyanshow;  
		ogolpopulacji = Math.round(populacjaniewolnikow + populacjatorsyan);
		document.getElementById("ogolnailoscmieszkancowD").innerHTML = ogolpopulacji; 
		riots = riots + 0.2;
	}
	else if(niewolnicy == 0)
	{
		document.getElementById("promocjaniewolnikowD").innerHTML = "Ekhem... Wodzu, nie mamy niewolnikow!"; 
	}
	else if(zloto<20)
	{
		document.getElementById("promocjaniewolnikowD").innerHTML = "Nie mamy wystarczająco złota na promocje"; 
	}
		else if(populacjaniewolnikow<10)
	{
		document.getElementById("promocjaniewolnikowD").innerHTML = "Za mało niewolników żeby próbować dokonać promocji"; 
	}
};

var procentniewolnikowV = 0;
var populacjatorsyan;
var wzrosttorsyan;
var wzrostniewolnikow;
var ogolpopulacji;
var niewolnicycheck;
var populacjatorsyanshow;


function niewolnicycheckF()
{
if(niewolnicy==0)
{ niewolnicycheck = 0;
}
else
niewolnicycheck = 1;
wzrostpopow();
};

function wzrostpopow()
{
	wzrosttorsyan = Math.round((s4 + zbozeludzie + przeludnienie + promocjaniewolnikowV + nemizludzie)*wahaniapoptorsjan)/100
	wzrostniewolnikow = Math.round((s4 + zbozeludzie + przeludnienie - promocjaniewolnikowV + nemizludzie)*wahaniapopniewolnikow)/100
	pop();
}

function pop()
{
	
	if(niewolnicy>0)
	{
	populacjatorsyan = Math.floor(mieszkancydomu * iloscdomow + promocjaniewolnikowV + Math.round((s4 + zbozeludzie + przeludnienie + nemizludzie)*wahaniapoptorsjan)/100)
	
	}
	else if(niewolnicy==0)
	{
		populacjatorsyan = orsyanie;
		
	}
	populacja();
};

function populacja(promocjaniewolnikow)
{
	
	
	
	if(populacjatorsyan>0 && populacjatorsyan <= orsyanie )
	{
		populacjatorsyanshow = populacjatorsyan
		document.getElementById("t3").innerHTML = populacjatorsyanshow;  
		populacjaniewolnikow = Math.ceil(niewolnicy - promocjaniewolnikowV + Math.round(( s4 + zbozeludzie + egzekucjaniewolnikowV + przeludnienie + nemizludzie)*wahaniapopniewolnikow)/100) * niewolnicycheck
		ogolpopulacji = Math.round(populacjaniewolnikow + populacjatorsyan);
		document.getElementById("ogolnailoscmieszkancowD").innerHTML = ogolpopulacji; 
	}
	
	else if(populacjatorsyan<=0 && niewolnicy > 0)
	{
		populacjatorsyanshow = 0;
		populacjaniewolnikow = orsyanie;
		document.getElementById("t3").innerHTML = populacjatorsyanshow;  
		populacjaniewolnikow = Math.ceil(niewolnicy - promocjaniewolnikowV + Math.round(( s4 + zbozeludzie + egzekucjaniewolnikowV + przeludnienie  + nemizludzie)*100)/100) * niewolnicycheck
		ogolpopulacji = Math.round(populacjaniewolnikow);
		document.getElementById("ogolnailoscmieszkancowD").innerHTML = ogolpopulacji; 
	}
	
	else if(populacjatorsyan > orsyanie && niewolnicy > 0)
	{
		populacjaniewolnikow = 0
		populacjatorsyanshow = orsyanie;
		document.getElementById("t3").innerHTML = populacjatorsyanshow;  
		ogolpopulacji = Math.round(populacjatorsyanshow);
		document.getElementById("ogolnailoscmieszkancowD").innerHTML = ogolpopulacji; 
	}

	//document.getElementById("t1").innerHTML = wzrosttorsyan; 
	//document.getElementById("t2").innerHTML = wzrostniewolnikow; 
	
	document.getElementById("t4").innerHTML = populacjaniewolnikow; 
	
	procentniewolnikow();
	
};

	function procentniewolnikow()
{
	procentniewolnikowV = Math.round((populacjaniewolnikow * 100 / orsyanie)*100)/100 + "%";
	document.getElementById("procentniewolnikowD").innerHTML = procentniewolnikowV;
	document.getElementById("niewolnicyD").innerHTML = niewolnicy; 
	wahaniapop();
};
	
	function wahaniapop()
{
	if(rozbieznosc <0)
	{
			wahaniapoptorsjan = 10;
			wahaniapopniewolnikow = 90;
	}	
	else if(rozbieznosc >=0)
	{
		wahaniapoptorsjan = 66;
		wahaniapopniewolnikow = 33;
	};
	napiecianiewolnikow();
};

function napiecianiewolnikow()
{
	var prctniewolnikow = procentniewolnikowV.substring(0,2)
	
	if( prctniewolnikow > 10 && prctniewolnikow < 30 && napiecianiewolnikowV > 0)
	{
		napiecianiewolnikowV = napiecianiewolnikowV - 1;
	}
	else if( prctniewolnikow >= 30 && prctniewolnikow < 50 && napiecianiewolnikowV > 0)
	{
		napiecianiewolnikowV = napiecianiewolnikowV - 0.5;
	}
	
	else if(prctniewolnikow >= 50 && prctniewolnikow <= 60 && napiecianiewolnikowV <= 100 )
	{
		napiecianiewolnikowV = napiecianiewolnikowV - 0.2;
	
	}
	else if(prctniewolnikow > 60 && prctniewolnikow <= 70 && napiecianiewolnikowV <= 100)
	{
		napiecianiewolnikowV = napiecianiewolnikowV + 0.5;
	}
	else if(prctniewolnikow>70 && prctniewolnikow <= 90 && napiecianiewolnikowV <= 100)
	{
		napiecianiewolnikowV = napiecianiewolnikowV + 1;
	}
	else if(prctniewolnikow>90 && prctniewolnikow < 100 && napiecianiewolnikowV <= 100)
	{
		napiecianiewolnikowV = napiecianiewolnikowV + 2;
	}


	
	document.getElementById("napiecieniewolnikowD").innerHTML = napiecianiewolnikowV; 
	wplywnapiecianiewolnikownariots();
	napiecieponadsto();
};

function napiecieponadsto()
{
	if(napiecianiewolnikowV >= 100)
	{
		napiecianiewolnikowV = 100;
	};
};

function wplywnapiecianiewolnikownariots()
{
	if(napiecianiewolnikowV > 75 && napiecianiewolnikowV <= 85)
	{
		riots = riots + 0.5;
		document.getElementById("wzrostwku1").innerHTML = "Wk**wienie rośnie o 0.5pkt"; 
		setTimeout (function wplywnapiecianiewolnikownariots() { 
	$("#wzrostwku1").fadeOut(3000); }, 6000)
	$("#wzrostwku1").fadeIn(2500);
	}
	else if(napiecianiewolnikowV > 85 )
	{
		riots = riots + 1;
		document.getElementById("wzrostwku2").innerHTML = "Wk**wienie rośnie o 1pkt"; 
		setTimeout (function wplywnapiecianiewolnikownariots() { 
	$("#wzrostwku2").fadeOut(3000); }, 6000)
	$("#wzrostwku2").fadeIn(2500);
	}
};



function egzekucjaniewolnikow()
{
	if(populacjaniewolnikow>=10 && zloto>=10)
	{
		var dziesiecprocentniewolnikow = Math.round(populacjaniewolnikow * 0.1);
		zloto = zloto - 10;
		populacjaniewolnikow = populacjaniewolnikow - Math.ceil(populacjaniewolnikow *0.1);
		egzekucjaniewolnikowV = egzekucjaniewolnikowV - Math.ceil(populacjaniewolnikow *0.1)
		document.getElementById("egzekucjaniewolnikowD").innerHTML = "Dokonano egezekucji "+ dziesiecprocentniewolnikow + " niewolników" ; 
		document.getElementById("t4").innerHTML = populacjaniewolnikow; 
		document.getElementById("t3").innerHTML = populacjatorsyanshow; 
		document.getElementById("orsyanieS").innerHTML = orsyanie;
		ogolpopulacji = Math.round(populacjaniewolnikow + populacjatorsyan);
		document.getElementById("ogolnailoscmieszkancowD").innerHTML = ogolpopulacji; 
		riots = riots + 1;
	}
	else if(niewolnicy==0)
	{
		document.getElementById("egzekucjaniewolnikowD").innerHTML = "Ekhem... Wodzu, nie mamy niewolnikow!"; 
	}
	else if(zloto<10)
	{
		document.getElementById("egzekucjaniewolnikowD").innerHTML = "Nie masz wystarczająco złota żeby przeprowadzić tą akcję"; 
	}
	else if(populacjaniewolnikow<10)
	{
		document.getElementById("egzekucjaniewolnikowD").innerHTML = "Lud nie pozwola nam na totalną exterminację!" ; 
	}
};

var postawionewkosciachq = 0


function wynikirzutow()
{
	if(flagarzutu == 1 && grawkoscitwojrzut == 1 || grawkosciprzeciwnikarzut == 1)
	{
		wynikrzutu = "jedyneczka...";
	}
	else if(flagarzutu == 2 && grawkoscitwojrzut == 2 || grawkosciprzeciwnikarzut == 2)
	{
		wynikrzutu = "dwójeczka...";
	}
	else if(flagarzutu == 3 && grawkoscitwojrzut == 3 || grawkosciprzeciwnikarzut == 3)
	{
		wynikrzutu = "trójeczka...";
	}
	else if(flagarzutu == 4 && grawkoscitwojrzut == 4 || grawkosciprzeciwnikarzut == 4)
	{
		wynikrzutu = "czwóreczka...";
	}
	else if(flagarzutu == 5 && grawkoscitwojrzut == 5 || grawkosciprzeciwnikarzut == 5)
	{
		wynikrzutu = "piąteczka...";
	}
	else if(flagarzutu == 6 && grawkoscitwojrzut == 6 || grawkosciprzeciwnikarzut == 6)
	{
		wynikrzutu = "szósteczka...";
	}
};

function rozladowanienapiecianiewolnikow()
{
	if(napiecianiewolnikowV>=5 && zloto >=35 && niewolnicy > 0)
	{
		zloto = zloto - 35;
		napiecianiewolnikowV = napiecianiewolnikowV -5;
		riots = riots - 0.1;
		document.getElementById("rozladowanienapiecianiewolnikowD").innerHTML = "Rozładowanie napięcia powiodło się!" ; 
	}
	else if(niewolnicy == 0)
	{
		document.getElementById("rozladowanienapiecianiewolnikowD").innerHTML = "Nie mamy niewolników Wodzu!" ; 
	}
	else if(napiecianiewolnikowV<5 && napiecianiewolnikowV != 0 && zloto >=35 && niewolnicy > 0)
	{
		zloto = zloto - 35;
		napiecianiewolnikowV = 0;
		riots = riots - 0.1;
		document.getElementById("rozladowanienapiecianiewolnikowD").innerHTML = "Rozładowanie napięcia powiodło się!" ; 
	}
	else if(zloto<35 && niewolnicy > 0)
	{
		document.getElementById("rozladowanienapiecianiewolnikowD").innerHTML = "Mamy za mało złota na przeprowadzenia tej akcji!" ; 
	}
	else if(napiecianiewolnikowV==0)
	{
		document.getElementById("rozladowanienapiecianiewolnikowD").innerHTML = "Brak napięć pomiędzy niewolnikami, a torsjanami" ; 
	}
	
	
};
	
	function grawkoscicheckF()
	{
		if(oberzalvl<1)
		{
			document.getElementById("oberzainfo2").innerHTML = "Ekhem... Wodzu nie mamy oberży...";
		}
		else if(kosciwtrakcie==1)
		{
			document.getElementById("oberzainfo2").innerHTML = "Hola Hola Szefie, kości jeszcze się kręcą a Ty chcesz grać od nowa ?!";
			setTimeout (function () { 
			$("#oberzainfo2").fadeOut(3000); }, 4000)
			$("#oberzainfo2").fadeIn(500);
		}
		else if(kosciwtrakcie==0)
		{
			grawkosciF()
		}
	}
	
	function twojwynikrzutukoscmiF1()
	{
		twojwynikrzutukoscmi = Math.round((Math.random()*99)+5500);
		
	}
	
	function twojwynikrzutukoscmiF2()
	{
		twojwynikrzutukoscmi = Math.round((Math.random()*99)+8300);
		
	}
	
	function grawkosciF()
	{
		
		var postawionewkosciach = document.getElementById("grawkosciP").value;
		
		
		if(postawionewkosciach==0)
		{
			document.getElementById("oberzainfo").innerHTML = "Szefie... Mieszek, który stawiasz do gry jest pusty, rozważ postawienie złota!";
		}
		
		else if(postawionewkosciach <= zloto && kosciwtrakcie == 0)
		{
		twojwynikrzutukoscmiF1();
		grawkoscitwojrzut = "";
		grawkosciprzeciwnikarzut = "";
		document.getElementById("przeciwnikawynikkoscia").innerHTML = grawkosciprzeciwnikarzut;
		document.getElementById("twojwynikkoscia").innerHTML = grawkoscitwojrzut;
		zloto = zloto - postawionewkosciach;
		poziomgrywkosci = 8;
		grawkosciFobrazek();
		setTimeout(twojrzutkosciaF,twojwynikrzutukoscmi);
		postawionewkosciachq = postawionewkosciach;
		document.getElementById("oberzainfo").innerHTML = "W puli " + postawionewkosciach *2 + " złotych monet! Rzucaj szefie!";
		kosciwtrakcie = 1;
		iloscgierwkosci = iloscgierwkosci +1;
		document.getElementById("iloscgierwkoscid").innerHTML = iloscgierwkosci;
		
		}
		else if(postawionewkosciach > zloto)
		{
			document.getElementById("oberzainfo").innerHTML = "Ekhem Wodzu... nie masz tyle złota!";
		}
	};
	
	function twojrzutkosciaF()
	{
		twojwynikrzutukoscmiF2();
		grawkoscitwojrzut = Math.round((Math.random()*5)+1);
		flagarzutu = grawkoscitwojrzut;
		wynikirzutow();
		document.getElementById("twojwynikkoscia").innerHTML = grawkoscitwojrzut;
		poziomgrywkosci = grawkoscitwojrzut;
		grawkosciFobrazek();
		setTimeout(przeciwnikarzutkosciaF,twojwynikrzutukoscmi);
		setTimeout(function(){poziomgrywkosci = 8;grawkosciFobrazek();},3000)
		if(grawkoscitwojrzut<=3)
		{
		document.getElementById("oberzainfo").innerHTML = wynikrzutu + " No cóz... chyba wygram szefie;)";
		}
		else if(grawkoscitwojrzut>3)
		{
			document.getElementById("oberzainfo").innerHTML = wynikrzutu + " ... Dawaj te kości!!!";
		}
	};
	
	function przeciwnikarzutkosciaF()
	{
		grawkosciprzeciwnikarzut = Math.round((Math.random()*5)+1);
		flagarzutu = grawkosciprzeciwnikarzut;
		wynikirzutow();
		document.getElementById("przeciwnikawynikkoscia").innerHTML = grawkosciprzeciwnikarzut;
		poziomgrywkosci = grawkosciprzeciwnikarzut;
		grawkosciFobrazek();
		setTimeout(function(){poziomgrywkosci = 7;kosciwtrakcie = 0;grawkosciFobrazek();},3000)
		
		if(grawkoscitwojrzut>grawkosciprzeciwnikarzut)
		{
		document.getElementById("oberzainfo").innerHTML = wynikrzutu + "  Bierz swoje złoto i zejdź mi z oczu!";
		zloto = zloto + postawionewkosciachq*2;
		document.getElementById("oberzainfo2").innerHTML = "Wygraną w postaci:  " + postawionewkosciachq*2 + "  dorzuciliśmy do skarbca";
setTimeout (function przeciwnikarzutkosciaF() { 
$("#oberzainfo2").fadeOut(3000); }, 4000)
$("#oberzainfo2").fadeIn(500);
iloscwygranychwkosci = iloscwygranychwkosci + 1;
document.getElementById("iloscwygranychwkoscid").innerHTML = iloscwygranychwkosci;
ratiogierwkosci = ratiogierwkosci*1 + postawionewkosciachq*1;
ratiogierwoberzy = ratiogierwoberzy*1 + postawionewkosciachq*1
document.getElementById("ratiogierwkoscid").innerHTML = ratiogierwkosci*1;
document.getElementById("ratiogierwoberzyD").innerHTML = ratiogierwoberzy*1;
		}
		else if(grawkoscitwojrzut<grawkosciprzeciwnikarzut)
		{
			document.getElementById("oberzainfo").innerHTML = wynikrzutu + " Lubię Twoje złoto wodzu... Może jeszcze raz ?:)";
			iloscprzegranychwkosci = iloscprzegranychwkosci + 1;
			document.getElementById("iloscprzegranychwkoscid").innerHTML = iloscprzegranychwkosci;
			ratiogierwkosci = ratiogierwkosci*1 - postawionewkosciachq*1;
			ratiogierwoberzy = ratiogierwoberzy*1 - postawionewkosciachq*1;
		document.getElementById("ratiogierwkoscid").innerHTML = ratiogierwkosci*1;
		document.getElementById("ratiogierwoberzyD").innerHTML = ratiogierwoberzy*1;
		}
		else if(grawkoscitwojrzut==grawkosciprzeciwnikarzut)
		{
			zloto = zloto*1 + postawionewkosciachq*1;
			document.getElementById("oberzainfo").innerHTML = wynikrzutu + " No i co Wodzu? Wylgąda mi na remis, to może jeszcze raz?";
			iloscremisowwkosci = iloscremisowwkosci + 1;
			document.getElementById("iloscremisowwkoscid").innerHTML = iloscremisowwkosci;
			
		}
	};
	



	function grawkosciFobrazek()
	{
	if(poziomgrywkosci > 6)
	{ plikwobrazekgrywosci = "<img src=\"koscim" + poziomgrywkosci + ".gif\" />";
	document.getElementById("grawkosciobrazek").innerHTML = plikwobrazekgrywosci;}
	else if(poziomgrywkosci <= 6)
	{ plikwobrazekgrywosci = "<img src=\"buildings/oberza/"+ poziomgrywkosci + ".png\" />";
	document.getElementById("grawkosciobrazek").innerHTML = plikwobrazekgrywosci;

	}
	};
	
	
function grawtrzykartyF()
{
	ilosczlotanakarty = document.getElementById("obstawianiekarty").value;
	if(oberzalvl<1)
		{
			document.getElementById("grawkartyt1").innerHTML = "Ekhem... Wodzu nie mamy oberży...";
		}
	else if(zloto >= ilosczlotanakarty && ilosczlotanakarty > 0)
	{
		grawtrzykartyF2();
		zloto = (zloto)*1 - (ilosczlotanakarty)*1;
		document.getElementById("grawkartyt1").innerHTML = ilosczlotanakarty*2 + " sztuk złota w puli";
	}
	else if (poziomgry == 0 && rozgrywka == 1 && zloto < ilosczlotanakarty)
	{
		document.getElementById("grawkartyt2").innerHTML ="Nie masz tyle złota, Wodzu!";
	}
	else if (poziomgry == 0 && rozgrywka == 1 && ilosczlotanakarty == 0)
	{
		document.getElementById("grawkartyt2").innerHTML ="Szefie, postaw coś!";
	}
}
	
function grawkartystatusF()
{
	if(grawkartystatus==1)
	{
	zloto = (zloto)*1 + (ilosczlotanakarty)*2;
	ratiogierwkarty = (ratiogierwkarty)*1 + (ilosczlotanakarty)*1;
	ratiogierwoberzy = (ratiogierwoberzy)*1 + (ilosczlotanakarty)*1;
	document.getElementById("grawkartyt6").innerHTML = ilosczlotanakarty*2 + " sztuk złota dodane do skarbca";
	document.getElementById("ratiogierwoberzyD").innerHTML = ratiogierwoberzy*1;
	document.getElementById("ratiogierwkartyD").innerHTML = ratiogierwkarty*1;
	}
	else if(grawkartystatus==2)
	{
		zloto = (zloto)*1 + (ilosczlotanakarty)*0.5;
	ratiogierwkarty = (ratiogierwkarty)*1 + (ilosczlotanakarty)*0.5;
	ratiogierwoberzy = (ratiogierwoberzy)*1 + (ilosczlotanakarty)*0.5;
	document.getElementById("grawkartyt6").innerHTML = "Trafiliśmy za drugim razem połowa sztuk złota  " + ilosczlotanakarty*0.5 + "  dodane do skarbca";
	document.getElementById("ratiogierwoberzyD").innerHTML = ratiogierwoberzy*1;
	document.getElementById("ratiogierwkartyD").innerHTML = ratiogierwkarty*1;
	}
	else if(grawkartystatus==3)
	{
	
	ratiogierwkarty = (ratiogierwkarty)*1 - (ilosczlotanakarty)*1;
	ratiogierwoberzy = (ratiogierwoberzy)*1 - (ilosczlotanakarty)*1;
	document.getElementById("grawkartyt6").innerHTML = "Przegraliśmy  " + ilosczlotanakarty*1 ;
	document.getElementById("ratiogierwoberzyD").innerHTML = ratiogierwoberzy*1;
	document.getElementById("ratiogierwkartyD").innerHTML = ratiogierwkarty*1;
	}
	grawkartystatus = 0;
};


function szkolenieszpiega()
{
	if(zloto>=kosztszpiega && koszarylvl>0 && iloscszpiegow<11)
	{
		
		zloto = zloto - kosztszpiega;
		iloscszpiegow = iloscszpiegow +1;
		kosztszpiega = 5 + (iloscszpiegow * 5);
		document.getElementById("iloscszpiegowD").innerHTML = iloscszpiegow + " / 10";
		document.getElementById("iloscszpiegowD2").innerHTML = iloscszpiegow;
		kosztutrzymaniaszpiega = Math.round((iloscszpiegow * 0.04)*100)/100;
		document.getElementById("kosztutrzymaniaszpiegaD").innerHTML = kosztutrzymaniaszpiega; 
		document.getElementById("kosztszpiegaD").innerHTML = kosztszpiega;
		kosztwyslaniaszpiega1pkt = iloscszpiegow * 9;
		document.getElementById("kosztwyslaniaszpiega1pktD").innerHTML = kosztwyslaniaszpiega1pkt; 
		kosztwyslaniaszpiega1 = 10 + (sprawdzilumajawojowmyerysilvl + sprawdzilumajawojowmerkowielvl + sprawdzilumajawojowopsydianielvl);
		document.getElementById("kosztwyslaniaszpiega1D").innerHTML = kosztwyslaniaszpiega1; 
		kosztwyslaniaszpiega2 = 15 + (sprawdzilumajawojowmyerysilvl + sprawdzilumajawojowmerkowielvl + sprawdzilumajawojowopsydianielvl);
		document.getElementById("kosztwyslaniaszpiega2D").innerHTML = kosztwyslaniaszpiega2; 
		kosztwyslaniaszpiega2pkt = iloscszpiegow * 5;
		document.getElementById("kosztwyslaniaszpiega2pktD").innerHTML = kosztwyslaniaszpiega2pkt; 
	}
	else if(koszarylvl<1)
	{
		document.getElementById("szpiegostwoinfo").innerHTML = "Wodzu, wybuduj najpierw koszary";
	}
	else if(iloscszpiegow==10)
	{
		document.getElementById("szpiegostwoinfo").innerHTML = "Wodzu, osiągneliśmy maksymalną ilość szpiegów";
	}
	else if(zloto<kosztszpiega)
	{
		document.getElementById("szpiegostwoinfo").innerHTML = "Wodzu, nie stać nas na szpiega!";
	}
};

function misjailewojow()
{
	var wyslanieszpiega1 = $('#szpiegostwom1d').val();
	kosztwyslaniaszpiega1pkt = iloscszpiegow * 9;
	document.getElementById("kosztwyslaniaszpiega1pktD").innerHTML = kosztwyslaniaszpiega1pkt; 
	
	if(wyslanieszpiega1 =="yerysim1" && zloto >= kosztwyslaniaszpiega1 && punktyszpiegostwa >= kosztwyslaniaszpiega1pkt && iloscszpiegow > 0)
	{
		
		sprawdzilumajawojowmyerysilvl = sprawdzilumajawojowmyerysilvl + 1;
		document.getElementById("sprawdzilumajawojowmyerysilvlD").innerHTML = sprawdzilumajawojowmyerysilvl;
		zloto = zloto - kosztwyslaniaszpiega1;
		punktyszpiegostwa = punktyszpiegostwa - kosztwyslaniaszpiega1pkt
		document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100"; 
		document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
		document.getElementById("kosztwyslaniaszpiega1pktD").innerHTML = kosztwyslaniaszpiega1pkt; 
		kosztwyslaniaszpiega1 = 10 + (sprawdzilumajawojowmyerysilvl + sprawdzilumajawojowmerkowielvl + sprawdzilumajawojowopsydianielvl) ;
		document.getElementById("kosztwyslaniaszpiega1D").innerHTML = kosztwyslaniaszpiega1; 
		populacjayerisowF();
	}
		else if(wyslanieszpiega1=="merkowiem1" && zloto >= kosztwyslaniaszpiega1 && punktyszpiegostwa >= kosztwyslaniaszpiega1pkt && iloscszpiegow > 0)
		{
			sprawdzilumajawojowmerkowielvl = sprawdzilumajawojowmerkowielvl + 1;
			document.getElementById("sprawdzilumajawojowmerkowielvlD").innerHTML = sprawdzilumajawojowmerkowielvl;
			zloto = zloto - kosztwyslaniaszpiega1;
		punktyszpiegostwa = punktyszpiegostwa - kosztwyslaniaszpiega1pkt
		document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100"; 
		document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
		document.getElementById("kosztwyslaniaszpiega1pktD").innerHTML = kosztwyslaniaszpiega1pkt; 
		kosztwyslaniaszpiega1 = 10 + (sprawdzilumajawojowmyerysilvl + sprawdzilumajawojowmerkowielvl + sprawdzilumajawojowopsydianielvl);
		document.getElementById("kosztwyslaniaszpiega1D").innerHTML = kosztwyslaniaszpiega1; 
		}
			else if (wyslanieszpiega1=="opsydianiem1" && zloto >= kosztwyslaniaszpiega1 && punktyszpiegostwa >= kosztwyslaniaszpiega1pkt && iloscszpiegow > 0)
			{
				sprawdzilumajawojowopsydianielvl = sprawdzilumajawojowopsydianielvl + 1;
				document.getElementById("sprawdzilumajawojowopsydianielvlD").innerHTML = sprawdzilumajawojowopsydianielvl;
				zloto = zloto - kosztwyslaniaszpiega1;
		punktyszpiegostwa = punktyszpiegostwa - kosztwyslaniaszpiega1pkt
		document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100"; 
		document.getElementById("kosztwyslaniaszpiega1pktD").innerHTML = kosztwyslaniaszpiega1pkt; 
		document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
		kosztwyslaniaszpiega1 = 10 + (sprawdzilumajawojowmyerysilvl + sprawdzilumajawojowmerkowielvl + sprawdzilumajawojowopsydianielvl);
		document.getElementById("kosztwyslaniaszpiega1D").innerHTML = kosztwyslaniaszpiega1; 
			}
				else if(koszarylvl < 1)
				{
					document.getElementById("szpiegostwoinfo").innerHTML = "Pamietaj o wybudowaniu koszar...";
				}
				else if(zloto<kosztwyslaniaszpiega1)
				{
					document.getElementById("szpiegostwoinfo").innerHTML = "Nie stać nas na wysłanie szpiega...";
				}
				else if(punktyszpiegostwa<kosztwyslaniaszpiega1pkt)
				{
					document.getElementById("szpiegostwoinfo").innerHTML = "Za mało punktów szpiegostwa na wysłanie szpiega...";
				}
};

function misjakradziezzlota()
{
	var wyslanieszpiega2 = $('#szpiegostwom2d').val();
	kosztwyslaniaszpiega2pkt = iloscszpiegow * 5;
	document.getElementById("kosztwyslaniaszpiega2pktD").innerHTML = kosztwyslaniaszpiega2pkt; 
	if(wyslanieszpiega2 =="yerysim2" && zloto >= kosztwyslaniaszpiega2 && punktyszpiegostwa >= kosztwyslaniaszpiega2pkt && iloscszpiegow > 0)
	{
		ukradnijzlotoyerysilvl = ukradnijzlotoyerysilvl + 1;
		punktyszpiegostwa = punktyszpiegostwa - kosztwyslaniaszpiega2pkt;
		document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100";
		document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
		document.getElementById("ukradnijzlotoyerysilvlD").innerHTML = ukradnijzlotoyerysilvl;
		kosztwyslaniaszpiega2 = 15 + (sprawdzilumajawojowmyerysilvl + sprawdzilumajawojowmerkowielvl + sprawdzilumajawojowopsydianielvl);
		document.getElementById("kosztwyslaniaszpiega2D").innerHTML = kosztwyslaniaszpiega2; 
		ukradnijzlotomisjawynikYerysi();
	}
		else if(wyslanieszpiega2=="merkowiem2" && zloto >= kosztwyslaniaszpiega2 && punktyszpiegostwa >= kosztwyslaniaszpiega2pkt && iloscszpiegow > 0)
		{
			ukradnijzlotomerkowielvl = ukradnijzlotomerkowielvl + 1;
			punktyszpiegostwa = punktyszpiegostwa - kosztwyslaniaszpiega2pkt;
			document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100";
			document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
			document.getElementById("ukradnijzlotomerkowielvlD").innerHTML = ukradnijzlotomerkowielvl;
			kosztwyslaniaszpiega2 = 15 + (sprawdzilumajawojowmyerysilvl + sprawdzilumajawojowmerkowielvl + sprawdzilumajawojowopsydianielvl);
			document.getElementById("kosztwyslaniaszpiega2D").innerHTML = kosztwyslaniaszpiega2; 
			ukradnijzlotomisjawynikMerkowie();
		}
			else if (wyslanieszpiega2=="opsydianiem2" && zloto >= kosztwyslaniaszpiega2 && punktyszpiegostwa >= kosztwyslaniaszpiega2pkt && iloscszpiegow > 0)
			{
				ukradnijzlotoopsydianielvl = ukradnijzlotoopsydianielvl + 1;
				punktyszpiegostwa = punktyszpiegostwa - kosztwyslaniaszpiega2pkt;
				document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100";
				document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
				document.getElementById("ukradnijzlotoopsydianielvlD").innerHTML = ukradnijzlotoopsydianielvl;
				kosztwyslaniaszpiega2 = 15 + (sprawdzilumajawojowmyerysilvl + sprawdzilumajawojowmerkowielvl + sprawdzilumajawojowopsydianielvl);
				document.getElementById("kosztwyslaniaszpiega2D").innerHTML = kosztwyslaniaszpiega2; 
				ukradnijzlotomisjawynikOpsydianie();
			}
			else if(koszarylvl < 1)
				{
					document.getElementById("szpiegostwoinfo").innerHTML = "Pamietaj o wybudowaniu koszar...";
				}
				else if(zloto<kosztwyslaniaszpiega2)
				{
					document.getElementById("szpiegostwoinfo").innerHTML = "Nie stać nas na wysłanie szpiega...";
				}
				else if(punktyszpiegostwa<kosztwyslaniaszpiega2pkt)
				{
					document.getElementById("szpiegostwoinfo").innerHTML = "Za mało punktów szpiegostwa na wysłanie szpiega...";
				}
};

	

function populacjayerisowF()
{
	populacjayerisow = orsyanie;
	silayerisow = Math.floor(populacjayerisow * 0.1);
	powodzeniemisjiszpiegowskiej = Math.round((Math.random()*100)+ 0);
	if(iloscszpiegow == 1 && powodzeniemisjiszpiegowskiej <= 80)
	{
	szacowanailoscyerisow = silayerisow + Math.round((Math.random()*100)+ 0) - Math.round((Math.random()*100)+ 0)
	if(szacowanailoscyerisow < 0)
	{
		szacowanailoscyerisow = 0;
	}
	document.getElementById("populacjayerisowD").innerHTML = szacowanailoscyerisow;
	}
	else if(iloscszpiegow == 2 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscyerisow = silayerisow + Math.round((Math.random()*90)+ 0) - Math.round((Math.random()*90)+ 0)
	if(szacowanailoscyerisow < 0)
	{
		szacowanailoscyerisow = 0;
	}
	document.getElementById("populacjayerisowD").innerHTML = szacowanailoscyerisow;
	}
	else if(iloscszpiegow == 3 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscyerisow = silayerisow + Math.round((Math.random()*70)+ 0) - Math.round((Math.random()*70)+ 0)
	if(szacowanailoscyerisow < 0)
	{
		szacowanailoscyerisow = 0;
	}
	document.getElementById("populacjayerisowD").innerHTML = szacowanailoscyerisow;
	}
	else if(iloscszpiegow == 4 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscyerisow = silayerisow + Math.round((Math.random()*60)+ 0) - Math.round((Math.random()*60)+ 0)
	if(szacowanailoscyerisow < 0)
	{
		szacowanailoscyerisow = 0;
	}
	document.getElementById("populacjayerisowD").innerHTML = szacowanailoscyerisow;
	}
	else if(iloscszpiegow == 5 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscyerisow = silayerisow + Math.round((Math.random()*50)+ 0) - Math.round((Math.random()*50)+ 0)
	if(szacowanailoscyerisow < 0)
	{
		szacowanailoscyerisow = 0;
	}
	document.getElementById("populacjayerisowD").innerHTML = szacowanailoscyerisow;
	}
	else if(iloscszpiegow == 6 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscyerisow = silayerisow + Math.round((Math.random()*40)+ 0) - Math.round((Math.random()*40)+ 0)
	if(szacowanailoscyerisow < 0)
	{
		szacowanailoscyerisow = 0;
	}
	document.getElementById("populacjayerisowD").innerHTML = szacowanailoscyerisow;
	}
	else if(iloscszpiegow == 7 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscyerisow = silayerisow + Math.round((Math.random()*30)+ 0) - Math.round((Math.random()*30)+ 0)
	if(szacowanailoscyerisow < 0)
	{
		szacowanailoscyerisow = 0;
	}
	document.getElementById("populacjayerisowD").innerHTML = szacowanailoscyerisow;
	}
	else if(iloscszpiegow == 8 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscyerisow = silayerisow + Math.round((Math.random()*20)+ 0) - Math.round((Math.random()*20)+ 0)
	if(szacowanailoscyerisow < 0)
	{
		szacowanailoscyerisow = 0;
	}
	document.getElementById("populacjayerisowD").innerHTML = szacowanailoscyerisow;
	}
	else if(iloscszpiegow == 9 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscyerisow = silayerisow + Math.round((Math.random()*10)+ 0) - Math.round((Math.random()*10)+ 0)
	if(szacowanailoscyerisow < 0)
	{
		szacowanailoscyerisow = 0;
	}
	document.getElementById("populacjayerisowD").innerHTML = szacowanailoscyerisow;
	}
	else if(iloscszpiegow == 10 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscyerisow = silayerisow + Math.round((Math.random()*3)+ 0) - Math.round((Math.random()*3)+ 0)

	document.getElementById("populacjayerisowD").innerHTML = szacowanailoscyerisow;
	}
	else if(powodzeniemisjiszpiegowskiej > 80)
	{
		document.getElementById("szpiegostwoinfo").innerHTML = "Szefie, zła wiadomość... Złapali naszego szpiega, relacje z Yerisami oraz w niewielkim stopniu z Maurykami zmalały";
		iloscszpiegow = iloscszpiegow - 1;
		document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100"; 
		document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
		relacjezmaurykami = relacjezmaurykami -5;
			relacjezyerisami = relacjezyerisami -15;
	}
};

function populacjamerkowF()
{
	populacjamerkow = Math.floor(orsyanie * 1.5);
	silamerkow = Math.floor(populacjamerkow * 0.1);
	powodzeniemisjiszpiegowskiej = Math.round((Math.random()*100)+ 0);
	if(iloscszpiegow == 1 && powodzeniemisjiszpiegowskiej <= 80)
	{
	szacowanailoscmerkow = silamerkow + Math.round((Math.random()*100)+ 0) - Math.round((Math.random()*100)+ 0)
	if(szacowanailoscmerkow < 0)
	{
		szacowanailoscmerkow = 0;
	}
	document.getElementById("populacjamerkowD").innerHTML = szacowanailoscmerkow;
	}
	else if(iloscszpiegow == 2 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscmerkow = silamerkow + Math.round((Math.random()*90)+ 0) - Math.round((Math.random()*90)+ 0)
	if(szacowanailoscmerkow < 0)
	{
		szacowanailoscmerkow = 0;
	}
	document.getElementById("populacjamerkowD").innerHTML = szacowanailoscmerkow;
	}
	else if(iloscszpiegow == 3 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscmerkow = silamerkow + Math.round((Math.random()*70)+ 0) - Math.round((Math.random()*70)+ 0)
	if(szacowanailoscmerkow < 0)
	{
		szacowanailoscmerkow = 0;
	}
	document.getElementById("populacjamerkowD").innerHTML = szacowanailoscmerkow;
	}
	else if(iloscszpiegow == 4 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscmerkow = silamerkow + Math.round((Math.random()*60)+ 0) - Math.round((Math.random()*60)+ 0)
	if(szacowanailoscmerkow < 0)
	{
		szacowanailoscmerkow = 0;
	}
	document.getElementById("populacjamerkowD").innerHTML = szacowanailoscmerkow;
	}
	else if(iloscszpiegow == 5 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscmerkow = silamerkow + Math.round((Math.random()*50)+ 0) - Math.round((Math.random()*50)+ 0)
	if(szacowanailoscmerkow < 0)
	{
		szacowanailoscmerkow = 0;
	}
	document.getElementById("populacjamerkowD").innerHTML = szacowanailoscmerkow;
	}
	else if(iloscszpiegow == 6 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscmerkow = silamerkow + Math.round((Math.random()*40)+ 0) - Math.round((Math.random()*40)+ 0)
	if(szacowanailoscmerkow < 0)
	{
		szacowanailoscmerkow = 0;
	}
	document.getElementById("populacjamerkowD").innerHTML = szacowanailoscmerkow;
	}
	else if(iloscszpiegow == 7 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscmerkow = silamerkow + Math.round((Math.random()*30)+ 0) - Math.round((Math.random()*30)+ 0)
	if(szacowanailoscmerkow < 0)
	{
		szacowanailoscmerkow = 0;
	}
	document.getElementById("populacjamerkowD").innerHTML = szacowanailoscmerkow;
	}
	else if(iloscszpiegow == 8 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscmerkow = silamerkow + Math.round((Math.random()*20)+ 0) - Math.round((Math.random()*20)+ 0)
	if(szacowanailoscmerkow < 0)
	{
		szacowanailoscmerkow = 0;
	}
	document.getElementById("populacjamerkowD").innerHTML = szacowanailoscmerkow;
	}
	else if(iloscszpiegow == 9 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscmerkow = silamerkow + Math.round((Math.random()*10)+ 0) - Math.round((Math.random()*10)+ 0)
	if(szacowanailoscmerkow < 0)
	{
		szacowanailoscmerkow = 0;
	}
	document.getElementById("populacjamerkowD").innerHTML = szacowanailoscmerkow;
	}
	else if(iloscszpiegow == 10 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscmerkow = silamerkow + Math.round((Math.random()*3)+ 0) - Math.round((Math.random()*3)+ 0)

	document.getElementById("populacjamerkowD").innerHTML = szacowanailoscmerkow;
	}
	else if(powodzeniemisjiszpiegowskiej > 80)
	{
		document.getElementById("szpiegostwoinfo").innerHTML = "Szefie, zła wiadomość... Złapali naszego szpiega, relacje z Merkowie  oraz w niewielkim stopniu z Plemami, zmalały";
		iloscszpiegow = iloscszpiegow - 1;
		document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100"; 
		document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
		relacjezplemami = relacjezplemami -5;
		relacjezmerkami = relacjezmerkami -15;
	}
	
};

function populacjaopsydianF()
{
	populacjaopsydian = Math.floor(orsyanie * 2);
	silaopsydian = Math.floor(populacjaopsydian * 0.1);
	if(iloscszpiegow == 1 && powodzeniemisjiszpiegowskiej <= 80)
	{
	szacowanailoscopsydian = silaopsydian + Math.round((Math.random()*100)+ 0) - Math.round((Math.random()*100)+ 0)
	if(szacowanailoscopsydian < 0)
	{
		szacowanailoscopsydian = 0;
	}
	document.getElementById("populacjaopsydianD").innerHTML = szacowanailoscopsydian;
	}
	else if(iloscszpiegow == 2 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscopsydian = silaopsydian + Math.round((Math.random()*90)+ 0) - Math.round((Math.random()*90)+ 0)
	if(szacowanailoscopsydian < 0)
	{
		szacowanailoscopsydian = 0;
	}
	document.getElementById("populacjaopsydianD").innerHTML = szacowanailoscopsydian;
	}
	else if(iloscszpiegow == 3 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscopsydian = silaopsydian + Math.round((Math.random()*70)+ 0) - Math.round((Math.random()*70)+ 0)
	if(szacowanailoscopsydian < 0)
	{
		szacowanailoscopsydian = 0;
	}
	document.getElementById("populacjaopsydianD").innerHTML = szacowanailoscopsydian;
	}
	else if(iloscszpiegow == 4 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscopsydian = silaopsydian + Math.round((Math.random()*60)+ 0) - Math.round((Math.random()*60)+ 0)
	if(szacowanailoscopsydian < 0)
	{
		szacowanailoscopsydian = 0;
	}
	document.getElementById("populacjaopsydianD").innerHTML = szacowanailoscopsydian;
	}
	else if(iloscszpiegow == 5 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscopsydian = silaopsydian + Math.round((Math.random()*50)+ 0) - Math.round((Math.random()*50)+ 0)
	if(szacowanailoscopsydian < 0)
	{
		szacowanailoscopsydian = 0;
	}
	document.getElementById("populacjaopsydianD").innerHTML = szacowanailoscopsydian;
	}
	else if(iloscszpiegow == 6 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscopsydian = silaopsydian + Math.round((Math.random()*40)+ 0) - Math.round((Math.random()*40)+ 0)
	if(szacowanailoscopsydian < 0)
	{
		szacowanailoscopsydian = 0;
	}
	document.getElementById("populacjaopsydianD").innerHTML = szacowanailoscopsydian;
	}
	else if(iloscszpiegow == 7 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscopsydian = silaopsydian + Math.round((Math.random()*30)+ 0) - Math.round((Math.random()*30)+ 0)
	if(szacowanailoscopsydian < 0)
	{
		szacowanailoscopsydian = 0;
	}
	document.getElementById("populacjaopsydianD").innerHTML = szacowanailoscopsydian;
	}
	else if(iloscszpiegow == 8 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscopsydian = silaopsydian + Math.round((Math.random()*20)+ 0) - Math.round((Math.random()*20)+ 0)
	if(szacowanailoscopsydian < 0)
	{
		szacowanailoscopsydian = 0;
	}
	document.getElementById("populacjaopsydianD").innerHTML = szacowanailoscopsydian;
	}
	else if(iloscszpiegow == 9 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscopsydian = silaopsydian + Math.round((Math.random()*10)+ 0) - Math.round((Math.random()*10)+ 0)
	if(szacowanailoscopsydian < 0)
	{
		szacowanailoscopsydian = 0;
	}
	document.getElementById("populacjaopsydianD").innerHTML = szacowanailoscopsydian;
	}
	else if(iloscszpiegow == 10 && powodzeniemisjiszpiegowskiej < 80)
	{
	szacowanailoscopsydian = silaopsydian + Math.round((Math.random()*3)+ 0) - Math.round((Math.random()*3)+ 0)

	document.getElementById("populacjaopsydianD").innerHTML = szacowanailoscopsydian;
	}
	else if(powodzeniemisjiszpiegowskiej > 80)
	{
		document.getElementById("szpiegostwoinfo").innerHTML = "Szefie, zła wiadomość... Złapali naszego szpiega, relacje z Opsydianami oraz w niewielkim stopniu z Nordyskami zmalały";
		iloscszpiegow = iloscszpiegow - 1;
		document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100"; 
		document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
		relacjeznordyskami = relacjeznordyskami -5;
		relacjezopsydianami = relacjezopsydianami -15;
	}
};

function ukradnijzlotomisjawynikYerysi()
{
	{
	powodzeniemisjiszpiegowskiej = Math.round((Math.random()*100)+ 0);
	if(iloscszpiegow==1 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjayerisow + Math.round((Math.random()*100)+ 0)) / 10;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}		
	else if(iloscszpiegow==2 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjayerisow + Math.round((Math.random()*105)+ 0)) / 9;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==3 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjayerisow + Math.round((Math.random()*110)+ 0)) / 8;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==4 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjayerisow + Math.round((Math.random()*120)+ 0)) / 7;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==5 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjayerisow + Math.round((Math.random()*130)+ 0)) / 6;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==6 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjayerisow + Math.round((Math.random()*140)+ 0)) / 5;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==7 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjayerisow + Math.round((Math.random()*150)+ 0)) / 4;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==8 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjayerisow + Math.round((Math.random()*160)+ 0)) / 3;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==9 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjayerisow + Math.round((Math.random()*170)+ 0)) / 2;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==10 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjayerisow + Math.round((Math.random()*200)+ 0));
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}
	else if(powodzeniemisjiszpiegowskiej > 50)
		{
			document.getElementById("szpiegostwoinfo").innerHTML = "Szefie, zła wiadomość... Złapali naszego szpiega, relacje z Yerisami oraz w niewielkim stopniu z Maurykami zmalały";
			iloscszpiegow = iloscszpiegow - 1;
			document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100"; 
		document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
			relacjezmaurykami = relacjezmaurykami -5;
			relacjezyerisami = relacjezyerisami -15;
		}
}
}

function ukradnijzlotomisjawynikMerkowie()
{
	{
	powodzeniemisjiszpiegowskiej = Math.round((Math.random()*100)+ 0);
	if(iloscszpiegow==1 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjamerkow + Math.round((Math.random()*100)+ 0)) / 10;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}		
	else if(iloscszpiegow==2 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjamerkow + Math.round((Math.random()*105)+ 0)) / 9;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==3 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjamerkow + Math.round((Math.random()*110)+ 0)) / 8;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==4 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjamerkow + Math.round((Math.random()*120)+ 0)) / 7;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==5 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjamerkow + Math.round((Math.random()*130)+ 0)) / 6;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==6 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjamerkow + Math.round((Math.random()*140)+ 0)) / 5;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==7 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjamerkow + Math.round((Math.random()*150)+ 0)) / 4;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==8 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjamerkow + Math.round((Math.random()*160)+ 0)) / 3;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==9 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjamerkow + Math.round((Math.random()*170)+ 0)) / 2;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==10 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjamerkow + Math.round((Math.random()*200)+ 0));
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}
	else if(powodzeniemisjiszpiegowskiej > 50)
		{
			document.getElementById("szpiegostwoinfo").innerHTML = "Szefie, zła wiadomość... Złapali naszego szpiega, relacje z Merkami oraz w niewielkim stopniu z Plemami zmalały";
			iloscszpiegow = iloscszpiegow - 1;
			document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100"; 
		document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
			relacjezplemami = relacjezplemami -5;
			relacjezmerkami = relacjezmerkami -15;
		}
}
}

function ukradnijzlotomisjawynikOpsydianie()
{
	powodzeniemisjiszpiegowskiej = Math.round((Math.random()*100)+ 0);
	if(iloscszpiegow==1 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjaopsydian + Math.round((Math.random()*100)+ 0)) / 10;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}		
	else if(iloscszpiegow==2 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjaopsydian + Math.round((Math.random()*105)+ 0)) / 9;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==3 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjaopsydian + Math.round((Math.random()*110)+ 0)) / 8;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==4 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjaopsydian + Math.round((Math.random()*120)+ 0)) / 7;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==5 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjaopsydian + Math.round((Math.random()*130)+ 0)) / 6;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==6 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjaopsydian + Math.round((Math.random()*140)+ 0)) / 5;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==7 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjaopsydian + Math.round((Math.random()*150)+ 0)) / 4;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==8 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjaopsydian + Math.round((Math.random()*160)+ 0)) / 3;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==9 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjaopsydian + Math.round((Math.random()*170)+ 0)) / 2;
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}	
	else if(iloscszpiegow==10 && powodzeniemisjiszpiegowskiej <= 50)
	{
		ukradzionezloto = (populacjaopsydian + Math.round((Math.random()*200)+ 0));
		zloto = zloto + ukradzionezloto;
		document.getElementById("szpiegostwoinfo").innerHTML = "Ukradliśmy " + ukradzionezloto + " złota. Szpieg powrócił naszej osady";
	}
	else if(powodzeniemisjiszpiegowskiej > 50)
		{
			document.getElementById("szpiegostwoinfo").innerHTML = "Szefie, zła wiadomość... Złapali naszego szpiega, relacje z Opsydianami oraz w niewielkim stopniu z Nordyskami zmalały";
			iloscszpiegow = iloscszpiegow - 1;
			document.getElementById("punktyszpiegostwaD").innerHTML = punktyszpiegostwa + " / 100"; 
		document.getElementById("punktyszpiegostwaD2").innerHTML = punktyszpiegostwa;
			relacjeznordyskami = relacjeznordyskami -5;
			relacjezopsydianami = relacjezopsydianami -15;
		}
};


function poziomrelacjiF()
{
	if(pktrelacji < (-95))
	{
		poziomrelacji = "Brak relacji";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "Możesz oczekiwać częstych najazdów tego plemienia na Twoje ziemie</br>-0.28 do handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = (-0.28);
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "-0.8 do dochodu z handlu";
			wplywnahandel = (-0.8);
			}
		
	}
	else if(pktrelacji < (-85) && pktrelacji >= (-95))
	{
		poziomrelacji = "Tragiczny";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "Możesz oczekiwać częstych najazdów tego plemienia na Twoje ziemie</br>-0.16 do handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = (-0.16);
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "-0.6 do dochodu z handlu";
			wplywnahandel = (-0.6);
			}
	}
	else if(pktrelacji < (-65) && pktrelacji >= (-85))
	{
		poziomrelacji = "Opłakany";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "Możesz oczekiwać częstych najazdów tego plemienia na Twoje ziemie</br>-0.15 do handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = (-0.15);
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "-0.4 do dochodu z handlu";
			wplywnahandel = (-0.4);
			}
	}
	else if(pktrelacji < (-45) && pktrelacji >= (-65))
	{
		poziomrelacji = "Bardzo zły";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "-0.05 do dochodu z handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = (-0.05);
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "-0.3 do dochodu z handlu";
			wplywnahandel = (-0.3);
			}
	}
	else if(pktrelacji < (-25) && pktrelacji >= (-45))
	{
		poziomrelacji = "Zły";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "-0.02 do dochodu z handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = (-0.02);
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "-0.2 do dochodu z handlu";
			wplywnahandel = (-0.2);
			}
	}
	else if(pktrelacji < 0 && pktrelacji >= (-24))
	{
		poziomrelacji = "Umiarkowany";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "-0.01 do dochodu z handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = (-0.01);
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "-0.1 do dochodu z handlu";
			wplywnahandel = (-0.1);
			}
	}
	else if(pktrelacji < 25 && pktrelacji >= 0)
	{
		poziomrelacji = "Dobry";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "+0.01 do dochodu z handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = 0.01;
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "+0.1 do dochodu z handlu";
			wplywnahandel = 0.1;
			}
	}
	else if(pktrelacji < 45 && pktrelacji >= 25 )
	{
		poziomrelacji = "Bardzo dobry";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "+0.02 do dochodu z handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = 0.02;
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "+0.2 do dochodu z handlu";
			wplywnahandel = 0.2;
			}
	}
	else if(pktrelacji < 65 && pktrelacji >= 45)
	{
		poziomrelacji = "Rewelacyjny";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "+0.05 do dochodu z handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = 0.05;
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "+0.3 do dochodu z handlu";
			wplywnahandel = 0.3;
			}
	}
	else if(pktrelacji < 85 && pktrelacji >= 65)
	{
		poziomrelacji = "Wyśmienity";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "+0.07 do dochodu z handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = 0.07;
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "+0.5 do dochodu z handlu";
			wplywnahandel = 0.5;
			}
	}
	else if(pktrelacji <= 95 && pktrelacji >= 85)
	{
		poziomrelacji = "Wspaniały";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "+0.09 do dochodu z handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = 0.09;
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "+0.6 do dochodu z handlu";
			wplywnahandel = 0.6;
			}
	}
	else if(pktrelacji > 95 )
	{
		poziomrelacji = "Czołobitny";
		if(rodzajplemienia == "W")
		{
			bonusinfo = "+0.12 do dochodu z handlu z zaprzyjaznionym plemieniem";
			wplywnahandel = 0.12;
		}
		else if(rodzajplemienia == "H")
			{
			bonusinfo = "+0.8 do dochodu z handlu";
			wplywnahandel = 0.8;
			}
	}
};

function sprawdzpoziomrelacjiMaurykowie()
{
	rodzajplemienia = "H"
	pktrelacji = relacjezmaurykami;
	wplywnahandel = wplywnahandelMaurykowie;
	poziomrelacjiF();
	wplywnahandelMaurykowie = wplywnahandel;
	document.getElementById("poziomrelacjizMaurykamiD").innerHTML = poziomrelacji; 
	document.getElementById("bonusinfoMaurykowieD").innerHTML = bonusinfo;
	document.getElementById("relacjezmaurykamiD").innerHTML = relacjezmaurykami;
};
function sprawdzpoziomrelacjiPlemowie()
{
	rodzajplemienia = "H"
	pktrelacji = relacjezplemami;
	wplywnahandel = wplywnahandelPlemowie;
	poziomrelacjiF();
	wplywnahandelPlemowie = wplywnahandel;
	document.getElementById("poziomrelacjizPlemamiD").innerHTML = poziomrelacji; 
	document.getElementById("bonusinfoPlemowieD").innerHTML = bonusinfo;
	document.getElementById("relacjezplemamiD").innerHTML = relacjezplemami;
};
function sprawdzpoziomrelacjiNordyskowie()
{
	rodzajplemienia = "H"
	pktrelacji = relacjeznordyskami;
	wplywnahandel = wplywnahandelNordyskowie;
	poziomrelacjiF();
	wplywnahandelNordyskowie = wplywnahandel;
	document.getElementById("poziomrelacjizNordyskamiD").innerHTML = poziomrelacji; 
	document.getElementById("bonusinfoNordyskowieeD").innerHTML = bonusinfo;
	document.getElementById("relacjeznordyskamiD").innerHTML = relacjeznordyskami;
};
function sprawdzpoziomrelacjiMerkowie()
{
	rodzajplemienia = "W"
	pktrelacji = relacjezmerkami;
	wplywnahandel = wplywnahandelMerkowie;
	poziomrelacjiF();
	wplywnahandelMerkowie = wplywnahandel;
	document.getElementById("poziomrelacjizMerkamiD").innerHTML = poziomrelacji; 
	document.getElementById("bonusinfoMerkowieD").innerHTML = bonusinfo;
	document.getElementById("relacjezmerkamiD").innerHTML = relacjezmerkami;
};
function sprawdzpoziomrelacjiOpsydianie()
{
	rodzajplemienia = "W"
	pktrelacji = relacjezopsydianami;
	wplywnahandel = wplywnahandelOpsydianie;
	poziomrelacjiF();
	wplywnahandelOpsydianie = wplywnahandel;
	document.getElementById("poziomrelacjizOpsydianamiD").innerHTML = poziomrelacji; 
	document.getElementById("bonusinfoOpsydianieD").innerHTML = bonusinfo;
	document.getElementById("relacjezopsydianamiD").innerHTML = relacjezopsydianami;
	
};
function sprawdzpoziomrelacjiYerisi()
{
	rodzajplemienia = "W"
	pktrelacji = relacjezyerisami;
	poziomrelacjiF();
	wplywnahandelYerisi = wplywnahandel;
	document.getElementById("poziomrelacjizYerisamiD").innerHTML = poziomrelacji; 
	document.getElementById("bonusinfoYerisiD").innerHTML = bonusinfo;
	document.getElementById("relacjezyerisamiD").innerHTML = relacjezyerisami;
	
};



function relacjenastart()
{
 relacjezmaurykami = 30;
 relacjezplemami = 70;
 relacjeznordyskami = (-30);
 relacjezmerkami = 92;
 relacjezopsydianami = 71;
 relacjezyerisami = (-88);
	document.getElementById("relacjezmaurykamiD").innerHTML = relacjezmaurykami;
	document.getElementById("relacjezplemamiD").innerHTML = relacjezplemami;
	document.getElementById("relacjeznordyskamiD").innerHTML = relacjeznordyskami;
	document.getElementById("relacjezmerkamiD").innerHTML = relacjezmerkami;
	document.getElementById("relacjezopsydianamiD").innerHTML = relacjezopsydianami;
	document.getElementById("relacjezyerisamiD").innerHTML = relacjezyerisami;
	sprawdzpoziomrelacjiMaurykowie();
	sprawdzpoziomrelacjiPlemowie();
	sprawdzpoziomrelacjiNordyskowie();
	sprawdzpoziomrelacjiMerkowie();
	sprawdzpoziomrelacjiOpsydianie();
	sprawdzpoziomrelacjiYerisi();
};

function dyplomatadomaurykow()
{
	zloto = Math.round((zloto - 5)*100)/100;
	powodzeniedyplomaty = Math.round((Math.random()*100)+ 0)
	
	if(relacjezmaurykami >= 100)
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Osiągneliśmy najwyższy poziom relacji dyplomatycznych";
	}
	else if ( zloto < 5 )
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Nie stać nas na wysłanie dyplomaty";
	}
	else if(powodzeniedyplomaty > 75)
	{
		relacjezmaurykami = relacjezmaurykami + 7;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła fantastycznie, relacje z Maurykami poprawione o 7pkt";
		sprawdzpoziomrelacjiMaurykowie();
	}
	else if(powodzeniedyplomaty > 50 && powodzeniedyplomaty <= 75)
	{
		relacjezmaurykami = relacjezmaurykami + 5;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła dobrze, relacje z Maurykami poprawione o 5pkt";
		sprawdzpoziomrelacjiMaurykowie();
	}
	else if
	(powodzeniedyplomaty <= 50 && powodzeniedyplomaty > 25)
	{
		relacjezmaurykami = relacjezmaurykami - 1;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła źle,relacje z Maurykami pogorszone o 1pkt";
		sprawdzpoziomrelacjiMaurykowie();
	}
	else if
	(powodzeniedyplomaty <= 25)
	{
		relacjezmaurykami = relacjezmaurykami - 3;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła tragicznie, relacje z Maurykami pogorszone o 3pkt";
		sprawdzpoziomrelacjiMaurykowie();
	}
	setTimeout (function() { 
		$("#dyplomacjainfo").fadeOut(4000); }, 6000)
		$("#dyplomacjainfo").fadeIn(1500)

}

function dyplomatadoplemow()
{
		zloto = Math.round((zloto - 5)*100)/100;
	powodzeniedyplomaty = Math.round((Math.random()*100)+ 0)
	
	if(relacjezplemami >= 100)
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Osiągneliśmy najwyższy poziom relacji dyplomatycznych";
	}
	else if ( zloto < 5 )
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Nie stać nas na wysłanie dyplomaty";
	}
	else if(powodzeniedyplomaty > 75)
	{
		relacjezplemami = relacjezplemami + 7;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła fantastycznie, relacje z Plemami poprawione o 7pkt";
		sprawdzpoziomrelacjiPlemowie();
	}
	else if(powodzeniedyplomaty > 50 && powodzeniedyplomaty <= 75)
	{
		relacjezplemami = relacjezplemami + 5;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła dobrze, relacje z Plemami poprawione o 5pkt";
		sprawdzpoziomrelacjiPlemowie();
	}
	else if
	(powodzeniedyplomaty <= 50 && powodzeniedyplomaty > 25)
	{
		relacjezplemami = relacjezplemami - 1;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła źle,relacje z Plemami pogorszone o 1pkt";
		sprawdzpoziomrelacjiPlemowie();
	}
	else if
	(powodzeniedyplomaty <= 25)
	{
		relacjezplemami = relacjezplemami - 3;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła tragicznie, relacje z Plemami pogorszone o 3pkt";
		sprawdzpoziomrelacjiPlemowie();
	}
	setTimeout (function() { 
		$("#dyplomacjainfo").fadeOut(4000); }, 6000)
		$("#dyplomacjainfo").fadeIn(1500)
}
function dyplomatadonordyskow()
{
	zloto = Math.round((zloto - 5)*100)/100;
	powodzeniedyplomaty = Math.round((Math.random()*100)+ 0)
	
	if(relacjeznordyskami >= 100)
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Osiągneliśmy najwyższy poziom relacji dyplomatycznych";
	}
	else if ( zloto < 5 )
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Nie stać nas na wysłanie dyplomaty";
	}
	else if(powodzeniedyplomaty > 75)
	{
		relacjeznordyskami = relacjeznordyskami + 7;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła fantastycznie, relacje z Nordyskami poprawione o 7pkt";
		sprawdzpoziomrelacjiNordyskowie();
	}
	else if(powodzeniedyplomaty > 50 && powodzeniedyplomaty <= 75)
	{
		relacjeznordyskami = relacjeznordyskami + 5;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła dobrze, relacje z Nordyskami poprawione o 5pkt";
		sprawdzpoziomrelacjiNordyskowie();
	}
	else if
	(powodzeniedyplomaty <= 50 && powodzeniedyplomaty > 25)
	{
		relacjeznordyskami = relacjeznordyskami - 1;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła źle,relacje z Nordyskami pogorszone o 1pkt";
		sprawdzpoziomrelacjiNordyskowie();
	}
	else if
	(powodzeniedyplomaty <= 25)
	{
		relacjeznordyskami = relacjeznordyskami - 3;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła tragicznie, relacje z Nordyskami pogorszone o 3pkt";
		sprawdzpoziomrelacjiNordyskowie();
	}
	setTimeout (function() { 
		$("#dyplomacjainfo").fadeOut(4000); }, 6000)
		$("#dyplomacjainfo").fadeIn(1500)
}
function dyplomatadomerkow()
{
	zloto = Math.round((zloto - 5)*100)/100;
	powodzeniedyplomaty = Math.round((Math.random()*100)+ 0)
	
	if(relacjezmerkami >= 100)
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Osiągneliśmy najwyższy poziom relacji dyplomatycznych";
	}
	else if ( zloto < 5 )
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Nie stać nas na wysłanie dyplomaty";
	}
	else if(powodzeniedyplomaty > 75)
	{
		relacjezmerkami = relacjezmerkami + 7;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła fantastycznie, relacje z Merkami poprawione o 7pkt";
		sprawdzpoziomrelacjiMerkowie();
	}
	else if(powodzeniedyplomaty > 50 && powodzeniedyplomaty <= 75)
	{
		relacjezmerkami = relacjezmerkami + 5;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła dobrze, relacje z Merkami poprawione o 5pkt";
		sprawdzpoziomrelacjiMerkowie();
	}
	else if
	(powodzeniedyplomaty <= 50 && powodzeniedyplomaty > 25)
	{
		relacjezmerkami = relacjezmerkami - 1;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła źle,relacje z Merkami pogorszone o 1pkt";
		sprawdzpoziomrelacjiMerkowie();
	}
	else if
	(powodzeniedyplomaty <= 25)
	{
		relacjezmerkami = relacjezmerkami - 3;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła tragicznie, relacje z Merkami pogorszone o 3pkt";
		sprawdzpoziomrelacjiMerkowie();
	}
	setTimeout (function() { 
		$("#dyplomacjainfo").fadeOut(4000); }, 6000)
		$("#dyplomacjainfo").fadeIn(1500)

}
function dyplomatadoopsydian()
{
	zloto = Math.round((zloto - 5)*100)/100;
	powodzeniedyplomaty = Math.round((Math.random()*100)+ 0)
	
	if(relacjezopsydianami >= 100)
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Osiągneliśmy najwyższy poziom relacji dyplomatycznych";
	}
	else if ( zloto < 5 )
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Nie stać nas na wysłanie dyplomaty";
	}
	else if(powodzeniedyplomaty > 75)
	{
		relacjezopsydianami = relacjezopsydianami + 7;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła fantastycznie, relacje z Opsydianami poprawione o 7pkt";
		sprawdzpoziomrelacjiOpsydianie();
	}
	else if(powodzeniedyplomaty > 50 && powodzeniedyplomaty <= 75)
	{
		relacjezopsydianami = relacjezopsydianami + 5;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła dobrze, relacje z Opsydianami poprawione o 5pkt";
		sprawdzpoziomrelacjiOpsydianie();
	}
	else if
	(powodzeniedyplomaty <= 50 && powodzeniedyplomaty > 25)
	{
		relacjezopsydianami = relacjezopsydianami - 1;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła źle,relacje z Opsydianami pogorszone o 1pkt";
		sprawdzpoziomrelacjiOpsydianie();
	}
	else if
	(powodzeniedyplomaty <= 25)
	{
		relacjezopsydianami = relacjezopsydianami - 3;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła tragicznie, relacje z Opsydianami pogorszone o 3pkt";
		sprawdzpoziomrelacjiOpsydianie();
	}
	setTimeout (function() { 
		$("#dyplomacjainfo").fadeOut(4000); }, 6000)
		$("#dyplomacjainfo").fadeIn(1500)
}
function dyplomatadoyerysow()
{
	zloto = Math.round((zloto - 5)*100)/100;
	powodzeniedyplomaty = Math.round((Math.random()*100)+ 0)
	
	if(relacjezyerisami >= 100)
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Osiągneliśmy najwyższy poziom relacji dyplomatycznych";
	}
	else if(powodzeniedyplomaty > 75 && zloto >= 50)
	{
		relacjezyerisami = relacjezyerisami + 7;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła fantastycznie, relacje z Yerisami poprawione o 7pkt";
		sprawdzpoziomrelacjiYerisi();
	}
	else if(powodzeniedyplomaty > 50 && powodzeniedyplomaty <= 75 )
	{
		relacjezyerisami = relacjezyerisami + 5;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła dobrze, relacje z Yerisami poprawione o 5pkt";
		sprawdzpoziomrelacjiYerisi();
	}
	else if
	(powodzeniedyplomaty <= 50 && powodzeniedyplomaty > 25 )
	{
		relacjezyerisami = relacjezyerisami - 1;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła źle,relacje z Yerisami pogorszone o 1pkt";
		sprawdzpoziomrelacjiYerisi();
	}
	else if
	(powodzeniedyplomaty <= 25 )
	{
		relacjezyerisami = relacjezyerisami - 3;
		document.getElementById("dyplomacjainfo").innerHTML = "Msija przebiegła tragicznie, relacje z Yerisami pogorszone o 3pkt";
		sprawdzpoziomrelacjiYerisi();
	}
	else if ( zloto < 5 )
	{
		document.getElementById("dyplomacjainfo").innerHTML = "Nie stać nas na wysłanie dyplomaty";
	}
	setTimeout (function() { 
		$("#dyplomacjainfo").fadeOut(4000); }, 6000)
		$("#dyplomacjainfo").fadeIn(1500)
}


	
	
function normowanierelacjidyplomatycznych()
{
	normowanierelacjidyplomatycznychYerysi();
	normowanierelacjidyplomatycznychPlemowie();
	normowanierelacjidyplomatycznychNordyskowie();
	normowanierelacjidyplomatycznychMaurykowie();
	normowanierelacjidyplomatycznychOpsydianie();
	normowanierelacjidyplomatycznychMerkowie();
	document.getElementById("dyplomacjainfo2").innerHTML = "Relacje z plemionami ulegają zmianie z czasem ( o 1pkt w strone zera )";
	setTimeout (function() { 
		$("#dyplomacjainfo2").fadeOut(4000); }, 8000)
		$("#dyplomacjainfo2").fadeIn(1500)
};
	
function normowanierelacjidyplomatycznychPlemowie()
{
	if(relacjezplemami>0)
	{
		relacjezplemami = relacjezplemami -1;
	}
	else if(relacjezplemami<0)
	{
		relacjezplemami = relacjezplemami +1;
	}
};
function normowanierelacjidyplomatycznychYerysi()
{
	if(relacjezyerisami>0)
	{
		relacjezyerisami = relacjezyerisami -1;
	}
	else if(relacjezyerisami<0)
	{
		relacjezyerisami = relacjezyerisami +1;
	}
};
function normowanierelacjidyplomatycznychNordyskowie()
{
	if(relacjeznordyskami>0)
	{
		relacjeznordyskami = relacjeznordyskami -1;
	}
	else if(relacjeznordyskami<0)
	{
		relacjeznordyskami = relacjeznordyskami +1;
	}
};
function normowanierelacjidyplomatycznychMaurykowie()
{
	if(relacjezmaurykami>0)
	{
		relacjezmaurykami = relacjezmaurykami -1;
	}
	else if(relacjezmaurykami<0)
	{
		relacjezmaurykami = relacjezmaurykami +1;
	}
};
function normowanierelacjidyplomatycznychOpsydianie()
{
	if(relacjezopsydianami>0)
	{
		relacjezopsydianami = relacjezopsydianami -1;
	}
	else if(relacjezopsydianami<0)
	{
		relacjezopsydianami = relacjezopsydianami +1;
	}
};
function normowanierelacjidyplomatycznychMerkowie()
{
	if(relacjezmerkami>0)
	{
		relacjezmerkami = relacjezmerkami -1;
	}
	else if(relacjezmerkami<0)
	{
		relacjezmerkami = relacjezmerkami +1;
	}
};

	
//przeliczanie populacji plemionami

function populacjeplemionrecalculate()
{
populacjayerisow = orsyanie;
silayerisow = Math.floor(populacjayerisow * 0.1);

populacjamerkow = Math.floor(orsyanie * 1.5);
silamerkow = Math.floor(populacjamerkow * 0.1);

 populacjaopsydian = Math.floor(orsyanie * 2);
silaopsydian = Math.floor(populacjaopsydian * 0.1);

};


function nazwymiesiacy()
{
	if(miesiacnumer == 1) miesiacnazwa = "Styczeń";
	else if (miesiacnumer == 2) miesiacnazwa = "Luty";
	else if (miesiacnumer == 3) miesiacnazwa = "Marzec";
	else if (miesiacnumer == 4) miesiacnazwa = "Kwiecień";
	else if (miesiacnumer == 5) miesiacnazwa = "Maj";
	else if (miesiacnumer == 6) miesiacnazwa = "Czerwiec";
	else if (miesiacnumer == 7) miesiacnazwa = "Lipiec";
	else if (miesiacnumer == 8) miesiacnazwa = "Sierpień";
	else if (miesiacnumer == 9) miesiacnazwa = "Wrzesień";
	else if (miesiacnumer == 10) miesiacnazwa = "Październik";
	else if (miesiacnumer == 11) miesiacnazwa = "Listopad";
	else if (miesiacnumer == 12) miesiacnazwa = "Grudzień";
	f_color2();
	
};

function losowoscanomalipogodowejF()
{
	anomaliaczysiewydarzy = Math.round((Math.random()*2)+ 1)
	if(anomaliaczysiewydarzy == 1 && zdarzeniewtrakcie == 0)
	{
		anomaliepogodowe();
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
};

function losowezdarzeniaF()
{
	nowezdarzenie = Math.round((Math.random()*60000)+ 80000)
	
	if(losowezdarzenia==1 && losowezdarzeniaflaga==1 && anomaliapogodowaflaga == 0)
	{
		//anomalie pogodowe
		//anomaliepogodowe();
		handelzdarzenie();
		zdarzeniewtrakcie = 1;
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
	else if(losowezdarzenia==2 && losowezdarzeniaflaga==1 && anomaliapogodowaflaga == 0)
	{
		//Pożar
		pozar();
		zdarzeniewtrakcie = 1;
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
	else if(losowezdarzenia==3 && losowezdarzeniaflaga==1 && anomaliapogodowaflaga == 0)
	{
		//Goście
		goscie();
		zdarzeniewtrakcie = 1;
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
	else if(losowezdarzenia==4 && losowezdarzeniaflaga==1 && anomaliapogodowaflaga == 0)
	{
		//Susza
		susza();
		zdarzeniewtrakcie = 1;
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
	else if(losowezdarzenia==5 && losowezdarzeniaflaga==1 && anomaliapogodowaflaga == 0)
	{
		//Osuwisko w Kamieniołomie
		osuwisko();
		zdarzeniewtrakcie = 1;
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
	else if(losowezdarzenia==6 && losowezdarzeniaflaga==1 && anomaliapogodowaflaga == 0)
	{
		//Napaść pobliskich zbójów
		napascpobliskichzbojow();
		zdarzeniewtrakcie = 1;
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
	else if(losowezdarzenia==7 && losowezdarzeniaflaga==1 && anomaliapogodowaflaga == 0)
	{
		//Napaść wyznawcow Żółtego ptaka
		napascwyznawcowzoltegoptaka()
		zdarzeniewtrakcie = 1;
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
	else if(losowezdarzenia==8 && losowezdarzeniaflaga==1 && anomaliapogodowaflaga == 0)
	{
		//Bunt niewolnikow
		if(niewolnicy>0)
		{buntniewolnikow();
		zdarzeniewtrakcie = 1;
		}
		else if(niewolnicy == 0)
		{
			document.getElementById("news1").innerHTML = "Wodzu doszło do małego zamieszania w okolicy targu niewolników... Część ludzi chce go zamknąć, reszta się sprzeciwia... Wk**rwienie wśród ludzi nieznacznie wzrosło";
			document.getElementById("news4").innerHTML = "Wk**rwienie + 0.5";
			document.getElementById("news4a").innerHTML = "Wk**rwienie + 0.5";
			riots = riots + 0.5;
			setTimeout (function() { 
			$("#news4").fadeOut(4000); }, 6000)
			$("#news4").fadeIn(1500)
			$("#news4").css("color","red");
			setTimeout (function() { 
			$("#news4a").fadeOut(4000); }, 6000)
			$("#news4a").fadeIn(1500)
			$("#news4a").css("color","red");
			$("#news1").fadeIn(500);
			
		
		}
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
	else if(losowezdarzenia==9 && losowezdarzeniaflaga==1 && anomaliapogodowaflaga == 0)
	{
		//Bunt na tle religijnym
		if(kosciollvl>0)
		{
		buntnatlereligijnym();
		zdarzeniewtrakcie = 1;
		}
		else if(kosciollvl==0)
		{
			document.getElementById("news1").innerHTML = "Wodzu doszło do małego zamieszania w okolicy kapliczek... Ludzie jak to ludzie, każdy ma inny pogląd, może byśmy wybudowali kościół i założyli główną religie? Wk**rwienie wśród ludzi nieznacznie wzrosło";
			document.getElementById("news4").innerHTML = "Wk**rwienie + 0.5";
			document.getElementById("news4a").innerHTML = "Wk**rwienie + 0.5";
			riots = riots + 0.5;
			setTimeout (function() { 
			$("#news4").fadeOut(4000); }, 6000)
			$("#news4").fadeIn(1500)
			$("#news4").css("color","red");
			setTimeout (function() { 
			$("#news4a").fadeOut(4000); }, 6000)
			$("#news4a").fadeIn(1500)
			$("#news4a").css("color","red");
			$("#news1").fadeIn(500);
		}
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
	else if(losowezdarzenia==10 && losowezdarzeniaflaga==1 && anomaliapogodowaflaga == 0)
	{
		//Podżegacze żółtego ptaka
		podzegaczezoltegoptaka();
		zdarzeniewtrakcie = 1;
		nowewydarzenie = 1;
		nowewydarzenieF();
	}
	losowezdarzenia = Math.round((Math.random()*10)+ 1)
	
	losowezdarzeniaflaga=0;
	noweploteczki=1;
	if(losowezdarzenia==1 && losowezdarzeniaflaga==0)
	{
		
	
		document.getElementById("plotka1").innerHTML = "Takie to dobra przywieźli ostatnio, aż sie patrzy jaki dochodowy handel będzie w przyszłym roku...";
		document.getElementById("plotka1a").innerHTML = "Takie to dobra przywieźli ostatnio, aż sie patrzy jaki dochodowy handel będzie w przyszłym roku...";
	
	}
	else if(losowezdarzenia==2 && losowezdarzeniaflaga==0)
	{
		document.getElementById("plotka1").innerHTML = "Na ulicy, aż szumi od informacji o biegających podpalaczach! Dobrze, że wódz i jego drużyna czuwa... ale jak odwrócą spojrzenie to kto wie... Musimy mieć sie na baczności";
		document.getElementById("plotka1a").innerHTML = "Na ulicy, aż szumi od informacji o biegających podpalaczach! Dobrze, że wódz i jego drużyna czuwa... ale jak odwrócą spojrzenie to kto wie... Musimy mieć sie na baczności";
	}
	else if(losowezdarzenia==3 && losowezdarzeniaflaga==0)
	{
		document.getElementById("plotka1").innerHTML = "Wczoraj na trakcie Kuzyn wodza widział wielką karawanę! i to nie pierwszą tej pory roku! pewnie za niedługo jakaś do nas zawita";
		document.getElementById("plotka1a").innerHTML = "Wczoraj na trakcie Kuzyn wodza widział wielką karawanę! i to nie pierwszą tej pory roku! pewnie za niedługo jakaś do nas zawita";
	}
	else if(losowezdarzenia==4 && losowezdarzeniaflaga==0)
	{
		document.getElementById("plotka1").innerHTML = "Długie lato... któtka zima... koniec świata czy jakie żółte ptactwo naleci...";
		document.getElementById("plotka1a").innerHTML = "Długie lato... któtka zima... koniec świata czy jakie żółte ptactwo naleci...";
	}
	else if(losowezdarzenia==5 && losowezdarzeniaflaga==0)
	{
		document.getElementById("plotka1").innerHTML = "Roznek zaś gadał, że warunki w kamieniołomach są aż nadto niebezpieczne, jeszcze troche i dojdzie do tragedii!";
		document.getElementById("plotka1a").innerHTML = "Roznek zaś gadał, że warunki w kamieniołomach są aż nadto niebezpieczne, jeszcze troche i dojdzie do tragedii!";
	}
	else if(losowezdarzenia==6 && losowezdarzeniaflaga==0)
	{
		document.getElementById("plotka1").innerHTML = "Ludzie! znowu Barnaba ze swoimi synami w lasie spotkał grupke uzbrojonych ludzi! Czy to wróżba jakiego nieszczęścia czy kilku oszołomów z innego plemienia się dalej zapuściło, hmmm ?";
		document.getElementById("plotka1a").innerHTML = "Ludzie! znowu Barnaba ze swoimi synami w lasie spotkał grupke uzbrojonych ludzi! Czy to wróżba jakiego nieszczęścia czy kilku oszołomów z innego plemienia się dalej zapuściło, hmmm ?";
	}
	else if(losowezdarzenia==7 && losowezdarzeniaflaga==0)
	{
		document.getElementById("plotka1").innerHTML = "Gadają... jakoby kto widział żółtego ptaka na niebie... o Boże miej nas w swojej opiece, znów przyjdzie nam porzucić ziemie i uciekać ?!";
		document.getElementById("plotka1a").innerHTML = "Gadają... jakoby kto widział żółtego ptaka na niebie... o Boże miej nas w swojej opiece, znów przyjdzie nam porzucić ziemie i uciekać ?!";
	}
	else if(losowezdarzenia==8 && losowezdarzeniaflaga==0)
	{
		document.getElementById("plotka1").innerHTML = "Zaś jakaś bójka była targu niewolników... Będzie to nieszczęscie z tego jakie...";
		document.getElementById("plotka1a").innerHTML = "Zaś jakaś bójka była targu niewolników... Będzie to nieszczęscie z tego jakie...";
	}
	else if(losowezdarzenia==9 && losowezdarzeniaflaga==0)
	{
		document.getElementById("plotka1").innerHTML = "Wodzu... w centrum wioski jakieś manifestacje, proprce z bożkami jakimi na wietrze chybocą... Siła tych ludzi, niby to nasi wszyscy ale cholera wie co ich wzieło z tymi bożkami";
		document.getElementById("plotka1a").innerHTML = "Wodzu... w centrum wioski jakieś manifestacje, proprce z bożkami jakimi na wietrze chybocą... Siła tych ludzi, niby to nasi wszyscy ale cholera wie co ich wzieło z tymi bożkami";
	}
	else if(losowezdarzenia==10 && losowezdarzeniaflaga==0)
	{
		document.getElementById("plotka1").innerHTML = "Widział no wódz tego nowego pachołka u Wacka? No niby go gdzie w lesie wypatrzył zagadał, a ten za pół darmo robi... Ze dwie niedziele będzie jak se ten koleżka kumów naspraszał i razem Wackowi pomagają w polu robić... Niepkorne jeno to jakie...";
		document.getElementById("plotka1a").innerHTML = "Widział no wódz tego nowego pachołka u Wacka? No niby go gdzie w lesie wypatrzył zagadał, a ten za pół darmo robi... Ze dwie niedziele będzie jak se ten koleżka kumów naspraszał i razem Wackowi pomagają w polu robić... Niepkorne jeno to jakie...";
	}
	
	losowezdarzeniaflaga=1;
	noweplotki();
	setTimeout("losowezdarzeniaF()",nowezdarzenie);
	
}
function noweplotkiclick()
{
	noweploteczki = 0;
	//noweplotki();
	
};

function noweplotki()
{
	
	if(noweploteczki>0)
	{
	$("#link98").fadeOut(200).fadeIn(200).fadeOut(200).fadeIn(200);
	setTimeout("noweplotki()",1000);
	}
	
	
};

function nowewydarzenieclickF()
{
	nowewydarzenie = 0;
	//noweplotki();
	
};

function nowewydarzenieF()
{
	if(nowewydarzenie==1)
	{
	$("#link99").fadeOut(200).fadeIn(200).fadeOut(200).fadeIn(200);
	setTimeout("nowewydarzenieF()",1000);
	}
}


var brakwyboru = 40;
var brakwyboruautomatycznywybor = 0;

function brakwyboruF()
	{
		if(wydrzenieodklikane==0)
		{
			$("#brakwyboruV").fadeIn(500);
			document.getElementById("brakwyboruV").innerHTML = "Do automatycznego wyboru dojdzie za: " + brakwyboru;
            brakwyboru = brakwyboru-1;
			

				if (brakwyboru < 0)
				{
				 brakwyboru = 0;
				 
				}
	  
            brakwyboruodliczanie = setTimeout("brakwyboruF()",1000);
			
			
				if(brakwyboru == 0)
				{
					clearTimeout(brakwyboruodliczanie);
					brakwyboru = 39;
					brakwyboruautomatycznywybor = Math.floor((Math.random()*3)+ 1);
					setTimeout (function () { 
					$("#brakwyboruV").fadeOut(1000); }, 10800)
					$("#brakwyboruV").fadeIn(500);
						if(brakwyboruautomatycznywybor==1 && zloto > 120)
						{
							wydazeniawyborpierwsze();
							document.getElementById("brakwyboruV").innerHTML = "Wybrana opcja: " + brakwyboruautomatycznywybor;
						}
						else if(brakwyboruautomatycznywybor==1 && zloto < 120)
						{
							wydazeniawybordrugi();
							document.getElementById("brakwyboruV").innerHTML = "Wybrana opcja: " + brakwyboruautomatycznywybor+1;
						}
						else if(brakwyboruautomatycznywybor==2 && zloto > 50)
						{
							wydazeniawybordrugi();
							document.getElementById("brakwyboruV").innerHTML = "Wybrana opcja: " + brakwyboruautomatycznywybor;
						}
						else if(brakwyboruautomatycznywybor==2 && zloto < 50)
						{
							wydazeniawybortrzeci();
							document.getElementById("brakwyboruV").innerHTML = "Wybrana opcja: " + brakwyboruautomatycznywybor+1;
						}
						else if(brakwyboruautomatycznywybor==3)
						{
							wydazeniawybortrzeci();
							document.getElementById("brakwyboruV").innerHTML = "Wybrana opcja: " + brakwyboruautomatycznywybor;
						}
				};
        }
		else if(wydrzenieodklikane==1)
		{
			clearTimeout(brakwyboruodliczanie);
			brakwyboru = 39;
			setTimeout (function () { 
					$("#brakwyboruV").fadeOut(1000); }, 1000)
					$("#brakwyboruV").fadeIn(500);
		}
	}

function anomaliepogodowe()
{
	anomaliapogodowa = Math.round((Math.random()*2)+ 1)
	anomaliapogodowaflaga = 1;
	if(porarokunumer==1)
	{
		if(anomaliapogodowa == 1)
		{
			anomaliaznacznik = "a";
			wydrzenieodklikane = 0;
		document.getElementById("news1").innerHTML = "Anomalia Pogodowa: Gradobicie w trakcie zbiorów, wszystko zniszczone! Jak my przeżyjemy zimę ?! Wybierz jedną z trzech poniższych opcji:";
		$("#news1").fadeIn(500);
		document.getElementById("news6").innerHTML = "Kup żywność u innych plemion nie zważając na ceny, żeby pokryć część strat: -20 złota, połowa jesiennego bonusu";
		document.getElementById("news7").innerHTML = "Kup żywność u innych plemion nie zważając na ceny, żeby pokryć straty: -40 złota, normalny jesienny bonus";
		document.getElementById("news8").innerHTML = "Wygłoś płomienną mowę, o zaciśnięciu zębów i walce z przeciwnościami losu...: +1pkt nadzieji, jesienny bonus wyzerowany";
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		
		brakwyboruF();
		}
		else if(anomaliapogodowa == 2)
		{
			anomaliaznacznik = "b";
			wydrzenieodklikane = 0;
		document.getElementById("news1").innerHTML = "Anomalia Pogodowa: Tak dobrych zbiorów jeszcze nie widziałem wodzu! Zimą będziemy obżerać się jak wiosną! Wybierz jedną z trzech poniższych opcji:";
		$("#news1").fadeIn(500);
		document.getElementById("news6").innerHTML = "Zapakuj wszystko do magazynów: jesienny bonus podwojony, nadzieja +1pkt";
		$("#news6").fadeIn(500);
		document.getElementById("news7").innerHTML = "Wydaj ucztę, ku czci płodności ziemi!: jesienny bonus * 1.5, nadzieja + 4pkt";
		$("#news7").fadeIn(500);
		document.getElementById("news8").innerHTML = "Sprzedaj całą zebraną nadwyżkę:  +100 złota, wk**rwienie + 0.5";
		$("#news8").fadeIn(500);
		
		brakwyboruF();
		}
	}
	else if(porarokunumer==2)
	{
		if(anomaliapogodowa ==1)
		{
			anomaliaznacznik = "c";
			wydrzenieodklikane = 0;
		document.getElementById("news1").innerHTML = "Anomalia Pogodowa: Jezioro skute lodem tak, że i do kwietnie nie odtaja, takie mrozy, że drzwi od chałupy nie idzie otworzyć! Zwierza w lesie wogóle nie ma! Pomrzemy wszyscy! Wybierz jedną z trzech poniższych opcji:";
		
		document.getElementById("news6").innerHTML = "Kup żywność u innych plemion nie zważając na ceny, żeby pokryć część zapotrzebowania: Nadzieja - 1pkt, -50 złota, zimowy modyfikator zwiększony o 10%";
		document.getElementById("news7").innerHTML = "Wyślij więcej łowców za zwierzyną na długą wyprawę w nadzieji, że znajdą większe ich zgrupowiska: Nadzieja -2 pkt,zimowy modyfikator zwiększony o 30%, szansa na żywność lub śmierć 10% torsjan";
		document.getElementById("news8").innerHTML = "Zrób zebranie w chacie wodza. Opowiedz, że już nie takie problemy przeżywaliście i każ wszystkim sie rozejść: Nadzieja -3pkt, zimowy modyfikator zwiększony o 30%";
		$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		
		brakwyboruF();
		}
		else if(anomaliapogodowa ==2)
		{
			anomaliaznacznik = "d";
			wydrzenieodklikane = 0;
		document.getElementById("news1").innerHTML = "Anomalia Pogodowa: Zima jeszcze nigdy nie była tak lekka i przyjemna, zużywamy duzo mniej zapasów niż planowaliśmy! Wybierz jedna z trzech poniższych opcji:";
		
		document.getElementById("news6").innerHTML = "Zorganizuj ucztę: zimowy modyfikator zmniejszony o 10%, nadzieja +3pkt";
		document.getElementById("news7").innerHTML = "Nic nie rób, ciesz się z opatrzności: zimowy modyfikator zmniejszony o 30% ";
		document.getElementById("news8").innerHTML = "Lekka zima? To jest czas żeby jeszcze bardziej zwiększyć zapasy, zmniejsz rację zimowe: zimowy modyfikator zmniejszony o 50%, wk**rwienie + 3pkt";
		$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		
		brakwyboruF();
		}
	}
	else if(porarokunumer==3)
	{
		if(anomaliapogodowa ==1)
		{
			anomaliaznacznik = "e";
			wydrzenieodklikane = 0;
		document.getElementById("news1").innerHTML = "Anomalia Pogodowa: Powódź! Cały zimowy śnieg puścił z dnia na dzień, woda z rzek wystąpiła, zalewa nasze chaty, co robić!?!?! Wybierz jedna z trzech poniższych opcji:";
		
		document.getElementById("news6").innerHTML = "Każdy dba o własny dobytek, jeżeli potrzeba to ludzie mogą odstąpić od pracy i pomagać sobie nawazajem. Wódz odbuduje zniszczenia za złoto ze skarbca: Wk**rwienie + 1, Zapasy zasobów: drewna,kamienia,zboża zmniejszone o 5%, złoto - 75";
		document.getElementById("news7").innerHTML = "A kto wykona normalną robotę? Ludzie muszą to jakoś przetrwać, Ci co stracą majątek, będą musieli go sobie znowu zebrać...:Wk**rwienie + 5, Zniszczeniu ulegają po 4 poziomy budynków zasobów i 3 losowe inne budynki";
		document.getElementById("news8").innerHTML = "Odciągnij ludzi od normalnych obowiązków, karz budować prowizoryczne umocnienia antypowodziowe: Wk**rwienie + 0.5,Zapasy zasobów: drewna,kamienia,zboża zmniejszone o 10%, zniszczone po 2 poziomy budynkow zasobów";
		$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		
		brakwyboruF();
		}
		else if(anomaliapogodowa ==2)
		{
			anomaliaznacznik = "f";
			wydrzenieodklikane = 0;
		document.getElementById("news1").innerHTML = "Anomalia Pogodowa: Ciepła, cudowna wiosna! Ptaszki ćwierkają, kury się dobrze niosą, zwierzyna w lesie często występuje, wszyscy mają co robić i nikt nie narzeka! Wódz to ma przychylność Bogów! Wybierz jedna z trzech poniższych opcji:";
		
		document.getElementById("news6").innerHTML = "Wydaj uczte na cześć dobrej pogody!: Nadzieja + 5pkt, zboże - 20, złoto - 50 ";
		document.getElementById("news7").innerHTML = "Nic nie rób, niech ludzie cieszą się dobrą wiosną: Nadzieja + 3pkt, Wk**rwienie - 1pkt";
		document.getElementById("news8").innerHTML = "Dobra pogoda ? Wykorzystajmy to! Do pracy!: +150 drewna, +150 kamienia, + 70zboża";
		$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
	
		brakwyboruF();
		}
	}
	else if(porarokunumer==4)
	{
		if(anomaliapogodowa ==1)
		{
			anomaliaznacznik = "g";
			wydrzenieodklikane = 0;
		document.getElementById("news1").innerHTML = "Anomalia Pogodowa: Boże, co za skwar! Nawet w chłodnej chałupie człowiek myśli, że sie rozpływa! Nie ide dzisiaj pracować! Wybierz jedna z trzech poniższych opcji:";
		
		document.getElementById("news6").innerHTML = "Ok, niech ludzie pozostaną w domach, wynajmiemy pracowników najemnych: -70 złota, wk**rwienie - 1pkt";
		document.getElementById("news7").innerHTML = "Ok, jest ciężko niech ludzie mniej pracują: Letni modyfikator kamienia i drewna podwojony";
		document.getElementById("news8").innerHTML = "Zmuś ludzi do pracy jak normalnego lata: Wk**rwienie + 3pkt";
		$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		
		brakwyboruF();
		}
		else if(anomaliapogodowa ==2)
		{
			anomaliaznacznik = "h";
			wydrzenieodklikane = 0;
		document.getElementById("news1").innerHTML = "Anomalia Pogodowa: Gorące lato? No niby gorące ale wiaterek taki przyjemny to i słońce nie takie uciążliwe. Nie jak co roku, lud tyle nie narzeka jak zawsze o tej porze, mozemy być zadowoleni! Wybierz jedna z trzech poniższych opcji:";
		
		document.getElementById("news6").innerHTML = "Zorganizuj festyn, niech ludzie poczują, że decyzja o migracji była słuszna: Złoto - 50, Nadzieja + 5pkt, wk**rwienie - 2pkt";
		document.getElementById("news7").innerHTML = "Fantastycznie, to znaczy że możecie szybciej pracować?: Modyfikator letni zmniejszony o 30%";
		document.getElementById("news8").innerHTML = "Może czas na wyprawe wojenną? Ludzie pod broń, ruszamy!: +5 siły bojowej na okres dobrej pogody";
		$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
	
		brakwyboruF();
		}
	}
}


function wydazeniawyborpierwsze()
{
	if(anomaliapogodowaflaga==1 && anomaliaznacznik =="a" && wydrzenieodklikane == 0)
	{
		if(zloto>=20)
		{
			zloto = Math.round((zloto - 20)*100)/100;
			anomaliapogodowaflaga = 0;
			anomaliapogodowezboze = 0.5;
			setTimeout(function(){anomaliapogodowezboze = 1;},20000)
			wydrzenieodklikane = 1;
			document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: Złoto - 20, Jesienny bonus zmniejszony o połowę";
			document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: Złoto - 20, Jesienny bonus zmniejszony o połowę";
			$("#news4").css("color","red")
			setTimeout (function() { 
		$("#news4").fadeOut(1000); }, 6000)
		$("#news4").fadeIn(500);
		$("#news4a").css("color","red")
			setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, 12000)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<20)
		{
			document.getElementById("news5").innerHTML = "Wodzu nie stać nas na ten wybór...Wybierz coś innego";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(1000); 
		}
	}
	
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="b" && wydrzenieodklikane == 0)
	{
		hope = hope + 1;
		anomaliapogodowezboze = 2;
		setTimeout(function(){anomaliapogodowezboze = 1;},20000)
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: Nadzieja +1, Jesienny bonus podwojony";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, 6000)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: Nadzieja +1, Jesienny bonus podwojony";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, 12000)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	//zima
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="c" && wydrzenieodklikane == 0)
	{
			if(zloto>=50)
		{
			hope = hope - 1;
			zloto = Math.round((zloto - 50)*100)/100;
			anomaliapogodowezboze = 1.1;
		setTimeout(function(){anomaliapogodowezboze = 1;},20000)
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: -50 Złota, Nadzieja -1, Zimowy modyfikator zwiększony o 10% ";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: -50 Złota, Nadzieja -1, Zimowy modyfikator zwiększony o 10% ";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<50)
		{
			document.getElementById("news5").innerHTML = "Wodzu niestać nas na ten wybór...";
			$("#news5").css("color","red")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(500);
		}
	}
	
	
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="d" && wydrzenieodklikane == 0)
	{
		hope = hope + 3;
		anomaliapogodowezboze = 0.9;
		setTimeout(function(){anomaliapogodowezboze = 1;},20000)
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: Nadzieja +3, Zimowy modyfikator zmniejszony o 10% ";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: Nadzieja +3, Zimowy modyfikator zmniejszony o 10% ";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	//wiosna
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="e" && wydrzenieodklikane == 0)
	{
		if(zloto>=75)
		{
			zloto = Math.round((zloto -75)*100)/100;
		riots = riots + 1;
		s = s - (s*0.05);
		s2 = s2 - (s2*0.05);
		s3 = s3 - (s3*0.05);
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: Wk**rwienie + 1, Zapasy zasobów: drewna,kamienia,zboża zmniejszone o 5%, złoto - 75";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: Wk**rwienie + 1, Zapasy zasobów: drewna,kamienia,zboża zmniejszone o 5%, złoto - 75";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<75)
		{
			document.getElementById("news5").innerHTML = "Wodzu niestać nas na ten wybór...";
			$("#news5").css("color","red")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(500);
		}
	}
	
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="f" && wydrzenieodklikane == 0)
	{
		if(zloto>=50 && s3>=20)
		{hope = hope + 5;
		s3 = s3 -20;
		zloto = Math.round((zloto - 50)*100)/100;
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: Nadzieja + 5pkt, zboże - 20, złoto - 50";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: Nadzieja + 5pkt, zboże - 20, złoto - 50";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<50 || s3<20)
		{
			document.getElementById("news5").innerHTML = "Wodzu niestać nas na ten wybór...";
			$("#news5").css("color","red")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(500);
		}
	}
	
	//lato
		else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="g" && wydrzenieodklikane == 0)
	{
		if(zloto>=70)
		{
			zloto = Math.round((zloto - 70)*100)/100;
			riots = riots - 1;
			anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: -70 złota, wk**rwienie - 1pkt";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: -70 złota, wk**rwienie - 1pkt";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)	
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<70)
		{
			document.getElementById("news5").innerHTML = "Wodzu niestać nas na ten wybór...";
			$("#news5").css("color","red")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(500);
		}
	}
	
	
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="h" && wydrzenieodklikane == 0)
	{
		if(zloto>=50)
		{
			hope = hope + 5;
			zloto = zloto -50;
			riots = riots - 2;
			anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: Złoto - 50, Nadzieja + 5pkt, wk**rwienie - 2pkt ";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: Złoto - 50, Nadzieja + 5pkt, wk**rwienie - 2pkt ";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		
		else if(zloto<50)
		{
			document.getElementById("news5").innerHTML = "Wodzu nie stać nas na ten wybór...Wybierz coś innego";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(1000); 
		}
	}
	
	//Goście
	else if(anomaliaznacznik == "gosci"  && wydrzenieodklikane == 0 )
	{
		if(zloto>=20 && s3>=20)
		{
		hope = hope + 3;
		s3 = s3 - 20;
		zloto = zloto - 20;
		losowaniehandluzplemionamiwydarzenia = Math.round((Math.random()*3)+1);
		
		if(losowaniehandluzplemionamiwydarzenia = 1)
		{
		wydarzeniahandelzplemami = 0.6;
		setTimeout(function(){wydarzeniahandelzplemami=0;},40000)
		document.getElementById("wartosckupcowPlemowieD").innerHTML = wartosckupcowPlemowie;
		wartosckupcowPlemowieF();
		losoweplemie = "Plemami";
		}
		else if(losowaniehandluzplemionamiwydarzenia = 2)
		{
			wydarzeniahandelzmaurykami = 0.6;
			setTimeout(function(){wydarzeniahandelzmaurykami=0;},40000)
			wartosckupcowMaurycyF();
			losoweplemie = "Maurykami";
		}
		else if(losowaniehandluzplemionamiwydarzenia = 3)
		{
			wydarzeniahandelznordyskami = 0.6;
			setTimeout(function(){wydarzeniahandelznordyskami=0;},40000)
			wartosckupcowNordyskowieF();
			losoweplemie = "Nordyskami";
		};

		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: Nadzieja +3, Zboże -20, Złoto -20, 0.6 zlota z handlu z " + losoweplemie;
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: Nadzieja +3, Zboże -20, Złoto -20, 0.6 zlota z handlu z " + losoweplemie;
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<20 || s3<20)
		{
				
			document.getElementById("news5").innerHTML = "Wodzu nie stać nas na ten wybór...Wybierz coś innego";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(1000); 
		}
		
	}
	
	//handel
	else if(anomaliaznacznik == "handelzdarzeni" && wydrzenieodklikane == 0 )
	{
		if(zloto>=30 && s3 >=20)
		{
		wydarzeniahandelzplemami = 0.3;
		setTimeout(function(){wydarzeniahandelzplemami=0;},40000)
		wydarzeniahandelzmaurykami = 0.3;
		setTimeout(function(){wydarzeniahandelzmaurykami=0;},40000)
		wydarzeniahandelznordyskami = 0.3;
		setTimeout(function(){wydarzeniahandelznordyskami=0;},40000)
		wartosckupcowPlemowieF();
		wartosckupcowMaurycyF();
		wartosckupcowNordyskowieF();
		zloto = Math.round((zloto - 30)*100)/100;
		s3 = s3 -20;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		relacjezplemami = relacjezplemami + 30;
		relacjezmaurykami = relacjezmaurykami + 30;
		relacjeznordyskami = relacjeznordyskami + 30;
		relacjezmerkami = relacjezmerkami + 30;
		relacjezopsydianami = relacjezopsydianami + 30;
		relacjezyerisami = relacjezyerisami + 30;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: +30 do relacji ze wszystkimi plemionami, -30złota, -20 zboża, +0.3 do handlu ze wszystkimi plemionami";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: +30 do relacji ze wszystkimi plemionami, -30złota, -20 zboża, +0.3 do handlu ze wszystkimi plemionami";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<30 || s3 <20)
		{
					document.getElementById("news5").innerHTML = "Wodzu niestać nas na ten wybór...";
			$("#news5").css("color","red")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(500);
		}
	}
	
	
	//pożar
	else if(anomaliaznacznik == "poza" && wydrzenieodklikane == 0 )
	{
		if(zloto>=50)
		{
		s = s -30;
		s2 = s2 -15;
		s3 = s3 -5;
		zloto = Math.round((zloto -50)*100)/100;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: -30drewna, - 15 kamienia, - 5 zboża, - 50złota";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: -30drewna, - 15 kamienia, - 5 zboża, - 50złota";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<50)
		{
				document.getElementById("news5").innerHTML = "Wodzu niestać nas na ten wybór...";
			$("#news5").css("color","red")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(500);
		}
		
	}
	
	
	//susza
	else if(anomaliaznacznik == "susz"  && wydrzenieodklikane == 0 )
	{
		if(zloto>=50)
		{
		zloto = Math.round((zloto -50)*100)/100;
		var szamanizinnychplemionwydarzenie = Math.floor((Math.random()*2)+1);
		$("#news5").fadeIn(500);
		document.getElementById("news5").innerHTML = szamanizinnychplemionwydarzenie;
		if(szamanizinnychplemionwydarzenie==1)
		{
			s3 = s3 -30;
			hope = hope - 3;
		document.getElementById("news5").innerHTML = "Wybrana opcja pierwsza: Szamani, postali, potańczyli, pośpiewali, kase wzieli... a deszczu jak nie było tak nie ma... -3 nadzieji, - 30zboża";
		document.getElementById("news5a").innerHTML = "Wybrana opcja pierwsza: Szamani, postali, potańczyli, pośpiewali, kase wzieli... a deszczu jak nie było tak nie ma... -3 nadzieji, - 30zboża";
		$("#news5").css("color","red")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(500);
		$("#news5a").css("color","red")
		setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(500);
		}
		else if(szamanizinnychplemionwydarzenie==2)
		{
			s3 = s3 + 50;
			hope = hope + 3;
		document.getElementById("news5").innerHTML = "To niesamowite! W trakcie szamańskich śpiewów i tańców zaczeła się rześista ulewa... Szamani jak odchodzili - powiedzieli ze ma lać kilka dni, a po kilku dniach częściej - jesteśmy uratowani! Zboże + 50 | Nadzieja + 3";
		$("#news5").css("color","green")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(500);
		document.getElementById("news5a").innerHTML = "To niesamowite! W trakcie szamańskich śpiewów i tańców zaczeła się rześista ulewa... Szamani jak odchodzili - powiedzieli ze ma lać kilka dni, a po kilku dniach częściej - jesteśmy uratowani! Zboże + 50 | Nadzieja + 3";
		$("#news5a").css("color","green")
		setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(500);
		}
		
		wydrzenieodklikane = 1;
	//	anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: -50 złota, nadzieja oraz zboże w zależności od wyniku czarowania szamanów";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: -50 złota, nadzieja oraz zboże w zależności od wyniku czarowania szamanów";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<50)
		{
				
			document.getElementById("news5").innerHTML = "Wodzu nie stać nas na ten wybór...Wybierz coś innego";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(1000); 
		
		}
	}
	
	//osuwisko w kamieniołomie
	else if(anomaliaznacznik == "osuwisk"  && wydrzenieodklikane == 0 )
	{
		s = s -80;
		s2 = s2 -120;
		zloto = Math.round((zloto - 50)*100)/100;
		riots = riots + 0.5;
		hope = hope - 1;
		kamieniarze = kamieniarze - kamieniarze*0.2;
		kamieniolomlvl = kamieniolomlvl - 2;
		//anomaliapogodowaflaga = 0;
		if(kamieniolomlvl<1)
		{
			kamieniolomlvl =1;
		}
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: -50 złota, -80 drewna, - 120 kamienia, 20% rannych kamieniarzy, poziom kamieniołomu -2, nadzieja -1";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: -50 złota, -80 drewna, - 120 kamienia, 20% rannych kamieniarzy, poziom kamieniołomu -2, nadzieja -1";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		KamieniolomyF();
	}
	
	//napąść pobliskich zbójów
	else if(anomaliaznacznik == "napascpobliskichzboj"  && wydrzenieodklikane == 0 )
	{
		if(zloto>=70)
		{
		zloto = Math.round((zloto - 70)*100)/100;
		riots = riots - 1;
		hope = hope - 1;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: -70 złota, -1 nadzieja, -1 wk**rwienie";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: -70 złota, -1 nadzieja, -1 wk**rwienie";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
		else if(zloto<70)
		{
				document.getElementById("news5").innerHTML = "Wodzu nie stać nas na ten wybór...Wybierz coś innego";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(1000); 
		}
	}
	
	else if(anomaliaznacznik == "napascwyznawcowzoltegopta"  && wydrzenieodklikane == 0 )
	{
		if(glownareligianumer != 1 && kosciollvl > 0)
		{
			wydrzenieodklikane = 1;
			//anomaliapogodowaflaga = 0;
			glownareligianumer = 1;
			document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: Główna religia zmieniona na żółto ptactwo";
			$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: Główna religia zmieniona na żółto ptactwo";
			$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		
		document.getElementById("glownareligiaD").innerHTML = glownareligia;
		}
		else if(glownareligianumer == 1 && kosciollvl > 0)
		{
			wydrzenieodklikane = 1;
			//anomaliapogodowaflaga = 0;
			riots = riots -2;
			hope = hope +2;
			document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: + 2 nadzieji, - 2 wk**rwienia";
			$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: + 2 nadzieji, - 2 wk**rwienia";
			$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(kosciollvl < 1)
		{
		document.getElementById("news4").innerHTML = "Nie mamy kościoła i nie wiemy co to religia! Wybierz inna opcje";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
			
		document.getElementById("news4a").innerHTML = "Nie mamy kościoła i nie wiemy co to religia! Wybierz inna opcje";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		}
		
		
	}
	
		//bunt niewolników
	else if(anomaliaznacznik == "buntniewolnik"  && wydrzenieodklikane == 0 )
	{
		
		if(zloto>=50)
		{
			zloto = Math.round((zloto - 50)*100)/100;
			wydrzenieodklikane = 1;
			//anomaliapogodowaflaga = 0;
			napiecianiewolnikowV = napiecianiewolnikowV - 20;
			if(napiecianiewolnikowV<0)
			{
				napiecianiewolnikowV = 0;
			}
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: -50 złota, napięcia niewolników -20";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: -50 złota, napięcia niewolników -20";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<50)
		{
				document.getElementById("news5").innerHTML = "Wodzu nie stać nas na ten wybór...Wybierz coś innego";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(1000); 
		}
		
	}
		//bunt religijny
		else if(anomaliaznacznik == "buntnatlereligij" && wydrzenieodklikane == 0 )
	{
		if(zloto>=50)
		{
		zloto = Math.round((zloto - 50)*100)/100;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: -50 złota";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: -50 złota";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<50)
		{
				
			document.getElementById("news5").innerHTML = "Wodzu nie stać nas na ten wybór...Wybierz coś innego";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(1000); 
		
		}
	}
		
	
	
	//Podżegacze żółtego ptaka
	else if(anomaliaznacznik == "podzegaczezoltegopt"  && wydrzenieodklikane == 0 )
	{
		hope = hope - 0.5;
		riots = riots -4;
		zloto = Math.round((zloto +20)*100)/100;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja pierwsza: nadzieja -0.5, wk**rwienie -4, złoto +20";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		ocument.getElementById("news4a").innerHTML = "Wybrana opcja pierwsza: nadzieja -0.5, wk**rwienie -4, złoto +20";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
}

function wydazeniawybordrugi()
{
	if(anomaliapogodowaflaga==1 && anomaliaznacznik =="a" && wydrzenieodklikane == 0)
	{
		if(zloto>=40)
		{
			zloto = Math.round((zloto - 40)*100)/100;
			anomaliapogodowaflaga = 0;
			wydrzenieodklikane = 1;
			document.getElementById("news4").innerHTML = "Wybrana opcja druga: -40złota, Jesienny bonus bez zmian";
			$("#news4").css("color","red")
			setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: -40złota, Jesienny bonus bez zmian";
			$("#news4a").css("color","red")
			setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<40)
		{
			document.getElementById("news5").innerHTML = "Wodzu nie stać nas na ten wybór...Wybierz coś innego";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(1000); 
		}
	}
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="b" && wydrzenieodklikane == 0)
	{
		hope = hope + 4;
		anomaliapogodowezboze = 1.5;
		setTimeout(function(){anomaliapogodowezboze = 1;},40000)
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: Nadzieja + 4, Jesienny bonus zwiększony o połowę";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: Nadzieja + 4, Jesienny bonus zwiększony o połowę";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	//zima
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="c" && wydrzenieodklikane == 0)
	{
		hope = hope - 2;
		anomaliapogodowezboze = 1.3;
		setTimeout(function(){anomaliapogodowezboze = 1;},40000)
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: Nadzieja -2, Zimowy modyfikator zwiększony o 30% ";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: Nadzieja -2, Zimowy modyfikator zwiększony o 30% ";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		wyprawapozwierzyne = Math.round((Math.random()*2)+ 1)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		if(wyprawapozwierzyne ==1)
		{
			s3 = s3 + 100;
			wyprawapozwierzyne = 0;
			document.getElementById("news5").innerHTML = "Twoi łowcy wrócili ze zwierzyną! + 100 Zboża";
			$("#news5").css("color","green")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(500);
		document.getElementById("news5a").innerHTML = "Twoi łowcy wrócili ze zwierzyną! + 100 Zboża";
			$("#news5a").css("color","green")
		setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(500);
		}
		else if(wyprawapozwierzyne ==2)
		{
			smiercnawyprawie = Math.floor(orsyanie * 0.1);
			smiercnawyprawiesuma = smiercnawyprawiesuma + smiercnawyprawie;
			wyprawapozwierzyne = 0;
			document.getElementById("news5").innerHTML = "Przybyła wiadomość z plemion południowych... Nasi łowcy zostali znalezieni martwi w lesie nie opodal jednej z wiosek. Zgineło " + smiercnawyprawie;
			$("#news5").css("color","red")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(500);
		document.getElementById("news5a").innerHTML = "Przybyła wiadomość z plemion południowych... Nasi łowcy zostali znalezieni martwi w lesie nie opodal jednej z wiosek. Zgineło " + smiercnawyprawie;
			$("#news5a").css("color","red")
		setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(500);
		}
		
	}
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="d" && wydrzenieodklikane == 0)
	{
		anomaliapogodowezboze = 0.7;
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: Zimowy modyfikator zmniejszony o 30% ";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: Zimowy modyfikator zmniejszony o 30% ";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	//wiosna
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="e" && wydrzenieodklikane == 0)
	{
		nowewydarzenieclickF();
		noweplotkiclick();
		wydrzenieodklikane = 1;
		riots = riots + 5;
		chata_drwalalvl = chata_drwalalvl - 4;
		kamieniolomlvl = kamieniolomlvl - 4;
		farmalvl = farmalvl - 4;
		if(chata_drwalalvl<1)
		{
			chata_drwalalvl=1;
		}
		if(kamieniolomlvl<1)
		{
			kamieniolomlvl=1;
		}
		if(farmalvl<1)
		{
			farmalvl =1;
		}
		FarmF();
		KamieniolomyF();
		LasF();
		anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: Zniszczeniu ulegają po 4 poziomy budynków zasobów oraz: Targowisko,Oberżę,Łaźnię";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: Zniszczeniu ulegają po 4 poziomy budynków zasobów oraz: Targowisko,Oberżę,Łaźnię";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		if(targowiskolvl>0)
		{
			targowiskolvl = targowiskolvl -1;
			TargF();
		}
		if(oberzalvl>0)
		{
			oberzalvl = oberzalvl -1;
			OberzaF();
		}
		if(laznielvl>0)
		{
			laznielvl = laznielvl -1;
				document.getElementById("laznielvl").innerHTML = laznielvl;
				document.getElementById("laznielvls").innerHTML = laznielvl;
		}
		brakwyboruF();
		
	}
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="f" && wydrzenieodklikane == 0)
	{
		hope = hope + 3;
		riots = riots - 1;
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: Nadzieja + 3pkt, Wk**rwienie - 1pkt";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: Nadzieja + 3pkt, Wk**rwienie - 1pkt";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	//lato
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="g" && wydrzenieodklikane == 0)
	{
		anomaliapogodowedrewno = 2;
		setTimeout(function(){anomaliapogodowedrewno = 1;},40000)
		anomaliapogodowekamien = 2;
		setTimeout(function(){anomaliapogodowekamien = 1;},40000)
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: Letni modyfikator podwojony";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: Letni modyfikator podwojony";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="h" && wydrzenieodklikane == 0)
	{
		anomaliapogodowedrewno = 0.7;
		setTimeout(function(){anomaliapogodowedrewno = 1;},40000)
		anomaliapogodowekamien = 0.7;
		setTimeout(function(){anomaliapogodowekamien = 1;},40000)
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: Letni modyfikator podwojony";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: Letni modyfikator podwojony";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	//Goście
	else if(anomaliaznacznik == "gosci" && wydrzenieodklikane == 0 )
	{
		
		hope = hope + 0.5;
		s3 = s3 + 20;
		zloto = Math.round((zloto + 50)*100)/100;
		losowaniehandluzplemionamiwydarzenia = Math.floor((Math.random()*3)+1);
		if(losowaniehandluzplemionamiwydarzenia = 1)
		{
		wydarzeniahandelzplemami = 0.2;
		setTimeout(function(){wydarzeniahandelzplemami=0;},40000)
		wartosckupcowPlemowieF();
		losoweplemie = "Plemami";
		}
		else if(losowaniehandluzplemionamiwydarzenia = 2)
		{
			wydarzeniahandelzmaurykami = 0.2;
			setTimeout(function(){wydarzeniahandelzmaurykami=0;},40000)
						
wartosckupcowMaurycyF();
			losoweplemie = "Maurykami";
		}
		else if(losowaniehandluzplemionamiwydarzenia = 3)
		{
			wydarzeniahandelznordyskami = 0.2;
			setTimeout(function(){wydarzeniahandelznordyskami=0;},40000)

wartosckupcowNordyskowieF();
			losoweplemie = "Nordyskami";
		};

		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: nadzieja +0.5, zboże +20, złoto+50, +0.2 zlota z handlu z " + losoweplemie;
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: nadzieja +0.5, zboże +20, złoto+50, +0.2 zlota z handlu z " + losoweplemie;
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		
		
	}
	
	//handel
	else if(anomaliaznacznik == "handelzdarzeni" && wydrzenieodklikane == 0)
	{
		
		
		hope = hope + 1;
		wydarzeniahandelzplemami = 1.2;
		setTimeout(function(){wydarzeniahandelzplemami=0;},40000)
		wydarzeniahandelzmaurykami = 1.2;
		setTimeout(function(){wydarzeniahandelzmaurykami=0;},40000)
		wydarzeniahandelznordyskami = 1.2;
		setTimeout(function(){wydarzeniahandelznordyskami=0;},40000)
		wartosckupcowPlemowieF();
wartosckupcowMaurycyF();
wartosckupcowNordyskowieF();
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: +1.2 do handlu ze wszystkimi plemionami, nadzieja +1";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: +1.2 do handlu ze wszystkimi plemionami, nadzieja +1";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
	//pożar
	else if(anomaliaznacznik == "poza" && wydrzenieodklikane == 0 )
	{
		riots = riots + 3;
		hope = hope - 2;
		chata_drwalalvl = chata_drwalalvl - 2;
		if(chata_drwalalvl<1)
		{
			chata_drwalalvl = 0;
		}
		kamieniolomlvl = kamieniolomlvl -2;
		if(kamieniolomlvl<1)
		{
			kamieniolomlvl = 0;
		}
		farmalvl = farmalvl - 1;
		if(farmalvl<1)
		{
			farmalvl = 0;
		}
		
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: w pożarze tracimy 5poziomów budynków, wk**rwienie + 3, nadzieja - 2";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: w pożarze tracimy 5poziomów budynków, wk**rwienie + 3, nadzieja - 2";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		KamieniolomyF();
		LasF();
		FarmF();
	}
	
	//susza
	else if(anomaliaznacznik == "susz" && wydrzenieodklikane == 0 )
	{
		if(zloto>=50)
		{
		zloto = Math.round((zloto - 50)*100)/100;
		hope = hope - 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: -50 złota, nadzieja -1";
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: -50 złota, nadzieja -1";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		}
		else if(zloto<50)
		{
				
			document.getElementById("news5").innerHTML = "Wodzu nie stać nas na ten wybór...Wybierz coś innego";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, 6000)
		$("#news5").fadeIn(1000); 
		}
	}
	
	//osuwisko w kamieniołomie
	else if(anomaliaznacznik == "osuwisk" && wydrzenieodklikane == 0 )
	{
		s = s -120;
		zloto = Math.round((zloto - 30)*100)/100;
		hope = hope - 2;
		kamieniarze = kamieniarze - kamieniarze*0.5;
		kamieniolomlvl = kamieniolomlvl - 2;
		if(kamieniolomlvl<1)
		{
			kamieniolomlvl =1;
		}
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: -120 drewna, -30złota, 50% rannych kamieniarzy, poziom kamieniołomu -2, nadzieja -2";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: -120 drewna, -30złota, 50% rannych kamieniarzy, poziom kamieniołomu -2, nadzieja -2";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		KamieniolomyF();
	}
	
	//napąść pobliskich zbójów
	else if(anomaliaznacznik == "napascpobliskichzboj" && wydrzenieodklikane == 0 )
	{
		
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: wygra ten którego siła armii jest większa";
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: wygra ten którego siła armii jest większa";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		
		var silaarmiipobliskichzbojow = Math.round((Math.random()*10)+3);
		if(silaarmii>=silaarmiipobliskichzbojow)
		{
			hope = hope + 2;
			zloto = Math.round((zloto + 100)*100)/100;
			document.getElementById("news5").innerHTML = "Udało się odeprzeć zbójów, zabitych przeszukaliśmy i dobytek: +100złota, dorzuciliśmy do skarbca, +2 nadzieji";
			$("#news5").css("color","green")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(1000); 
		document.getElementById("news5a").innerHTML = "Udało się odeprzeć zbójów, zabitych przeszukaliśmy i dobytek: +100złota, dorzuciliśmy do skarbca, +2 nadzieji";
			$("#news5a").css("color","green")
			setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(1000); 
		}
		else if(silaarmii<silaarmiipobliskichzbojow)
		{
			hope = hope - 2;
			zloto = Math.round((zloto - 100)*100)/100;
			s3 = s3 - 20;
			document.getElementById("news5").innerHTML = "Nie udało się odeprzeć zbójów... Wdarli się do osady, podpalili ze dwie chaty ale zdąrzliśmy je ugaśić w pore, niemniej jednak okradli skarbiec i magazyn, a nadzieja naszego ludu spadła: -100złota, -20 zboża, -2 nadzieji";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(1000); 
		document.getElementById("news5a").innerHTML = "Nie udało się odeprzeć zbójów... Wdarli się do osady, podpalili ze dwie chaty ale zdąrzliśmy je ugaśić w pore, niemniej jednak okradli skarbiec i magazyn, a nadzieja naszego ludu spadła: -100złota, -20 zboża, -2 nadzieji";
			$("#news5a").css("color","red")
			setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(1000); 
		}
	
	}
	
	else if(anomaliaznacznik == "napascwyznawcowzoltegopta" && wydrzenieodklikane == 0 )
	{
		
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: wygra ten którego siła armii jest większa";
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga == 0;
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: wygra ten którego siła armii jest większa";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		var silaarmiiwyznawcowzoltegoptaka = Math.round((Math.random()*10)+3);
		if(silaarmii>=silaarmiiwyznawcowzoltegoptaka)
		{
			hope = hope + 2;
			zloto = Math.round((zloto + 50)*100)/100;
			document.getElementById("news5").innerHTML = "Udało się odeprzeć żółto-ptakowców, zabitych przeszukaliśmy i dobytek: +50złota, dorzuciliśmy do skarbca, +2 nadzieji";
			$("#news5").css("color","green")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(500); 
		document.getElementById("news5a").innerHTML = "Udało się odeprzeć żółto-ptakowców, zabitych przeszukaliśmy i dobytek: +50złota, dorzuciliśmy do skarbca, +2 nadzieji";
			$("#news5a").css("color","green")
			setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(500); 
		}
		else
		{
			hope = hope - 2;
			zloto = Math.round((zloto - 40)*100)/100;
			glownareligia = "Żolto Ptactwo"
			document.getElementById("news5").innerHTML = "Nie udało się odeprzeć żółto-ptakowców... narzucili nam swoją religię i zabrali tyle złota ile zdołali unieść: -40 złota, -2 nadzieji, głowna religia żółto ptactwo";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(500); 
		document.getElementById("news5a").innerHTML = "Nie udało się odeprzeć żółto-ptakowców... narzucili nam swoją religię i zabrali tyle złota ile zdołali unieść: -40 złota, -2 nadzieji, głowna religia żółto ptactwo";
			$("#news5a").css("color","red")
			setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(500);
		}
		
		
	}
	
		//bunt niewolników
	else if(anomaliaznacznik == "buntniewolnik" && wydrzenieodklikane == 0 )
	{
		var silaarmiiniewolnikow = Math.floor(populacjaniewolnikow * 0.2)
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: walki na ulicy, wynik starcia poznasz po kliknięcu tej opcji";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: walki na ulicy, wynik starcia poznasz po kliknięcu tej opcji";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		if(silaarmii>=silaarmiiniewolnikow)
		{
			document.getElementById("news5").innerHTML = "Wodzu niewolnicy pobici i zaciągnieci z powrotem do pracy. Prowodyrów odseparowaliśmy i zabiliśmy: Nadzieja +0.5, Wk**rwienie - 2, Napięcie niewolników -20";
			$("#news5").css("color","green")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(1000); 
		document.getElementById("news5a").innerHTML = "Wodzu niewolnicy pobici i zaciągnieci z powrotem do pracy. Prowodyrów odseparowaliśmy i zabiliśmy: Nadzieja +0.5, Wk**rwienie - 2, Napięcie niewolników -20";
			$("#news5a").css("color","green")
			setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(1000); 
			hope = hope + 0.5;
			riots = riots - 2;
			
			napiecianiewolnikowV = napiecianiewolnikowV - 20;
			if(napiecianiewolnikowV<0)
			{
				napiecianiewolnikowV = 0;
			}
		
		}
		else if(silaarmii<silaarmiiniewolnikow)
		{
				document.getElementById("news5").innerHTML = "Wodzu... tragedia... Nasza drużyna rozbita. Na ulicach chaos i plądrowanie...: Nadzieja -5, Wk**rwienie +5, złoto - 50";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(1000); 
		document.getElementById("news5a").innerHTML = "Wodzu... tragedia... Nasza drużyna rozbita. Na ulicach chaos i plądrowanie...: Nadzieja -5, Wk**rwienie +5, złoto - 50";
			$("#news5a").css("color","red")
			setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(1000); 
		hope = hope - 5;
		riots = riots + 5;
		zloto = Math.round((zloto - 50)*100)/100;
		}
		
	}
		//bunt religijny
	else if(anomaliaznacznik == "buntnatlereligij"  && wydrzenieodklikane == 0 )
	{
		s = s - 50;
		s2 = s2 -50;
		s3 = s3 - 20;
		riots = riots + 0.5;
		hope = hope - 0.5;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja druga: -50drewno, -50kamienia, -20zboża, + wk**rwienie -0.5, nadzieja -0.5";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja druga: -50drewno, -50kamienia, -20zboża, + wk**rwienie -0.5, nadzieja -0.5";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
	//Podżegacze żółtego ptaka
	else if(anomaliaznacznik == "podzegaczezoltegopt" && wydrzenieodklikane == 0 )
	{
		document.getElementById("news5").innerHTML = "Wybrana opcja druga: 80% że Wania wygra, wynik starcia po wybraniu tej opcji";
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		var wynikpojedynkuwanii = Math.floor((Math.random()*10)+1);
		$("#news5").css("color","green")
		setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(500);
		document.getElementById("news5a").innerHTML = "Wybrana opcja druga: 80% że Wania wygra, wynik starcia po wybraniu tej opcji";

		$("#news5a").css("color","green")
		setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(500);

		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		if(wynikpojedynkuwanii<=8)
		{
			zloto = Math.round((zloto + 150)*100)/100;
			hope = hope + 3;
			riots = riots - 2;
				document.getElementById("news5").innerHTML = "Tak, jak myśleliśmy, Wania swój chłop, rozplatał tego wariata na pół! Reszta podżegaczy podzieliła los tego nieszczęsnika: +150 Złota, +3 Nadzieji, -2 Wk**rwienia";
			$("#news5").css("color","green")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(1000); 
		document.getElementById("news5a").innerHTML = "Tak, jak myśleliśmy, Wania swój chłop, rozplatał tego wariata na pół! Reszta podżegaczy podzieliła los tego nieszczęsnika: +150 Złota, +3 Nadzieji, -2 Wk**rwienia";
			$("#news5a").css("color","green")
			setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(1000); 
		}
		if(wynikpojedynkuwanii>8)
			{
			
			hope = hope -3;
			riots = riots + 2;
				document.getElementById("news5").innerHTML = "Ten wariat okazał się nie lada wyzwaniem... i ubił Wanie...: -3 Nadzieji, +2 Wk**rwienia";
			$("#news5").css("color","red")
			setTimeout (function() { 
		$("#news5").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news5").fadeIn(1000); 
		document.getElementById("news5a").innerHTML = "Ten wariat okazał się nie lada wyzwaniem... i ubił Wanie...: -3 Nadzieji, +2 Wk**rwienia";
			$("#news5a").css("color","red")
			setTimeout (function() { 
		$("#news5a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news5a").fadeIn(1000); 
			}
	}
}

function wydazeniawybortrzeci()
{
	//jesien
	if(anomaliapogodowaflaga==1 && anomaliaznacznik =="a" && wydrzenieodklikane == 0)
	{
		hope = hope + 1;
		anomaliapogodowezboze = 0;
		setTimeout(function(){anomaliapogodowezboze = 1;},20000)
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: Nadzieja +1, Jesienny bonus wyzerowany";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: Nadzieja +1, Jesienny bonus wyzerowany";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="b" && wydrzenieodklikane == 0)
	{
		zloto = Math.round((zloto + 100)*100)/100;
		riots = riots + 0.5;
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: Złoto + 100, wk**rwienie + 0.5";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: Złoto + 100, wk**rwienie + 0.5";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	//zima
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="c" && wydrzenieodklikane == 0)
	{
		hope = hope - 3;
		anomaliapogodowezboze = 1.3;
		setTimeout(function(){anomaliapogodowezboze = 1;},20000)
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: Nadzieja -3, Zimowy modyfikator zwiększony o 30% ";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: Nadzieja -3, Zimowy modyfikator zwiększony o 30% ";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="d" && wydrzenieodklikane == 0)
	{
		anomaliapogodowezboze = 0.5;
		riots = riots + 3;
		setTimeout(function(){anomaliapogodowezboze = 1;},20000)
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: Zimowy modyfikator zmniejszony o 50%, Wk**rwienie + 3pkt ";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: Zimowy modyfikator zmniejszony o 50%, Wk**rwienie + 3pkt ";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	//wiosna
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="e" && wydrzenieodklikane == 0)
	{
		riots = riots + 0.5;
		s = s - (s*0.1);
		s2 = s2 - (s2*0.1);
		s3 = s3 - (s3*0.1);
		chata_drwalalvl = chata_drwalalvl - 2;
		kamieniolomlvl = kamieniolomlvl - 2;
		farmalvl = farmalvl - 2;
		if(chata_drwalalvl<1)
		{
			chata_drwalalvl=1;
		}
		if(kamieniolomlvl<1)
		{
			kamieniolomlvl=1;
		}
		if(farmalvl<1)
		{
			farmalvl =1;
		}
		FarmF();
		KamieniolomyF();
		LasF();
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: Wk**rwienie + 0.5,Zapasy zasobów: drewna,kamienia,zboża zmniejszone o 10%, zniszczone po 2 poziomy budynkow zasobów";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: Wk**rwienie + 0.5,Zapasy zasobów: drewna,kamienia,zboża zmniejszone o 10%, zniszczone po 2 poziomy budynkow zasobów";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="f" && wydrzenieodklikane == 0)
	{
		s = s +150;
		s2 = s2 +150;
		s3 = s3 + 70;
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: +150 drewna, +150 kamienia, + 70zboża";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: +150 drewna, +150 kamienia, + 70zboża";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
	//lato
	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="g" && wydrzenieodklikane == 0)
	{
		riots = riots + 3;
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: Wk**rwienie + 3pkt";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: Wk**rwienie + 3pkt";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}

	else if(anomaliapogodowaflaga==1 && anomaliaznacznik =="h" && wydrzenieodklikane == 0)
	{
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: Siła armi wzrosła czasowo o 5pkt";
		anomaliapogodowaflaga = 0;
		wydrzenieodklikane = 1;
		silaarmiianomaliapogodowa = 5;
		setTimeout(function(){silaarmiianomaliapogodowa = 0;},20000)
		document.getElementById("silaarmiiD").innerHTML = silaarmii;
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: Siła armi wzrosła czasowo o 5pkt";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)	
		
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	//Goście
	else if(anomaliaznacznik == "gosci" && wydrzenieodklikane == 0)
	{
		
		zloto = Math.round((zloto + 120)*100)/100;
		s3 = s3 + 20;
		s = s +100;
		s2 = s2 + 50;
		hope = hope -1;
		wydarzeniahandelzplemami = (-0.5);
		setTimeout(function(){wydarzeniahandelzplemami=0;},40000)
		wydarzeniahandelzmaurykami = (-0.5);
		setTimeout(function(){wydarzeniahandelzmaurykami=0;},40000)
		wydarzeniahandelznordyskami = (-0.5);
		setTimeout(function(){wydarzeniahandelznordyskami=0;},40000)
		wartosckupcowPlemowieF();
wartosckupcowMaurycyF();
wartosckupcowNordyskowieF();

		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: +120 złota, + 100 drewna, + 50 kamienia, +20 zboża, -0.5 do handlu ze wszystkimi plemionami, nadzieja -1";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: +120 złota, + 100 drewna, + 50 kamienia, +20 zboża, -0.5 do handlu ze wszystkimi plemionami, nadzieja -1";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		
		
	}
	
	//handel
	else if(anomaliaznacznik == "handelzdarzeni"  && wydrzenieodklikane == 0 )
	{
		
		zloto = zloto + 70;
		hope = hope + 2;
		riots = riots - 2;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: +70 złota, nadzieja + 2, wk**rwienie -2";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: +70 złota, nadzieja + 2, wk**rwienie -2";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
	//pożar
	else if(anomaliaznacznik == "poza"  && wydrzenieodklikane == 0 )
	{
		
		s = s -100;
		s2 = s2 -100;
		s3 = s3 -15;
		riots = riots + 0.5;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: -100drewna, -100 kamienia, - 15zboża, wk**rwienie + 0.5";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
			document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: -100drewna, -100 kamienia, - 15zboża, wk**rwienie + 0.5";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
	//susza
	else if(anomaliaznacznik == "susz" && wydrzenieodklikane == 0 )
	{
		
		wydarzeniazboze = (-2)
		setTimeout(function(){wydarzeniazboze=0;},30000)
		wydarzeniadrewno = (-1)
		setTimeout(function(){wydarzeniadrewno=0;},30000)
		riots = riots +3;
		hope = hope -2;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: zboże-2 przez 30sec, drewno -1 przez 30sec,wk**rwienie+3,nadzieja-2";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: zboże-2 przez 30sec, drewno -1 przez 30sec,wk**rwienie+3,nadzieja-2";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
	//osuwisko w kamieniołomie
	else if(anomaliaznacznik == "osuwisk" && wydrzenieodklikane == 0 )
	{
		s = s -80;
		s2 = s2 -120;
		zloto = Math.round((zloto - 50)*100)/100;
		riots = riots + 0.5;
		hope = hope - 1;
		glod_kamieniarzy1 = glod_kamieniarzy1 - kamieniarze;
		kamieniolomlvl = kamieniolomlvl - 2;
		if(kamieniolomlvl<1)
		{
			kamieniolomlvl =1;
		}
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: Wszyscy kamieniarze nieżyją, poziom kamieniołomu -2, wk**rwienie +2, nadzieja -3";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: Wszyscy kamieniarze nieżyją, poziom kamieniołomu -2, wk**rwienie +2, nadzieja -3";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
		KamieniolomyF();
	}
	
	//napąść pobliskich zbójów
	else if(anomaliaznacznik == "napascpobliskichzboj" && wydrzenieodklikane == 0 )
	{
		
		wydarzeniazboze = (-0.05);
		setTimeout(function(){wydarzeniazboze=0;},30000)
		wydarzeniadrewno = (-2);
		setTimeout(function(){wydarzeniadrewno=0;},30000)
		wydarzeniekamien = (-2);
		setTimeout(function(){wydarzeniekamien=0;},30000)
		wydarzeniezloto = (-0.05);
		setTimeout(function(){wydarzeniezloto=0;},30000)
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: przez 30sec: -2 drewna, -2 kamienia, -0.05 złota, - 0.05 zboża ";
		$("#news4").css("color","red")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: przez 30sec: -2 drewna, -2 kamienia, -0.05 złota, - 0.05 zboża ";
		$("#news4a").css("color","red")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
	else if(anomaliaznacznik == "napascwyznawcowzoltegopta" && wydrzenieodklikane == 0 )
	{
		
			riots = riots + 5;
			hope = hope - 4;
			napascwyznawcowzoltegoptaorsyanie = (orsyanie*0.2) * (-1);
			wydrzenieodklikane = 1;
			//anomaliapogodowaflaga = 0;
			document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: wk**rwienie + 5, nadzieja - 4, torsjanie - 2%";
			$("#news4").css("color","red")
			setTimeout (function() { 
			$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
			$("#news4").fadeIn(500);
			document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: wk**rwienie + 5, nadzieja - 4, torsjanie - 2%";
			$("#news4a").css("color","red")
			setTimeout (function() { 
			$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
			$("#news4a").fadeIn(500);
			setTimeout (function() { 
			$("#news1").fadeOut(1000); }, 4000)
			setTimeout (function() { 
			$("#news6").fadeOut(1000); }, 4000)
			setTimeout (function() { 
			$("#news7").fadeOut(1000); }, 4000)
			setTimeout (function() { 
			$("#news8").fadeOut(1000); }, 4000)
			nowewydarzenieclickF();
			noweplotkiclick();
			brakwyboruF();
	}
	
		//bunt niewolników
	else if(anomaliaznacznik == "buntniewolnik" && wydrzenieodklikane == 0 )
	{
		
		hope = hope + 3;
		riots = riots +3;
		populacjatorsyanshow = populacjatorsyanshow + populacjaniewolnikow;
		populacjaniewolnikow = 0;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: nadzieja + 3, wk**rwienie + 3, niewolnicy stają się Torsjanami";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: nadzieja + 3, wk**rwienie + 3, niewolnicy stają się Torsjanami";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		
		document.getElementById("ogolnailoscmieszkancowD").innerHTML = ogolpopulacji; 
		document.getElementById("t4").innerHTML = populacjaniewolnikow; 
		document.getElementById("t3").innerHTML = populacjatorsyanshow; 
		brakwyboruF();
	}
		//bunt religijny
	else if(anomaliaznacznik == "buntnatlereligij" && wydrzenieodklikane == 0 )
	{
		
		riots = riots + 5;
		hope = hope - 3;
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: Wk**rwienie +5, Nadzieja -3";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: Wk**rwienie +5, Nadzieja -3";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
	//Podżegacze żółtego ptaka
	else if(anomaliaznacznik == "podzegaczezoltegopt" && wydrzenieodklikane == 0 )
	{
		hope = hope - 1;
		riots = riots + 2;
		wydarzeniahandelzplemami = 0.2;
		wydarzeniahandelzmaurykami = 0.2; 
		wydarzeniahandelznordyskami = 0.2;
		setTimeout(function(){wydarzeniahandelzplemami=0;},40000)
		setTimeout(function(){wydarzeniahandelzmaurykami=0;},40000)
		setTimeout(function(){wydarzeniahandelznordyskami=0;},40000)
		wartosckupcowPlemowieF();
		wartosckupcowMaurycyF();
		wartosckupcowNordyskowieF();
		wydrzenieodklikane = 1;
		//anomaliapogodowaflaga = 0;
		document.getElementById("news4").innerHTML = "Wybrana opcja trzecia: -1 Nadzieji, +2 Wk**rwienia, handel ze wszystkimi plemionami +0.2";
		$("#news4").css("color","green")
		setTimeout (function() { 
		$("#news4").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniakrotkie)
		$("#news4").fadeIn(500);
		document.getElementById("news4a").innerHTML = "Wybrana opcja trzecia: -1 Nadzieji, +2 Wk**rwienia, handel ze wszystkimi plemionami +0.2";
		$("#news4a").css("color","green")
		setTimeout (function() { 
		$("#news4a").fadeOut(1000); }, dlugoscwyswietlaniawydarzeniadlugie)
		$("#news4a").fadeIn(500);
		setTimeout (function() { 
		$("#news1").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news6").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news7").fadeOut(1000); }, 4000)
		setTimeout (function() { 
		$("#news8").fadeOut(1000); }, 4000)
		nowewydarzenieclickF();
		noweplotkiclick();
		brakwyboruF();
	}
	
};

function handelzdarzenie()
{
	anomaliaznacznik = "handelzdarzeni"
	zdarzeniewtrakcie = 0;
	wydrzenieodklikane = 0;
	
	document.getElementById("news1").innerHTML = "Ostatnimi czasy coraz więcej ciekawych zwierząt udaje się upolować Twoim łowczym, a i prosci fjermierzy wkońcu pozyskali solidne sadzonki, wyglada mi to na grube pieniądze, Wodzu!";
	document.getElementById("news6").innerHTML = "Zorganizujmy wystawę naszych towarów u nas w wiosce!: +30 do relacji ze wszystkimi plemionami, - 30złota, -20 zboża, +0.3 do handlu ze wszystkimi plemionami";
	document.getElementById("news7").innerHTML = "Wprowadzajmy nasze wyjątkowe towary powoli na rynek: +1.2 do handlu ze wszystkimi plemionami, nadzieja +1";
	document.getElementById("news8").innerHTML = "Sprzedaj wszystko i zapełnij skarbiec złotem: +70 złota, nadzieja + 2, wk**rwienie -2";
	
	$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		brakwyboruF();
}

function pozar()
{
	anomaliaznacznik = "poza"
	zdarzeniewtrakcie = 0;
	wydrzenieodklikane = 0;
	document.getElementById("news1").innerHTML = "Straszny pożar! Pali się!";
	document.getElementById("news6").innerHTML = "Każ wszystkim gasić pożar, a za poniesione straty zapłać ludzią żlotem: -30drewna, - 15 kamienia, - 5 zboża, - 50 złota";
	document.getElementById("news7").innerHTML = "A niech się pali, zbudujemy tą wioskę po mojemu!: w pożarze tracimy 5poziomów budynków, wk**rwienie + 3, nadzieja - 2";
	document.getElementById("news8").innerHTML = "Każ wszystkim gasić pożar!: - 100drewna, -100 kamienia, - 15zboża, + 0.5 wk**rwienie";
	$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		brakwyboruF();
}


function goscie()
{
	anomaliaznacznik = "gosci"
	zdarzeniewtrakcie = 0;
	wydrzenieodklikane = 0;
	document.getElementById("news1").innerHTML = "Przyjechali goście jak planujesz ich ugościć?";
	document.getElementById("news6").innerHTML = "Wydaj uczte na cześć gości: nadzieja +3, zboże -20, złoto -20, 0.6 zlota z handlu z losowym plemieniem";
	document.getElementById("news7").innerHTML = "Oprowadź po wiosce, bądź miły ale pokaż, że nie wiele masz: nadzieja +0.5, zboże +20, złoto+50, +0.2 zlota z handlu z losowym plemieniem ";
	document.getElementById("news8").innerHTML = "Wyrżnij gości i zabierz im cały dobytek: +120 złota, + 100 drewna, + 50 kamienia, +20 zboża, -0.5 do handlu ze wszystkimi plemionami, nadzieja -1 ";
	$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		brakwyboruF();
}

function susza()
{
		anomaliaznacznik = "susz"
		wydrzenieodklikane = 0;
		zdarzeniewtrakcie = 0;
		document.getElementById("news1").innerHTML = "Susza: Od kilku pór roku zaobserwowaliśmy braki deszczu, nawet zima jakaś taka dziwna - śniegu nie ma, deszczu nie ma... ciepło za to jest... Nic nie chce rosnąć na tej skale!!! Wybierz jak temu zaradzić";
		$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		document.getElementById("news6").innerHTML = "Wezwij szamanów z pobliskiego plemienia, może odczarują to przekleństwo: -50 złota, nadzieja oraz zboże w zależności od wyniku czarowania szamanów";
		document.getElementById("news7").innerHTML = "Kup żywność u innych plemion: -50 złota, nadzieja -1";
		document.getElementById("news8").innerHTML = "Nic nie rób, deszcz wkońcu musi spaść!: zboże -2 przez 30sec, drewno -1 przez 30sec,wk**rwienie+3,nadzieja-2";

	
	
	$("#news1").fadeIn(500);
	brakwyboruF();
}

function osuwisko()
{
	anomaliaznacznik = "osuwisk"
	zdarzeniewtrakcie = 0;
	wydrzenieodklikane = 0;
	document.getElementById("news1").innerHTML = "Straszna sprawa Wodzu! Kamieniłom sie osunął i przygniótł naszych kamieniarzy!";
	document.getElementById("news6").innerHTML = "Wyślij wszystkich chętnych do pomocy kamieniarzom: -50 złota, -80 drewna, - 120 kamienia, 20% rannych kamieniarzy, poziom kamieniołomu -2, nadzieja -1";
	document.getElementById("news7").innerHTML = "Wysłij do pomocy mała grupe drwali: -120 drewna, -30złota, 50% rannych kamieniarzy, poziom kamieniołomu -2, nadzieja -2";
	document.getElementById("news8").innerHTML = "No cóż...: Wszyscy kamieniarze nieżyją, poziom kamieniołomu -2, wk**rwienie +2, nadzieja -3";
	
	$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		brakwyboruF();
}

function napascpobliskichzbojow()
{
	anomaliaznacznik = "napascpobliskichzboj"
	zdarzeniewtrakcie = 0;
	wydrzenieodklikane = 0;
	document.getElementById("news1").innerHTML = "Alarm! Alarm!!! Jakies Brudasy z toprami u naszych bram! Wodzu! Co robić ?";
	document.getElementById("news6").innerHTML = "Zapłać zbójom za odstąpienie od ataku: -70 złota, -1 nadzieja, -1 wk**rwienie";
	document.getElementById("news7").innerHTML = "Zarygluj bramy, będziemy się bronić, jest ich tylko garstka!: Wynik starcia poznasz po kliknięciu tej opcji, wygra ten którego siła armii jest większa";
	document.getElementById("news8").innerHTML = "Obiecaj płacić haracz: -2 drewna, -2 kamienia, -0.05 złota, - 0.05 zboża ";
	$("#news1").fadeIn(500);
		$("#news6").fadeIn(500);
		$("#news7").fadeIn(500);
		$("#news8").fadeIn(500);
		brakwyboruF();
}

function napascwyznawcowzoltegoptaka()
{
	anomaliaznacznik = "napascwyznawcowzoltegopta"
	zdarzeniewtrakcie = 0;
	wydrzenieodklikane = 0;
	document.getElementById("news1").innerHTML = "Aaaa!!! Duch wodza Oleksandra się unosi przed lasem... Wodzu! to zbrojni wyznawców żółtego ptaka!!!";
	document.getElementById("news6").innerHTML = "Zza murów, zadeklaruj przejście na wiare żółtego ptaka: dostępne tylko jeżeli masz kościół i religia główną nie jest żółte ptactwo, jeżeli jesteś wyznawcom żółtego ptaka: + 2 nadzieji, - 2 wk**rwienia";
	document.getElementById("news7").innerHTML = "Zarygluj bramy, będziemy się bronić, Pomścimy wodza Oleksandra!: Wynik starcia ( oraz bonusy lub konsekwencje ) poznasz po kliknięciu tej opcji, wygra ten którego siła armii jest większa";
	document.getElementById("news8").innerHTML = "Oddaj na potępienie kilku Twoich poddanych: wk**rwienie + 5, nadzieja - 4, torsjanie - 2%";
	$("#news1").fadeIn(500);
	$("#news6").fadeIn(500);
	$("#news7").fadeIn(500);
	$("#news8").fadeIn(500);
	brakwyboruF();
}

function buntniewolnikow()
{
	anomaliaznacznik = "buntniewolnik"
	zdarzeniewtrakcie = 0;
	wydrzenieodklikane = 0;
	document.getElementById("news1").innerHTML = "Wodzu! Niewolnicy nie chcą dłużej pracować!";
	document.getElementById("news6").innerHTML = "Zrób wielkie zebranie w centrum wioski, obiecaj poprawe warunków bytowych. Zrób ucztę dla wszystkich: - 50 złota, napięcia niewolników -20";
	document.getElementById("news7").innerHTML = "Nie chcą pracować ?! Batem ich! do roboty Panowie!: walki na ulicy, wynik starcia poznasz po kliknięcu tej opcji";
	document.getElementById("news8").innerHTML = "Przekształć wszystkich niewolników w wolnych Torsjan: nadzieja + 3, wk**rwienie + 3, niewolnicy stają się Torsjanami";
	$("#news1").fadeIn(500);
	$("#news6").fadeIn(500);
	$("#news7").fadeIn(500);
	$("#news8").fadeIn(500);
	brakwyboruF();
}

function buntnatlereligijnym()
{
	anomaliaznacznik = "buntnatlereligij"
	zdarzeniewtrakcie = 0;
	wydrzenieodklikane = 0;
	document.getElementById("news1").innerHTML = "O wielki " + glownareligia + "... no, patrząc na ulice nie wszyscy tak myślą! Wodzu, co zrobimy z tym fantem?";
	document.getElementById("news6").innerHTML = "Spróbuj się ułożyć z przywódcami...: -50 złota";
	document.getElementById("news7").innerHTML = "Uzbrój naszych zwolenników, zaprowadź porządek siłą: -50drewno, -50kamienia, -20zboża, + wk**rwienie -0.5, nadzieja -0.5";
	document.getElementById("news8").innerHTML = "Nic nie rób... : wk**rwienie +5, nadzieja -3";
	$("#news1").fadeIn(500);
	$("#news6").fadeIn(500);
	$("#news7").fadeIn(500);
	$("#news8").fadeIn(500);
	brakwyboruF();
}
function podzegaczezoltegoptaka()
{
	anomaliaznacznik = "podzegaczezoltegopt"
	zdarzeniewtrakcie = 0;
	wydrzenieodklikane = 0;
	document.getElementById("news1").innerHTML = "Wodzu! Złapaliśmy... lu..dzi, niech no złapie oddech... podżegaczy żółtego ptakam panie. Szpiegowali i podburzali naszych ludzi... Co z nimi zrobić ?!";
	document.getElementById("news6").innerHTML = "Zarządzić publiczną egzekucję: nadzieja -0.5, wk**rwienie -4, złoto +20";
	document.getElementById("news7").innerHTML = "Wystawić Wanie do pojedynku, niech rozbije głowe największemu podżegaczowi: 80% że Wania wygra, wynik starcia po wybraniu tej opcji";
	document.getElementById("news8").innerHTML = "Wypuścić, niech idą do swoich i rozpowiadają, żeśmy łaskawi: -1 nadzieji, +2 wk**rwienia, handel ze wszystkimi plemionami +0.2";
	$("#news1").fadeIn(500);
	$("#news6").fadeIn(500);
	$("#news7").fadeIn(500);
	$("#news8").fadeIn(500);
	brakwyboruF();
}


function plotkioplemionachF()
{
	plotkioplemionach = Math.round((Math.random()*2)+ 1)
	if(plotkioplemionach==1)
	{
		plotkioplemionach2 = Math.round((Math.random()*6)+ 1)
		if(plotkioplemionach2==1)
		{
			wydarzenialosoweplemionyer = 0.7
			document.getElementById("plotka2").innerHTML = "Kupcy gadają, że plemie Yerisów dopadła dziwna przypadłość. Ich ciała porastają czarne kropki, które rosną... ludzie się pocą, kropki a raczej już bulwy, wybuchają i zabierają ze sobą ducha chorego. Choroba dziesiątkuje ich plemie...";
			silywojskplemion();
			noweploteczki = 1;
			noweplotki();
		}
		else if(plotkioplemionach2==2)
		{
			wydarzenialosoweplemionyer = 1.2
			document.getElementById("plotka2").innerHTML = "Wieść niesie, że do plemienia Yerisów dołączyli ich bracia z dalekich krain zza gór... Jest ich teraz dużo więcej...";
			silywojskplemion();
			noweploteczki = 1;
			noweplotki();
		}
		else if(plotkioplemionach2==3)
		{
			wydarzenialosoweplemionops = 0.7
			document.getElementById("plotka2").innerHTML = "Kupcy gadają, że plemie Opsydian ma dziwny problem... Powrzechna stała się chorobą mężczyzn... Charakteryzuje się swędzeniem...yyy... no własnie... Ich plemię staję się mniej liczne i słabsze...";
			silywojskplemion();
			noweploteczki = 1;
			noweplotki();
		}
		else if(plotkioplemionach2==4)
		{
			wydarzenialosoweplemionops = 1.2
			document.getElementById("plotka2").innerHTML = "Szamani Opsydian, wynaleźli przedziwną miksturę... Ludzie stają się poniej silniejsi... i bardziej nieobliczalni - strzeżmy się ich wodzu!";
			silywojskplemion();
			noweploteczki = 1;
			noweplotki();
		}
		else if(plotkioplemionach2==5)
		{
			wydarzenialosoweplemionmer = 0.7
			document.getElementById("plotka2").innerHTML = "Kupcy gadają, że plemie Yerisów dopadła dziwna przypadłość. Ich ciała pooastają czarne kropki, które rosną... ludzie się pocą, kropki a raczej już bulwy, wybuchają i zabierają ze sobą ducha chorego. Choroba dziesiątkuje ich plemie...";
			silywojskplemion();
			noweploteczki = 1;
			noweplotki();
		}
		else if(plotkioplemionach2==6)
		{
			wydarzenialosoweplemionmer = 1.2
			document.getElementById("plotka2").innerHTML = "Kupcy gadają, że plemie Yerisów dopadła dziwna przypadłość. Ich ciała pooastają czarne kropki, które rosną... ludzie się pocą, kropki a raczej już bulwy, wybuchają i zabierają ze sobą ducha chorego. Choroba dziesiątkuje ich plemie...";
			silywojskplemion();
			noweploteczki = 1;
			noweplotki();
		}
	}
	setTimeout("plotkioplemionachF()",60000)
}

function fakenewsF()
{
		var fakenews = Math.round((Math.random()*8)+ 1)
		if(fakenews == 1)
		{
			document.getElementById("plotka3").innerHTML = "Znak na niebie!!! Wielki kamień z płonącym ogonem! jestśmy zgubieni!";
			noweploteczki = 1;
			noweplotki();
		}
		else if(fakenews == 8)
		{
			document.getElementById("plotka3").innerHTML = "Tej cygance, co mieszka pod lasem... Przyśnił się Radogoszcz w czerwonym surducie...";
			noweploteczki = 1;
			noweplotki();
		}
		else if(fakenews == 2)
		{
			document.getElementById("plotka3").innerHTML = "Tego lata, mają być tanie ryby... Sam wódz tak mówił!";
			noweploteczki = 1;
			noweplotki();
		}
		else if(fakenews == 3)
		{
			document.getElementById("plotka3").innerHTML = "Sąsiednia wioska potrzebuje pomocy... Czy wódz odda nasze zapasy?";
			noweploteczki = 1;
			noweplotki();
		}
		else if(fakenews == 4)
		{
			document.getElementById("plotka3").innerHTML = "Ponoć wódz mówił, że z tego lasu obok palisady... już nie będziemy ścinać drzew! Będziemy chodzić do kolejnego lasu pół dnia! Może wybierzemy nowego wodza?!";
			noweploteczki = 1;
			noweplotki();
		}
		else if(fakenews == 5)
		{
			document.getElementById("plotka3").innerHTML = "Nic mi się nie chcę...";
			noweploteczki = 1;
			noweplotki();
		}
		else if(fakenews == 6)
		{
			document.getElementById("plotka3").innerHTML = "A może by tak... zbudować pomnik ? Pomnik kogoś ważnego dla naszej społeczności...?";
			noweploteczki = 1;
			noweplotki();
		}
		else if(fakenews == 7)
		{
			document.getElementById("plotka3").innerHTML = "A ten kościół u Plemów, taki ładny... wielki...";
			noweploteczki = 1;
			noweplotki();
		}
	setTimeout("fakenewsF()",40000)
}

</script>

</head>
<body onload="odswiezanie();">
<script>

</script>

<div id="container">
<div id="logo">
 <h1>Uratuj Torsjan przed zagładą! "Its too late" - żółty ptak</h1> 
 <div id="logo2">
<div class = "button2" title="pora roku" id="poraroku"></div>
</div>
 </div>
<div class="nav">
			<ol>
				<li><a id="link0" href="#">Strona główna</a></li>
				<li><a id="link1" href="#">Budowanie</a>
					<ul>
						<li><a id="link1a" href="#">Osada</a></li>
						<li><a id="link2" href="#">Wysoka Osada</a></li>
						<li><a id="link3" href="#">Las</a></li>
						<li><a id="link4" href="#">Kamieniołomy</a></li>
						<li><a id="link5" href="#">Farmy</a></li>
					</ul>
				</li>
				<li><a id="link10" href="#">Wojskowość</a>
					<ul>
						<li><a id="link10a" href="#">Koszary</a></li>
						<li><a id="link11" href="#">Misje Wojskowe</a></li>
						<li><a id="link12" href="#">Pole Bitwy</a></li>
					</ul>
				</li>
				<li><a id="link16a" href="#">Dyplomacja</a>
					<ul>
						<li><a id="link16" href="#">Mapa</a></li>
						<li><a id="link15" href="#">Misje Dyplomatyczne</a></li>
						<li><a id="link14" href="#">Szpiegostwo</a></li>
					</ul>
				</li>
				<li><a id="link7a" href="#">Mechaniki</a>
				<ul>
						<li><a id="link13" href="#">Niewolnicy</a></li>
						<li><a id="link7" href="#">Targ</a></li>
						<li><a id="link8" href="#">Wiara</a></li>
						<li><a id="link6" href="#">Nauka</a></li>
						<li><a id="link9" href="#">Oberża</a></li>
					</ul>
				</li>
				<li><a>Linki</a>
					<ul>
						<li><a target="_blank" rel="noopener noreferrer" href = "instrukcja.php">Instrukcja</a></li>
						<li><a target="_blank" rel="noopener noreferrer" href = "lista_budynkow.php">Lista Budynków</a></li>
						<li><a target="_blank" rel="noopener noreferrer" href = "index.php">Newsy</a></li>
					</ul>
				</li>
				<li><?php
				echo "<a href='logout.php'>Wyloguj sie</a>";
				?>
				</li>
				<li><a id="link99" href="#" onclick="nowewydarzenieclickF()">Wydarzenia</a>
				</li>
				</li>
				<li><a id="link98" href="#" onclick="noweplotkiclick()">Plotki</a>  
				</li>
			</ol>
		
		</div>
<div id ="lewa2">
</div>
 <div id="content">
<table>
<tr>
<td style="text-align: center"><div id ="Osada"></div></td>
<td>
<table>

<tr><td style="text-align: left"><img class = "litera tilelink" title="Wybuduj Zamek!" src="buildings/buildings/zamekM.jpg" alt=" " onclick="sprawdzzamek()"/></td>
<td style="text-align: left">Zamek | <span id ="zameklvls"></span> / 1</br><span style="font-size: 14px">koszt budowy: Drewno: 100 | Kamien: 500 | Bezrobotni: 50</br></span>
<span style="font-size: 14px; color: silver"> -0.05 złota / sec | + 0.05 nadzieji / 3sec | +1 kupiec | Zwycięstwo | Możesz wybudować tylko jeden budynek tego typu</span></td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="budzamS"></div></font></td>
</tr>

<tr><td style="text-align: left"><img class = "litera tilelink" title="Wybuduj Pomnik Bohatera!" src="buildings/buildings/pomnik_bohateraM.jpg" alt=" " onclick="sprawdzpomnik()"/></td>
<td style="text-align: left">Pomnik Bohatera | <span id ="pomnik_bohateralvls"></span> / 1<br/><span style="font-size: 14px">Wymagane: Drewno: 1000 | Kamien: 1000 | Bezrobotni: 70</br></span>
<span style="font-size: 14px; color: silver"> +0.05 wk**wienia / 3sec | +1 surowce / sec | Zwycięstwo | Możesz wybudować tylko jeden budynek tego typu  </span></td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="budpomS"></div></font></td>
</tr>

<tr><td  style="text-align: left"><img class = "litera tilelink" title="Wybuduj Chałupe!" src="buildings/buildings/domM.jpg" alt=" " onclick="sprawdzdom()"/></td>
<td style="text-align: left">Chałupa | <span id ="iloscdomows"></span> <br/><span style="font-size: 14px">koszt budowy: Drewno: <span id = "kosztbudowyiloscdomowdrewnoD"></span> | Kamien: <span id = "kosztbudowyiloscdomowkamienD"></span>  | Bezrobotni: 10</br></span>
<span style="font-size: 14px; color: silver"> +4 Torsjan | +15 MaxTorsjan </span>
</td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="buddomS"></div></font></td>
</tr>

<tr><td  style="text-align: left"><img class = "litera tilelink" title="Wybuduj Oberze!" src="buildings/buildings/oberzaM.jpg" alt=" " onclick="sprawdzoberza()"/></td>
<td style="text-align: left">Oberża | <span id ="oberzalvls"></span> / 1<br/><span style="font-size: 14px">koszt budowy: Drewno: 200 | Kamien: 100 | Bezrobotni: 7</br></span>
<span style="font-size: 14px; color: silver"> +10 Nadzieji | +0.01 W**wienia / 3sec | Możesz wybudować tylko jeden budynek tego typu</span>
</td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="budobeS"></div></font></td>
</tr>

<tr><td  style="text-align: left"><img class = "litera tilelink" title="Wybuduj Targowisko!" src="buildings/buildings/targowiskoM.jpg" alt=" " onclick="sprawdztargowisko()"/></td>
<td style="text-align: left">Targowisko | <span id ="targowiskolvls"></span> / 1<br/><span style="font-size: 14px">koszt budowy: Drewno: 200 | Kamien: 200 | Bezrobotni: 10</br></span>
<span style="font-size: 14px; color: silver"> +3 kupców | + Wymiana Towarów | Możesz wybudować tylko jeden budynek tego typu</span>
</td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="budtarS"></div></font></td>
</tr>

</table>
</td>
</tr>
</table>

 
 
 <table>
 <tr><td style="text-align: center"><div id ="WysokaOsada"></div></td>
 <td>
 <table>
 <tr><td style="text-align: left"><img class = "litera tilelink" title="Wybuduj Magazyn!"  src="buildings/buildings/magazynM.jpg"onclick="sprawdzmagazyn()"/></td>
<td style="text-align: left">Magazyn | <span id ="magazynlvls"></span><br/><span style="font-size: 14px">koszt budowy: Drewno: <span id = "kosztbudowymagazyndrewnoD"></span> | Kamien: <span id = "kosztbudowymagazynkamienD"></span> | Bezrobotni: 10</br></span>
<span style="font-size: 14px; color: silver"> +50 MaxZapasy</span>
</td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="budmagS"></div></font></td>
</tr>
 
 <tr>
<td  style="text-align: left"><img class = "litera tilelink" title="Wybuduj Łaźnie!" src="buildings/buildings/laznieM.jpg" alt=" " onclick="sprawdzlaznie()"/></td>
<td style="text-align: left">Łaźnie | <span id ="laznielvls"></span> / 1<br/><span style="font-size: 14px">koszt budowy: Drewno: 350 | Kamien: 400 | Bezrobotni: 30</br></span>
<span style="font-size: 14px; color: silver"> +0.07 Nadzieji/ 3sec | -0.01 W**wienia | Możesz wybudować tylko jeden budynek tego typu</span>
</td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="budlazS"></div></font></td>
</tr>
 
 <tr>
<td  style="text-align: left"><img class = "litera tilelink" title="Wybuduj Kościół!" src="buildings/buildings/kosciolM.jpg" alt=" " onclick="sprawdzkosciol()"/>
</td>
<td style="text-align: left">Kościół | <span id ="kosciollvls"></span> / 1<br/><span style="font-size: 14px">koszt budowy: Drewno: 150 | Kamien: 500 | Bezrobotni: 15 | Torsjanie: 100</br></span>
<span style="font-size: 14px; color: silver"> +0.03 Nadzieji/ 3sec | + Krucjaty | Możesz wybudować tylko jeden budynek tego typu</span>
</td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="budkosS"></div></font></td>
</tr>

<tr>
<td  style="text-align: left"><img class = "litera tilelink" title="Wybuduj Kanalizacje!" src="buildings/buildings/kanalizacjaM.jpg" alt=" " onclick="sprawdzkanalizacje()"/></td>
<td style="text-align: left">Kanalizacja | <span id ="kanalizacjelvls"></span> / 1<br/><span style="font-size: 14px">koszt budowy: Drewno: 200 | Kamień: 400 | Bezrobotni: 10</br></span>
<span style="font-size: 14px; color: silver"> +2 Pojemność Domu | Możesz wybudować tylko jeden budynek tego typu</span>
</td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="budkanS"></div></font></td>
</tr>

<tr>
<td  style="text-align: left"><img class = "litera tilelink" title="Wybuduj Pałac!" src="buildings/buildings/palacM.jpg" alt=" " onclick="sprawdzpalac()"/></td>
<td style="text-align: left">Pałac | <span id ="palaclvls"></span> / 1 <br/><span style="font-size: 14px">koszt budowy: Drewno: 600 | Kamień: 600 | Bezrobotni: 40</br></span>
<span style="font-size: 14px; color: silver"> +0.1 Nadzieji / 3sec | +1 kupiec | -0.05 złota/3sec | Możesz wybudować tylko jeden budynek tego typu</span>
</td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="budpalS"></div></font></td>
</tr>

<tr><td style="text-align: left"><img class = "litera tilelink" title="Wybuduj Zbrojownię!" src="buildings/buildings/armoryM.jpg" alt=" " onclick="sprawdzzbrojownia()"/></td>
<td style="text-align: left">Zbrojownia | <span id ="zbrojownialvls"></span> / 1</br><span style="font-size: 14px">koszt budowy: Drewno: 300 | Kamien: 200 | Bezrobotni: 15</br></span>
<span style="font-size: 14px; color: silver"> Możesz wybudować tylko jeden budynek tego typu. Pozwala na zbudowanie koszar i dodaje 1pkt nadzieji</span></td>
<td><font color="red"><div style="font-size: 14px;text-align: left" id ="budzbroS"></div></font></td>
</tr>

</tr>
 
 </table>
 
 </td>
 </tr>
 </table>
 
 <table>
 <tr><td style="text-align: center"><div id ="Las"></div></td>
 <td>
 <table>
 <tr>
  <font color="red"><div style="font-size: 14px;text-align: left" id="znichaS"></div></font>
  <font color="green"><div style="font-size: 14px;text-align: left" id ="buddrwS"></div></font>
 <td style="text-align: left"><img class = "destroy tilelink" title="Zburz Chate drwala!" src="buildings/buildings/chata_drwalaMburzenie.jpg" alt=" " onclick="zniszczdrwala()"/></td>
<td style="text-align: left"><img class = "litera tilelink" title="Wybuduj Chate drwala!" src="buildings/buildings/chata_drwalaM.jpg" alt=" " onclick="sprawdzdrwala()"/></td>
<td style="text-align: left">Chata drwala | <span id ="chata_drwalalvls"></span> <br/><span style="font-size: 14px">koszt budowy: Drewno: <span id = "kosztbudowychata_drwaladrewnoD"></span> 
| Kamień: <span id = "kosztbudowychata_drwalakamienD"></span> | Bezrobotni: 5</span>
<p style="font-size: 14px; color: silver"> +1 Drewno / 1sec<p/></td>

</tr>
<tr>
<td style="text-align: left"><input type="number" id="pole1" /></td>
<td style="text-align: center"><input type="submit" value = "zwolnij" onclick="zwolnijdrwali()"/></td>
<td style="text-align: left"><span style="font-size: 14px; color: silver">Zwalnianie ludzi generuje wk**rwienie</span></td>
</tr>
 <tr>
<td></td>
<td style="text-align: left"><div class = "tech" title="Siekiery!" id = "siekera" onclick="sprawdzsiekera()"/></td>
<td style="text-align: left"><span id = "siekerainfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Drewno: 250 | Złoto: 22 | Nauka: 15</span>
<p style="font-size: 14px; color: silver"> +0.1 Drewna za każdy wybudowany Chatę drwala </p></td>

</tr>

 <tr>
<td></td>
<td style="text-align: left"><div class = "tech" title="Piły!" id = "pila" onclick="sprawdzpila()"/></td>
<td style="text-align: left"><span id = "pilainfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Drewno: 350 | Złoto: 25 | Nauka: 25</span>
<p style="font-size: 14px; color: silver"> +0.1 Drewna za każdą wybudowaną Chatę drwala </p></td>

</tr>

 </table>
 
 </td>
 </tr>
 </table>
 
 
  <table>
 <tr><td style="text-align: center"><div id ="Kamieniolomy"></div></td>
 <td>
 <table>
 <tr>
<font color="red"><div style="font-size: 14px;text-align: left" id="znikomS"></div></font>
<font color="green"><div style="font-size: 14px;text-align: left"" id ="budkamS"></div></font>
 <td style="text-align: left"><img class = "destroy tilelink" title="Zburz Kamieniolom!" src="buildings/buildings/kamieniolomMburzenie.jpg" alt=" " onclick="zniszczkamienilom()"/></td>
<td style="text-align: left"><img class = "litera tilelink" title="Wybuduj Kamieniolom!" src="buildings/buildings/kamieniolomM.jpg" alt=" " onclick="sprawdzkamieniolom()"/></td>
<td style="text-align: left">Kamieniołom | <span id ="kamieniolomlvls"></span><br/><span style="font-size: 14px">koszt budowy: Drewno: <span id = "kosztbudowykamieniolomdrewnoD"></span> | Kamień: <span id = "kosztbudowykamieniolomkamienD"></span> | Bezrobotni: 5</span>
<p style="font-size: 14px; color: silver"> +1 Kamień / 2sec<p/></td>

</tr>
<tr>
<td style="text-align: left"><input type="number" id="pole2" /></td>
<td style="text-align: center"><input type="submit" value = "zwolnij" onclick="zwolnijkamieniarzy()"/></td>
<td style="text-align: left"><span style="font-size: 14px; color: silver">Zwalnianie ludzi generuje wk**rwienie</span></td>
</tr>

 <tr>
<td></td>
<td style="text-align: left"><div class = "tech" title="Kilofy!" id = "kilof" onclick="sprawdzkilof()"/></td>
<td style="text-align: left"><span id = "kilofinfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Drewno: 50 | Kamienia: 75 | Złoto: 15 | Nauka: 5</span>
<p style="font-size: 14px; color: silver"> +0.1 Kamienia za każdy wybudowany kamieniołom </p></td>

</tr>

 <tr>
<td></td>
<td style="text-align: left"><div class = "tech" title="Dłuta!" id = "dluto" onclick="sprawdzdluto()"/></td>
<td style="text-align: left"><span id = "dlutoinfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Drewno: 75 | Kamienia: 125 | Złoto: 20 | Nauka: 10</span>
<p style="font-size: 14px; color: silver"> +0.1 Kamienia za każdy wybudowany kamieniołom </p></td>

</tr>
 </table>
 
 </td>
 </tr>
 </table>
 
 
  <table>
 <tr><td style="text-align: center"><div id ="Farmy"></div></td>
 <td>
 <table>
 <tr>
 <font color="green"><div style="font-size: 14px;text-align: left" id ="budfarS"></div></font>
 <font color="red"><div style="font-size: 14px;text-align: left" id="znifraS"></div></font>
 <font color="orange"><div style="font-size: 14px;text-align: left" id ="budmotS"></div></font>
<td style="text-align: left"><img class = "destroy tilelink" title="Zburz Farmę!" src="buildings/buildings/farmaMburzenie.jpg" alt=" " onclick="zniszczfarma()"/></td>
<td style="text-align: left"><img class = "litera tilelink" title="Wybuduj Farmę!" src="buildings/buildings/farmaM.jpg" alt=" " onclick="sprawdzfarma()"/></td>
<td style="text-align: left">Farma | <span id ="farmalvls"></span><br/><span style="font-size: 14px">koszt budowy: Drewno: <span id = "kosztbudowyfarmadrewnoD"></span> | Kamień: <span id = "kosztbudowyfarmakamienD"></span> | Bezrobotni: 5</span>
<p style="font-size: 14px; color: silver"> +1 Zboże / 3sec</p></td>
</tr>
<tr>
<td style="text-align: left"><input type="number" id="pole" /></td>
<td style="text-align: center"><input type="submit" value = "zwolnij" onclick="zwolnijfjermerow()"/></td>
<td style="text-align: left"><span style="font-size: 14px; color: silver">Zwalnianie ludzi generuje wk**rwienie</span></td>
</tr>

 <tr>
<td></td>
<td style="text-align: left"><div class = "tech" title="Motyki!" id = "motyka" onclick="sprawdzmotyka()"/></td>
<td style="text-align: left"><span id = "motykainfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Drewno: 200 | Złoto: 50 | Nauka: 35</span>
<p style="font-size: 14px; color: silver"> +0.1 Zboża za każdą wybudowaną farmę </p></td>

</tr>
 <tr>
<td></td>
<td style="text-align: left"><div class = "tech" title="Motyki!" id = "kosa" onclick="sprawdzkosa()"/></td>
<td style="text-align: left"><span id = "kosainfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Drewno: 400 | Złoto: 75 | Nauka: 55</span>
<p style="font-size: 14px; color: silver"> +0.1 Zboża za każdą wybudowaną farmę </p></td>

</tr>

 </table>
 
 </td>
 </tr>
 </table>
 
   <table>
 <tr><td style="text-align: center"><div id ="szkola"></div></td>
 <td>
 <table>
 <tr>
 <font color="Green"><div style="font-size: 14px;text-align: left" id ="budszkoS"></div></font>
 <font color="yellow"><div style="font-size: 14px;text-align: left" id ="spruczen"></div></font>
<font color="yellow"><div style="font-size: 14px;text-align: left" id ="spruczen2"></div></font>
<font color="green"><div style="font-size: 14px;text-align: left" id ="budfutra"></div></font>

<td style="text-align: left"><img class = "litera tilelink" title="Wybuduj Szkołę!" src="buildings/buildings/szkolaM.jpg" alt=" " onclick="sprawdzszkola()"/></td>
<td style="text-align: left">Szkoła | <span id ="szkolalvls"></span> / 5 <br/><span style="font-size: 14px">koszt budowy: Drewno: <span id = "kosztbudowyszkoladrewnoD"></span> | Kamień: <span id = "kosztbudowyszkolakamienD"></span> 
| Złoto: <span id = "kosztbudowyszkolazlotoD"></span> | Bezrobotni: 10</span>
<p style="font-size: 14px; color: silver">Po wybudowaniu Szkoły można szkolić uczonych a z uzyskanej nauki odkrywac technologie - kafelki podświetlane na niebiesko</p></td>
</tr>
<tr>
<td><input type="submit" value="Wyszkól Uczonych" onclick="sprawdzczeni()"/></td>
<td style= "text-align: left; font-size: 14px">Wyszkól 5 uczonych z grupy bezrobotnych za 25 złota
</span>
<p style="font-size: 14px; color: silver">1 uczony = 0.04 nauki / 5sec</br>1 uczony = -0.02 złota / 5sec</p></td>
</td>
</tr>
 <tr>

<td style="text-align: left"><div class = "tech" title="Ciepłe ubrania!" id = "futra" onclick="sprawdzfutra()"/></td>
<td style="text-align: left"><span id = "futrainfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Drewno: 250 | Złoto: 75 | Nauka: 75</span>
<p style="font-size: 14px; color: silver"> Zmiejsza o 20% negatywny wpływ zimy na zboże </p></td>

</tr>
 <tr>

<td style="text-align: left"><div class = "tech" title="Ocieplenie domów!" id = "ociepleniedomow" onclick="sprawdzociepleniedomow()"/></td>
<td style="text-align: left"><span id = "ociepleniedomowinfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Drewno: 350 | Złoto: 100 | Nauka: 95</span>
<p style="font-size: 14px; color: silver"> Zmiejsza o 20% negatywny wpływ zimy na zboże </p></td>

</tr>


 </table>
 
 
 </td>
 </tr>
 
  <tr><td style="text-align: center"><div id ="targ"></div></td>
 <td>
 <table>
 
<tr><div style="text-align: center" id = "targdostep"></div>
<div style="text-align: center; color: red ;font-size: 14px" id ="targinfo1"></div>
<div style ="text-align: center;color: red ;font-size: 14px" id = "sprawdzhandelerror"></div></tr>
</br>
<tr>
<td style="text-align: left">
<label  for="surowce1"><b>Wymień: </b></label>
 <td style="text-align: left"><input type="number" id="wymianatowarow" /></td>
<td>
 <select id="surowce1">
   <option  value="zdrewno">drewno</option>
   <option value="zkamien">kamien</option>
   <option  value="zzboze">zboze</option>
   <option value="zzloto">zloto</option>
 </select> 
 </td>
 <td>
  <label for="surowce2"><b>Na: </b></label>
 <select id="surowce2">
   <option value="nadrewno">drewno</option>
   <option  value="nakamien">kamien</option>
   <option value="nazboze">zboze</option>
   <option  value="nazloto">zloto</option>
 </select> 
</td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymianatowarowF1Check()"/></td>
<td>Otrzymasz: </td>
<td id = "przelicznik1"></td>
</tr>
<tr>
<td style="text-align: left"><input type="submit" value = "Wymień" onclick="wymianatowarowF2Check()"/></td>
<td style="text-align: left"><a  target="_blank" rel="noopener noreferrer" href = "koszttowarow.php" style = "text-decoration: none; color: #FFF0F5; font-size: 18px">Sprawdź ceny towarów</a></td></tr>

</td>



<table>



<tr>
<td style="text-align: left"><img class = "destroy tilelink" title="Wycofaj kupca!" src="buildings/kupcym1b.jpg" alt=" " onclick="confijhandelMaurycy()"/></td>
<td style="text-align: left"><img class = "litera tilelink" title="Wyślij kupca na drugą stronę morza!" src="buildings/kupcym1.jpg" alt=" " onclick="sprawdzhandelMaurycy()"/></td>
<td><table style="text-align: left;font-size: 14px">
<tr><td style="text-align: left;font-size: 14px">Opłacalnośc handlu </br>z plemionami Mauryków: </td><td><span id = "wartosckupcowMaurycyD"></span>/ 5sec</td></tr>
<tr><td style="text-align: left;font-size: 14px">Wysłani kupcy w tym kierunku: </td><td><span id ="kupcyMaurycy1"></span> </td></tr>
<tr><td style="text-align: left;font-size: 14px">Wolni kupcy: </td><td><span id = "wolnikupcyD1"></span>/<span id = "wszyscykupcyD1"></span></td></tr>
</table></td>
<td style="text-align: left"><span id="merkiantylizm" class = "tech" title="Merkantylizm!" onclick="sprawdzmerkantylizm()"></span></td>
<td style="text-align: left"><span id = "merkiantylizminfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Złoto: 50 | Nauka: 75</span>
<p style="font-size: 14px; color: silver"> +1 Wolny kupiec </p></td>
</tr>

<tr>
<td style="text-align: left"><img class = "destroy tilelink" title="Wycofaj kupca!" src="buildings/kupcym2b.jpg" alt=" " onclick="confijhandelPlemowie()"/></td>
<td style="text-align: left"><img class = "litera tilelink" title="Wyślij kupca najkrótszą drogą przez pustynie!" src="buildings/kupcym2.jpg" alt=" " onclick="sprawdzhandelPlemowie()"/></td>
<td><table style="text-align: left;font-size: 14px">
<tr><td style="text-align: left;font-size: 14px">Opłacalnośc handlu </br>z plemionami Plemów: </td><td><span id = "wartosckupcowPlemowieD"></span>/ 5sec</td></tr>
<tr><td style="text-align: left;font-size: 14px">Wysłani kupcy w tym kierunku: </td><td><span id ="kupcyPlemowie1"></span> </td></tr>
<tr><td style="text-align: left;font-size: 14px">Wolni kupcy: </td><td><span id = "wolnikupcyD2"></span>/<span id = "wszyscykupcyD2"></span></td></tr>
</table></td>
<td style="text-align: left"><span id="protekcjonalizm" class = "tech" title="Merkantylizm!" onclick="sprawdzprotekcjonalizm()"></span></td>
<td style="text-align: left"><span id = "protekcjonalizminfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Złoto: 60 | Nauka: 85</span>
<p style="font-size: 14px; color: silver"> +1 Wolny kupiec </p></td>
</tr>

<tr>
<td style="text-align: left"><img class = "destroy tilelink" title="Wycofaj kupca!" src="buildings/kupcym3b.jpg" alt=" " onclick="confijhandelNordyskowie()"/></td>
<td style="text-align: left"><img class = "litera tilelink" title="Wyślij kupca na daleką północ!" src="buildings/kupcym3.jpg" alt=" " onclick="sprawdzhandelNordyskowie()"/></td>
<td><table style="text-align: left;font-size: 14px">

<tr><td style="text-align: left;font-size: 14px">Opłacalnośc handlu </br>z plemionami Nordyskimi: </td><td><span id = "wartosckupcowNordyskowieD"></span>/ 5sec</td></tr>
<tr><td style="text-align: left;font-size: 14px">Wysłani kupcy w tym kierunku: </td><td><span id ="kupcyNordyskowie1"></span> </td></tr>
<tr><td style="text-align: left;font-size: 14px">Wolni kupcy: </td><td><span id = "wolnikupcyD3"></span>/<span id = "wszyscykupcyD3"></span></td> </tr>
</table></td>
<td style="text-align: left"><span id="wolnyhandel" class = "tech" title="Merkantylizm!" onclick="sprawdzwolnyhandel()"></span></td>
<td style="text-align: left"><span id = "wolnyhandelinfo"></span><br/><span style="font-size: 14px">koszt odkrycia: Złoto: 75 | Nauka: 95</span>
<p style="font-size: 14px; color: silver"> +1 Wolny kupiec </p></td>
</tr>

 </table>
 </td>
 
 
 </tr>
 
 

 


	<tr>
	<td style="text-align: center"><div id ="wiara"></div></td>
 
	<td>
	<table>

<tr><div style="font-size: 18px;text-align: center" id = "wiaradostep"></tr>
<tr><div style="font-size: 18px;text-align: center"><b>Wybierz swoją główną wiarę klikając w jeden z poniższych kefelków</b></div></tr>
<tr><div style="font-size: 18px;text-align: center;color: red;" id = "errorReligia"></div></tr>
<tr><div style="font-size: 18px;text-align: center;color: yellow;" id = "bonusreligijny1"></div></tr>
<tr><div style="font-size: 18px;text-align: center;color: red;" id = "bonusreligijny2"></div></tr>
<tr><div style="font-size: 18px;text-align: center;color: #1E90FF;" id = "bonusreligijny3"></div></tr>

</br>
</br>
		

										
										
									
										
							<tr>			
							<table style="min-width: 100%;">
							<tr>
							<td style="text-align: center; min-width: 33%;"><img class = "buttonr2 tilelink" title="Wybierz Żółtoptactwo" src="religous/zoltoptactwo.jpg" alt=" " onclick="zoltoptactwoclick()"/></td>
							
							<td style="text-align: center; min-width: 33%;"><img class = "buttonr3 tilelink" title="Wybierz Radogoszcza" src="religous/radogoszcze.jpg" alt=" " onclick="radagoszczeclick()"/></td>
							
							<td style="text-align: center; min-width: 33%;"><img class = "buttonr1 tilelink" title="Wybierz Nemize" src="religous/nemizianie.jpg" alt=" " onclick="turupitianieclick()"/></td>
							
							</tr>
							<tr>
							<td style="text-align: center; min-width: 33%;"><span style="color: yellow;font-size:16px">Żółtoptactwo</span></td>
							
							<td style="text-align: center; min-width: 33%;"><span style="color: red;font-size:16px">Radogoszcze</span></td>
							
							<td style="text-align: center; min-width: 33%;"><span style="color: #1E90FF;font-size:16px">Nemizianie</span></td>
							
							</tr>
							<tr>
							<td style="text-align: center; min-width: 33%;" id = "zolteptakiD"></td>
							
							<td style="text-align: center; min-width: 33%;" id = "radagoszczeD"></td>
							
							<td style="text-align: center; min-width: 33%;" id = "turupitianieD"></td>
							</tr>
							
							
							<tr>
							<td style="text-align: center;"><input type="submit" class="favorite styledPtaki" value = "Czystka"  onclick="czystkaPtaki()"/></td>
							
							<td style="text-align: center; min-width: 33%;"><input type="submit" class="favorite styledRadogoszcze" value = "Czystka"  onclick="czystkaRadogoszcz()"/></td>
							
							<td style="text-align: center; min-width: 33%;"><input type="submit" class="favorite styledNemiz" value = "Czystka"  onclick="czystkaNemiz()"/></td>
							</tr>
							
							</table>
							
							</br>
</br>
						<table>
						<tr>
					<td><span style="font-size:16px"> Twoja główna religia   | </span></td> <td style="font-size:16px" id = "glownareligiaD"></td>
						</tr>
						
						<tr>
					<td><span style="font-size:16px"> Wszyscy wierni   | </span></td> <td style="font-size:16px"  id = "wszyscywierniD"></td>	
						</tr>

				<tr>
				<td><span style="font-size:16px"> Bez wiary   | </span></td>
							<td style="font-size:16px" id = "bezwiaryD"></td>
				</tr>
					<tr>
				<td><span style="font-size:16px"> Niepokoje Religijne   | </span></td>
							<td style="font-size:16px" id = "niepokojreligijnyD"></td ><td style="font-size:16px">/100</td>
				</tr>
				
				</table>
				</tr>
		

	</table>
	</td>
	</tr>

 </table>


 
 
 

 <tr>
  <table>
 <tr><td style="text-align: center"><div id ="oberza"></div></td>
 
 <td>
 <table>
 
<tr><div style="text-align: right" id = "oberzadostep"></tr>
</br>
<tr style="font-size:18px;color:red" id = "oberzainfo"></tr>
<tr style="font-size:18px;color:red" id = "oberzainfo2"></tr>
 <tr>

 <table>
<tr>
<td style="text-align: left;font-size: 20px; color: yellow">Gra w Kości</td>
<td style="text-align: center;font-size: 20px; color: #FFF0F5">Spróbuj szczęscia i zaryzykuj swoje złoto! Wpisz kwotę o którą zagrasz, jak rzucisz więcej niż Twój przeciwnik, wygrasz !</td>
</tr>
</table>
<table>
<tr>
<td style="text-align: left;font-size: 14px; color: red">Ile stawiasz?!</td>
<td style="text-align: left"><input type="number" id="grawkosciP" /></td>
<td style="text-align: left"><input type="submit" value = "Rzuć koścmi" onclick="grawkoscicheckF()"/></td>
<td><div id = "grawkosciobrazek"></div></td>
</tr>
<tr>
<td style="text-align: left;font-size: 14px;">Wynik rywala: <span id ="przeciwnikawynikkoscia"></span></td>
<td></td>
<td style="text-align: left;font-size: 14px;">Twój wynik: <span id ="twojwynikkoscia"></span></td>
<td></td>
<td style="text-align: left;font-size: 14px;">Ilość gier: <span id ="iloscgierwkoscid"></span></td>
</tr>
<tr>
<td style="text-align: left;font-size: 14px;">Ilość przegranych: <span id ="iloscprzegranychwkoscid"></span></td>
<td></td>
<td style="text-align: left;font-size: 14px;">Ilość wygranych: <span id ="iloscwygranychwkoscid"></span></td>
<td></td>
<td style="text-align: left;font-size: 14px;">Ilość remisów: <span id ="iloscremisowwkoscid"></span></td>
</tr>
<tr>
<td style="text-align: left;font-size: 14px;">Ratio gier w kości: <span id ="ratiogierwkoscid"></span></td> 
</tr>
</table>
<table>
<tr>
<td style="text-align: left;font-size: 20px; color: yellow">Gra w Trzy karty</td>
<td style="text-align: center;font-size: 20px; color: #FFF0F5">Spróbuj szczęscia! Odgadnij gdzie jest Twoja karta a wygrasz złoto!</td>
</tr>
</table>
<table>
<tr>
<td style="text-align: right;font-size: 14px; color: red">Ile stawiasz?!</td>
<td style="text-align: left"><input type="number" id="obstawianiekarty" /></td>
<td style="text-align: left"><input type="submit" value = "Odkryj Karty" onclick="grawtrzykartyF()"/></td>
</td>
</tr>
<tr>

<td>
	<div class = "board">
				<div class="card" id="c0"></div>
				<div class="card" id="c1"></div>
				<div class="card" id="c2"></div>

</div>
</td>
<td style="vertical-align:top;text-align:left;font-size:14px;color:silver;max-width:10%">
<span id ="grawkartyt1"></span></br>
<span id ="grawkartyt2"></span></br>
<span id ="grawkartyt3"></span></br>
<span id ="grawkartyt6"></span></br> 
<span id ="grawkartyt9"></span></td>
<td style="vertical-align:top;text-align:left"><span id ="grawkartyt5"></span></td>
</tr>
<tr>
	


<td style="text-align:left;font-size:14px;">Wygrane: <span style="text-align:left;font-size:14px;" id = "wygranewkartyD"></span></br>
Po drugiej próbie: <span style="text-align:left;font-size:14px;" id = "remisywkartyD"> </span></br>
Przegrane: <span style="text-align:left;font-size:14px;" id = "przegranewkartyD"></span>
</td>
<td style="text-align:left;font-size:14px;">
Ilość gier: <span style="text-align:left;font-size:14px;" id = "iloscgierwkartyD"></span></br>
Ratio gier w karty: <span style="text-align:left;font-size:14px;" id = "ratiogierwkartyD"></span></br>
Ratio gier w oberży: <span style="text-align:left;font-size:14px;" id = "ratiogierwoberzyD"></span>
</td>


</tr>
</table>
</tr>



 
 
</table>
</td>
</tr>


 </table>
  </tr>

 
 
 
 
 
 </td>
 </tr>
<table>
 <tr><td style="text-align: center"><div id ="koszary"></div></td>
 <td>
 <table>
 <tr>
 <font color="red"><div style="font-size: 14px;text-align: left" id ="budkoszS"></div></font>
<td style="text-align: left"><img class = "litera tilelink" title="Wybuduj Koszary!" src="buildings/buildings/koszaryM.jpg" alt=" " onclick="sprawdzkoszary()"/></td>
<td style="text-align: left">Koszary | <span id ="koszarylvls"></span> / 3 <br/><span style="font-size: 14px">koszt budowy: Drewno: <span id = "kosztbudowykoszarydrewnoD"></span> | Kamień: <span id = "kosztbudowykoszarykamienD"></span> 
| Złoto: <span id = "kosztbudowykoszaryzlotoD"></span>  | Bezrobotni: 10</span>
<p style="font-size: 14px; color: silver">Po wybudowaniu Koszar można szkolić wojów. Im wyższy poziom koszar tym lepszych wojów możesz wyszkolić. Budynek pozwala na przeprowadzenie misji wojskowych</p></td>
</tr>
<table width = 100% style= "font-size: 14px">
<td style="text-align: center;color:red" id = "armeeinfo"></td>

</table>
<table style= "font-size: 14px">
<tr>
<td>Typ</td><td style="text-align: center; min-width: 33%;">Tarczownicy</td><td style="text-align: center; min-width: 33%;">Miecznicy</td><td style="text-align: center; min-width: 33%;">Konni</td>
</tr>

<tr>
<td>Rekrutuj:</td>
<td style="min-width: 33%;"><div class = "buttonr4 tilelink" title="Rekrutuj Tarczownika"  id = "shieldmanD" onclick="tarczownikrekrutacja()"></div></td>
<td style="min-width: 33%;"><div class = "buttonr4 tilelink" title="Rekrutuj Miecznik" id = "footmanD" onclick="miecznikrekrutacja()"></div></td>
<td style="min-width: 33%;"><div class = "buttonr4 tilelink" title="Rekrutuj Konnego" id = "cavalryD" onclick="konnyrekrutacja()"></div></td>
</tr>

<tr>
<td>Koszt Rekrutacji:</td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;">złoto: 5 | zboże: 10 </td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;">złoto: 10 | zboże: 30 </td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;">złoto: 15 | zboże: 50 </td>
</tr>

<tr>
<td>Koszt Utrzymania i Siła:</td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;">złoto: 0.04 / 5sec | siła: 1 </td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;">złoto: 0.1 / 5sec | siła: 3 </td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;">złoto: 0.2 / 5sec | siła: 5 </td>

</tr>

<tr>
<td>Twoja Armia:</td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;"><b><div id = "tarczownicyD"></div></b></td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;"><b><div id = "miecznicyD"></div></b></td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;"><b><div id = "konniD"></div></b></td>
</tr>
<tr>
<td>Siła Twojej Armii:</td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;"><b><div id = "silaarmiiD"></div></b></td>
</tr>
<tr>
<td>Koszt utrzymania Armii:</td>
<td style="font-size: 14px; color: silver;text-align: center; min-width: 33%;"><b><div id = "kosztwojskD"></div></b></td>
</tr>


</table>
</td>
</tr>
</table>
 </table>
 
 
 <table>
 <tr><td style="text-align: center"><div id ="wyprawywojenne"></div></td>
 <td>
  <table width = 100% style= "font-size: 14px">
<td style="text-align: center;color:red" id = "armeeinfo0"></td>
<td style="text-align: center;color:red" id = "armeeinfo1a"></td>
</table>
 <table>

 <tr>
 
<td id="link12a" style="text-align: left"><div class = "tech" title="Wyślij wyprawe na Merków!" id = "wyprawyW" onclick="wyprawanamerkow()"></div></td>
<td style="text-align: left">Wyprawa Wojenna na Merków!<br/><span style="font-size: 14px">koszt wyprawy: Drewno: 200 | Złoto: 100 | Siła Wojów: nie mniej niż 10</span>
<p style="font-size: 14px; color: silver">Wyprawa wojenna na plemie Merków, jeżeli się powiedzie przyniesie umiarkowane zyski: złoto, drewno oraz Nadzieji. Jeżeli się nie uda to nadzieja spadnie, wk**rwienia wzrośnie. Merkowie to średnio silne plemię</p></td>
<td style="font-size: 14px;text-align: left">Jaką siłe Wojów wyślesz?</br></br><input type="number" id="zolnierzenaMerkow" /></td>
</tr>
 <tr>
<td id="link12b" style="text-align: left"><div class = "tech" title="Wyślij wyprawe na Opsydian!" id = "wyprawyWo" onclick="wyprawanaopsydian()"></div></td>
<td style="text-align: left">Wyprawa Wojenna na Opsydian!<br/><span style="font-size: 14px">koszt wyprawy: Drewno: 300 | Złoto: 150 | Siła Wojów: nie mniej niż 15</span>
<p style="font-size: 14px; color: silver">Wyprawa wojenna na plemie Opidian, jeżeli się powiedzie przyniesie duże zyski w postaci: złoto, zboża oraz Nadzieji. Jeżeli się nie uda to nadzieja spadnie, wk**rwienia wzrośnie. Opidianie to silne plemię</p></td>
<td style="font-size: 14px;text-align: left">Jaką siłe Wojów wyślesz?</br></br><input type="number" id="zolnierzenaOpsydian" /></td>
</tr>
 <tr>
<td id="link12c" style="text-align: left"><div class = "tech" title="Wyślij wyprawe na Yerisów!" id = "wyprawyWy" onclick="wyprawanayerisow()"/></td>
<td style="text-align: left">Wyprawa Wojenna na Yerisów!<br/><span style="font-size: 14px">koszt wyprawy: Drewno: 100 | Złoto: 50 | Siła Wojów: nie mniej niż 5</span>
<p style="font-size: 14px; color: silver">Wyprawa wojenna na plemie Yerisów, jeżeli się powiedzie przyniesie małe zyski w postaci: złoto, kamień oraz Nadzieji. Jeżeli się nie uda to nadzieja spadnie, wk**rwienia wzrośnie. Yerisi to słabe plemię</p></td>
<td style="font-size: 14px;text-align: left">Jaką siłe Wojów wyślesz?</br></br><input type="number" id="zolnierzenaYerisow" /></td>
</tr>
 <tr>
<td id="link12d" style="text-align: left"><div class = "tech" title="Wyślij Krucjatę!" id = "krucjata" onclick="wyprawanakrucjate()"/></td>
<td style="text-align: left">Krucjata!<br/><span style="font-size: 14px">koszt wyprawy: Drewno: 200 | Złoto: 300 | Siła Wojów: nie mniej niż 15</span>
<p style="font-size: 14px; color: silver">Jeżeli zwyciężymy, nasza nadzieja, zboże, złoto, drewno wzrośnie,a ilosc wyznawców głównej religii będzię wzrastać mocniej w najbliższym czasie! Jeżeli nie wygramy to: nadzieja spadnie, wk**rwienie wzrośnie, ilość wyznawców głównej religii spadnie.</p></td>
<td style="font-size: 14px;text-align: left">Jaką siłe Wojów wyślesz?</br></br><input type="number" id="zolnierzenaKrucjate" /></td>
</tr>


</td>
</tr>
</table>
 </table>
 
  <table>
 <tr><td style="text-align: center"><div id ="polebitwy"></div></td>
 <td style="vertical-align:top; min-width: 100%;">
 <table style=" min-width: 100%;">
 <tr>
<td style="vertical-align:top; text-align: center"> Dziennik Bitewny 
</br>
</br>
<tr style="text-align: left;color:green" id = "armeeinfo1"></tr>
<tr style="text-align: left;color:green" id = "armeeinfo1b"></tr>
<tr style="text-align: left;color:yellow" id = "armeeinfo4"></tr>
<tr style="text-align: left;color:orange" id = "dlugoscbitwy10secD"></tr>
<tr style="text-align: left;color:orange" id = "dlugoscbitwy10secDops"></tr>
<tr style="text-align: left;color:orange" id = "dlugoscbitwy9secD"></tr>
<tr style="text-align: left;color:orange" id = "dlugoscbitwy11secD"></tr>
<tr style="text-align: left;color:orange" id = "dlugoscbitwy13secD"></tr>
<tr style="text-align: left;color:orange" id = "dlugoscbitwy15secD"></tr>
<tr style="text-align: left;color:orange" id = "dlugoscbitwy17secD"></tr>
<tr style="text-align: left;color:orange" id = "armeeinfo2"></tr>
<tr style="text-align: left;color:yellow" id = "armeeinfo3"></tr>
<tr style="text-align: left;color:yellow" id = "armeeinfo3a"></tr>
<tr style="text-align: left;color:orange" id = "armeeinfo2a"></tr>



</td>
</tr>
 


</table>

</td>
</tr>
</table>



 
<table id = "niewolnicyL">
	<tr>
		<td><img src="slavemarket1.jpg" alt=" "/>
		</td>

		<td style= "vertical-align:top;min-width: 100%">
		<table style="min-width: 100%"><tr><td style="text-align: center">Niewolnicy</td></tr></table>
		</br>
		</br>
		<table style ="font-size: 18px;">
		
	
	<tr>
	<td><img class = "litera tilelink" title="Promuj Niewolników do Torsjan" src="slavespromotion.jpg" onclick="promocjaniewolnikow()" alt=" "/></td>
	<td style = "text-align:left;font-size: 12px;color: silver; max-width: 180px">za 20 złota możemy promować 10% Niewolników do statusu Torsjan, zwiększy to troche poziom wk**rwienia</td>
	<td>Ilość Torsjan</td>
	<td style = "text-align: left">:  <span id="t3"/></td>
	<td style = "text-align:left;font-size: 12px;color: red;"><span id = "promocjaniewolnikowD"></span></td>
	</tr>
	<tr>
	<td><img class = "litera tilelink" title="Egzekujca Niewolników" src="slaveexecution.jpg" onclick="egzekucjaniewolnikow()" alt=" "/></td>
	<td style = "text-align:left;font-size: 12px;color: silver; max-width: 180px">za 10 złota możemy doprowadzić do egzekucji Niewolników, zmniejszy to sume populacji oraz zwiększy poziom wk**rwienia</td>
	<td>Ilość Niewolników</td>
	<td style = "text-align: left">:  <span id="t4"/></td>
	<td style = "text-align:left;font-size: 12px;color: red;"><span id = "egzekucjaniewolnikowD"></span></td>
	
	</tr>
	<tr>
	<td><img class = "litera tilelink" title="Zmniejsz napięcia" src="tensiondown.jpg" onclick="rozladowanienapiecianiewolnikow()"alt=" "/></td>
	<td style = "text-align:left;font-size: 12px;color: silver; max-width: 180px">Za pomocą dialogu oraz próby asymilacji, zmniejszymy napięcia o 5pktów. Koszt to 35 złota</td>
	<td>Napięcia</td>
	<td style = "text-align: left">:  <span id="napiecieniewolnikowD"/></td>
	<td style = "text-align:left;font-size: 12px;color: red;"><span id = "wzrostwku1"></span><span id = "wzrostwku2"></span><span id = "rozladowanienapiecianiewolnikowD"></span></td>
	
	</tr>
	
	</tr>
	<tr>
	<td><font color="yellow"><span style="font-size: 14px" class = "litera tilelink"><div onclick="niewolnicy1()">Kup Niewolników</div></font></td>
	<td style = "text-align:left;font-size: 12px;color: silver; max-width: 180px">Zakup niewolników ( pomiędzy trzydziestu a pięćdziesięciu ) kosztuje 25złota. Zwiększa poziom wk**rwienia</td>
	<td>Procent niewolników</br>w ogólnej populacji</td>
	<td style = "text-align: left">:  <span id ="procentniewolnikowD"/></td>
	</tr>
	
	
	<tr>
	<td></td>
	<td style = "text-align:left;font-size: 12px;color: silver; max-width: 180px"></td>
	<td>Suma</br>mieszkańców</td>
	<td style = "text-align: left">:  <span id ="ogolnailoscmieszkancowD"/></td>
	</tr>
	
	<tr>
	<td></td>
	<td style = "text-align:left;font-size: 12px;color: silver; max-width: 180px"></td>
	<td>Suma zakupionych</br>niewolników</td>
	<td style = "text-align: left">:  <span id ="niewolnicyD"/></td>
	</tr>
		</table>
		</td>
	</tr>
</table>
 
 
 <table id="misjedyplomatyczne">
	<tr>
		<td><img src="thronehall.jpg" alt=" "/>
		</td>






		<td style= "vertical-align:top;min-width: 100%">
		<table style="min-width: 100%"><tr><td style="text-align: center">Misje dyplomatyczne</td></tr>
		<tr><td style="text-align:center;font-size: 18px;color: red;" id = "dyplomacjainfo"></td></tr>
		<tr><td style="text-align:center;font-size: 18px;color: red;" id = "dyplomacjainfo2"></td></tr>
		</table>
		
		</br>
		</br>
		<table style="min-width: 100%;">
		
		<tr style="text-align:left;font-size: 18px;color: silver;">
	<td >Wyślij</br> dyplomatę</td>
	<td>Plemię</br> i koneksje</td>
	<td>Poziom</br> relacji</td>
	<td>Bonusy wynikające</br> z relacji</td>
	</tr>
		
	<tr>
	<td><img class = "litera tilelink" title="Wyślij dyplomatę do Mauryków. Koszt: 5 złota" src="buildings/diplo1.jpg" onclick="dyplomatadomaurykow()"alt=" "/></td>
	<td style= "text-align: left">Maurykowie<span style="font-size:14px;color:silver"></br> Plemie handlowe</br> handlują z Yerysami</span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="relacjezmaurykamiD"></span></br></br><span id="poziomrelacjizMaurykamiD"></span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="bonusinfoMaurykowieD"></span></td>
	</tr>
	<tr>
	<td><img class = "litera tilelink" title="Wyślij dyplomatę do Plemów. Koszt: 5 złota" src="buildings/diplo2.jpg" onclick="dyplomatadoplemow()"alt=" "/></td>
	<td style= "text-align: left">Plemowie<span style="font-size:14px;color:silver"></br> Plemie handlowe</br> handlują z Merkami</span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="relacjezplemamiD"></span></br></br><span id="poziomrelacjizPlemamiD"></span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="bonusinfoPlemowieD"></span></td>
	</tr>
	<tr>
	<td><img class = "litera tilelink" title="Wyślij dyplomatę do Nordysków. Koszt: 5 złota" src="buildings/diplo3.jpg" onclick="dyplomatadonordyskow()"alt=" "/></td>
	<td style= "text-align: left">Nordyskowie<span style="font-size:14px;color:silver"></br> Plemie handlowe</br> handlują z Opsydianami</span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="relacjeznordyskamiD"></span></br></br><span id="poziomrelacjizNordyskamiD"></span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="bonusinfoNordyskowieeD"></span></td>
	</tr>
	<tr>
	<td><img class = "litera tilelink" title="Wyślij dyplomatę do Merków. Koszt: 5 złota" src="buildings/diplo4m.jpg" onclick="dyplomatadomerkow()"alt=" "/></td>
	<td style= "text-align: left">Merkowie<span style="font-size:14px;color:silver"></br> Plemie wojenne</br> handlują z Plemami</span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="relacjezmerkamiD"></span></br></br><span id="poziomrelacjizMerkamiD"></span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="bonusinfoMerkowieD"></span></td>
	</tr>
	<tr>
	<td><img class = "litera tilelink" title="Wyślij dyplomatę do Opsydian. Koszt: 5 złota" src="buildings/diplo5m.jpg" onclick="dyplomatadoopsydian()"alt=" "/></td>
	<td style= "text-align: left">Opsydianie<span style="font-size:14px;color:silver"></br> Plemie wojenne</br> handlują z Nordyskami</span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="relacjezopsydianamiD"></span></br></br><span id="poziomrelacjizOpsydianamiD"></span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="bonusinfoOpsydianieD"></span></td>
	</tr>
	<tr>
	<td><img class = "litera tilelink" title="Wyślij dyplomatę do Yerysów. Koszt: 5 złota" src="buildings/diplo6m.jpg" onclick="dyplomatadoyerysow()"alt=" "/></td>
	<td style= "text-align: left">Yerysi<span style="font-size:14px;color:silver"></br> Plemie wojenne</br> handlują z Maurykami</span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="relacjezyerisamiD"></span></br></br><span id="poziomrelacjizYerisamiD"></span></td>
	<td style="text-align: left;font-size:14px;color:gray"><span id="bonusinfoYerisiD"></span></td>
	</tr>
	
		
		</table>
		
		
		</td>

	</tr>

</table>

 <table>
	<tr>
		<td id="plikguildiaszpiegowD">
		</td>






		<td style= "vertical-align:top;min-width: 100%">
		<table style="min-width: 100%"><tr><td style="text-align: center">Szpiegostwo</td></tr>
		<tr><td style="text-align:center;font-size: 18px;color: red;" id = "szpiegostwoinfo"></td></tr></table>
		</br>
		</br>
		<table style="min-width: 100%;">
		
	<tr style="text-align:left;font-size: 18px;color: silver;">
	<td>Szkolenie</br>oraz misje</td>
	<td>Ilość szpiegów</td>
	<td>Koszty</td>
	<td>Punkty</br>szpiegostwa</td>
	</tr>
	<tr style="text-align:left;font-size: 14px;color: silver;">
	<td ><img class = "litera tilelink" title="Szkolenie: Wyszkól szpiega" src="spy.jpg" onclick="szkolenieszpiega()"alt=" "/></td>
	<td><span id="iloscszpiegowD"></span></td>
	<td>Stałe: <span id="kosztutrzymaniaszpiegaD"></span> złota</br>
	Najęcie nowego szpiega: <span id="kosztszpiegaD"></span> złota</td>
	<td><span id="punktyszpiegostwaD"></span></td>
	</tr>
	<tr style="text-align:left;font-size: 14px;color: silver;">
	<td ><img class = "litera tilelink" title="Misja: Sprawdź ilu mają wojów" src="spymission1m.jpg" onclick="misjailewojow()"alt=" "/></td>
	<td> <label for="szpiegostwom1d"><b>Wysłać do: </b></label>
 <select id="szpiegostwom1d">
   <option value="yerysim1">Yerysów</option>
   <option  value="merkowiem1">Merków</option>
   <option value="opsydianiem1">Opsydian</option>
 </select> </td>
	<td>Złoto: <span id="kosztwyslaniaszpiega1D"></span></br>
	Punkty Szpiegostwa: <span id="kosztwyslaniaszpiega1pktD"></span></td>
	<td>Ilość misji na Yerisów: <span id="sprawdzilumajawojowmyerysilvlD"></span></br>
	Ilość misji na Merków: <span id="sprawdzilumajawojowmerkowielvlD"></span></br>
	Ilość misji na Opsydian: <span id="sprawdzilumajawojowopsydianielvlD"></span></td>
	</tr>
	<tr style="text-align:left;font-size: 14px;color: silver;">
	<td ><img class = "litera tilelink" title="Misja: Wykradnij złoto" src="spymission2m.jpg" onclick="misjakradziezzlota()"alt=" "/></td>
	<td> <label for="szpiegostwom2d"><b>Wysłać do: </b></label>
 <select id="szpiegostwom2d">
   <option value="yerysim2">Yerysów</option>
   <option  value="merkowiem2">Merków</option>
   <option value="opsydianiem2">Opsydian</option>
 </select> </td>
	<td>Złoto: <span id="kosztwyslaniaszpiega2D"></span></br>
	Punkty Szpiegostwa: <span id="kosztwyslaniaszpiega2pktD"></td>
	<td>Ilość misji na Yerisów: <span id="ukradnijzlotoyerysilvlD"></span></br>
	Ilość misji na Merków: <span id="ukradnijzlotomerkowielvlD"></span></br>
	Ilość misji na Opsydian: <span id="ukradnijzlotoopsydianielvlD"></span></td>
	</tr>
	<tr style="text-align:left;font-size: 14px;color: silver;">
	<td>Nasza wiedza</br>o wojskach </br>przeciwników</td>
	<td>Yerysi: <span id="populacjayerisowD"></span></td>
	<td>Merkowie: <span id="populacjamerkowD"></span></td>
	<td>Opsydianie: <span id="populacjaopsydianD"></span></td>
	</tr>
	
		
		</table>
		
		
		</td>

	</tr>

</table>



<table id="losowezdarzenia">
	<tr>
		<td><img src="news.jpg" alt=" "/>
		</td>






		<td style= "vertical-align:top;min-width: 100%;">
		<table class = "news" style="min-width: 100%;min-height: 300px;">
		
		<tr>
		<td style="min-width: 100%;vertical-align:top;text-align: center">Wydarzenia
		</br></br>
		<div style= "text-align:left;font-size: 14px;" id="news1">Nic ciekawego na tą chwilę wodzu... ale ludzie plotkują, gazeta huczy od informacji... Jak pojawi się nowe wydarzenie to przycisk <b>Wydarzenia</b> na panelu menu zacznie mrugać. Tekst wydarzenia pojawi się w tym oknie, a poniżej przyciski odpowiedzi zamienią się na wybory, których będziesz musiał dokonać</div></br></br>
		<div style= "text-align:left;font-size: 30px;" id="news2"></div>
		<font color="red"><div style="font-size: 14px" id="brakwyboruV"></div></font>
		<div style= "text-align:left;font-size: 14px;" id="news3"></div>
		<div style= "text-align:left;font-size: 14px;" id="news4"></div></br>
		<div style= "text-align:left;font-size: 14px;" id="news5"></div>
		<div class = "litera" style= "text-align:left;font-size: 14px;" id="news6" onclick="wydazeniawyborpierwsze()">Odpowiedź Pierwsza</div>
		<div class = "litera" style= "text-align:left;font-size: 14px;" id="news7" onclick="wydazeniawybordrugi()">Odpowiedź Druga</div>
		<div class = "litera" style= "text-align:left;font-size: 14px;" id="news8" onclick="wydazeniawybortrzeci()">Odpowiedź Trzecia</div>
		</td>
		</tr>
		</table>
		
		<table style= "min-height: 300px;min-width:100%">
		<td class = "news" style= "min-width:50%;vertical-align:top;text-align: justify">
		<table>
	
	<div style = "text-align: center" >Plotki</div></br>
	<div style= "font-size:14px"><b>1.</b> <span id = "plotka1"></span> </div></br>
	<div style= "font-size:14px"><b>2.</b> <span id = "plotka2"></span> </div></br>
	<div style= "font-size:14px"><b>3.</b> <span id = "plotka3"></span> </div>
	</table>
	</td>
	<td class = "news" style= "min-width:50%;vertical-align:top;text-align: center">
	<table >
	
	Gazeta Torsjańska</br></br>
	<div style="font-size: 14px" id = "porarokuUwaga"></div>
<font color="red"><div id="niewolnicy2S"></div></font>
<font color="red"><div id="niewolnicy3S"></div></font>
</br></br>
<font color="red"><div style="font-size: 14px" id="przeludnienieS"></div></font>
<font color="red"><div style="font-size: 14px" id="przeludnienie2S"></div></font>
<font color="red"><div style="font-size: 14px" id="przeludnienie3S"></div></font>
<font color="Green"><div style="font-size: 14px" id="bezpiecznezboze0"></div></font>
<font color="red"><div style="font-size: 14px" id="bezpiecznezboze1"></div></font>
<font color="red"><div style="font-size: 14px" id="bezpiecznezboze2"></div></font>
<font color="red"><div style="font-size: 14px" id="bezpiecznezboze3"></div></font>
<font color="red"><div style="font-size: 14px" id="bezpiecznezboze4"></div></font>

	
	</table>
	</td>
	
		
		</table>
		
		
		</td>

	</tr>

</table>


 
 
 
 </div>
  <div id="prawa">



<?php
$dataczas = new DateTime();

 "Data i czas serwera: ".$dataczas->format('Y-m-d H:i:s')."<br/>";

$koniec = DateTime::createFromFormat('Y-m-d H:i:s',$_SESSION['dnipremium']);
$roznica = $dataczas->diff($koniec);

if($dataczas<$koniec)
	 '<br/>'."pozostało premium: ".$roznica->format('%m mies, %d dni, %h godz, %i min, %s sek');
	
		 '<br/>'."Premium niekatywne od: ".$roznica->format('<br/> lat %y <br/>mies %m <br/>dni %d<br/>godz %h<br/>min %i<br/>sek %s');



    
	 ++$_SESSION['drewno'] . "\n";
	?>
</br>
</div>
</div>
<div class = "overlay" id = "lewa"> 
<p style="font-size: 30px"><b>Panel Gracza: </b></p>
<div style="font-size: 18px">Dlugość rozgrywki</div>
<div style="font-size: 14px" id="dlugoscgry"></div>
<div style="font-size: 14px" id="zegar"></div>
<div title="pora roku" id="porarokuM"></div>
<div id = "nazwaporyroku"></div>
<div  style="font-size: 14px" id = "miesiacnazwa"></div>
<div style="font-size: 14px; text-align: left" id = "porarokuBonus"></div> 
<b>Twoje zasoby: </b></br>
<table style="text-align: left; font-size: 16px; width: 100%">
<tr>
<td><b>Drewno:</b></td>
<td style="text-align: right"><div id="drewnoS"></div></td>
<td style="text-align: right">/</td>
<td style="text-align: left"><div id="maxsurS"></div></td> 
</tr>
<tr>
<td><b>Kamien:</b></td>
<td style="text-align: right"><div id="kamienS"></div></td>
<td style="text-align: right">/</td>
<td style="text-align: left"><div id="maxsur1S"></div></td> 
</tr>
<tr>
<td><b>Zboze:</b></td>
<td style="text-align: right"><div id="zbozeS"></div></td>
<td style="text-align: right">/</td>
<td style="text-align: left"><div id="maxsur2S"></div></td> 
</tr>
<tr>
<td><b>Nauka:</b></td>
<td style="text-align: right"><div id="naukas"></div></td>
<td style="text-align: right">/</td>
<td style="text-align: left">100</td> 

</tr>
<tr>
<td><b>Szpiegostwo:</b></td>
<td style="text-align: right"><div id="punktyszpiegostwaD2"></div></td>
<td style="text-align: right">/</td>
<td style="text-align: left">100</td> 

</tr>
<tr>
<td><b>Złoto:</b></td>
<td style="text-align: right"><div id="zlotoS"></div></td>
</tr>
</table>
<span style="font-size:16px"><b>Ostatnie wydarzenie</b></span>
</br><span id ="news4a" style="font-size:12px"></span>
</br><span id ="news5a" style="font-size:12px"></span>
</br><span id ="news2a" style="font-size:30px"></span>
</br></br>
<b>Twoja Populacja:</br></br>
<table style="text-align: left; font-size: 14px; width: 100%">
<tr>
<td><b>Torsjanie:</b></td>
<td style="text-align: right"><div id="orsyanieS"></div></td>
<td style="text-align: left">/</td>
<td style="text-align: left"><div id="maxorsyanS"></div></td> 
</tr>
<tr><td></br></td></tr>
<tr>
<td><b>Drwale:</b></td>
<td style="text-align: right"><div id="drwaleS"></div></td>
</tr>
<tr>
<td><b>Kamieniarze:</b></td>
<td style="text-align: right"><div id="kamieniarzeS"></div></td>
</tr>
<tr>
<td><b>Fjermierzy:</b></td>
<td style="text-align: right"><div id="fjermierzyS"></div></td>
</tr>
<tr>
<td><b>Uczeni:</b></td>
<td style="text-align: right"><div id="uczeniS"></div></td>
</tr>
<tr>
<td><b>Kupcy:</b></td>
<td style="text-align: right"><div id="kupcyS"></div></td>
</tr>
<tr>
<td><b>Wojowie:</b></td>
<td style="text-align: right"><div id="armiaS"></div></td>
</tr>
<tr>
<td><b>Szpiedzy:</b></td>
<td style="text-align: right"><div id="iloscszpiegowD2"></div></td>
</tr>
<tr>
<td><b>Bezrobotni:</b></td>
<td style="text-align: right"><div id="bezrobotniS"></div></td>
</tr>
<tr><td></br></td></tr>
<tr><td></br></td></tr>
<tr>
<td style="font-size: 18px; color: #FF4500"><b>Wk**wienie:</b></td>
<td style="font-size: 18px; text-align: right; color: #FF4500"><div id="riotsS"></div></td>
</tr>
<tr><td></br></td></tr>
<tr>
<td style="font-size: 18px; color: #556B2F"><b>Nadzieja:</b></td>
<td style="font-size: 18px; text-align: right; color: #556B2F"><div id="hope1"></div></td>
</tr>
</table>
<font color="yellow"><span style="font-size: 14px" class = "litera tilelink"><div id="niewolnicy" onclick="niewolnicy1()">Kup Niewolnikow za 25 złota</div></font>
</span>
<font color="yellow">Torsjańska Gazeta:</font>
<div style="font-size: 14px" id = "porarokuUwagaS"></div>
<font color="red"><div id="niewolnicy2Si"></div></font>
<font color="red"><div id="niewolnicy3Si"></div></font>
</br></br>
<font color="red"><div style="font-size: 14px" id="przeludnienieSi"></div></font>
<font color="red"><div style="font-size: 14px" id="przeludnienie2Si"></div></font>
<font color="red"><div style="font-size: 14px" id="przeludnienie3Si"></div></font>
<font color="Green"><div style="font-size: 14px" id="bezpiecznezboze0i"></div></font>
<font color="red"><div style="font-size: 14px" id="bezpiecznezboze1i"></div></font>
<font color="red"><div style="font-size: 14px" id="bezpiecznezboze2i"></div></font>
<font color="red"><div style="font-size: 14px" id="bezpiecznezboze3i"></div></font>
<font color="red"><div style="font-size: 14px" id="bezpiecznezboze4i"></div></font>







</br></br>
<b>Twoje budynki: </b></br></br>
<table style="text-align: left; font-size: 14px; width: 100%">
<tr>
<td>Poziom Magazynu:</td>
<td style="text-align: right"><div id ="magazynlvl"></div></td>
</tr>
<tr>
<td>Poziom Zamku:</td>
<td style="text-align: right"><div id ="zameklvl"></div></td>
</tr>
<tr>
<td>Poziom Pomniku Bohatera:</td>
<td style="text-align: right"><div id ="pomnik_bohateralvl"></div></td>
</tr>
<tr>
<td>Poziom Chaty Drwala:</td>
<td style="text-align: right"><div id ="chata_drwalalvl"></div></td>
</tr>
<tr>
<td>Poziom Kamieniolomu:</td>
<td style="text-align: right"><div id ="kamieniolomlvl"></div></td>
</tr>
<tr>
<td>Poziom Farm:</td>
<td style="text-align: right"><div id ="farmalvl"></div></td>
</tr>
<tr>
<td>Ilość Chałup:</td>
<td><div id ="iloscdomow"></div></td>
</tr>
<tr>
<td>Pałac:</td>
<td style="text-align: right"><div id ="palaclvl"></div></td>
</tr>
<tr>
<td>Targowisko:</td>
<td style="text-align: right"><div id ="targowiskolvl"></div></td>
</tr>
<tr>
<td>Kanalizacje:</td>
<td style="text-align: right"><div id ="kanalizacjelvl"></div></td>
</tr>
<tr>
<td>Oberża:</td>
<td style="text-align: right"><div id ="oberzalvl"></div></td>
</tr>
<tr>
<td>Łaźnie:</td>
<td style="text-align: right"><div id ="laznielvl"></div></td>
</tr>
<tr>
<td>Koszary:</td>
<td style="text-align: right"><div id ="koszarylvl"></div></td>
</tr>
<tr>
<td>Kościół:</td>
<td style="text-align: right"><div id ="kosciollvl"></div></td>
</tr>
<tr>
<td>Szkoła:</td>
<td style="text-align: right"><div id ="szkolalvl"></div></td>
</tr>
<tr>
<td>Zbrojownia:</td>
<td style="text-align: right"><div id ="zbrojownialvl"></div></td>
</tr>


</table>
</br></br>
Plotki:
</br>
</br>
<div style= "font-size:14px;color:silver" id = "plotka1a"> </div>


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
	
	
//karty
var losowakarta1 = Math.round((Math.random()*52)+ 1)
var losowakarta2 = Math.round((Math.random()*52)+ 1)
var losowakarta3 = Math.round((Math.random()*52)+ 1)
var wygranewkarty = 0;
var przegranewkarty = 0;
var remisywkarty = 0;
var iloscgierwkarty = 0;
var ratiogierwkarty = 0;

var ilosczlotanakarty = 0;

var cards = ["c" + losowakarta1 + ".jpg","c" + losowakarta2 + ".jpg","c" + losowakarta3 + ".jpg"];
var i = cards.length, j, temp;
//alert(cards[2]);

//console.log(cards);

var c0 = document.getElementById('c0');
var c1 = document.getElementById('c1');
var c2 = document.getElementById('c2');

var obraz1 ="url(buildings/oberza/karty/c" + losowakarta1 +".jpg)";
	var obraz2 ="url(buildings/oberza/karty/c" + losowakarta2 +".jpg)";
	var obraz3 ="url(buildings/oberza/karty/c" + losowakarta3 +".jpg)";

c0.addEventListener("click", function() { revealCard(0); });
c1.addEventListener("click", function() { revealCard(1); });
c2.addEventListener("click", function() { revealCard(2); });


var oneVisible = false;
var turnCounter = 0;
var visible_nr;
var grawtrakcie = 0;
var jakakarta;
var poziomgry = 0;
var pierwszywybor;
var drugiwybor;
var iloscprob = 0;
var rozgrywka = 1;



function jakakartaF()
{
if(cards[visible_nr] == "c1.jpg")
{
	jakakarta = "Dwójka karo"
}
else if(cards[visible_nr] == "c2.jpg")
{
	jakakarta = "Trójka karo"
}
else if(cards[visible_nr] == "c3.jpg")
{
	jakakarta = "Czwórka karo"
}
else if(cards[visible_nr] == "c4.jpg")
{
	jakakarta = "Piątka karo"
}
else if(cards[visible_nr] == "c5.jpg")
{
	jakakarta = "Szóstka karo"
}
else if(cards[visible_nr] == "c6.jpg")
{
	jakakarta = "Siódemka karo"
}
else if(cards[visible_nr] == "c7.jpg")
{
	jakakarta = "Ósemka karo"
}
else if(cards[visible_nr] == "c8.jpg")
{
	jakakarta = "Dziewiątka karo"
}
else if(cards[visible_nr] == "c9.jpg")
{
	jakakarta = "Dziesiątka karo"
}
else if(cards[visible_nr] == "c10.jpg")
{
	jakakarta = "Dama karo"
}
else if(cards[visible_nr] == "c11.jpg")
{
	jakakarta = "Dziesiątka kier"
}
else if(cards[visible_nr] == "c12.jpg")
{
	jakakarta = "Król karo"
}
else if(cards[visible_nr] == "c13.jpg")
{
	jakakarta = "As karo"
}
else if(cards[visible_nr] == "c14.jpg")
{
	jakakarta = "Walet karo"
}
else if(cards[visible_nr] == "c15.jpg")
{
	jakakarta = "Dama kier"
}
else if(cards[visible_nr] == "c16.jpg")
{
	jakakarta = "Dziewiątka kier"
}
else if(cards[visible_nr] == "c17.jpg")
{
	jakakarta = "Król kier"
}
else if(cards[visible_nr] == "c18.jpg")
{
	jakakarta = "As kier"
}
else if(cards[visible_nr] == "c19.jpg")
{
	jakakarta = "Walet kier"
}
else if(cards[visible_nr] == "c20.jpg")
{
	jakakarta = "Dwójka pik"
}
else if(cards[visible_nr] == "c21.jpg")
{
	jakakarta = "Trójka pik"
}
else if(cards[visible_nr] == "c22.jpg")
{
	jakakarta = "Czwórka pik"
}
else if(cards[visible_nr] == "c23.jpg")
{
	jakakarta = "Piątka pik"
}
else if(cards[visible_nr] == "c24.jpg")
{
	jakakarta = "Szóstka pik"
}
else if(cards[visible_nr] == "c25.jpg")
{
	jakakarta = "Siódemka pik"
}
else if(cards[visible_nr] == "c26.jpg")
{
	jakakarta = "Ósemka pik"
}
else if(cards[visible_nr] == "c27.jpg")
{
	jakakarta = "Dziewiątka pik"
}
else if(cards[visible_nr] == "c28.jpg")
{
	jakakarta = "Dziesiątka pik"
}
else if(cards[visible_nr] == "c29.jpg")
{
	jakakarta = "Dama pik"
}
else if(cards[visible_nr] == "c30.jpg")
{
	jakakarta = "Król pik"
}
else if(cards[visible_nr] == "c31.jpg")
{
	jakakarta = "As pik"
}
else if(cards[visible_nr] == "c32.jpg")
{
	jakakarta = "Walet pik"
}
else if(cards[visible_nr] == "c33.jpg")
{
	jakakarta = "Dwójka trefl"
}
else if(cards[visible_nr] == "c34.jpg")
{
	jakakarta = "Trójka trefl"
}
else if(cards[visible_nr] == "c35.jpg")
{
	jakakarta = "Czwórka trefl"
}
else if(cards[visible_nr] == "c36.jpg")
{
	jakakarta = "Piątka trefl"
}
else if(cards[visible_nr] == "c37.jpg")
{
	jakakarta = "Szóstka trefl"
}
else if(cards[visible_nr] == "c38.jpg")
{
	jakakarta = "Siódemka trefl"
}
else if(cards[visible_nr] == "c39.jpg")
{
	jakakarta = "Ósemka trefl"
}
else if(cards[visible_nr] == "c40.jpg")
{
	jakakarta = "Dziesiątka trefl"
}
else if(cards[visible_nr] == "c41.jpg")
{
	jakakarta = "Dziesiątka trefl"
}
else if(cards[visible_nr] == "c42.jpg")
{
	jakakarta = "Dama trefl"
}
else if(cards[visible_nr] == "c43.jpg")
{
	jakakarta = "Król trefl"
}
else if(cards[visible_nr] == "c44.jpg")
{
	jakakarta = "As trefl;"
}
else if(cards[visible_nr] == "c45.jpg")
{
	jakakarta = "Walet trefl"
}
else if(cards[visible_nr] == "c46.jpg")
{
	jakakarta = "Dwójka kier"
}
else if(cards[visible_nr] == "c47.jpg")
{
	jakakarta = "Trójka kier"
}
else if(cards[visible_nr] == "c48.jpg")
{
	jakakarta = "Czwórka kier"
}
else if(cards[visible_nr] == "c49.jpg")
{
	jakakarta = "Piątka kier"
}
else if(cards[visible_nr] == "c50.jpg")
{
	jakakarta = "Szóstka kier"
}
else if(cards[visible_nr] == "c51.jpg")
{
	jakakarta = "Siódemka kier"
}
else if(cards[visible_nr] == "c52.jpg")
{
	jakakarta = "Ósemka kier"
}
else if(cards[visible_nr] == "c53.jpg")
{
	jakakarta = "Joker"
}

}





function grawtrzykartyF2()
{
  
 
 if(poziomgry == 0 && rozgrywka == 1 )
	{

	rozgrywka++;
	$('#c0').css('background-image',obraz1);
	$('#c0').addClass("cardA");
	$('#c0').removeClass("card");
	
	$('#c1').css('background-image',obraz2);
	$('#c1').addClass("cardA");
	$('#c1').removeClass("card");
	
	$('#c2').css('background-image',obraz3);
	$('#c2').addClass("cardA");
	$('#c2').removeClass("card");
	grawtrakcie = 1;
	iloscgierwkarty = iloscgierwkarty + 1;
	document.getElementById("iloscgierwkartyD").innerHTML = iloscgierwkarty;
	document.getElementById("grawkartyt2").innerHTML ="Wybierz swoją kartę";
	
	poziomgry = 1;
	}
	
	else if(poziomgry == 0 && rozgrywka == 2 )
	{
	
	
	losujkarty();
	$('#c0').css('background-image',obraz1);
	$('#c0').addClass("cardA");
	$('#c0').removeClass("card");
	
	$('#c1').css('background-image',obraz2);
	$('#c1').addClass("cardA");
	$('#c1').removeClass("card");
	
	$('#c2').css('background-image',obraz3);
	$('#c2').addClass("cardA");
	$('#c2').removeClass("card");
	grawtrakcie = 1;
	document.getElementById("grawkartyt2").innerHTML ="Wybierz swoją kartę";
	poziomgry = 1;
	}
	else if( poziomgry>0)
	{
		document.getElementById("grawkartyt1").innerHTML ="Zakończ wcześniejsza grę a potem dopiero rozpocznij nową";
	}
}

function tasowanie()
{
while(--i > 0) {
	j = Math.floor(Math.random() * (i+1));
	temp = cards[j];
	cards[j] = cards[i];
	cards[i] = temp;
}
i = cards.length;
};



function revealCard(nr)
{

if(poziomgry==0)
{
document.getElementById("grawkartyt1").innerHTML ="Odkryj karty zanim wybierzesz jedną z nich";
}

	else if(poziomgry==1)
	{
	//alert(nr);
	
	visible_nr = nr
	pierwszywybor = cards[visible_nr];
	jakakartaF();
	document.getElementById("grawkartyt1").innerHTML = "Wybrałeś " + jakakarta;
	document.getElementById("grawkartyt2").innerHTML = "Daj mi chwilę szefie, potasuję";
	tasowanieobraz = "<img src=\"buildings/oberza/karty/tasowanie.gif\" />";
	document.getElementById("grawkartyt5").innerHTML = tasowanieobraz;
	$("#grawkartyt5").fadeIn(1000)
	setTimeout (function() { 
		$("#grawkartyt5").fadeOut(1000); }, 4000)
		
	
	poziomgry = 5;
	setTimeout(function(){
	$('#c0').css('background-image',"url(buildings/oberza/karty/card.png)");
	$('#c0').removeClass("cardA");
	$('#c0').addClass("card");
	
	
	$('#c1').css('background-image',"url(buildings/oberza/karty/card.png)");
	$('#c1').removeClass("cardA");
	$('#c1').addClass("card");
	
	
	$('#c2').css('background-image',"url(buildings/oberza/karty/card.png)");
	$('#c2').removeClass("cardA");
	$('#c2').addClass("card");
	document.getElementById("grawkartyt2").innerHTML = "Ok, wybierz swoją kartę";
	poziomgry = 2;
	tasowanie();

			//cards.sort(function() {         // slabe losowanie
		 // return .2 - Math.random();
		//});
	
	//cards.reverse()       //odwrocenie ukladu
	}
	,5000)

	}
	
	else if(poziomgry==2)
	{
	
	var obraz = "url(buildings/oberza/karty/" + cards[nr] + ")";
	$('#c'+nr).css('background-image',obraz)
	$('#c'+nr).addClass("cardA");
	$('#c'+nr).removeClass("card");
	drugiwybor = cards[nr];
	poziomgry==3;
	czydobrzewybrales();
	}
	else if(poziomgry==5)
	{
		document.getElementById("grawkartyt3").innerHTML = "Spokojnie, tasuję karty... Zaraz będziesz mógł wybrać swoją kartę...";
		setTimeout (function() { 
		$("#grawkartyt3").fadeOut(3000); }, 4000)
	}
	else if(poziomgry==6)
	{
		document.getElementById("grawkartyt9").innerHTML = "Szefie, spokojnie... gra skończona zaraz możemy zagrać jeszcze raz...";
		setTimeout (function() { 
		$("#grawkartyt9").fadeOut(3000); }, 4000)
	}

}
	function czydobrzewybrales()
	{
	if(pierwszywybor==drugiwybor && iloscprob == 0)
	{
	document.getElementById("grawkartyt2").innerHTML = "Dobrze wybrales za pierwszym razem";
	grawkartystatus = 1;
	grawkartystatusF();
	poziomgry=6*1;
	iloscprob = 0;
	wygranewkarty = wygranewkarty + 1;	
	document.getElementById("wygranewkartyD").innerHTML = wygranewkarty;
			setTimeout(function(){
			$('#c0').css('background-image',"url(buildings/oberza/karty/card.png)");
			$('#c0').removeClass("cardA");
			$('#c0').addClass("card");
			
			
			$('#c1').css('background-image',"url(buildings/oberza/karty/card.png)");
			$('#c1').removeClass("cardA");
			$('#c1').addClass("card");
			
			
			$('#c2').css('background-image',"url(buildings/oberza/karty/card.png)");
			$('#c2').removeClass("cardA");
			$('#c2').addClass("card");
			document.getElementById("grawkartyt1").innerHTML = "";
			poziomgry = 0;
			}
			,3000)
	}
	else if(pierwszywybor==drugiwybor && iloscprob == 1)
	{
	document.getElementById("grawkartyt2").innerHTML = "Dobrze wybrales za drugim razem";
	grawkartystatus = 2;
	grawkartystatusF();
	poziomgry=6*1;
	iloscprob = 0;
	remisywkarty = remisywkarty + 1;		
	document.getElementById("remisywkartyD").innerHTML = remisywkarty;
	
	
	
			setTimeout(function(){
			$('#c0').css('background-image',"url(buildings/oberza/karty/card.png)");
			$('#c0').removeClass("cardA");
			$('#c0').addClass("card");
			
			
			$('#c1').css('background-image',"url(buildings/oberza/karty/card.png)");
			$('#c1').removeClass("cardA");
			$('#c1').addClass("card");
			
			
			$('#c2').css('background-image',"url(buildings/oberza/karty/card.png)");
			$('#c2').removeClass("cardA");
			$('#c2').addClass("card");
			document.getElementById("grawkartyt1").innerHTML = "";
			poziomgry = 0;
			grawtrakcie = 0
			
			}
			,3000)
	}
		else if(pierwszywybor != drugiwybor && iloscprob == 0)
		{
		iloscprob++;
		document.getElementById("grawkartyt2").innerHTML = "Zły wybór, spróbuj " + (iloscprob+1)*1 + " -gi raz";
		
		}
			else if(pierwszywybor != drugiwybor && iloscprob == 1)
			{
			
			document.getElementById("grawkartyt2").innerHTML = "Szefie to kolejny zły wybór - przegrałeś";
			grawkartystatus = 3;
			grawkartystatusF();
			iloscprob = 0;
			poziomgry=6*1;
			przegranewkarty = przegranewkarty +1;	
			document.getElementById("przegranewkartyD").innerHTML = przegranewkarty;	
			
			
					setTimeout(function(){
			$('#c0').css('background-image',"url(buildings/oberza/karty/card.png)");
			$('#c0').removeClass("cardA");
			$('#c0').addClass("card");
			
			
			$('#c1').css('background-image',"url(buildings/oberza/karty/card.png)");
			$('#c1').removeClass("cardA");
			$('#c1').addClass("card");
			
			
			$('#c2').css('background-image',"url(buildings/oberza/karty/card.png)");
			$('#c2').removeClass("cardA");
			$('#c2').addClass("card");
			document.getElementById("grawkartyt2").innerHTML = "Ok, wybierz swoją kartę";
			poziomgry = 0;
			grawtrakcie = 0;
			
			}
			,3000)
					}

	}
	
	function losujkarty()
{
 losowakarta1 = Math.round((Math.random()*52)+ 1)

 losowakarta2 = Math.round((Math.random()*52)+ 1)

 losowakarta3 = Math.round((Math.random()*52)+ 1)

 if(losowakarta2 < 50 && losowakarta2 == losowakarta1 || losowakarta2 == losowakarta3)
 { 
 losowakarta2 = losowakarta2 + 1;

 }
 else if(losowakarta2 < 50 && losowakarta3 == losowakarta1 || losowakarta3 == losowakarta2)
 {
 losowakarta3 = losowakarta3 + 1;

 }
 else if(losowakarta2 >= 50 && losowakarta2 == losowakarta1 || losowakarta2 == losowakarta3)
 { 
 losowakarta2 = losowakarta2 - 1;

 }
 else if(losowakarta2 >= 50 && losowakarta3 == losowakarta1 || losowakarta3 == losowakarta2)
 {
 losowakarta3 = losowakarta3 - 1;
 
 }
 
  cards = ["c" + losowakarta1 + ".jpg","c" + losowakarta2 + ".jpg","c" + losowakarta3 + ".jpg"];


 c0 = document.getElementById('c0');
 c1 = document.getElementById('c1');
 c2 = document.getElementById('c2');
 obraz1 ="url(buildings/oberza/karty/c" + losowakarta1 +".jpg)";
 obraz2 ="url(buildings/oberza/karty/c" + losowakarta2 +".jpg)";
 obraz3 ="url(buildings/oberza/karty/c" + losowakarta3 +".jpg)";
 
};
	
</script>

</body>
</html>