<?php

    if($_POST['hiAction']==1){
        ?>
            <script type="text/javascript">alert("Login Exitoso")</script>
        <?php
    }

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap-3.3.7/css/yeti.css">
        <script type="text/javascript" src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jsFormLogin.js"></script>
        <title>Catchvertd</title>
    </head>
    <body>
        <!-- div contenedor principal -->
        <div>
            <!-- div cabecera -->
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <h1 class="center">Catchvertd</h1>
                </div>
            </nav>
            <!-- hasta aqui div cabecera -->
            
            <!-- div contenido -->
            <div class="container">
                <!-- Formulario de login -->
                <form method="post" action="" onsubmit="return respuestForm();" class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Correo</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                              <button type="reset" class="btn btn-default">Cancel</button>
                              <button type="submit" class="btn btn-primary" onclick="validateForm();">Aceptar</button>
                              <a href="Forms/FormRegistrar.php" target="_blank" class="btn btn-default">Registrar</a>
                              <input type="hidden" id="hiAction" name="hiAction" value="0">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- hasta aqui div contenido -->
            
            <!-- div pie de pagina -->
            <div>
                <footer>
                    <?php echo date('Y') ?>
                </footer>
            </div>
            <!-- hasta aqui pie de pagina -->
        </div>
        <!-- hasta aqui el div cotenedor principal -->
    </body>
</html>
