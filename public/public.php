<?php
/*
 * @link http://www.girltm.com/
 * @since 1.0.0
 * @package Apoyl_Tencentcos
 * @subpackage Apoyl_Tencentcos/public
 * @author 凹凸曼 <jar-c@163.com>
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class Apoyl_Tencentcos_Public
{

    private $plugin_name;

    private $version;

    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    public function apoyl_tencentcos_the_content($content)
    {

        if (is_single()) {

            $arr = get_option('apoyl-tencentcos-settings');
            if ($arr['open']) {
                include plugin_dir_path(__FILE__) . 'partials/public-display.php';
            }
        }
        return $content;
    }
}