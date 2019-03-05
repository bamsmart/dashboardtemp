<?php
if(!function_exists('initialize_tinymce')){
function initialize_tinymce()
{
	$tinymce = "<script type=\"text/javascript\" src=\"".base_url().APPPATH."themes/light_store/plugin/tiny_mce/tiny_mce.js\"></script>
	<script type=\"text/javascript\" src=\"".base_url().APPPATH."themes/light_store/plugin/swampy_browser/sb.js\"></script>
<script type=\"text/javascript\">
	tinyMCE.init({
		// General options
		mode : \"textareas\",
		theme : \"advanced\",
		convert_urls: false,
		fix_list_elements: false,
		relative_urls : false,
		plugins : \"pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave\",

		// Theme options
		theme_advanced_buttons1 : \"bold,italic,underline,|,bullist,numlist,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontselect,fontsizeselect,|,link,unlink,|,image\",
		theme_advanced_buttons2 : \"\",
		
		theme_advanced_toolbar_location : \"top\",
		theme_advanced_toolbar_align : \"left\",
		theme_advanced_statusbar_location : \"bottom\",
		theme_advanced_resizing : true,
		
		language : 'en',
		entity_encoding : 'raw',		
		
		file_browser_callback : 'openSwampyBrowser',
	});
</script>";
    
    return $tinymce;
}

}