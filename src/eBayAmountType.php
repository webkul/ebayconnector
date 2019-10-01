<?php

namespace Ebay;

class eBayAmountType
{
    public function __toString()
    {
        return (string) $this->_;
    }
}
