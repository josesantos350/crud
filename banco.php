<?php 
class Banco {
    private $pdo;
    private $numRows;
    private $array;
    
    public function __construct($host, $dbname, $dbuser, $dbpass) {
        try {
            
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
            
                  }
        catch (PDOException $e) {
            echo "Falhou : ".$e->getMessage();
        }
    }
    
    public function query($sql) {
        $query = $this->pdo->query($sql);
        $this->numRows = $query->rowCount();
        $this->array = $query->fetchAll();
    }
    
    public function result() {
        return $this->array;
    }
    
    public function numRows() {
       return $this->numRows;
    }
    
    public function insert($tabela, $data) {
        if (!empty($table) && (is_array($data) && count($data)> 0)) {
             $sql = "INSERT INTO ".$tabela." SET";
             $dados = array();
             foreach($data as $chave => $valor) {
                 $dados[] = $chave." = '".addslashes($valor)."'";
             }
             $sql = $sql.implode(",", $dados);
             $this->pdo->query($sql);
        }
    }
    
   
    public function update($tabela, $data, $where = array(), $condicao="AND") {
        if (!empty($table) && (is_array($data) && count($data)> 0) && is_array($where)) {
            $sql = "UPDATE ".$tabela." SET";  
            
            $dados = array();
            foreach($data as $chave => $valor) {
                $dados[] = $chave." = '".addslashes($valor)."'";
            }
            $sql = $sql.implode(",", $dados);
            
            if(count($where) > 0) {
                $dados = array();
                foreach($where as $chave => $valor) {
                    $dados[] = $chave." = '".addslashes($valor)."'";
                }
                $sql = $sql."WHERE".implode(" ".$condicao."", $dados);
            }
        }
    }
    
    public function delete($tabela, $were, $condicao = "AND") {
        if (!empty($table) && (is_array($$where) && count($where)> 0)) {
            $sql = "DELETE FROM".$tabela;  
            
            if(count($where) > 0) {
                $dados = array();
                foreach($where as $chave => $valor) {
                    $dados[] = $chave." = '".addslashes($valor)."'";
                }
                $sql = $sql."WHERE".implode(" ".$condicao."");
            }
        }
    
    }
}
?>