<?php

require_once("config.php");  // configurações do bd
require_once("connect.php"); // funcao de conexão conexaoDB()

function setPage() { 
        
    $rota  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $path = str_replace('/','',$rota['path']);

    if(strval($path)) $link = $path; else $link = "home";
    
    return $link;   

}

function getPage($link) { 
    
  
    try {
        
            
        $pdo = conexaoDB();
        
        $smt = $pdo->prepare("SELECT titulo,conteudo FROM pagina WHERE slug = :link LIMIT 1");
        $smt->bindValue(":link",$link);
        $smt->execute();
        return $smt->fetch(PDO::FETCH_ASSOC);    
    
    }
    
    
     catch (\PDOException $e) { 
        
        return false;
    }
    
    
}

function search($q){ 
    
    try {
        
            
        $pdo = conexaoDB();

        $smt = $pdo->prepare("SELECT titulo,conteudo,slug FROM pagina WHERE conteudo LIKE :q "); 
        $smt->execute(array(':q' => '%'.$q.'%'));
        return $smt->fetchAll(PDO::FETCH_ASSOC);    
    
    }
    
    
     catch (\PDOException $e) { 
        echo $e->getMessage();
        return false;
    }   
    
}



$link   = setPage();

if($link=='admin' or $link=='login') { 
  
    include 'login.php';
    exit;

} else { 
   
            
        $pagina = getPage($link);
            
            
        if(!$pagina){ 
            
                header("HTTP/1.0 404 Not Found"); 
                $titulo  = 'Oops... A página não foi localizada.';
                $arquivo = "inc/404.php";
            
        } else { 
                
                   $titulo    = $pagina['titulo'];
                   $conteudo  = $pagina['conteudo'];
                   
                   switch ($link) {
                    
                        case 'busca': 
                        
                           $arquivo = "inc/busca.php"; 
                           
                           
                        break;
                        case 'contato':  $arquivo = "inc/contato.php"; break; 
                        default:         $arquivo = "inc/pagina.php";
                            
                   }
            
        
    }
    
}
