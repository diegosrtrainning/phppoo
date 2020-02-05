<?php

interface DBConnectionInterface
{
    public function connect();
}


class MySQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        // ...
    }
}

class OracleConnection implements DBConnectionInterface
{
    public function connect()
    {
        // ...
    }
}

class PasswordReminder
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
  
    // Faz alguma coisa
}
?>