
<!DOCTYPE HTML>
<html>  
<body>

<form action="BMI.php" method="post">
Lengte in meters: <input type="value" name="Lengte" placeholder="1.8"><br>
Gewicht in kg: <input type="number" name="Gewicht" placeholder="70"><br>
<input type="submit" value="Bereken je BMI">
</form>

<?php
if (isset($_POST["Lengte"]))
{
  $lengte = $_POST["Lengte"];
  $gewicht = $_POST["Gewicht"];
  $bmi = $gewicht / ($lengte * $lengte);

   
  echo "jouw lengte is $lengte en jouw gewicht is $gewicht en je BMI  is " . round($bmi);
} 
else 
{
  $text = null;
  echo "niks ingevuld";
}
?>
</body>
</html>



