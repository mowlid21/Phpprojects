<?php

//echo "Hello world";
//print " Second Hello World Hello world";
//print "<h1> Second Hello World Hello world</h1>";
//

echo  "<h1> Second Hello World Hello world</h1>";

//echo  "<h1> Second Hello World Hello world</h1>";


//        Php Variables
//...is a name that stores data/value
// A variable is a container of data
$name = "kevin <br>";
echo $name;

//String - sequence of dtext inside Double or single quotes
$name = "Facebook <br>";
echo $name;

//case sensitivity
$Name = "Arsenal";
echo $Name. "<br>";
echo $name. "<br>";



$x = 100;
$y = 67;

echo $x + $y. "<br>";



$r = 7;
$h = 14;
$pi = 3.142;

//calculate the volume of a cylinder using the above data
echo $pi*$r*$r*$h. "<br>";

//r**2'

//PHP STRINGS
//A string is a sequence of text wrapped in either
//single or double quotes
//e.g "kenya", "eMobilis", "westlands"

$company = "eMobilis";
echo $company."<br";


//Functions
//Strlen() : returns the length of a string

$count = strlen($company);
echo $count."<br>";

//Str_words_count () : counts the number of words in a string
$num_words = str_word_count($company);
echo $num_words."<br>";

//strrev() : reverse a string
$rev_string = strrev($company);
echo $rev_string."<br>";


//assignment
//1. how to seach for a text in a string using strpos() function
//2. how to replace a character with some other character using
//str_replace()



//PHP NUMBERS
//1. Floats
//2. integers

//integers: is a non decimal positive or negative number

$num_of_children = 7;

var_dump($num_of_children)."<br>";

//float; numbers with decimal part/point
$height = 5.7;
var_dump($height). '<br>';

$name = "Kamau";
var_dump($name)."<br>";








?>