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
    <table>
        <tr>
            <td>VND</td>
        </tr>

        <tr>
            <td>
                    <input type="number" name="VND">
            </td>

            <td>
                <input type="submit"> Convert </input>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
$number = null;
if(isset($_POST["VND"])){
    $number = $_POST["VND"];
}
  $usd = $number/23000;
echo $number." VND doi thanh ".$usd." USD";
?>

