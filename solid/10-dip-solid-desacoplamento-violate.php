<?php

use MySQLConnection;

class PasswordReminder
{
    private $dbConnection;
    
    public function __construct(MySQLConnection $dbConnection)
    {       
        $this->dbConnection = $dbConnection;           
    }
    
    // Faz alguma coisa
}

?>