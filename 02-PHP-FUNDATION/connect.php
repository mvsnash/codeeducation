<?php

function conexaoDB() { 

    try {
        
        $config = include ('config.php');
       
        if(!isset($config['db'])) { 
            throw new \InvalidArgumentException("Config.php não está passando as variaveis para a conexão");
        }
        
        $host    = (isset($config['db']['host']))       ? $config['db']['host']    : null;
        $dbname  = (isset($config['db']['dbname']))     ? $config['db']['dbname']  : null;
        $user    = (isset($config['db']['user']))       ? $config['db']['user']    : null;
        $pass    = (isset($config['db']['pass']))       ? $config['db']['pass']    : null;
                
        $pdo     =  new \PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo;
        
    }  
    
    catch (\PDOException $e) { 
        
        echo $e->getMessage().'\n';
        echo $e->getTranceAsString();
    }
    
     
}
