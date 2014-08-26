<?php

class ClientePF extends Cliente implements ClientePFInterface {
    private $cpf;
    private $rg;

    /*function __contruct()
    {
        $this->setTipoDeCliente("Pessoa Física");
    }*/

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

} 