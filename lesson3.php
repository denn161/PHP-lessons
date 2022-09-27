<?php


//Task 1

$arr1= [1,2,3,20,45,16,18,21,10,15,7];
$arr2= [12,13,14,17,21,23,24,42,31,55,22];

$result = [];
  
 for($index=0;$index<count($arr1);$index++){
    array_push($result,$arr1[$index]*$arr2[$index]);
 }

 print_r($result);

 //Task2

  $name=readline('Добрый день! Как вас зовут?');
  $birthDay = readline("Когда у вас день рождения?Введите дату в формате '2022-09-26'");
  
  $currentData=date("Y-m-d");

  if($currentData===$birthDay){

    echo "Здравствуйте, $name!!!Мы узнали, что у вас сегодня День Рождения! Поздравляем Вас с этим Денём!Желаем счастья,здоровья,удачи во всем!!!";
  }else{
     
   echo "У нас для Вас нет ничего!Приходите в другой раз!!!";
  }
   

  //Task 3

  $compnts1=['счастья', 'здоровья','терпения'];

  $compnts2 = ['бесконечного','крепкого', 'космического','безудержного'];

  $resultArray = [];

  $name1 = readline("Как Вас зовут?");
   
  $limit=3;

  for($i=0;$i<$limit;$i++){
    array_push($resultArray,$compnts2[array_rand($compnts2)]);
    array_push($resultArray,$compnts1[array_rand($compnts1)]); 
    
  }

  $lastEl= array_pop($resultArray);
  $prevEl = array_pop($resultArray);

  
   $congratulation="Дорогой $name1!!!Поздравляю тебя и желаю тебе " .$resultArray[0] . ' ' .$resultArray[1] .',' .$resultArray[2] . ' ' .$resultArray[3] . " и " . $prevEl . " " .$lastEl; 

   echo $congratulation;


   //Task 4

   $students = [
      'ИТ20' => [
           'Иванов Иван' => 5,
           'Кириллов Кирилл' => 3,
           'Завидов Петр' => 4,
           'Петрова Елена' =>5,
           'Забияка Яна'=>2
      ],

      'БАП20' => [
          'Антонов Антон'  =>  4,
          'Сидоров Евгений'=> 3,
          'Попова Светлана'=> 5,
          'Мельников Александр' => 4
      ]
   ];   
   
  
    
   foreach($students as $groupName=>$teamMembers){            
          if($groupName==='ИТ20'){
          $mediumIt =(int)(array_sum($teamMembers)/count($teamMembers));  
          $students[$groupName]['IT']=$mediumIt;
          
          echo "Команда под названием $groupName имеет среднюю  оценку по потоку : $mediumIt\n";                   
               
          }
          if($groupName==='БАП20'){
             $mediumBAP =(int)(array_sum($teamMembers)/count($teamMembers));    
             $students[$groupName]['BAP']=$mediumBAP;                    
             echo "Команда под названием $groupName имеет среднюю оценку по потоку: $mediumBAP\n";          
             
                
          }

         foreach($teamMembers as $studentName=>$value){
                if($value<3){
                   echo "Студент $studentName отчислен из потока\n";
                }
         }         
         

   } 
   

     if( $students['ИТ20']['IT']>$students['БАП20']['BAP']){
      echo 'ИТ20';
     }else{
      echo 'БАП20';
     }
