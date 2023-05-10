<?php

class Candidato { 
    private $servername = "localhost"; 
    private $username = "root";
    private $password = "";
    private $dbname="vestibular";


    public function __construct() { 
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            print_r($this->conn); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function __destruct() { 
        $this->fechar_conexao();
	    print "DESTRUÍDO: Objeto {$this->conn}\n"; 
	} 

    private function fechar_conexao(){
        $this->conn = null;
    }

    public function inserir_candidato($nome, $dados, $telefone, $oriundo){
        try {
            $sql = "INSERT INTO candidato (nome, dados, telefone, oriundo) VALUES ('". $nome . "', '" . $dados . "', '" . $telefone . "', '" . $oriundo . "')";
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;
    }

    public function deletar_candidato($id){
        try {
            $sql = "DELETE FROM candidato WHERE candidatoID = $id";
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;
    }

    public function consultar($id) {
        $sql = "SELECT * FROM candidatos WHERE id = $id";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Candidato não encontrado!";
        }
    }

    public function listar() {
        $sql = "SELECT * FROM candidatos";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $candidatos = array();

            while ($row = $result->fetch_assoc()) {
                $candidatos[] = $row;
            }

            return $candidatos;
        } else {
            return "Nenhum candidato encontrado!";
        }
    }

    public function atualizar($id, $nome, $dados, $telefone, $oriundo) {
        $sql = "UPDATE candidatos SET nome = '$nome', dados = '$dados', telefone = '$telefone', oriundo = '$oriundo' WHERE id = '$id'";

        if ($this->conn->query($sql) === TRUE) {
            return "Candidato atualizado com sucesso!";
        } else {
            return "Erro ao atualizar candidato: " . $this->conn->error;
        }
    }
}
?>