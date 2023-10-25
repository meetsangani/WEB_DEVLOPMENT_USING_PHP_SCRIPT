<?php 
$person=array("name"=>"ABC","age"=>30,"email"=>"ABC30@gmail.com");
$remove=array_pop($person);
echo "Removed Arry is :";
print_r($remove);
echo "<br>";
print_r($person);
?>