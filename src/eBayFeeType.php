<?php
namespace Ebay;

class eBayFeeType
{
    public function __toString()
    {
        return (string) $this->Fee->_;
    }
}
