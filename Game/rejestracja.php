<?php
	session_start();
	
	if (isset($_POST['email']))
	{
		//udana walidacja zalozmy ze tak
		$wszystko_ok = true;
		
		//sprawdzenie nicka
		$nick = $_POST['nick'];
		
		//sprawdzenie dlugosci nicka
		if ((strlen($nick)<3) || (strlen($nick)>20))
		{
			$wszystko_ok =false;
			$_SESSION['e_nick'] = "nick musi posiadac od 3 do 20 znakow";
		}
		
		if (ctype_alnum($nick) == false)
		{
			$wszystko_ok=false;
			$_SESSION['e_nick']="Nick nie moze skladac sie tylko z liter i cyfr ( bez polskich znakow )";
		}
		
		//sprawdz poprawnosc adresu e-mail
		$email = $_POST['email'];
		$emailB = filter_var($email,FILTER_SANITIZE_EMAIL);
		
		if (((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false)) || ($emailB!=$email))
		{
			
			$wszystko_ok = false;
			$_SESSION['e_email']= "podaj poprawny mail";
		}
		
		//sprawdz poprawnosc hasla
			$haslo1 = $_POST['haslo1'];
			$haslo2 = $_POST['haslo2'];
		
		if (strlen($haslo1)<8 || (strlen($haslo1)>20))
		{
			
			$wszystko_ok = false;
			$_SESSION['e_haslo']= "haslo musi posiadac od 8 do 20 znakow";
		}	
		
		if ($haslo1 != $haslo2)
			
			{
				$wszystko_ok = false;
				$_SESSION['e_haslo']= "Podane hasla nie sa identyczne";
			}
	
		$haslo_hash = password_hash($haslo1,PASSWORD_DEFAULT);
		//echo $haslo_hash; exit();   -- do sprawdzenia zahashowanego hasla
		
		//Czy zakceptowano regulamin
		if(!isset($_POST['regulamin']))
		{
			$wszystko_ok=false;
			$_SESSION['e_regulamin'] ="Potwierdz akceptacje regulaminu";
		}
		
		//Bot or not?
		$sekret = "6LfKs8MZAAAAAB0I8LDMp9jjueQJxQQnauIc5Nkc";
		
		$sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);
	
		$odpowiedz = json_decode($sprawdz);
		
		if($odpowiedz->success==false) 
		{
			$wszystko_ok=false;
			$_SESSION['e_bot'] ="Potwierdz ze nie jestes botem!";
		}
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		
		try
		{
			$connection = new mysqli($host, $db_user, $db_password, $db_name);
			if($connection->connect_errno!=0)
	{
		throw new Exception(mysqli_connect_errno());
	}
		
		else 
		{
			//czy email juz istnieje
			$result = $connection->query("Select id from uzytkownicy where email = '$email'");
			
			if(!$result) throw new Exception($connection->error);
			
			$ile_takich_maili = $result->num_rows;
			if($ile_takich_maili>0)
					{
			$wszystko_ok=false;
			$_SESSION['e_email'] ="Istnieje juz konto przypisane do takiego email!";
		}
			
			
		//czy nick juz jest zarezerwowany
			$result = $connection->query("Select id from uzytkownicy where user = '$nick'");
			
			if(!$result) throw new Exception($connection->error);
			
			$ile_takich_nickow = $result->num_rows;
			if($ile_takich_nickow>0)
					{
			$wszystko_ok=false;
			$_SESSION['e_nick'] ="Istnieje juz taki nick!";
		}

			if($wszystko_ok ==true)
		{
			//dodajemy gracza do bazy, wszystko ok
			
			if($connection->query("INSERT INTO uzytkownicy Values (NULL,'$nick','$haslo_hash','$email',100,100,100,now() + INTERVAL 14 DAY,'0','0','0','0','1','1','1','0','0','0','0','0','0','0','0','0','0','0','0','0')"))
			{
				$_SESSION['udanarejestracja']=true;
				header('Location: witamy.php');
			}
			else
			{
				throw new Exception($connection->error);
			}
	
		}
		
			$connection->close();
		}
	
		}	
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodnosci i prosimy o rejestracje w innym terminie</span>';
			echo '<br/>Informacje devolperska: '.$e;
		}
		
		if($wszystko_ok ==true)
		{
			//dodajemy gracza do bazy, wszystko ok
			echo "udana walidacja";
			exit();
		}
		
	}
	

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Orsyanie - gra przegladarkowa</title>
 <script src="https://www.google.com/recaptcha/api.js"></script>
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
}
);


