<?php
session_start();
    $stmt=$db_con->prepare( 'SELECT a.CANDIDATE_DESCRIPTION
                           FROM application a
                           where a.JOBOFFER_ID = :user_id;');


    $stmt->bindParam(":user_id",$_SESSION['id'];
    if($stmt->execute())
    {


    if($stmt->rowCount() > 0){
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
        }
    }
    }
?>
