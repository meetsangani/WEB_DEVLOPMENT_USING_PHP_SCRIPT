<?php
$cities=array("Dubai","United Kingdom","Paris");
rsort($cities);
foreach($cities as $city)
{
    print_r($city);
    echo "<br>";
}
?>
