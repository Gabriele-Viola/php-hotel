<?php
$park = $_GET['park'] ?? null;
$vote = $_GET['vote'] ?? null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    <title>Hotels</title>
</head>
<body class="w-50 m-auto">
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
<?php
var_dump($park);
?>
    <div class="container ">
        <h1 class="mb-4">Hotels</h1>
        <div class="row">
            <p>Affina la tua ricerca</p>
<form action="" method="get" class="form-control mb-4">
    <label for="" class='form-label'>Disponibilità parcheggio?</label>
    <select class="form-select mb-2" name="park" id="park">
        <option > -- </option>
        <option value=1> Si </option>
        <option value=0> No </option>
    </select>
    <label for="" class='form-label'>Disponibilità parcheggio?</label>
    <select class="form-select mb-2" name="vote" id="vote">
        <option value=1> 1 </option>
        <option value=2> 2 </option>
        <option value=3> 3 </option>
        <option value=4> 4 </option>
        <option value=5> 5 </option>
    </select>
    <button class="btn btn-secondary mb-2" type="submit"> Cerca</button>
</form>
            <?php
    foreach($hotels as $hotel)
if(($park == $hotel['parking'] || $park == '--') && $vote <=  $hotel['vote']){

    echo  '<div class="card mb-4 p-2 shadow">
    <h4>'. $hotel['name'] . '</h4>
    <p>' . $hotel['description'] .'</p>
    <div>
    <div>' . ($hotel['parking'] ? 'Con pacheggio' : 'Senza Parcheggio')  . '</div>
    <div> Valutazione: '. $hotel['vote'] .'/5 </div>
    <div> Distanza dal centro: ' . $hotel['distance_to_center'] .' km</div>
    </div>
    </div>';      
    };
        
        
        ?>
   
        </div>
    </div>
    
</body>
</html>