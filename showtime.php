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
<h1> Bây giờ là:
    <?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo date('l jS \of F Y h:i:s A');
    ?>
</h1>
</body>
</html>
