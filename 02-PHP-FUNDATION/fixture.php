<?php
require_once("config.php");
require_once("connect.php");
/**
 * Prepara a base de dados
 **/

function fixture() {
    
    
    try { 
    
        $pdo = conexaoDB();
        
        // Verifica se a tabela já existe. Caso não exista irá dar continuidade ao processo
        
        if(!verificaTbl($pdo)) { 
            
        
                $pdo->query('CREATE DATABASE IF NOT EXISTS `codeeducation`; USE `codeeducation`; DROP TABLE IF EXISTS `pagina`;');
                $pdo->query("CREATE TABLE IF NOT EXISTS pagina ( titulo varchar(50) NOT NULL, slug varchar(60) NOT NULL, conteudo text NOT NULL) ENGINE=InnoDB;");
                
                $paginas = array(
                
                        'Home'     => 'home',
                        'Empresa'  => 'empresa',
                        'Produtos' => 'produtos',
                        'Servi?os' => 'servicos',
                        'Contato'  => 'contato',
                        'Busca'    => 'Busca',
                
                ); 
                  
            
                 while(list($titulo, $slug) = each($paginas)) {
                   
                    $smt = $pdo->prepare("INSERT INTO pagina (titulo, slug, conteudo) VALUE (:titulo, :slug, :conteudo)");
                    $smt->bindValue(":titulo",$titulo);
                    $smt->bindValue(":slug",$slug);
                    $smt->bindValue(":conteudo",'Olá mundo! Este é um exemplo fixture - '.$titulo);
                    $smt->execute();
                    
                                                         
                }
                
                 
                $pdo->query("DROP TABLE IF EXISTS `users`;
                            CREATE TABLE IF NOT EXISTS `users` (
                            `id` int(11) NOT NULL,
                              `user` varchar(50) NOT NULL,
                              `pass` varchar(255) NOT NULL
                            ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
                            
                            INSERT INTO `users` VALUES(1, 'admin', '".password_hash("admin", PASSWORD_DEFAULT)."');
                            ALTER TABLE `users` ADD PRIMARY KEY (`id`);
                            ALTER TABLE `users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
                ");
                
              echo 'Executado com sucesso!';
                
         } else {
            
            
              echo 'A base de dados já existe';
            
         }
    
 
    }
    
    catch (PDOException $e){
        echo $e->getMessage();
    }


}

function verificaTbl($pdo) {
    
        
        try {
            
            $result = $pdo->query("SELECT 1 FROM pagina LIMIT 1");
            $result = true;
        } 
        
        catch (Exception $e) {
            return false;
        }
        
        return $result;
    
}


fixture();