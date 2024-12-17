<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerita Bersama Bintang</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <?php include "Layout/header.html" ?>



    <?php
    // Pastikan data POST diterima dengan baik
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan data dari form
        $judul = isset($_POST['judul']) ? $_POST['judul'] : 'Judul Tidak Ditemukan';
        $isi = isset($_POST['cerita']) ? $_POST['cerita'] : 'Isi Cerita Tidak Ditemukan';
        $email = isset($_POST['email']) ? $_POST['email'] : ''; // Menangkap email (optional)
        
        // Mengirim email konfirmasi
        if (!empty($email)) {
            mail($email, "Cerita Anda Telah Dikirim", "Terima kasih telah mengirim cerita! Kami akan segera memprosesnya.");
        }
    }
    ?>

    <div class="post">
        <h2><?php echo htmlspecialchars($judul); ?></h2>
        <p><?php echo nl2br(htmlspecialchars($isi)); ?></p>
        
        <!-- Menampilkan gambar jika ada -->
        <?php
        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
            $gambar = $_FILES['gambar']['name'];
            move_uploaded_file($_FILES['gambar']['tmp_name'], 'uploads/' . $gambar);
            echo "<img src='uploads/$gambar' alt='Gambar Cerita'>";
        }
        ?>
    </div>


    <?php include "Layout/footer.html" ?>
</head>
</html>
