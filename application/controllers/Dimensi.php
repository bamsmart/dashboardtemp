<?php
header ( 'Access-Control-Allow-Origin: *' );

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Dimensi extends CI_Controller {
	/*
	 * ======================================================
	 * Copyright © 2019
	 * ======================================================
	 * Developer : Bambang T Lasiman
	 * Created : 01.03.2019
	 * Description :
	 * History :
	 * Code Date Who Description
	 * ======================================================
	 * C000 01.03.2019 Bambang T Lasiman First Create
	 * ======================================================
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'm_dimensi' );
		
		$this->load->library ( array (
				'form_validation',
				'session' 
		) );
	}
	public function submitData() {
		$mysqltime = date ( "Y-m-d H:i:s" );
		
		$this->db->trans_begin ();
		$data = array ();
		// =============================================
		$strCond = "wo_no = '" . $_POST ['wo_no'] . "' ";
		// =============================================
		$data ['dm_width_1'] = $_POST ['dm_width_1'];
		$data ['dm_width_2'] = $_POST ['dm_width_2'];
		$data ['dm_width_3'] = $_POST ['dm_width_3'];
		$data ['dm_width_4'] = $_POST ['dm_width_4'];
		$data ['dm_width_5'] = $_POST ['dm_width_5'];
		$data ['dm_height_1'] = $_POST ['dm_height_1'];
		$data ['dm_height_2'] = $_POST ['dm_height_2'];
		$data ['dm_height_3'] = $_POST ['dm_height_3'];
		$data ['dm_height_4'] = $_POST ['dm_height_4'];
		$data ['dm_height_5'] = $_POST ['dm_height_5'];
		$data ['dm_thick_1'] = $_POST ['dm_thick_1'];
		$data ['dm_thick_2'] = $_POST ['dm_thick_2'];
		$data ['dm_thick_3'] = $_POST ['dm_thick_3'];
		$data ['dm_thick_4'] = $_POST ['dm_thick_4'];
		$data ['dm_thick_5'] = $_POST ['dm_thick_5'];
		$data ['dm_weight_1'] = $_POST ['dm_weight_1'];
		$data ['dm_weight_2'] = $_POST ['dm_weight_2'];
		$data ['dm_weight_3'] = $_POST ['dm_weight_3'];
		$data ['dm_weight_4'] = $_POST ['dm_weight_4'];
		$data ['dm_weight_5'] = $_POST ['dm_weight_5'];
		$data ['ks_l_interface_1'] = $_POST ['ks_l_interface_1'];
		$data ['ks_l_interface_2'] = $_POST ['ks_l_interface_2'];
		$data ['ks_l_interface_3'] = $_POST ['ks_l_interface_3'];
		$data ['ks_l_interface_4'] = $_POST ['ks_l_interface_4'];
		$data ['ks_l_interface_5'] = $_POST ['ks_l_interface_5'];
		$data ['ks_l_back_1'] = $_POST ['ks_l_back_1'];
		$data ['ks_l_back_2'] = $_POST ['ks_l_back_2'];
		$data ['ks_l_back_3'] = $_POST ['ks_l_back_3'];
		$data ['ks_l_back_4'] = $_POST ['ks_l_back_4'];
		$data ['ks_l_back_5'] = $_POST ['ks_l_back_5'];
		$data ['ks_p_interface_1'] = $_POST ['ks_p_interface_1'];
		$data ['ks_p_interface_2'] = $_POST ['ks_p_interface_2'];
		$data ['ks_p_interface_3'] = $_POST ['ks_p_interface_3'];
		$data ['ks_p_interface_4'] = $_POST ['ks_p_interface_4'];
		$data ['ks_p_interface_5'] = $_POST ['ks_p_interface_5'];
		$data ['ks_p_back_1'] = $_POST ['ks_p_back_1'];
		$data ['ks_p_back_2'] = $_POST ['ks_p_back_2'];
		$data ['ks_p_back_3'] = $_POST ['ks_p_back_3'];
		$data ['ks_p_back_4'] = $_POST ['ks_p_back_4'];
		$data ['ks_p_back_5'] = $_POST ['ks_p_back_5'];
		$data ['modified_by'] = "SYS";
		$data ['modified_time'] = $mysqltime;
		// =============================================
		$this->m_dimensi->updateDimension ( $strCond, $data );
		// =============================================
		if ($this->db->trans_status () === FALSE) {
			$json = array (
					'success' => false,
					'message' => 'failed' 
			);
			$this->db->trans_rollback ();
		} else {
			$json = array (
					'success' => true,
					'message' => 'success' 
			);
			$this->db->trans_commit ();
		}
		
		echo json_encode ( $json );
	}
	
	public function listData() {
		$strSelect = 'wo_no,test_type,dm_width_1,dm_width_2,dm_width_3,dm_width_4,dm_width_5,dm_height_1,dm_height_2,dm_height_3,dm_height_4,dm_height_5,dm_thick_1,dm_thick_2,dm_thick_3,dm_thick_4,dm_thick_5,dm_weight_1,dm_weight_2,dm_weight_3,dm_weight_4,dm_weight_5 int(11)ks_l_interface_1,ks_l_interface_2,ks_l_interface_3,ks_l_interface_4,ks_l_interface_5,ks_l_back_1,ks_l_back_2,ks_l_back_3,ks_l_back_4,ks_l_back_5,ks_p_interface_1,ks_p_interface_2,ks_p_interface_3,ks_p_interface_4,ks_p_interface_5,ks_p_back_1,ks_p_back_2,ks_p_back_3,ks_p_back_4,ks_p_back_5';
		$strCond = "status = 'ACT'";
		
		$startPage = $_POST ['start'];
		$limitPage = $_POST ['limit'];
		
		$column = explode ( ',', $strSelect );
		
		if (isset ( $_POST ['setCondition'] ) && $_POST ['setCondition'] != '') {
			$strCond .= " AND " . $_POST ['setCondition'];
		}
		
		$total = $this->m_dimensi->getDataCount( $strCond );
		
		if ($limitPage == 0) {
			$limitPage = $total;
		}
		$list_data = $this->m_dimensi->getData( $strSelect, $strCond, $startPage, $limitPage )->result ();
		
		$numr = 1;
		foreach ( $list_data as $row ) {
			foreach ( $column as $colmnVal ) {
				$data [$colmnVal] = $row->$colmnVal;
			}
			
			$arr_data [] = $data;
		}
		
		$json = array (
				'success' => true,
				'message' => "Loaded data",
				'total' => $total,
				'data' => $arr_data 
		);
		
		echo json_encode ( $json );
	}
}