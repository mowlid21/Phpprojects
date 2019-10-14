<?php
//functions
$name = "john musa";
echo strtoupper($name);//call a function parameter/argument
echo "<br>";
echo $name;

echo "<br>";

echo ucwords($name);

echo "<br>";

echo str_word_count($name);

echo "<br>";

echo sqrt(144);
echo "<br>";

echo pow(2,5);

echo "<br>";

echo pow(2.5,5.3);
echo "<br>";
$result= pow(2.5,5.3); //
echo "<br>";

echo round($result, 2);
echo "<br>";
echo round($result,3);
echo "<br>";
echo round($result,0);

echo "<br>";
echo pow(2,3) * sqrt(100) * round(10.39) * max(20, 30, 21);
echo "<br>";
$ans= pow(2,3) * sqrt(100) * round(10.39) * max(20, 30, 21);
echo "<br>";
echo $ans;
file_put_contents("data.txt","\n$ans", FILE_APPEND);

$data = file_get_contents("data.txt");
echo "<br>";
echo $data;

//write a for loop save all numbers between 1 and 20
//to a text file

//$k=1;
//
//while ($k<=20){
//  echo "$k <br>";
//  $k++;
//}
//echo "<br>";
 for ($k=1; $k<=20; $k++) {
     echo "$k <br>";
     file_put_contents("zak1.txt","\n$k", FILE_APPEND);
 }

