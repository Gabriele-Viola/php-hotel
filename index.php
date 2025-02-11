<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>
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

?>
    <h1>Hotels</h1>
    <div class="container">
        <div class="row">

        <div class='card'>
        <div class='card-body'>
            <?php
    foreach($hotels as $hotel)
        
        foreach($hotel as $key => $value)
        if($key == "name" ){
           echo "<h4>$value</h4>";
        } elseif ($key == "description"){
           echo "<p>$value</p>";
        }elseif ($key == "parking"){
            echo $value ? "<div>Parcheggi disponibile</div>" : "<div></div>";
        }elseif ($key == "vote"){
            echo "<div> Valutazione: $value/5</div>";
        }elseif ($key == "distance_to_center"){
            echo "<div> Distanza dal centro: $value km</div>";
        }
        ?>

    
    
    
    </div>
    </div>
        </div>
    </div>
    
</body>
</html>