<?php 
    namespace admin\models;
    use Exception,PDO,PDOException,ReflectionClass;
    include_once "database.php";

    class Product extends Database {
        private $id;
        private $name;
        private $description;
        private $price;
        private $image;
        private $category;
        private $insertBy;
        private $createdAt;
        private $updatedAt;
        

        protected static $db_table = "Products";

        protected static $db_tables_fields = array("id","name","description","price","image","category","insertBy","createdAt","updatedAt");

        public function setName($name){
            $this->name = $name;
        }
        public function setDescription($description){
            $this->description = $description;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function setImage($image){
            $this->image = $image;
        }
        public function setCategory($category){
            $this->category = $category;
        }
        public function setInsertBy($insertBy){
            $this->insertBy = $insertBy;
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
        public function getPrice(){
            return $this->price;
        }
        public function getImage(){
            return $this->image;
        }
        public function getCategory(){
            return $this->category;
        }
        public function getInsertedBy(){
            return $this->insertBy;
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