<?php
require "vendor/autoload.php";

use app\models\InjectAfter;

$injectAfter = new InjectAfter();
$inputArray = ["foo" => 3, "bar" => 1, "test_key_1" => 5, "test_key_2" => 19, "test_key_3" => 784];
$afterKey = "foo";
$newKey = "test_key_119";
$newValue = "233";

$response = $injectAfter->doAction($inputArray, $afterKey, $newKey, $newValue);	
	
echo '<pre>'; print_r($response); echo '</pre>'; die();




?>

