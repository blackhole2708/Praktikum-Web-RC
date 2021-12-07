<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login-Minggu8</title>
        <!--CSS file-->
        <link rel="stylesheet" href="./assets/css/index.css">
    </head>
    <body>
        <!-- <img src="./assets/wave.svg" alt="wave background" class="body-bg"> -->
        <div class="bucket">
            <h1>Login </h1>
            <form action="./login.php" method="post" class="login">
                <label for="uname">Username</label>
                <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field">
                <input type="submit" name="login" value="Login" class="login-btn-submit">
            </form>
        </div>
    </body>
</html>