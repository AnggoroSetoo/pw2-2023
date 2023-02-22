<?php
$m_fruits = [
  ["id" => 111, "name" => "Apel", "color" => "Hijau", "stock" => 1853, "price" => 7000, "description" => "Apel enak untuk dibawa piknik"],
  ["id" => 112, "name" => "Rambutan", "color" => "Merah", "stock" => 1335, "price" => 1000, "description" => "Buah yang sangat manis"],
  ["id" => 113, "name" => "Durian", "color" => "Hijau Tua", "stock" => 53, "price" => 25000, "description" => "Buah dengan bau yang menyengat tapi rasanya mantap"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover table-bordered">
      <thead class="bg-dark text-white">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
        foreach ($m_fruits as $fruit) {
          echo '<tr>';
          echo '<td>' . $fruit['id'] . '</td>';
          echo '<td>' . $fruit['name'] . '</td>';
          echo '<td>' . $fruit['color'] . '</td>';
          echo '<td>' . $fruit['stock'] . '</td>';
          echo '<td>' . $fruit['price'] . '</td>';
          echo '<td>' . $fruit['description'] . '</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>