<?php
/*
 * ======================================================
 * Copyright © 2019
 * ======================================================
 * Developer   : Bambang T Lasiman
 * Created     : 01.03.2019
 * Description : 
 * Reference   :
 * History     :
 * Code		Date		Who			Description
 * ======================================================
 * C000		01.03.2019	Bambang T Lasiman		First Create
 * ======================================================
 */
if (!defined('BASEPATH'))
    exit('Hacking Attempt : Keluar dari sistem..!!');

class M_reservation extends CI_Model
{
    private	$tb_rsvp = 'tb_reservasi'; 
    private $tb_rsvp_inc = 'tb_reservasi_include';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getWoNo($month,$year)
    {
    	$maxIterate = $this->db->query("SELECT 
									    MAX(RIGHT(wo_no, 4)) AS order_number
									FROM
									    db_uji_fisika.tb_reservasi
									WHERE
									    DATE_FORMAT(check_in_date, '%Y/%m') = '".$year."/".$month."'
									LIMIT 1");
    	$trans_no = "";
		$a = 1;
		$n = 4;
		foreach ($maxIterate->result() as $rec) {
			$a = $a + $rec->order_number;
		}
		
		$nol = "";
		$i = 0;
		$na = strlen ( $a );
		$jmlnol = $n - $na;
		
		while ( $i < $jmlnol ) {
			$nol = $nol . "0";
			$i = $i + 1;
		}
		return  "WO/".$year."/".$month."/".$nol.$a;
    }
    
    //insertRSVP
    public function insertRSVP($data){
    	$this->db->insert($this->tb_rsvp,$data);
    }
    
    public function insertRSVPINC($data){
    	$this->db->insert($this->tb_rsvp_inc,$data);
    }
    
    public function updateRSVP($data){
    	$this->db->update($this->tb_rsvp,$data);
    }
    
    public function deleteRSVP($data){
    	$this->db->delete($this->tb_rsvp,$data);
    }
    
    public function getData($strSelect,$strCond,$startPage,$limitPage)
    {
    	$this->db->select($strSelect);
    	if ($strCond != '') {
    		$this->db->where($strCond);
    	}
    	return $this->db->get($this->tb_rsvp,$limitPage,$startPage);
    }
    
    public function getDataCount($strCond)
    {
    	if ($strCond != '') {
    		$this->db->where($strCond);
    	}
    	return $this->db->count_all_results($this->tb_rsvp);
    }
    
    public function getQueryData($strSelect,$strCond,$startPage,$limitPage)
    {
    	$mySql = "SELECT ";
    	if($strSelect == ''){
    		$mySql .= "tb.`wo_no`,
						tb.`check_in_date`,
						tb.`sample_type`,
						tb.`sample_qty`,
						tb.`company_name`,
						(SELECT 
						group_concat(inc.alias_test separator '<br />') as test 
							FROM 
						db_uji_fisika.tb_reservasi_include rsv
							JOIN tb_m_type_test inc ON rsv.code_test = inc.code_test where rsv.wo_no = tb.wo_no) as `test`,
						tb.`img_url`,
						tb.`status` ";
    	}else{
    		$mySql .= $strSelect;
    	}
    		
		$mySql .= " FROM ".$this->tb_rsvp." tb "; 
    	
    	if($strCond != ''){
    		$mySql .= "WHERE ".$strCond." ";
    	}
    	$mySql .= "ORDER BY wo_no DESC ";
    	$mySql .= "LIMIT ".$startPage.",".$limitPage." ";
    	
    	$rs = $this->db->query($mySql);
    	
    	return $rs;
    }
      
}
?>