<?php

$pessoasModel = new AppCode\Cliente\Model\PessoasModel($conn);
$pessoas = $pessoasModel->fetchAll();

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