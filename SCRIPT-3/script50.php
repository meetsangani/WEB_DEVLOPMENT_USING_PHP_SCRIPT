<?php
function test_odd($var)
  {
  return($var & 1);
  }
$a1=array(10,20,30,40,50);
print_r(array_filter($a1,"test_odd"));
?>