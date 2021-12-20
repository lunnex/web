<div class = "total-goods-container"
    <h3>Новинки</h3>
    <div class = "goods-container">
			<?php
			ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
			//echo $_SESSION["isAdmin"];
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
				
				$query = $pdo -> query('select goods.`id`, `name`, `price`, `pic`, `quantity`, `nameOfGroup`, groupOfGood.`id` as `numOfGroup`
										from goods join groupOfGood on goods.group = groupOfGood.id 
										where groupOfGood.`id` = 6');
				
				//echo $_SESSION['isAdmin'];
				
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
					echo '<input type = "hidden" name = "group"  value = ';
					echo $row['numOfGroup'];
					echo '>';
				
					
					if ($_SESSION['isAdmin'] == 1 ){
						echo '<button formaction = "deleteGood.php" type = "submit" class = "add-in-purchase-list">Удалить</button>
					<button type = "submit" class = "change" onclick="window.location.href = "index.php";">Изменить</button>';
					}
					
					echo '<button formaction = "addGoodToBasket.php" type = "submit" class = "change" >В корзину</button>';
					
					echo '</form>';
					echo '</div>';
					
					$pdo = null;
					
				}
?>
		
        
        <?php
        if ($_SESSION['isAdmin'] == 1 ){
        echo '<p><input type="button" class="dob" value="Добавить" onclick="window.location.href = ';
        echo "indexForAdding.php'";
        echo ';"></p>';}
        ?>
    </div>
</div>
