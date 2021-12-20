<div>
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
			
			$data = array(':name' => $_POST["name"],
							':name' => $_POST["name"],
							':price' => $_POST["price"],
							':pic' => $_POST["pic"],
							':quantity' => $_POST["quantity"],
							':numOfGroup' => $_POST["typeOfGood"]);
			
				
		$pdo = new PDO("mysql:host = $host; dbname=$db; charset=$charset", $user, $password);
		$sql = "call addGood(:name, :price, :quantity, :pic, :numOfGroup)";
		$stmt = $pdo->prepare($sql);
						
	    $stmt->execute($data);
	    
	}
				
			catch(Exception $e) {
				echo ($e->getMessage());	
				}
				$pdo = null;
				header("Location: index.php");
				exit();

    ?>
    </div>