</script>
</head>
<body>
<div id="container">
<div id="logo">
  <h1>Uratuj Orsyan przed zagładą! "Its too late" - żółty ptak</h1>  <br/><br/>
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
						
						<li><a target="_blank" rel="noopener noreferrer" href = "http://keyuser.refy.pl/">Strona o Keyuserach</a></li>
					</ul>
				</li>
				<li><a href="rejestracja.php">Zmień język</a>
				<ul>
					<li><a href = "indexRU.php">русский</a></li>
					<li><a href = "indexEN.php">English</a></li>
					</ul>
				</li>
				
			</ol>
		
		</div>
		</div> 

 <div class="container"> 
            <div class="box"> 
                <div class="box-row"> 
                    <div class="box-cell box1"> 
 Zaloguj się i rozpocznij grę <span style= "color: #FFD700">Uratuj Orsyan</span>
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
Witam wszystkich na stronie gdzie po zarejestrowaniu się ( opcja do wyboru w menu powyżej bądź w menu z lewej strony nad logowaniem ) będziecie mogli rozpocząc rozgrywkę w celu uratowania Orsyan przed Żółtym ptakiem. Gra Uratuj Orsyan to gra ekonomniczno-strategiczna, w której zbierając surowce, wznoszac odpowiednie budynki, 
dbając o wygode oraz wielkość populacji Orsyan poprzez korzystanie z wielu udostepnionych mechanik musisz poprowadzić lud Orsyan do wielkości ;) więcej na ten temat znajdziesz w sekcji Linki -> Instrukcja w menu powyżej. Polecam bardzo nawigacje poprzez 
górne menu, pozowli Ci to zapoznać się z grą wyświetlając podstrony ( takie jak lista budynkow lub instrukcja ) czy też przenosząc Cię w odpowiednie miejsce na tej stronie. Górne menu wraz ze scrollowaniem przez Ciebie strony w dół bądź w góre, będzie podążać 
za Tobą. Poniżej będę zamieszczał newsy dotyczące gry, takie jak eleminowanie odkrytych bugow, zmiany w istniejacych mechanikach, dodanie nowych mechanik.

</div>




<div style= "background-color: #A52A2A;padding-left: 5px; border-top: 2px dotted gray;" id ="content2">
<span class="bigtitle">Rejestracja</span>
<div style="height:15px;"></div>
<form method="post">
	
	Nickname: <br /> <input type = "text" name = "nick" /> <br />
	<?php
	if (isset($_SESSION['e_nick']))
	{
		echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
		unset($_SESSION['e_nick']);
	}
	
	?>
	
	E-mail: <br /> <input type = "text" name = "email" /><br />
	
	<?php
	if (isset($_SESSION['e_email']))
	{
		echo '<div class="error">'.$_SESSION['e_email'].'</div>';
		unset($_SESSION['e_email']);
	}
	
	?>
	
	Twoje haslo: <br /> <input type = "password" name = "haslo1" /><br />
	<?php
	if (isset($_SESSION['e_haslo']))
	{
		echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
		unset($_SESSION['e_haslo']);
	}
	
	?>
	Powtorz haslo: <br /> <input type = "password" name = "haslo2" /><br />
	

	<label> 
	<input type="checkbox" name = "regulamin" /> Akceptuje regulamin
	</label>
	<?php
	if (isset($_SESSION['e_regulamin']))
	{
		echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
		unset($_SESSION['e_regulamin']);
	}
	
	?>
	
	<div class ="g-recaptcha" data-sitekey="6LfKs8MZAAAAAH3OdOTArJmleO-R_8LHh1JMHpE-"></div>
	
		<?php
	if (isset($_SESSION['e_bot']))
	{
		echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
		unset($_SESSION['e_bot']);
	}
	
	?>
	
	<br />
	
	
	<input type ="submit" value = "Zarejestruj się" />
	</form>


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