<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Login</h1>
            <form action="" method="post">
                <label>Username</label><br>
                <input id="username" type="text" class="validate" name="username"><br>
                <label>Password</label><br>
                <input id="password" style="width: 10%;" type="password" class="validate" name="password" type="password"><br>
                <button type="submit" name="login_user" href="index2.php">Log in</button>
                <p style="color: ivory;">Belum memiliki akun?  Register dulu dong!</p>
                <a href="register.php">Register disini</a>
            </form>
        </div>     
    </body>
</html>