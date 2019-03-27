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
    
    public function getDataCount($strCond)
    {
    	if ($strCond != '') {
    		$this->db->where($strCond);
    	}
    	return $this->db->count_all_results($this->tb_dimensi);
    }
      
}
?>