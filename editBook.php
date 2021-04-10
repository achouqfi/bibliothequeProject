<?php
    include 'insertbook.php'; 

    $eid = $_GET["did"];
   
    $result=$connectdb->prepare("SELECT * FROM `auteur`");
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
            <h1>EDIT LIVRE</h1>
        </div>
        <form  class="forme" action="EProcessBooks.php?eid=<?php echo $_GET["did"] ?>" method="Post"  enctype="multipart/form-data" >
            <div class="form-fild">
                <label for="title">titre :</label>
                <input type="text" placeholder="title"  name="titre">
            </div>

            <div class="form-fild">
                <div class="file">
                    <label for="" class="placeholder">
                         Cover :
                    </label>
                    <input type="file" id="cover" name="cover" />
                </div>
            </div>
                <label for="authors">auteurs:</label>
            <select name="auteur[]" id="" multiple>
                <?php
                    while($row=$result->fetch(PDO::FETCH_ASSOC)){
                        extract($row);
                ?>
                <option value="<?php echo $row["name"]?>">
                <?php echo $name; ?>
                </option>
                <?php } ?>
            </select>
            
            <div class="form-fild">
                <label for="price">prix :</label>
                <input type="number" placeholder="price..." name="prix">
            </div>
            <button class="Btns" name="submit">actualiser</button>
        </form>
    </main>
    
    <!--  footer   -->

    <div class="footer" style="margin-top: 30%">
        <div class="footer-con">
            <div class="icon-sm">
                <div class="sm">
                    <h3>Restons connectés </h3>
                </div>
            <ul class="icon">
                <li> <a href="#"><img src="/crud-brief//icon/facebook.png"></a></li>
                <li> <a href="#"><img src="/crud-brief//icon/instagram.png"></a></li>
                <li> <a href="#"><img src="/crud-brief//icon/linkedin.png"></a></li>
                <li> <a href="#"><img src="/crud-brief//icon/Twitter.png"></a></li>
            </ul>
        </div>
        <div class="espace-mail">
            <div class="titre">
                <h3>Souscrire à notre Newsletter</h3>
            </div>
            <div class="New">
                <input class="Newsletter" placeholder="Saisir votre email" type="Saisir votre email">
                <button class="Subscribe">Envoyer</button>
            </div>
        </div>
    </div>

  

    <script src="/crud-brief/js/nav.js"></script>
</body>
</html>
</body>
</html>

    
    



