

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
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
                <img src="/crud-brief//icon/cancel (1).png" alt="close" height="30px">
            </div>
            <span class="icons">
                <i> <img src="/crud-brief//icon/facebook.png" alt="facebook"></i>
                <i > <img src="/crud-brief//icon/instagram.png" alt="instagram"></i>
                <i ><img src="/crud-brief//icon/linkedin.png" alt="linkedin"></i>
                <i><img src="/crud-brief//icon/Twitter.png" alt="Twitter"></i>
            </span>
        </ul>
    </nav>

    <!--  authors page  -->
    
    <main class="authors">
      <div class="separation">
          <h1>EDITE AUTEUR</h1>
      </div>

      <form class="form" action="insertauthors.php" method="Post" enctype="multipart/form-data" >
        <div class="form-fild">
          <label for="full_name"> Nom</label>
          <input type="text" placeholder="Full name" name="name" />
        </div>
      <form class="form">
        <div class="form-fild">
          <label for="birthday">date de naissance</label>
          <input type="date" placeholder="Birthday" id="birthday" name="date_de_naissance" />
        </div>
        <div class="form-fild">
            <div class="file">
                Chose File...<input type="file" placeholder="Full name" id="photo" name="photo" />
            </div>
        </div>

        <button class="Btnfitre" name="submitt">ajouter </button>
        
      </form>


      <div class="table">
        <table>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>nom</th>
                <th>date de naissance</th>
                <th>Actions</th>
            </tr>
        
        <?php

        include 'insertauthors.php'; 

        $result=$connectdb->query('SELECT * FROM auteur');
        $result->execute();
        ?>


      <?php

        while($row=$result->fetch(PDO::FETCH_ASSOC))
            {
                extract($row);
                    ?>
                    <label for=""></label><tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $DDN;?></td>
                        <td><?php echo "<img src='image/".$photo."' width ='30px' >";?></td>
                        <td >
                          <a class="btnd" href="deleteauthors.php?eid=<?php echo $id;?>"> Delete</a>
                          <a class="btnd" href="editAuthors.php?did=<?php echo $id;?>"> Edit</a>
                        </td>
                    </tr>
                    
                    <?php
            }
        ?> 
        </table>
    </div>
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
    </div>
  

    <script src="/crud-brief/js/nav.js"></script>
</body>
</html>