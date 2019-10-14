<?php

$scores = [55,67,45,67,98,34,56,87,65,33,23,59,89,87,76,65,54,43,45,33,28,34,67,89,90];

$names = ["zack","makuri","james","adesh","farah","mose","bela","jane","kevo"];

//access the values over array
echo $scores[0]; //first score
echo "<br>";
//echo "\n";
echo $names[2];
//echo "\n";
echo "<br>";

echo count($scores);
//echo "\n";
echo "<br>";
echo sizeof($scores);
echo "<br>";
//echo "\n";
echo array_sum($scores);
echo "<br>";
sort($scores);
echo "<br>";
var_dump($scores);





foreach ($names as $jina)
{
    echo "$jina \n";
}







