<?php
    header('Content-Type: application/json');
    require 'vendor/autoload.php';                                  //Installing the PHP Library with Composer
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);              //composer require vlucas/phpdotenv
    $dotenv->load();
    
    $data = json_decode(file_get_contents("php://input"), true);    
    $nome=$data['nomePHP'];
    $cognome=$data['cognomePHP'];
    $email=$data['emailPHP'];
    $username=$data['usernamePHP'];
    $password=$data['passwordPHP'];
    $json=array();

    $path = $_ENV['DB_CONNECTION'].$_ENV['DB_HOST'].':'.$_ENV['DB_PORT'];           //path per la connessione al link dove è hostato il DB
    $m = new MongoDB\Client($path);                                                 //composer require mongodb/mongodb
    $db=$m->{$_ENV['DB_DATABASE']}->{$_ENV['DB_COLLECTION']};                       //accedo al database e poi alla collection

    $results = $GLOBALS['db']->find(['email'=> new MongoDB\BSON\Regex('(?i)'.$email)]);
    foreach ($results as $result){                                                  //scorro i dati e li inserisco in un array
        array_push($json,$result);
    }    

    if ($json[0]['email']==$email){
        $error = array("Error"=>array("Email già esistente"));
        file_put_contents("dump.json",json_encode($error));        
    } else {
        $results = $GLOBALS['db']->insertOne([                                               
            'nome'=> $nome,
            'cognome'=> $cognome,
            'username'=> $username,
            'email'=> $email,
            'password'=> $password
        ]);
        $results = $GLOBALS['db']->find();                                                                      
        foreach ($results as $result){                                                  //scorro i dati e li inserisco in un array
            array_push($json,$result);
        }
        file_put_contents("dump.json",json_encode($json));        
    };
?>