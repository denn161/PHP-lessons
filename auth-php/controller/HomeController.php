<?php
 
 $pageHeader = 'Добро пожаловать';

 
  $auth=isset($_SESSION['user']);  

  

 
   
   //  $userName = isset($_POST['userName'])&&!empty($_POST['userName'])? $_POST['userName']:null;    

//  $userName=null;

//  if(isset($_SESSION['userName'])){
//      $userName=$_SESSION['userName'];   
//  }elseif(isset($_REQUEST['userName'])&&!empty($_REQUEST['userName'])){
//        $userName = $_REQUEST['userName'];
//        $_SESSION['userName']=$userName;
//  }
 



 

  


//  if(isset($_GET['action']) && $_GET['action']==='logout'){
//     setcookie('userName','',-1);
//     unset($_COOKIE['userName']);
// }

//  if($userName){
//      setcookie('userName',$userName,time()+60*60*24);
//  }

//  if(isset($_COOKIE['userName'])){
//     setcookie('userName',null,-1);
//  }

 




 require_once './views/home.php';

 
