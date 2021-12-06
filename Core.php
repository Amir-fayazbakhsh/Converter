<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;

interface text {
	public function output();
	public function value($data);
	public function proccess();
}

class Pdf implements text {
	public $data;
	public $pdf;
	public function value($data) {
		$this->data = $data;
	}
	public function proccess() {
		// instantiate and use the dompdf class
		$options = new Options();
		$options->set('defaultFont', 'Courier');
		$this->pdf = new Dompdf($options);
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

?>