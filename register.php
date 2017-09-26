<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario de registro de usuarios</title>

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
            <?php require_once 'templates/asd.php'; ?>
            <div class="login-form">
                <?php require_once 'templates/message.php'; ?>

                <div class="form-header">
                    <i class="fa fa-user"></i>          
                </div>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-register" role="form" id="register-form"> 
                    <div>
                        <input name="name" id="name"type="name" class="form-control"placeholder="Nombres">
                        <span class="help-block"></span>
                    </div>
                    <div>
                        
                    </div>
                </form>
            </div>

        </div>
    </body>
</html>

