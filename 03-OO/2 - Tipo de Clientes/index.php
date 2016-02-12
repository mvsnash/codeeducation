<?php

require_once('PessoaInterface.php');
require_once('EnderecoCobrancaInterface.php');
require_once('GrauImportanciaInterface.php');
require_once('Pessoa.php');
require_once('PessoaFisica.php');
require_once('PessoaJuridica.php'); 


$pessoas = array();

$pessoaJ = new PessoaJuridica();
$pessoaJ->setId(1);
$pessoaJ->setCnpj('68.345.788/0001-44');
$pessoaJ->setTipo('J');
$pessoaJ->setNome('EMC² Ind');
$pessoaJ->setEmail('emcind@emcind.com.br');
$pessoaJ->setEndereco('Rua 1 Exemplo de Rua, 140');
$pessoaJ->setBairro('Setor Aeroporto');
$pessoaJ->setCep('72.094-203');
$pessoaJ->setCidade('Goiânia');
$pessoaJ->setEstado('GO');
$pessoaJ->setCobEndereco('Av. Brasil, 1');
$pessoaJ->setCobBairro('Centro'); 
$pessoaJ->setCobCep('75.094-708');
$pessoaJ->setCobCidade('Anápolis');
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
 * @class PessoaFisica
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

// echo '<pre>'; print_r($pessoas); exit;



?> 
<html>
<head><title>Atividade - Cadastro de clientes</title></head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>

<style>
.lst tr:hover { 
    background: #EEE;
}
</style>


<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="page-header">
				<h1>
					Clientes 
                    
                    <span style="float: right;">
                    
                    <?php
                    
                    if(isset($_GET['view'])) { 
                     
                         $view = $_GET['view']; 
                         $i    = $_GET['i'];    
                        
                    }  else { 
                        
                        $view = false; 
                        $i    = 0;
                    }
                    
                    if($view != false) {
                        
                    if($i <= 1) { $back = count($pessoas); } else { $back = $i-1; }
                    if($i >= count($pessoas)) { $next = 1; } else { $next = $i+1; }                       
                        
                        
                    ?>
                    <a href="?view=true&i=<?php  echo $back; ?>"><button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button></a>
                    <?php  echo $i; ?>
                    <a href="?view=true&i=<?php  echo $next; ?>"><button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button></a>
                    <?php 
                    }
                    ?>
                    </span>
				</h1>
			</div> 
            <?php
            
            if($view) {

  
            ?>
            <div class="container">
            	<div class="row clearfix">
            		
                    <div class="col-md-6 column">
            		
                    <h3>Dados Cadastrais</h3>
                        <blockquote>
                   
                            <small>ID:        <cite><?php echo $pessoas[$i]->Id;         ?></cite></small>
                            <small>Tipo:      <cite><?php echo $pessoas[$i]->Tipo;       ?></cite></small>
                            <small>Nome:      <cite><?php echo $pessoas[$i]->Nome;       ?></cite></small>
                            <small>CPF/CNPJ:  <cite><?php 
                                                    
                                                    if($pessoas[$i]->Tipo == 'F') { echo $pessoas[$i]->Cpf;  }
                                                    if($pessoas[$i]->Tipo == 'J') { echo $pessoas[$i]->Cnpj; } 
                                                    
                                                    ?></cite></small>
                            
                            <small>E-mail:    <cite><?php echo $pessoas[$i]->Email;      ?></cite></small>
                            <small>Telefone:  <cite><?php echo $pessoas[$i]->Telefone1.' / '.$pessoas[$i]->Telefone2; ?></cite></small>
                            <small>Endereco:  <cite><?php echo $pessoas[$i]->Endereco;   ?></cite></small>
                            <small>Bairro:    <cite><?php echo $pessoas[$i]->Bairro;     ?></cite></small>
                            <small>Cidade:    <cite><?php echo $pessoas[$i]->Cidade;     ?></cite></small>
                            <small>Estado:    <cite><?php echo $pessoas[$i]->Estado;     ?></cite></small>
                            <small>CEP:       <cite><?php echo $pessoas[$i]->Cep;        ?></cite></small>
                        </blockquote>
                    
            		</div>
                    
            		<div class="col-md-6 column">
                    
                    <h3>Endereço de Cobrança</h3>
            		
                        <blockquote>
                          <small>Endereco:  <cite><?php echo $pessoas[$i]->CobEndereco;   ?></cite></small>
                          <small>Bairro:    <cite><?php echo $pessoas[$i]->CobBairro;     ?></cite></small>
                          <small>Cidade:    <cite><?php echo $pessoas[$i]->CobCidade;     ?></cite></small>
                          <small>Estado:    <cite><?php echo $pessoas[$i]->CobEstado;     ?></cite></small>
                          <small>CEP:       <cite><?php echo $pessoas[$i]->CobCep;        ?></cite></small>
                        </blockquote>
                    
            
            		</div>
            	</div>
            </div>

            <hr />
            <?php
            }
            unset($i);
            ?>
            
		</div>
	</div>
