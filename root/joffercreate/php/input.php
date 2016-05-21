<?php
session_start();
require_once '../../default/php/dbconfig.php';
if($_POST) {
    $job_title = $_POST['job_title'];
    $category = $_POST['category'];
    $area = $_POST['area'];
    $skills = $_POST['skills'];
    $projdesc = $_POST['project_description'];
    $lang = $_POST['lang'];
    $reward = $_POST['reward'];
    $exp = $_POST['exp'];
    $edu = $_POST['edu'];
    
    
    
    
    
    try{
    
    $stmt = $db_con->prepare("INSERT INTO joboffer(job_title,category,area,skills,projdesc,language,reward,experience,education) VALUES(:jtitle,:cat,:area,:skills,:projdesc,:lang,:reward,:exp,:edu)");
        
         $stmt->bindParam(":jtitle",$job_title);
             $stmt->bindParam(":cat",$category);
             $stmt->bindParam(":area",$area);
             $stmt->bindParam(":skills",$skills);
              $stmt->bindParam(":projdesc",$projdesc);
             $stmt->bindParam(":lang",$lang);
             $stmt->bindParam(":reward",$reward);
             $stmt->bindParam(":exp",$exp);
             $stmt->bindParam(":edu",$edu);
    if($stmt->execute()) {
        echo "Successfully added a new job";
         header('Location: ../../dashboard');  
    }
    else{
        echo "Query could not execute";
    }
    }
    catch(PDOException $e){
           echo $e->getMessage();
      }
      
   

}