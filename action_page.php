<?php

$sub_total = $_GET['fname'];
$gratuity_rate=$_GET['lname'];
$gratuity=($sub_total*$gratuity_rate)/100;
$total=$sub_total+$gratuity;
echo("Gratuity Amount= $gratuity ");
echo("Total= $total");

?>
