<?php

namespace shipping;

class Courier {

	public $name;
	public $home_country;


	public function __construct() {
	}
	public function __destruct() {
	}

	public static function getCouriersByCountry($country) {
		return $courier_list;
	}

	public function shoutOut() {
		require_once 'dummy.php';

		$dummy = new \TheDummy\Dummy();
		echo '<hr >';
		var_dump($dummy);
		echo '<hr >';
	}

	public function shipMe(string $parcel) {
		echo 'Parcel was sent';
	}

}

?>