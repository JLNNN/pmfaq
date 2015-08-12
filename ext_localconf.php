<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Parrotmedia.' . $_EXTKEY,
	'Pmfaq',
	array(
		'Eintrag' => 'listKategorien, showKategorie',

	),
	// non-cacheable actions
	array(
		'Eintrag' => '',

	)
);
