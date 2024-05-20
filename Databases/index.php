<?php

try{
    $dsn = 'mysql:host=mysql; port = 3306; dbname=mydatabase';
    $connection = new PDO($dsn, 'root', 'noadmin');
    //var_dump($connection);

    $query = $connection->query('SELECT *
FROM services
WHERE quantity IS NULL
   OR price < 100
ORDER BY service_article');
    $output = $query->fetch();
    print_r($output);

    $query = $connection->query("SELECT email
FROM clients
WHERE email LIKE '%@gm%'");
    $output = $query->fetchAll();
    echo "<pre>";
    print_r($output);
    echo "<pre>";

    $query = $connection->query("SELECT SUM(price)
FROM services");
    //$output = $query->fetch();
    function generator($query): Generator
    {   while ($row = $query->fetch())
        yield $row;
    };
    $generator = generator($query);

    foreach ($generator as $row){
        echo $row['SUM(price)'];
    }

//    $input = $connection->exec("INSERT INTO clients (`login`, `email`, `password`)
//VALUES ('company2', 'mail2@outlook.com', 'company123')");
//    echo $input;

    $gotUser = "company";
    $sql = "SELECT *
FROM clients WHERE login LIKE ?";
    $handler = $connection->prepare($sql);
    $handler->execute([$gotUser]);
    $result = $handler->fetch();
    echo "<pre>";
    print_r($result);
    echo "<pre>";

    $gotEmail = "mail1@outlook.com";
    $request = "SELECT *
FROM clients WHERE email = :userEmail";
    $handler = $connection->prepare($request);
    $handler->bindValue('userEmail', $gotEmail, PDO::PARAM_STR);
    $handler->execute();

    $result1 = $handler->fetch();
    echo "<pre>";
    print_r($result1);
    echo "<pre>";

} catch (PDOException $e) {
    echo $e->getMessage();
}

