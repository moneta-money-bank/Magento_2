<?php

namespace Moneta\Payment\Helper\sdk\lib\Request;

use Moneta\Payment\Helper\sdk\lib\Request\Action\RequestActionCapture;
use Moneta\Payment\Helper\sdk\lib\Request\Token\RequestTokenCapture;
use Moneta\Payment\Helper\sdk\lib\Request\RequestRefund;

class RequestCapture extends RequestRefund {

    public function __construct($values = array()) {
        parent::__construct();
        $this->_token_request = new RequestTokenCapture($values);
        $this->_action_request = new RequestActionCapture($values);
    }

}
