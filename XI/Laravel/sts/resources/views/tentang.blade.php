<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang-Kami</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .cont {
            margin: 30px;
            margin-left: 10%;
            margin-right: 10%;
        }

        .box1 {
            text-align: center
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

    <div class="cont">
        <div class="box1">
            <img width="200" height="194" style="border-radius: 15%" src="{{ asset('img/logo.png') }}" alt="Deskripsi Gambar">
        </div>
        <div class="box2">
            <h2>Tentang Amani Rumah Belajar ↓</h2>
            <p>Amani Rumah Belajar adalah lembaga pelatihan kerja swasta yang beroperasi resmi sejak tahun 2008, Memiliki izin  DIKNAS, DISNAKER dan TERAKREDITASI. Amani Rumah Belajar saat ini berkantor di Ruko King Plasa Blok D No.1 Batu Aji, Kota Batam. Amani Rumah Belajar Fokus melatih calon tenaga kerja yang handal SIAP KERJA dan <span style="font-weight: bold">BERWIRAUSAHA.</span></p>
            <p>Alhamdulillah saat ini kami memiliki instruktur yang berkompeten dibidangnya dari mulai menjahit, garmen, batik, merajut, membatik, craft dan masih banyak lainnya.</p>
            <p>Trainer maupun instruktur kami pernah menjuarai beberapa perlombaan, diantaranya :</p>
            <ol style="list-style-type: disc">
                <li>Mengikuti Lomba KKIN ( Kompetisi Keterampilan Instruktur Nasional ) Tingkat RegionalYang Diselengarakan Di BLK Padang Pada Tahun 2017, Mendapat Peringkat Juara 3.
                    Juara Harapan 2 Pada Lomba Apresiasi PTK PAUDNI Instruktur Tata Busana Tingkat Nasional Di Bandung Tahun 2014.</li>
                <li>Juara harapan 1 lomba Apresiasi Instruktur Kursus dan Pelatihan tingkat Nasional DPP Forum PLKP di Jakarta tahun 2023
                </li>
                <li>Sampai Saat Ini Lembaga Kami Telah Memiliki lebih dari Seribu Lulusan, Yang Bekerja Di Perusahaan Dan Berwirausaha.
                </li>
            </ol>
        </div>
    </div>

    <footer style="border-top: 1px dashed #CDBF98;">
        <p style="color: #CDBF98">Copyright©2024 Amani Rumah Belajar</p>
    </footer>
</body>
</html> 