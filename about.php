<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerita Bersama Bintang</title>
    <link rel="icon" href="favicon.png" type="image/png">

    <style>
        /* Reset margin dan padding untuk semua elemen */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9; /* Warna latar belakang lembut */
            color: #333;
            line-height: 1.6;
            margin: 0;
        }

        header {
            background-color: #3498db; /* Warna header biru */
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            font-size: 2.5em;
            font-weight: bold;
        }

        section {
            padding: 20px 10px;
            margin: 10px 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        section h2 {
            font-size: 1.5em;
            color: #3498db;
            margin-bottom: 20px;
            text-align: center;
        }

        section p, section ul {
            font-size: 1.1em;
            color: #555;
            line-height: 1.8;
        }

        section ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        section img {
            width: 100%;
            max-width: 200px;
            border-radius: 200px;
            margin: 20px 0;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            display: inline-block;
            padding: 8px 8px;
            background-color: #2980b9;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.em;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .cta-button:hover {
            background-color: #3498db;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }

        footer p {
            font-size: 1em;
        }

        /* Style untuk mobile */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            section {
                padding: 10px;
            }

            section h2 {
                font-size: 1.8em;
            }
        }

    </style>
</head>
<body>
<?php include "Layout/header.html" ?>

    <!-- Section Tentang Cerita Bersama Bintang -->
    <section>
        <h2>Tentang Cerita Bersama Bintang</h2>
        <p>Cerita Bersama Bintang adalah sebuah platform yang menyediakan ruang bagi siapa saja yang ingin berbagi pengalaman hidup, inspirasi, serta pelajaran berharga dalam bentuk tulisan. Situs ini didirikan untuk menghubungkan orang-orang dari berbagai latar belakang yang memiliki kisah dan pemikiran berharga yang layak untuk dibagikan.</p>
        <p>Melalui Cerita Bersama Bintang, pengunjung dapat mengirimkan cerita mereka sendiri, membaca pengalaman orang lain, dan berinteraksi dalam komunitas yang saling mendukung. Platform ini bertujuan untuk menjadi sumber inspirasi, hiburan, serta pembelajaran yang dapat memberikan manfaat bagi setiap pembacanya.</p>
        <p>Cerita Bersama Bintang bukan hanya sekadar tempat berbagi cerita, tetapi juga wadah untuk menyebarkan cerita inspiratif, pengalaman hidup, dan karya sastra dari berbagai kalangan. Kami percaya bahwa setiap cerita memiliki kekuatan untuk menginspirasi, menyatukan, dan memberikan dampak positif bagi banyak orang.</p>
    </section>

    <!-- Section Bagaimana Kami Memulai -->
    <section>
        <h2>Bagaimana Kami Memulai</h2>
        <p>Website ini lahir dari keinginan saya, Sri Bintang Maharani, untuk menyediakan ruang bagi siapa saja yang ingin berbagi kisah dan pengalaman hidup. Sebagai seorang mahasiswa yang menyukai literasi, saya ingin membantu orang lain mengekspresikan cerita mereka melalui kata-kata.</p>
    </section>

    <!-- Section Visi Kami -->
    <section>
        <h2>Visi Kami</h2>
        <p>Menjadi platform terdepan dalam menyebarkan cerita-cerita inspiratif yang menghubungkan hati banyak orang.</p>
    </section>

    <!-- Section Misi Kami -->
    <section>
        <h2>Misi Kami</h2>
        <ul>
            <li>Menyediakan wadah aman untuk berbagi kisah pribadi dan karya sastra.</li>
            <li>Menginspirasi melalui cerita-cerita nyata dari berbagai latar belakang.</li>
            <li>Mendorong kreativitas dan kecintaan terhadap literasi.</li>
        </ul>
    </section>

    <!-- Section Siapa di Balik Cerita Bersama Bintang -->
    <section>
        <h2>Siapa di Balik Cerita Bersama Bintang?</h2>
        <img src="foto-bintang.jpg" alt="Sri Bintang Maharani">
        <p><strong>Sri Bintang Maharani</strong> - Mahasiswa Ilmu Perpustakaan di Universitas Islam Negeri Imam Bonjol Padang. Saya memiliki semangat untuk mendukung literasi dan berbagi cerita dari berbagai perspektif. Cerita Bersama Bintang adalah mimpi saya yang menjadi kenyataan.</p>
    </section>

    <!-- Section Nilai yang Kami Pegang -->
    <section>
        <h2>Nilai yang Kami Pegang</h2>
        <ul>
            <li><strong>Inklusivitas:</strong> Setiap cerita berharga dan layak untuk didengar.</li>
            <li><strong>Keberanian:</strong> Memberikan ruang bagi mereka yang berani berbagi pengalaman hidupnya.</li>
            <li><strong>Inspirasi:</strong> Membawa dampak positif melalui kata-kata.</li>
        </ul>
    </section>

    <!-- Section Galeri Kami -->
    <section>
        <h2>Galeri Kami</h2>
        <img src="kegiatan1.jpg" alt="Kegiatan Cerita Bersama Bintang">
    </section>

    <!-- Section Bergabung dengan Kami -->
    <section>
        <h2>Bergabung dengan Kami!</h2>
        <p>Siap berbagi cerita Anda? Klik <a href="contact.php" class="cta-button">Hubungi kami</a> atau kirimkan cerita Anda dengan cara klik <a href="submit.html" class="cta-button">Kirim Cerita</a>.</p>
        <p>Ikuti kami juga di media sosial untuk mendapatkan update terbaru!</p>
    </section>

    <?php include "Layout/footer.html" ?>

</body>
</html>
