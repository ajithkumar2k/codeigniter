<?php
include "test.class.php";
?>
<html>
    <head>
</head>
<body>
    <?php 


    //  $person1 = new person("ak","17","white");
    //  echo person1->name;
    //  echo $person1->age;
    // echo person::$voteage;
    //  echo person::setage(80);
    //  echo person::$voteage;
   //echo person::PLACE;
    // $person1->setname("ajith");
    // echo $person1->getname();

    // echo place::dateplace();

    // $test = new child();
    // $test->method1();
    // echo "<br>";
    // $test->method2("ajith kumar ");
    // echo "<br>";
    // echo $test->method3();

    // $obj = new parent22();
    // $obj->print();
    // echo "<br>";
    // $obj->print1("welcome");
    // echo "<br>";
    // echo $obj->print2();

    // $obj = new person();
    // $obj->name("ajith");
    // echo "<br>";
    // $obj->dept("CS");
    // echo "<br>";
    // $obj->place("chennai");
    // echo "<br>";
    // $obj->date("21.03.2022");

    ///cookies

    echo "<h2> cookies</h2>";
    setcookie("person",'ajith kumar',time()+60*1,'/test/css/temp','localhost',true);
    echo $_COOKIE["person"];
    ?>

</body>