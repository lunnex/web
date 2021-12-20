<div class = "izm_tovar">
    <h3 style="padding-top:15px">Информация о товаре</h3>
    <form class = "form" action = 'addGood.php' method = 'post'>
		
    <p>Название товара <input type="text" class = "name" name="name"
    <?php
    echo 'value = ';
    echo $_POST['name'];
    echo '>';
    ?>
    <p class = "errorName"></p>
    </p>
    
    <p>Цена товара <input type="text" class = "price" name="price"
    <?php
    echo 'value = ';
    echo $_POST['price'];
    echo '>';
    ?>
    <p class = "errorPrice"></p>
    </p>
    
    <p>Количество товара <input type="text" class = "quantity" name="quantity"
    <?php
    echo 'value = ';
    echo $_POST['quantity'];
    echo '>';
    ?>
    <p class = "errorQuantity"></p>
    </p>
    
    <p>Картинка товара <input type="file" class = "pic" name="pic"
    <?php
    echo 'value = ';
    echo $_POST['pic'];
    echo '>';
    ?>
    <p class = "errorPic"></p>
    </p>
    
    <select name = "typeOfGood">
    <option disabled>Тип товара</option>
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
				
				$query = $pdo -> query('call getGroups()');
				
				
				while($row = $query->fetch()){
					echo '<option value = "';
					echo $row['id'];
					echo '">';
					echo $row['nameOfGroup'];
					echo '</option>';
				}
				$pdo = null;
				?>
    </select>
    
    
    
    
    <input class = "acceptBtn" type="submit" value="Готово">
   </form>
</div>
<script src="validator.js"></script>
