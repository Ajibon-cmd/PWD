<?php 
    include "koneksi.php";
    ?>
        <h3>Form Pencarian DATA KHS Dengan PHP </h3>
        <form action="" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
        </form>
    <?php 
        if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
        }
    ?>
        <table border="1">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Kode MK</th>
                <th>Nama Matakkuliah</th>
                <th>Nilai</th>
            </tr>
    <?php 
        if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $sql="select khs.NIM, mahasiswa.nama, khs.kodeMK, matakuliah.namaMK, khs.nilai from khs INNER join mahasiswa on mahasiswa.nim = khs.NIM INNER join matakuliah on khs.kodeMK = matakuliah.kode where khs.NIM like '%MHS01'";
        $tampil = mysqli_query($con,$sql);
        }else{
        $sql="select khs.NIM, mahasiswa.nama, khs.kodeMK, matakuliah.namaMK, khs.nilai from khs INNER join mahasiswa on mahasiswa.nim = khs.NIM INNER join matakuliah on khs.kodeMK = matakuliah.kode";
        $tampil = mysqli_query($con,$sql);
        }
        $no = 1;
        while($r = mysqli_fetch_array($tampil)){
    ?>
        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $r['NIM']; ?></td>
        <td><?php echo $r['nama']; ?></td>
        <td><?php echo $r['kodeMK']; ?></td>
        <td><?php echo $r['namaMK']; ?></td>
        <td><?php echo $r['nilai']; ?></td>
        </tr>
        <?php } ?>
</table>
