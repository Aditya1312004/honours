<?php

function connectToDb(){
    try{
        $pdo = new PDO(
            'mysql:host=127.0.0.1;port=3306;dbname=tasks_app', 
            'root', 
            ''
        );
         return $pdo;
    }
    catch(Exception $e){
        echo $e->getMessage();
        die("Could not connect to the database.");
    }
}

function insert(PDO $pdo, string $table, string $name, string $mail, string $gender, string $city){
    // Prepare statement
    $statement = $pdo->prepare("INSERT INTO $table (name, mail, gender, city) VALUES ($name, $mail, $gender, $city)");
    // // Bind values
    // $statement->bindValue(':name', $name);
    // $statement->bindValue(':mail', $mail);
    // $statement->bindValue(':gender', $gender);
    // $statement->bindValue(':city', $city);
    // Execute statement
    $statement->execute();    
    return $users;
}

function selectAll(PDO $pdo, string $table, string $class){
    $statement = $pdo->prepare("SELECT * FROM .".$table);
    $statement->execute();
    $users= $statement->fetchAll(PDO::FETCH_CLASS, $class);  
    return $users;
}

?>