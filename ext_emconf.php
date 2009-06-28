<?php

########################################################################
# Extension Manager/Repository config file for ext: "adv_address"
#
# Auto generated 29-08-2008 16:24
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Advanced Address-List',
	'description' => 'A new address-extension which makes use of the new IRRE-features',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.0.3',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Sven Kalbhenn',
	'author_email' => 'sven@skom.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.1.2-0.0.0',
			'div' => '0.0.12-',
			'lib' => '0.0.24-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:28:{s:9:"ChangeLog";s:4:"c98f";s:10:"README.txt";s:4:"9fa9";s:12:"ext_icon.gif";s:4:"82cc";s:17:"ext_localconf.php";s:4:"3768";s:14:"ext_tables.php";s:4:"bce7";s:14:"ext_tables.sql";s:4:"a801";s:30:"icon_tx_advaddress_address.gif";s:4:"78eb";s:32:"icon_tx_advaddress_addresses.gif";s:4:"78eb";s:32:"icon_tx_advaddress_companies.gif";s:4:"a25c";s:31:"icon_tx_advaddress_contacts.gif";s:4:"dc05";s:29:"icon_tx_advaddress_person.gif";s:4:"1e24";s:30:"icon_tx_advaddress_persons.gif";s:4:"1e24";s:28:"icon_tx_advaddress_staff.gif";s:4:"475a";s:13:"locallang.xml";s:4:"9e63";s:16:"locallang_db.xml";s:4:"4adc";s:7:"tca.php";s:4:"99c5";s:14:"doc/manual.sxw";s:4:"7cb9";s:19:"doc/wizard_form.dat";s:4:"0dfd";s:20:"doc/wizard_form.html";s:4:"b4e7";s:28:"configurations/constants.txt";s:4:"97a5";s:27:"configurations/flexform.xml";s:4:"3ecd";s:24:"configurations/setup.txt";s:4:"7d25";s:52:"controllers/class.tx_advaddress_controllers_list.php";s:4:"bf81";s:42:"models/class.tx_advaddress_models_list.php";s:4:"e101";s:41:"views/class.tx_advaddress_views_entry.php";s:4:"4ea9";s:40:"views/class.tx_advaddress_views_list.php";s:4:"05af";s:21:"templates/example.php";s:4:"9901";s:22:"templates/listView.php";s:4:"e7f9";}',
);

?>