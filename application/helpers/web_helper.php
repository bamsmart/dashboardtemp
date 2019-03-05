<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getconfig'))
{
	function getconfig($str)
	{
		$CI =& get_instance();
		return $CI->config->item($str);
	}
}

if ( ! function_exists('getsession'))
{
	function getsession($str)
	{
		$CI =& get_instance();
		return $CI->session->userdata($str);
	}
}

function theme_url($uri)
{
	$CI =& get_instance();
	return $CI->config->base_url('themes/'.$CI->config->item('theme').'/'.$uri);
}

function theme_img($uri, $tag=false)
{
	if($tag)
	{
		return '<img src="'.theme_url($uri).'" alt="'.$tag.'">';
	}
	else
	{
		return theme_url($uri);
	}
	
}

function theme_js($uri, $tag=false)
{
	if($tag)
	{
		return '<script type="text/javascript" src="'.theme_url($uri).'"></script>';
	}
	else
	{
		return theme_url($uri);
	}
}

//you can fill the tag field in to spit out a link tag, setting tag to a string will fill in the media attribute
function theme_css($uri, $tag=false)
{
	/* if($tag)
	{
		$media=false;
		if(is_string($tag))
		{
			$media = 'media="'.$tag.'"';
		}
		return '<link href="'.theme_url($uri).'" type="text/css" rel="stylesheet" '.$media.'/>
		';
	} */
	
	return theme_url($uri);
}

function format_currency($value, $symbol=true)
{

	if(!is_numeric($value))
	{
		return;
	}
		
	if($value < 0 )
	{
		$neg = '- ';
	} else {
		$neg = '';
	}
	
	if($symbol)
	{
		$formatted	= number_format(abs($value), 0, ',', '.');
		$formatted	= $neg.$formatted;
	}
	else
	{
		//traditional number formatting
		$formatted	= number_format(abs($value), 0, '.', ',');
	}
	
	return $formatted;
}

function formatTanggal($date=null)
{
	$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');

	$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus',
	'September','Oktober', 'November','Desember');
	if($date == null) {
		$hari = $array_hari[date('N')];
		$tanggal = date ('j');
		$bulan = $array_bulan[date('n')];
		$tahun = date('Y');
	} else {
		$date = strtotime($date);
		$hari = $array_hari[date('N',$date)];
		$tanggal = date ('j', $date);
		$bulan = $array_bulan[date('n',$date)];
		$tahun = date('Y',$date);
	}
	$formatTanggal = $hari . ", " . $tanggal ." ". $bulan ." ". $tahun;
	return $formatTanggal;
}

function get_catname_by_id($id=0){
	$CI =& get_instance();
	$CI->load->model('cats_m');
	$cat = $CI->cats_m->get_category($id);
	return $cat;	
}

function get_latest_iklan($limit=4){
	$CI =& get_instance();
	$CI->load->model('iklan_m');
	return $CI->iklan_m->get_latest_iklan($limit);
}

function proses_act_iklan($data){
	$act = '';
	$data = json_decode($data);
	$act .= '<span class="act_info">telah memposting iklan baru</span> <a href="'.site_url('iklan/view/'.$data->slug.'-'.$data->id_iklan).'">'.$data->title.'</a><br/>
	';
	$act .= word_limiter($data->desc,20);
	return $act;
}

function pr($data){
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}
/* End of file web_helper.php */
/* Location: ./store/helpers/web_helper.php */