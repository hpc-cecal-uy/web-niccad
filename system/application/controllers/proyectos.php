<?php

class Proyectos extends Controller {

	function Proyectos() {
		parent::Controller();
	}

	function index() {
		$data['body'] = 'proyectos';
		$data['volver_style'] = '';
		$data['js_include'] = 
			'<script src="'.base_url().'js/nucleo.js" type="text/javascript" charset="utf-8"></script>'.
			'<script src="'.base_url().'js/jquery.featureList-1.0.0.js" type="text/javascript" charset="utf-8"></script>';
		$data['css_include'] =
			'<link rel="stylesheet" href="'.base_url().'css/nucleo.css" type="text/css" media="screen" />';
		$this->load->view('includes/template', $data);
	}
}

?>
