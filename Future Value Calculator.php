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
<form action="Future%20Value%20Calculator.php" method="post">
    <table>
        <tr>
            <td>Inventment Amount:</td>
            <td>
                <input type="number" name="begin">
            </td>
        </tr>
        <tr>
            <td>Yearly Interest Rate:</td>
            <td>
                <input type="number" name="profit">
            </td>
        </tr>
        <tr>
            <td>Number of Years:</td>
            <td>
                <input type="number" name="year">
            </td>
            <td>
                <input type="submit" value="Tính">
            </td>
        </tr>

    </table>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$bandau = $_POST["begin"];
$lai = $_POST["profit"];
$nam = $_POST["year"];
$tuonglai = 0;
for($i=1; $i<=$nam; $i++){
$tuonglai = $bandau + ($bandau * $lai);
}
echo "gia tri tuong lai sau ".$nam." nam la ".$tuonglai;
}

?>
