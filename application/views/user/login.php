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
<body>
	<div class="page-sign">
      <form class="form-sign" name="login" class="expose" method="POST" action="">
        <h1 class="display-4 text-center mb-5">
          Sign in
        </h1>
				<?php if (validation_errors()): ?>
					<div class="alert alert-danger" role="alert">
						  <?=validation_errors() ?>
					</div>
				<?php endif; ?>
        <div class="form-group">
          <div class="label-floating">
            <input id="username" type="text" class="form-control" placeholder="Username" autofocus name="TxtUser" maxlength="25">
            <label for="username">Username</label>
          </div>
        </div>
        <div class="form-group">
          <div class="label-floating">
            <input id="password" type="password" class="form-control" placeholder="Password" name="TxtPasswd" maxlength="25">
            <label for="password">Password</label>
          </div>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type=submit name="Submit" value=Login>
        <div class="mt-3 mb-3 text-center">
          <p class="mb-4">
            <a href="#">I forgot my password</a>
          </p>
          <hr>
          <p class="mt-4">
            <label class="text-muted">Don't have an account?</label>
            <a href="register">Sign up</a>
          </p>
        </div>
      </form>
    </div>

</body>
</html>
