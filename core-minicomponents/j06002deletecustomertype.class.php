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

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j06002deletecustomertype {
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$defaultProperty = (int)getDefaultProperty();
		
		$id = (int)jomresGetParam( $_REQUEST, 'id', 0 );
		
		jr_import( 'jrportal_guest_types' );
		$jrportal_guest_types = new jrportal_guest_types();
		$jrportal_guest_types->id = $id;
		$jrportal_guest_types->property_uid	= $defaultProperty;
		
		$success = $jrportal_guest_types->delete_guest_type();
		
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listcustomertypes"), jr_gettext('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE',false) );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
