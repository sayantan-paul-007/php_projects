<?php 
    include("config/connection.php");
    $roll=$rollErr='';
    if(isset($_POST['submit'])){
        
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="report.php" method="post">
        <h1>Exam Results</h1>
        <p>Enter your roll number to view results</p>
        <label for="rollno">
            Roll Number
        </label>
        <input type="text" name="rollno" placeholder="Enter your roll number">
        <div class="roll-err"> <?php echo $rollErr;?></div>
        
        <input type="submit" value="View Results" name="submit" class="button">
    </form>
</body>
</html>