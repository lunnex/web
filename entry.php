<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
session_start();

		$user = 'root';
		$password = '12345678';
		$db = 'stationery_shop';
		$host = 'localhost';
		$charset = 'utf8';
				
		try{
				
				$pdo = new PDO("mysql:host = $host; dbname=$db; charset=$charset", $user, $password);

				}
				
			catch(Exception $e) {
				echo ($e->getMessage());	
				}
				
				$data = array(':login' => $_POST["log"],
							':password' => $_POST["password"]);
							
				$sql = "select `isAdmin` from users where `login` = :login and `password` = :password ";
				$stmt = $pdo->prepare($sql);
				
				$query = $stmt->execute($data);
				$result = array();
				$result = $stmt->fetch();
				
				$resultLength = $stmt->rowCount();
				
				if ($resultLength == 0){
					$_SESSION["isMistaken"] = 1;
					header("Location: vhod.php");
					exit();
				}
				else{
					
					$_SESSION["isAdmin"] = $result['isAdmin'];
					$_SESSION["isAuthorized"] = 1;
					$_SESSION["isMistaken"] = 0;
					$_SESSION["isAlreadyExists"] = 0;
					header("Location: index.php");
					exit();
				}
							
			
				$pdo = null;
?>

