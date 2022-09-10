<?php
function soma($num1, $num2)
{
    $total = $num1 + $num2;
    return $total;
}

function soma2n($num1, $num2)
{
    $total = $num1 + $num2;
    echo "A Soma De $num1" . " + " . "$num2 = " . $total;
}

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
echo "A Soma De $num1" . " + " . "$num2 = " . soma($num1, $num2). "<br>";
soma2n($num1, $num2);
soma2n($num3, $num4);
?>