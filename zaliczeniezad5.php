<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Daniel zadanie5</title>
     <meta name="description" content="php">
     <meta name="keywords" content="zadanie 3,4">
     <meta name="Daniel" content="php">
     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="arkusz.css">
  </head>
 <body>
  
  <?php               
       $liczby = '2,6,10'; 
       $liczba = explode(',', $liczby); 
       $sumaParzyste = 0;
       $sumaNieparzyste = 0;
       foreach($liczba as $liczba)
      {
       if(($liczba%2) == 0)
      {
	  $parzyste[] = $liczba;
	  $sumaParzyste += $liczba;
      }
       else
     {
	  $nieparzyste[] = $liczba;
	  $sumaNieparzyste += $liczba;
       echo "<br />Błędne dane liczba nieparzysta ";     
     }
      
     }
       echo $liczby." <br>Liczby to ".$liczby." Suma liczb Parzystych ".$sumaParzyste;
     ?>    

  </body>
</html>
