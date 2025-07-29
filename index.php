<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Lista Hotel</h1>
    <table class="table">
      <thead>
        <tr>
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
          // echo "<pre>";
          // var_dump($hotels);
          // echo "</pre>";
          for ($i = 0; $i < 1; $i++) {
            foreach ($hotels[0] as $key => $value) {
              echo "<th scope='col'>$key</th>";
            }
          }
          ?>
        </tr>
      </thead>
      <tbody>
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
        // echo "<pre>";
        // var_dump($hotels);
        // echo "</pre>";
        foreach ($hotels as $currentHotel) {
          echo "<tr></tr>";
          foreach ($currentHotel as $key => $value) {
            echo "<td>$value</th>";
          }
        }
        ?>

      </tbody>
    </table>
  </div>

  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>