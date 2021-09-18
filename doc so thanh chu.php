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
<form action="doc%20so%20thanh%20chu.php" method="post">
    <table>
        <tr>
            <td>
                Your number:
            </td>
            <td>
                <input type="number" name="num">
            </td>
            <td>
                <input type="submit" value="Convert">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function hangdonvi($num){
        $text = "";
        if ($num > 0 and $num <= 15) {
            switch ($num) {
                case 1:
                    $text = "one ";
                    break;
                case 2:
                    $text = "two ";
                    break;
                case 3:
                    $text = "three ";
                    break;
                case 4:
                    $text = "four ";
                    break;
                case 5:
                    $text = "five ";
                    break;
                case 6:
                    $text = "six ";
                    break;
                case 7:
                    $text = "seven ";
                    break;
                case 8:
                    $text = "eight ";
                    break;
                case 9:
                    $text = "nine ";
                    break;
                case 10:
                    $text = "ten ";
                    break;
                case 11:
                    $text = "eleven ";
                    break;
                case 12:
                    $text = "twelve ";
                    break;
                case 13:
                    $text = "thirteen ";
                    break;
                case 15:
                    $text = "fifteen ";
                    break;
                case 14:
                    $text = "fourteen ";
                    break;
                case 0:
                    $text = " ";
                    break;
            }
        }
        return $text;
    }
    function hangchuc($num){
        $text = "";
        switch ($num){
            case 6:
                $text = "sixty ";
                break;
            case 7:
                $text = "seventy ";
                break;
            case 8:
                $text = "eighty ";
                break;
            case 9:
                $text = "ninety ";
                break;
        }
        return $text;
    }
    function hangtram($num){
        $text = "";
        switch ($num){
            case 1:
                $text = "one hundred ";
                break;
            case 2:
                $text = "two hundred ";
                break;
            case 3:
                $text = "three hundred ";
                break;
            case 4:
                $text = "four hundred ";
                break;
            case 5:
                $text = "five hundred ";
                break;
            case 6:
                $text = "six hundred ";
                break;
            case 7:
                $text = "seven hundred ";
                break;
            case 8:
                $text = "eight hundred ";
                break;
            case 9:
                $text = "nine hundred ";
                break;
        }
        return $text;
    }

    function haimuoi($num){
        $dovi = $num % 10;
        if ($num >= 20 and $num < 30) {
            return "twenty " . hangdonvi($dovi);
        }
    }

    function bamuoi($num){
        $dovi = $num % 10;
        if ($num >= 30 and $num < 40) {
            return "thirty " . hangdonvi($dovi);
        }
    }
    function bonmuoi($num){
        $dovi = $num % 10;
        if ($num >= 40 and $num < 50) {
            return "fourty " . hangdonvi($dovi);
        }
    }
    function nammuoi($num){
        $dovi = $num % 10;
        if ($num >= 50 and $num < 60) {
            return "fifty " . hangdonvi($dovi);
        }
    }

    function sau_den_chin_muoi($num){
        $dovi = $num % 10;
        $chuc = ($num/10)%10;
        if($num >=60 and $num <100){
            return hangchuc($chuc).hangdonvi($dovi);
        }
    }
    function hang_tram_le_chuc($num){
        $dovi = $num % 10;
        $tram = ($num/100)%10;
        return hangtram($tram).hangdonvi($dovi);
    }
    function hang_tram_hai_chuc($num){
        $tram = ($num/100)%10;
        if($num>=120 and $num<130){
            $xhaix = $num -100;
        }
        return hangtram($tram).haimuoi($xhaix);
    }


    $inputNum = (int)$_POST["num"];
    if ($inputNum < 0 || $inputNum > 999) {
        echo "out of ability";
    }
    if ($inputNum > 15 and $inputNum < 20) {
        $dovi = $inputNum % 10;
        echo hangdonvi($dovi) . "teen";
    }
//   echo hangdonvi($inputNum);
//   echo haimuoi($inputNum);
//   echo bamuoi($inputNum);
    if($inputNum > 0 and $inputNum <= 15){
        echo hangdonvi($inputNum);
    } elseif ($inputNum >= 20 and $inputNum < 30){
        echo haimuoi($inputNum);
    } elseif ($inputNum >= 30 and $inputNum < 40) {
        echo bamuoi($inputNum);
    }elseif ($inputNum >= 40 and $inputNum < 50) {
        echo bonmuoi($inputNum);
    }elseif ($inputNum >= 50 and $inputNum < 60) {
        echo nammuoi($inputNum);
    }elseif ($inputNum >= 60 and $inputNum < 100) {
        echo sau_den_chin_muoi($inputNum);
    }elseif ($inputNum >=100 and $inputNum<110 ||$inputNum >=200 and $inputNum<210 || $inputNum >=300 and $inputNum<310 || $inputNum >=400 and $inputNum<410 || $inputNum >=500 and $inputNum<510 || $inputNum >=600 and $inputNum<610 || $inputNum >=700 and $inputNum<710 || $inputNum >=800 and $inputNum<810 || $inputNum >=900 and $inputNum<910){
        echo hang_tram_le_chuc($inputNum);
    }elseif ($inputNum>=120 and $inputNum<130){
        echo hang_tram_hai_chuc($inputNum);
    }
}
?>