<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_advaddress_persons=1
');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_advaddress_addresses=1
');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_advaddress_contacts=1
');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_advaddress_companies=1
');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_advaddress_staff=1
');

?>