<?php
session_start();
    require_once '../default/php/dbconfig.php';
    require_once 'php/getOneOffer.php';
    require_once '../default/php/convar.php';
    $pageDes = "";
    

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
    <div id="first" class="container-fluid jobdes">
        <div id="jobhead" class="row">
            <div class="col-md-8 col-md-offset-1">
                <h1><?php echo $jobofdesc[0] ?></h1>
                <p class="projdes">Category: <?php echo $jobofdesc[1] ?></p>
            </div>
            <div lass="col-md-1 rightpart">
                <h1 class="reward">&euro; <?php echo $jobofdesc[5] ?>,- </h1>
                <div class="viewbtn">
                    <!-- <h3 class="text resbtntext">RESERVE</h3> -->
                    <button type="submit" class="btn text resbtntext">Apply</button>
                </div>
            </div>
        </div>
        <div id="jobreq" class="row">
            <div class="col-md-4 col-md-offset-1">
                <h3 class="txttxt">Project Details:</h3>
                <p class="projdes"><?php echo $jobofdesc[9] ?></p>
                <h5 class="lbl">Language: </h5><p class="lbl"><?php echo $jobofdesc[3] ?></p>
                <br>
                <h5 class="lbl">Experience: </h5><p class="lbl"><?php echo $jobofdesc[7] ?></p>
                <br>
                <h5 class="lbl">Location: </h5><p class="lbl"><?php echo $jobofdesc[2] ?></p>
                <br>
            </div>
            <div class="col-md-4">
                <div>
                    <h3 class="txttxt">Skills:</h3>
                    <p class="lbl"><?php echo $jobofdesc[4] ?></p>
                </div>
            </div>
        </div>
    </div>
    
    
</body>

</html>