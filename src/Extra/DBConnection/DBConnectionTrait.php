<?php

declare (strict_types=1);

namespace Book\Extra\DBConnection;

trait DBConnectionTrait {

    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "admin";
    private string $dbname;

    public function connect(string $dbname = "book"): void {

        $this->dbname = $dbname;

        try {

            $conn = new \PDO(
                    "mysql:host=$this->servername;dbname=$this->dbname",
                    $this->username,
                    $this->password
            );
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\Exception $ex) {
            
            throw new \Exception("Error connecting to database: $this->dbname - [Message: " . $ex->getMessage() ."]");
        }
    }
}
