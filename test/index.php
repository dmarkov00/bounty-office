<html>  
    <body>
        <div class="row">
            <form action="input.php" method="post">
    <label>Job Title :</label> <input type="text" name="job_title" id="inputJob1"> <br>
    <label>Category:</label> <input type="text" name="category" id="catInput2"> <br>
            <label>Area:</label> <input type="text" name="area" id="area3"><br>
            <label>Skills: </label> <input type="text" name="skills" id="skills4"> <br>
            <label>Language: </label> <input type="text" name="lang" id="lang5"> <br>
            <label>Reward: </label> <input type="number" name="reward" id="rew6" min="0"> <br>
            <label>Experience:</label> <input type="text" name="exp" id="exp7"> <br>
            <label>Education:</label> <input type="text" name="edu" id="edu8"> <br>
            <input type="submit" value="Submit new job" name="newjob">
            </form>
            </div>
</body>
    
</html>
<?php
require_once 'dbcon.php';
?>


