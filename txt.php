<?php
interface text {
	public function output();
	public function value($data);
	public function proccess();
}

class Html implements text {
	public $data;
	public function value($data) {
		return $this->data = $data;
	}
	public function proccess() {

	}
	public function output() {
		echo "HTML " . $this->data;
	}
}

class Pdf implements text {
	public $data;
	public function value($data) {
		$this->data = $data;
	}
	public function proccess() {

	}
	public function output() {
		return "PDF  " . $this->data;
	}
}

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
$data = "is our type";
$file = new fileManagment(new Html(), $data);
$file->proccess();
echo $file->output();
?>