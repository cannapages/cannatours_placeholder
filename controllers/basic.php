<?php
//Load MongoDB ORM
require('initilize.php');

class BasicContact extends DBObject {
		const collectionName = 'basic_contacts';
		const use_random_id = false;
    public $name;
    public $email;
    public $phone;
    public $wish;
		public $next_vacation;
}

$obj = new BasicContact();
$obj->name = $_POST['name'];
$obj->email = $_POST['email'];
$obj->phone = $_POST['phone'];
$obj->wish = $_POST['wish'];
$obj->next_vacation = $_POST['next_vacation'];
$obj->update();

header( 'Location: /?message=basic' ) ;
die();

?>
