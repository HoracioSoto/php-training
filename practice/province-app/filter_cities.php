<?php
require_once('../bugtracker/bootstrap.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $entityManager->createQuery('SELECT c.name FROM City c WHERE c.province = :id');
    $query->setParameter('id', $id);
    $result = $query->getResult();
    header('Content-Type: application/json');
    echo json_encode($result);
}
?>
