<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassFuncionario
 *
 * @author juanfe
 */
class ClassFuncionario {
    
    CONST NAMETABLEFUNCIONARIO = "tblFuncionario";
    CONST COLIDFUNCIONARIO = "idtblFuncionario";
    CONST COLNOMBREFUNCIONARIO = "txtNombreFuncionario";
    CONST COLAPELLIDOFUNCIONARIO = "txtApellidoFuncionario";
    CONST COLCORREFUNCIONARIO = "txtCorreoFuncionario";
    CONST COLCELULARFUNCIONARIO = "txtCelularFuncionario";
    
    //private $idtblFuncionario;
    private $txtNombreFuncionario;
    private $txtApellidoFuncionario;
    private $txtCorreoFuncionario;
    private $txtCelularFuncionario;
    private $conexionDb;

    public function ClassFuncionario($pNombreFuncionario,$pApellidoFuncionario,
                                     $pCorreoFuncionario,$pCelularFuncionario) {
        include_once './ConexionDb.php';
        $this->conexionDb = new ConexionDb();
        $this->txtNombreFuncionario = $pNombreFuncionario;
        $this->txtApellidoFuncionario = $pApellidoFuncionario;
        $this->txtCorreoFuncionario = $pCorreoFuncionario;
        $this->txtCelularFuncionario = $pCelularFuncionario;
    }
    
    public function insertFuncionario($objFuncionario) {
        $linkConexion = $this->conexionDb->getConnectionMysql();
        $sqlInsertFuncionario = "INSERT INTO ".self::NAMETABLEFUNCIONARIO.
                                    "(".self::COLNOMBREFUNCIONARIO.",".
                                        self::COLAPELLIDOFUNCIONARIO.",".
                                        self::COLCORREFUNCIONARIO.",".
                                        self::COLCELULARFUNCIONARIO.") 
                                VALUES
                                    ('".$objFuncionario->getTxtNombreFuncionario()."',".
                                       "'".$objFuncionario->getTxtApellidoFuncionario()."',".
                                    "'".$objFuncionario->getTxtCorreoFuncionario().",".
                                    "'".$objFuncionario->getTxtCelularFuncionario().");";
        $respuestFuncionario = $this->conexionDb->executeQuery($sqlInsertFuncionario, $linkConexion);
        //$this->conexionDb->closeConexionMysql($linkConexion);
        return $respuestFuncionario;
    }
    
    function getTxtNombreFuncionario() {
        return $this->txtNombreFuncionario;
    }

    function getTxtApellidoFuncionario() {
        return $this->txtApellidoFuncionario;
    }

    function getTxtCorreoFuncionario() {
        return $this->txtCorreoFuncionario;
    }

    function getTxtCelularFuncionario() {
        return $this->txtCelularFuncionario;
    }

    function getConexionDb() {
        return $this->conexionDb;
    }

    function setTxtNombreFuncionario($txtNombreFuncionario) {
        $this->txtNombreFuncionario = $txtNombreFuncionario;
    }

    function setTxtApellidoFuncionario($txtApellidoFuncionario) {
        $this->txtApellidoFuncionario = $txtApellidoFuncionario;
    }

    function setTxtCorreoFuncionario($txtCorreoFuncionario) {
        $this->txtCorreoFuncionario = $txtCorreoFuncionario;
    }

    function setTxtCelularFuncionario($txtCelularFuncionario) {
        $this->txtCelularFuncionario = $txtCelularFuncionario;
    }

    function setConexionDb($conexionDb) {
        $this->conexionDb = $conexionDb;
    }


    
}
