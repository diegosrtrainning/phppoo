<?php

use MySQLConnection;

class PasswordReminder
{
    private $dbConnection;
    
    public function __construct()
    {       
        $this->dbConnection = new MySQLConnection();           
    }
    
    // Faz alguma coisa
}
?>