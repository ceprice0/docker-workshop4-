<?php

try {
    $conn = new PDO(
        "mysql:host=db;dbname=docker_database",
        "root",
        "12345"
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Connection failed: " . $e->getMessage());
}

?>