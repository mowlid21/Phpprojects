<?php

function greet($name) //parameter
{
    echo "\nHello $name";
}


function area_circle($radius)
{
    $result = 22/7 * $radius * $radius;
    echo "\n$result";
}

function volume_cylinder ($radius,$height)
{
    $v = 22/7 * $radius * $radius * $height;
    echo "\n$v";
}




//volume_cylinder(17, 50);
//echo "<br>";
//volume_cylinder(17,141);



//area_circle(10);
//echo "<br>";
//area_circle(100.56);



//greet("Zack");
//echo "<br>";
//greet("Milton");
//echo "<br>";
//greet("Jack");