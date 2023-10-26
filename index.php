<?php 

// array hotels
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
</head>
<body>

<!-- ista Hotel -->
  <div>
    <?php foreach($hotels as $hotel): ?>
    <h1><?php echo $hotel["name"]; ?></h1> 
    <span>Descrizione: <?php echo $hotel["description"]; ?></span> <br> 
    <span>Posto auto: <?php echo ($hotel['parking'] === true)? 'yes': 'no'; ?></span> <br>
    <span>Voto:<?php echo $hotel["vote"]; ?></span> <br> 
    <span>Distanza dal centro:<?php echo $hotel["distance_to_center"]; ?> Km</span> 
    <?php endforeach?>
  </div>

</body>
</html>