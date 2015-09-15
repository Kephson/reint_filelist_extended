<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/* extend the filelist class via XCLASS
 * @link https://docs.typo3.org/typo3cms/CoreApiReference/ApiOverview/Xclasses/Index.html
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Filelist\\FileList'] = array(
	'className' => 'RENOLIT\\ReintFilelistExtended\\Xclass\\FileList'
);

/*
 * Make the extension configuration accessible
 * @link https://docs.typo3.org/typo3cms/CoreApiReference/ExtensionArchitecture/ConfigurationOptions/Index.html
 */
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
}

/*
 * Reset extConf array to avoid errors
 */
if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] = serialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
}