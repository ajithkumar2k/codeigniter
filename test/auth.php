    <?php 
    session_start(); 
     include "db_conn.php";   
    //   $pswd="";
     if (isset($_POST['email_add']) && isset($_POST['pswd'])) {
    $email_add = $_POST['email_add'];
    $pswd      = $_POST['pswd'];
    
        
    $query = "SELECT * FROM `signup`where `email` = '$email_add' AND `password` = '$pswd'";
            $result = $conn->query($query);
            $response["count"]=$result->num_rows;
        //  $row = mysqli_fetch_assoc($result);
        //  print_r ($row);
        // else{
        //     $response["count"]=0;
        // }
         if ($result->num_rows  > 0)
          {
            $_SESSION['email']=$_POST['email_add'];
             $result = true;
             include "home.php";
             
            }
            else {
                
               header("Location: login_failed.php");
            
                
                exit();
               
            }
       }

   
    ?>