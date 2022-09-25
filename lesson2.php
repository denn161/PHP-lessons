 
<?php
 //Task 1

 $a=1941;
 $b=1939;
 $c=1945;

 echo "В каком году произошла Вторая Мировая Война?Варинаты ответов:
   $a,$b,$c 
 ";

 $question =(int)readline('Ввидите правильный вариант ответа ввиде года, например "1946"');

 if($question===$a || $question===$c){
    echo "Это не правильный ответ.Спасибо за игру\n";
}elseif($question===$b){
   echo "Это правильный ответ.Спасибо за игру\n";
}else{
   (int)readline('В каком году произошла вторая мировая война?');
} 

//Task 2
$iterator = (int)readline("Введите скольк задач вы запланировали на сегодня в формате 1,2,3 и т.д...");
$taskNames='';
$timeTaskCount='';
$totalTaskTimeCount=0;

for($i=1;$i<=$iterator;$i++){
     $taskName=readline("Какая задача стоит перед вами сегодня под №$i?\n");    
     $timeTaskCount=(int)readline("Сколько примерно времени эта задача займет?\n");
     $taskNames.="-$taskName($timeTaskCount ч)\n";
     $totalTaskTimeCount+=$timeTaskCount;    
}
echo "Сегодня у вас запланировано $iterator приоритетных задачи на день:
     $taskNames
Примерное время выполнения плана = $totalTaskTimeCount ч  
";

//Task 3

$numberFinger=(int) readline("Введите номер от 1 до 5. Программа скажет вам что запалец находится по этим номером");

  while($numberFinger<=0){
  $numberFinger=(int)readline("Введите номер пальца от 1 до 5, начиная с большого.Программа скажет вам что за палец находится по этим номером");

  }

  switch ($numberFinger) {
    case 1:
    echo "Большой палец";
    break;
    case 2:
    echo "Указательный палец";
    break;
    case 3:
    echo "Средний палец";
    break;
    case 4:
    echo "Безимянный палец";
    break;
    case 5:
    echo "Мезинец";
    break;    
         default:
         echo "Такого пальца нет";
        break;
  }



 







//  switch ($question) {
//     case $question===$a||$question===$c:
//         echo "Это не правильный ответ.Спасибо за игру";
//         break;
//         case $question===$b:
//             echo "Это правильный ответ.Спасибо за игру";
//             break;
//     default:
//     (int)readline('В каком году произошла вторая мировая война?');
       
//  }
  