<?php 
$numbers=array(10,20,30,40,50);
unset($numbers[2]);
foreach($numbers as $num)
{
    print_r($num);
    echo "<br>";
}
?>