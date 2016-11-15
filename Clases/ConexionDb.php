<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexionDb
 *
 * @author juanfe
 */
class ConexionDb {
    
    const NAMESERVER = "localhost";
    const NAMEDB = "db_catchvertd";
    const USERDB = "root";
    const PASSWORDDB = "";
    
    public function getConnectionMysql() {
        $conexion = mysql_connect(self::NAMESERVER, self::USERDB, self::PASSWORDDB);
        mysql_select_db(self::NAMEDB);
        if(!$conexion){
            echo 'Problemas conectandose a la base de datos';
            exit();
        }
        else{
            return $conexion;
        }
    }
    
    public function executeQuery($stringSql,$conexionSql) {
        $respuest = mysql_query($stringSql,$conexionSql);
        return $respuest;
    }
    
    public function closeConexionMysql($conexionSql){
        mysql_close($conexionSql);
    }
    
}
