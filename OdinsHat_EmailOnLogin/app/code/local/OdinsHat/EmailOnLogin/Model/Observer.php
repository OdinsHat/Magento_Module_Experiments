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

    /**
     * Event fired when admin user fails to authenticate at login
     *
     * @param  Varien_Event_Observer $observer Magento observer object
     * @return null
     */
    public function failedLogin(Varien_Event_Observer $observer)
    {
        $message = 'Failed login';
        Mage::log($message);

        mail(
            Mage::getStoreConfig('trans_email/ident_general/email'),
            $message,
            $message
        );
    }

    /**
     * Event fired after checking authentication. Simple test method to see
     * if multiple events can be handled. Works - redundant. Keeping for
     * reference.
     *
     * @param  Varien_Event_Observer $observer Magento observer object
     * @return null
     */
    public function afterAuth(Varien_Event_Observer $observer)
    {
        $message = 'After Authentication Check';
        Mage::log($message);

        mail(
            Mage::getStoreConfig('trans_email/ident_general/email'),
            $message,
            $message
        );
    }
}
