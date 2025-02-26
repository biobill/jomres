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
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000list_property_categories
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$output = array();
		$rows = array();
		$pageoutput = array();
		
		$jomres_property_categories = jomres_singleton_abstract::getInstance('jomres_property_categories');
		$jomres_property_categories->get_all_property_categories();

		$output['PAGETITLE'] = jr_gettext('_JOMRES_PROPERTY_HCATEGORIES', '_JOMRES_PROPERTY_HCATEGORIES', false);
		$output['HTITLE'] = jr_gettext('_JRPORTAL_CRATE_TITLE', '_JRPORTAL_CRATE_TITLE', false);

		foreach ($jomres_property_categories->property_categories as $c) {
			$r = array();

			$r['TITLE'] = $c['title'];
			$r['ID'] = $c['id'];
			
			$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
			$toolbar->newToolbar();
			$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_property_category&id='.$c['id']), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
			$toolbar->addSecondaryItem('fa fa-trash-o', '', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=delete_property_category&id='.$c['id']), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));

			$r['EDITLINK'] = $toolbar->getToolbar();

			$rows[] = $r;
		}

		$jrtbar = jomres_getSingleton('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/AddItem.png');
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('edit_property_category', $link, $text = 'Add', $submitOnClick = true, $submitTask = 'edit_property_category', $image);
		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN, jr_gettext('_JRPORTAL_CANCEL', '_JRPORTAL_CANCEL', false));
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR'] = $jrtb;

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('list_property_categories.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
