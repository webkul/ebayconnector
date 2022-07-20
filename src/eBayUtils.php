<?php
/**
 * @category   Webkul
 * @package    Webkul_EbayConnector
 * @author     Webkul Software Private Limited
 * @copyright  Copyright (c) Webkul Software Private Limited (https://webkul.com)
 * @license    https://store.webkul.com/license.html
 */

namespace Ebay;

// General utility class. Currently not used.
class eBayUtils
{
    /**
     * FindByName
     *
     * @param array $values
     * @param string $name
     */
    public static function findByName($values, $name)
    {
        foreach ($values as $value) {
            if ($value->Name == $name) {
                return $value;
            }
        }
    }
}
