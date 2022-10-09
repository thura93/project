<?php
    include("db.php");
    session_start();

    $db = mySQL();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $value = $_POST['value'];
    

    $sql = "UPDATE roles SET name = '$name', value = $value WHERE id = '$id' ";
    $db->query($sql);
     
    $_SESSION['success'] = $name . " Role Updated Successfully";
    header("location: role-index.php");