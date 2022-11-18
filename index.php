<?php 

require 'functions.php';

require 'Database.php';

// require 'router.php';



// connect to MySQL database.

// $dsn ="mysql:host=localhost;port=3306;dbname=phppractice;user='root';charset=utf8mb4";

// $pdo = new PDO($dsn);

// $statement = $pdo->prepare("SELECT * FROM title");

// $statement->execute();

// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);




$config = require('config.php');

$db = new Database($config['database']);

$posts = $db->query("SELECT * FROM title")->fetchAll();

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}


// class Person 
// {

//     public $name;
//     public $age;

//     public function breathe()
//     {
//         echo $this->name . " is breathing";
//     }



// };


// $person = new Person();


// $person ->name = 'John Doe';
// $person ->age = 25;

// $person->breathe();