<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent ::__construct();
		$this->load->helper('url');
		$this->load->model('M_dashrs');
	}


	public function indexPersi(){
		// $this->load->view('css');
		$tahun=date('Y');
		$bulan=date('m')-1;
		if($bulan=='01'){
			$strbulan='Januari';
		}elseif($bulan=='02'){
			$strbulan="Februari";
		}elseif($bulan=='03'){
			$strbulan="Maret";
		}elseif($bulan=='04'){
			$strbulan="April";
		}elseif($bulan=='05'){
			$strbulan="Mei";
		}elseif($bulan=='06'){
			$strbulan="Juni";
		}elseif($bulan=='07'){
			$strbulan="Juli";
		}elseif($bulan=='08'){
			$strbulan="Agustus";
		}elseif($bulan=='09'){
			$strbulan="September";
		}elseif($bulan=="10"){
			$strbulan="Oktober";
		}elseif($bulan=='11'){
			$strbulan="November";
		}elseif ($bulan=='12') {
			$strbulan="Desember";
		}
		$data=array(
			'faskes' => $this->M_dashrs->get_nama_faskes_5besar(),
			'strbulan' => $strbulan,
			'tahun' => $tahun
		);
		$this->load->view('css');
		//$this->load->view('menu');
		$this->load->view('indexPersi',$data);
		$this->load->view('js_persi',$data);
	}
}
