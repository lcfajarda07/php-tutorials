<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <h1>
        <!-- Variables -->
        <?php 
        // $greeting = "Hello";
            // echo $greeting . " ". "Everybody";
            // echo "$greeting Everybody!!"            
       ?>
    </h1>

    <!-- Conditionals and Booleans -->
    <?php 
        // $name = "Dark Matter";
        // $read = true;
        // //$read = false;

        // if ($read) {
        //     $message = "You have read $name";
        // } else {
        //     $message = "You have not read $name";
        // }
    ?>



<!-- Arrays -->
    <h1>
        <?php 
        // $message;
         ?>
    </h1>
    
    <h1>Recommended Books</h1>
    <?php 
        $books = [
            "Do Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ];

    ?>

    <ul>
        <?php foreach ($books as $book){
            // echo "<li> $book </li>";
        } 
        ?>

        <?php foreach ($books as $book) : ?>
             <li><?= $book ?> </li>
            <?php endforeach; ?>


        

    </ul>
    <hr>

    <!-- Associative Array -->
     <?php
                $books = [
                    [
                        'name' => 'Do Androids Dream of Electric Sheep',
                        'author' => 'Philip K. Dicks',
                        'PurchaseUrl' => 'http://example.com'
                    ],
                    [
                        'name' => 'Project Hail Mary',
                        'author' => 'Andy Weir',
                        'PurchaseUrl' => 'http://example.com'
                    ]
                ]
     ?> 
     <ul>
        <?php foreach($books as $book) : ?>
        <li>
            <a href="<?= $book['PurchaseUrl']?>">
                <?= $book['name']; ?>
            </a>
        </li>
        <?php endforeach; ?>              
     </ul>

</body>
</html>