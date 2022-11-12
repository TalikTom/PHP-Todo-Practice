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
            
   

    ?>

<h1>
    
        <?= $message ?>  
        
</h1>



</body>
</html>