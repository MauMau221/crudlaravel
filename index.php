<!--Rotas / Chamada de métodos -->
<?php
require_once('./controllers/clientsController.php');

$controller = new clientsController();

$action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

$controller->{$action}();

// Verifique se a ação é 'delete' e chame o método de exclusão, se necessário
if ($action == 'delete') {
    $id = $_GET['id'] ?? null;
    if ($id !== null) {
        // Chame o método de exclusão no controlador
        $controller->delete($id);
    } else {
        echo "ID do cliente não fornecido.";
    }
}
?>
