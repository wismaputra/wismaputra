<html lang="en">
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
        $nama = "Wisma Putra";
        $kelas = "XI TKJ 2";
        $tempat_lahir = "BLITAR";
        $tanggal_lahir = "15 Mei 2006";
        $alamat_rumah = "Desa Sumberagung RT4 RW6";
        $nomer_hp = "085235391996";
        $hobi = "Sepak Bola";
        $cita_cita = "Menjadi Orang pertama yang pergi ke galaxy andromeda";
        $makanan_favorit = "Nasi jala mak biyadab";
        $rencana_setelah_lulus = "Kerja";
        $tempat_pkl = "PT hernawan adiwilaga solution";

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
        $nama_pengampu= "Very Setiawan";
        echo "<p class='footer'>Tugas Akhir Pemrograman Web yang diampu Oleh Bapak " . $nama_pengampu . "</p>";
        ?>
    </div>
</body>
</html>