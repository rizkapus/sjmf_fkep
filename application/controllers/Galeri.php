<?php
class Galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function galeri_foto(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Galeri Foto SJMF FKEP"
		);
		$this->ViewMdl->loadView("galeri_foto",$data);
	}
}

