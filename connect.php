<?php
        
        $user = 'user';   // utilisateur
        $pass = 'user';  // mode de passe d'utilisateur  
        $dsn = 'mysql: host=localhost;dbname=bibliotheque';  //source de base de donnée
    
        try{ 
    
            $connectdb = new PDO($dsn,$user,$pass);  // start a new connection with DB
            
        }
    
        catch (PDOExeption $e) {
            echo 'failed' . $e -> getMessage();
        }
?>