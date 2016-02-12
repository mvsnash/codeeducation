<?php

namespace AppCode\Cliente;

use AppCode\Cliente\Contracts\PessoaInterface;
use AppCode\Cliente\Contracts\GrauImportanciaInterface;

class Pessoa implements PessoaInterface, GrauImportanciaInterface  {

    public $Id;
    public $Tipo;
    public $Nome;
    public $Email;
    public $Endereco;
    public $Bairro;
    public $Cidade;
    public $Estado;
    public $Cep;
    public $Telefone1;
    public $Telefone2;

    public function setId($value){
        $this->Id = $value;
    }
    public function setTipo($value){
        $this->Tipo = $value;
    }
    public function setNome($value){
        $this->Nome = $value;
    }
    public function setEmail($value){
        $this->Email = $value;
    }
    public function setEndereco($value){
        $this->Endereco = $value;
    }
    public function setBairro($value){
        $this->Bairro = $value;
    }
    public function setCidade($value){
        $this->Cidade = $value;
    }
    public function setEstado($value){
        $this->Estado = $value;
    }
    public function setCep($value){
        $this->Cep = $value;
    }
    public function setTelefone1($value){
        $this->Telefone1 = $value;
    }
    public function setTelefone2($value){
        $this->Telefone2 = $value;
    }

    public function getId(){
        return $this->Id;
    }
    public function getTipo(){
        return $this->Tipo;
    }
    public function getNome(){
        return $this->Nome;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function getEndereco(){
        return $this->Endereco;
    }
    public function getBairro(){
        return $this->Bairro;
    }
    public function getCidade(){
        return $this->Cidade;
    }
    public function getEstado(){
        return $this->Estado;
    }
    public function getCep(){
        return $this->Cep;
    }
    public function getTelefone1(){
        return $this->Telefone1;
    }
    public function getTelefone2(){
        return $this->Telefone2;
    }


    public function getImportancia(){

        return $this->Importancia;

    }
    public function getImportanciaCustom(){

        $star  = null;
        $starO = null;

        for ($i = 1; $i <= $this->Importancia; $i++) {
            $star .= '<i class="fa fa-star"></i>';
        }

        for ($i = 1; $i <= 5-$this->Importancia; $i++) {
            $starO .= '<i class="fa fa-star-o"></i>';
        }


        return $star.$starO;
    }

        public function setImportancia($value){
        $this->Importancia = $value;
    }



}