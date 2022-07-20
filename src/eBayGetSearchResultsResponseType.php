<?php
/**
 * @category   Webkul
 * @package    Webkul_EbayConnector
 * @author     Webkul Software Private Limited
 * @copyright  Copyright (c) Webkul Software Private Limited (https://webkul.com)
 * @license    https://store.webkul.com/license.html
 */

namespace Ebay;

class eBayGetSearchResultsResponseType implements \IteratorAggregate
{
    /**
     * GetIterator
     *
     * @return ArrayObject
     */
    public function getIterator()
    {
        return $this->SearchResultItemArray;
    }
}
