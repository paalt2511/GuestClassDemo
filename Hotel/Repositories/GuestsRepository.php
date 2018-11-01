<?php

namespace Hotel\Repositories;

use Hotel\Repositories\DB;

/**
* GuestsRepository Class to do all Database operations for GuestUser Entity
**/
class GuestsRepository
{
	private $db;
	
	/**
	* Generic constructor 
	* @param array
	**/
	public function __construct($data = array()) {
	    $this->db = new DB($data);
	}

	/**
	* method to insert guest user details in database
	* @param array
	**/
	public function addGuest($guestUser)
	{
		try {
			$stmt = $this->db->pdo->prepare('INSERT INTO guest (guest_name, guest_address, guest_phone, guest_email, date_created) VALUES ( ?, ?, ?, ?, NOW())');
			$res = $stmt->execute([$guestUser->getGuestName(), $guestUser->getGuestAddress(), $guestUser->getGuestPhone(), $guestUser->getGuestEmail()]);
		}
		catch( \PDOException $Exception ) {
		    // Note The Typecast To An Integer!
		    print $Exception->getMessage() . 'Error Code - '.(int)$Exception->getCode();
		}
		return $res;
	}
}