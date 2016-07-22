<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Pmfaq',
	'FAQ'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'FAQ');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pmfaq_domain_model_eintrag', 'EXT:pmfaq/Resources/Private/Language/locallang_csh_tx_pmfaq_domain_model_eintrag.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pmfaq_domain_model_eintrag');
$GLOBALS['TCA']['tx_pmfaq_domain_model_eintrag'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:pmfaq/Resources/Private/Language/locallang_db.xlf:tx_pmfaq_domain_model_eintrag',
		'label' => 'frage',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'frage,antwort,kategorien,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Eintrag.php',
		'iconfile' => 'EXT:pmfaq/Resources/Public/Icons/tx_pmfaq_domain_model_eintrag.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pmfaq_domain_model_kategorie', 'EXT:pmfaq/Resources/Private/Language/locallang_csh_tx_pmfaq_domain_model_kategorie.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pmfaq_domain_model_kategorie');
$GLOBALS['TCA']['tx_pmfaq_domain_model_kategorie'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:pmfaq/Resources/Private/Language/locallang_db.xlf:tx_pmfaq_domain_model_kategorie',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Kategorie.php',
		'iconfile' => 'EXT:pmfaq/Resources/Public/Icons/tx_pmfaq_domain_model_kategorie.gif'
	),
);
