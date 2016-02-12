<?php

namespace AppCode\Cliente\Contracts;

interface EnderecoCobrancaInterface
{
      public function getCobEndereco();
      public function getCobBairro();
      public function getCobCidade();
      public function getCobEstado();
      public function getCobCep();

}

