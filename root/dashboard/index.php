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
        
        <div id="alljoboffers" class="col-md-8 col-md-offset-3">
            <ul class="act_container">            
                <li class="job_item">
                                    
                                        <form action="php/processreservation.php" method="post">
                                        <div class="job_info row">
                                            
                                            <div class="description col-md-6">
                                                <h3 class="text actname">Junior Software engineer</h3>
                                                    <p class="text desc category">
                                                        IT 
                                                    </p>
                                                    <p class="text tinyline area">
                                                        Area: Best
                                                    </p>

                                                    <p class="text tinyline language">
                                                        Language: French

                                                </p>
                                            </div>
                                                <div id="Reward" class="col-md-3 col-ms-offset-2">
                                                    <h3 class="reward">800</h3>
                                                 
                                            
                                                <input readonly class="secret" type="text" name="id" value="123">
                                                    <div class="reservebtn">
                                                    <!-- <h3 class="text resbtntext">RESERVE</h3> -->
                                                    <button type="submit" class="btn text resbtntext">RESERVE</button>
                                                </div>
                                            </div>

                                        
                                        
                                        </form>
                                    </div>  
                                    

                    </li>
                </ul>
            </div>
            <!--
            <ul class="act_container">
                        <?php 
//                            
//                            if(count($jobs)!=0)
//                            {
//                                for ($i=0; $i < count($jobs); $i++) {
//
//                                echo 
//                                    '
//                                <li class="job_item">
//                                    <div class="job">
//                                        <form action="php/processreservation.php" method="post">
//                                        <div class="job_info">
//                                            <h3 class="text actname">'.$jobs[$i]./*the name 0 5*/'</h3>
//                                            <div class="description">
//                                                    <p class="text desc category">
//                                                        '.$jobs[$i+=1]./*description 1 */' 
//                                                    </p>
//                                                    <p class="text tinyline area">
//                                                        Area: '.$jobs[$i+=1]./*ID 2 ..*/'
//                                                    </p>
//
//                                                    <p class="text tinyline language">
//                                                        Language: '.$jobs[$i+=1]./*places 3*/'
//
//                                                </p>
//                                                <div id="Reward">
//                                                    <h3 class="reward">'.$jobs[$i+=1]./*date 6*/'</h3>
//                                                </div>    
//                                            </div>
//                                                <input class="secret" type="text" name="id" value="'.$jobs[$i+=1]./*nr of res places 5 ..*/'">
//
//
//                                        </div>
//                                        <div class="reservebtn">
//                                            <!-- <h3 class="text resbtntext">RESERVE</h3> -->
//                                            <button type="submit" class="btn text resbtntext">RESERVE</button>
//                                        </form>
//                                        </div>
//                                    </div>
//
//                                </li>';
//                                }
//                                
//                            }
//                            else
//                            {
//                                
//                            }
//                            
                        ?>
                        
                        
                    </ul>
                 -->
           
                </div>
        
    </div>
    
    
    
</body>
</html>