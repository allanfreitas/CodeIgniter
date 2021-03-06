<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * LICENSE
 *
 * @category   CodeIgniter Extend Package
 * @package    MY_url Helper
 * @author     Yuya Terajima <yterajima@e2esound.com>
 * @copyright  Copyright (c) 2010 Yuya Terajima <yterajima@e2esound.com>
 * @license    New BSD License
 */


/*
 * Get JavaScript Files Directory:$config['base_url']/js
 *
 * @access  public
 * @return  string
 */
if(! function_exists('js_url')){
    function js_url(){
		$CI =& get_instance();
		return $CI->config->item('base_url').'js/';
    }
}

/*
 * Get CSS Files Directory:$config['base_url']/css/
 *
 * @access  public
 * @return  string
 */
if(! function_exists('css_url')){
    function css_url(){
		$CI =& get_instance();
		return $CI->config->item('base_url').'css/';
    }
}

/*
 * Get JavaScript Files Directory:$config['base_url']/images/
 * @access  public
 * @return  string
 */
if(! function_exists('image_url')){
    function image_url(){
		$CI =& get_instance();
		return $CI->config->item('base_url').'images/';
    }
}

/*
 * Echo XML !IE6 OR !IE7
 * @access  public
 * @return  string
 */
if(! function_exists('xml_ver')){
    function xml_ver(){
    $ua = $_SERVER['HTTP_USER_AGENT'];
        if (!preg_match("/MSIE 6/",$ua) || preg_match("/MSIE 7/",$ua)) 
        {
            return "<?xml version='1.0' encoding='utf-8'?>\n";
        }
        else
        {
            return "";
        }
    }
}

/* End of file MY_url_helper.php */
/* Location: ./system/application/helpers/MY_url_helper.php */
