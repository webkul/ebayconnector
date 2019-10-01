<?php
namespace Ebay;

class eBayGetSearchResultsResponseType implements \IteratorAggregate
{
    public function getIterator()
    {
        return $this->SearchResultItemArray;
    }
}
