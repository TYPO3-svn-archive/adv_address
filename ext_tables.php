<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_extMgm::allowTableOnStandardPages('tx_advaddress_persons');

$TCA['tx_advaddress_persons'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons',
		'label' => 'lastname',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => Array (
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_advaddress_persons.gif',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden, firstname, middlename, lastname, title, letter_title, gender, birthday, picture, note, employer, addresses, type, status',
	)
);


t3lib_extMgm::allowTableOnStandardPages('tx_advaddress_addresses');

$TCA['tx_advaddress_addresses'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_addresses',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => Array (
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_advaddress_addresses.gif',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden, title, street, zip, city, country, parentid, parenttable, contacts, is_main',
	)
);


t3lib_extMgm::allowTableOnStandardPages('tx_advaddress_contacts');

$TCA['tx_advaddress_contacts'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts',
		'label' => 'value',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => Array (
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_advaddress_contacts.gif',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden, parentid, parenttable, title, value',
	)
);


t3lib_extMgm::allowTableOnStandardPages('tx_advaddress_companies');

$TCA['tx_advaddress_companies'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_companies',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => Array (
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_advaddress_companies.gif',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden, name, description, note, addresses, employees',
	)
);


t3lib_extMgm::allowTableOnStandardPages('tx_advaddress_staff');

$TCA['tx_advaddress_staff'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_staff',
		'label' => 'jobtitle',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => Array (
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_advaddress_staff.gif',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden, starttime, endtime, companyid, personid, companysort, personsort, jobtitle, department',
	)
);

t3lib_extMgm::allowTableOnStandardPages('tx_advaddress_status');

$TCA['tx_advaddress_status'] = array (
    'ctrl' => array (
        'title'     => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status',
        'label'     => 'uid',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'enablecolumns' => array (
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
        'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_advaddress_status.gif',
    ),
		'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden, parentid, parenttable, status, statustype, statusdate',
	)
);



t3lib_div::loadTCA('tt_content');

/**
 *  The plugins need to be included in ext_tables.php 
 */

// list plugins in plugin selection
t3lib_extMgm::addStaticFile('adv_address', './configurations', 'adv_address');
t3lib_extMgm::addPlugin(Array('LLL:EXT:adv_address/locallang_db.php:pluginLabel','tx_advaddress_list'),'list_type');

// some cosmetic of the view
$TCA['tt_content']['types']['list']['subtypes_excludelist']['tx_advaddress_list']='layout,select_key,pages,recurs';
$TCA['tt_content']['types']['list']['subtypes_addlist']['tx_advaddress_list']='pi_flexform';

t3lib_extMgm::addPiFlexFormValue('tx_advaddress_list', 'FILE:EXT:adv_address/configurations/flexform.xml');

?>