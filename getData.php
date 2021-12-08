<?php

require_once 'Core.php';

class fileManagment {

	public $type;
	public $data;
	public function __construct(text $type, $data) {
		$this->data = $data;
		$this->type = $type;

		//send data to chooses class
		$this->type->value($this->data);

	}

	public function proccess() {
		return $this->type->proccess();
	}

	public function output() {
		return $this->type->output();
	}
}

if (isset($_POST['btn'])) {

	if (!isset($_POST['optradio'])) {
		header("location:index.php");
	} else {
		$outType = $_POST['optradio'];
		$objType = new $outType;

		$file = new fileManagment($objType, $_POST['text']);
		$file->proccess();
		return $file->output();}

}
?>