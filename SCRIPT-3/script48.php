<?php
function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Yellow","BLUE","CYAN");
print_r(array_reduce($a,"myfunction"));
?>