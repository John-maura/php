<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade checker</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>This is a grade checker for a subject</h2>
    <form action="index.php" method="post">
        <label>Enter Marks</label>
        <input type="number" name="marks">
        <button type="submit">check grade</button>
    </form>
    <br>
    <?php 
        $marks = $_POST['marks'];
        if($marks >= 70 ){
            echo "you got an A";
        }
        elseif($marks >= 60 ){
            echo "you got B";
        }
        elseif($marks >= 50 ){
            echo "you got C";
        }
        elseif($marks >= 40 ){
            echo "you got D";
        }
        elseif($marks >= 0 ){
            echo "you got E";
        }
        else{
            echo "inalid entry";
        }
     ?>
</body>
</html>