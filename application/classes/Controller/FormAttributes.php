<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Ushahidi API Notifications Controller
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application\Controllers
 * @copyright  2013 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

class Controller_FormAttributes extends Ushahidi_Rest {

	protected function _scope()
	{
		return 'forms';
	}

	protected function _resource()
	{
		return 'formattributes';
	}
}
