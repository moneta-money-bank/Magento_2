<?php

namespace Moneta\Payment\Model\ConfigProvider;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Payment\Helper\Data as PaymentHelper;

class MonetaConfigProvider implements ConfigProviderInterface
{

    private $_paymentHelper;
    private $_helper;
    protected $_methodCodes = [
        'moneta_payment',
    ];

    private $methods = [];

    public function __construct(
        PaymentHelper $paymentHelper,
        \Moneta\Payment\Helper\Helper $helper
    )
    {
        $this->_paymentHelper = $paymentHelper;
        $this->_helper = $helper;

        foreach ($this->_methodCodes as $code) {
            $this->methods[$code] = $this->_paymentHelper->getMethodInstance($code);
        }
    }

    public function getConfig()
    {
        $config = [
            'payment' => [
                'moneta_payment' => [
                ],
            ],
        ];

        foreach ($this->_methodCodes as $code) {
            if ($this->methods[$code]->isAvailable()) {
                $config['payment'] [$code]['redirectUrl'] = $this->getMethodRedirectUrl($code);
                $config['payment'] [$code]['displayMode'] = $this->_helper->getConfigData('display_mode');
            }
        }

        return $config;
    }

    private function getMethodRedirectUrl($code)
    {
        return $this->methods[$code]->getCheckoutRedirectUrl();
    }
}
