<?php include("config.php");?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="casis.css">
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th>Sekolah asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT * FROM data_casis";
$query = mysqli_query($db, $sql);

while($siswa = mysqli_fetch_array($query)){
    echo "<tr>";

    echo "<td>".$siswa['ID']."</td>";
    echo "<td>".$siswa['nama']."</td>";
    echo "<td>".$siswa['nisn']."</td>";
    echo "<td>".$siswa['jenis_kelamin']."</td>";
    echo "<td>".$siswa['alamat']."</td>";
    echo "<td>".$siswa['sekolah_asal']."</td>";

    echo "<td>";
    echo "<a href='from-edit.php?id".$siswa['ID']."'>Edit</a> |";
    echo "<a href='hapus.php?id=".$siswa['ID']."'>hapus</a>";
    echo "</td>";

    echo "</tr>";

}
        ?>
    </tbody>
</table>
<p>total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>