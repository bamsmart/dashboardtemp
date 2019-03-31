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

class M_dimensi extends CI_Model
{
    private	$tb_dimensi = 'tb_uji_dimensi'; 
    
    public function __construct()
    {
        parent::__construct();
    }
   
    public function insertDimension($data){
    	$this->db->insert($this->tb_dimensi,$data);
    }
    
    public function updateDimension($strCond,$data){
    	if($strCond != ''){
    		$this->db->where($strCond);
    	}
    	$this->db->update($this->tb_dimensi,$data);
    }
    
    public function deleteDimension($data){
    	$this->db->delete($this->tb_dimensi,$data);
    }
    
    public function getData($strSelect,$strCond,$startPage,$limitPage)
    {
    	$this->db->select($strSelect);
    	if ($strCond != '') {
    		$this->db->where($strCond);
    	}
    	return $this->db->get($this->tb_dimensi,$limitPage,$startPage);
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
    		
		$mySql .= "FROM tb_uji_dimensi dmn JOIN tb_reservasi rsv ON dmn.wo_no = rsv.wo_no "; 
    	
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
    	return $this->db->count_all_results($this->tb_dimensi);
    }
    
    public function getPrintData($ID)
    {
    	$mySql = "SELECT
    			 	dmn.wo_no,
				    rsv.check_in_date,
				    rsv.sample_type,
				    rsv.company_name as `company`,
				    dmn.dm_width_1,
				    dmn.dm_width_2,
				    dmn.dm_width_3,
				    dmn.dm_width_4,
				    dmn.dm_width_5,
				    dmn.dm_height_1,
				    dmn.dm_height_2,
				    dmn.dm_height_3,
				    dmn.dm_height_4,
				    dmn.dm_height_5,
				    dmn.dm_thick_1,
				    dmn.dm_thick_2,
				    dmn.dm_thick_3,
				    dmn.dm_thick_4,
				    dmn.dm_thick_5,
				    dmn.dm_weight_1,
				    dmn.dm_weight_2,
				    dmn.dm_weight_3,
				    dmn.dm_weight_4,
				    dmn.dm_weight_5,
				    dmn.ks_l_interface_1,
				    dmn.ks_l_interface_2,
				    dmn.ks_l_interface_3,
				    dmn.ks_l_interface_4,
				    dmn.ks_l_interface_5,
				    dmn.ks_l_back_1,
				    dmn.ks_l_back_2,
				    dmn.ks_l_back_3,
				    dmn.ks_l_back_4,
				    dmn.ks_l_back_5,
				    dmn.ks_p_interface_1,
				    dmn.ks_p_interface_2,
				    dmn.ks_p_interface_3,
				    dmn.ks_p_interface_4,
				    dmn.ks_p_interface_5,
				    dmn.ks_p_back_1,
				    dmn.ks_p_back_2,
				    dmn.ks_p_back_3,
				    dmn.ks_p_back_4,
				    dmn.ks_p_back_5,
				    rsv.img_url
				FROM
				
				    tb_uji_dimensi dmn
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