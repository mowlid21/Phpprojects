<?php

$cities = ["Nairobi","Kisumu","Arusha","Kampala","Mombasa"];

$population = [4,5,6,7,3,2,7];

print ($cities[0]);
print "<br>";
print ($population[0]);
print "<br>";

//indexed array
//Associative array

$countries = ["Kenya"=>"Nairobi","Uganda"=>"Kampala","Rwanda"=>"Kigali","Somali"=>"Mogadishu",];

print "<br>";
echo $countries["Somali"];

foreach ($countries as $key=>$value){
    echo "<br> $key $value";
}













