<?php

namespace RENOLIT\ReintFilelistExtended\Xclass;

/* * *************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Ephraim Härer <ephraim.haerer@renolit.com>, RENOLIT SE
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */
use TYPO3\CMS\Filelist\Controller\FileListController;

class FileList extends \TYPO3\CMS\Filelist\FileList
{

	/**
	 * Construct
	 *
	 * @param FileListController $fileListController
	 */
	public function __construct(FileListController $fileListController = NULL)
	{
		parent::__construct($fileListController);

		/*
		 * settings from ext_conf_template.txt
		 * @link https://docs.typo3.org/typo3cms/CoreApiReference/singlehtml/
		 */
		$settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['reint_filelist_extended']);

		if ($settings['enableModule']) {
			// set number of files in list
			if (isset($settings['numOfShownFiles']) && (int) $settings['numOfShownFiles'] > 0) {
				$this->iLimit = $settings['numOfShownFiles'];
			}
			// set thumbnails as default
			if (isset($settings['showThumbs']) && (int) $settings['showThumbs'] === 1) {
				$this->thumbs = $settings['showThumbs'];
			}
			// set length of file titles
			if (isset($settings['lengthOfFileTitle']) && (int) $settings['lengthOfFileTitle'] > 0) {
				$this->fixedL = $settings['lengthOfFileTitle'];
			}
		}
	}
}
