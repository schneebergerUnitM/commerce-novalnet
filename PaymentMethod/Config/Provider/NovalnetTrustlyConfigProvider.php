<?php

namespace Novalnet\Bundle\NovalnetBundle\PaymentMethod\Config\Provider;

use Novalnet\Bundle\NovalnetBundle\PaymentMethod\Config\NovalnetTrustlyConfigInterface;

/**
 * Config provider of Novalnet payment method
 */
class NovalnetTrustlyConfigProvider extends NovalnetConfigProvider implements
    NovalnetTrustlyConfigProviderInterface
{
    /**
     * @var NovalnetTrustlyConfigInterface[]
     */
    protected $configs = [];

    /**
     * {@inheritdoc}
     */
    public function getPaymentConfigs()
    {

        if (0 === count($this->configs)) {
            return $this->configs = $this->collectConfigs();
        }

        return $this->configs;
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentConfig($identifier)
    {
        if (!$this->hasPaymentConfig($identifier)) {
            return null;
        }

        $configs = $this->getPaymentConfigs();

        return $configs[$identifier];
    }
}
