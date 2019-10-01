<?php
namespace Ebay;

class eBaySearchResultItemType
{
    public function __toString()
    {
        return $this->Item->Title;
    }
}
