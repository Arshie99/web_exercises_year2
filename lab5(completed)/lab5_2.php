<?php
//variables
$cities = array('Japan' => 'Tokyo','Mexico' => 'Mexico City','USA' => 'New York City',
'India' => 'Mumbai','korea' => 'Seoul','China' => 'Shanghai','Nigeria' => 'Lagos',
'Argentina' => 'Buenos Aires','Egypt' => 'Cairo','England' => 'London');

//print array
foreach ($cities as $country => $city)
{
  echo $city . " is in " . $country . ".<br/>";
}
?>
