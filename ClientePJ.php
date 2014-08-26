<?php

class ClientePJ extends Cliente implements ClientePJInterface {
    public $cnpj;
    public $razao;

    function __contruct()
    {
        $this->setTipoDeCliente("Pessoa Jurídica");
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $razao
     */
    public function setRazao($razao)
    {
        $this->razao = $razao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRazao()
    {
        return $this->razao;
    }


} 