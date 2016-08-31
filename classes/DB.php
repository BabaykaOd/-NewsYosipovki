<?php

/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 30.08.2016
 * Time: 20:11
 */

class DB
{

    protected $dbh;

    public function __construct($name_table)
    {
        $config = include __DIR__ . '/../config/db.php';
        $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['host'];
        $this->dbh = new PDO($dsn, $config['user'], $config['password']);
    }

    public function execute($sql, $params = []) {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function getId() {
        return $this->dbh->lastInsertId();
    }

    public function findAll($class, $sql, $params = []) {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function findOne($class, $sql, $params = []) {
        return $this->findAll($class, $sql, $params)[0];
    }

}