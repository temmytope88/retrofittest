<?php
  try{            
        include("test.php");
        
          $query = "INSERT INTO test (firstname, surname, email, git) VALUES (:firstname, :surname, :email, :git)";
          $stmt = $conn->prepare($query);

          $firstname = $_POST["firstname"];
          $surname = $_POST["surname"];
          $email = $_POST["email"];
          $git = $_POST["git"];

          $stmt->bindParam(':firstname', $firstname);
          $stmt->bindParam(':surname', $surname);
          $stmt->bindParam(':email', $email);
          $stmt->bindParam(':git', $git);
                      
                  }
 catch(PDOException $e){
        die('ERROR: '.$e->getMessage());
        
                  
      }