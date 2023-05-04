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

if (isset($_GET["parking"])) {
    $filter = $_GET["parking"];
} else {
    $filter = "";
};

if (isset($_GET["vote"])) {
    $votes = $_GET["vote"];
} else {
    $votes = "";
};

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
    <!-- HEADER -->
    <header class="d-flex align-items-center justify-content-center">
        <img src="img/logo.svg" alt="Logo">
    </header>
    <!-- /HEADER -->

    <!-- MAIN -->
    <main>
        <div class="container">
            <h1 class="d-flex align-items-center justify-content-center m-0 py-3">
                PHP Hotel by<span class="ps-2">Boolean</span>
            </h1>
            <form action="index.php" method="GET" class="text-center">
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <label for="parking" class="d-flex justify-content-center">Filtra Hotel</label>
                        <select class="form-select" id="parking" name="parking">
                            <option value="">Tutti</option>
                            <option value="true">Con Parcheggio</option>
                            <option value="false">Senza Parcheggio</option>
                        </select>
                    </div>
                    <div class="col d-flex align-items-center">
                        <label for="text" class="d-flex justify-content-center">Voto Hotel</label>
                        <select class="form-select" id="votes" name="vote">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col text-center py-4">
                            <button type="submit" class="me-3">Cerca</button>
                            <button type="reset" class="ms-3">Annulla</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Parcheggio</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Distanza dal centro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $hotel) {
                        if (($filter === "" || ($filter === "true" && $hotel["parking"] === true) || ($filter === "false" && $hotel["parking"] === false))
                            && ($votes === "" || $hotel["vote"] >= $votes)
                        ) { ?>
                            <tr class="text-center">
                                <th scope="row"><?php echo $hotel["name"]; ?></th>
                                <td><?php echo $hotel["description"]; ?></td>
                                <td><?php if ($hotel["parking"]) { ?>
                                        Si
                                    <?php } else { ?>
                                        No
                                    <?php } ?>
                                </td>
                                <td><?php echo $hotel["vote"]; ?></td>
                                <td><?php echo $hotel["distance_to_center"]; ?> Km</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
    <!-- /MAIN -->

    <!-- FOOTER -->
    <footer class="d-flex align-items-center justify-content-center">
        <h2>PHP Hotel by <span>Boolean</span> ©</h2>
    </footer>
    <!-- /FOOTER -->
</body>

</html>