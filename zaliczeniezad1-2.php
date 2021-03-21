<!DOCTYPE html>
<html lang="pl">

  <head>
     <meta charset="utf-8">
     <title>Daniel zadanie 1-2</title>
     <meta name="description" content="php">
     <meta name="keywords" content="php zadania 1-2">
     <meta name="Daniel" content="php">
     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="arkusz.css">
  </head>
  <body>
  
  <?php
      
      $numer = 4;
      $numer2 ="4";
       
        if($numer==$numer2){
        echo " $numer jest równy $numer2";}
        else{
        echo "$numer nie jest równy $numer2";}
        echo "<br>";  
      
        if($numer===$numer2){
        echo " $numer jest tego samego typu $numer2";}
        else{
        echo "$numer nie jest tego samego typu  $numer2";}
        echo"<br>"; 
      
       
      // operator ==	Prawda jeśli $a jest równe $b.
      // operator ===   Prawda jeśli $a jest równe $b i są tego samego typu
    ?>
    <?php
      
      $a1=2;
      $b2=8;
      $c3=6;
        if ($a1 < $b2 || $b< $c3){
        echo "<br>";
        echo "$a1 jest mniejsze $b2 a $b2 jest wieksza od $c3";
        echo"<br>";
        echo "Największa liczbą jest $b2";

    } 
      ?>

  </body>

</html>
