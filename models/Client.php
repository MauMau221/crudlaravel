<!--Consultas/Regras de negocios -->
<?php
    require_once('./configuration/connect.php');


    class ClientModel extends Connect{
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'clients';
        }

        function getAll()
        {
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;

        }
        function delete($id){
            try {
                $sqlDelete = "DELETE FROM clients WHERE id = :id";
                $stmt = $this->connection->prepare($sqlDelete);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                return true;
                
            } catch (PDOException $e) {
                echo "Erro ao excluir o cliente: " . $e->getMessage();
                return false;
            }
        }

    }

?>