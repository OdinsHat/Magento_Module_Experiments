<?php
/**
 * Observer class handler for EmailOnLogin module (Magento)
 */

class OdinsHat_EmailOnLogin_Model_Observer
{
    public function sendEmail(Varien_Event_Observer $observer)
    {
        $stuff = var_export($observer, true);
        Mage::log($stuff);
        mail('doug.bromley@gmail.com', 'What Mag Says', $stuff);
    }
}
