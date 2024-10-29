<?php
/*
 * @link       http://www.girltm.com/
 * @since      1.0.0
 * @package    APOYL_TENCENTCOS
 * @subpackage APOYL_TENCENTCOS/includes
 * @author     凹凸曼 <jar-c@163.com>
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class Apoyl_Tencentcos_i18n {


	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'apoyl-tencentcos',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
