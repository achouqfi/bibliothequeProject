
<?php
include 'connect.php';

    if(isset($_POST['submit']))
    {
        $auteurs = "";
        $titre=$_POST['titre'];
        $prix=$_POST['prix'];
		$cover= $_FILES['cover']['name'];
        $afficheImg="image/".$cover;
        move_uploaded_file($_FILES ['cover']['tmp_name'],$afficheImg);

        foreach ($_POST['auteur'] as $auteur) {
            $auteurs .= $auteur . " ";
        }

        $result=$connectdb->prepare("INSERT into livre(cover, titre, prix, auteur) values('$cover', '$titre', '$prix', '$auteurs')");
        $result->execute();

         header('location:books.php');

    }
?>