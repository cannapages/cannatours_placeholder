<?php
//Load MongoDB ORM
require('initilize.php');

class InvestorContact extends DBObject {
		const collectionName = 'investor_contacts';
		const use_random_id = false;
    public $name;
		public $business_name;
    public $email;
    public $phone;
		public $currently_invested;
		public $type_of_investment;
}

$obj = new InvestorContact();
$obj->name = $_POST['name'];
$obj->business_name = $_POST['business_name'];
$obj->email = $_POST['email'];
$obj->phone = $_POST['phone'];
$obj->currently_invested = $_POST['currently_invested'];
$obj->type_of_investment = $_POST['type_of_investment'];
$obj->update();

header( 'Location: /?message=investor' ) ;
die();

?>
