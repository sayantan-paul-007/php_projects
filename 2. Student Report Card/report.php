<?php 
    include("config/connection.php");
    $rollno = $_POST['rollno'];
    $sql = 'SELECT * FROM marks_record WHERE roll_no = '.$rollno;
    $statement = $pdo->prepare($sql);
    $statement->execute();
    //JS = object.value PHP Object->value =>
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
   <section>
    <h1>Exam results</h1>
    <?php 
        if($statement->rowCount()>0){
            $roll_no = $statement->fetch();
    ?>
    <div class="info-grp">
        <p>Name:</p>
        <p class="value"><?php echo $roll_no['name'] ?> </p>
        <p>Roll No:</p>
        <p class="value"><?php echo $roll_no['roll_no'] ?></p>
    </div>
    <div class="table">
    <table border="1">
        <tr>
            <th>Subjects</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td class="subjects">English</td>
            <td><?php echo $roll_no['eng'] ?></td>
        </tr>
        <tr>
            <td class="subjects">Hindi</td>
            <td><?php echo $roll_no['hin'] ?></td>
        </tr>
        <tr>
            <td class="subjects">Marathi</td>
            <td><?php echo $roll_no['mar'] ?></td>
        </tr>
        <tr>
            <td class="subjects">Maths</td>
            <td><?php echo $roll_no['maths'] ?></td>
        </tr>
        <tr>
            <td class="subjects">Science</td>
            <td><?php echo $roll_no['sci'] ?></td>
        </tr>
        <tr>
            <td class="subjects">Social Science</td>
            <td><?php echo $roll_no['ss'] ?></td>
        </tr>
        <tr>
            <th class="total">Total</th>
            <th><?php echo $roll_no['total'] ?></th>
        </tr>
        <tr>
            <th colspan="2">Pecentage: <?php echo $roll_no['percent'] ?></th>
        </tr>
    </table>
    </div>
    
    <?php
    }else{
        $countsql = 'SELECT * FROM marks_record';
        $countstate = $pdo->prepare($countsql);
        $countstate->execute();
        echo "<p>No Such Student found try using Numbers 1 to ".$countstate->rowCount() ."</p>";
        
    }
    
?>
<button type="submit"  class="button"><a class="link" href="index.php"> View another result</a></button>
   </section>

</body>
</html>

