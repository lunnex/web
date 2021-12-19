
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
				
				$query = $pdo -> query('call getGood()');
				
				while($row = $query->fetch()){
					
					echo '<div class = "good">';
					echo '<form method = "post" action = "tovar.php">';
					echo '<img src = "';
					echo $row['pic'];
					echo '">';
					echo '<p>';
					echo $row['name'];
					echo '</p>';
					echo 'Кол-во';
					echo '<input type="text" id="col" size="1px" placeholder="1" value =';
					echo $row['quantity'];
					echo '>';
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
					echo '<input type = "hidden" name = "quantity"  value = ';
					echo $row['quantity'];
					echo '>';
					echo '<input type = "hidden" name = "pic"  value = ';
					echo $row['pic'];
					echo '>';
					
					echo '<button formaction = "deleteGood.php" type = "submit" class = "add-in-purchase-list">Удалить</button>
					<button type = "submit" class = "change" onclick="window.location.href = "index.php";">Изменить</button>';
					
					echo '</form>';
					echo '</div>';
					
					$pdo = null;
					
				}
?>
		
        
        
        <p><input type="button" class="dob" value="Добавить" onclick="window.location.href = 'indexForAdding.php';"></p>
    </div>
</div>
