<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .login {
            width:230px;
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
        h2 {
            text-align: center;
        }
        .login input {
            padding:5px; margin:5px
        }
    </style>
</head>
<body>

<form action="login_php.php" method="post">
    <div class="login">
        <h2>Login</h2>
        <label>
            Username:
            <input type="text" name="username" size="30"  placeholder="username" />
        </label>
        <label>
            Password:
            <input type="password" name="password" size="30" placeholder="password" />
        </label>
        <input type="submit" value="Sign in"/>
    </div>
</form>

</body>
</html>
