<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Lists the properties, according to property uids passed from a search function
 #
* @package Jomres
#
 */
class j01010listpropertys {
	/**
	#
	 * Constructor: Executes the sql query to find property details of those property uids passed by a search, then displays those details in the list_propertys patTemplate file
	#
	 */
	function j01010listpropertys($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$data_only=false;
		if (isset($_REQUEST['dataonly']))
			$data_only=true;
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$customTextObj =jomres_getSingleton('custom_text');
		$maximumProperties=100; // Limits the maximum number of properties that can be returned in a search

		$propertys_uids=$componentArgs['propertys_uid'];
		$newSearch=false;
		if ($propertys_uids=="")
			$propertys_uids=array();
		if ( !isset($_REQUEST['plistpage']) )
			$newSearch=true;
			
		$limit = jomresGetParam( $_REQUEST, 'limit', (int)$jrConfig['property_list_limit']);

		if (!@session_start())
			{
			@ini_set('session.save_handler', 'files');
			session_start();
			}

		if ($newSearch)
			{
			$property_id_string= implode($propertys_uids,",");
			$_SESSION['jomsearch_results']=$property_id_string;
			}
		else
			{
			$search_results=$_SESSION['jomsearch_results'];
			if ($search_results != '')
				$propertys_uids=explode(",",$search_results);
			$p=array();
			foreach ($propertys_uids as $pid)
				{
				$p[]=intval($pid);
				}
			$propertys_uids=$p;
			}

		if ($MiniComponents->eventFileExistsCheck('01009') )
			$propertys_uids=$MiniComponents->triggerEvent('01009',array('propertys_uids'=>$propertys_uids) ); // Pre list properties parser. Allows us to to filter property lists if required
		// Added to prevent out of memory messages. Note, this function means the if there are more than 100 returns only a 70 of those elements are saved for display
		if (count($propertys_uids) >$maximumProperties)
			{
			$counter=1;
			$tmpArray=array();
			while ($counter<=$maximumProperties)
				{
				$tmpArray[]=$propertys_uids[$counter];
				$counter++;
				}
			$propertys_uids=$tmpArray;
			}
		if ($limit<0)
			$limit=0;
		if ($limit > count($propertys_uids))
			$limit=count($propertys_uids);

		if (JOMRES_SINGLEPROPERTY)
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&selectedProperty=".$propertys_uids[0]), "" );

		if (count($propertys_uids) >0)
			{
			$output = array();
			
			$g=genericOr($propertys_uids,'propertys_uid');
			$query="SELECT propertys_uid,property_name,property_town,property_description,stars,property_features,ptype_id,property_key FROM #__jomres_propertys WHERE ";
			$query.=$g;
			$total_records=count($propertys_uids);
			$record_per_page=$limit;
			$scroll=5;
			$start=jomresGetParam( $_REQUEST, 'plistpage', 0 );
			if (count($propertys_uids) <= $scroll)
				$start=0;
			jr_import('JomresPage');
			$page=new JomresPage(); ///creating new instance of Class Page
			$page->set_page_data(JOMRES_SITEPAGE_URL,$total_records,$record_per_page,$scroll,true,true,true,$limit);

			$order = implode($propertys_uids,",");
			$page->set_qry_string('limit='.$limit);
			$query.=" ORDER BY FIELD(propertys_uid, $order)";
			$query=$page->get_limit_query($query,$start);

			$nav=array();
			$nav_output=array();
			$url=JOMRES_SITEPAGE_URL."";

			$url= "";
			$page->set_qry_string($url);
			$paging=$page->get_page_nav();
			$nav['WRITEPAGESLINKS'] = $paging;
			$nav['WRITEPAGESCOUNTER'] = $page->writePagesCounterJR();
			$nav_output[]=$nav;
			$output['CLICKTOHIDE']			=jr_gettext('_JOMRES_REVIEWS_CLICKTOHIDE',_JOMRES_REVIEWS_CLICKTOHIDE,false,false);
			$output['CLICKTOSHOW']			=jr_gettext('_JOMRES_REVIEWS_CLICKTOSHOW',_JOMRES_REVIEWS_CLICKTOSHOW,false,false);

			$propertyDeets = @doSelectSql($query);

			if (count($propertyDeets) > 0)
				{
				$propertysToShow=array();
				foreach ($propertyDeets as $prop)
					{
					$propertysToShow[]=$prop->propertys_uid;
					}
				// Now we'll grab all of the room type/classes information for these properties. The will cut the number of queries performed by this room listing script considerably.
				// For historical reasons some tables in Jomres use propertys_uid and some use property_uid (note the 's') so g_pids is for those tables that use propertys_uid, while g_pid is for those without
				$g_pids=genericOr($propertysToShow,'propertys_uid');
				$g_pid =genericOr($propertysToShow,'property_uid');

				// Tariffs
				$tariffsArray=array();
				$query = "SELECT property_uid,validfrom,validto,roomrateperday FROM #__jomres_rates WHERE ".$g_pid;

				$tariffList = doSelectSql($query);
				$ratesArray=array();
				if (count($tariffList) > 0)
					{
					foreach ($tariffList as $t)
						{
						$tariffsArray[][$t->property_uid]=array('validfrom'=>$t->validfrom,'validto'=>$t->validto,'roomrateperday'=>$t->roomrateperday);
						}
					}

				// Room types
				$rtArray=array();
				$rt_idsArr=array();
				$query="SELECT propertys_uid,room_classes_uid FROM #__jomres_rooms WHERE ".$g_pids." ";
				$result= doSelectSql($query);
				foreach ($result as $r)
					{
					//echo $r->room_classes_uid;
					$rt_idsArr[]=$r->room_classes_uid;
					if (!is_array($rtArray[$r->propertys_uid]) )
						$rtArray[$r->propertys_uid]=array();
					if (!in_array($r->room_classes_uid,$rtArray[$r->propertys_uid]) )
					$rtArray[$r->propertys_uid][]=$r->room_classes_uid;
					}
				$rtDetailsArray=array();
				$temp=array_unique($rt_idsArr);
				$rt_idsArr=array_values($temp);

				$rt_ids =genericOr($rt_idsArr,'room_classes_uid');
				$query="SELECT room_classes_uid,room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes WHERE ".$rt_ids;
				$rtDetails=doSelectSql($query);
				foreach ($rtDetails as $rt)
					{
					$rtAbbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$rt->room_classes_uid, $rt->room_class_abbv,false,false );
					$rtDesc =  jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.$rt->room_classes_uid, $rt->room_class_full_desc,false,false );
					$rtDetailsArray[$rt->room_classes_uid]=array('room_class_abbv'=>$rtAbbv,'room_class_full_desc'=>$rtDesc,'image'=>$rt->image);
					
					}

				// Property features
				$featuresArray=array();
				$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
				$propertyFeaturesList= doSelectSql($query);
				foreach ($propertyFeaturesList as $f)
					{
					$hotel_feature_abbv=jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.(int)$f->hotel_features_uid,stripslashes($f->hotel_feature_abbv),false,false);
					$hotel_feature_full_desc=jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.(int)$f->hotel_features_uid, stripslashes($f->hotel_feature_full_desc),false,false);
					$featuresArray[$f->hotel_features_uid]=array('hotel_feature_abbv'=>$hotel_feature_abbv,'hotel_feature_full_desc'=>$hotel_feature_full_desc,'image'=>$f->image);
					}
				}
			}
		$templateCounter=1;

		if (!isset($_REQUEST['arrivalDate']) )
			{
			if (isset($tmpBookingHandler->tmpsearch_data['jomsearch_availability']) && $tmpBookingHandler->tmpsearch_data['jomsearch_availability'] != "")
				$arrivalDate	=$tmpBookingHandler->tmpsearch_data['jomsearch_availability'];
			else
				$arrivalDate=date("Y/m/d");
			}
		else
			$arrivalDate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'arrivalDate', "" ),$siteCal=true);

		$date_elements  = explode("/",$arrivalDate);
		$unixTodaysDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

		if (count($propertyDeets) >0)
			{
			$property_details=array();
			foreach ($propertyDeets as $property)
				{
				jr_import('jomres_cache');
				$cache = new jomres_cache("propertylist",$property->propertys_uid);
				$current_property_details =jomres_getSingleton('basic_property_details');
				
				$cacheContent = $cache->readCache();
				if ($cacheContent)
					{
					$property_deets = $cacheContent;
					}
				else
					{
					$property_deets=array();
					set_showtime('property_uid',$property->propertys_uid);

					$customTextObj->get_custom_text_for_property($property->propertys_uid);
					
					$property_deets=$MiniComponents->triggerEvent('00042',array('property_uid'=>$property->propertys_uid) );
					$mrConfig=getPropertySpecificSettings($property->propertys_uid);
					$featureList=array();
					$ptown=stripslashes($property->property_town);
					$stars=$property->stars;
					$propertyDesc=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', htmlspecialchars(trim(stripslashes($property->property_description)), ENT_QUOTES),false,false ));

					jr_import('jomres_reviews');
					$Reviews = new jomres_reviews();
					$Reviews->property_uid = $property->propertys_uid;
					$itemRating = $Reviews->showRating($property->propertys_uid);
					$property_deets['AVERAGE_RATING']=number_format($itemRating['avg_rating'], 1, '.', '');
					$property_deets['NUMBER_OF_REVIEWS']=$itemRating['counter'];
					
					$property_deets['_JOMRES_REVIEWS_AVERAGE_RATING']		=jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING',_JOMRES_REVIEWS_AVERAGE_RATING,false,false);
					$property_deets['_JOMRES_REVIEWS_TOTAL_VOTES']			=jr_gettext('_JOMRES_REVIEWS_TOTAL_VOTES',_JOMRES_REVIEWS_TOTAL_VOTES,false,false);
					$property_deets['_JOMRES_REVIEWS']						=jr_gettext('_JOMRES_REVIEWS',_JOMRES_REVIEWS,false,false);
					$property_deets['_JOMRES_REVIEWS_CLICKTOSHOW']			=jr_gettext('_JOMRES_REVIEWS_CLICKTOSHOW',_JOMRES_REVIEWS_CLICKTOSHOW,false,false);
					
					$property_deets['REVIEWS']								= $MiniComponents->specificEvent('06000',"show_property_reviews");
					
					
					$property_image=get_showtime('live_site')."/jomres/images/jrlogo.png";
					if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS.$property->propertys_uid."_property_".$property->propertys_uid.".jpg") )
						$property_image=get_showtime('live_site')."/jomres/uploadedimages/".$property->propertys_uid."_property_".$property->propertys_uid.".jpg";
					$starslink="<img src=\"".get_showtime('live_site')."/jomres/images/blank.png\" alt=\"star\" border=\"0\" HEIGHT=\"1\" hspace=\"10\" VSPACE=\"1\" />";
					if ($stars!="0")
						{
						$starslink="";
							for ($i=1;$i<=$stars;$i++)
				    		{
							$starslink.="<img src=\"".get_showtime('live_site')."/jomres/images/star.png\" alt=\"star\" border=\"0\" />";
							}
						$starslink.="";
						}

					$propertyFeaturesArray=explode(",",($property->property_features));

					$rtRows="";
					$rArr=$rtArray[$property->propertys_uid];
					if (count($rArr)<1)
						$rtRows[]['feature']="Error, rooms found but not linked to room types. You will not be able to book a room from this property";
					else
						{
						foreach ($rArr as $rtd)
							{
							//$rtRows.=makeFeatureImages($rtDetailsArray[$rtd]['image'],$rtDetailsArray[$rtd]['room_class_abbv'],$rtDetailsArray[$rtd]['room_class_full_desc'],$retString=true)."&nbsp;";
							$rtRows.=jomres_makeTooltip($rtDetailsArray[$rtd]['room_class_abbv'],$rtDetailsArray[$rtd]['room_class_abbv'],$rtDetailsArray[$rtd]['room_class_full_desc'],$rtDetailsArray[$rtd]['image'],"","room_type",array());
								
							}
						}

					$property_deets['ROOMTYPES']=$rtRows;

					if (count($propertyFeaturesArray)>0)
						{
						$featureList="";
						$counter=0;
						foreach ($featuresArray as $k=>$v)
							{
							if (in_array($k,$propertyFeaturesArray ) )
								{
								if ( ($counter/10 )==0)
									$br="<br />";
								//$featureList.=makeFeatureImages($featuresArray[$k]['image'],$featuresArray[$k]['hotel_feature_abbv'],$featuresArray[$k]['hotel_feature_full_desc'],$retString=true)."&nbsp;";
								$featureList.=jomres_makeTooltip($featuresArray[$k]['hotel_feature_abbv'],$featuresArray[$k]['hotel_feature_abbv'],$featuresArray[$k]['hotel_feature_full_desc'],$featuresArray[$k]['image'],"","property_feature",array());
								$counter++;
								}
							}
						$property_deets['FEATURELIST']=$featureList;
						}

					$currfmt = jomres_getSingleton('jomres_currency_format');
					if ($mrConfig['is_real_estate_listing']==0)
						{
						$tArr=array();
						$ratesArray=array();

						foreach ($tariffsArray as $k=>$v)
							{
							$key=key($v);
							$val=$tariffsArray[$k][$key];
							if (key($v)==intval($property->propertys_uid))
								$tArr[]=$val;
							}
						foreach ($tArr as $t)
							{
							$date_elements	 = explode("/",$t['validfrom']);
							$unixValidfrom= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
							$date_elements	 = explode("/",$t['validto']);
							$unixValidto= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
							if ( $unixValidfrom <= $unixTodaysDate && $unixValidto >= $unixTodaysDate )
								{
								$ratesArray[]=$t['roomrateperday'];
								}
							}
						if (count($ratesArray) >0)
							{
							sort($ratesArray,SORT_NUMERIC);
							$lowestPrice=$ratesArray[0];
							$lowestPrice=$current_property_details->get_gross_accommodation_price($lowestPrice,$property->propertys_uid);
							//if ($mrConfig['tariffChargesStoredWeeklyYesNo'] == "1")
							//	$lowestPrice = $lowestPrice * 7;
								
							}
						else
							$lowestPrice="-";

						
						$price=output_price($lowestPrice);
						
						if ($mrConfig['tariffChargesStoredWeeklyYesNo'] == "1")
							$price.="&nbsp;".jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK);
						else
							{
							if ($mrConfig['perPersonPerNight']=="0" )
								$price.="&nbsp;".jr_gettext('_JOMRES_FRONT_TARIFFS_PN',_JOMRES_FRONT_TARIFFS_PN);
							else
								$price.="&nbsp;".jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN',_JOMRES_FRONT_TARIFFS_PPPN);
							}
						$price = jr_gettext('_JOMRES_TARIFFSFROM',_JOMRES_TARIFFSFROM,false,false).$price;
						}
					else
						{
						$price=jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE',_JOMRES_COM_MR_EXTRA_PRICE). ": ".output_price($property->property_key);
						}
						
						
					$propertyAddressArray=getPropertyAddressForPrint($property->propertys_uid);
					$propertyContactArray=$propertyAddressArray[1];
					$propertyAddyArray=$propertyAddressArray[2];

					$property_deets['COUNTER']=$templateCounter;
					$templateCounter++;
					//$property_deets['PROP_TYPE']=$propertyAddressArray[3];
					if ($mrConfig['is_real_estate_listing']==0)
						{
						if ($mrConfig['visitorscanbookonline'] == "1")
							{
							if ( $jrConfig['useSSLinBookingform'] == "1" )
								$url=jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&amp;selectedProperty=".$property->propertys_uid,1);
							else
								$url=jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&amp;selectedProperty=".$property->propertys_uid);
								
							$property_deets['LINKONLY']="<a href=\"".$url."\" title=\"".jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,$editable=false,$isLink=true)."\">";
							if ($mrConfig['singleRoomProperty'] =="1")
								$property_deets['BOOKTHIS_TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY',_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY,false,false) ;
							else
								$property_deets['BOOKTHIS_TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,false,false) ;
							/*
							if ( $jrConfig['useSSLinBookingform'] == "1" )
								{
								$property_deets['LINKONLY'] = str_replace("http://","https://",$property_deets['LINKONLY']);
								}
							*/
							

							}
						else
							{
							$property_deets['BOOKTHIS_TEXT']="<a href=\"".jomresURL(JOMRES_SITEPAGE_URL."&task=contactowner&amp;selectedProperty=".$property->propertys_uid)."\">".jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL,false,false)."</a>";
							$bookinglink[]		= 	$link;
							}
						}
					else
						{
						$property_deets['BOOKTHIS_TEXT']="<a href=\"".jomresURL(JOMRES_SITEPAGE_URL."&task=contactowner&amp;selectedProperty=".$property->propertys_uid)."\">".jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT',_JOMRES_FRONT_MR_MENU_CONTACT_AGENT,false,false)."</a>";
						$bookinglink[]		= 	$link;
						}
					
					$property_deets['PROP_NAME'] =$current_property_details->get_property_name($property->propertys_uid);
					//var_dump($property_deets['PROP_NAME']);exit;
					$property_deets['PROP_STREET']=stripslashes($propertyContactArray[1]);
					$property_deets['PROP_TOWN']='<a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&town='.$propertyContactArray[2]).'">'.stripslashes($propertyContactArray[2]).'</a>';
					$property_deets['PROP_POSTCODE']=stripslashes($propertyContactArray[3]);
					$property_deets['PROP_REGION']='<a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&region='.urlencode($propertyContactArray[4])).'">'.stripslashes($propertyContactArray[4]).'</a>';
					$property_deets['PROP_COUNTRY']='<a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&country='.urlencode($propertyContactArray[5])).'">'.stripslashes(stripslashes(getSimpleCountry($propertyContactArray[5]))).'</a>';

					$property_deets['LIVESITE']=get_showtime('live_site');
					$property_deets['UID']=$property->propertys_uid;
					$property_deets['MOREINFORMATION']= jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION,$editable=false,true) ;
					$property_deets['MOREINFORMATIONLINK']=jomresURL( JOMRES_SITEPAGE_URL."&task=viewproperty&property_uid=".$property->propertys_uid) ;
					$property_deets['MOREINFORMATIONLINK_SEFSAFE']=JOMRES_SITEPAGE_URL."&task=viewproperty&property_uid=".$property->propertys_uid;
					$property_deets['PROPERTYNAME']= $property_deets['PROP_NAME'] ;
					$property_deets['PROPERTYTOWN']= $ptown;
					$property_deets['PROPERTYREGION']= stripslashes($propertyContactArray[4]);
					$property_deets['PROPERTYCOUNTRY']= stripslashes(stripslashes(getSimpleCountry($propertyContactArray[5])));
					
					$property_deets['PROPERTYDESC']= substr($propertyDesc,0,$jrConfig['propertyListDescriptionLimit'])."...";
					$property_deets['IMAGE']=$property_image;

					$sizes=array('thwidth'=>$jrConfig['thumbnail_width'],'thheight'=>$jrConfig['thumbnail_width']);
					if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property->propertys_uid."_property_".$property->propertys_uid.".jpg"))
						$sizes=getImagesSize(JOMRES_IMAGELOCATION_ABSPATH.$property->propertys_uid."_property_".$property->propertys_uid.".jpg");

					$query="SELECT ptype FROM #__jomres_ptypes WHERE `id` = '".(int)$property->ptype_id."' LIMIT 1";
					$ptype = doSelectSql($query,1);
					$property_deets['PROPERTY_TYPE'] =jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTYTYPES'.(int)$property->ptype_id,$ptype,false,false);
					
	
					$property_deets['TOOLTIP_IMAGE']=jomres_makeTooltip("property_image".$property->propertys_uid,"",$property_deets['IMAGE'],$property_deets['IMAGE'],"","imageonly",$type_arguments=array("width"=>$sizes['thwidth'],"height"=>$sizes['thheight'],"border"=>0));
					$property_deets['LOWESTPRICE']=$price;
					$property_deets['STARS']=$starslink;
					//$property_deets['TEMPLATEPATH']=$templatepath;
					$MiniComponents->triggerEvent('01011',array('property_uid'=>$property->propertys_uid) ); // Optional
					$mcOutput=$MiniComponents->getAllEventPointsData('01011');
					if (count($mcOutput)>0)
						{
						foreach ($mcOutput as $key=>$val)
							{
							$result=array_merge($property_deets,$val);
							$property_deets=$result;
							}
						}
					$cache->setCache($property_deets);
					unset($cache);
					}
				$property_details[]=$property_deets;
				}

			if (!$data_only)
				{
				$pageoutput[] = $output;
				$tmpl = new patTemplate();
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->addRows( 'property_details', $property_details );
				$tmpl->addRows( 'nav_output_top', $nav_output);
				$tmpl->addRows( 'nav_output_bottom', $nav_output);
				$mcOutput=$MiniComponents->getAllEventPointsData('01010');
				if (count($mcOutput)>0)
					{
					foreach ($mcOutput as $key=>$val)
						{
						$tmpl->addRows( 'customOutput_'.$key, array($val) );
						}
					}
				$componentArgs=array('tmpl'=>$tmpl);
				if ($MiniComponents->eventFileExistsCheck('00232'))
					{
					$MiniComponents->triggerEvent('00232',$componentArgs); //
					}
				else
					{
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->readTemplatesFromInput( 'list_properties.html' );
					$tmpl->displayParsedTemplate();
					}

				if ($jrConfig['dumpTemplate']=="1")
					$tmpl->dump();
				}
			else
				{
				include (JOMRES_TEMPLATEPATH_FRONTEND.JRDS.'main.php');
				$jomres_remote_xml = new SimpleXMLElement($xmlstr);
				foreach ($property_details as $property)
					{
					$xml_property = $jomres_remote_xml->addChild('property', $property['UID']);
					$xml_property->addChild('property_name', $property['PROP_NAME']);
					$xml_property->addChild('booking_link', $property['BOOKTHIS_TEXT']);
					$xml_property->addChild('prop_street', $property['PROP_STREET']);
					$xml_property->addChild('prop_town', $property['PROPERTYTOWN']);
					$xml_property->addChild('prop_postcode', $property['PROP_POSTCODE']);
					$xml_property->addChild('prop_region', $property['PROPERTYREGION']);
					$xml_property->addChild('prop_country', $property['PROPERTYCOUNTRY']);
					$xml_property->addChild('moreinformation', $property['MOREINFORMATION']);
					$xml_property->addChild('image', $property['IMAGE']);
					$xml_property->addChild('property_type', $property['PROPERTY_TYPE'] );
					$xml_property->addChild('description', $property['PROPERTYDESC'] );
					$xml_property->addChild('stars', $property['STARS'] );
					
					$xml_property->addChild('livesite', urlencode  (get_showtime('live_site') ));
					$xml_property->addChild('lowestprice', urlencode  ($property['LOWESTPRICE']) );
					$xml_property->addChild('moreinformationlink',urlencode  ( $property['MOREINFORMATIONLINK_SEFSAFE']));
					}

				$xmlString = $jomres_remote_xml->asXML(); // returns the SimpleXML object as a serialized XML string
				echo $xmlString;
				exit;
				}
	    	}
		else
			echo jr_gettext('_JOMRES_FRONT_NORESULTS',_JOMRES_FRONT_NORESULTS,$editable=true,$islink=false) ;
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION) ;
		$output[]		=jr_gettext('_JOMRES_TARIFFSFROM',_JOMRES_TARIFFSFROM) ;
		$output[]		=jr_gettext('_JOMRES_FRONT_NORESULTS',_JOMRES_FRONT_NORESULTS);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>