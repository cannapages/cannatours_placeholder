<?php
//Load MongoDB ORM
require('initilize.php');

class FacilityContact extends DBObject {
		const collectionName = 'facility_contacts';
		const use_random_id = false;
    public $owner_name;
		public $business_name;
		public $address;
    public $email;
    public $phone;
}

$obj = new FacilityContact();
$obj->owner_name = $_POST['owner_name'];
$obj->business_name = $_POST['business_name'];
$obj->address = $_POST['address'];
$obj->email = $_POST['email'];
$obj->phone = $_POST['phone'];
$obj->update();

header( 'Location: /?message=facility' ) ;
die();

?>
