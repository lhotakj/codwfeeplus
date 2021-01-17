<?php

/** Copyright 2018 Sakis Gkiokas
 * This file is part of codwfeeplus module for Prestashop.
 *
 * Codwfeeplus is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Codwfeeplus is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * For any recommendations and/or suggestions please contact me
 * at sakgiok@gmail.com
 *
 *  @author    Sakis Gkiokas <sakgiok@gmail.com>
 *  @copyright 2018 Sakis Gkiokas
 *  @license   https://opensource.org/licenses/GPL-3.0  GNU General Public License version 3
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_1_2($object)
{
    $ret = true;
    $ret &= Configuration::updateValue('SG_CODWFEEPLUS_ORDERSTATE', Configuration::get('PS_OS_PREPARATION'));
    $ret &= Db::getInstance()->execute('
			ALTER TABLE `' . _DB_PREFIX_ . 'codwfeeplus_conditions`
                            ADD `codwfeeplus_orderstate_id` int(2) unsigned NOT NULL DEFAULT \'0\' AFTER `codwfeeplus_taxrule_id`
                            ');

    return $ret;
}
