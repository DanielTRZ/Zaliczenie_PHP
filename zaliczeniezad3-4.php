<!DOCTYPE html>
<html lang="pl">

<head>
<meta charset="utf-8">
     <title>Daniel zadanie 3-4</title>
     <meta name="description" content="php">
     <meta name="keywords" content="zadanie 3,4">
     <meta name="Daniel" content="php">
     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="arkusz.css">
  </head>
  <body>
  
  <?php
      
  $owoce =array("Banan","Kiwi","Ananas","Jabłko");
      echo "Pierwszy owoc to : $owoce[0]";
      echo"<br>";
      echo "Ostatni owoc to: $owoce[3]";
      echo "<br>";
      ?>
    <?php

     $owoce =array("Banan","Kiwi","Ananas","Jabłko");   
      sort($owoce);
 
      for ($k=0; $k <= 3; $k++){
      echo"<br>";    
      echo $owoce[$k]."<br \>";}
   ?>
   <?php
            
    $dane=array(12, "Samochód", 13.8, "Komputer", 13);
    $suma = array_sum($dane); 
      echo "Suma liczb to : ".$suma; 
      echo "<br>";
  
    foreach ($dane as $tab ){
    echo $tab.', ';
    }
     ?>
    
   <?php
    
      $dane=array(12, "Samochód", 13.8, "Komputer", 13);
       echo "<br>";
       echo $dane[1];
       echo "<br>";
       echo $dane[3];
    
     ?>
      
    </body>
</html>
