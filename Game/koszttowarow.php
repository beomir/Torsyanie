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
width: 650px;
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
<script>

//drewno
function wymiendrewnonakamienF()
{
	var wymiendrewnonakamien = document.getElementById("wymiendrewno1").value;
	var przeliczonedrewno1 = wymiendrewnonakamien / 5
	document.getElementById("przeliczonedrewnokamien").innerHTML = przeliczonedrewno1;	
};

function wymiendrewnonazbozeF()
{
	var wymiendrewnonazboze = document.getElementById("wymiendrewno2").value;
	var przeliczonedrewno2 = Math.round ((wymiendrewnonazboze / 70)*100)/100
	document.getElementById("przeliczonedrewnozboze").innerHTML = przeliczonedrewno2;	
};

function wymiendrewnonazlotoF()
{
	var wymiendrewnonazloto = document.getElementById("wymiendrewno3").value;
	var przeliczonedrewno3 = Math.round ((wymiendrewnonazloto / 100)*100)/100
	document.getElementById("przeliczonedrewnozloto").innerHTML = przeliczonedrewno3;	
};


//kamien
function wymienkamiennadrewnoF()
{
	var wymienkamiennadrewno = document.getElementById("wymienkamien1").value;
	var przeliczonykamien1 =  Math.round ((wymienkamiennadrewno / 3)*100)/100
	document.getElementById("przeliczonykamiennadrewno").innerHTML = przeliczonykamien1;	
};

function wymienkamiennazbozeF()
{
	var wymienkamiennazboze = document.getElementById("wymienkamien2").value;
	var przeliczonykamien2 = Math.round ((wymienkamiennazboze / 70)*100)/100
	document.getElementById("przeliczonykamiennazboze").innerHTML = przeliczonykamien2;	
};

function wymienkamiennazlotoF()
{
	var wymienkamiennazloto = document.getElementById("wymienkamien3").value;
	var przeliczonykamien3 = Math.round ((wymienkamiennazloto / 100)*100)/100
	document.getElementById("przeliczonykamiennazloto").innerHTML = przeliczonykamien3;	
};


//zboze
function wymienzbozenadrewnoF()
{
	var wymienzbozenadrewno = document.getElementById("wymienzboze1").value;
	var przeliczonezboze1 = wymienzbozenadrewno * 10
	document.getElementById("przeliczonezbozedrewno").innerHTML = przeliczonezboze1;	
};

function wymienzbozenakamienF()
{
	var wymienzbozenakamien = document.getElementById("wymienzboze2").value;
	var przeliczonezboze2 = Math.round ((wymienzbozenakamien * 5)*100)/100
	document.getElementById("przeliczonezbozekamien").innerHTML = przeliczonezboze2;	
};

function wymienzbozenazlotoF()
{
	var wymienzbozenazloto = document.getElementById("wymienzboze3").value;
	var przeliczonezboze3 = Math.round ((wymienzbozenazloto / 2)*100)/100
	document.getElementById("przeliczonezbozezloto").innerHTML = przeliczonezboze3;	
};


//zloto
function wymienzlotonadrewnoF()
{
	var wymienzlotonadrewno = document.getElementById("wymienzloto1").value;
	var przeliczonezloto1 = wymienzlotonadrewno * 14
	document.getElementById("przeliczonezlotodrewno").innerHTML = przeliczonezloto1;	
};

function wymienzlotonakamienF()
{
	var wymienzlotonakamien = document.getElementById("wymienzloto2").value;
	var przeliczonezloto2 = Math.round ((wymienzlotonakamien * 7)*100)/100
	document.getElementById("przeliczonezlotokamien").innerHTML = przeliczonezloto2;	
};

function wymienzlotonazbozeF()
{
	var wymienzlotonazboze = document.getElementById("wymienzloto3").value;
	var przeliczonezloto3 = Math.round ((wymienzlotonazboze * 1)*100)/100
	document.getElementById("przeliczonezlotozboze").innerHTML = przeliczonezloto3;	
};

</script>
</head>
<body>
<div id = "container1">
<div id = "logo1">
 <h1>Uratuj Torsjan przed zagładą! "Its too late" - żółty ptak</h1>  <br/><br/>
 </div>
<p style="text-align: center; font-size: 50px">Koszt Towarów</p>
<div id="lewa1">
<table>

<tr>
<td style="text-align: left;font-size: 14px; color: #FFF0F5"><b>Przelicz Drewno:</b></td>
<td style="text-align: left;font-size: 14px; color: silver">5 Drewna za 1 Kamień:</td>
<td id = "przeliczonedrewnokamien"></td>

