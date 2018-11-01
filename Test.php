<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("autoload.php");
/**
* Test Class to prepare as sample test inputs 
**/
class Test {

	private $guest = null;

	/**
	* Generic constructor 
	* @param array
	**/
	public function __construct($data = array()) {
	    $this->guest = new Hotel\Guest();
	}

	/**
	* @param void
	* print response from addGuest method
	**/
	public function testAddGuest() {
		$data = array('name'=> 'User', 'address' => 'My Address', 'phone' => '+1-943-115-5456', 'email' => 'user@hotel.com');

		try {
			var_dump($this->guest->addGuest($data));
		} catch (\Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
 
 	/**
	* @param void
	* print response from addGuests method from Guest Class
	**/
	public function testAddMultipleGuests() {
		$data = array(
		  array('name'=> 'User1', 'address' => 'My Address1', 'phone' => '+1-234-563-3242', 'email' => 'user1@hotel.com'),
		  array('name'=> 'User2', 'address' => 'My Address2', 'phone' => '+1-543-546-5633', 'email' => 'user2@hotel.com'),
		  array('name'=> 'User3', 'address' => 'My Address3', 'phone' => '+1-785-543-5653', 'email' => 'user3@hotel.com')
		);
		try {
			var_dump($this->guest->addGuests($data));
		} catch (\Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
}

$test = new Test();
$test->testAddGuest();
$test->testAddMultipleGuests();

