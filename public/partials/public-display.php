<?php
/*
 * @link http://www.girltm.com
 * @since 1.0.0
 * @package Apoyl_Tencentcos
 * @subpackage Apoyl_Tencentcos/public/partials
 * @author 凹凸曼 <jar-c@163.com>
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ($arr['domain']&&$arr['openchgcos']) {
	$file=apoyl_tencentcos_file('cdn');
	 if($file){
		include $file;
	 }
}

?>