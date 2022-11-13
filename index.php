<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Demo</title>
</head>
<body>

    <?php
        $name = "1984";
        $read = true;

    

        if($read) {
           $message = "You have read $name";

        } else {
            $message = "You have NOT read $name";
        }
            
        $books = [
            "Na drini ćuprija",
            "1984",
            "The road"
        ];

        $phones = [

            [
                'model' => 'Iphone 14 Pro Max',
                'IMEI' => '356728115354819',
                'color' => 'black',
                'purchaseURL' => 'https://example.com',
                'releaseYear' => 2022
            ],

            [
                'model' => 'Iphone 14 Pro Max',
                'IMEI' => '3567281153548609',
                'color' => 'white',
                'purchaseURL' => 'https://example.com',
                'releaseYear' => 2022
            ]   
        
        ];

       
   

    ?>

<h1>
    
        <?= $message ?>  
        
</h1>

<ul>

    <li>Na drini ćuprija</li>
    <li>1984</li>
    <li>The road</li>

    <?php

    foreach ($books as $book) {
           echo "<li>{$book}™</li>";
        }

    ?>

    <?php foreach ($books as $book) : ?>

        <li><?= $book ?></li>
    
    <?php endforeach; ?>

    <?= $books[1]; ?>

    <?php foreach ($phones as $phone) : ?>

        <li>
            <a href="<?= $phone['purchaseURL'] ?>">
        
            <?= $phone['model'] . ' ' . $phone['releaseYear'] ?> (<?= $phone['color'] ?>);</a>
    
    
        </li>

    <?php endforeach; ?>

</ul>

</body>
</html>