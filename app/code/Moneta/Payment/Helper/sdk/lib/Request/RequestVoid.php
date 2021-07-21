<?php

namespace Moneta\Payment\Helper\sdk\lib\Request;

use Moneta\Payment\Helper\sdk\lib\Request\Action\RequestActionVoid;
use Moneta\Payment\Helper\sdk\lib\Request\Token\RequestTokenVoid;
use Moneta\Payment\Helper\sdk\lib\Request\RequestRefund;

class RequestVoid extends RequestRefund {

    public function __construct($values = array()) {
        parent::__construct();
        $this->_token_request = new RequestTokenVoid($values);
        $this->_action_request = new RequestActionVoid($values);
    }

}
