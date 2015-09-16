<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "reint_filelist_extended"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Extended filelist options',
	'description' => 'Extension makes the filelist in backend easier configurable.',
	'category' => 'be',
	'author' => 'Ephraim Härer',
	'author_email' => 'ephraim.haerer@renolit.com',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '0.5.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.4.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);