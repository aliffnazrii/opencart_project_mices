<?php 

namespace Xilnex;

class XilnexLoader extends Library {

    private $code = 'module_xilnex';

    public function loadXilnex(){

        $credentials = array(
            'appid' => $this->config->get($this->code . '_appid'),
            'token' => $this->config->get($this->code . '_token'),
            'auth' => $this->config->get($this->code . '_auth')
        );

        $xilnex = new Xilnex($credentials);

        return $xilnex;
    }
}


?>