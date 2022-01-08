
<?php 
session_start();
?>

<div class="Канцтоварищ">
<a onclick="window.location.href = 'index.php';">Канцтоварищ</a>
</div>
<div class="Магазин_канцелярских_товаров">
<p >Магазин канцелярских товаров</p>
<p class="ВходРегистрация"> <img src="Картинки\1.png" style=" width: 20px; height: 20px; margin-right: 10px;">
<?php
if ($_SESSION["isAuthorized"] == 0  ){
	echo '<button class = "auth" onclick="window.location.href = ';
	echo "'vhod.php'";
	echo ';">Вход</button>';
	
	echo '<button class = "auth" onclick="window.location.href =';
	echo "'regist.php';";
	echo '">Регистрация</button></p>';
}
else{
	echo '<button class = "auth" formaction = "exit.php" onclick="window.location.href = ';
	echo "'exit.php'";
	echo ';">Выход</button>';
}

?>
</div>

    
<div class="Knopki">

<button formaction = "getBasket.php" onclick="window.location.href = 'getBasket.php';" class="Hit">Корзина</button>

</div>  
    
<div class="Block3">
    <div class="Block4">

</div>
    
    <div class = "upper-menu">
        
        
            
        <div class = "upper-menu-button-1" onmouseover='show(this)' onmouseout='hide(this)'>
                <a href="#" class = "upper-menu-button-1-text">Каталог товаров</a>
                <div class = "dropped-1">
                    <a href="catalog1.php" class = "dropped-href" >Писменные товары, черчение</a>
					<a href="catalog2.php" class = "dropped-href" >Папки, системы архивации</a>
					<a href="catalog3.php" class = "dropped-href" >Творчество, хобби</a>
					<a href="catalog4.php" class = "dropped-href" >Офисные принадлежности</a>
					<a href="catalog5.php" class = "dropped-href" >Товары для учебы</a>
					<a href="catalog6.php" class = "dropped-href" >Бумага для офисной техники</a>
                </div>
            </div>
            
            <div class = "upper-menu-button-2" onmouseover='show(this)' onmouseout='hide(this)'>
                <a href="#" class = "upper-menu-button-2-text">Адреса магазинов</a>
                <div class = "dropped-2">
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
				
				$query = $pdo -> query('call getFilials()');
				
				while($row = $query->fetch()){
					
                    echo '<a href="#" class = "dropped-href">';
                    echo $row['address']; 
                    echo '</a>';}
                    $pdo = null;
                    ?>
                </div>
            </div>
            
            <div class = "upper-menu-button-3">
                <a href="vacancy.php" class = "upper-menu-button-3-text">Вакансии</a>
            </div>
            
            <div class = "upper-menu-button-4">
                <a href="collaboration.php" class = "upper-menu-button-4-text">Сотрудничество</a>
            </div>
            
            <div class = "upper-menu-button-5">
                <a href="aboutUs.php" class = "upper-menu-button-5-text">О нас</a>
            </div>
        
    </div>
