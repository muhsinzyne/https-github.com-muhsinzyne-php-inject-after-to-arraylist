<?php

namespace  app\models;

class InjectAfter {

	function __construct() {

	}
	public function doAction(&$array, $afterKey, $newKey, $newValue) 
	{
		if (array_key_exists($afterKey, $array)) {
			$new = array();
			foreach ($array as $key => $value) {
				if ($newKey != $key) {

					$new[$key] = $value;
				}
				if ($key == $afterKey) {
					$new[$newKey] = $newValue;
				}
			}
			return $new;
		} else {
			$array[$newKey] = $newValue;
			return $array;
		}

	}

}