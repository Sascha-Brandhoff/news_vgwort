<?php

namespace Contao;

class ModuleNewsVGWort extends \Module
{
	protected $strTemplate = 'mod_newsvgwort';

	public function generate()
	{
		if (TL_MODE == 'BE') {
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['newsvgwort'][0]) . ' ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		if (!isset($_GET['items']) && \Config::get('useAutoItem') && isset($_GET['auto_item'])) {
			\Input::setGet('items', \Input::get('auto_item'));
		}

		$objNews = \NewsModel::findByAlias(\Input::get('items'));
		if($objNews !== null) {
			if(!$objNews->addVGWort) {
				if(!trim($objNews->vgwort_code)) {
					return '';
				}
			}
		}

		return parent::generate();
	}

	protected function compile()
	{
		$objNews = \NewsModel::findByAlias(\Input::get('items'));
		$this->Template->code = $objNews->vgwort_code;
	}
}
