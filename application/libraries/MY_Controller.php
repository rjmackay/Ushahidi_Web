<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Base Controller
 * Enforces basic access control, ie. for private deployments
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi - http://source.ushahididev.com
 * @subpackage Controllers
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL)
 */

abstract class Controller extends Controller_Core {
	
	/**
	 * Level of permissions required to use this controller
	 * 
	 * Possible values:
	 * - TRUE : always accessible (Only ever use this for the login screen)
	 * - FALSE : never accessible
	 * - permission : the permission/role required to access the controller
	 * @var mixed
	 **/
	public static $access = FALSE;
	
	/**
	 * Array of methods that can be called on this controller
	 * 
	 * Example:
	 *   array(
	 *     'index' => TRUE
	 *     'customaction' => 'CustomActionAccess'
	 *   )
	 * @var array
	 */
	
	public static $allowed_methods = array();

	// User Object
	protected $user;

	// Auth Object
	protected $auth;
	
	public function __construct()
	{
		parent::__construct();

		$this->auth = Auth::instance();

		// Get session information
		$this->user = Auth::instance()->get_user();

		// Are we logged in? if not, do we have an auto-login cookie?
		if (! $this->auth->logged_in()) {
			$this->auth->auto_login();
		}

		// Check access for this controller
		/*if (! self::can_access() ) {
			if (! $this->auth->logged_in() )
			{
				url::redirect('login');
			}
			url::redirect('/');
		}*/
	}
	

}
