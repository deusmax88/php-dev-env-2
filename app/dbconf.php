<?php
$myslqHost = 'mysql';
$mysqlDB = 'testdb';
$mysqlUser = 'root';
$mysqlPassword = 'test123';

try{
    $mysqlPDO = new PDO("mysql:dbname=$mysqlDB;host=$myslqHost", $mysqlUser, $mysqlPassword);
}
catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage()."<br />";
}

$pgsqlHost = 'postgresql';
$pgsqlDB = 'postgres';
$pgsqlUser = 'postgres';
$pgsqlPassword = 'test123';
try{
    $pgsqlPDO = new PDO("pgsql:dbname=$pgsqlDB;host=$pgsqlHost", $pgsqlUser, $pgsqlPassword);
}
catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage()."<br />";
}

