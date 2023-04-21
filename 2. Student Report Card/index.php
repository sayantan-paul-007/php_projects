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
        <input type="text" name="rollno" placeholder="Enter a valid roll number">
        <div class="name-err"></div>
        
        <input type="submit" value="View Results" class="button">
    </form>
</body>
</html>