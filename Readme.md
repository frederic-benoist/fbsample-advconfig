# PrestaShop 1.7 Sample automatic setup Module

Sample automatic setup of PrestaShop 1.7 module without configuration page.

==For PrestaShop Development training only.==

### Prerequisites

- You need a shop with **PrestaShop 1.7.2.0** or higher.
- You need access to the **shell** of your server.
- You need **composer**.

## Installing

To simplify the installation of the module files, we will use the [PrestaSpirit](https://prestaspirit.org) repository.

1. Add PrestaSpirit repository to your composer.json 
    ```sh
    $ cd prestashop_root_directory
    $ composer config repositories.prestaspirit composer https://prestaspirit.org
    ```
2. Install the module files in PrestaShop module directory
    ```sh
    $ composer require frederic-benoist/fbsample-advconfig
    ```

3. Install the module with new PrestaShop command.

    ```sh
    cd prestashop_root_directory
    php bin/console prestashop:module install fbsample_advconfig
    ```
    >`Use php `**`app/console`**` instead of php `**`bin/console`**` for versions prior to `**`1.7.4`**

## Running 

Run PrestaShop automatic module setup.

```sh
cd prestashop_root_directory
php bin/console prestashop:module configure fbsample_advconfig
```

>`Use php `**`app/console`**` instead of php `**`bin/console`**` for versions prior to `**`1.7.4`**


## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/frederic-benoist/fbsample-advconfig/tags). 

## Authors

* **Frédéric BENOIST** - *Initial work* - [Expert PrestaShop](https://www.fbenoist.com)

See also the list of [contributors](https://github.com/frederic-benoist/fbsample-advconfig/Contributors) who participated in this project.

## Licensing

This source file is subject to the Academic Free License (AFL 3.0)
that is available through the world-wide-web at this URL:
http://opensource.org/licenses/afl-3.0.php
If you did not receive a copy of the license and are unable to
obtain it through the world-wide-web, please send an email
to license@prestashop.com so we can send you a copy immediately.

## DISCLAIMER
 
Do not edit or add to this file if you wish to upgrade this module to newer
versions in the future. If you wish to customize PrestaShop for your
needs please refer to http://www.prestashop.com for more information.
