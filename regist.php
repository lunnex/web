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

<div class = "regist">
    <h3 style="padding-top:15px">Регистрация</h3>
    <form action = "makeNewUser.php" class = "form" method = "post">
    <p>Придумайте логин <input type="text" class = "log" name="log"></p>
    <p class = "errorLog"></p>
    <p>Придумайте пароль <input type="password" class = "pass1" name="password1"></p>
    <p>Повторите пароль <input type="password" class = "pass2" name="password2"></p>
    <p class = "errorPass"></p>
    
    
    <?php 
     
		if($_SESSION["isAlreadyExists"] == 1){
			echo '<p class = "errorMsg">Пользователь с таким именем уже существует</p>';
			$_SESSION["isAlreadyExists"] = 0;
			}
    ?>
    
    <p><input type="submit" class = "reg" name="reg" value="Зарегистрироваться"></p>
   </form>
</div>
<script src = "regValidat.js"></script>

<?php
	require_once "footer.php";
	?>
	</body>
	
	</html>
