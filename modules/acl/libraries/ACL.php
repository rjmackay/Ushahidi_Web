<?php defined('SYSPATH') or die('No direct script access.');
/**
 * ACL library.
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
class ACL_Core {
	
	/**
	 * Check if user has access to a controller action
	 * @param String $method
	 * @param User_Model $user
	 */
	public static function can_access($method = FALSE, $controller = FALSE, User_Model $user = NULL)
	{
		if (!$user)
		{
			$user = Auth::instance()->get_user();
		}
		
		if (!$method)
		{
			$method = Router::$method;
		}
		
		if (!$controller)
		{
			$controller = Router::$controller ."_Controller";
		}
		
		if ($controller::$access === TRUE) return TRUE;
		
		// Check if user has the required permission or role
		if ($user AND ($user->has(ORM::factory('role', $controller::$access)) OR $user->has_permission($controller::$access)) )
		{
			$method_access = isset($controller::$allowed_methods[$method]) ? $controller::$allowed_methods[$method] : FALSE;
			if ($method_access === TRUE) return TRUE;
			if ($user->has(ORM::factory('role', $method_access)) OR $user->has_permission($method_access))
			{
				return TRUE;
			}
		}
		
		return FALSE;
	}
	
}
	