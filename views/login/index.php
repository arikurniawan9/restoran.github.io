<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran - Halaman Login</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="<?= $base_url; ?>assets/css/bootstrap.min.css">
    <!-- CSS Login -->
    <link rel="stylesheet" href="<?= $base_url; ?>assets/css/signin.css">
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
  <form>
    <img class="mb-4" src="<?= $base_url; ?>assets/img/rs.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>

</body>
</html>