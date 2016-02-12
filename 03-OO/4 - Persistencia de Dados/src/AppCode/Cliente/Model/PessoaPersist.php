<?php

namespace AppCode\Cliente\Model;

use AppCode\Cliente\Pessoa;
use AppCode\Cliente\Type\PessoaJuridica;
use AppCode\Cliente\Type\PessoaFisica;

Class PessoaPersist {

    private $conn;

    public $pessoas;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;

    }

    public function persist(Pessoa $pessoa){

        $this->pessoas[] = $pessoa;
        return $this;

    }

    public function flush()
    {


        foreach($this->pessoas as $pessoa) {

            $stmt = $this->conn->prepare("INSERT INTO pessoas(tipo, cpf, cnpj, nome, endereco, bairro, cep, cidade, estado, cobendereco, cobbairro, cobcep, cobcidade, cobestado, telefone1, telefone2, importancia) VALUES (:tipo, :cpf, :cnpj, :nome, :endereco, :bairro, :cep, :cidade, :estado, :cobendereco, :cobbairro, :cobcep, :cobcidade, :cobestado, :telefone1, :telefone2, :importancia)");

            $stmt->bindValue(":tipo", $pessoa->getTipo());
            $stmt->bindValue(":nome", $pessoa->getNome());
            $stmt->bindValue(":endereco", $pessoa->getEndereco());
            $stmt->bindValue(":cep", $pessoa->getCep());
            $stmt->bindValue(":bairro", $pessoa->getBairro());
            $stmt->bindValue(":cidade", $pessoa->getCidade());
            $stmt->bindValue(":estado", $pessoa->getEstado());
            $stmt->bindValue(":cobendereco", $pessoa->getCobEndereco());
            $stmt->bindValue(":cobbairro", $pessoa->getCobBairro());
            $stmt->bindValue(":cobcep", $pessoa->getCobCep());
            $stmt->bindValue(":cobcidade", $pessoa->getCobCidade());
            $stmt->bindValue(":cobestado", $pessoa->getCobEstado());
            $stmt->bindValue(":telefone1", $pessoa->getTelefone1());
            $stmt->bindValue(":telefone2", $pessoa->getTelefone2());
            $stmt->bindValue(":importancia", $pessoa->getImportancia());

            if($pessoa instanceof PessoaFisica) {

                $stmt->bindValue(":cpf", $pessoa->getCpf());
                $stmt->bindValue(":cnpj", '');
            }
            else if($pessoa instanceof PessoaJuridica) {
                $stmt->bindValue(":cnpj", $pessoa->getCnpj());
                $stmt->bindValue(":cpf", '');
            }



            if($stmt->execute()){

                echo '<b>'.$pessoa->getNome().'</b> - Inserido no banco com sucesso.<br>';

            }

        }


    }


}