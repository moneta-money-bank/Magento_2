<?php

namespace Moneta\Payment\Helper\sdk\lib\Request\Token;

use Moneta\Payment\Helper\sdk\lib\Payments;
use Moneta\Payment\Helper\sdk\lib\Request\RequestToken;

class RequestTokenAvailable extends RequestToken {

    protected $_params = array(
        "merchantId" => array("type" => "mandatory"),
        "password" => array("type" => "mandatory"),
        "action" => array(
            "type" => "mandatory",
            "values" => array(Payments::ACTION_AVAILABLE_PAYMENT_SOLUTION),
        ),
        "currency" => array("type" => "mandatory"),
        "country" => array("type" => "mandatory"),
        "timestamp" => array("type" => "mandatory"),
        "allowOriginUrl" => array("type" => "mandatory"),
    );

    public function __construct() {
        parent::__construct();
        $this->_data["action"] = Payments::ACTION_AVAILABLE_PAYMENT_SOLUTION;
    }

}
