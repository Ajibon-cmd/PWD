<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Tambah Data</title>
    </head>
    <body>
    <a href="index.php" class="btn btn-primary mt-3">Go to Home</a>
    <br/><br/>
    <form action="tambah.php" method="post" name="form1">
    <table width="25%" >
    <tr> 
    <td>Nim</td>
    <td><input type="text" name="nim"></td>
    </tr>
    <tr> 
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
    </tr>
    <tr> 
    <td>Gender (L/P)</td>
    <td><input type="text" name="jkel"></td>
    </tr>
    <tr> 
    <td>Alamat</td>
    <td><input type="text" name="alamat"></td>
    </tr>
    <tr> 
    <td>Tgl Lahir</td>
    <td><input type="text" name="tgllhr"></td>
    </tr>
    <tr> 
    <td></td>
    <td><input type="submit" name="Submit" value="Tambah" class="btn btn-success"></td>
    </tr>
    </table>
    </form>
    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $alamat = $_POST['alamat'];
    $tgllhr = $_POST['tgllhr'];
    // include database connection file
    include_once("koneksi.php");
    // Insert user data into table
    $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr) 
    VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");
    // Show message when user added
    echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
    }
    ?>
    </body>
    </html>