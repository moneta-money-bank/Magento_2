<?php

namespace Moneta\Payment\Helper\sdk\lib\Request\Action;

use Moneta\Payment\Helper\sdk\lib\Request\RequestAction;

class RequestActionAuth extends RequestAction {

    protected $_params = array(
        "merchantId" => array("type" => "mandatory"),
        "token" => array("type" => "mandatory"),
        "specinCreditCardCVV" => array(
            "type" => "conditional",
            "mandatory" => array(
                "paymentMethod" => "CreditCard",
                "channel" => "ECOM"
            ),
        ),
        "freeText" => array("type" => "optional"),
    );

}
