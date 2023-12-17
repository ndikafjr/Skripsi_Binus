<?php if(!defined('BASEPATH')) exit('No Direct Script Allowed !');
/**
*
*/
class M_dashrs extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->db = $this->load->database('default', true);
		$this->db2 = $this->load->database('warehouse', true);
	}


public function get_nama_faskes_5besar(){
	$query = $this->db->query("SELECT NAMA, SUM(JUMLAH) AS JML FROM rs.WH_FASKES_BULANAN WHERE TAHUN ='2020' GROUP BY NAMA, JUMLAH ORDER BY SUM(JUMLAH) DESC");
	if($query->num_rows() > 0){
		foreach($query->result() as $data){
			$hasil[] = $data;
		}
		return $hasil;
	}
}

public function get_jumlah_faskes_perid_bulanan($tahun, $namafaskes){
	$query = $this->db->query("SELECT BULAN, SUM(JUMLAH) AS JUMLAH FROM rs.WH_FASKES_BULANAN WHERE TAHUN ='$tahun' AND NAMA='$namafaskes' GROUP BY  JUMLAH,BULAN ORDER BY BULAN ASC");
	if($query->num_rows() > 0){
		foreach($query->result() as $data){
			$hasil[] = $data;
		}
		return $hasil;
	}
}

}
?>
