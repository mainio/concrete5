<?php defined('C5_EXECUTE') or die("Access Denied.");

class Concrete5_Model_NameCorePagePropertyComposerControl extends CorePagePropertyComposerControl {
	
	public function __construct() {
		$this->setCorePagePropertyHandle('name');
		$this->setComposerControlName(t('Page Name'));
		$this->setComposerControlIconSRC(ASSETS_URL . '/models/attribute/types/text/icon.png');
	}

	public function publishToPage(Page $c, $data, $controls) {
		$this->addComposerControlRequestValue('cName', $data['name']);
		parent::publishToPage($c, $data, $controls);
	}

}