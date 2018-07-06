<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/admin4b.min.css">
  <title></title>
</head>


<div class="page-sign">
  <form class="form-sign" name="login" class="expose" method="POST" action="" target="_self" onSubmit="return validasi(this)">
    <h1 class="display-4 text-center mb-5">
      Sign up
    </h1>
    <?php if (validation_errors()): ?>
      <div class="alert alert-danger" role="alert">
          <?=validation_errors() ?>
      </div>
    <?php endif ?>
    <div class="form-group">
          <div class="label-floating">
            <input id="username" type="text" class="form-control" placeholder="Username" autofocus name="username" >
            <label for="username">Username</label>
          </div>
        </div>
        <div class="form-group">
          <div class="label-floating">
            <input id="password" type="password" class="form-control" placeholder="Password" autofocus="" name="password" >
            <label for="password">Password</label>
          </div>
        </div>
        <div class="form-group">
          <div class="label-floating">
            <input id="name" type="text" class="form-control" placeholder="Nama Lengkap" autofocus name="nama_lengkap" >
            <label for="nama_lengkap">Nama Lengkap</label>
          </div>
        </div>
        <div class="form-group">
          <div class="label-floating">
            <input id="email" type="email" class="form-control" placeholder="email" autofocus="" name="email" >
            <label for="email">E-mail</label>
          </div>
        </div>
        <div class="form-group">
          <div class="label-floating">
            <input id="number" type="number" class="form-control" placeholder="No Hp" autofocus name="nohape" >
            <label for="No. Hp">No. Hp</label>
          </div>
        </div>
    <input type="submit" name="Submit" class="btn btn-lg btn-primary btn-block">
    <div class="mt-3 mb-3 text-center">
      <p class="mb-4">
        By creating an account you agree to the <a href="#">Terms of use</a>.
      </p>
      <hr>
      <p class="mt-4">
        <label class="text-muted">Already have an account?</label>
        <a href="login">Sign in</a>
      </p>
    </div>
  </form>
</div>
