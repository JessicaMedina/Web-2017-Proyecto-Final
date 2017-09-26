<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Página de inicio de sesión</title>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <?php require_once 'templates/ads.php'; ?>
            <div class="login-form">
                <?php require_once 'templates/message.php'; ?>
                <div class="form-header">
                    <i class="fa fa-user"></i>
                </div>
                <form id="login form" method="post" class="form-signin" role="form"action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input name="email" id="email" type=" email" class="form-control"placeholder="Corrreo Electronico" autofocus >
                    <input name="password" id="password" type="password" class="form-control" placeholder="Contrasena" autofocus>
                    <button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Iniciando...">Iniciar Sesion</button>
                </form>
                <div class="form-footer">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <i class="fa fa-lock"></i>
                            <a href="forget_password.php">Olvidó Su Contrasena</a>                        
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <i class="fa fa-check"></i>
                            <a href="register.php">Registrate</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    <!-- /container -->
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/login.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>
