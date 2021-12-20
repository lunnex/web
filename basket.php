<div class = "total-goods-container"
    <h3>Новинки</h3>
    <div class = "goods-container">
			<?php
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
				
				$query = $pdo -> query('call getBasket()');
				
				while($row = $query->fetch()){
					
					echo '<div class = "good">';
					echo '<form method = "post" action = "tovar.php">';
					echo '<img src = "';
					echo $row['pic'];
					echo '">';
					echo '<p>';
					echo $row['name'];
					echo '</p>';
					echo '<p id="dengi">';
					echo $row['price'];
					echo 'руб</p>';
					
					
					
					echo '<input type = "hidden" name = "id" value = ';
					echo $row['id'];
					echo '>';
					echo '<input type = "hidden" name = "name" value = ';
					echo $row['name'];
					echo '>';
					echo '<input type = "hidden" name = "price" value = ';
					echo $row['price'];
					echo '>';
					echo '<input type = "hidden" name = "pic"  value = ';
					echo $row['pic'];
					echo '>';
					
					echo '<button formaction = "deleteGoodFromBasket.php" type = "submit" class = "add-in-purchase-list">Удалить</button>';
					
					echo '</form>';
					echo '</div>';
					
					$pdo = null;
					
				}
?>
		
        

    </div>
</div>
