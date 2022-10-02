
<?php
//Task1

$arr1=[24,12,36,16,11,33,13,5,6,7,21];


function percent($value):string   // вовращаем строковые значения
{
   if($value%2===0){
      return "четное:$value";
   }else{
      return "нечетное:$value";
   }

}

$result = array_map(percent,$arr1);

print_r($result);

//task2  Сделал черз цикл for. Можно конечно через while, foreach

function getNumbers($array){
    $max=null;
    $min=null;
    $avg;
    $total=0;

   for($i=0;$i<count($array);$i++){           
       if($array[$i]>$max||$max===null){
           $max=$array[$i];
       }
       if($array[$i]<$min||$min===null){
           $min=$array[$i];
       }

     $total+=$array[$i];
          
   }  

  $avg=(int)($total/count($array));

  return ["Максимальное значение:$max","Миниамльное занчение:$min","Срденее значение:$avg"];   

 }

 $results=getNumbers($arr1);

 print_r($results);

 // Task3 Доделаю позже после просмотра вэбинара по рекурсии, хочу сам допилить))