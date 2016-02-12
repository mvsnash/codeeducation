<?php

namespace AppCode\Cliente\Contracts;

interface PessoaInterface {
    
    public function getId();
    public function getTipo();
    public function getNome();
    public function getEmail();
    public function getEndereco();
    public function getBairro();
    public function getCidade();
    public function getEstado();
    public function getCep();
    public function getTelefone1();
    public function getImportancia();
    
} 
