<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Medical Diagnostic Techniques S.A. de C.V. | www.laboratoriomdt.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=base_url?>public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url?>public/css/font-awesome.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url?>public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url?>public/css/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?=base_url?>index2.html"><b>OliCati</b></a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Ingrese sus datos de Acceso</p>
            <form method="post" action="<?=base_url?>?controller=UsuarioController&action=login" id="frmAcceso">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="usernamea" name="username" placeholder="Usuario">
                    <span class="fa fa-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="contrasenaa" name="contrasena"
                        placeholder="Password">
                    <span class="fa fa-key form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <?php if(isset($_SESSION['error_login']) && $_SESSION['error_login'] == 'Identificación fallida'):?>
                        <div class="text-danger">Usuario y contraseña incorrectas</div>
                        <?php endif; ?>
                        <?php Utils::deleteSession('error_login'); ?>

                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div><!-- /.col -->
                </div>
            </form>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"
        integrity="sha256-8WqyJLuWKRBVhxXIL1jBDD7SDxU936oZkCnxQbWwJVw=" crossorigin="anonymous"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?=base_url?>public/js/bootstrap.min.js"></script>
    <!-- Bootbox -->
    <script src="<?=base_url?>public/js/bootbox.min.js"></script>
</body>

</html>