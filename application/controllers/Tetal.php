<?php
header ( 'Access-Control-Allow-Origin: *' );

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Tetal extends CI_Controller {
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
		$this->load->model ( 'M_tetal' );
		
		$this->load->library ( array (
				'form_validation',
				'session' 
		) );
	}
	public function submitTetalData() {
		$mysqltime = date ( "Y-m-d H:i:s" );
		
		$this->db->trans_begin ();
		$data = array ();
		// =============================================
		$strCond = "wo_no = '" . $_POST ['wo_no'] . "' ";
		// =============================================
		$data ['tl_ls_1'] = $_POST ['tl_ls_1'];
		$data ['tl_ls_2'] = $_POST ['tl_ls_2'];
		$data ['tl_ls_3'] = $_POST ['tl_ls_3'];
		$data ['tl_ls_4'] = $_POST ['tl_ls_4'];
		$data ['tl_ls_5'] = $_POST ['tl_ls_5'];
		$data ['tl_pk_1'] = $_POST ['tl_pk_1'];
		$data ['tl_pk_2'] = $_POST ['tl_pk_2'];
		$data ['tl_pk_3'] = $_POST ['tl_pk_3'];
		$data ['tl_pk_4'] = $_POST ['tl_pk_4'];
		$data ['tl_pk_5'] = $_POST ['tl_pk_5'];
		$data ['ay_mk_1'] = $_POST ['ay_mk_1'];
		$data ['ay_mk_2'] = $_POST ['ay_mk_2'];
		$data ['modified_by'] = "SYS";
		$data ['modified_time'] = $mysqltime;
		// =============================================
		$this->M_tetal->updateTetal ( $strCond, $data );
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
	
	public function submitAnyamanData() {
		$mysqltime = date ( "Y-m-d H:i:s" );
	
		$this->db->trans_begin ();
		$data = array ();
		// =============================================
		$strCond = "wo_no = '" . $_POST ['wo_no'] . "' ";
		// =============================================
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
		$this->M_tetal->updateDimension ( $strCond, $data );
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
	
	public function listBudleData() {
		$strSelect = '';
		$strCond = "";
		
		$startPage = 0 ; 
		$limitPage = 20; 
		if(isset($_POST ['start'])){
			$startPage = $_POST ['start'];
		}
		
		if(isset($_POST ['limit'])){
			$limitPage = $_POST ['limit'];
		}
		
		$column = explode ( ',', $strSelect );
		
		if (isset ( $_POST ['setCondition'] ) && $_POST ['setCondition'] != '') {
			$strCond .= " AND " . $_POST ['setCondition'];
		}
		
		$total = $this->M_tetal->getDataCount( $strCond );
		
		if ($limitPage == 0) {
			$limitPage = $total;
		}
		
		$list_data = $this->M_tetal->getQueryData( $strSelect, $strCond, $startPage, $limitPage )->result ();
		
		$numr = 1;
		foreach ( $list_data as $row ) {
			$data['no'] = $row->wo_no; 
			$data['date'] = $row->check_in_date;
			$data['type'] = $row->sample_type; 
			$data['progress'] = $row->progress; 
			$color = 'red';
			
			if( $row->progress > 60){
				$color = 'red';
			}else if($row->progress > 70){
				$color = 'yellow';
			}else if($row->progress > 90){
				$color ='green';
			}
			$data['color'] = $color;
			 
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
	
	public function listDetailData() {
	$strSelect = 'wo_no,test_type,tl_ls_1,tl_ls_2,tl_ls_3,tl_ls_4,tl_ls_5,tl_pk_1,tl_pk_2,tl_pk_3,tl_pk_4,tl_pk_5,ay_mk_1,ay_mk_2';
		$strCond = "";
		
		$startPage = 0 ; 
		$limitPage = 1; 
		if(isset($_POST ['start'])){
			$startPage = $_POST ['start'];
		}
		
		if(isset($_POST ['limit'])){
			$limitPage = $_POST ['limit'];
		}
		
		$column = explode ( ',', $strSelect );
		
		$ID = "";
		if(isset($_POST ['id'])){
			$ID = $_POST ['id'];
		}
		$strCond = "wo_no = '".$ID."'"; 
		if (isset ( $_POST ['setCondition'] ) && $_POST ['setCondition'] != '') {
			$strCond .= " AND " . $_POST ['setCondition'];
		}
	
		$total = $this->M_tetal->getDataCount( $strCond );
	
		if ($limitPage == 0) {
			$limitPage = $total;
		}
		
		$list_data = $this->M_tetal->getData( $strSelect, $strCond, 0, 1 )->result ();
	
		$numr = 1;
		$arr_data = array();
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