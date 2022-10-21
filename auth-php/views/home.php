<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">    
    <title>Главная</title>     
</head>
<body>
<header class='header'>
 <?php if ($auth) : ?>
    <a href='/logout'
     class="header__btn">
       Выйти
    </a>
   <?php else : ?>
    <a href='/auth' class='header__btn'>
        Войти
   </a> 
   <?php endif ?>   
 </header>  
    
</body>
</html>


