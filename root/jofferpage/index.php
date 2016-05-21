<?php
session_start();
    require_once '../default/php/dbconfig.php';
    require_once 'php/getOneOffer.php';
    require_once '../default/php/convar.php';
    $pageDes = "";
    
echo print_r($jobofdesc);
       echo $_SESSION['id'];
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
                <p>Category: <?php echo $jobofdesc[1] ?></p>
            </div>
            <div class="col-md-2">
                <h1 class="reward">&euro; <?php echo $jobofdesc[5] ?>,- </h1>
            </div>
        </div>
        <div id="jobreq" class="row">
            
        </div>
    </div>
    
    
</body>

</html>