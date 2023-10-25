<?php 
$fruits=array("Apple","Banana","Mango","Grapes");
rsort($fruits);
foreach($fruits as $fruit)
{
    print_r($fruit);
    echo "<br>";
}
?>