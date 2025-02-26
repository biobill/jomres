<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
	
	/**
	 *
	 * @package Jomres\Core\CMS_Specific
	 *
	 */

defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

if (!defined('_JOMRES_INITCHECK'))
	define('_JOMRES_INITCHECK', 1 );

define( '_JOMRES_INITCHECK_ADMIN', 1 );


JToolBarHelper::title( 'Jomres', 'home.png' );

if (!defined('JOMRES_ROOT_DIRECTORY'))
	{
	if (file_exists(dirname(__FILE__).'/../../../jomres_root.php'))
		require_once (dirname(__FILE__).'/../../../jomres_root.php');
	else
		define ( 'JOMRES_ROOT_DIRECTORY' , "jomres" ) ;
	}

require_once( dirname( __FILE__ ) . '/../../../'.JOMRES_ROOT_DIRECTORY.'/admin.php' );
