<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 *
 * @category   CodeIgniter Package
 * @package    MY_url Helper
 * @author     Yuya Terajima <yterajima@e2esound.com>
 * @copyright  Copyright (c) 2010 Yuya Terajima <yterajima@e2esound.com>
 * @license    New BSD License
 */


/**
 * @access  public
 * @return  string
 */

function js_url(){
	$CI =& get_instance();
	$CI->load->helper('url');

	return base_url().'js/';
}

/**
 * @access  public
 * @return  string
 */

function css_url(){
	$CI =& get_instance();
	$CI->load->helper('url');

	return base_url().'css/';
}

/**
 * @access  public
 * @return  string
 */

function image_url(){
	$CI =& get_instance();
	$CI->load->helper('url');

	return base_url().'image/';
}

/* End of file MY_url_helper.php */
/* Location: ./system/application/helpers/MY_url_helper.php */
