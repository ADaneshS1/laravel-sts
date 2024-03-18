<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak-Kami</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .cont {
            background-color: #192436;
        }

        .box1 {
            text-align: center;
        }

        h1 {
            font-size: 60px;
            color: #CDBF98
        }
        h2,h3{
            color: white
        }
        p {
            color: #CDBF98
        }
        footer {
            padding: 20px 0;
            background-color: #192436;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <img width="60" height="54" class="d-inline-block align-text-top" src="{{ asset('img/logo.png') }}" alt="Deskripsi Gambar">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tentang-kami">Tentang Kami</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/kontak-kami">Kontak Kami</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <div class="cont pt-5 pb-5">
        <div class="box1">
            <h6 style="letter-spacing: 14px; color:white">CONTACT</h6>
            <h2>0856 6668 114</h2>
            <h2>0895 3915 39188</h2>
            <h3>Ruko King Plasa Blok D No.1 Batu Aji, Kota Batam</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.1540972563976!2d103.9773563!3d1.0455001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d2c00000069%3A0xd93acea36fc578ff!2sKursus%20Menjahit%20%26%20Bordir%20Batam!5e0!3m2!1sid!2sid!4v1710730143416!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <footer style="border-top: 1px dashed #CDBF98;">
        <p>Copyright©2024 Amani Rumah Belajar</p>
    </footer>
</body>
</html> 