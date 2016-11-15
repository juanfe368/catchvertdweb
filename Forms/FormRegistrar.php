<?php

    if($_POST['hiAction']==1){
        include_once '../Clases/ConexionDb.php';
        include_once '../Clases/ClassFuncionario.php';
        $funcionario = new ClassFuncionario($_POST['inputNombre'], 
                                            $_POST['inputApellido'], 
                                            $_POST['inputEmail'], 
                                            $_POST['inputCelular']);
        $conexionDb = new ConexionDb();
        $linkConexion = $conexionDb->getConnectionMysql();
        mysql_query('START TRANSACTION');
        mysql_query('SET AUTOCOMMIT = 0');
        $respuestInserFuncionario = $funcionario->insertFuncionario($funcionario);
        $idFuncionario = mysql_insert_id();
        include_once '../Clases/ClassUsuario.php';
        $usuario = new ClassUsuario($_POST['inputEmail'], 
                                    $_POST['inputCelular'], 
                                    $_POST['inputTipoUsuario'], 
                                    1, 
                                    $idFuncionario);
        $respuestUsuario = $usuario->insertUsuarios($usuario);
        if($respuestInserFuncionario&&$respuestUsuario){
            mysql_query("COMMIT");
            mysql_query("SET AUTOCOMMIT = 1");
            $conexionDb->closeConexionMysql($linkConexion);
            ?>
                <script type="text/javascript">
                    alert("Registro exitos. Su usuario es el correo y su contraseña es su número de celular");
                </script>
            <?php
        }
        else{
            mysql_query("ROLLBACK");
            mysql_query("SET AUTOCOMMIT = 1");
            $conexionDb->closeConexionMysql($linkConexion);
            
            ?>
                <script type="text/javascript">
                    alert("Registro fallido por favor complete los campos e intentelo nuevamente");
                </script>
            <?php
        }
        ?>
            <script type="text/javascript">alert("Registro Exitoso")</script>
        <?php
    }

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="../bootstrap-3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../bootstrap-3.3.7/css/yeti.css">
        <script type="text/javascript" src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/jsFormReg.js"></script>
        <title>Formulario de Registro</title>
    </head>
    <body>
        <!-- div contenedor principal -->
        <div>
            <!-- div cabecera -->
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <h1>Catchvertd</h1>
                </div>
            </nav>
            <!-- hasta aqui div cabecera -->
            
            <!-- div contenido -->
            <div class="container">
                <!-- Formulario de registro -->
                <form method="post" action="" onsubmit="return respuestForm();" class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label for="inputNombre" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputApellido" class="col-lg-2 control-label">Apellido</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputApellido" name="inputApellido" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Correo</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCelular" class="col-lg-2 control-label">Celular</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputCelular" name="inputCelular" placeholder="Celular">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTipoUsuario" class="col-lg-2 control-label">Tipo usuario</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="inputTipoUsuario" name="inputTipoUsuario">
                                    <option value="0">Seleccionar tipo de usuario</option>
                                    <option value="1">Funcionario</option>
                                    <option value="2">Empresa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                              <button type="reset" class="btn btn-default">Cancel</button>
                              <button type="submit" class="btn btn-primary" onclick="validateForm();">Aceptar</button>
                              <a href="../index.php" class="btn btn-default">Volver</a>
                              <input type="hidden" id="hiAction" name="hiAction" value="0">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- hasta aqui div registro -->
            
            <!-- div pie de pagina -->
            <div>
                <footer style="text-align:center;">
                    <?php echo date('Y') ?>
                </footer>
            </div>
            <!-- hasta aqui pie de pagina -->
        </div>
        <!-- hasta aqui el div cotenedor principal -->
    </body>
</html>
