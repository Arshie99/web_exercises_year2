
<?php

//variables
$cities = array('Tokyo','Mexico City','New York City',
'Mumbai','Seoul','Shanghai','Lagos','Buenos Aires','Cairo','London');

//print the array
foreach ($cities as $city)
{
  echo "$city<br />";
}


//sort array and print as ordered list
sort($cities);

echo "<br/><br/>";
echo "Sorted list<br/><br/>";

foreach ($cities as $city)
{
  echo "$city<br />";
}


//add elements, sort and print the array
$cities[] = 'Los Angeles';
$cities[] = 'Calcutta';
$cities[] = 'Osaka';
$cities[] = 'Beijing';


sort($cities);

echo "<br/><br/>";
echo "Sorted list with the array updated<br/><br/>";

foreach ($cities as $city)
{
  echo "$city<br />";
}

?>
