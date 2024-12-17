<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerita Bersama Bintang</title>
    <link rel="icon" href="favicon.png" type="image/png">
    
    <?php include "Layout/header.html" ?>

    <style>
        /* Styling Umum */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        main {
            padding: 40px;
            max-width: 1000px;
            margin: 0 auto;
        }

        h2, h3 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        p {
            color: #7f8c8d;
            font-size: 16px;
            line-height: 1.6;
        }

        a {
            color: #2980b9;
            text-decoration: none;
        }

        a:hover {
            color: #3498db;
        }

        /* Styling Section Kontak */
        .contact-info, .faq, .contact-person {
            background-color: #fff;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-info a, .contact-person a {
            font-weight: bold;
            color: #2980b9;
        }

        .contact-info p, .contact-person p {
            margin-bottom: 10px;
        }

        .faq p {
            margin-bottom: 15px;
        }

        /* Styling untuk tombol CTA */
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2980b9;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #3498db;
        }

        /* Responsif untuk perangkat mobile */
        @media screen and (max-width: 768px) {
            main {
                padding: 20px;
            }

            .contact-info, .faq, .contact-person {
                padding: 20px;
            }

            h2, h3 {
                font-size: 22px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>

    <main>
        <section class="contact-info">
            <h2>Hubungi Kami</h2>
            <p><strong>Alamat:</strong> Jl. Contoh No. 123, Kota Padang, Indonesia</p>
            <p><strong>Email:</strong> <a href="mailto:ceritabersamabintang@gmail.com">ceritabersamabintang@gmail.com</a></p>
            <p><strong>Telepon/WhatsApp:</strong> <a href="tel:+62877766752219">087766752219</a></p>
            <p><strong>Ikuti kami di:</strong> 
                <a href="https://www.instagram.com/maharani_5121" target="_blank">Instagram</a> | 
                <a href="https://www.tiktok.com/@btng.mr1" target="_blank">Tiktok</a>
            </p>
        </section>

        <section class="faq">
            <h3>Pertanyaan yang Sering Diajukan</h3>
            <p><strong>Tanya:</strong> Bagaimana cara mengirim cerita ke website ini?</p>
            <p><strong>Jawab:</strong> Anda dapat mengirimkan cerita dengan klik Kirim Cerita atau menghubungi kami melalui email.</p>

            <p><strong>Siap untuk memulai?</strong> Hubungi kami melalui email atau klik Kirim Cerita di bawah ini!</p>
        </section>

      

        <section class="cta">
            <a href="submit.html" class="cta-button">Kirim Ceritamu</a>
        </section>
    </main>

    <?php include "Layout/footer.html" ?>

</body>
</html>
