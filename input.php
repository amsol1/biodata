<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        ?>
        <h1 align="center">Input Biodata</h1>
<fieldset style="width: 50%; margin: auto;">
<legend>Form Input Biodata</legend>
<form action="simpan.php" method="post">
<p>
Nama Lengkap
<input type="text" name="nama" required />
</p>
<p>
Jenis Kelamin
<input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" />
<label for="laki-laki">Laki-Laki</label>
<input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan"
/><label for="perempuan">Perempuan</label>
</p>
<p>
Alamat Lengkap
<textarea name="alamat" cols="50" required></textarea>
</p>
<p>
Nomor Handphone
<input type="text" name="no_hp" required />
</p>
<p>
<input type="submit" value="Simpan" />
<input type="reset" value="Reset" onclick="return confirm('hapus data yang telah
diinput?')">
</p>
</form>
</fieldset>
<center><a href="index.html"> << Tabel Biodata</a></center>
    </body>
</html>
