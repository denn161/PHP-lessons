<?php
 session_start();  



 $router=require './routes/router.php';
//  $controller = $_GET['controller']??'home';
 
 require_once $router[$_SERVER['REQUEST_URI']];


 

 

