<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
var_dump($hotels);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- STYLE-CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

    <?php foreach ($posts as $date => $post_arr) { ?>
        <h2><?php echo $date; ?></h2>
        <?php foreach ($post_arr as $post) { ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $post["title"]; ?></h3>
                    <p>Scritto da <?php echo $post["author"]; ?></p>
                    <p class="mt-2"><?php echo $post["text"]; ?></p>
                </div>
            </div>
        <?php } ?>
    <?php } ?>

    <?php foreach ($hotels as $hotel) { ?>
        <h2><?php echo $hotel["name"]; ?></h2>
        <p><?php echo $hotel["description"]; ?></p>
        <p><?php echo $hotel["parking"]; ?></p>
        <p><?php echo $hotel["vote"]; ?></p>
        <p><?php echo $hotel["distance_to_center"]; ?></p>
    <?php } ?>


</body>

</html>