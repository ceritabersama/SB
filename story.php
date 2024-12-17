<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerita Bersama Bintang</title>
    <link rel="icon" href="favicon.png" type="image/png">

    <style>
        /* CSS untuk mengatur tombol Kirim Ceritamu */
        .cta-button {
            display: inline-block; /* Membuat elemen seperti kotak */
            padding: 20px 37px; /* Ruang dalam kotak (atas-bawah, kiri-kanan) */
            background-color: #3498db; /* Warna latar belakang kotak */
            color: white; /* Warna teks */
            text-decoration: none; /* Menghapus garis bawah dari link */
            font-size: 19px; /* Ukuran font */
            border-radius: 8px; /* Membuat sudut melengkung */
            border: 2px solid #2980b9; /* Menambahkan border pada kotak */
            text-align: center; /* Meratakan teks di dalam kotak */
            box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* Menambahkan bayangan */
            transition: all 0.3s ease; /* Animasi saat hover */
        }

        .cta-button:hover {
            background-color: #2980b9; /* Warna berubah saat di-hover */
            box-shadow: 0 6px 10px rgba(0,0,0,0.15); /* Efek bayangan bertambah saat hover */
        }

        /* CSS untuk mengatur tata letak tombol agar berada di tengah */
        .center-button {
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; /* Tinggi layar penuh */
        }

        /* Container utama untuk grid */
        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Membuat 3 kolom */
            gap: 20px; /* Jarak antar kolom dan baris */
            padding: 23px; /* Padding pada container */
        }

        /* Setiap post dengan ukuran yang diperkecil menjadi 4cm x 6cm */
        .post {
            width: 9cm; /* Lebar kolom 4cm */
            height: 9cm; /* Tinggi kolom 6cm */
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            background-color: #f9f9f9;
            cursor: pointer; /* Menambahkan efek kursor saat dihover atau diklik */
            transition: transform 0.2s ease-in-out; /* Animasi saat diklik */
            display: flex;
            flex-direction: column; /* Menyusun gambar dan teks secara vertikal */
            justify-content: space-between; /* Memberikan ruang antara gambar dan teks */
        }

        /* Efek saat post di-klik */
        .post:hover {
            transform: scale(1.05); /* Membesar sedikit saat dihover */
        }

        .post img {
            width: 100%;
            height: 60%; /* Membatasi gambar supaya tidak menutupi teks */
            object-fit: cover; /* Agar gambar mengisi kolom tanpa merusak proporsi */
        }

        .post-info {
            padding: 10px;
            text-align: center; /* Meratakan teks di tengah */
            flex: 1; /* Agar teks selalu terlihat dan menyesuaikan ruang yang tersedia */
        }

        .post-info h2 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .post-info .meta {
            font-size: 12px;
            color: #777;
        }

        /* Style untuk tombol */
        .cta-button {
            display: inline-block;
            padding: 15px 25px; /* Menentukan padding agar tombol tidak terlalu besar */
            background-color: #4CAF50; /* Warna latar belakang tombol */
            color: white; /* Warna teks tombol */
            text-align: center;
            border-radius: 5px; /* Sudut melengkung */
            text-decoration: none; /* Menghilangkan garis bawah */
            font-size: 15px; /* Ukuran teks di dalam tombol */
            transition: background-color 0.3s ease; /* Efek transisi saat hover */
        }

        /* Efek saat dihover */
        .cta-button:hover {
            background-color: #45a049; /* Mengubah warna saat hover */
        }

        /* Mengatur ukuran h2 dalam tombol */
        .cta-button h2 {
            margin: 0; /* Menghapus margin default pada h2 */
            font-size: 14px; /* Ukuran font h2 */
        }
    </style>
</head>



    

<body>

    <?php include "Layout/header.html"; ?>

    <main>
        

        <!-- Container Utama -->
        <div class="container">
            <!-- Kolom Konten -->
            <div class="post">
                <img src="senang.png" alt="Gambar Happy Story">
                <div class="post-info">
                    <a href="happy-story.php" class="cta-button"><h2>Happy Story</h2></a>
                    <p class="meta">Cerita yang menyampaikan kebahagiaan, harapan, atau peristiwa menyenangkan yang membawa perasaan positif kepada pembaca.</p>
                </div>
            </div>

            <div class="post">
                <img src="sedih.png" alt="Gambar Sad Story">
                <div class="post-info">
                    <a href="sad-story.php" class="cta-button"><h2>Sad Story</h2></a>
                    <p class="meta">Kisah yang menggugah emosi dan sering kali berfokus pada pengalaman kehilangan, kesedihan, atau kejadian yang menyentuh hati.</p>
                </div>
            </div>

            <div class="post">
                <img src="horor.png" alt="Gambar Horor Story">
                <div class="post-info">
                    <a href="horor-story.php" class="cta-button"><h2>Horor Story</h2></a>
                    <p class="meta">Cerita yang dirancang untuk menakuti atau menciptakan ketegangan, dengan elemen misteri, supranatural, atau kejadian menakutkan.</p>
                </div>
            </div>

            <div class="post">
                <img src="romantic.png" alt="Gambar Romantic Story">
                <div class="post-info">
                    <a href="romantic-story.php" class="cta-button"><h2>Romantic Story</h2></a>
                    <p class="meta">Kisah yang berfokus pada hubungan cinta dan perasaan antara karakter, biasanya mengangkat tema cinta dan hubungan emosional.</p>
                </div>
            </div>

            <div class="post">
                <img src="komedi.png" alt="Gambar Comedy Story">
                <div class="post-info">
                    <a href="comedi-story.php" class="cta-button"><h2>Comedy Story</h2></a>
                    <p class="meta">Cerita yang bertujuan menghibur pembaca dengan humor dan kejadian lucu, sering kali menyajikan karakter yang unik atau situasi konyol.</p>
                </div>
            </div>

            <div class="post">
                <img src="random.png" alt="Gambar Random Story">
                <div class="post-info">
                    <a href="random-story.php" class="cta-button"><h2>Random Story</h2></a>
                    <p class="meta">Cerita dengan tema atau isi yang acak, tidak terikat pada genre tertentu, bisa mengejutkan atau tidak terduga.</p>
                </div>
            </div>
        </div>

    </main>

    <?php include "Layout/footer.html"; ?>

</body>
</html>
