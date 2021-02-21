<?php
	session_start();
	
	//if((!isset($_Post['login'])) || (!isset($_POST['haslo'])))
	//{
	//	header('Location: index.php');
	//	exit();
	//} nie wiem dlaczego to nie dziala
	
	require_once "connect.php";

	$connection = @new mysqli($host, $db_user, $db_password, $db_name);

	if($connection->connect_errno!=0)
	{
		echo "Error code: ".$connection->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login,ENT_QUOTES,"UTF-8");
		
		
		//$sql = "Select * from uzytkownicy where user= '$login' and pass = '$haslo'"; -- podatnosc na wstrzykiwanie sqla
		
		if($result = @$connection->query(sprintf("Select * from uzytkownicy where user='%s'",
		mysqli_real_escape_string($connection,$login)
		)))
		{
			$qtyUsers = $result->num_rows;
			if($qtyUsers>0)
			{
				$record = $result->fetch_assoc();
				if(password_verify($haslo,$record['pass']))
				{
					$_SESSION['zalogowany'] = true;
					$_SESSION['id'] = $record['id'];
					$_SESSION['user'] = $record['user'];
					$_SESSION['drewno'] = $record['drewno'];
					$_SESSION['kamien'] = $record['kamien'];
					$_SESSION['zboze'] = $record['zboze'];
					$_SESSION['email'] = $record['email'];
					$_SESSION['dnipremium'] = $record['dnipremium'];
					$_SESSION['pktspec'] = $record['pktspec'];
					
					unset($_SESSION['blad']);
					$result->close();
					header('location: pregra.php');
				}
				else 
				{
					$_SESSION['blad'] ='<span style="color:red">Nieprawidlowy login lub haslo!</span>';
					header('location: index.php');
				}
				
			} else 
			{
				$_SESSION['blad'] ='<span style="color:red">Nieprawidlowy login lub haslo!</span>';
				header('location: index.php');
			}
		
			
		}
		
		$connection->close();
	}
	
	//echo $login."<br/>";
	//echo $haslo;



?>