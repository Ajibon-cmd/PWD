<?php
// include database connection file
include_once("koneksi.php");
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{ 
 $nim = $_POST['nim'];
 $nama=$_POST['nama'];
 $jkel=$_POST['jkel'];
 $alamat=$_POST['alamat'];
 $tgllhr=$_POST['tgllhr'];
 // update user data
$result = mysqli_query($con, "UPDATE mahasiswa SET 
nama='$nama',jkel='$jkel',alamat='$alamat',tgllhr='$tgllhr' WHERE nim='$nim'");
 // Redirect to homepage to display updated user in list
header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['nim'];
// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");
while($user_data = mysqli_fetch_array($result))
{
$nim = $user_data['nim'];
$nama = $user_data['nama'];
$jkel = $user_data['jkel'];
$alamat = $user_data['alamat'];
$tgllhr = $user_data['tgllhr'];
}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Edit</title>
    </head>
    <body>
    <a href="index.php" class="btn btn-primary mt-3">Home</a>
    <br/><br/>
    <form name="update_mahasiswa" method="post" action="edit.php">
    <table>
    <tr> 
    <td>Nama</td>
    <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
    </tr>
    <tr> 
    <td>Gender</td>
    <td><input type="text" name="jkel" value=<?php echo $jkel;?>></td>
    </tr>
    <tr> 
    <td>alamat</td>
    <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
    </tr>
    <tr> 
    <td>Tgl Lahir</td>
    <td><input type="text" name="tgllhr" value=<?php echo $tgllhr;?>></td>
    </tr>
    <tr>
    <td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
    <td><input type="submit" name="update" value="Update" class="btn btn-success"></td>
    </tr>
    </table>
    </form>
</body>
</html>