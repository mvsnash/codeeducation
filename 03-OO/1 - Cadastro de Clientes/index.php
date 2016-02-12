<?php 

// Crie uma classe com os principais atributos que um cliente deve ter, como nome, cpf, endereço, etc.

require_once('class.php'); 

// Crie um array de objetos de clientes, com 10 clientes dentro.

$rows    = array();

$pessoa1 = new Pessoa();
$pessoa1->nome = "Marcus Vinícius dos Santos";
$pessoa1->sexo = "Masculino";
$pessoa1->cpf = "614.337.427-99";
$pessoa1->nascimento = "24/05/1987";
$pessoa1->cidade = "Anápolis-GO";
$pessoa1->telefone = "(62) 3099-4292";
$pessoa1->celular = "(62) 8586-4433";

$rows[] = $pessoa1;

$pessoa2 = new Pessoa();
$pessoa2->nome = "Juliana Melo";
$pessoa2->sexo = "Feminino";
$pessoa2->cpf = "531.580.281-74";
$pessoa2->nascimento = "03/12/1986";
$pessoa2->cidade = "Brasília-DF";
$pessoa2->telefone = "(61) 3045-3292";
$pessoa2->celular = "(61) 9986-4433";

$rows[] = $pessoa2;

$pessoa3 = new Pessoa();
$pessoa3->nome = "Seleide Pacheco da Silveira";
$pessoa3->sexo = "Feminino";
$pessoa3->cpf = "497.213.147-06";
$pessoa3->nascimento = "15/12/1973";
$pessoa3->cidade = "São Paulo - SP";
$pessoa3->telefone = "(11) 4045-7292";
$pessoa3->celular = "(11) 9886-4333";

$rows[] = $pessoa3;

$pessoa4 = new Pessoa();
$pessoa4->nome = "Vantuir Bento dos Santos";
$pessoa4->sexo = "Masculino";
$pessoa4->cpf = "100.186.474-30";
$pessoa4->nascimento = "25/08/1973";
$pessoa4->cidade = "Belo Horizonte - BH";
$pessoa4->telefone = "(31) 4045-7292";
$pessoa4->celular = "(31) 9886-4333";

$rows[]  = $pessoa4;

$pessoa5 = new Pessoa();
$pessoa5->nome = "Raphael de Oliveira Melo";
$pessoa5->sexo = "Masculino";
$pessoa5->cpf = "240.975.981-55";
$pessoa5->nascimento = "05/03/1981";
$pessoa5->cidade = "Rio de Janeiro - RJ";
$pessoa5->telefone = "(21) 4045-7292";
$pessoa5->celular = "(21) 9886-4333";

$rows[]  = $pessoa5;

$pessoa6  = new Pessoa();
$pessoa6->nome = "Algusto Martins";
$pessoa6->sexo = "Masculino";
$pessoa6->cpf = "167.862.560-40";
$pessoa6->nascimento = "12/06/1991";
$pessoa6->cidade = "Bahia - BH";
$pessoa6->telefone = "(77) 4045-7292";
$pessoa6->celular = "(77) 9886-4333";

$rows[]  = $pessoa6;

$pessoa7 = new Pessoa();
$pessoa7->nome = "Maria de Lurdes";
$pessoa7->sexo = "Feminino";
$pessoa7->cpf = "638.887.646-37";
$pessoa7->nascimento = "05/05/1987";
$pessoa7->cidade = "Goiania - GO";
$pessoa7->telefone = "(62) 4045-7292";
$pessoa7->celular = "(62) 9886-4333";

$rows[]  = $pessoa7;

$pessoa8 = new Pessoa();
$pessoa8->nome = "Leticia de Oliveira Silva";
$pessoa8->sexo = "Feminino";
$pessoa8->cpf = "238.857.676-38";
$pessoa8->nascimento = "09/02/1985";
$pessoa8->cidade = "São Paulo - SP";
$pessoa8->telefone = "(11) 4305-2212";
$pessoa8->celular = "(11) 9994-4433";

$rows[] = $pessoa8;

$pessoa9 = new Pessoa();
$pessoa9->nome = "Wesley Barbaresco";
$pessoa9->sexo = "Masculino";
$pessoa9->cpf = "138.257.636-32";
$pessoa9->nascimento = "19/03/1986";
$pessoa9->cidade = "Rio de Janeiro - RJ";
$pessoa9->telefone = "(21) 4353-2113";
$pessoa9->celular = "(21) 8394-4433";

$rows[] = $pessoa9;

$pessoa10 = new Pessoa();
$pessoa10->nome = "Geovani Santos";
$pessoa10->sexo = "Masculino";
$pessoa10->cpf = "211.237.336-12";
$pessoa10->nascimento = "02/08/1989";
$pessoa10->cidade = "Goiânia - GO";
$pessoa10->telefone = "(62) 4353-2113";
$pessoa10->celular = "(62) 9394-4433";

$rows[] = $pessoa10;

// Crie uma página e faça a listagem geral dos clientes. Quando clicar sobre o cliente, você deverá mostrar os dados específicos do cliente selecionado.
// Nessa listagem você também deverá ter a opção de ordenar os clientes pelo seu índice de forma ascendente e descendente.
// Não se esqueça de caprichar na interface utilizando o twitter bootstrap.


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
                        
                    if($i <= 0) { $back = count($rows)-1; } else { $back = $i-1; }
                    if($i >= count($rows)-1) { $next = 0; } else { $next = $i+1; }                       
                        
                        
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
            
			<blockquote>
				<p><?php echo $rows[$i]->nome; ?></p> 
                <small>Sexo:       <cite><?php echo $rows[$i]->sexo;       ?></cite></small>
                <small>CPF:        <cite><?php echo $rows[$i]->cpf;        ?></cite></small>
                <small>Nascimento: <cite><?php echo $rows[$i]->nascimento; ?></cite></small>
                <small>Cidade:     <cite><?php echo $rows[$i]->cidade;     ?></cite></small>
                <small>Telefone:   <cite><?php echo $rows[$i]->telefone;   ?></cite></small>
                <small>Celular:    <cite><?php echo $rows[$i]->celular;    ?></cite></small>
			</blockquote>
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
                                
                                krsort($rows);   
                                echo '<a href="?sort=asc"><i class="fa fa-sort-asc"></i></a>';
                                
                            }  
                            
                            // ascendente 
                            else if($sort=="asc") {
                                
                                ksort($rows); 
                                echo '<a href="?sort=desc"><i class="fa fa-sort-desc"></i></a>';
                                
                                
                            } else  {
                                
                                krsort($rows); 
                                echo '<a href="?sort=asc"><i class="fa fa-sort"></i></a>';
                                
                            }
                            
                            ?> 
                       
                       </th>
						<th>
                        
							Nome
                     	</th>
                        <th>
							Nascimento
						</th>
						<th>
						    Telefone
						</th>
						<th>
							Celular
						</th>
					</tr>
				</thead>
                
                
               
                <?php
                 
 
                foreach ($rows as $i => $r) {
  
                ?>

				<tbody class="lst">
                    
                    <tr>
					
                        <td>
							<?php echo $i; ?>
						</td>
						<td>
							<a href="?view=true&i=<?php echo $i; ?>"><?php echo $rows[$i]->nome; ?></a>
						</td>
						<td>
							<?php echo $rows[$i]->nascimento; ?>
						</td>
						<td>
							<?php echo $rows[$i]->telefone; ?>
						</td>
                        
                        <td>
							<?php echo $rows[$i]->celular; ?>
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

</html>