<!--Conexão com banco de dados -->

<?php 

    define('HOST','localhost');
    define('DATABASENAME','crud-mvc-poo-php');
    define('USER','root');
    define('PASSWORD','root');

    class Connect{
        protected $connection;

        function __construct()
        {
            $this->connectDatabase();
        }

        function connectDatabase(){
            try
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            }
            catch (PDOException $e)
            {
                echo "ERRO".$e->getMessage();
            }
        }
    }
    

?>