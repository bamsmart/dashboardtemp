<?php
header ( 'Access-Control-Allow-Origin: *' );

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Reservation extends CI_Controller {
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
		$this->load->model ( 'M_reservation' );
		$this->load->model ( 'M_dimensi' );
		$this->load->model ( 'M_tetal' );
		
		$this->load->library ( array (
				'form_validation',
				'session' 
		) );
	}public function submitRSVP() {
		$mysqltime = date ( "Y-m-d H:i:s" );
		
		$this->db->trans_begin ();
		$data = array ();
		// =============================================
		$post_date 	= DateTime::createFromFormat('m/d/Y', $_POST ['check_in_date']);
		$strYear 	= $post_date->format('Y');
		$strMonth 	= $post_date->format('m');
		$strDate	= $post_date->format('Y-m-d');
		// =============================================
		$WONO		= $this->M_reservation->getWoNo($strMonth,$strYear);
		// =============================================
		$data ['wo_no'] = $WONO;
		$data ['check_in_date'] = $strDate;
		$data ['sample_type'] = $_POST ['sample_type'];
		$data ['sample_qty'] = $_POST ['sample_qty'];
		$data ['company_name'] = $_POST ['company_name'];
		//$data ['img_url'] = $_POST ['img_url'];
		$data ['status'] = 'OPEN';
		$data ['created_by'] = "SYS";
		$data ['created_time'] = $mysqltime;
		// =============================================
		$this->M_reservation->insertRSVP( $data );
		// =============================================
		$arr_test = $_POST ['test_include'];
		$lst = array(); $inc = array();
		$lst['wo_no'] = $WONO;
		// =============================================
		$inc['wo_no'] = $WONO;
		foreach ($arr_test as $row){
			if($row == 'DMN'){
				$lst['test_type'] = $row;
				$this->M_dimensi->insertDimension( $lst );
			}
			if ($row == 'TTL'){
				$lst['test_type'] = $row;
				$this->M_tetal->insertTetal( $lst );
			}
			$inc['code_test'] = $row;
			$this->M_reservation->insertRSVPINC( $inc );
		}
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
	
	public function listReservationData(){
	
		$strSelect = '';
		$strCond =   "";
		
		$startPage = 0; 
		$limitPage = 0; 
		if(isset($_POST['start'])){
			$startPage = $_POST['start'];
		}
		if(isset( $_POST['limit'])){
			$limitPage = $_POST['limit'];
		}
		
		if(isset($_POST['setColumn']) && $_POST['setColumn'] != ''){
			$strSelect = $_POST['setColumn'];
		}
	
		$column = array();
		$column = explode(',', $strSelect);
	
		if( isset($_POST['setCondition']) && $_POST['setCondition'] != '' ){
			$strCond .= " AND ".$_POST['setCondition'];
		}
	
		$total = $this->M_reservation->getDataCount($strCond);
	
		if ($limitPage == 0){
			$limitPage = $total;
		}
	
		$listData = $this->M_reservation->getQueryData($strSelect,$strCond,$startPage,$limitPage)->result();
	
		$data = array();
		foreach ($listData as $row) {
			/* if(!empty($column)){
				foreach ($column as $colmnVal){
					$data[$colmnVal] = $row->$colmnVal;
				
				}
			}else{ */
				$data['no'] = $row->wo_no;
				$data['date'] = $row->check_in_date;
				$data['type'] = $row->sample_type;
				$data['qty'] = $row->sample_qty;
				$data['comp'] = $row->company_name;
				$data['test'] = $row->test;
				$data['img'] = ($row->img_url != null ? $row->img_url : '');
				$data['status'] = $row->status;
			//}
			$arr_data[] = $data;
		}
	
		$json = array(
				'success'	=> TRUE,
				'message'	=> "Loaded data",
				'total'		=> $total,
				'data'		=> $arr_data
		);
	
		echo json_encode($json);
	}
}