<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="convert_money.php" method="post">
   <button type="submit">
       Submit
   </button>
    <input type="number" name="number">
</form>
</body>
</html>

<?php
$number = null;
if(isset($_POST["number"])){
    $number = $_POST["number"];
}
$count = 0;
    $N = 2;
    while ($count < $number) {
        $check = false;
        for ($i = 2; $i <= sqrt($N); $i++) {
            if (($N % $i === 0)){
                $check=true;
                break;
            }
        }
        if ($check===false){
            $count++;
          echo $N."</br>";
        }
      $N++;
    }
    ?>