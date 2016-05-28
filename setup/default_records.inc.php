<?php
/**
 * EGroupware phpFreeChat integration
 *
 * @link http://www.egroupware.org
 * @package phpfreechat
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @version $Id$
 */

// give Default group rights for phpfreechat
$defaultgroup = $GLOBALS['egw_setup']->add_account('Default','Default','Group',False,False);
$GLOBALS['egw_setup']->add_acl('phpfreechat','run',$defaultgroup);
