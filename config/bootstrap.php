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
use Cake\Core\Plugin;
use Settings\Core\Setting;

Plugin::load('Bootstrap3');

Configure::write('Settings.Prefixes.LS', 'LightStrap');

Configure::write('CA.viewClass', 'LightStrap.App');
Configure::write('CA.theme', 'LightStrap');

Setting::register('LS.subtheme', 'Cosmo', [
    'options' => [
        null => 'None',
        'Cerulean' => 'Cerulean',
        'Cosmo' => 'Cosmo',
        'Cyborg' => 'Cyborg',
        'Darkly' => 'Darkly',
        'Flatly' => 'Flatly',
        'Journal' => 'Journal',
        'Lumen' => 'Lumen',
        'Paper' => 'Paper',
        'Readable' => 'Readable',
        'Simplex' => 'Simplex',
        'Slate' => 'Slate',
        'Spacelab' => 'Spacelab',
        'Superhero' => 'Superhero',
        'United' => 'United',
        'Yeti' => 'Yeti',
    ],
    'type' => 'select'
]);

Configure::write('CA.LightStrap.subtheme', Setting::read('LS.subtheme'));
