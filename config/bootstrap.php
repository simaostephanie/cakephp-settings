<?php
/**
 * CakeManager (http://cakemanager.org)
 * Copyright (c) http://cakemanager.org
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) http://cakemanager.org
 * @link          http://cakemanager.org CakeManager Project
 * @since         1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Core\Configure;
use Cake\Event\EventManager;
use Settings\Controller\Events\ManagerEvents;
use Cake\Core\Plugin;

if (Plugin::loaded('CakeManager')) {
    // registering the managerEvents
    $manager = new ManagerEvents();
    EventManager::instance()->attach($manager);
    
    // Adding the CM-prefix
    Configure::write('Settings.Prefixes.CM', 'CakeManager');
}