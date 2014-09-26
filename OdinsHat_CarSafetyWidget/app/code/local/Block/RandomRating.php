<?php

/**
 * Displays a random car safety rating - eventually when I work this out
 *
 * @return string
 */
class OdinsHat_CarSafety_Block_RandomRating
    extends Mage_Core_Block_Abstract
    implements Mage_Widget_Block_Interface
{
    protected function _toHtml()
    {
        return 'Random Car Safety Rating ***';
    }
}
