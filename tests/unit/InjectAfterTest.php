<?php

use app\models\InjectAfter;

class InjectAfterTest extends PHPUnit_Framework_TestCase {
	public $injectObj;
	
	public function setUp() 
	{
		$this->injectObj = new InjectAfter();
	}

	public function test_push_to_list() 
	{
		$inputArray = ["foo" => 3, "bar" => 1, "mac" => 11];
		$afterKey = "foo";
		$newKey = "ios";
		$newValue = "11";
		$response = $this->injectObj->doAction($inputArray, $afterKey, $newKey, $newValue);
		$this->assertCount(4, $response);
	}

	public function test_push_to_list_position_at_end() 
	{
		$inputArray = ["foo" => 3, "bar" => 1, "mac" => 11];
		$afterKey = "mac";
		$newKey = "ios";
		$newValue = "12";
		$response = $this->injectObj->doAction($inputArray, $afterKey, $newKey, $newValue);
		$this->assertEquals(end($response), '12');
	}

	public function test_push_to_list_position_at_second() 
	{
		$inputArray = ["foo" => 3, "bar" => 1, "mac" => 11];
		$afterKey = "foo";
		$newKey = "ios";
		$newValue = "12";
		$response = $this->injectObj->doAction($inputArray, $afterKey, $newKey, $newValue);
		$response = array_values($response);
		$this->assertEquals($response[1], '12');
	}

	public function test_key_exists_in_list() 
	{
		$inputArray = ["foo" => 3, "bar" => 1];
		$afterKey = "foo";
		$newKey = "bar";
		$newValue = "new value";
		$response = $this->injectObj->doAction($inputArray, $afterKey, $newKey, $newValue);
		$this->assertEquals($response['bar'], 'new value');
	}
	

	
}
