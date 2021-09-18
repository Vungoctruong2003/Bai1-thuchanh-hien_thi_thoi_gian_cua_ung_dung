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
    function hangdonvi($num)
    {
        $text = "";
        if ($num > 0 and $num < 10) {
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
                case 0:
                    $text = " ";
                    break;
            }
        }
        return $text;
    }

    function hangchuc($num)
    {
        $text = "";
        switch ($num) {
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

    function hangtram($num)
    {
        $text = "";
        switch ($num) {
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

    function motX($num)
    {
        $text = "";
        switch ($num) {
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
            case 16:
                $text = "sixteen ";
                break;
            case 17:
                $text = "seventeen ";
                break;
            case 18:
                $text = "eightteen ";
                break;
            case 19:
                $text = "nineteen ";
                break;
        }
        return $text;
    }

    function haimuoi($num)
    {
        $dovi = $num % 10;
        if ($num >= 20 and $num < 30) {
            return "twenty " . hangdonvi($dovi);
        }
    }

    function bamuoi($num)
    {
        $dovi = $num % 10;
        if ($num >= 30 and $num < 40) {
            return "thirty " . hangdonvi($dovi);
        }
    }

    function bonmuoi($num)
    {
        $dovi = $num % 10;
        if ($num >= 40 and $num < 50) {
            return "fourty " . hangdonvi($dovi);
        }
    }

    function nammuoi($num)
    {
        $dovi = $num % 10;
        if ($num >= 50 and $num < 60) {
            return "fifty " . hangdonvi($dovi);
        }
    }

    function sau_den_chin_muoi($num)
    {
        $dovi = $num % 10;
        $chuc = ($num / 10) % 10;
        if ($num >= 60 and $num < 100) {
            return hangchuc($chuc) . hangdonvi($dovi);
        }
    }

    function hang_tram_le_chuc($num)
    {
        $dovi = $num % 10;
        $tram = ($num / 100) % 10;
        return hangtram($tram) . hangdonvi($dovi);
    }

    function hang_tram_mot_chuc($num)
    {
        $tram = ($num / 100) % 10;
        $x1x = $num - ($tram * 100);
        return hangtram($tram) . motX($x1x);
    }

    function hang_tram_hai_chuc($num)
    {
        $tram = ($num / 100) % 10;
        $xhaix = $num - ($tram * 100);
        return hangtram($tram) . haimuoi($xhaix);
    }

    function hang_tram_ba_chuc($num)
    {
        $tram = ($num / 100) % 10;
        $xbax = $num - ($tram * 100);
        return hangtram($tram) . bamuoi($xbax);
    }

    function hang_tram_bon_chuc($num)
    {
        $tram = ($num / 100) % 10;
        $xbonx = $num - ($tram * 100);
        return hangtram($tram) . bonmuoi($xbonx);
    }

    function hang_tram_nam_chuc($num)
    {
        $tram = ($num / 100) % 10;
        $xnamx = $num - ($tram * 100);
        return hangtram($tram) . nammuoi($xnamx);
    }

    function hang_tram_sau_chin_chuc($num)
    {
        $tram = ($num / 100) % 10;
        $x69x = $num - ($tram * 100);
        return hangtram($tram) . sau_den_chin_muoi($x69x);
    }

    $inputNum = (int)$_POST["num"];
    if ($inputNum < 0 || $inputNum > 999) {
        echo "out of ability";
    }

    if ($inputNum > 0 and $inputNum < 10) {
        echo hangdonvi($inputNum);
    } elseif ($inputNum >= 20 and $inputNum < 30) {
        echo haimuoi($inputNum);
    } elseif ($inputNum >= 30 and $inputNum < 40) {
        echo bamuoi($inputNum);
    } elseif ($inputNum >= 40 and $inputNum < 50) {
        echo bonmuoi($inputNum);
    } elseif ($inputNum >= 50 and $inputNum < 60) {
        echo nammuoi($inputNum);
    } elseif ($inputNum >= 60 and $inputNum < 100) {
        echo sau_den_chin_muoi($inputNum);
    } elseif ($inputNum >= 100 and $inputNum < 110 || $inputNum >= 200 and $inputNum < 210 || $inputNum >= 300 and $inputNum < 310 || $inputNum >= 400 and $inputNum < 410 || $inputNum >= 500 and $inputNum < 510 || $inputNum >= 600 and $inputNum < 610 || $inputNum >= 700 and $inputNum < 710 || $inputNum >= 800 and $inputNum < 810 || $inputNum >= 900 and $inputNum < 910) {
        echo hang_tram_le_chuc($inputNum);
    } elseif ($inputNum >= 120 and $inputNum < 130 || $inputNum >= 220 and $inputNum < 230 || $inputNum >= 320 and $inputNum < 330 || $inputNum >= 420 and $inputNum < 430 || $inputNum >= 520 and $inputNum < 530 || $inputNum >= 620 and $inputNum < 630 || $inputNum >= 720 and $inputNum < 730 || $inputNum >= 820 and $inputNum < 830 || $inputNum >= 920 and $inputNum < 930) {
        echo hang_tram_hai_chuc($inputNum);
    } elseif ($inputNum >= 130 and $inputNum < 140 || $inputNum >= 230 and $inputNum < 240 || $inputNum >= 330 and $inputNum < 340 || $inputNum >= 430 and $inputNum < 440 || $inputNum >= 530 and $inputNum < 540 || $inputNum >= 630 and $inputNum < 640 || $inputNum >= 730 and $inputNum < 740 || $inputNum >= 830 and $inputNum < 840 || $inputNum >= 930 and $inputNum < 940) {
        echo hang_tram_ba_chuc($inputNum);
    } elseif ($inputNum >= 140 and $inputNum < 150 || $inputNum >= 240 and $inputNum < 250 || $inputNum >= 340 and $inputNum < 350 || $inputNum >= 440 and $inputNum < 450 || $inputNum >= 540 and $inputNum < 550 || $inputNum >= 640 and $inputNum < 650 || $inputNum >= 740 and $inputNum < 750 || $inputNum >= 840 and $inputNum < 850 || $inputNum >= 940 and $inputNum < 950) {
        echo hang_tram_bon_chuc($inputNum);
    } elseif ($inputNum >= 150 and $inputNum < 160 || $inputNum >= 250 and $inputNum < 260 || $inputNum >= 350 and $inputNum < 360 || $inputNum >= 450 and $inputNum < 460 || $inputNum >= 550 and $inputNum < 560 || $inputNum >= 650 and $inputNum < 660 || $inputNum >= 750 and $inputNum < 760 || $inputNum >= 850 and $inputNum < 860 || $inputNum >= 950 and $inputNum < 960) {
        echo hang_tram_nam_chuc($inputNum);
    } elseif ($inputNum >= 10 and $inputNum < 20) {
        echo motX($inputNum);
    } elseif ($inputNum >= 110 and $inputNum < 120 || $inputNum >= 210 and $inputNum < 220 || $inputNum >= 310 and $inputNum < 320 || $inputNum >= 410 and $inputNum < 420 || $inputNum >= 510 and $inputNum < 520 || $inputNum >= 610 and $inputNum < 620 || $inputNum >= 710 and $inputNum < 720 || $inputNum >= 810 and $inputNum < 820 || $inputNum >= 910 and $inputNum < 920) {
        echo hang_tram_mot_chuc($inputNum);
    }else{
        echo hang_tram_sau_chin_chuc($inputNum);
    }
}
?>