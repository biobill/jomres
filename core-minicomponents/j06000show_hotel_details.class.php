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

class j06000show_hotel_details
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
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
				'task' => 'show_hotel_details',
				'info' => '_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS',
				'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID',
						'arg_example' => '5',
						),
					),
				);

			return;
		}
		$output = array();

		if (isset($componentArgs[ 'property_uid' ])) {
			$property_uid = (int)$componentArgs[ 'property_uid' ];
		} else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		}

		if ($property_uid == 0) {
			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
			if ($thisJRUser->userIsManager) {
				$property_uid = getDefaultProperty();
			} else {
				trigger_error('Unable to view property details, either property id not found, or property id tampered with.', E_USER_ERROR);

				return;
			}
		}

		$mrConfig = getPropertySpecificSettings($property_uid);

		if (isset($mrConfig['property_business_name']) && $mrConfig['property_business_name'] == '') {
			$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$basic_property_details->gather_data($property_uid);

			$output[ 'HPROPERTYNAME' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME');
			$output[ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET');
			$output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN');
			$output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
			$output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
			$output[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE');
			$output[ 'HTELEPHONE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE');
			$output[ 'HFAX' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX');
			$output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL');

			$output[ 'PROPERTY_NAME' ] = $basic_property_details->property_name;
			$output[ 'STREET' ] = $basic_property_details->property_street;
			$output[ 'TOWN' ] = $basic_property_details->property_town;
			$output[ 'REGION' ] = $basic_property_details->property_region;
			$output[ 'COUNTRY' ] = $basic_property_details->property_country;
			$output[ 'POSTCODE' ] = $basic_property_details->property_postcode;
			$output[ 'TELEPHONE' ] = $basic_property_details->property_tel;
			$output[ 'FAX' ] = $basic_property_details->property_fax;
			$output[ 'EMAIL' ] = $basic_property_details->property_email;

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('show_hotel_details.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$this->retVals = $tmpl->getParsedTemplate();
		} else {
			$output[ 'HBUSINESSNAME' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_NAME', '_JOMRES_COM_YOURBUSINESS_NAME');
			$output[ 'HHOUSENO' ] = jr_gettext('_JOMRES_COM_YOURBUSINESSADDRESS', '_JOMRES_COM_YOURBUSINESSADDRESS');
			$output[ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET');
			$output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN');
			$output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
			$output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
			$output[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE');
			$output[ 'HTELEPHONE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE');
			$output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL');
			$output[ '_JOMRES_COM_YOURBUSINESS_VATNO' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO');

			if (!isset($mrConfig['property_business_name'])) {
				$mrConfig['property_business_name'] = '';
			}
			if (!isset($mrConfig['property_business_houseno'])) {
				$mrConfig['property_business_houseno'] = '';
			}
			if (!isset($mrConfig['property_business_street'])) {
				$mrConfig['property_business_street'] = '';
			}
			if (!isset($mrConfig['property_business_town'])) {
				$mrConfig['property_business_town'] = '';
			}
			if (!isset($mrConfig['property_business_region'])) {
				$mrConfig['property_business_region'] = '';
			}
			if (!isset($mrConfig['property_business_country'])) {
				$mrConfig['property_business_country'] = '';
			}
			if (!isset($mrConfig['property_business_postcode'])) {
				$mrConfig['property_business_postcode'] = '';
			}
			if (!isset($mrConfig['property_business_telephone'])) {
				$mrConfig['property_business_telephone'] = '';
			}
			if (!isset($mrConfig['property_business_telephone'])) {
				$mrConfig['property_business_telephone'] = '';
			}
			if (!isset($mrConfig['property_business_email'])) {
				$mrConfig['property_business_email'] = '';
			}
			if (!isset($mrConfig['property_vat_number'])) {
				$mrConfig['property_vat_number'] = '';
			}

			$output[ 'BUSINESSNAME' ] = $mrConfig['property_business_name'];
			$output[ 'HOUSENO' ] = $mrConfig['property_business_houseno'];
			$output[ 'STREET' ] = $mrConfig['property_business_street'];
			$output[ 'TOWN' ] = $mrConfig['property_business_town'];
			$output[ 'REGION' ] = $mrConfig['property_business_region'];
			$output[ 'COUNTRY' ] = $mrConfig['property_business_country'];
			$output[ 'POSTCODE' ] = $mrConfig['property_business_postcode'];
			$output[ 'TELEPHONE' ] = $mrConfig['property_business_telephone'];
			$output[ 'EMAIL' ] = $mrConfig['property_business_email'];
			$output[ 'PROPERTY_VAT_NUMBER' ] = $mrConfig['property_vat_number'];

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('show_property_business_details.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$this->retVals = $tmpl->getParsedTemplate();
		}

		if (isset($_REQUEST[ 'property_uid' ])) {
			echo $this->retVals;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
