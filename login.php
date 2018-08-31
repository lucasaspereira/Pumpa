<html>
<head>
  <title>Sistema de login</title>
  <meta charset="UTF-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <script href="javascript/script.js" rel="stylesheet"></script>
</head>

<body>

  <form action="validarLogin.php" method="POST">
    <div class="text-center" style="padding:50px 0">
      <div class="logo">login</div>
      <div class="login-form-1">
        <form id="login-form" class="text-left">
          <div class="login-form-main-message"></div>
          <div class="main-login-form">
            <div class="login-group">
              <div class="form-group">
                <label for="lg_username" class="sr-only">Username</label>
                <input type="text" class="form-control" id="lg_username" name="username" placeholder="username" required>
              </div>
              <div class="form-group">
                <label for="lg_password" class="sr-only">Password</label>
                <input type="password" class="form-control" id="lg_password" name="password" placeholder="password" required>
              </div>
            </div>
            <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
          </div>

          <?php

          if(isset($_GET['login'])) :

            ?>


            <div class="alert alert-danger" role="alert">
              Usuário ou senha incorreto!
            </div>

            <?php

          endif;
             ?>
          </form>

        </body>

        </html>
