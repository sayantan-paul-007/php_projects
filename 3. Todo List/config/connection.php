<?php
    $host = 'localhost';
    $user = 'paul';
    $password = 'paul123';
    $dbname = 'test';
    //Set DSN -> This is used to create a string for database commands
    $dsn = 'mysql:host='. $host . ';dbname='. $dbname;
    //PDO Instance
    $pdo = new PDO($dsn, $user, $password);
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    //Method 1: PDO Query
    // $stmt = $pdo->query('SELECT * FROM marks_record');
    //  while($row = $stmt->fetch()){
    //     echo $row->name.'<br>';
    // }// while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        // // In fetch assoc the data can be called by the row name directly
    //     echo $row['percent'].'<br>';
    // }
    // while($row = $statement->fetch(PDO::FETCH_OBJ)){
    //     echo $row->name.'<br>';
    // }
    //Method 2: Prepared Statements (prepare and execute)
   //unsafe
//    $sql = 'SELECT * FROM marks_record WHERE percent = $percent;' 
    //
    //FETCH MULTIPLE POSTS
    //Positional parameters
    // $percent = 89;
    // $sql = 'SELECT * FROM marks_record WHERE percent = ?';
    // $statement = $pdo -> prepare($sql);
    // $statement->execute([$percent]);
    // $allpercent = $statement->fetchAll();
//     $percent = 76.33;
//     $total = 458;
//     $sql = 'SELECT * FROM marks_record WHERE percent = :percent && total = :total ' ;
//     $statement = $pdo -> prepare($sql);
//     $statement->execute(['percent' => $percent, 'total'=>$total]);
//     $allpercent = $statement->fetchAll();

//    foreach($allpercent as $percentage){
//     echo $percentage->name.'<br>';
//    }
    // FETCH SINGLE POSTS
    // $hin = 77;
    // $sql = 'SELECT * FROM marks_record WHERE hin = :hin' ;
    // $statement = $pdo -> prepare($sql);
    // $statement->execute(['hin' => $hin]);
    // $hindi = $statement->fetch();
    // echo $hindi->name;
?>