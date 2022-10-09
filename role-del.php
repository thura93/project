<?php
    include("db.php");
    session_start();

    $db = mySQL();

    $id = $_GET['id'];
    

    $sql = "DELETE FROM roles WHERE id = '$id' ";
    $db->query($sql);
     
    $_SESSION['success'] = "Role Deleted Successfully";
    header("location: role-index.php");