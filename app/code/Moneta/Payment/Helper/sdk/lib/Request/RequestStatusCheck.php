<?php

namespace Moneta\Payment\Helper\sdk\lib\Request;

use Moneta\Payment\Helper\sdk\lib\Request;
use Moneta\Payment\Helper\sdk\lib\Request\Action\RequestActionStatusCheck;
use Moneta\Payment\Helper\sdk\lib\Request\Token\RequestTokenStatusCheck;

class RequestStatusCheck extends Request {

    public function __construct($values = array()) {
        parent::__construct();
        $this->_token_request = new RequestTokenStatusCheck($values);
        $this->_action_request = new RequestActionStatusCheck($values);
    }

}
