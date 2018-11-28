<?php

class DatabaseConnect
{
    /** @var PDO $link */
    protected $link;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->connect();

    }

    /**
     * Connect to database method
     * @return $this
     */
    private function connect()
    {
        $config = require 'config.php';

        $dsn = $config['dbms'] . ':host=' . $config['host'] . ';dbname=' . $config['db_name'];

        try {
            $this->link = new PDO($dsn, $config['username'], $config['password']);
            //** !!!!! */
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //** !!!!! */
        } catch (PDOException $e) {
            exit($e->getMessage());
        }

        return $this;
    }
}