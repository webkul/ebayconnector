<?php
namespace Ebay;

class eBaySearchResultItemArrayType implements \IteratorAggregate
{
    public function getIterator()
    {
        return new ArrayObject($this->SearchResultItem);
    }
}
