

<html lang="en">
<style>
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.biodata {
    margin-bottom: 20px;
}

.footer {
    text-align: center;
    margin-top: 30px;
    color: #777;
}
<style/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Biodata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>PROGRAM BIODATA</h1>
        <?php
        // SOAL 1 Program Biodata

        // Variabel Biodata
        $nama = "John Doe";
        $kelas = "XI IPA 1";
        $tempat_lahir = "Jakarta";
        $tanggal_lahir = "1 Januari 2000";
        $alamat_rumah = "Jl. Kenangan No. 123";
        $nomer_hp = "081234567890";
        $hobi = "Bermain musik";
        $cita_cita = "Menjadi dokter";
        $makanan_favorit = "Nasi goreng";
        $rencana_setelah_lulus = "Kuliah di luar negeri";
        $tempat_pkl = "PT. XYZ Teknologi";

        // Menampilkan Biodata
        echo "<div class='biodata'>";
        echo "<p><strong>Nama:</strong> " . $nama . "</p>";
        echo "<p><strong>Kelas:</strong> " . $kelas . "</p>";
        echo "<p><strong>Tempat Lahir:</strong> " . $tempat_lahir . "</p>";
        echo "<p><strong>Tanggal Lahir:</strong> " . $tanggal_lahir . "</p>";
        echo "<p><strong>Alamat Rumah:</strong> " . $alamat_rumah . "</p>";
        echo "<p><strong>Nomer HP:</strong> " . $nomer_hp . "</p>";
        echo "<p><strong>Hobi:</strong> " . $hobi . "</p>";
        echo "<p><strong>Cita-Cita:</strong> " . $cita_cita . "</p>";
        echo "<p><strong>Makanan Favorit:</strong> " . $makanan_favorit . "</p>";
        echo "<p><strong>Rencana Setelah Lulus:</strong> " . $rencana_setelah_lulus . "</p>";
        echo "<p><strong>Tempat PKL:</strong> " . $tempat_pkl . "</p>";
        echo "</div>";

        // Tulisan paling bawah
        $nama_dosen = "Very Setiawan";
        echo "<p class='footer'>Tugas Akhir Pemrograman Web yang diampu Oleh Bapak " . $nama_dosen . "</p>";
        ?>
    </div>
</body>
</html>
