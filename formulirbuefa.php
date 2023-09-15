<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <title>Pendaftaran</title>
        <link rel="stylesheet" href="cssbuefa.css">

        <script>
        function checkFileSize(input) {
        var maxSize = 2 * 1024 * 1024; // 2 MB
        if (input.files[0].size > maxSize) {
            alert("Ukuran file terlalu besar. Maksimum 2 MB.");
            input.value = ""; // Reset nilai input
        }
    }
        </script>
    </head>
    <body>
        <form action="proces.php" method="post">
        <div align="center">
        <div class="form" align="center">

        <table>
        <h1> FORMULIR PENDAFTARAN <br> LOMBA VOLLY</h1>
        <h2>ANTAR RT RW</h2> 
        <tr>
            <td>Nama Tim</td>
            <td>:</td>
            <td></td>
            <td><input type="text" name="tim" placeholder="Masukkan Nama Tim" style="width: 420px;" pattern="[A-Za-z\s]+" required></td>
        </tr>

        <tr>
            <td>Jumlah Anggota</td>
            <td>:</td>
            <td></td>
            <td><input type="text" name="jmlh" placeholder="Masukkan Jumlah Anggota" style="width: 420px;"></td> 
        </tr>

        <tr>
            <td>Asal</td>
            <td>:</td>
            <td>RT</td>
            <td><input type="number" name="RT" placeholder="Masukkan No RT" style="width: 420px;"></td> 
        </tr>

        <tr>
            <td></td>
            <td>:</td>
            <td>RW</td>
            <td><input type="number" name="RW" placeholder="Masukkan No RW" style="width: 420px;"></td> 
        </tr> 

        <tr>
            <td>Nama Ketua Tim</td>
            <td>:</td>
            <td></td>
            <td><input type="text" name="ketua" placeholder="Masukkan Nama Ketua" style="width: 420px;"></td>
        </tr>

        <tr>
            <td>No Hp Ketua Tim</td>
            <td>:</td>
            <td></td>
            <td><input type="text" name="hp" placeholder="Masukkan No Hp Ketua Tim" style="width: 420px;" pattern="[0-9]+" maxlength="11" required></td>
        </tr>

        <tr> 
            <td>Tanggal Pendaftaran</td>
            <td>:</td>
            <td></td>
            <td><input type="date"></td>
        </tr>

        <tr>
            <td>Upload Foto KTP Ketua Tim</td>
            <td>:</td>
            <td></td>
            <td><input type="file" onchange="checkFileSize(this)"></td>
        </tr>

        <tr>
            <td>Tim</td>
            <td>:</td>
            <td></td>
            <td><input type="radio" name="tim" value="laki laki" >Laki - Laki
            <input type="radio" name="tim" value="perempuan" >Perempuan</td> 
        </tr>

        </table>
        <br>
        <input class="submit" type="submit" value="KIRIM">
        </div>
        </div>
    </form>
    </body>
</html>