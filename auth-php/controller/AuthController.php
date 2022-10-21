<?php

require_once './models/UserProvider.php'; 

 $userName = isset($_POST['userName'])&&!empty($_POST['userName'])?$_POST['userName']:null;
 $password = isset($_POST['password'])&&!empty($_POST['password'])?$_POST['password']:null;

$error=null;

$userProvider=new UserProvider();

$user = $userProvider->getByUserNameAndPassword($userName,$password);

if(!$user){
    $error="Пользователь с указанными данными не найден";
}else{
     $_SESSION['user']=$user;
   
}


require_once './views/auth.php';