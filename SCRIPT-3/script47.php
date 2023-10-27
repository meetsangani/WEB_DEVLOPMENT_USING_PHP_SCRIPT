<?php
function myfunction($v)
{
  return($v*$v);
}

$a=array(10,20,30,40,50);
print_r(array_map("myfunction",$a));
?>