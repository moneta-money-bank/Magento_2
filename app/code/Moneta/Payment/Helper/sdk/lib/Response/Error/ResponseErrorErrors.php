<?php

namespace Moneta\Payment\Helper\sdk\lib\Response\Error;

use Moneta\Payment\Helper\sdk\lib\Response;

class ResponseErrorErrors extends Response {

<<<<<<< HEAD
    public function __construct($errors = array())
        {
            if (is_array($errors)) {
                foreach ($errors as $error) {
                    if (is_array($error)) {
                        $this->_data['errors'] = array_key_exists('messageCode', $error) ? $error['messageCode'] : print_r($error, true);
                    }else{
                        $this->_data['errors'] = $error;
                    }
                }
            } else {
                $this->_data['errors'] = $errors;
            }
        }
=======
    public function __construct($errors = array()) {
        if (is_array($errors)) {
            foreach ($errors as $error) {
                $this->_data[$error] = $error;
            }
        } else {
            $this->_data[$errors] = $errors;
        }
    }
>>>>>>> 2ae2e3298f15e3d8bb642b00f3a113c1fbad843c

}
