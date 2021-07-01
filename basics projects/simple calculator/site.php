<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Calculator</title>
  </head>
  <body>
    <form action="site.php" method="post">
      Enter Num1:<input type="number" name="num1"><br>
      Operator: <input type="text" name="op"><br>
      Enter Num2:<input type="number" name="num2"><br>
      <input type="submit">
    </form>
   <?php 
   
   function calculator(){
    $num1 = $_POST["num1"];
   $op = $_POST["op"];
   $num2 = $_POST["num2"];
   
    if($op == '+'){
      return $num1 + $num2;
    }
    elseif ($op == '-') {
      return $num1 - $num2;
    }
    elseif ($op == '/') {
      return $num1 / $num2;
    }
    elseif ($op == '*') {
      return $num1 * $num2;
    }
    elseif ($op == '%') {
      return $num1 % $num2;
    }
    else{
      return "invalid operator";
    }
   }
   echo calculator();
    ?>
  </body>
</html>
