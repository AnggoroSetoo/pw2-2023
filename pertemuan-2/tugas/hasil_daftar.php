<!DOCTYPE html>
<html>

<head>
    <title>Data Pendaftar</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" style="background-color:#F8F9FA;border-radius: 10px;">
            <h2 class="text-center">Data Pendaftar</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anggoro Seto</td>
                        <td>anggoro@gmail.com</td>
                        <td>Depok</td>
                        <td>+628821092283</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>K3TRIZ</td>
                        <td>catherine@gmail.com</td>
                        <td>Jakarta</td>
                        <td>+62859585855</td>
                    </tr>

                    <?php
                    /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */

                    if (isset($_POST['proses'])) {
                        // Variable
                        $nama_siswa = $_POST['nama_lengkap'];
                        $email = $_POST['email'];
                        $alamat = $_POST['alamat'];
                        $telepon = $_POST['telepon'];

                        $number = 3;
                    }
                    ?>
                    <!-- Menampilkan Data -->
                    <tr>
                        <td><?= $number++ ?></td>
                        <td><?= $nama_siswa ?></td>
                        <td><?= $email ?></td>
                        <td><?= $alamat ?></td>
                        <td><?= $telepon ?></td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</body>

</html>