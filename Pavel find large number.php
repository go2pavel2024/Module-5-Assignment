<?php

$num1=4;
$num2= 5;
$num3= 6;

if (($num1 < $num2) & ($num2 < $num3)) 
{
    printf("The largest value is:%d", $num3);
}
else if (($num1 > $num2) & ($num3 < $num1))
{
    printf("The largest value is: %d", $num1);
}
else if (($num1 < $num2) & ($num3 < $num2))
{
    printf("The largest value is:%d", $num2);
}
else 
printf("Invalid number");

?>