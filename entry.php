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
				
				if (count($result) == 0){
					echo 'ddd';
				}
				else{
					
					$_SESSION["isAdmin"] = $result['isAdmin'];
					header("Location: index.php");
					exit();
				}
				
				echo count($result);
				echo $result['isAdmin'];
				echo $_SESSION["isAdmin"];
				
				
				
			
				$pdo = null;
?>

