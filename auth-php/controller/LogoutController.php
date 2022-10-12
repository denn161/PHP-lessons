<?php

 
$auth=isset($_SESSION['user']);

if($auth){
     session_destroy();
}




require_once './views/home.php';