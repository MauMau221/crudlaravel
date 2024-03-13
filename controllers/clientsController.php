<!--Controlador de Clientes-->
<?php

    require_once('./models/Client.php');


    class clientsController{
        private $model;

        function __construct()
        {
            $this->model = new ClientModel();
        }


        function getAll()
        {
            $resultData = $this->model->getAll();
            require_once('./views/index.php');
        }
        public function deleteItem($id) {
            if ($this->model->delete($id)) {
                echo "Item excluído com sucesso.";
            } else {
                echo "Erro ao excluir o item.";
            }
        }
        
    }
    
?>
