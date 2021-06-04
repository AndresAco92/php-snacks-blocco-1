<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack1</title>
</head>
<body>
    <?php
      $squadre =[
        [
          'squadra_1' => 'De Longhi Treviso Basket',
          'squadra_2' => 'Dolomiti Energia Trentino',
          'punti_sq1' => 84,
          'punti_sq2' => 80
        ],
        [
          'squadra_1' => 'Openjobmetis Varese',
          'squadra_2' => 'Germani Brescia',
          'punti_sq1' => 94,
          'punti_sq2' => 89
        ],
        [
          'squadra_1' => 'Allianz Pallacanestro Trieste',
          'squadra_2' => 'Vanoli Basket Cremona',
          'punti_sq1' => 102,
          'punti_sq2' => 77
        ],
        [
          'squadra_1' => 'Carpegna Prosciutto Pesaro',
          'squadra_2' => 'Banco di Sardegna Sassari',
          'punti_sq1' => 85,
          'punti_sq2' => 95
        ]
      ]
    ?>


  <ul>
    <?php foreach($squadre as $squadra) { ?>
      <li>
        <?php echo $squadra['squadra_1'] ?> - <?php echo $squadra['squadra_1'] ?> | <?php echo $squadra['punti_sq1'] ?>-<?php echo $squadra['punti_sq2'] ?>
      </li>
    <?php } ?>
  </ul>


</body>
</html>