</div>




<div class="container">
	<div class="row clearfix">
    
		<div class="col-md-12 column">
			<table class="table">
				<thead>
					<tr>
					   <th>
                              # 
                              
                            <?php
                            
                             
                            if(isset($_GET['sort'])) $sort = $_GET['sort']; else $sort = false; 
                            
                            // descendente
                            if($sort == "desc") { 
                                
                                krsort($pessoas);   
                                echo '<a href="?sort=asc"><i class="fa fa-sort-asc"></i></a>';
                                
                            }  
                            
                            // ascendente 
                            else if($sort=="asc") {
                                
                                ksort($pessoas); 
                                echo '<a href="?sort=desc"><i class="fa fa-sort-desc"></i></a>';
                                
                                
                            } else  {
                                
                                krsort($pessoas); 
                                echo '<a href="?sort=asc"><i class="fa fa-sort"></i></a>';
                                
                            }
                            
                            ?> 
                       
                       </th>
				        <th>
							Tipo
						</th>
                        <th>
							Nome
						</th>
						<th>
						    CPF/CNPJ
						</th>
						<th>
							Telefone
						</th>
	                    <th>
							Cidade
						</th>
                        <th>
							Estado
						</th>  
                        <th>
                            Importância
                        </th>                      
                        
					</tr>
				</thead>
                
                
               
                <?php
                 
 
                foreach ($pessoas as $i => $r) {
  
                ?>

				<tbody class="lst">
                    
                    <tr>
					
                        <td>
							<?php echo $pessoas[$i]->Id; ?>
						</td>
                        <td>
							<?php 
                                  if($pessoas[$i]->Tipo == 'F') { echo 'Física';  }
                                  if($pessoas[$i]->Tipo == 'J') { echo 'Jurídica'; } 
                            
                             ?>
						</td>
						<td>
							<a href="?view=true&i=<?php echo $i; ?>"><?php echo $pessoas[$i]->Nome; ?></a>
						</td>
						<td>
							<?php 
                               
                                if($pessoas[$i]->Tipo == 'F') { echo $pessoas[$i]->Cpf;  }
                                if($pessoas[$i]->Tipo == 'J') { echo $pessoas[$i]->Cnpj; } 
       
                            ?>
						</td>
						<td>
							<?php echo $pessoas[$i]->Telefone1.'<br>'.$pessoas[$i]->Telefone2; ?>
						</td>
                        
                        <td>
							<?php echo $pessoas[$i]->Cidade; ?>
						</td>
                        <td>
							<?php echo $pessoas[$i]->Estado; ?>
						</td>
                        <td>
                            <?php 
                                /*$star = null;
                                $starO = null;
                                
                                for ($i = 1; $i <= $value; $i++) {
                                    $star .= '<i class="fa fa-star"></i>'; 
                                }
                                
                                for ($i = $value; $i <= 5-$value; $i++) {
                                    $starO .= '<i class="fa fa-star-o"></i>'; 
                                }
                                
                                
                                $this->Importancia = $star.$starO;
                            */
                            echo $pessoas[$i]->getImportancia(); 
                            
                            ?>
                        </td>
                        
					</tr>
                    
				  
				</tbody>
                
                <?php 
                }
                ?>
			</table>
		</div>
	</div>
</div>
    
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style>
cite { 
    color:black !important;
}
</style>

</html>