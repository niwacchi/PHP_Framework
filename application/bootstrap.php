<?php 
require 'core/ClassLoader.php';

$loader = new ClassLoader();
$loader->registerDire(dirname(__FILE__).'/core');
$loader->registerDire(dirname(__FILE__).'/models');
$loader->register();
?>