<?php
/**
 * Patched for compatibility with PHP 8.1
 * @copyright (c) 2023 Dion Designs
 */

/**
*
* @package install
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/

if ( !defined('IN_INSTALL') )
{
	// Someone has tried to access the file direct. This is not a good idea, so exit
	exit;
}

if (!empty($setmodules))
{
	$module[] = array(
		'module_type'		=> 'install',
		'module_title'		=> 'OVERVIEW',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 0,
		'module_subs'		=> array('INTRO'),
		'module_stages'		=> '',
		'module_reqs'		=> ''
	);
}

/**
* Main Tab - Installation
* @package install
*/
class install_main extends module
{
	function __construct(&$p_master)
	{
		$this->p_master = &$p_master;
	}

	function main($mode, $sub)
	{
		global $lang, $template, $language;

		$title = $lang['SUB_INTRO'];

		$this->tpl_name = 'install_main';
		$this->page_title = $title;

		$template->assign_vars(array(
			'TITLE'		=> $title,
			'BODY'		=> $lang['OVERVIEW_BODY'],

			'S_LANG_SELECT'	=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
		));
	}
}
