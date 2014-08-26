<?php

class Cliente {
    private $nome;
    private $email;
    private $endereco;
    private $telefone;
    private $tipoDeCliente;
    private $grauDeImportancia;
    private $cobrancaEspecifica;
    private $enderecoCobranca;

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $tipoDeCliente
     */
    public function setTipoDeCliente($tipoDeCliente)
    {
        $this->tipoDeCliente = $tipoDeCliente;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoDeCliente()
    {
        return $this->tipoDeCliente;
    }

    /**
     * @param mixed $grauDeImportancia
     */
    public function setGrauDeImportancia($grauDeImportancia)
    {
        $this->grauDeImportancia = $grauDeImportancia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrauDeImportancia()
    {
        return $this->grauDeImportancia;
    }

    /**
     * @param mixed $cobrancaEspecifica
     */
    public function setCobrancaEspecifica($cobrancaEspecifica)
    {
        $this->cobrancaEspecifica = $cobrancaEspecifica;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCobrancaEspecifica()
    {
        return $this->cobrancaEspecifica;
    }

    /**
     * @param mixed $enderecoCobranca
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

} 