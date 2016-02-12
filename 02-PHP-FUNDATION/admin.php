<?php
session_start();
require_once("config.php");  // configurações do bd
require_once("connect.php"); // funcao de conexão conexaoDB()


function checkAuth() {
    
    if(isset($_SESSION['auth'])==true) { 
        
        return true;
        
    } else {

        header('location: login.php');
    }
    
}

checkAuth();


function getPages() { 
    
  
    try {
        
            
        $pdo = conexaoDB();
        
        $smt = $pdo->prepare("SELECT * FROM pagina");
        $smt->execute();
        return $smt->fetchAll(PDO::FETCH_ASSOC);    
    
    }
    
    
     catch (\PDOException $e) { 
        
        print $e->getMessage();
    }
    
    
}


function setPage($slug,$conteudo) { 
    
  
    try {
        
            
        $pdo = conexaoDB();
        
        $smt = $pdo->prepare("UPDATE pagina SET conteudo = :conteudo WHERE slug = :slug");
        $smt->bindValue(":slug",$slug);
        $smt->bindValue(":conteudo",$conteudo);
        $smt->execute();
        
        return true; 
    
    }
    
    
     catch (\PDOException $e) { 
        
        print $e->getMessage();
    }
    
    
}

?>


<html>

<head><title>Atividade - Cadastro de clientes</title></head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>

<link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/css/prettify.css"/>
<link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"/>


<style>
.lst tr:hover { 
    background: #EEE;
}
</style>


<div class="container">

	<div class="page-header">
		<h1>
			Gerenciador de Conteúdo 
            <a href="login.php?logout=t"><small style="float: right;font-size:10pt;">Logout</small></a>
		</h1>
	</div>
    
	<div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table">
				<thead>
					<tr>
						<th>
							Página
						</th>
		
						<th style="width: 1px;">
							Editar
						</th>
						
					</tr>
				</thead>
                <?php
                
                $paginas = getPages(); 
                for ($i = 0; $i < count($paginas); $i++) {
                    
                ?>
                <tbody>
					<tr>
						<td>
					      <?php echo $paginas[$i]['titulo']; ?>       
						</td>
				
						<td style="text-align: center;">
						<a href="?e=<?php echo $paginas[$i]['slug']; ?>"><i class="fa fa-pencil-square-o"></i></a>
						</td>
				
					</tr>
			         
                      <?php 
                      
                      if(isset($_GET['e'])) { $e = $_GET['e'];  } else { $e = false;  } 
                      
                      
                      if($e==$paginas[$i]['slug']) { 
                      ?>
                      <tr>
                          <td colspan="2">
                                
                            <?php                   
                            if(isset($_POST['s']) and isset($_POST['conteudo'])) { 
                                
                                if(setPage($_POST['s'], $_POST['conteudo']))
                                { 
                                    
                                    $paginas[$i]['conteudo'] = $_POST['conteudo'];
                                ?>    
                                    
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Conteúdo salvo com sucesso!
                                    </div>
                                
                                <?php    
                                }
                                
                                 
                            }
                            ?>
                            <form method="post">
                            <input type="hidden" name="s" value="<?php echo $slug; ?>" />
                            <textarea name="conteudo" class="textarea" style="width: 100%; height: 200px"><?php echo $paginas[$i]['conteudo']; ?></textarea>
                            <button class="btn btn-default" type="submit"><em class="fa fa-floppy-o"></em> Salvar</button>
                            
                            </form>  
                           </td>
                     </tr>
                      <?php
                      }
                      ?>
                     
				</tbody>
                
                
               <?php    
                }
               ?>
               
               
               
			</table>
            
            
            
            
            
		</div>
        
        
	</div>
</div>

 



<script src="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/js/jquery-1.7.2.min.js"></script>
<script src="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/js/prettify.js"></script>
<script src="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/js/bootstrap.min.js"></script>
<script src="http://jhollingworth.github.io/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
<script>$('.textarea').wysihtml5();</script><script type="text/javascript" charset="utf-8">	$(prettyPrint);</script>