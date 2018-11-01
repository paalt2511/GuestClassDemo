<?php

namespace Hotel;

use Hotel\Repositories\GuestsRepository;
use Hotel\GuestUser;

/**
* Guest Class to which will have all Guest related operations
**/
class Guest {
	/**
	* @param $guest array
	* @return bool
	*/
	public function addGuest($guest) {
		$guestUser = new GuestUser($guest);
		$guestsRepository = new GuestsRepository();
		return $guestsRepository->addGuest($guestUser);
	}

	/**
	* @param $guest array
	* @return bool
	*/
	public function addGuests($guests = null) {
		$response = array();
		if(!$guests == null && !isset($guests) || !is_array($guests)) {
			$guests = (isset($_POST['guestArray']) && is_array($_POST['guestArray'])) ? $_POST['guestArray'] : array();
		}

		$guestsRepository = new GuestsRepository();
		foreach ($guests as $guest) {
			$response[] = $this->addGuest($guest);
		}
		
		return $response;
	}
}
