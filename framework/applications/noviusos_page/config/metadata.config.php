<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name'      => 'Pages',
    'namespace' => 'Nos\Page',
    'version'   => '0.1',
    'provider'  => array(
        'name'  => 'Novius OS',
    ),
    'permission' => array(
        'icon64'  => 'static/apps/noviusos_page/img/64/page.png',
    ),
    'launchers' => array(
        'noviusos_page' => array(
            'name' => 'Pages',
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/noviusos_page/appdesk/index',
                ),
            ),
        ),
    ),
    'icons' => array(
        64 => 'static/apps/noviusos_page/img/64/page.png',
        32 => 'static/apps/noviusos_page/img/32/page.png',
        16 => 'static/apps/noviusos_page/img/16/page.png',
    ),
);