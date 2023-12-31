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

$hotelWithPark = [];
$park= isset($_POST['parking']);


if($park){
  foreach($hotels as $hotel){
    if($hotel['parking']){
      $hotelWithPark[] = $hotel;
    }
  }
}else {
  foreach($hotels as $hotel){
    $hotelWithPark[] = $hotel;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>Hotel</title>
</head>
<body>

<!-- Lista Hotel -->
  <div class="container">
    <h1>Scegli il tuo hotel</h1>
    
    <!-- checkbox button -->
    <form action="index.php" method="POST">
      <input type="checkbox" name="parking" value="true">
      <label for="parking"> Parking</label><br>
      <input type="submit" value="Cerca">
    </form>

    <table class="table table-dark table-striped border my-3">
        <!-- caratteristiche hotel -->
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Posto auto</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza centro</th>
          </tr>
        </thead>
        <!-- /caratteristiche hotel -->
    
        <!-- informazioni richieste -->
        <tbody>
          <?php foreach($hotelWithPark as $hotel): ?>
            <tr>
              <th scope="row"><?php echo $hotel["name"]; ?></th>
              <td><?php echo $hotel["description"];?></td>
              <td><?php echo ($hotel['parking'] === true)? 'yes': 'no'; ?></td>
              <td><?php echo $hotel["vote"]; ?></td>
              <td><?php echo $hotel["distance_to_center"]; ?> Km</td>
            </tr>
          <?php endforeach?>
        </tbody>
        <!-- /informazioni richieste -->
    
    </table>

  </div>

</body>
</html>