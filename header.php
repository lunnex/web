


<div class="Канцтоварищ">
<a onclick="window.location.href = 'index.php';">Канцтоварищ</a>
</div>
<div class="Магазин_канцелярских_товаров">
<p >Магазин канцелярских товаров</p>
</div>

    
<div class="Knopki">
<button class="Akc" onclick="Scroll1()">Акции</button>
<button class="Hit" onclick="Scroll2()">Хиты продаж</button>
<div style="float:right">
</div>
</div>  
    
<div class="Block3">
    <div class="Block4">

</div>
    
    <div class = "upper-menu">
        
        
            
        <div class = "upper-menu-button-1" onmouseover='show(this)' onmouseout='hide(this)'>
                <a href="#" class = "upper-menu-button-1-text">Каталог товаров</a>
                <div class = "dropped-1">
                    <a href="#" class = "dropped-href">Письменные товары, черчение</a>
                    <a href="#" class = "dropped-href">Папки, системы архивации</a>
                    <a href="#" class = "dropped-href">Офисные принадлежности</a>
                    <a href="#" class = "dropped-href">Бумага для офисной техники</a>
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
                <a href="#" class = "upper-menu-button-3-text">Вакансии</a>
            </div>
            
            <div class = "upper-menu-button-4">
                <a href="#" class = "upper-menu-button-4-text">Сотрудничество</a>
            </div>
            
            <div class = "upper-menu-button-5">
                <a href="#" class = "upper-menu-button-5-text">О нас</a>
            </div>
        
    </div>
