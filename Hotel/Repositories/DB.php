<?php

namespace Hotel\Repositories;

/**
* Generic DB Class to do all prepare single point of Database connection
**/
class DB
{
	protected $servername 	= "127.0.0.1";
	protected $username 	= "root";
	protected $password 	= "root";
	protected $dbname 		= "guest_records";
	protected $charset 		= 'utf8';
  	public 	  $pdo 			= null;

	/**
	* Generic constructor 
	* @param array
	* @return bool
	**/
	function __construct( $data ) {
	    if(isset($data['servername']) && $data['servername'] != '') 	$this->servername 	= $data['servername'];
	    if(isset($data['username']) && $data['username'] != '') 	$this->username 	= $data['username'];
	    if(isset($data['password']) && $data['password'] != '') 	$this->password 	= $data['password'];
	    if(isset($data['dbname']) && $data['servername'] != '') 		$this->dbname 		= $data['dbname'];

		$dsn = "mysql:host=$this->servername;dbname=$this->dbname;charset=$this->charset";
		$options = [
		    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
		    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
		    \PDO::ATTR_EMULATE_PREPARES   => false,
		];
		try {
      		$this->pdo = new \PDO($dsn, $this->username, $this->password, $options);
		} catch (\PDOException $e) {
		   throw new \PDOException($e->getMessage(), (int)$e->getCode());
		   die('Could not connect: ' . $e->getMessage());
		}
	}
}