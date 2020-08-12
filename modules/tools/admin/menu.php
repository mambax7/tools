<?php
/**
 * tools Module for XOOPS
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         tools
 * @since           2.00
 * @author          Susheng Yang <ezskyyoung@gmail.com>
 */

use XoopsModules\Tools;

include dirname(__DIR__) . '/preloads/autoloader.php';

// require_once  dirname(__DIR__) . '/class/Helper.php';
//require_once  dirname(__DIR__) . '/include/common.php';
/** @var Tools\Helper $helper */
$helper = Tools\Helper::getInstance();
$helper->loadLanguage('common');
$helper->loadLanguage('feedback');

$pathIcon32 = \Xmf\Module\Admin::menuIconPath('');
if (is_object($helper->getModule())) {
    $pathModIcon32 = $helper->getModule()->getInfo('modicons32');
}

$adminmenu[] = [
    'title' => _MI_TOOLS_MENU_HOME,
    'link' => 'admin/index.php',
    'icon' => $pathIcon32 . '/home.png',
];

$adminmenu[] = [
    'title' => _MI_TOOLS_INDEX,
    'link' => 'admin/main.php',
    'icon' => $pathIcon32 . '/update.png',
];

$adminmenu[] = [
    'title' => _MI_TOOLS_BLOCKS,
    'link' => 'admin/blockscall.php',
    'icon' => $pathIcon32 . '/manage.png',
];

$adminmenu[] = [
    'title' => _MI_TOOLS_MENU_ABOUT,
    'link' => 'admin/about.php',
    'icon' => $pathIcon32 . '/about.png',
];

//$adminmenu[3]['title'] = _FOO_MI_;
//$adminmenu[3]['link'] = "admin/";
//$adminmenu[4]['title'] = _FOO_MI_;
//$adminmenu[4]['link'] = "admin/";
//$adminmenu[5]['title'] = _FOO_MI_;
//$adminmenu[5]['link'] = "admin/";
