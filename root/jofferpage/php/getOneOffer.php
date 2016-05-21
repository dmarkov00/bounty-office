<?php
    $stmt=$db_con->prepare( 'SELECT j.job_title, j.category, 
                                j.area, j.language,
                                j.skills,
                                j.reward, j.job_id,
                                j.experience, j.education,
                                j.projdesc
                                
                          FROM joboffer j
                          where j.job_id = :id;');

    $stmt->execute([
            ':id' => $_SESSION['id'],
        ]);
    $jobofdesc = array();
    if($stmt->rowCount() > 0){
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            
            array_push($jobofdesc,$job_title,$category,$area,$language,$skills,$reward,$job_id,$experience,$education,$projdesc);
        }
    }
?>
