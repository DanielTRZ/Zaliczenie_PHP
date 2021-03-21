<!DOCTYPE html>
<html lang="pl">

  <head>
     <meta charset="utf-8">
     <title>Daniel zadanie 8</title>

     <meta name="description" content="php">
     <meta name="keywords" content="php zadania8">
     <meta name="Daniel" content="php">
     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="arkusz.css">
  </head>
  <body>
  
   
<?php
  if (!file_exists('sedziowie.txt')) 
  {
    echo 'Nie znaleziono pliku!';
    exit;
  }
  $tablica=file('sedziowie.txt');
  if (count($tablica)===0)
  {
    echo 'Plik jest pusty!';
    exit;
  }
  foreach($tablica as $wiersz)
  echo $wiersz.'<br />';
?>

  </body>
</html>
