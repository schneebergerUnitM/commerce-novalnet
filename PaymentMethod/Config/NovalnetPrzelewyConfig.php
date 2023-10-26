<?php

namespace Novalnet\Bundle\NovalnetBundle\PaymentMethod\Config;

/**
 * Configuration class which is used to get specific configuration for Novalnet payment method
 * Usually it has additional get methods for payment type specific configurations
 */
class NovalnetPrzelewyConfig extends NovalnetConfig implements NovalnetPrzelewyConfigInterface
{
    const ADMIN_LABEL_KEY = 'Przelewy';
    const ADMIN_LABEL_SUFFIX = 'PRZELEWY24';
    const PRZELEWY_TESTMODE = 'prepayment_testmode';
    const PRZELEWY_NOTIFICATION = 'prepayment_buyer_notification';

    /**
     * {@inheritDoc}
     */
    public function getTestMode()
    {
        return (int)$this->get(self::PRZELEWY_TESTMODE);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyerNotification()
    {
        return (string)$this->get(self::PRZELEWY_NOTIFICATION);
    }
}
