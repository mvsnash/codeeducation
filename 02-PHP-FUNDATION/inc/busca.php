<?php

$result = search($_GET['q']);

if(count($result)!=0) {
    
    foreach ($result as $row) {
        
        
            $conteudo = str_replace(strtolower($_GET['q']),'<span class=high_r>'.strtoupper($_GET['q']).'</span>',strip_tags(strtolower($row["conteudo"])));
            
            echo "<div class=row_s><h2>".$row["titulo"]."</h2><p>".ucfirst($conteudo)."</p><small>[+] <a href='./".$row['slug']."'>http://".$_SERVER['HTTP_HOST'].'/'.$row['slug']."</a></small></div>";
            
            
    }
    /* end foreach */
      
} else { 
    
        echo 'Não foi possível encontrar resultados para a palavra: <b> '.$_GET['q'].'</b>';
    
}