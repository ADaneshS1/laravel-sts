<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .cont {
            background-color: #59616E;
        }

        .box1 {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .img-fluid {
            width: 25%;
            height: 10%;
        }

        h1 {
            font-size: 60px;
            color: #CDBF98
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
            <div class="bc1">
                <h1>Amani Rumah Belajar</h1>
                <p>Amani rumah belajar melatih calon tenaga kerja yang handal SIAP KERJA dan BERWIRAUSAHA</p>
                <button>Ingin Tahu Nih</button>
            </div>
            <img class="img-fluid rounded m-0 p-0" src="{{ asset('img/img.jpg') }}" alt="Deskripsi Gambar">
        </div>
    </div>

    <footer style="border-top: 1px dashed #CDBF98;">
        <p>Copyright©2024 Amani Rumah Belajar</p>
    </footer>
</body>
</html> 