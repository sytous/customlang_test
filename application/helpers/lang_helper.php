<?php
/**
 * @package	CodeIgniter 
 * @link	
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Language Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/language_helper.html
 */

// ------------------------------------------------------------------------

if ( ! function_exists('__'))
{
	/**
	 * Lang
	 *
	 * Fetches a language variable and optionally outputs a form label
	 *
	 * @param	string	$line		The language line
	 * @param	string	$for		The "for" value (id of the form element)
	 * @param	array	$attributes	Any additional HTML attributes
	 * @return	string
	 */
	function __($line, $for = '', $attributes = array())
	{
		$val = get_instance()->lang->line($line);
       if ($val!='') $line=$val; 
		if ($for !== '')
			$line = '<label for="'.$for.'"'._stringify_attributes($attributes).'>'.$val.'</label>';		        
        
		return $line;
	}
}
