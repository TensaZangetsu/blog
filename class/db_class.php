<?php
class Database {
    //Using singleton pattern for dataabase
    private $_connection;
    private static $_instance; //The single instance
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "cmsi";


    public static function getInstance() {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct() {
        //$this refers to class Database and her functions and propertys are being acsessed via -> sign
        $this->_connection = new mysqli($this->_host, $this->_username,
                                        $this->_password, $this->_database);

        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
                          E_USER_ERROR);
        }

    }
    //Safest way to iniate conection
    public function getConection(){
        return $this ->_connection;
    }

}

//inititaion of database via single instance not best solution for every app but best solution for performance
$database = Database::getInstance();
$db = $database->getConection();

?>
