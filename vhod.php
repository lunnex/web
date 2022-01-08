<html>

<html>
<head>
    
<?php

	require_once "head.php";
	?>
</head>
	<body>
	<?php
	require_once "header.php";
	?>
	<?php
	require_once "menu-aside.php";?>
	
	
<div class = "vhod">
    <h3 style="padding-top:15px">Вход</h3>
    <form action = "entry.php", method = "post">
    <p>Логин <input type="text" name="log"></p>
    <p>Пароль <input type="password" name="password"></p>
    
    <?php 
		if($_SESSION["isMistaken"] == 1){
			echo '<p class = "errorName">Неверный логин или пароль</p>';
			}
    ?>
    <p><input type="submit" name="in" value="Войти"></p>
   </form>
</div>

<?php
	require_once "footer.php";
	?>
	</body>
	</html>

