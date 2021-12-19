<div class = "izm_tovar">
    <h3 style="padding-top:15px">Информация о товаре</h3>
    <form class = "form" action = 'changeGood.php' method = 'post'>
		
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
    
    <p>Картинка товара <input type="text" class = "pic" name="pic"
    <?php
    echo 'value = ';
    echo $_POST['pic'];
    echo '>';
    ?>
    <p class = "errorPic"></p>
    </p>
    
    <input type="hidden" name="id"
    <?php
    echo 'value = ';
    echo $_POST['id'];
    echo '>';
    ?>
    
    
    
    <input class = "acceptBtn" type="submit" value="Готово">
    
   </form>

</div>
<script src="validator.js"></script>
