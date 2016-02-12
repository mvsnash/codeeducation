<?php
require_once("controlador.php");
?>

<html>
<head>
    <title>Meu site / <?php echo $titulo; ?></title>
    <meta name="viewport content="width=device-width, initial-scale=1.0"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
     
</head>

<body>

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                     <a class="navbar-brand" href="#"><img src="http://portal.code.education/bundles/sonbase/img/lms/marca.png?0.11.3"  width="65"></a> 
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                     
                        <li <?php if($link=="home") { echo 'class="active"'; } ?> >
                            <a href="./home">Home</a>
                        </li> 
                        <li <?php if($link=="empresa") { echo 'class="active"'; } ?>>
                            <a href="./empresa">Empresa</a> 
                        </li>
                        <li <?php if($link=="produtos") { echo 'class="active"'; } ?>>
                            <a href="./produtos">Produtos</a>
                        </li>
                        <li <?php if($link=="servicos") { echo 'class="active"'; } ?>>
                            <a href="./servicos">Servicos</a>
                        </li>
                        <li <?php if($link=="contato") { echo 'class="active"'; } ?>>
                            <a href="./contato">Contato</a>
                        </li>
    
                    </ul>
                    
                   <form action="./busca" class="navbar-form navbar-left" role="search" method="get">
                        <input type="hidden" />
                    	<div class="form-group">
							<input type="text"  name="q"  placeholder="O que deseja encontrar?" class="form-control" />
						</div>
                        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
					</form>
                </div>
                
            </nav>
 

            <ul class="breadcrumb">
                <li>
                    <a href="./">Home</a>
                </li>

                <li class="active">
                    <?php if($link != "home") { echo $titulo; } else  { echo 'Bem-vindo'; }?>
                </li>
            </ul>

  
            <!-- CONTEUDO -->
            
            
             <?php
               //echo "inc/".$arquivo;
               require_once $arquivo;
                
              ?> 


        </div>
    </div>
    <div style="text-align: center;">Todos os direitos Reservados - <?php echo date('Y');?></div>
</div>
</body>
    
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</html>
