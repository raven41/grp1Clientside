<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "user_tb";
 
    // object properties
    public $uId; //public $id;
    public $uName; //public $firstname;
    public $uSurName; //public $lastname;
    public $uRole; //public $access_level;
    public $uEmail; //public $email;
    public $uPass; //public $password;
    public $uSchool; //
    public $uEdu; //
    public $uSem; //
    public $uStart; //
    public $created; //public $created;
    public $modified; //public $modified;

    // constructor
    public function __construct($db){
        $this->conn = $db;
    }

        // check if given email exist in the database
    function emailExists(){
    
        // query to check if email exists
        $query = "SELECT uId, uName, uSurName, uRole, uPass
                FROM " . $this->table_name . "
                WHERE uEmail = ?
                LIMIT 0,1";
    
        // prepare the query
        $stmt = $this->conn->prepare( $query );
    
        // sanitize
        $this->uEmail=htmlspecialchars(strip_tags($this->uEmail));
    
        // bind given email value
        $stmt->bindParam(1, $this->uEmail);
    
        // execute the query
        $stmt->execute();
    
        // get number of rows
        $num = $stmt->rowCount();
    
        // if email exists, assign values to object properties for easy access and use for php sessions
        if($num>0){
    
            // get record details / values
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // assign values to object properties
            $this->uId = $row['uId'];
            $this->uName = $row['uName'];
            $this->uSurName = $row['uSurName'];
            $this->uRole = $row['uRole'];
            $this->uPass = $row['uPass'];
    
            // return true because email exists in the database
            return true;
        }
    
        // return false if email does not exist in the database
        return false;
    }
}