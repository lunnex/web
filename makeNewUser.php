<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
		$user = 'root';
		$password = '12345678';
		$db = 'stationery_shop';
		$host = 'localhost';
		$charset = 'utf8';
				
		try{
			
			$dataForCheckingOfExistingTheSameUser = array(':login' => $_POST["log"]);
			
			
			$data = array(':login' => $_POST["log"],
							':password' => $_POST["password1"]);
			
				
		$pdo = new PDO("mysql:host = $host; dbname=$db; charset=$charset", $user, $password);
		
		$sql = "select * from users where `login` = :login";
		$stmt = $pdo->prepare($sql);		
	    $stmt->execute($dataForCheckingOfExistingTheSameUser);
	    $resultLength = $stmt->rowCount();
				
				if ($resultLength > 0){
					$_SESSION["isAlreadyExists"] = 1;
					$pdo = null;
					header("Location: regist.php");
					exit();
					
				}
				else{
					$_SESSION["isAlreadyExists"] = 0;
					$_SESSION["isAuthorized"] = 1;
					$sql = "call addUser(:login, :password)";
					$stmt = $pdo->prepare($sql);			
					$stmt->execute($data);
					$pdo = null;

					header("Location: index.php");
					exit();
					}
	    
	}
				
			catch(Exception $e) {
				echo ($e->getMessage());	
				}

    ?>
