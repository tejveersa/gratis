<?php
if( $_REQUEST["fname"]){
  $sub_total = $_REQUEST["fname"]
}
if( $_REQUEST["lname"]){
  $gratuity_rate = $_REQUEST["lname"]
}

$gratuity=($sub_total*$gratuity_rate)/100;
$total=$sub_total+$gratuity;
echo("Gratuity Amount= $gratuity ");
echo("Total= $total");

?>
