<?php 
    namespace admin\models;
    use Exception,PDO,PDOException,ReflectionClass;
    include_once "database.php";

    class User extends Database {
        private $id;
        private $firstname;
        private $lastname;
        private $email;
        private $password;
        private $role;
        

        protected static $db_table = "Users";

        protected static $db_tables_fields = array("id","firstname","lastname","email","password","role");

        public function setFirstname($firstname){
            $this->firstname = $firstname;
        }
        public function setLastname($lastname){
            $this->lastname = $lastname;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setPassword($password){
            $this->password = $password;
        }
        public function setRole($role){
            $this->role = $role;
        }

        public function getId(){
            return $this->id;
        }
        public function getFirstname(){
            return $this->firstname;
        }
        public function getLastname(){
            return $this->lastname;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getRole(){
            return $this->role;
        }

        public function getRoleName(){
            if($this->getRole() == 1){
                return "Admin";
            }
            else {
                return "Member";
            }
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

        public function login($email,$password){
            try {
                $sql = "SELECT u.id, u.firstname,u.lastname,u.email,u.password,u.role FROM Users u WHERE u.email='$email' AND u.password='$password'";
                $stmt=$this->prepare($sql);
                $stmt->execute();
                if($stmt->rowCount() > 0){
                    $user = $stmt->fetch();
                    $_SESSION['user'] = $user; 
                    header("location:index.php");
                }else {
                    echo "Email or Password incorrect !";
                }
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }

        public function register(){
            try {
                $sql = "INSERT INTO Users  (firstname,lastname,email,password,role) values (:firstname,:lastname,:email,:password,:role)";
                $stmt=$this->prepare($sql);
                $stmt->bindParam(":firstname",$this->firstname);
                $stmt->bindParam(":lastname",$this->lastname);
                $stmt->bindParam(":email",$this->email);
                $stmt->bindParam(":password",$this->password);
                $stmt->bindParam(":role",$this->role);
                $stmt->execute();
                header("Location:login.php");
            }catch (PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }

    }

?>