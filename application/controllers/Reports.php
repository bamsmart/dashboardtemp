<?php
header ( 'Access-Control-Allow-Origin: *' );

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Reports extends CI_Controller {
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
		$this->load->model ( 'M_dimensi' );
		$this->load->model ( 'M_tetal' );
		
		$this->load->library ( array (
				'form_validation',
				'session' 
		) );
	}
	
	public function printTetal(){
		$ID = "";
		if(isset($_GET['id'])){
			$ID = $_GET ['id'];
		}
		
		$resultSet = array();$list = array();
		$resultSet = $this->M_tetal->getPrintData($ID)->result();
		
		$tot_lusi 	= 0;
		$tot_pakan 	= 0;
		//==============
		
		foreach ($resultSet as $row){
			$tot_lusi 	= ($row->tl_ls_1) + ($row->tl_ls_2) + ($row->tl_ls_3) + ($row->tl_ls_4)+ ($row->tl_ls_5);
			$tot_pakan  = ($row->tl_pk_1) + ($row->tl_pk_2) + ($row->tl_pk_3) + ($row->tl_pk_4)+ ($row->tl_pk_5);
			
		}
		
		$list['avg_lusi'] 		= ($tot_lusi/5);
		$list['avg_pakan']		= ($tot_pakan/5);
							
		$list['data']				= $resultSet;
		
		$this->load->view ( 'pages/reports/rpt-tetal-print.php',$list);
	}
	
	public function printDimensi(){
		$ID = "";
		if(isset($_GET['id'])){
			$ID = $_GET ['id'];
		}
		
		$resultSet = array();$list = array();
		$resultSet = $this->M_dimensi->getPrintData($ID)->result();
		
		$fk 			=  99.76;
		$tot_width_m 	= 0;
		$tot_width_inc 	= 0;
		//==================
		$tot_gram_g  	= 0;
		$tot_gram_gm  	= 0;
		//==================
		$avg_width_m 	= 0;
		$avg_width_inc 	= 0;
		//==================
		$avg_gram_g  	= 0;
		$avg_gram_gm  	= 0;
		$avg_gram_gm2	= 0;
		
		foreach ($resultSet as $row){
			$tot_width_m = ($row->dm_width_1) + ($row->dm_width_2) + ($row->dm_width_3) + ($row->dm_width_4)+ ($row->dm_width_5);
			$tot_width_inc = ($tot_width_m)*(0.0254);
			//========================================
			$tot_gram_g = ($row->dm_weight_1) + ($row->dm_weight_2) + ($row->dm_weight_3) + ($row->dm_weight_4)+ ($row->dm_weight_5);
			
		}
		
		$list['avg_width_m'] 		= ($tot_width_m/5);
		$list['avg_width_inc']		= ($tot_width_inc/5);
		$list['avg_gram_g']  		= ($tot_gram_g/5);
		$list['avg_gram_gm2']		= ($fk*($avg_gram_g));
		$list['avg_gram_gm']		= ($avg_gram_gm2*$avg_width_m);
							
		$list['data']				= $resultSet;
		
		$this->load->view ( 'pages/reports/rpt-dimensi-print.php',$list);
	}
}