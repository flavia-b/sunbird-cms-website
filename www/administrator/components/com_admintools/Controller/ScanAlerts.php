<?php
/**
 * @package   admintools
 * @copyright Copyright (c)2010-2020 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

namespace Akeeba\AdminTools\Admin\Controller;

defined('_JEXEC') or die;

use Akeeba\AdminTools\Admin\Controller\Mixin\CustomACL;
use Akeeba\AdminTools\Admin\Model\Scans;
use FOF30\Controller\DataController;
use JText;

class ScanAlerts extends DataController
{
	use CustomACL;

	protected function onBeforeBrowse()
	{
		if (
			($this->input->getCmd('format', 'html') == 'csv') ||
			($this->input->getCmd('layout', 'default') == 'print')
		)
		{
			/** @var \Akeeba\AdminTools\Admin\Model\ScanAlerts $model */
			$model = $this->getModel();
			/** @var \Akeeba\AdminTools\Admin\View\ScanAlerts\Html $view */
			$view  = $this->getView();

			/** @var Scans $scansModel */
			$scansModel = $this->container->factory->model('Scans')->tmpInstance();

			$model->savestate(0)
				  ->limit(0)
				  ->limitstart(0);

			$view->scan = $scansModel->find($this->input->getInt('scan_id', 0));
		}
	}

	protected function onAfterCancel()
	{
		/** @var \Akeeba\AdminTools\Admin\Model\ScanAlerts $item */
		$item = $this->getModel()->savestate(false);

		$this->getIDsFromRequest($item, true);
		$this->redirect .= '&scan_id=' . (int)$item->scan_id;

		return true;
	}

	protected function onAfterSave()
	{
		/** @var \Akeeba\AdminTools\Admin\Model\ScanAlerts $item */
		$item = $this->getModel()->find();
		$this->redirect .= '&scan_id=' . (int)$item->scan_id;

		return true;
	}

	public function add()
	{
		throw new \Exception(JText::_('JLIB_APPLICATION_ERROR_ACCESS_FORBIDDEN'), 403);
	}

	public function delete()
	{
		throw new \Exception(JText::_('JLIB_APPLICATION_ERROR_ACCESS_FORBIDDEN'), 403);
	}

	public function markallsafe()
	{
		$scan_id = $this->input->getInt('scan_id', 0);

		if (!empty($scan_id))
		{
			/** @var \Akeeba\AdminTools\Admin\Model\ScanAlerts $model */
			$model = $this->getModel();
			$model->markAllSafe($scan_id);
		}

		$url = $this->input->getString('returnurl', '');

		if (empty($url))
		{
			$url = base64_encode('index.php?option=com_admintools&view=ScanAlerts&scan_id=' . $scan_id);
		}

		$this->setRedirect(base64_decode($url));
	}

	protected function onBeforePublish()
	{
		$customURL = $this->input->getString('returnurl', '');

		if (!$customURL)
		{
			$scan_id = $this->input->getInt('scan_id', 0);

			$url = 'index.php?option=com_admintools&view=ScanAlerts&scan_id=' . $scan_id;
			$this->input->set('returnurl', base64_encode($url));
		}
	}

	protected function onBeforeUnpublish()
	{
		$customURL = $this->input->getString('returnurl', '');

		if (!$customURL)
		{
			$scan_id = $this->input->getInt('scan_id', 0);

			$url = 'index.php?option=com_admintools&view=ScanAlerts&scan_id=' . $scan_id;
			$this->input->set('returnurl', base64_encode($url));
		}
	}
}
