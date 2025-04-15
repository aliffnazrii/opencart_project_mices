<?php 

namespace Acilit;


class AcilitLoader extends Library {

    private $code = 'module_acilit';

    public function loadAcilit(){

        $credentials = array(
            'username' => $this->config->get($this->code . '_username'),
            'password' => $this->config->get($this->code . '_password'),
        );

        $acilit = new Acilit($credentials);

        return $acilit;
    }
}


?>