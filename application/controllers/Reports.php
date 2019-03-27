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
		$this->load->model ( 'm_dimensi' );
		
		$this->load->library ( array (
				'form_validation',
				'session' 
		) );
	}
	
	public function printTetal(){
		$list = array();
		/* $siteSrc	  = $_GET['siteSrc'];
		$deptSrc	  = $_GET['deptSrc'];
		$monthSrc	  = $_GET['monthSrc'];
		$yearSrc 	  = $_GET['yearSrc']; */
	
		//$list['data'] = $this->m_tetal->getData($siteSrc,$deptSrc,$monthSrc,$yearSrc)->result();
		
		$this->load->view ( 'pages/reports/tetal-print.php',$list);
	}
}