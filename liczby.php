<!DOCTYPE html>
<html lang="pl">

<head>
<meta charset="utf-8">
<title>Daniel zadanie Liczby</title>
<meta name="description" content="php">
<meta name="keywords" content="zadanie 3,4">
<meta name="Daniel" content="php">
<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" href="arkusz.css">
</head>
<body>
 
 <form action="liczby.php" method="GET">
  Liczba Początkowa <input type=numeric name="Start"/><br/>
 <br>
Liczba Końcowa <input type=numeric name="Stop"/><br/>
   <br>
  <input type=submit value="Wyślij"/>
  </form>
  <br>
  <br>
  Start: <?php echo $_GET['Start']?><br>
  Stop: <?php echo $_GET['Stop']?><br>
 <br>  
    
<?php
      $numer1 = $_GET["Start"];
      $numer2 = $_GET["Stop"];
      echo " Liczby z przedziału ; ".$numer1." i ".$numer2."<br>to ;";     
   
      for($i=$numer1; $i<=$numer2; $i++){
      echo " -- ".$i;
      }     
      ?>  
    
  </body>
</html>
