
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
   // Сделал через две функции, одна распас массива, другая проверку есть ли элемент в массиве

 $box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
 ];

 $box1=['Книга','Тетрадь','Папка',['Обложка','Ручка','Карандаш',['Бумага','Компьютер','Стол']]];


 function recArray($arr):array
  {     
      $result1=[];
      foreach($arr as $key=>$value){
             if(is_array($value)){
             array_push($result1,...recArray($value));
             } else{

                array_push($result1,$value);
             } 
      }

      return $result1;

  }

  function isElementInArray($arr2,$keyName):bool
  {
     $result=recArray($arr2);

     return in_array($keyName,$result)? true: false;

  }

  var_dump(isElementInArray($box,"Книга"));

  
   
   

  
 