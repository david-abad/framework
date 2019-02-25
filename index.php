<?php
require 'Controllers/Home.php';
$controller = new Home();
$controller->load();
$controller->testORM();
?>
