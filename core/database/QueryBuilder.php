<?php



class QueryBuilder  {

    protected $pdo;

    protected $class;


    public function __construct(){

        $this->pdo  = Connection::make();

        $this->class = get_called_class();
    }

   public function selectAll($table){
       $statement = $this->pdo->prepare("SELECT * FROM $table");

       $statement->execute();

       return $tasks = $statement->fetchAll(PDO::FETCH_CLASS,$this->class);

   }

}