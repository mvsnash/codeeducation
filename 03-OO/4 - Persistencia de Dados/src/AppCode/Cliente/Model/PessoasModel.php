<?php

namespace AppCode\Cliente\Model;

use AppCode\Cliente\Type\PessoaJuridica;
use AppCode\Cliente\Type\PessoaFisica;

class PessoasModel {

    private $conn;
    public static $pessoas = array();

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
        $conn->exec("USE `codeeducation_clientes`");
    }

    public function fetchAll($order = "ASC")
    {
        $pessoas  = array();
        $consulta = $this->conn->query("SELECT * FROM pessoas ORDER BY nome {$order}");

        while ($row = $consulta->fetch(\PDO::FETCH_ASSOC)) {

            if($row['tipo']=='J'){

                $pessoa = new PessoaJuridica();

                $pessoa->setCnpj($row['cnpj']);
                $pessoa->setId($row['id']);
                $pessoa->setTipo($row['tipo']);
                $pessoa->setNome($row['nome']);
                $pessoa->setEmail($row['email']);
                $pessoa->setEndereco($row['endereco']);
                $pessoa->setBairro($row['bairro']);
                $pessoa->setCep($row['cep']);
                $pessoa->setCidade($row['cidade']);
                $pessoa->setEstado($row['estado']);
                $pessoa->setCobEndereco($row['cobendereco']);
                $pessoa->setCobBairro($row['cobbairro']);
                $pessoa->setCobCep($row['cobcep']);
                $pessoa->setCobCidade($row['cobcidade']);
                $pessoa->setCobEstado($row['cobestado']);
                $pessoa->setTelefone1($row['telefone1']);
                $pessoa->setTelefone2($row['telefone2']);
                $pessoa->setImportancia($row['importancia']);
                $pessoas[$row['id']] = $pessoa;

            }
            else if($row['tipo']=='F'){

                $pessoa = new PessoaFisica();

                $pessoa->setCpf($row['cpf']);
                $pessoa->setId($row['id']);
                $pessoa->setTipo($row['tipo']);
                $pessoa->setNome($row['nome']);
                $pessoa->setEmail($row['email']);
                $pessoa->setEndereco($row['endereco']);
                $pessoa->setBairro($row['bairro']);
                $pessoa->setCep($row['cep']);
                $pessoa->setCidade($row['cidade']);
                $pessoa->setEstado($row['estado']);
                $pessoa->setCobEndereco($row['cobendereco']);
                $pessoa->setCobBairro($row['cobbairro']);
                $pessoa->setCobCep($row['cobcep']);
                $pessoa->setCobCidade($row['cobcidade']);
                $pessoa->setCobEstado($row['cobestado']);
                $pessoa->setTelefone1($row['telefone1']);
                $pessoa->setTelefone2($row['telefone2']);
                $pessoa->setImportancia($row['importancia']);

                $pessoas[$row['id']] = $pessoa;
            }



        }

        self::$pessoas = $pessoas;
        return self::$pessoas;
    }


    public function getPessoas($order = "ASC")
    {
        if($order == "DESC"){
            rsort(self::$pessoas);
            return self::$pessoas;
        }
        return self::$pessoas;
    }

    public function getPessoa($id)
    {
        foreach(self::$pessoas as $pessoa):
            if($pessoa->getId() == $id){
                return $pessoa;
            }
        endforeach;
        return $id;
    }


}