<?php
namespace Main;

require 'includes/courier.php';
require 'includes/dummy.php';
$courier = new  \shipping\Courier('What should be in this?');


$courier->shipMe();


?>