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
      
}
?>