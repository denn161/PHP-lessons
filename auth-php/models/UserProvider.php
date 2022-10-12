<?php

require_once 'User.php';

class UserProvider{

   private array $accounts = [
       'denn161'=>'liebeqwerasdf'

   ];

 public function getByUserNameAndPassword(?string $userName=null,?string $password=null):?User
 {

       $expectedPassword = $this->accounts[$userName]??null;

       if($expectedPassword===$password){
           return new User($userName);
           
       }else{
          return null;
       }

   }

}