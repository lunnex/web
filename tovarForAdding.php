<div class = "izm_tovar">
    <h3 style="padding-top:15px">Информация о товаре</h3>
    <form action = 'addGood.php' method = 'post'>
		
    <p>Название товара <input type="text" name="name"
    <?php
    echo 'value = ';
    echo $_POST['name'];
    echo '>';
    ?>
    </p>
    
    <p>Цена товара <input type="text" name="price"
    <?php
    echo 'value = ';
    echo $_POST['price'];
    echo '>';
    ?>
    </p>
    
    <p>Количество товара <input type="text" name="quantity"
    <?php
    echo 'value = ';
    echo $_POST['quantity'];
    echo '>';
    ?>
    </p>
    
    <p>Картинка товара <input type="text" name="pic"
    <?php
    echo 'value = ';
    echo $_POST['pic'];
    echo '>';
    ?>
    </p>
    
    
    
    
    <input type="submit" value="Готово">
   </form>
</div>
