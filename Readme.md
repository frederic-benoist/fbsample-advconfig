# PrestaShop 1.7 Sample Module

Sample automatic setup of PrestaShop 1.7 module without configuration page.

## Install

cd your_prestashop_root_directory
php bin/console prestashop:module install fbsample_advconfig

## Test

cd your_prestashop_root_directory
php bin/console prestashop:module configure fbsample_advconfig

{{% notice note %}}
Use `php app/console` instead of `php bin/console` for versions prior to {{< minver v="1.7.4" >}}
{{% /notice %}}

# Licensing

This source file is subject to the Academic Free License (AFL 3.0)
that is bundled with this package in the file LICENSE.txt.
It is also available through the world-wide-web at this URL:
http://opensource.org/licenses/afl-3.0.php
If you did not receive a copy of the license and are unable to
obtain it through the world-wide-web, please send an email
to license@prestashop.com so we can send you a copy immediately.

# DISCLAIMER
 
Do not edit or add to this file if you wish to upgrade this module to newer
versions in the future. If you wish to customize PrestaShop for your
needs please refer to http://www.prestashop.com for more information.
