
<?php
    include 'connect.php';

    $del= $_GET["del"];

    $result=$connectdb->prepare("DELETE FROM `livre` WHERE  id=$del");
    $result->execute();

    header('location:books.php');
    

