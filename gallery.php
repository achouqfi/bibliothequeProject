<?php
   include 'connect.php';
   
   $result=$connectdb->query('SELECT * FROM livre');
   $result->execute();
   ?>
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
               <img src="/crud-brief/icon/cancel (1).png" alt="close" height="30px">
            </div>
            <span class="icons">
            <i> <img src="/crud-brief/icon/facebook.png" alt="facebook"></i>
            <i > <img src="/crud-brief/icon/instagram.png" alt="instagram"></i>
            <i ><img src="/crud-brief/icon/linkedin.png" alt="linkedin"></i>
            <i><img src="/crud-brief/icon/Twitter.png" alt="Twitter"></i>
            </span>
         </ul>
      </nav>
      <!--  book page  -->
      <div class="gallery">
         <div class="separation">
            <h1>GALLERIE</h1>
         </div>
         <form class="form" id="filter">
            <select name="auteur" id="auteur">
               <label for="name">auteur:</label>
              <option selected disabled>choisirr</option>
               <?php
                  while($row=$result->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                  ?>
               <option value="<?php echo $auteur ?>">
                  <?php echo $auteur; ?>
               </option>
               <?php } ?>
            </select>
            <div class="form-fild">
               <label for="min_prix">Prix Min : </label>
               <input min="0" id="min" name="min_prix" type="number"/>
            </div>
            <div class="form-fild">
               <label for="max_prix">Prix Max :  </label>
               <input min="0" id="max" type="number" name="max_prix"/>
            </div>
         </form>

         <div class="gallerie">
            <?php
               $result1=$connectdb->query('SELECT * FROM livre');
               $result->execute();
               while($row1=$result1->fetch(PDO::FETCH_ASSOC)) {
                   extract($row1);
                       ?>
            <div class="gallery-images">
               <div class="images">
                  <div class="card">
                     <?php echo "<img src='image/".$cover."' width ='30px' >";?>
                     <div class="text">
                        <h2 class="title">
                           <?php echo $titre ?> 
                           <a href="#" class="prix"><?php echo $prix ?></a>
                        </h2>
                        <h3 class="author">
                           <a href="#" class="author_name"><?php echo $auteur ?></a>
                        </h3>
                     </div>
                  </div>
               </div>
               </div>
            <?php
               }
               ?> 
         </div>
      </div>


      <!--  footer   -->
      <div class="footer">
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
      <script src="/crud-brief/js/filtrage.js"></script>
   </body>
</html>