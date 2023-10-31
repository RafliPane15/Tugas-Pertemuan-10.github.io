<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="Nama">Nama: </label>
            <input type="text" name="Nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="Alamat">Alamat: </label>
            <textarea name="Alamat"></textarea>
        </p>
        <p>
            <label for="Jenis_Kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="Jenis_Kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="Jenis_Kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="Agama">Agama: </label>
            <select name="Agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>