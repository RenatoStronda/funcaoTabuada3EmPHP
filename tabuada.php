<?php
function tabuada2n($num3, $num4)
{
    for($i=0; $i<=$num4; $i++)
    {
        $total = $i * $num3;
        echo "A Tabuada De $num3" . " * " . "$i = " . $total."<br>";
    }
}

$num3 = $_GET["num3"];
$num4 = $_GET["num4"];
tabuada2n($num3, $num4);
?>