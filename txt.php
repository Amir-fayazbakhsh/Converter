<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
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
	public $pdf;
	public function value($data) {
		$this->data = $data;
	}
	public function proccess() {
		// instantiate and use the dompdf class
			$this->pdf = new Dompdf();
			$this->pdf->loadHtml($this->data);

			// (Optional) Setup the paper size and orientation
			$this->pdf->setPaper('A4', 'landscape');

			// Render the HTML as PDF
			$this->pdf->render();
	}
	public function output() {
		// Output the generated PDF to Browser
		$this->pdf->stream();
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

if(isset($_POST['btn'])){
	
	$file = new fileManagment(new Pdf(), $_POST['text']);
	$file->proccess();
	return  $file->output();
}

?>