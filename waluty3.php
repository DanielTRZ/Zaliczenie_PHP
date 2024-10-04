<html lang="pl">
<form action="waluty3.php" method="post">
<input type="text" name="zlote">
<p>Wybierz walutę na którą ma być przeliczona wartosc</p>
<br>
 
<label><input type="radio" name="waluta1" value="1">EUR>USA</label> 
<label><input type="radio" name="waluta2" value="2"> EUR>PLN</label> 
<label><input type="radio" name="waluta3" value="3">PL>USA</label> 
<label><input type="radio" name="waluta4" value="4"> USA>EUR</label> 
<label><input type="radio" name="waluta5" value="5"> PL>EUR
</label> 

<input type="submit" value="przelicz">
</form>
<?php
if ($zlote = $_POST['zlote']){   

$euro = 3.85;
$dolary = 3.26;
  
$wynike = $zlote / $euro;
$wynikd = $zlote / $dolary;

$eurousa = $euro / $dolary / $zlote; 
$europln = $euro / $zlote;
$usaeuro = $dolary / $euro ;  
    
}
if( isset($_POST['waluta1']) ){

echo "$zlote euro = $eurousa dolara";}
else if( isset($_POST['waluta2']) )
{
      
echo "$zlote euro = $europln zlotego";
        
}
else if( isset($_POST['waluta3']) ){
         echo "$zlote zlotych = $wynikd dolary";
         
     }
     else if( isset($_POST['waluta4']) ){
         echo "$zlote dolar = $usaeuro euro";
     }
     else if( isset($_POST['waluta5']) ){
         echo "$zlote zloty = $wynike euro";
     }

      else {
       echo "Nie zaznaczylez zadnej opcji";
 }
   
?>
<h3>Wyskakuje bład dopóki nie zaznaczy się opcji ..<br>
Pozatym wszystko działa.</h3>
</html>


