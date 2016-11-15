<?php
/**
 * Description of ClassUsuario
 *
 * @author juanfe
 */
class ClassUsuario {
    
    const TABLENAMEUSER = "tblUsers";
    const COLIDUSERS = "idtblUsers";
    const COLNOMBREUSUARIO = "txtNameUser";
    const COLPASSWORD = "txtPassUser";
    const COLIDTIPOROL = "idTblRol";
    const COLESTADOUSUARIO = "idTblEstadoUsers";
    const COLIDFUNCIONARIO = "idTblEmpresaFunci";
    
    private $tblUsers;
    private $idtblUsers;
    private $txtNameUser;
    private $txtPassUser;
    private $idTblRol;
    private $idTblEstadoUsers;
    private $idTblEmpresaFunci;
    private $conexionDb;


    public function ClassUsuario($ruta,$pNameUser,$pPassUser,$pTipoRol,$pEstadoUsuario,$pEmpresaFunci){
        include_once $ruta.'ConexionDb.php';
        $this->conexionDb = new ConexionDb();
        $this->txtNameUser = $pNameUser;
        $this->txtPassUser = $pPassUser;
        $this->idTblRol = $pTipoRol;
        $this->idTblEstadoUsers = $pEstadoUsuario;
        $this->idTblEmpresaFunci = $pEmpresaFunci;
    }
    
    public function insertUsuarios($objUsuario,$linkConexion){
        $sqlinsertUsuarios = "INSERT INTO ".self::TABLENAMEUSER.
                              "(".self::COLNOMBREUSUARIO.",".
                                  self::COLPASSWORD.",".
                                  self::COLIDTIPOROL.",".
                                  self::COLESTADOUSUARIO.",".
                                  self::COLIDFUNCIONARIO.") 
                            VALUES
                                ('".$objUsuario->getTxtNameUser()."',
                                 '".$objUsuario->getTxtPassUser()."',
                                 ".$objUsuario->getIdTblRol().",
                                 ".$objUsuario->getIdTblEstadoUsers().",
                                 ".$objUsuario->getIdTblEmpresaFunci().");";
        $respuestInsertusuario = $this->conexionDb->executeQuery($sqlinsertUsuarios, $linkConexion);
        //$this->conexionDb->closeConexionMysql($linkConexion);
        return $respuestInsertusuario;
    }
    
    function getTblUsers() {
        return $this->tblUsers;
    }

    function getIdtblUsers() {
        return $this->idtblUsers;
    }

    function getTxtNameUser() {
        return $this->txtNameUser;
    }

    function getTxtPassUser() {
        return $this->txtPassUser;
    }

    function getIdTblRol() {
        return $this->idTblRol;
    }

    function getIdTblEstadoUsers() {
        return $this->idTblEstadoUsers;
    }

    function getIdTblEmpresaFunci() {
        return $this->idTblEmpresaFunci;
    }

    function setTblUsers($tblUsers) {
        $this->tblUsers = $tblUsers;
    }

    function setIdtblUsers($idtblUsers) {
        $this->idtblUsers = $idtblUsers;
    }

    function setTxtNameUser($txtNameUser) {
        $this->txtNameUser = $txtNameUser;
    }

    function setTxtPassUser($txtPassUser) {
        $this->txtPassUser = $txtPassUser;
    }

    function setIdTblRol($idTblRol) {
        $this->idTblRol = $idTblRol;
    }

    function setIdTblEstadoUsers($idTblEstadoUsers) {
        $this->idTblEstadoUsers = $idTblEstadoUsers;
    }

    function setIdTblEmpresaFunci($idTblEmpresaFunci) {
        $this->idTblEmpresaFunci = $idTblEmpresaFunci;
    }
    
}
