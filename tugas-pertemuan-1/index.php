<!DOCTYPE html>
<html>

<head>
    <title>Form Processing PHP</title>
</head>

<body>

    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Nilai Ujian:</label><br>
        <input type="number" name="nilai" required><br><br>

        <button type="submit" name="submit">Proses Nilai</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        if ($nilai >= 70) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }

        echo "<h3>Hasil Pengolahan Data</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Nilai: " . $nilai . "<br>";
        echo "Status: <strong>" . $status . "</strong>";
    }
    ?>

</body>

</html>