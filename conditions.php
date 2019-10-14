<?php

//conditional statements
$score = 65;

if ($score >= 80)
{
    echo "Grade A";
}

else if ($score>=70 and $score<=79)
{
    echo "Grade A-";
}

else if ($score>=65 and $score<=69)
{
    echo "Grade B";
}

else if ($score>=60 and $score<=64)
{
    echo "Grade B-";
}

else if ($score>=59 and $score<=50)
{
    echo "Grade C";
}

else if ($score>=50 and $score<=49)
{
    echo "Grade C-";
}

else if ($score>=49 and $score<=45)
{
    echo "Grade D";
}

else if ($score>=40 and $score<=39)
{
    echo "Grade D-";
}

else
{
    echo "Grade E";
}