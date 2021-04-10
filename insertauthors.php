<?php

include 'connect.php';

    if(isset($_POST['submitt']))
    {   
        $name=$_POST['name'];
        $DDN=$_POST['date_de_naissance'];
        $photo= $_FILES['photo']['name'];

        $afficheImg="image/".$photo;
        move_uploaded_file($_FILES ['photo']['tmp_name'],$afficheImg);

        $result=$connectdb->query("INSERT into auteur( name, DDN, photo) values('$name','$DDN','$photo')");
        header('location:authors.php');
    }
?>