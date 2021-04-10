
<?php
    include 'connect.php';

    $eid= $_GET["eid"];
    $result=$connectdb->prepare("DELETE FROM `auteur` WHERE  id=$eid");
    $result->execute();

    header('location:authors.php');
    


