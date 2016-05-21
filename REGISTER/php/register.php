<?php
session_start();
 require_once 'dbconfig.php';
 if($_POST)
 {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_password = $_POST['password'];
    $user_email = $_POST['user_email'];
    try
    {
       $stmt = $db_con->prepare("SELECT * FROM corpusers WHERE EMAIL=:email");
       $stmt->execute(array(":email"=>$user_email));
       $count = $stmt->rowCount();
       if($count==0) {

             $stmt = $db_con->prepare("INSERT INTO corpusers(FNAME,LNAME,EMAIL,PASS) VALUES(:fname,:lname,:email, :pass)");

             $stmt->bindParam(":fname",$first_name);
             $stmt->bindParam(":lname",$last_name);
             $stmt->bindParam(":email",$user_email);
             $stmt->bindParam(":pass",$user_password);


              if($stmt->execute())
              {
                  $stmt = $db_con->prepare("SELECT * FROM corpusers WHERE EMAIL=:email");
                  $stmt->execute(array(":email"=>$user_email));
                  $row = $stmt->fetch(PDO::FETCH_ASSOC);
                  $_SESSION['USER_ID'] = $row['USER_ID'];
                   echo "Registered successfully".print_r($row).$_SESSION['USER_ID'];
              }
              else{
                 echo "Query could not execute !";
              }

             }
       else{
              echo "Existing email";
       }

      }
      catch(PDOException $e){
           echo $e->getMessage();
      }
   }


?>
