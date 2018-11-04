<?php 


class School{
	public $stdntName = "fariya";
	public $dept      = "science";
	public $sex       = "female";
	public $session;
	public $user;
	public $userId;

	public function __construct($userName,$userId){
		$this->user=$userName;
		$this->userId=$userId;
		//echo "you are a student of ".$this->dept." department </br>";
	}

	public function displayDetails(){
		echo "username is $this->user"."user id is $this->userId </br>";
	}

	// public function admittion($year){
	// 	echo $this->stdntName." You are addmitted in ".$this->session=$year."</br>";
	// }
}

class PrimarySection extends School{
	public $level;
	public function displayDetails(){
		echo "username is $this->user"."user id is $this->userId "."user level is: $this->level </br>";
	}
	// public function psc(){
	// 	echo "80% students are".$this->sex. "and may be $this->age";
	// }
	
}

class Teacher{

	public function __get($a){
		echo $a."</br>";
	}
	public function __set($property, $value){
		echo " we set :$value </br>";

	}
	public function __call($method,$array){
		echo"call magic function ".$method." array arguments are: ".implode(',', $array);
	}
}



$user="tamanna ";
$userId="05";
// $objOfSchool = new School($user,$userId);
// $objOfSchool->displayDetails();
//$objOfSchool->admittion("2018");

$user="primary ";
$userId=" 01";

// $objOfPrimarySection = new PrimarySection($user,$userId);
// $objOfPrimarySection->level="admin";
// $objOfPrimarySection->displayDetails();
// $objOfPrimarySection->age="10";
// $objOfPrimarySection->psc();

$objOfTeacher = new Teacher();
$objOfTeacher->abc;
$objOfTeacher->property="__set magic property";
$objOfTeacher->undefinedMethod('2','4','6');

?>