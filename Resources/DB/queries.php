<?php

require 'databaseExecute.php';


class Queries extends DatabaseExecute
{
    /** @var string $name */
    public $name;
    /** @var int $year */
    public $year;
    /** @var string $format */
    public $format;
    /** @var string $actors */
    public $actors;
    /** @var DatabaseExecute $db */
    private $db;
    /** @var array $config */
    private $config;

    const DB_NAME = 'db_name';

    /**
     * Queries constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->db = new DatabaseExecute();
        $this->config = require 'config.php';
        $this->checkTable();
    }

    /**
     * @return array
     */
    public function getAllFilms()
    {
        return $this->db->getQuery("SELECT * FROM {$this->config[self::DB_NAME]}");
        //print_r($this->db->getQuery("SELECT * FROM {$this->config[self::DB_NAME]}"));
    }

    /**
     * @return array
     */
    public function getAllFilmsByASC()
    {
        return $this->db->getQuery("SELECT * FROM {$this->config[self::DB_NAME]} ORDER BY name ASC");
    }

    /**
     * @param $name
     * @param $year
     * @param $format
     * @param $actors
     * @return DatabaseExecute
     */
    public function addFilm($name, $year, $format, $actors)
    {
        return $this->db->setQuery("INSERT INTO {$this->config[self::DB_NAME]} 
        (name, year, format, actors) VALUES ('{$name}', '{$year}', '{$format}', '{$actors}')");
    }

    /**
     * @param $name
     * @return DatabaseExecute
     */
    public function deleteFilm($name)
    {
        return $this->db->setQuery("DELETE FROM {$this->config[self::DB_NAME]} WHERE name='{$name}'");
    }

    /**
     * @param $name
     * @return array
     */
    public function getFilmInfo($name)
    {
        return $this->db->getQuery("SELECT * FROM {$this->config[self::DB_NAME]} WHERE name={$name}");
    }

    /**
     * @param $name
     * @return array
     */
    public function findFilmByName($name)
    {
        return $this->db->getQuery("SELECT * FROM {$this->config[self::DB_NAME]} WHERE name LIKE '%{$name}%'");
    }

    /**
     * @param $actors
     * @return array
     */
    public function findFilmByActors($actors)
    {
        return $this->db->getQuery("SELECT * FROM {$this->config[self::DB_NAME]} WHERE actors LIKE '%{$actors}%'");
    }

    /**
     * Check if table in DB exist
     */
    private function checkTable()
    {
        $check = $this->db->getQuery("CHECK TABLE films");
        if ($check[0]['Msg_text'] != "OK") {
            $this->db->setQuery("create table films (id INT NOT null auto_increment, name varchar(255),year int(11), format varchar(25), actors varchar(255), primary key(id)); ");
        }
    }
}