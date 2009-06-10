<?php
/**
 * Bootstrap file for setup
 *
 * This software is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License version 2.1 as published by the Free Software Foundation
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * @category   Setup
 * @package    Setup
 * @copyright  Copyright (c) 2008 Mayflower GmbH (http://www.mayflower.de)
 * @version    $Id$
 * @license    LGPL 2.1 (See LICENSE file)
 * @author     Gustavo Solt <solt@mayflower.de>
 * @since      File available since Release 6.0
 */
define('PHPR_CONFIG_SECTION', 'production');

define('PHPR_ROOT_PATH', realpath(dirname(__FILE__) . '/../'));
define('PHPR_CORE_PATH', PHPR_ROOT_PATH . DIRECTORY_SEPARATOR . 'htdocs');
define('PHPR_LIBRARY_PATH', PHPR_ROOT_PATH . DIRECTORY_SEPARATOR . 'library');
if (!defined('PHPR_CONFIG_FILE')) {
    define('PHPR_CONFIG_FILE', PHPR_ROOT_PATH . DIRECTORY_SEPARATOR . 'configuration.ini');
}

set_include_path('.' . PATH_SEPARATOR
    . PHPR_LIBRARY_PATH . PATH_SEPARATOR
    . PHPR_CORE_PATH . PATH_SEPARATOR
    . get_include_path());

require_once 'Zend/Loader.php';
require_once 'Phprojekt/Loader.php';

Zend_Loader::registerAutoload('Phprojekt_Loader');

// Start zend session to handle all session stuff
Zend_Session::start();

ini_set('max_execution_time', 0);

$view = new Zend_View();
$view->addScriptPath(PHPR_CORE_PATH . '/Setup/Views/dojo/');

$viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer($view);
$viewRenderer->setViewBasePathSpec(':moduleDir/Views');
$viewRenderer->setViewScriptPathSpec(':action.:suffix');
Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);

$plugin = new Zend_Controller_Plugin_ErrorHandler();
$plugin->setErrorHandlerModule('Setup');
$plugin->setErrorHandlerController('Error');
$plugin->setErrorHandlerAction('error');

$front = Zend_Controller_Front::getInstance();
$front->setDispatcher(new Phprojekt_Dispatcher());
$front->registerPlugin($plugin);
$front->setDefaultModule('Setup');
$front->setModuleControllerDirectoryName('Controllers');
$front->addModuleDirectory(PHPR_CORE_PATH);
$front->setParam('useDefaultControllerAlways', true);

try {
    Zend_Controller_Front::getInstance()->dispatch();
} catch (Exception $error) {
    echo "Caught exception: " . $error->getFile() . ':' . $error->getLine() . "\n";
    echo '<br/>' . $error->getMessage();
    echo '<pre>' . $error->getTraceAsString() . '</pre>';
}