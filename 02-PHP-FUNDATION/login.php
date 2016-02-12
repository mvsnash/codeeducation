<?php
session_start();

require_once("config.php");  // configurações do bd
require_once("connect.php"); // funcao de conexão conexaoDB()


function checkLogin($user,$pass) {
    

    
  
    try {
            
            
            
            $pdo = conexaoDB();
            
            $smt = $pdo->prepare("SELECT user,pass FROM users WHERE user = :user LIMIT 1");
            $smt->bindValue(":user",$user);
            
            $smt->execute();
            $result = $smt->fetch(\PDO::FETCH_ASSOC);
            
            if(isset($result['pass'])) {
                
                    if(password_verify($pass, $result['pass'])) { return true; }
                    else {  return false; }   
            } 
            
            else {
                
                return false;
                
            }
        
         
    }
    
    
     catch (\PDOException $e) { 
        
         print $e->getMessage();
    }
    
    
}

if(isset($_GET['logout'])=='t') {
    
    session_destroy();
}


?>

<head><title>Login</title></head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>

<link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/css/prettify.css"/>
<link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"/>


<div class="container">

	<div class="page-header">
		<h1>
			Gerenciador de Conteúdo 
		</h1>
	</div>
    
	<div class="row clearfix">
		<div class="col-md-12 column">
        
            <?php
            
            
                if(isset($_POST['user']) AND isset($_POST['pass'])) { 
                        
     
                    
                    if(checkLogin(filter_input(INPUT_POST, "user"),filter_input(INPUT_POST, "pass"))) { 
                        
                        $_SESSION['auth'] = true;
                        header('location: admin.php');


                    } else { 
                        
                        $_SESSION['auth'] = false;
                        ?>
                        
                            <div class="alert alert-warning alert-dismissable">
                            Dados Inválidos. Tente novamente.
                          </div>
                        
                        <?php
                        
                    }
                    
                }
            
            ?>
        
        
			<form method="post" class="form-horizontal">
				
                <div class="form-group">
					 <label  class="col-sm-2 control-label">Usuário</label>
					<div class="col-sm-4">
						<input name="user" type="text" class="form-control"  />
					</div>
				</div>
				<div class="form-group"> 
					 <label  class="col-sm-2 control-label">Senha</label>
					<div class="col-sm-4">
						<input name="pass" type="password" class="form-control"  /> 
                        <br /><br />
                        <button type="submit" class="btn btn-default">Autenticar</button> 
					</div>
				</div>
	
				
			</form>
		</div>
	</div>
</div>


