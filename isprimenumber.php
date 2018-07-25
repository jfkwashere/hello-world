<?php

if ($_GET)
  	
  //is_numeric( $_GET['number']) &&
    //           $_GET['number'] > 0 && 
  //  $_GET['number'] == round($_GET['number'], 0))
{
  
  $i = 2;
  
  $isPrime = true;
  
  while($i < $_GET['number']) 
 {
    
    if ($_GET['number'] % $i == 0) 
      //get speeled incorrect, but the program still runs

      // i think the whole if statement is left out
   
    {
      
      $isPrime = false;
      
    }
     $i++; 
}
  if($isPrime)// if isprime = true, whenever number is divded by i,
    // the remaider was never 0
  {
   
   echo "<p>".$i." is a prime number! </p>";
 } 
 
  else 
 {
   echo "<p>".$i." is a not prime</p>";
 }

}
 else if ($_GET) {
 
echo "<p>Please enter a positive whole number.</p>"; 
  
}
//echo "yo ".$_GET["name"]."!";
?>
<p> Enter a number... </p>
 
<form>
    <input name="number" type="text">
  

  <input type="submit" value="go!">
  

</form>
