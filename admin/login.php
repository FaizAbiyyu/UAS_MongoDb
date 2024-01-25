<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="resorce/css/login.css" rel="stylesheet">

    <title>Login Admin</title>
    <style>
    body, html {
    height: 100%;
    margin: 0;
    }

</style>
    </head>
    <body >
<div class="login" action>
    <h2 class="login-header">Login Admin</h2>
        <form class="login-container" method="POST" action="">
            <p>
                <input type="email" placeholder="email" name="email">
            </p>
            <p>
                <input type="password" placeholder="password" name="pass">
            </p>
            <p>
                <input type="submit" value="Log in" name="submit">
            </p>
            <p>
                <center><a href="../index.php">back</a></center>
            </p>
        </form>
</div>
</body>
</html>

<?php
session_start();
error_reporting(0);
        $user = array(
                        "email" => "admin@admin.com",
                        "pass" => "admin"            
                );
if (isset($_POST['submit'])) {
    if ($_POST['email'] == $user['email'] && $_POST['pass'] == $user['pass']){
        $_SESSION["email"] = $_POST['email']; 
        echo '<script>window.location="index.php"</script>';
    } else {
        display_login_form();
        echo '<p>email Atau Password Tidak Benar</p>';
    }
}    
else { 
    display_login_form();
}