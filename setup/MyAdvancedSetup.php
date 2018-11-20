<?php
/**
 * 2007-2018 Frédéric BENOIST
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    Frédéric BENOIST <http://www.fbenoist.com/>
 *  @copyright 2013-2018 Frédéric BENOIST <contact@fbenoist.com>
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

use PrestaShop\PrestaShop\Adapter\Module\Module;
use PrestaShop\PrestaShop\Adapter\Module\Configuration\ModuleComplexConfigurationInterface;

class MyAdvancedSetup implements ModuleComplexConfigurationInterface
{
    public function run(Module $module, array $params)
    {
        echo 'Setup for '.$module->instance->displayName."\n";
        echo 'myParam1='.$params[0]['myParam1']."\n";
        echo 'oneArrayParam='.implode(',', $params[1]['oneArrayParam'])."\n";
        echo 'myParam1='.$params[0]['myParam1']."\n";
        echo 'withSpecificKey='.$params[2]['myParam2'][0]['withSpecificKey']."\n";
        echo 'Done !';
    }
}
