<?php
class Database{
   private $host = 'localhost';
   private $dbName = 'php_opdr3per5';
   private $userName = 'root';
   private $passWord = '';
   public $connection1;
    //connection1 = public con
    //connection2 = private con
    // method
    public function __construct(){
        $this->getConnection(); //functie naam toevoegen
    }
    public function getConnection(){
        $this->connection1=null;
        try{
            $this->connection1= new mysqli($this->host, $this->dbName, $this->userName, $this->passWord);
        }
        catch(Exception $e){
            echo "Error met het verbinden door:" . $e->getMessage();
        }
        return $this->connection1;
    }

}

class Product extends Database{
    private $connection2;
    //error connection must be public??
     //connection1 = public con
     //connection2 = private con
    //  public $id;
    private $tableName = "tabelnaam van Product";

    function read(){
        $this->_category='';
    }

    function create(){

    }
    function update(){
        
    }
    function delete(){
        
    }
}
class Category extends Database{
    private $connection2;
    private $tableName = "tabelnaam van Category";
}

$heleDb = new Database();
var_dump($heleDb);
?>