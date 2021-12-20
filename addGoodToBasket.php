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
			
			$data = array(':id' => $_POST["id"],
							':price' => $_POST["price"],
							':name' => $_POST["name"],
							':pic' => $_POST["pic"]);
			
				
		$pdo = new PDO("mysql:host = $host; dbname=$db; charset=$charset", $user, $password);
		$sql = "call addGoodToBasket(:id, :price, :name, :pic)";
		$stmt = $pdo->prepare($sql);
						
	    $stmt->execute($data);
	    
	}
				
			catch(Exception $e) {
				echo ($e->getMessage());	
				}
				$pdo = null;
				header("Location: getBasket.php");
				exit();

    ?>
