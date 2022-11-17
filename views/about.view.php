<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Demo</title>
</head>
<body class="h-full">

<div class="min-h-full">
    
    <?php require('partials/nav.php'); ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">About us</h1>
    </div>
    </header>
    <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Now you are on the About page</p>
    </div>
    </main>
</div>


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

        <?php foreach($filteredPhones as $phone) : ?>



                <li>
                    <a href="<?= $phone['purchaseURL'] ?>">
                
                    <?= $phone['model'] . ' ' . $phone['releaseYear'] ?> (<?= $phone['color'] ?>);</a>
            
                </li>


        <?php endforeach; ?>

    </ul>

</body>
</html>