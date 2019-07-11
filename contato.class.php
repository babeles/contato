<?php
class Contato {
    
    private $pdo;
    
    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=contato;host=localhost", "root", "");
    }
    
    public function todosContatos() {
        $sql = $this->pdo->query("SELECT * FROM contato ORDER BY cto_nm");
        
        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }
   
    public function adicionarContato($cto_nm, $cto_dceml, $cto_nrtel) {
        $sql = $this->pdo->prepare("INSERT INTO contato (cto_nm, cto_dceml, cto_nrtel) "
                . "VALUES (:cto_nm, :cto_dceml, :cto_nrtel)");
        $sql->bindValue(":cto_nm", ucwords($cto_nm));
        $sql->bindValue(":cto_dceml", $cto_dceml);
        $sql->bindValue(":cto_nrtel", $cto_nrtel);
        $sql->execute();
        
        return true;
    }
    
    public function editar($cto_iduni) {
        $sql = $this->pdo->prepare("SELECT * FROM contato WHERE cto_iduni = :cto_iduni");
        $sql->bindValue(":cto_iduni", $cto_iduni);
        $sql->execute();
        
        if($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return array();
        }
    }
    
    public function updateContato($cto_iduni, $cto_nm, $cto_dceml, $cto_nrtel) {
        $sql = $this->pdo->prepare("UPDATE contato "
                . "SET cto_nm = :cto_nm, cto_dceml = :cto_dceml, cto_nrtel = :cto_nrtel "
                . "WHERE cto_iduni = :cto_iduni");
        $sql->bindValue(":cto_nm", ucwords($cto_nm));
        $sql->bindValue(":cto_dceml", $cto_dceml);
        $sql->bindValue(":cto_nrtel", $cto_nrtel);
        $sql->bindValue(":cto_iduni", $cto_iduni);
        $sql->execute();
    }

    public function excluirContato($cto_iduni) {
    $sql = $this->pdo->prepare("DELETE FROM contato WHERE cto_iduni = :cto_iduni");
    $sql->bindValue(":cto_iduni", $cto_iduni);
    $sql->execute();
    }
    
}