<?php
    $pageDes = "Place a new offer";
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
    <div id="first" class="position_container container-fluid">
        <div class="col-md-6 col-md-offset-3">
            <form action="php/input.php" method="post">
            <div id="part1" class="contbox">
                <h2 class="sectionName">Job Description</h2>
                
                    <label>Job Title:</label> 
                    <input required type="text" name="job_title" id="inputJob1" class="inputhalf"> <br>
                    <label>Project Description:</label> 
                    <textarea required name="project_description" id="projdes" class="inputfull" maxlength="140"></textarea> <br>
                    <div class="row">
                        <div class="row col-md-6">
                            <div class="col-md-2">
                                <label class="inlnlbl">Category:</label>
                            </div>
                            <div class="col-md-8 col-md-offset-1">
                                <input required type="text" name="category" id="catInput2" class="leftwidth"> <br>
                            </div>
                        </div>
                        <div class="row col-md-6">
                            <div class="col-md-2">
                                <label class="inlnlbl">Reward:</label> 
                            </div>
                            <div class="col-md-8 col-md-offset-1">
                                <input required type="number" name="reward" id="rew6" min="0" class="leftwidth"> <br>
                            </div>
                        </div>
                    </div>
            </div>  
            <div id="part2" class="contbox">
                <h3 class="sectionName">Requirements</h3>    
                    <label>Skills: </label>
                    <textarea name="skills" id="skills4" class="inputfull inpsm"></textarea> <br>
                <div class="row additional">
                    <div class="row col-md-6">
                            <div class="col-md-2">
                                <label>Location:</label> 
                            </div>
                        <div class="col-md-8 col-md-offset-1">
                            <input required type="text" name="area" id="area3"><br>
                        </div>
                        <div class="col-md-2">
                        <label>Language: </label>
                        </div>
                        <div class="col-md-8 col-md-offset-1">
                        <input required type="text" name="lang" id="lang5"> <br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-2">
                        <label>Experience:</label>  
                        </div>
                        <div class="col-md-8 col-md-offset-1">
                        <input type="text" name="exp" id="exp7"> <br>
                        </div>
                        <div class="col-md-2">
                        <label>Education:</label> 
                         </div>
                        <div class="col-md-8 col-md-offset-1">
                        <input type="text" name="edu" id="edu8"> <br>
                         </div>
                    
                    </div>
                    
                </div>
                    <input type="submit" value="Submit new job" name="newjob" class="btn">
            </div>
            </form>

        </div>
    </div>
    <div>
        
        
    </div>



</body>

</html>