<?php

namespace AppCode\Cliente\Model;

use AppCode\Cliente\Type\PessoaFisica;
use AppCode\Cliente\Type\PessoaJuridica;

class ClienteModel {

    private static $pessoas = array();

    public function __construct()
    {


        /**
         * Define os Clientes Jurídico
         */


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
        $pessoas[1] = $pessoaJ;

        $pessoaJ = new PessoaJuridica();
        $pessoaJ->setId(2);
        $pessoaJ->setCnpj('24.343.784/0001-24');
        $pessoaJ->setTipo('J');
        $pessoaJ->setNome('Microsoft');
        $pessoaJ->setEmail('microsoft@microsoft.com.br');
        $pessoaJ->setEndereco('Rua 2 Exemplo de Rua, 140');
        $pessoaJ->setBairro('Setor Aeroporto');
        $pessoaJ->setCep('72.094-203');
        $pessoaJ->setCidade('Goiânia');
        $pessoaJ->setEstado('GO');
        $pessoaJ->setCobEndereco('Av. Brasil, 2');
        $pessoaJ->setCobBairro('Centro');
        $pessoaJ->setCobCep('75.094-708');
        $pessoaJ->setCobCidade('Anápolis');
        $pessoaJ->setCobEstado('GO');
        $pessoaJ->setTelefone1('(62) 3099-4440');
        $pessoaJ->setTelefone2('(62) 3099-4445');
        $pessoaJ->setImportancia(5);
        $pessoas[2] = $pessoaJ;

        $pessoaJ = new PessoaJuridica();
        $pessoaJ->setId(3);
        $pessoaJ->setCnpj('12.041.704/0001-14');
        $pessoaJ->setTipo('J');
        $pessoaJ->setNome('IBM');
        $pessoaJ->setEmail('ibm@ibm.com.br');
        $pessoaJ->setEndereco('Rua 3 Exemplo de Rua, 140');
        $pessoaJ->setBairro('Setor Aeroporto');
        $pessoaJ->setCep('72.094-203');
        $pessoaJ->setCidade('Goiânia');
        $pessoaJ->setEstado('GO');
        $pessoaJ->setCobEndereco('Av. Brasil, 3');
        $pessoaJ->setCobBairro('Centro');
        $pessoaJ->setCobCep('75.094-708');
        $pessoaJ->setCobCidade('Anápolis');
        $pessoaJ->setCobEstado('GO');
        $pessoaJ->setTelefone1('(62) 3099-4440');
        $pessoaJ->setTelefone2('(62) 3099-4445');
        $pessoaJ->setImportancia(3);
        $pessoas[3] = $pessoaJ;

        $pessoaJ = new PessoaJuridica();
        $pessoaJ->setId(4);
        $pessoaJ->setCnpj('22.131.454/0001-54');
        $pessoaJ->setTipo('J');
        $pessoaJ->setNome('SAMSUNG');
        $pessoaJ->setEmail('samsung@samsung.com.br');
        $pessoaJ->setEndereco('Rua 4 Exemplo de Rua, 140');
        $pessoaJ->setBairro('Setor Aeroporto');
        $pessoaJ->setCep('72.094-203');
        $pessoaJ->setCidade('Anápolis');
        $pessoaJ->setEstado('GO');
        $pessoaJ->setCobEndereco('Av. Brasil, 4');
        $pessoaJ->setCobBairro('Centro');
        $pessoaJ->setCobCep('75.094-708');
        $pessoaJ->setCobCidade('Anápolis');
        $pessoaJ->setCobEstado('GO');
        $pessoaJ->setTelefone1('(62) 3099-4440');
        $pessoaJ->setTelefone2('(62) 3099-4445');
        $pessoaJ->setImportancia(3);
        $pessoas[4] = $pessoaJ;


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
        $pessoaF->setCidade('Anápolis');
        $pessoaF->setEstado('GO');
        $pessoaF->setCobEndereco('Av. Brasil, 5');
        $pessoaF->setCobBairro('Centro');
        $pessoaF->setCobCep('75.094-708');
        $pessoaF->setCobCidade('Anápolis');
        $pessoaF->setCobEstado('GO');
        $pessoaF->setTelefone1('(62) 3099-4440');
        $pessoaF->setTelefone2('(62) 3099-4445');
        $pessoaF->setImportancia(2);
        $pessoas[5] = $pessoaF;

        $pessoaF = new PessoaFisica();
        $pessoaF->setId(6);
        $pessoaF->setCpf('232.142.624-20');
        $pessoaF->setTipo('F');
        $pessoaF->setNome('Juliana Ribeiro de Souza');
        $pessoaF->setEmail('ju@souza.com.br');
        $pessoaF->setEndereco('Rua 6 Exemplo de Rua, 140');
        $pessoaF->setBairro('Setor Aeroporto');
        $pessoaF->setCep('72.094-203');
        $pessoaF->setCidade('Goiânia');
        $pessoaF->setEstado('GO');
        $pessoaF->setCobEndereco('Av. Brasil, 6');
        $pessoaF->setCobBairro('Centro');
        $pessoaF->setCobCep('75.094-708');
        $pessoaF->setCobCidade('Anápolis');
        $pessoaF->setCobEstado('GO');
        $pessoaF->setTelefone1('(62) 3099-4440');
        $pessoaF->setTelefone2('(62) 3099-4445');
        $pessoaF->setImportancia(4);
        $pessoas[6] = $pessoaF;

        $pessoaF = new PessoaFisica();
        $pessoaF->setId(7);
        $pessoaF->setCpf('132.444.654-20');
        $pessoaF->setTipo('F');
        $pessoaF->setNome('Maria Melo Pacheco');
        $pessoaF->setEmail('maria@melo.com.br');
        $pessoaF->setEndereco('Rua 7 Exemplo de Rua, 140');
        $pessoaF->setBairro('Setor Aeroporto');
        $pessoaF->setCep('72.094-203');
        $pessoaF->setCidade('Goiânia');
        $pessoaF->setEstado('GO');
        $pessoaF->setCobEndereco('Av. Brasil, 7');
        $pessoaF->setCobBairro('Centro');
        $pessoaF->setCobCep('75.094-708');
        $pessoaF->setCobCidade('Anápolis');
        $pessoaF->setCobEstado('GO');
        $pessoaF->setTelefone1('(62) 3099-4440');
        $pessoaF->setImportancia(3);
        $pessoas[7] = $pessoaF;

        $pessoaF = new PessoaFisica();
        $pessoaF->setId(8);
        $pessoaF->setCpf('632.143.124-10');
        $pessoaF->setTipo('F');
        $pessoaF->setNome('Marcus Vinicius dos Santos');
        $pessoaF->setEmail('marcus@vinicius.com.br');
        $pessoaF->setEndereco('Rua 8 Exemplo de Rua, 140');
        $pessoaF->setBairro('Setor Aeroporto');
        $pessoaF->setCep('72.094-203');
        $pessoaF->setCidade('Anápolis');
        $pessoaF->setEstado('GO');
        $pessoaF->setCobEndereco('Av. Brasil, 8');
        $pessoaF->setCobBairro('Centro');
        $pessoaF->setCobCep('75.094-708');
        $pessoaF->setCobCidade('Anápolis');
        $pessoaF->setCobEstado('GO');
        $pessoaF->setTelefone1('(62) 3099-4440');
        $pessoaF->setTelefone2('(62) 3099-4445');
        $pessoaF->setImportancia(1);
        $pessoas[8] = $pessoaF;


        self::$pessoas = $pessoas;
    }

    public function getPessoas(){

        return self::$pessoas;

    }


}