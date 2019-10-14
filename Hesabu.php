<?php


class Hesabu
{

    public function area_triangle($length,$height)
    {
        $result = 0.5 * $length * $height;
        echo "<br>$result";
    }


    public function area_circle($radius)
    {
      $result = 22/7 * $radius * $radius;
      echo "<br>$result";
    }


    public function area_square($length)
    {
        $result = $length*$length;
        echo "<br>$result";
    }


}

//CREATE AN OBJECT FROM THIS CLASS
//ACCESS THE FUNCTIONS OF THAT CLASS
//an object is a variable in programming

$k = new Hesabu(); //we created an object
$k->area_circle(5);
//echo "<br>";
$k ->area_triangle(78,80);
//echo "<br>";
$k->area_square(65);


//Class called Volumes
//three function s sphere, cylinder, square pyramid

