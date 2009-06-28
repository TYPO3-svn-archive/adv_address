<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2007 Sven Kalbhenn
 *  Contact: sven@skom.de
 *  All rights reserved
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 ***************************************************************/

tx_div::load('tx_lib_object');

class tx_advaddress_models_list extends tx_lib_object {
	// Constructor
	function loadPersonList() {
		parent::tx_lib_object();
		$fields = '*';
		$tables = 'tx_advaddress_persons';
		$groupBy = null;
		$orderBy = 'tstamp DESC';
		$where = 'hidden = 0 AND deleted = 0 ';
		//$limit = (integer) $this->getConfiguration('maximalItemsToDisplay');
		$limit = 10;

		$query = $GLOBALS['TYPO3_DB']->SELECTquery($fields, $tables, $where, $groupBy, $orderBy, $limit);
		$result = $GLOBALS['TYPO3_DB']->sql_query($query);
		//$list = tx_div::makeInstance('tx_lib_object');
		if($result) {
			while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result)) {
				$entry = new tx_lib_object($row);
				$this->append($entry);
			}
		}
		/*
		if($result) {
			while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result)) {
				$entry = new tx_lib_object($row);
				$list->append($entry);
			}
		}
		$this->set('resultList', $list);
		*/

		/*

		$this->set('firstname', 'Sven');
		$this->set('middlename', '');
		$this->set('lastname', 'Kalbhenn');
		$this->set('title', '');
		$this->set('gender', 'male');
		$this->set('birthday', '22.09.1970');
		$this->set('picture', 'test.jpg');
		$this->set('note', 'Dies ist eine Test-Person');
		*/
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/adv_address/models/class.tx_advaddress_models_list.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/adv_address/models/class.tx_advaddress_models_list.php']);
}
?>
