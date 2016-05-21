<?php
    require_once '../default/php/dbconfig.php';
    require_once '../default/php/convar.php';
    require_once 'php/getAllOffers.php';
    $pageDes = "Dashboard";
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../default/css/header.css">
    <link rel="stylesheet" type="text/css" href="../default/css/mainbody.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Bounty Office</title>
</head>

<body>
    
    <?php require '../default/pageparts/topBar.php'; 
    ?> 
    
    <div id="contents" class="row container-fluid">
        <div class="col-md-3">
            
        </div> 
         <!-- 
        <div id="alljoboffers" class="col-md-6 ">
            <ul class="act_container">            
                <li class="job_item">
                                  
                                        
                                        <div class="job_info row">
                                            <form action="php/processreservation.php" method="post">
                                            <div class="description col-md-6">
                                                <h2 class="text actname">Junior Software engineer</h2>
                                                    <label class="lbltype">Category:</label>
                                                    <input readonly type="text" value="IT" class="jobinfotext">
                                                    <br>
                                                    <label class="lbltype">Area:</label>
                                                    <input readonly type="text" value="Best" class="jobinfotext">
                                                    <br>
                                                    <label class="lbltype">Language:</label>
                                                    <input readonly type="text" value="French" class="jobinfotext">

                                                </p>
                                            </div>
                                            <div id="Rewarddiv" class="col-md-3 col-ms-offset-2">
                                                    
                                                    <h1 class="reward">&euro; 800,- </h1>
                                                    
                                            
                                                    <input readonly class="secret" type="text" name="id" value="123">
                                                <div class="viewbtn">
                                                    <!-- <h3 class="text resbtntext">RESERVE</h3> 
                                                    <button type="submit" class="btn text resbtntext">View</button>
                                                </div>
                                            </div>

                                        
                                        
                                        </form>
                                    </div>  
                                    

                    </li>
                </ul>
            </div>
            -->
            <div id="alljoboffers" class="col-md-6 ">
            <ul class="act_container">
                        <?php 
                            if(count($jobs)!=0)
                            {
                                for ($i=0; $i < count($jobs); $i++) {

                                echo 
                                    '
                                <li class="job_item">
                                  
                                        
                                        <div class="job_info row">
                                            <form action="php/viewOffer.php" method="post">
                                            <div class="description col-md-6">
                                                <h2 class="text actname">'.$jobs[$i].'</h2>
                                                    <label class="lbltype">Category:</label>
                                                    <input readonly type="text" value="'.$jobs[$i+=1].'" class="jobinfotext">
                                                    <br>
                                                    <label class="lbltype">Area:</label>
                                                    <input readonly type="text" value="'.$jobs[$i+=1].'" class="jobinfotext">
                                                    <br>
                                                    <label class="lbltype">Language:</label>
                                                    <input readonly type="text" value="'.$jobs[$i+=1].'" class="jobinfotext">

                                                </p>
                                            </div>
                                            <div id="Rewarddiv" class="col-md-3 col-ms-offset-2">
                                                    
                                                    <h1 class="reward">&euro; '.$jobs[$i+=1].',- </h1>
                                                    
                                            
                                                    <input readonly class="secret" type="text" name="id" value="'.$jobs[$i+=1].'">
                                                <div class="viewbtn">
                                                    <!-- <h3 class="text resbtntext">RESERVE</h3> -->
                                                    <button type="submit" class="btn text resbtntext">View</button>
                                                </div>
                                            </div>

                                        
                                        
                                        </form>
                                    </div>  
                                    

                    </li>';
                                }
                                
                            }
                            else
                            {
                                
                            }
                            
                        ?>
                        
                        
                    </ul>
              
           
                </div>
        
    </div>
    
    
    
</body>
</html>