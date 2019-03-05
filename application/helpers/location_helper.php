<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('getnamakota'))
{
	function getnamakota($id)
	{
		$CI =& get_instance();
		$CI->load->model('location_m');
		$kota = $CI->location_m->get_kota($id);
		return $kota->name;
	}
}

if ( ! function_exists('getnamaprov'))
{
	function getnamaprov($id)
	{
		$CI =& get_instance();
		$CI->load->model('location_m');
		$kota = $CI->location_m->get_prov($id);
		return $kota->name;
	}
}