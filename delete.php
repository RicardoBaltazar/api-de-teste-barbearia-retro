<?php

require_once 'Db_connect.php';

$id = $_GET['id'];

try{
    $stmt = $pdo->prepare('DELETE FROM user WHERE id = :id');
    $stmt->bindParam(":id", $id);
    $stmt->execute();

} catch (PDOException $error) {
    echo 'Erro com banco de dados '.$error ->getMessage();
} catch(Exception $error) {
    echo 'Erro generico '.$error ->getMessage();
}


?>