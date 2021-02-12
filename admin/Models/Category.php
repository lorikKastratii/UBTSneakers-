<?php 
    namespace admin\models;
    use Exception,PDO,PDOException,ReflectionClass;
    include_once "database.php";

    class Category extends Database {

        private $id;
        private $name;
        private $description;
       
        

        protected static $db_table = "Categories";

        protected static $db_tables_fields = array("id","name","description");

        public function setName($name){
            $this->name = $name;
        }
        public function setDescription($description){
            $this->description = $description;
        }

        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getDescription(){
            return $this->description;
        }
        public function getVars(){
            return get_object_vars($this);
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



    }

?>