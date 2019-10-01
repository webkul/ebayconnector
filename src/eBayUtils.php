<?php
namespace Ebay;

// General utility class. Currently not used.
class eBayUtils
{
    public static function findByName($values, $name)
    {
        foreach ($values as $value) {
            if ($value->Name == $name) {
                return $value;
            }
        }
    }
}
