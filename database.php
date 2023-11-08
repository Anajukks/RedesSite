<?php

$host = 'localhost'; 
$username = 'root'; 
$password = 'ursinhos326'; 
$database = 'gmyfit'; 


function connection() {
    global $host, $username, $password, $database;
    $conn = new mysqli($host, $username, $password, $database, 3307);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    return $conn;
}

// function connection() : SQLite3 {
//     return new SQLite3('database.db');
// }

//recebe a declaração SQL e o banco de dados
function find ($query) {    
    return $connection->query($query);
}

function save ($query) {
    return $connection->query($query);    
}

//obtém uma conexão com o banco de dados
$connection = connection();

$connection->query(
    "CREATE TABLE IF NOT EXISTS plans(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        planName VARCHAR(45),
        planDuration INT,
        planCost FLOAT)"
);

//cria as tabelas de usuário
$connection->query(
    "CREATE TABLE IF NOT EXISTS members(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(45),
        user VARCHAR(45),
        age INT,
        email VARCHAR(45),
        password VARCHAR(45),
        type VARCHAR(45), 
        plan INT,
        foreign key (plan) references plans(id))"
);

$connection->query(http://192.168.0.125:8000/
    "CREATE TABLE IF NOT EXISTS partners(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(45),
        age INT,
        email VARCHAR(45),
        functioon VARCHAR(45))"
);

$connection->query(
    "CREATE TABLE IF NOT EXISTS products(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(45),
        description INT,
        supplier VARCHAR(45),
        price INT)"
);

?>
