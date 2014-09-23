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
        Mage::log('Successful Login');
        Mage::log($observer);
        mail(
            Mage::getStoreConfig('trans_email/ident_general/email'),
            'Successful Login',
            $stuff
        );
    }
}
