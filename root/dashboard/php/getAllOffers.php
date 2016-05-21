<?php

    $stmt=$db_con->prepare( 'SELECT j.job_title, j.category, 
                                j.area, j.language,
                                j.reward, j.job_id
                                
                          FROM joboffer j;');

    $stmt->execute();
    $jobs = array();
    if($stmt->rowCount() > 0){
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            
            array_push($jobs,$job_title,$category,$area,$language,$reward,$job_id);
        }
    }
?>
