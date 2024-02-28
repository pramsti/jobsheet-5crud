<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran siswa baru</title>
    <link rel="stylesheet" href="daftar.css">
</head>
<body>
    <header>
            <h3>formulir prndaftaran siswa baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
    <fieldset>

    <p>
        <label for="nama">nama : </label>
        <input type="text" name="nama" placeholder="nama lengkap"/>
    </p>

    <p>
        <label for="Nisn">NISN : </label>
        <textarea name="nisn"></textarea>
    </p>

    <p>
        <label for="jenis_kelamin">jenis kelamin : </label>
        <label><input type="radio" name="jenis_kelamin" value="lanang"> lanang</label>
        <label><input type="radio" name="jenis_kelamin" value="wadon"> wadon</label>
    </p>

    <p>
        <label for="alamat">alamat : </label>
        <textarea name="alamat"></textarea>
    </p>

    <p>
        <label for="sekolah_asal">sekolah asal : </label>
        <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
    </p>

    <p>
        <input type="submit" value="daftar" name="daftar" />
    </p>
    </fieldset>

    </form>
    
</body>
</html>