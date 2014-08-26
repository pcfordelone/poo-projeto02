<?php

interface ClientePJInterface {
    public function getNome();
    public function getEmail();
    public function getEndereco();
    public function getTelefone();
    public function getTipoDeCliente();
    public function getGrauDeImportancia();
    public function getCobrancaEspecifica();
    public function getEnderecoCobranca();

    public function getCNPJ();
    public function getRazao();
} 