<td style="text-align: left;font-size: 14px; color: silver">70 Drewna za 1 Zboże:</td>
<td id ="przeliczonedrewnozboze"></td>
<td style="text-align: left;font-size: 14px; color: silver">100 Drewna za 1 Złoto:</td>
<td id ="przeliczonedrewnozloto"></td>
</tr>
<tr>
<td></td>
<td style="text-align: left"><input type="text" id="wymiendrewno1" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymiendrewnonakamienF()"/></td>
<td style="text-align: left"><input type="text" id="wymiendrewno2" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymiendrewnonazbozeF()"/></td>
<td style="text-align: left"><input type="text" id="wymiendrewno3" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymiendrewnonazlotoF()"/></td>
</tr>

<tr>
<td style="text-align: left;font-size: 14px; color: #FFF0F5"><b>Przelicz Kamień:</b></td>
<td style="text-align: left;font-size: 14px; color: silver">3 Kamienia za 1 Drewno:</td>
<td id = "przeliczonykamiennadrewno"></td>

<td style="text-align: left;font-size: 14px; color: silver">70 Kamienia za 1 Zboże:</td>
<td id ="przeliczonykamiennazboze"></td>
<td style="text-align: left;font-size: 14px; color: silver">100 Kamienia za 1 Złoto:</td>
<td id ="przeliczonykamiennazloto"></td>
</tr>
<tr>
<td></td>
<td style="text-align: left"><input type="text" id="wymienkamien1" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymienkamiennadrewnoF()"/></td>
<td style="text-align: left"><input type="text" id="wymienkamien2" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymienkamiennazbozeF()"/></td>
<td style="text-align: left"><input type="text" id="wymienkamien3" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymienkamiennazlotoF()"/></td>
</tr>

<tr>
<td style="text-align: left;font-size: 14px; color: #FFF0F5"><b>Przelicz Zboże:</b></td>
<td style="text-align: left;font-size: 14px; color: silver">1 Zboże za 10 Drewna:</td>
<td id ="przeliczonezbozedrewno"></td>

<td style="text-align: left;font-size: 14px; color: silver">1 Zboże za 5 Kamienia:</td>
<td id = "przeliczonezbozekamien"></td>
<td style="text-align: left;font-size: 14px; color: silver">2 Zboże za 1 Złoto:</td>
<td id = "przeliczonezbozezloto"></td>
</tr>
<tr>
<td></td>
<td style="text-align: left"><input type="text" id="wymienzboze1" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymienzbozenadrewnoF()"/></td>
<td style="text-align: left"><input type="text" id="wymienzboze2" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymienzbozenakamienF()"/></td>
<td style="text-align: left"><input type="text" id="wymienzboze3" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymienzbozenazlotoF()"/></td>
</tr>

<tr>
<td style="text-align: left;font-size: 14px; color: #FFF0F5"><b>Przelicz złoto:</b></td>
<td style="text-align: left;font-size: 14px; color: silver">1 Złota za 14 Drewno:</td>
<td id ="przeliczonezlotodrewno"></td>

<td style="text-align: left;font-size: 14px; color: silver">1 Złota za 7 Kamienia:</td>
<td id ="przeliczonezlotokamien"></td>
<td style="text-align: left;font-size: 14px; color: silver">1 Złoto za 1 Zboże:</td>
<td id ="przeliczonezlotozboze"></td>
</tr>
<tr>
<td></td>
<td style="text-align: left"><input type="text" id="wymienzloto1" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymienzlotonadrewnoF()"/></td>
<td style="text-align: left"><input type="text" id="wymienzloto2" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymienzlotonakamienF()"/></td>
<td style="text-align: left"><input type="text" id="wymienzloto3" /></td>
<td style="text-align: left"><input type="submit" value = "Przelicz" onclick="wymienzlotonazbozeF()"/></td>
</tr>

</tr>
 </table>
 
</div>
<div id ="prawa1"></div>
<div id = "footer1">

<p style="text-align: left">==><a href = "pregra.php">Powrót do strony z instrukcją<a/></p>
<p style="text-align: left">==><a href = "zaloguj.php">Powrót do strony logowania<a/></p>

<p style="text-align: left">==><a href = "keyuserplusslidertest.html">Powrót do strony o KeyUserach<a/></p>
</div>
 </div>
</body>
</html>