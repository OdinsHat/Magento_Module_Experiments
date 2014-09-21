<?php
/**
 * Observer class handler for EmailOnLogin module (Magento)
 */

class OdinsHat_EmailOnLogin_Model_Observer
{
    /**
     * Sends email on login event
     *
     * @param  Varien_Event_Observer $observer Magento observer object
     * @return null
     */
    public function sendEmail(Varien_Event_Observer $observer)
    {
        $stuff = var_export($observer, true);
        Mage::log($stuff);
        mail(
            Mage::getStoreConfig('trans_email/ident_general/email'),
            'What Mag Says',
            $stuff
        );
    }
}