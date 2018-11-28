<?php

require 'databaseConnect.php';

class DatabaseExecute extends DatabaseConnect
{
    /**
     * @param $sql
     * @return $this
     */
    public function setQuery($sql)
    {
        $exec = $this->link->prepare($sql);

        $exec->execute();

        return $this;
    }

    /**
     * @param $sql
     * @return array
     */
    public function getQuery($sql)
    {
        $result = $this->link->query($sql, PDO::FETCH_ASSOC);

        if ($result === false) {
            return [];
        }

        return $result->fetchAll();
    }
}
