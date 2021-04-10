<?php
    include 'connect.php';

    $id=$_POST['id'];
    $name=$_POST['name'];
    $DDN=$_POST['date_de_naissance'];
    $photo= $_FILES['photo']['name'];

    $afficheImg="image/".$photo;
    move_uploaded_file($_FILES ['photo']['tmp_name'],$afficheImg);

    $result=$connectdb->prepare("UPDATE `auteur` SET  `name` = '$name', `DDN` = '$DDN', `photo` = '$photo' WHERE `id` = '$id';"); 
    $result->execute();
    header('location:authors.php');
?>