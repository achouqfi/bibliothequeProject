<?php
    include 'insertAuthors.php';

    $did= $_GET["did"];
   
    $result=$connectdb->prepare("SELECT * FROM `auteur` WHERE id=$did");
    $result->execute();
    $row=$result->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="aa.css"/>


</head>
<body>
    <!--  navbar  -->

      <nav>
        <div class="logo">
            <h2>BIBLIO</h2>
        </div>
        <div class="openMenu">
            <img src="/crud-brief/icon/menu.svg" alt="menu" height="40px" style="fill: white;">
        </div>
        <ul class="mainMenu">
            <li><a href="/crud-brief/index.php">ACCUEIL</a></li>
            <li><a href="/crud-brief/gallery.php">GALLERIE</a></li>
            <li><a href="/crud-brief/authors.php">AUTEURS</a></li>
            <li><a href="/crud-brief/books.php">LIVRES</a></li>
            <div class="closeMenu" >
                <img src="/icon/cancel (1).png" alt="close" height="30px">
            </div>
            <div class="icons">
                <i> <img src="/crud-brief//icon/facebook.png" alt="facebook"></i>
                <i > <img src="/crud-brief//icon/instagram.png" alt="instagram"></i>
                <i ><img src="/crud-brief//icon/linkedin.png" alt="linkedin"></i>
                <i><img src="/crud-brief//icon/Twitter.png" alt="Twitter"></i>
            </div>
        </ul>
    </nav>
    <main class="books">
            <div class="separation">
                <h1>Books</h1>
            </div>
            <section class="edit">
                    <form  class="form" action="eProcessAuthors.php" method="Post" enctype="multipart/form-data">
                        <input type="hidden" value ="<?php echo $row['id'];?>" name="id">
                        <div class="form-fild">
                            <label for="">Name</label>
                            <input type="name" value ="<?php echo $row['name'];?>" name="name">
                        </div>
                        <div class="form-fild">
                            <label for="">Date de naissance</label>
                            <input type="date" value ="<?php echo $row['DDN'];?>" name="date_de_naissance">
                        </div>
                        <div class="form-fild">
                                <div class="file">
                                    <div class="placeholder">
                                        choisir le fichier 
                                    </div>
                                    <input type="file" value="<?php echo "<img src='image/".$row['photo']."'>";?>" name="photo">
                                </div>
                            </div>
                        <button class="Btnfitre" type="submit" name="update">actualiser</button>
                    </form>    
            </section>

</body>
</html>

    
    



