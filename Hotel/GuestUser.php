<?php

namespace Hotel;

/**
* GuestUser Class is a Model class for single Guest Entity
**/
class GuestUser
{
    private $guestName;
    private $guestAddress;
    private $guestPhone;
    private $guestEmail;
    private $dateCreated;

	/**
	* Generic constructor 
	* @param array
	**/
	function __construct( $guestData = array()) {

		$this->guestName 		= isset($guestData['name']) ? $guestData['name'] : '';
		$this->guestAddress 	= isset($guestData['address']) ? $guestData['address'] : '';
		$this->guestPhone 		= isset($guestData['phone']) ? $guestData['phone'] : '';;
		$this->guestEmail 		= isset($guestData['email']) ? $guestData['email'] : '';
		$this->dateCreated 		= isset($guestData['created']) ? $guestData['created'] : new \DateTime();
	}

	/**
	* @return string
	*/
	public function getGuestName() {
		return $this->guestName;
	}

	/**
	* @param string $guestName
	*/
	public function setGuestName($guestName) {
		$this->guestName = $guestName;
	}

	/**
	* @return string
	*/
	public function getGuestAddress() {
		return $this->guestAddress;
	}

	/**
	* @param string $guestAddress
	*/
	public function setGuestAddress($guestAddress) {
		$this->guestAddress = $guestAddress;
	}

	/**
	* @return string
	*/
	public function getGuestPhone() {
			return $this->guestPhone;
	}

	/**
	* @param string $guestPhone
	*/
	public function setGuestPhone($guestPhone) {
		$this->guestPhone = $guestPhone;
	}

	/**
	* @return string
	*/
	public function getGuestEmail() {
		return $this->guestEmail;
	}

	/**
	* @param string $guestEmail
	*/
	public function setGuestEmail($guestEmail) {
		if(filter_var($guestEmail, FILTER_VALIDATE_EMAIL)) {
		     //Valid email!
			$this->guestEmail = $guestEmail;
		}
		$this->guestEmail = '';
	}

	/**
	* @return datetime
	*/
	public function getDateCreated() {
		return $this->dateCreated;
	}

	/**
	* @param datetime $dateCreated
	*/
	public function setDateCreated($dateCreated) {
		$this->dateCreated = $dateCreated;
	}

}