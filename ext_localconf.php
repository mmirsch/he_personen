<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'He.' . $_EXTKEY,
	'Personen',
	array(
		'Persons' => 'list, show, new, create, edit, update, delete',
		'Functions' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Persons' => 'create, update, delete',
		'Functions' => 'create, update, delete',
		
	)
);
