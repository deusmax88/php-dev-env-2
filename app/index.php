<?php
require_once("vendor/autoload.php");
require_once("dbconf.php");

$sth = $mysqlPDO->prepare("SHOW DATABASES;");
$sth->execute();

$databases = [];
while($result = $sth->fetch()) {
    $databases[] = $result[0];
}

echo join("<br />", $databases);

echo "<br />";
echo "MongoDB driver example<br />";

$client = new MongoDB\Client("mongodb://mongo:27017");
$collection = $client->demo->beers;

//$result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

//echo "Inserted with Object ID '{$result->getInsertedId()}'";

$result = $collection->find(['name' => 'Hinterland']);
foreach($result as $entry) {
    echo $entry['_id'],' : ',$entry['brewery'],"<br />";
}

echo "Memcached driver test<br />";
$m = new Memcached();
$m->addServer('memcached', 11211);

//$m->add('testKey', 'testValue');
echo "<pre>";
//var_dump($m->getServerList());
//var_dump($m->getStats());

var_dump($m->getMulti(['testKey']));