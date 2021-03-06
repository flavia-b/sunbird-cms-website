<?php
/**
 * @package   admintools
 * @copyright Copyright (c)2010-2020 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

namespace Akeeba\AdminTools\Admin\Controller;

defined('_JEXEC') or die;

use Akeeba\AdminTools\Admin\Controller\Mixin\CustomACL;
use FOF30\Controller\DataController;

class WAFBlacklistedRequests extends DataController
{
	use CustomACL;

	protected function onBeforeApplySave(&$data)
	{
		$data['option'] = $data['foption'];
		$data['view']   = $data['fview'];
		$data['task']   = $data['ftask'];
		$data['query']  = $data['fquery'];
	}
}
