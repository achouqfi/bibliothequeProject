
<?php
include 'connect.php';

    if(isset($_POST['submit']))
    {
        
        $id = $_GET["eid"];
        $auteurs = "";
        $titre=$_POST['titre'];
        $prix=$_POST['prix'];
		$cover= $_FILES['cover']['name'];
        $afficheImg="image/".$cover;
        move_uploaded_file($_FILES ['cover']['tmp_name'],$afficheImg);

        foreach ($_POST['auteur'] as $auteur) {
            $auteurs .= $auteur . " ";
        }

        $result=$connectdb->prepare("UPDATE `livre` SET  `titre` = '$titre', `auteur` = '$auteurs', `prix` = '$prix', `cover` = '$cover' WHERE `id` = '$id';"); 
        $result->execute();

         header('location:books.php');

    }
?>
 