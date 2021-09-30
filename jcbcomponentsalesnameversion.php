<?php
/*----------------------------------------------------------------------------------|  www.vdm.io  |----/
				TLWebdesign 
/-------------------------------------------------------------------------------------------------------/

	@version		1.0.x
	@build			31st juli, 2020
	@created		19th januari, 2019
	@package		Connect Me
	@subpackage		jcbcomponentsalesnameversion.php
	@author			Tom van der Laan <https://www.tlwebdesign.nl>	
	@copyright		Copyright (C) 2019. All Rights Reserved
	@license		Private License
  ____  _____  _____  __  __  __      __       ___  _____  __  __  ____  _____  _  _  ____  _  _  ____ 
 (_  _)(  _  )(  _  )(  \/  )(  )    /__\     / __)(  _  )(  \/  )(  _ \(  _  )( \( )( ___)( \( )(_  _)
.-_)(   )(_)(  )(_)(  )    (  )(__  /(__)\   ( (__  )(_)(  )    (  )___/ )(_)(  )  (  )__)  )  (   )(  
\____) (_____)(_____)(_/\/\_)(____)(__)(__)   \___)(_____)(_/\/\_)(__)  (_____)(_)\_)(____)(_)\_) (__) 

/------------------------------------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');


/***[JCBGUI.class_extends.head.1.$$$$]***/

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Plugin\CMSPlugin;
/***[/JCBGUI$$$$]***/


/***[JCBGUI.class_extends.comment.1.$$$$]***/
/**
 * Extension - JCBComponentSalesNameVersion plugin.
 *
 * @package   JCBComponentSalesNameVersion
 * @since     1.0.0
 *//***[/JCBGUI$$$$]***/

class PlgExtensionJCBComponentSalesNameVersion extends CMSPlugin
{

/***[JCBGUI.joomla_plugin.main_class_code.1.$$$$]***/
/**
	 * Event Triggered in the compiler [on Before Move To Server]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeUpdateFiles(&$context, &$compiler)
	{
		// do something on the jcb_ce_onBeforeUpdateFiles event
		
		$compiler->componentSalesName = $compiler->componentBackupName;
	}/***[/JCBGUI$$$$]***/

}
