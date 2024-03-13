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
        public function delete($id)
        {
            $sqlDelete = "DELETE FROM clients WHERE id = 2";
            $stm = $this->connection->prepare($sqlDelete);
            $stm->bind_param("i", $id);
            return $stm->execute();

        }
    }

?>