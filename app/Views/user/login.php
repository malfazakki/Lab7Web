<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="pt-5" style="height: 100vh;">
  <div id="login-wrapper" class="container mt-5 p-5 w-50">
    <h1>Sign In</h1>
    <?php if (session()->getFlashdata('flash_msg')) : ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
    <?php endif; ?>
    <form action="" method="post">
      <div class="mb-3">
        <label for="InputForEmail" class="form-label">Email
          address</label>
        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
      </div>
      <div class="mb-3">

        <label for="InputForPassword" class="form-
label">Password</label>
        <input type="password" name="password" class="form-control" id="InputForPassword">

      </div>

      <button type="submit" class="btn btn-primary">Login</button>

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>