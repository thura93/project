<?php

use Libs\Database\MySQL;

    include("db.php");
    session_start();

    $db = MySQL();

    $name = $_POST['name'];
    $value = $_POST['value'];

    $sql = "INSERT INTO roles (name, value) VALUES (:name , :value)";
    $statement = $db->prepare($sql);
    $statement->execute(["name" => $name, "value" => $value]);
     
    $_SESSION['success'] = $name . " Role Created Successfully";
    header("location: role-index.php");