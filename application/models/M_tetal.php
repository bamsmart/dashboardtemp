<?php
/*
 * ======================================================
 * Copyright © 2014
 * ======================================================
 * Developer   : Bambang T Lasiman
 * Created     : 30.08.2016
 * Description : model from HSE F052A
 * Reference   :
 * History     :
 * Code		Date		Who			Description
 * ======================================================
 * C000		30.08.2016	Bambang T Lasiman		First Create
 * ======================================================
 */
if (!defined('BASEPATH'))
    exit('Hacking Attempt : Keluar dari sistem..!!');

class M_tetal extends CI_Model
{
    private	$tb_tetal = 'tb_uji_tetal'; 
    
    public function __construct()
    {
        parent::__construct();
    }
   
    public function insertTetal($data){
    	$this->db->insert($this->tb_tetal,$data);
    }
    
    public function updateTetal($strCond,$data){
    	if($strCond != ''){
    		$this->db->where($strCond);
    	}
    	$this->db->update($this->tb_tetal,$data);
    }
    
    public function deleteTetal($data){
    	$this->db->delete($this->tb_tetal,$data);
    }
    
    public function getData($strSelect,$strCond,$startPage,$limitPage)
    {
    	$this->db->select($strSelect);
    	if ($strCond != '') {
    		$this->db->where($strCond);
    	}
    	return $this->db->get($this->tb_tetal,$limitPage,$startPage);
    }
    
    public function getQueryData($strSelect,$strCond,$startPage,$limitPage)
    {
    	$mySql = "SELECT ";
    	if($strSelect == ''){
    		$mySql .= "dmn.wo_no,
						    rsv.check_in_date,
						    rsv.sample_type, 
						    '0' as 'progress' ";
    	}else{
    		$mySql .= $strSelect." ";
    	}
    		
		$mySql .= "FROM tb_uji_tetal dmn JOIN tb_reservasi rsv ON dmn.wo_no = rsv.wo_no "; 
    	
    	if($strCond != ''){
    		$mySql .= "WHERE ".$strCond." ";
    	}
    	$mySql .= "ORDER BY dmn.wo_no DESC ";
    	$mySql .= "LIMIT ".$startPage.",".$limitPage." ";
    	
    	$rs = $this->db->query($mySql);
    	
    	return $rs;
    }
    
    public function getDataCount($strCond)
    {
    	if ($strCond != '') {
    		$this->db->where($strCond);
    	}
    	return $this->db->count_all_results($this->tb_tetal);
    }
    
    public function getPrintData($ID)
    {
    	$mySql = "SELECT
    			 	dmn.wo_no,
				    rsv.check_in_date,
				    rsv.sample_type,
				    rsv.company_name as `company`,
				    tl_ls_1, 
					tl_ls_2, 
					tl_ls_3, 
					tl_ls_4, 
					tl_ls_5, 
					tl_pk_1, 
					tl_pk_2, 
					tl_pk_3, 
					tl_pk_4, 
					tl_pk_5, 
					ay_mk_1, 
					ay_mk_2,
				    rsv.img_url
				FROM
    
				    tb_uji_tetal dmn
				        JOIN
				    tb_reservasi rsv ON dmn.wo_no = rsv.wo_no
				WHERE
				    dmn.wo_no = '".$ID."'
				LIMIT 1 ";
    
    	$rs = $this->db->query($mySql);
    
    	return $rs;
    }
      
}
?>