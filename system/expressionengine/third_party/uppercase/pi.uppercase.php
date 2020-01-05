<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name' => 'uppercase',
	'pi_version' => '1.0',
	'pi_author' => 'Ferdi Tarakci',
	'pi_author_url' => 'https://www.ferditarakci.com/',
	'pi_description' => '',
	'pi_usage' => uppercase::usage()
);

/**
 * uppercase Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			Ferdi Tarakci
 * @copyright		Copyright (c) 2019, Ferdi Tarakci
 * @link			https://www.ferditarakci.com/
 */

class uppercase
{

	var $return_data = "";

	/**
	 * mb_strtoupper
	 *
	 * This function runs mb_strtoupper() on a string of text
	 *
	 * @access	public
	 * @return	string
	 */

	function __construct()
	{
		$this->EE =& get_instance();

		$str = $this->EE->TMPL->parse_globals($this->EE->TMPL->tagdata);

		$lang = $this->EE->TMPL->fetch_param('lang');

		if ($lang == 'tr')
		{
			$str = str_replace('i', 'İ', $str);
		}

		$this->return_data = mb_strtoupper($str, 'UTF-8');
	}

	/**
	 * Usage
	 *
	 * This function describes how the plugin is used.
	 *
	 * @access	public
	 * @return	string
	 */

	// Make sure and use output buffering

	public static function usage()
	{
		ob_start();

?>

		The tag pair is simply:
		{exp:uppercase}istanbul{/exp:uppercase}

		Example usage:

		istanbul

		becomes:

		İSTANBUL

		<br><br>

		The tag pair is simply:
		{exp:uppercase lang="tr"}istanbul{/exp:uppercase}

		Example usage:

		istanbul

		becomes:

		İSTANBUL



<?php

		$buffer = ob_get_contents();

		ob_end_clean();

		return $buffer;
	}
}

/* End of file pi.uppercase.php */ 
/* Location: ./system/expressionengine/third_party/uppercase/pi.uppercase.php */
