<?php

namespace Moneta\Payment\Helper\sdk\lib\Request;

use Moneta\Payment\Helper\sdk\lib\Request;
use Moneta\Payment\Helper\sdk\lib\Request\Action\RequestActionAuth;
use Moneta\Payment\Helper\sdk\lib\Request\Token\RequestTokenAuth;

class RequestAuth extends Request {

    public function __construct($values = array()) {
        parent::__construct();
        $this->_token_request = new RequestTokenAuth($values);
        $this->_action_request = new RequestActionAuth($values);
    }

}
