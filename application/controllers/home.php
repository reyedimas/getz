<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('model_barang');
    }

	public function index()
	{
		$data['record']     =    $this->model_barang->tampil_data()->result();
		$data['slide']     =    $this->model_barang->tampil_data_slide()->result();
		$this->template->load('template','product/product',$data);
	}
}
