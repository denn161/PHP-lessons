<?php
<?php


class User{
    private ?string $middleName=null;
    private bool $isActive=true;
    private ?string $created;
    private string $lastName;
    private string $sex;
    private string $male;
    private string $email;
    private int $age;
      
    public function __construct(
         private string $firstName,        
       
     ){   
         $format = 'd.m.Y H:i:s';
         $date = new DateTime();
         $formatDate = $date->format($format);
         $this->created= $created??$formatDate;
     
     }   
 
     public function getCreated():string
      {  
         return $this->created;
      }
 
    public function getLastName():string
     {
         return $this->lastName;
     }
     public function getFirstName():string
     {
         return $this->firstName;
     }
 
     public function getMiddleName():string
      {
         return $this->middleName;
      }
 
     public function getEmail():string
     {
         return $this->email;
     }
 
     public function getSex():string
     {
         return $this->sex;
     }
 
     public function getAge():int
     {
         return $this->age;
     }
 
     public function getIsActive():bool
     {
         return $this->isActive;
     }
     
     public function setMiddleName($middleName):self
     {
          $this -> middleName=$middleName;
           return $this;
     } 
 
    public function setIsActive($isActive):self
      {
           $this -> isActive=$isActive;
            return $this;
      }

      public function setLastName(string $name):self
      {
        $this->lastName=$name;
        return $this;
      }

      public function setMale(string $value):self
      {
         $this->male=$male;
         return $this;
      }

      public function setEmail(string $email):self
       {
          $this->email=$email;
           return $this;
       }

       public function setAge(int $value):self
       {
           $this->age=$value;
           return $this;
       }
 }  
 
class Task{
    private string $description;
    private string $dateCreated;
    private string $dateUpdated;
    private string $dateDone;
    private int $priority;
    private bool $isDone;
    private User $user;
    private string $textOfDone;

   
   public function __construct(
      private  string $taskName
    ){
      $date = new DateTime();
      $formatDate=$date->format('d.m.Y H:i:s');
      $this->dateCreated=$formatDate;
    

    }

  public function setDescription( string $text, ?string $dateUpdate=null):self
   {      
        $dateUpdate=$dateUpdate??'d.m.Y';
        $text = $text??'Здесь должно быть описание задачи';
        $this->setDateUpdated($dateUpdate);
        $this->description=$text;
        return $this;

   }

   public function setDateUpdated(string $val):void
    {
        $date = new DateTime();
        $formatDate = $date->format($val);
        $this->dateUpdated=$formatDate;
         
    }
    
    public function markAsDone(string $format):self
    
    {      if($this->isDone){
            $this->setTextOfDone();  
            $this->setDateDone($format);
            $this->setDateUpdated('d.m.Y H:i:s');
        }

           return $this;
         
    }

    public function setIsDone(bool $isDone):self
    { 
        $this->isDone=$isDone;
        return $this;
    }

    public function setTextOfDone(?string $txt=null):self
     {
         $this->textOfDone=$txt??'Задача завершена';
          return $this;
     }

    public function setDateDone( $val):self
    {   
        $date = new DateTime();
        $this->dateDone=$date->format($val);
        return $this;
    }

    public function setPriority(int $number):self
     {   
         
         if($number>0&&$number<=10){
            $this->priority=$number;
          
         }else{
             $this->priority=null;
             echo 'Введите номер приоритетности задачи';
         }

         return $this;
         
       
     } 

     public function getTaskName()
     {
         return $this->taskName;
     }

     public function getDescription():string
     {
         return $this->description;
     }

     public function getDateUpdate():string
     {
         return $this->dateUpdated;
     }

     public function getDateCreated():string
     {
         return $this->dateCreated;
     }

     public function getDateDone():string
     {
         return $this->dateDone;
     }

     public function getPriority():int
      {
         return $this->priority;
      }

      public function getIsDone():bool
     {
         return $this->isDone;
     }

     public function getTextOfDone():string
    {
         return $this->textOfDone;
    }
 }
 


 $user=new User('Denis'); 

 $task = new Task('Сделать задачи по php часть 1 к уроку №5');  
 $task->setDescription('Нужно сделать две задачи, что бы получить 5')
 ->setIsDone(true)->setPriority(7)->markAsDone('07.10.2022 20:37:00');

 
 echo $task->getDateCreated()."\n";
 echo $task->getDateUpdate()."\n";
 echo $task ->getDateDone()."\n";

 



 class Comment{

    private string $author;
    private string $task;
    private string $text;

    
   
    
    public function getAuthor()
    {
        return $this->author;
    }

    public function getTask()
    {
        return $this->task;
    } 
  

    public function getText()
    {
        return $this->text;
    }

   
    public function setText($text):self
    {
        $this->text = $text;

        return $this;
    }

   
    public function setAuthor(User $author):self
    {
        $this->author = $author->getFirstName();

        return $this;
    }
   
    public function setTask(  Task $task):self
    {
        $this->task = $task->getTaskName();

        return $this;
    }
   
  
 } 


 $comment = new Comment();

 $comment->setAuthor($user)->setTask($task)
 ->setText('Не до конца сделал задачи.Не разобрался в статических данных класса');


 class TaskService{
     private  array $tasks=[];

     public  function addComment(Comment $comment):void
      {
       $this->tasks[$comment->getTask()]=$comment->getText();
         
      }

   public  function getTasks():array
       {
         return $this->tasks;
       }
 }
  
  $taskService=new TaskService();
  $taskService->addComment($comment);
  var_dump($taskService->getTasks());

  
 





 


 
 

 

 

 
 


   
  

