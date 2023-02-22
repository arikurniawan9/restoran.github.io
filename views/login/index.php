<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login - Restoran</title>

    <!--- CSS Login --->
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/styleLogin.css">

</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="txt_field">
                <span></span>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="txt_field">
                <span></span>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="button" value="Login" class="btn-login">
        </form>
    </div>

</body>
</html>