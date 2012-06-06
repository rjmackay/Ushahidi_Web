<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Access Control Layer
 * 
 * Inspired by https://github.com/Zeelot/kohana_router-acl
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author	   Ushahidi Team <team@ushahidi.com>
 * @package	   ACL
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license	   http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL)
 */

class acl_hook {

	protected $user_roles = array();

	public function __construct()
	{
		Event::add('system.routing', array($this, 'route_check'));
	}

	/**
	* Check to see if the user can continue to the controller
	*/
	public function route_check()
	{
		//var_dump(Router::$controller);
		//var_dump(Router::$method);exit();
		
		if (! ACL::can_access())
		{
			Event::run('system.403');
		}
		
		/*$allowed = FALSE;
		$allowed_roles = Kohana::config('routes.'.Router::$current_route.'.allowed_roles');
		if($allowed_roles == FALSE)
		{
			//everyone is allowed to access this route
			$allowed = TRUE;
		}
		if(!$allowed)
		{
			foreach($allowed_roles as $role)
			{
				if (in_array($role, $this->user_roles))
				{
					$allowed = TRUE;
				}
			}
			if (!$allowed)
			{
				Event::run('system.403');
			}
		}*/
	}
}

new acl_hook;