<?php
class CadastroVestibular {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
        $this->conn->close();
    }

    public function cadastrarCandidato($nome, $dados, $telefone) {
        $sql = "INSERT INTO candidatos (nome, dados, telefone) VALUES ('$nome', '$dados', '$telefone')";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
    }

    public function listarCandidatos() {
        $sql = "SELECT * FROM candidatos";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $candidatos = array();
            while($row = $result->fetch_assoc()) {
                $candidatos[] = $row;
            }
            return $candidatos;
        } else {
            return array();
        }
    }

    public function atualizarCandidato($nome, $dados, $telefone) {
        $sql = "UPDATE candidatos SET nome='$nome', dados='$dados', telefone='$telefone' WHERE id=$id";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error updating record: " . $this->conn->error;
            return false;
        }
    }

    public function removerCandidato($id) {
        $sql = "DELETE FROM candidatos WHERE id=$id";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error deleting record: " . $this->conn->error;
            return false;
        }
    }
}
?>
