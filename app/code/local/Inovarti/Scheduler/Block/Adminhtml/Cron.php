<?php

/**
 *
 * @category   Inovarti
 * @package    Inovarti_Scheduler
 * @author     Suporte <suporte@inovarti.com.br>
 */
class Inovarti_Scheduler_Block_Adminhtml_Cron extends Mage_Adminhtml_Block_Widget_Grid_Container {



	/**
	 * Constructor for Cron Adminhtml Block
	 */
	public function __construct() {
		$this->_blockGroup = 'inovarti_scheduler';
		$this->_controller = 'adminhtml_cron';
		$this->_headerText = Mage::helper('inovarti_scheduler')->__('Available tasks');
		parent::__construct();
	}



	/**
	 * Prepare layout
	 *
	 * @return Inovarti_Scheduler_Block_Adminhtml_Cron
	 */
	protected function _prepareLayout() {
		$this->removeButton('add');
		$this->_addButton('add_new', array(
			'label'   => Mage::helper('inovarti_scheduler')->__('Generate Schedule'),
			'onclick' => "setLocation('{$this->getUrl('*/*/generateSchedule')}')",
		));
		$this->_addButton('configure', array(
			'label'   => Mage::helper('inovarti_scheduler')->__('Cron Configuration'),
			'onclick' => "setLocation('{$this->getUrl('adminhtml/system_config/edit', array('section' => 'system'))}#system_cron')",
		));
		return parent::_prepareLayout();
	}



	/**
	 * Returns the CSS class for the header
	 *
	 * Usually 'icon-head' and a more precise class is returned. We return
	 * only an empty string to avoid spacing on the left of the header as we
	 * don't have an icon.
	 *
	 * @return string
	 */
	public function getHeaderCssClass() {
		return '';
	}

}
