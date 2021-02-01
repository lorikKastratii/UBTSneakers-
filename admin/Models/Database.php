<?php 
   
   namespace admin\models;
    use Exception,PDO,PDOException,ReflectionClass;
    // include "User.php";

    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_NAME","sneakers");

    
    class Database{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $dbname = DB_NAME;

        public function __construct(){
            $this->connectDB();
        }

        public function connectDB(){
            try {
                $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
                $pdo = new PDO($dsn,$this->user,$this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
        }

        public function prepare($sql){
            return $this->connectDB()->prepare($sql);
        }

        public function getClassName(){
            $class_name = new ReflectionClass($this);
            return $class_name = ucfirst($class_name->getShortName());
        }

        public function properties(){
            $properties = array();
            $vars = $this->getVars($this);

            foreach (static::$db_tables_fields as $db_field){
                if (property_exists($this, $db_field)){
                    $properties[$db_field] = $vars[$db_field];
                }
            }
            return $properties;
        }

        // protected function properties(){
        //     $properties = array();

        //     foreach (static::$db_tables_fields as $db_field){
        //         if (property_exists($this, $db_field)){
        //             $properties[$db_field] = $this->$db_field;
        //         }
        //     }
        //     return $properties;
        // }

        public function find_all(){
        
            try {
                $sql = "SELECT " . implode(",",static::$db_tables_fields) . " FROM " . static::$db_table;

                //firstname lastname 
                $stmt = $this->prepare($sql);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_CLASS,__NAMESPACE__. "\\{$this->getClassName()}");
                return $stmt->fetchAll();
            }
            catch(PDOException $e){
                echo "Error ne SQL SYNTAX: " . $e->getMessage();
            }
        }

        public function find_id($id){
            $sql = "SELECT " . implode(",",static::$db_tables_fields) . " FROM ". static::$db_table . " WHERE id=$id";
            $stmt = $this->prepare($sql);

            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS,__NAMESPACE__. "\\{$this->getClassName()}");

            return $stmt->fetch();
        }

        public function create(){
            try {
                $properties = $this->properties();
                $sql = "INSERT INTO " .  static::$db_table . " (" . implode(",",array_keys($properties)) . ")";
                $sql .= " VALUES ('" . implode("','",array_values($properties)) . "')";

                // INSERT INTO Users ("firstname,lastname,phone,email,password") VALUES ('firstaname','lastname','
                // phone','email','password')              
                $stmt = $this->prepare($sql);
                $stmt->execute();
                header("location:".static::$db_table.".php");             
            }
            catch(PDOException $e){
                die("Error during the registration process" . $e->getMessage());
            }
        }

       
        public function update(){
             try {
                $properties = $this->properties();
                $properties_pair=array();

                foreach($properties as $key => $value){
                    $properties_pair[] = "{$key}='{$value}'";
                }
                // key="firstname" , value="lorik" firstname='lorik'

                $id = $this->getId();

                $sql = "UPDATE " . static::$db_table . " SET ";
                $sql .= implode(",",$properties_pair) . " WHERE id=:id";
                //UPDATE Users SET firstname='firstname',email='email' WHERE id=1
                
                $stmt = $this->prepare($sql);
                $stmt->bindParam(":id",$id);
                $stmt->execute();
                header("location:".static::$db_table.".php");

            }
            catch(PDOException $e){
                die("Error during the updating process" . $e->getMessage());
            }
        }
            
        public function delete(){
            try {
                $id = $this->getId();
                
                $sql = "DELETE FROM " . static::$db_table . " WHERE id=:id";
                $stmt = $this->prepare($sql);
                $stmt->bindParam(":id",$id);
                $stmt->execute();
                header("location:".static::$db_table.".php");

            }   
            catch(PDOException $e){
                die ("Error during the deleting process" . $e->getMessage());
            }
        }

        






    }

?>