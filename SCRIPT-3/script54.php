<?php
$records = array(array('id' => 1,'first_name' => 'ABC','last_name' => 'LKJ',),
    array('id' => 2,'first_name' => 'BCD','last_name' => 'MNB',),
    array('id' => 3,'first_name' => 'CDE','last_name' => 'HGF',),
    array('id' => 4,'first_name' => 'FGH','last_name' => 'RTY',)
);
 $first_names = array_column($records, 'first_name');
print_r($first_names);
?>