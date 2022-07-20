<?php
/**
 * @category   Webkul
 * @package    Webkul_EbayConnector
 * @author     Webkul Software Private Limited
 * @copyright  Copyright (c) Webkul Software Private Limited (https://webkul.com)
 * @license    https://store.webkul.com/license.html
 */

namespace Ebay;

// The following classes are used in the classmap array
// Right now, they are largely experiments to see how I can make it easier to use the API
class eBayFeesType implements \ArrayAccess
{
    /**
     * OffsetExists
     *
     * @param string $offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return true;
    }

    /**
     * OffsetGet
     *
     * @param string $offset
     * @return string
     */
    public function offsetGet($offset)
    {
        foreach ($this->Fee as $value) {
            if ($value->Name == $offset) {
                return $value;
            }
        }
    }

    /**
     * OffsetSet
     *
     * @param string $offset
     * @param string $value
     * @return boolean
     */
    public function offsetSet($offset, $value)
    {
        return true;
    }

    /**
     * OffsetUnset
     *
     * @param string $offset
     * @return boolean
     */
    public function offsetUnset($offset)
    {
        return true;
    }
}
