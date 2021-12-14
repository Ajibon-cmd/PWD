<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM mahasiswa ");

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Home</title>
    </head>
    <body>
    <div class="col">
        <div class="row">
            <div class="col-6">
                
                <a href="tambah.php" class="btn btn-primary mt-3">Tambah Data Baru</a><br/><br/>
            </div>
            <div class="col-6">
                
                <a href="lap_mhs.php" target="blank" class="btn btn-primary mt-3">Cetak Data</a><br/><br/>
            </div>
        </div>
    </div>
    <table width='80%' class="border text-center">
    <tr>
    <th class="border">Nim</th> <th class="border">Nama</th> <th class="border">Gender</th> <th class="border">Alamat</th> 
    <th class="border">tgl lahir</th> <th class="border">Update</th>
    </tr>
    <?php 
    while($user_data = mysqli_fetch_array($result)) { 
    echo "<tr class='border'>";
    echo "<td class='border'>".$user_data['nim']."</td>";
    echo "<td class='border'>".$user_data['nama']."</td>";
    echo "<td class='border'>".$user_data['jkel']."</td>";
    echo "<td class='border'>".$user_data['alamat']."</td>"; 
    echo "<td class='border'>".$user_data['tgllhr']."</td>"; 
    echo "<td class='border p-2'><a href='edit.php?nim=$user_data[nim]' class='btn btn-warning'>Edit</a> | <a 
    href='delete.php?nim=$user_data[nim]' class='btn btn-danger'>Delete</a></td></tr>"; 
    }
    ?>
</table>
</body>
</html>
