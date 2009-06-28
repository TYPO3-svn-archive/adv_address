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

tx_div::load('tx_lib_controller');

class tx_advaddress_controllers_list extends tx_lib_controller{
	var $extKey = 'adv_address';
	var $defaultAction = 'listAction';


	function listAction() {
		$modelClassName = tx_div::makeInstanceClassName('tx_advaddress_models_list');
		$entryClassName = tx_div::makeInstanceClassName('tx_advaddress_views_entry');
		$listClassName = tx_div::makeInstanceClassName('tx_advaddress_views_list');
		$translatorClassName = tx_div::makeInstanceClassName('tx_lib_translator');

		// a simple processing chain
		$model = new $modelClassName();
		$model->controller($this);
		$model->loadPersonList();
		$view = new $listClassName();
		$view->controller($this);
		for($model->rewind(); $model->valid(); $model->next()) {
			$entry = new $entryClassName($model->current());
			$entry->controller($this);
			$view->append($entry);
		}
		$view->setPathToTemplateDirectory($this->configurations->get('templatePath'));
		$view->render($this->configurations->get('listTemplate'));
		$translator = new $translatorClassName($view);
		$translator->setPathToLanguageFile($this->configurations->get('pathToLanguageFile'));



		/*

		$modelClassName = tx_div::makeInstanceClassName('tx_advaddress_models_list');
		$viewClassName = tx_div::makeInstanceClassName('tx_advaddress_views_list');
		$translatorClassName = tx_div::makeInstanceClassName('tx_lib_translator');

		$view = new $viewClassName(new $modelClassName());
		$view->setController($this);

		$view->setTemplatePath($this->getConfiguration('templatePath'));
		$view->render($this->getConfiguration('exampleTemplate'));

		$translator = new $translatorClassName($view);
		$translator->setPathToLanguageFile($this->getConfiguration('pathToLanguageFile'));
		*/
		return $translator->translateContent();
	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/adv_address/controllers/class.tx_advaddress_controllers_list.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/adv_address/controllers/class.tx_advaddress_controllers_list.php']);
}
?>
