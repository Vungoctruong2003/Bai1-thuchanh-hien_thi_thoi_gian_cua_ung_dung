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
<form action="app_calculator.php" method="post">
    <h1> Simple Calculator</h1>
    <fieldset style="width:100px">
        <legend>Calculator</legend>
        <table>
            <tr>
                <td>
                    First operand:
                </td>
                <td>
                    <input type="number" name="ipt1">
                </td>
            </tr>
            <tr>
                <td> Operator:</td>
                <td>
                    <select name="pheptinh">
                        <option value="+"> Addition</option>
                        <option value="-"> Subtraction</option>
                        <option value="*"> Multiplication</option>
                        <option value="/"> Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> Second operand:</td>
                <td>
                    <input type="number" name="ipt2">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="calculate"/>
                </td>
            </tr>
        </table>
    </fieldset>
    <h1> Result:</h1>
</form>
</body>
</html>

<?php

if (isset($_POST['calculate'])) {
    $number1 = null;
    $number2 = null;
    $result = 0;
    $number1 = $_POST["ipt1"];
    $number2 = $_POST["ipt2"];
    $selected_val = $_POST['pheptinh'];

    try {
        if ($number2 == 0 and $selected_val == "/") {
            throw new Exception('Division by zero.');
        }
        switch ($selected_val) {
            case "+":
                $result = $number1 + $number2;
                break;
            case "*":
                $result = $number1 * $number2;
                break;
            case "-":
                $result = $number1 - $number2;
                break;
            case "/":
                $result = $number1 / $number2;
                break;
        }
        echo $result;

    } catch (Exception $e) {

        echo "Warning: " . $e->getMessage();
    }
}
?>
