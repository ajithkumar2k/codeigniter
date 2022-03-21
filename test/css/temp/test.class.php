<?php


/// this is a static  in oop ....
// class person {
//     public $name;
//     public $age;
//     private $color;
//     public static $voteage = "this is from parent";

//     const PLACE = " i'm form chennai.";

//     public static function setage($age){
//         self::$voteage = $age;
//     }

    
/// this is constructor....
//     public function __construct($name,$age,$color){
//         $this->name = $name;
//         $this->age = $age;
//         $this->color = $color;
//     }

//     public function setname($name){
//         $this->name =$name;
//     }
//     public function getname(){
//         return $this->name;
//     }
//     //public function 
// }
 

/// this is a inheritance....
// we have to inhert one class to another class to use keyword "extends".
///class person {
//  public $place = " i am form chennai ";
//  const PLACE = " This is a const in oops ";
//}
// class place extends person {
//     public static $date = 2022;

//     public static function dateplace(){
//         echo self::$date;
//         echo "<br>";
//         echo person::PLACE;
//     }
// }
///this is a abstract class....
///abstract class must have declaration name should be abstract.
/// all decleration should be in class.
// abstract class parentclass {
//     abstract public function method1();    //this line start example..
//     abstract public function method2($str);
//     abstract public function method3() : string ;
// }

// class child extends parentclass {
//     public function method1(){
//         echo " this is a method 1 from child class ";
//     }
//     public function method2($str){
//         echo $str;
//     }
//     public function method3() : string {
//         $a = "this is a method 3 from child class ";
//         return $a;
//     }
// }


/// this is a interface....
/// in interface we should must implement keyword.
/// interface dont accept properties
/// all declaration methods must be specify in class. otherwise it shows error.
// interface method1 {
//     //public $name = "ajith kumar";
//     public function print();
//     public function print1($str);
//     public function print2() : string;
// }

// class parent22 implements method1{
//     public function print(){
//         echo " printing from parent class";
//     }
//     public function print1($str){
//         echo $str ." this is a interface concept";
//     }
    // public function print2(): string{
    //     return " this is returning from print2";
    // }
//}

/// this is a trait 
// in this we can use multiple traits in class "use" is the keyword
// which decelarion we want that sjould be we can use no erros should be displayed.
// trait user {
//     public function name($name){
//         echo $name. " this is a name from  trait";
//     }
//     public function dept($dept){
//         echo $dept." this is a dept form trait ";
//     }
// }

// trait admin {
//     public function place($place){
//         echo $place. " this is a name from  admin";
//     }
//     public function date($date){
//         echo $date." this is a dept form admin ";
//     }

// }

// class person{
//     use user,admin ;
// }