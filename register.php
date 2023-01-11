<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="login.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Daftar Akun</h1>
          <form action="" method="post">
                <label>Username</label><br>
                <input id="username" type="text" class="validate" name="username"><br>
                <label>E-Mail</label><br>
                <input id="email" type="text" class="validate" name="email"><br>
                <label>Password</label><br>
                <input id="password_1" class="validate" name="password_1" type="password"><br>
                <label>Ulang Password</label><br>
                <input id="password_2" class="validate" name="password_2" type="password"><br>
                <button type="submit" name="reg_user">Register</button>
            </form>
        </div>
    </body>
</html>