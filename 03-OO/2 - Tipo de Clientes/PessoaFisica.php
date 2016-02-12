<?php

Class PessoaFisica extends Pessoa implements EndCobrancaInterface
{ 
        public $Cpf;
        
        public $CobEndereco;
        public $CobBairro;
        public $CobCep;
        public $CobCidade;
        public $CobEstado;
        
        public function getCpf(){
            return $this->Cpf;
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
        public function setCpf($value){
            $this->Cpf = $value;
        }
      
        public function setCobEndereco($value){
            $this->CobEndereco = $value;
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
