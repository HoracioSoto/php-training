<?php
// dql.php
require_once "bootstrap.php";

$query = $entityManager->createQuery('SELECT p.name FROM Province p');
$result = $query->getResult();

foreach ($result as $province) {
    echo $province['name'] . "</br>";
}
?>
