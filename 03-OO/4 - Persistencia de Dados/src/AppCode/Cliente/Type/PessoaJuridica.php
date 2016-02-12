<?php

namespace AppCode\Cliente\Type;

use AppCode\Cliente\Pessoa;
use AppCode\Cliente\Contracts\EnderecoCobrancaInterface;

Class PessoaJuridica extends Pessoa implements EnderecoCobrancaInterface {
        
        public $Cnpj;
        
        public $CobEndereco;
        public $CobBairro;
        public $CobCep;
        public $CobCidade;
        public $CobEstado;
        
        public function getCnpj(){
            return $this->Cnpj;
        } 
        
        public function getCobEndereco(){
            return $this->CobEndereco;
        }
        public function getCobBairro(){
            return $this->CobBairro;
        }
        public function getCobCidade(){
            return $this->CobCidade;
        }
        public function getCobEstado(){
            return $this->CobEstado;
        }
        public function getCobCep(){
            return $this->CobCep;
        }
      
        public function setCobEndereco($value){
            $this->CobEndereco = $value;
        }
        public function setCnpj($value){
            $this->Cnpj = $value;
        }
        public function setCobBairro($value){
            $this->CobBairro = $value;
        }
        public function setCobCidade($value){
            $this->CobCidade = $value;
        }
        public function setCobEstado($value){
            $this->CobEstado = $value;
        }
        public function setCobCep($value){
            $this->CobCep = $value;
        }
        
         
       
}
