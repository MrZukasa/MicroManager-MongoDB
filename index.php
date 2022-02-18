<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="icon" href="https://img.icons8.com/color/96/000000/mongodb.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    

</head>
<body>
    <div class="container-fluid offset-1 mt-4">
        <div class="row">
            <div class="col-4">
                <form class="row g-3 needs-validation" novalidate>             
                    <div class="col-4">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" aria-describedby="Nome" placeholder="Inserisci Nome" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="cognome" class="form-label">Cognome</label>
                        <input type="text" class="form-control" id="cognome" aria-describedby="Cognome" placeholder="Inserisci Cognome" required>
                    </div>
                    <div class="col-4">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="email" aria-describedby="Email" placeholder="Inserisci E-Mail" required>                        
                    </div>
                    <div class="col-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="Username" placeholder="Inserisci Username" required>                        
                    </div>
                    <div class="col-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <div class="col">
                    <button class="btn btn-sm btn-outline-primary" type="button">Search</button>
                    <button class="btn btn-sm btn-outline-success" type="button">Add</button>
                    <button class="btn btn-sm btn-outline-success" type="button">Update</button>
                    <button class="btn btn-sm btn-outline-danger" type="button">Remove</button>
                    </div>
                </form>
            </div>
            <div class="col-5">
                <table class="table table-hover table-striped table-sm" id="tabella">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cognome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">User</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php
    require 'vendor/autoload.php';                                  //Installing the PHP Library with Composer
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);              //composer require vlucas/phpdotenv
    $dotenv->load();

    $path = $_ENV['DB_CONNECTION'].$_ENV['DB_HOST'].':'.$_ENV['DB_PORT'];
    $m = new MongoDB\Client($path);                                //composer require mongodb/mongodb
    $db=$m->{$_ENV['DB_DATABASE']}->{$_ENV['DB_COLLECTION']};
    $results = $db->find();
    $data=array();    
        
    foreach ($results as $result){                
        array_push($data,$result);
    }
    file_put_contents("dump.json",json_encode($data));
?>

</body>
</html>