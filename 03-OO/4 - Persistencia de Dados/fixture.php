<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'conn.php';

use AppCode\Cliente\Model\PessoaPersist;
use AppCode\Cliente\Type\PessoaJuridica;
use AppCode\Cliente\Type\PessoaFisica;

Class Fixture {


    private static $pessoas = array();


    public function __construct($conn){

        echo '<pre>';
        $query = "DROP DATABASE IF EXISTS `codeeducation_clientes`";
        $conn->exec($query);
        echo $query.'<hr>';

        $query = "CREATE DATABASE `codeeducation_clientes`";
        $conn->exec($query);
        echo $query.'<hr>';

        $query = "USE `codeeducation_clientes`";
        $conn->exec($query);
        echo $query.'<hr>';


        $query = "CREATE TABLE pessoas (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        tipo varchar(100) NOT NULL,
        cpf varchar(100)  NULL,
        cnpj varchar(100)  NULL,
        nome varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        endereco varchar(100) NOT NULL,
        bairro varchar(100) NOT NULL,
        cep varchar(100) NOT NULL,
        cidade varchar(100) NOT NULL,
        estado varchar(100) NOT NULL,
        cobendereco varchar(100) NOT NULL,
        cobbairro varchar(100) NOT NULL,
        cobcep varchar(100) NOT NULL,
        cobcidade varchar(100) NOT NULL,
        cobestado varchar(100) NOT NULL,
        telefone1 varchar(100)  NULL,
        telefone2 varchar(100) NULL,
        importancia varchar(11) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";

        $conn->exec($query);
        echo $query.'<hr>';


        /**
         * Dados persist
         */


        $persist = new PessoaPersist($conn);

        $pessoaJ = new PessoaJuridica();

        $pessoaJ->setId(1);
        $pessoaJ->setCnpj('68.345.788/0001-44');
        $pessoaJ->setTipo('J');
        $pessoaJ->setNome('EMC Ind');
        $pessoaJ->setEmail('emcind@emcind.com.br');
        $pessoaJ->setEndereco('Rua 1 Exemplo de Rua, 140');
        $pessoaJ->setBairro('Setor Aeroporto');
        $pessoaJ->setCep('72.094-203');
        $pessoaJ->setCidade('Goiania');
        $pessoaJ->setEstado('GO');
        $pessoaJ->setCobEndereco('Av. Brasil, 1');
        $pessoaJ->setCobBairro('Centro');
        $pessoaJ->setCobCep('75.094-708');
        $pessoaJ->setCobCidade('Anapolis');
        $pessoaJ->setCobEstado('GO');
        $pessoaJ->setTelefone1('(62) 3099-4440');
        $pessoaJ->setImportancia(3);

        $persist->persist($pessoaJ);


        $pessoaJ = new PessoaJuridica();
        $pessoaJ->setId(2);
        $pessoaJ->setCnpj('24.343.784/0001-24');
        $pessoaJ->setTipo('J');
        $pessoaJ->setNome('Microsoft');
        $pessoaJ->setEmail('microsoft@microsoft.com.br');
        $pessoaJ->setEndereco('Rua 2 Exemplo de Rua, 140');
        $pessoaJ->setBairro('Setor Aeroporto');
        $pessoaJ->setCep('72.094-203');
        $pessoaJ->setCidade('Goiania');
        $pessoaJ->setEstado('GO');
        $pessoaJ->setCobEndereco('Av. Brasil, 2');
        $pessoaJ->setCobBairro('Centro');
        $pessoaJ->setCobCep('75.094-708');
        $pessoaJ->setCobCidade('Anapolis');
        $pessoaJ->setCobEstado('GO');
        $pessoaJ->setTelefone1('(62) 3099-4440');
        $pessoaJ->setTelefone2('(62) 3099-4445');
        $pessoaJ->setImportancia(5);
        $persist->persist($pessoaJ);

        $pessoaJ = new PessoaJuridica();
        $pessoaJ->setId(3);
        $pessoaJ->setCnpj('12.041.704/0001-14');
        $pessoaJ->setTipo('J');
        $pessoaJ->setNome('IBM');
        $pessoaJ->setEmail('ibm@ibm.com.br');
        $pessoaJ->setEndereco('Rua 3 Exemplo de Rua, 140');
        $pessoaJ->setBairro('Setor Aeroporto');
        $pessoaJ->setCep('72.094-203');
        $pessoaJ->setCidade('Goiania');
        $pessoaJ->setEstado('GO');
        $pessoaJ->setCobEndereco('Av. Brasil, 3');
        $pessoaJ->setCobBairro('Centro');
        $pessoaJ->setCobCep('75.094-708');
        $pessoaJ->setCobCidade('Anapolis');
        $pessoaJ->setCobEstado('GO');
        $pessoaJ->setTelefone1('(62) 3099-4440');
        $pessoaJ->setTelefone2('(62) 3099-4445');
        $pessoaJ->setImportancia(3);
        $persist->persist($pessoaJ);

        $pessoaJ = new PessoaJuridica();
        $pessoaJ->setId(4);
        $pessoaJ->setCnpj('22.131.454/0001-54');
        $pessoaJ->setTipo('J');
        $pessoaJ->setNome('SAMSUNG');
        $pessoaJ->setEmail('samsung@samsung.com.br');
        $pessoaJ->setEndereco('Rua 4 Exemplo de Rua, 140');
        $pessoaJ->setBairro('Setor Aeroporto');
        $pessoaJ->setCep('72.094-203');
        $pessoaJ->setCidade('Anapolis');
        $pessoaJ->setEstado('GO');
        $pessoaJ->setCobEndereco('Av. Brasil, 4');
        $pessoaJ->setCobBairro('Centro');
        $pessoaJ->setCobCep('75.094-708');
        $pessoaJ->setCobCidade('Anapolis');
        $pessoaJ->setCobEstado('GO');
        $pessoaJ->setTelefone1('(62) 3099-4440');
        $pessoaJ->setTelefone2('(62) 3099-4445');
        $pessoaJ->setImportancia(3);
        $persist->persist($pessoaJ);


        /**
        * Define os Clientes Pessoas Física
        */


        $pessoaF = new PessoaFisica();
        $pessoaF->setId(5);
        $pessoaF->setCpf('122.142.624-20');
        $pessoaF->setTipo('F');
        $pessoaF->setNome('Geovani dos Santos');
        $pessoaF->setEmail('geovani@santos.com.br');
        $pessoaF->setEndereco('Rua 5 Exemplo de Rua, 140');
        $pessoaF->setBairro('Setor Aeroporto');
        $pessoaF->setCep('72.094-203');
        $pessoaF->setCidade('Anapolis');
        $pessoaF->setEstado('GO');
        $pessoaF->setCobEndereco('Av. Brasil, 5');
        $pessoaF->setCobBairro('Centro');
        $pessoaF->setCobCep('75.094-708');
        $pessoaF->setCobCidade('Anapolis');
        $pessoaF->setCobEstado('GO');
        $pessoaF->setTelefone1('(62) 3099-4440');
        $pessoaF->setTelefone2('(62) 3099-4445');
        $pessoaF->setImportancia(2);

        $persist->persist($pessoaF);

        $pessoaF = new PessoaFisica();
        $pessoaF->setId(6);
        $pessoaF->setCpf('232.142.624-20');
        $pessoaF->setTipo('F');
        $pessoaF->setNome('Juliana Ribeiro de Souza');
        $pessoaF->setEmail('ju@souza.com.br');
        $pessoaF->setEndereco('Rua 6 Exemplo de Rua, 140');
        $pessoaF->setBairro('Setor Aeroporto');
        $pessoaF->setCep('72.094-203');
        $pessoaF->setCidade('Goiania');
        $pessoaF->setEstado('GO');
        $pessoaF->setCobEndereco('Av. Brasil, 6');
        $pessoaF->setCobBairro('Centro');
        $pessoaF->setCobCep('75.094-708');
        $pessoaF->setCobCidade('Anapolis');
        $pessoaF->setCobEstado('GO');
        $pessoaF->setTelefone1('(62) 3099-4440');
        $pessoaF->setTelefone2('(62) 3099-4445');
        $pessoaF->setImportancia(4);

        $persist->persist($pessoaF);

        $pessoaF = new PessoaFisica();
        $pessoaF->setId(7);
        $pessoaF->setCpf('132.444.654-20');
        $pessoaF->setTipo('F');
        $pessoaF->setNome('Maria Melo Pacheco');
        $pessoaF->setEmail('maria@melo.com.br');
        $pessoaF->setEndereco('Rua 7 Exemplo de Rua, 140');
        $pessoaF->setBairro('Setor Aeroporto');
        $pessoaF->setCep('72.094-203');
        $pessoaF->setCidade('Goiania');
        $pessoaF->setEstado('GO');
        $pessoaF->setCobEndereco('Av. Brasil, 7');
        $pessoaF->setCobBairro('Centro');
        $pessoaF->setCobCep('75.094-708');
        $pessoaF->setCobCidade('Anapolis');
        $pessoaF->setCobEstado('GO');
        $pessoaF->setTelefone1('(62) 3099-4440');
        $pessoaF->setImportancia(3);

        $persist->persist($pessoaF);

        $pessoaF = new PessoaFisica();
        $pessoaF->setId(8);
        $pessoaF->setCpf('632.143.124-10');
        $pessoaF->setTipo('F');
        $pessoaF->setNome('Marcus Vinicius dos Santos');
        $pessoaF->setEmail('marcus@vinicius.com.br');
        $pessoaF->setEndereco('Rua 8 Exemplo de Rua, 140');
        $pessoaF->setBairro('Setor Aeroporto');
        $pessoaF->setCep('72.094-203');
        $pessoaF->setCidade('Anapolis');
        $pessoaF->setEstado('GO');
        $pessoaF->setCobEndereco('Av. Brasil, 8');
        $pessoaF->setCobBairro('Centro');
        $pessoaF->setCobCep('75.094-708');
        $pessoaF->setCobCidade('Anapolis');
        $pessoaF->setCobEstado('GO');
        $pessoaF->setTelefone1('(62) 3099-4440');
        $pessoaF->setTelefone2('(62) 3099-4445');
        $pessoaF->setImportancia(1);


        $persist->persist($pessoaF);
        $persist->flush();

        echo '<hr>Fixture finalizada.';

    }

}

$fixture = new Fixture($conn);