<?php
include "db_conn.php";
 
// print_r($_POST);
 if(isset($_POST['u_name']) and isset($_POST['email_add']) and isset($_POST['pswd'])  and isset($_POST['phone'])){
   $name = $_POST['u_name'];
   $email_add = $_POST['email_add'];
   $pswd = $_POST['pswd'];
   $phone = $_POST['phone'];
    $query ="INSERT INTO `signup`( `name`, `email`, `password`, `phone`) VALUES ('$name', '$email_add', '$pswd' ,'$phone')"; 
      if ($conn->query($query) === TRUE) {
           $result = true;
           include "login.php";
         } else {
           echo "Error: " . $query . "<br>" . $conn->error;
           $result = false;
           header("Location: index.php");
           exit();
         }
         $conn->close();
        }


 ?>