<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'He.' . $_EXTKEY,
	'Personen',
	'Personen'
);

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'He.' . $_EXTKEY,
		'tools',	 // Make module a submodule of 'tools'
		'pesonen',	// Submodule key
		'',						// Position
		array(
			'Persons' => 'list, show, new, create, edit, update, delete','Functions' => 'list, show, new, create, edit, update, delete',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_pesonen.xlf',
		)
	);

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'HE Personen');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hepersonen_domain_model_persons', 'EXT:he_personen/Resources/Private/Language/locallang_csh_tx_hepersonen_domain_model_persons.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hepersonen_domain_model_persons');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hepersonen_domain_model_functions', 'EXT:he_personen/Resources/Private/Language/locallang_csh_tx_hepersonen_domain_model_functions.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hepersonen_domain_model_functions');
