<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>

    <!-- NAVBAR -->
    @include('layouts.navbar')
    <!-- /NAVBAR -->


    <!-- /CONTENT -->
    <!-- BAGIAN KONTEN -->
    <style>
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba();
        }

        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 200px;
            object-fit: cover;
        }

        .card body {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
        }

        .section {
            padding: 60px 0;
        }

        .card title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
        }

        .card text {
            font-size: 1.5rem;
            color: #666;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .navbar {
            margin-bottom: 20px;
        }

        footer {
            background-color: #333;
            /* Warna latar belakang footer */
            color: #f9f9f9;
            /* Warna teks footer */
            padding: 20px 0;
            /* Padding atas dan bawah */
        }

        footer p {
            margin-bottom: 0;
            /* Menghilangkan margin bawah untuk paragraf dalam footer */
        }

        /* CSS */
        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 17px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
    <!--awal jumbotron-->
    <div class="jumbotron mb-5 text-success">
        <div class="container">
            <img src="https://i.ibb.co.com/pWQvFZD/pngegg.png" alt="..." align="right" width="100">
            <p>
            <h1>
                Selamat Datang Di Website
                <br>NusantaraSchool
                </p>
            </h1>
        </div>
    </div>
    </div>
    <!--akhir jumbotron-->
    <br>
    <!--Awal layout-->
    <div class="container text-dark bg-white">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    <br>Tempat untuk Belajar, Fisik dan Mental Untuk Menjadi Militer
                </h1>
                <p>Sekolah NusantaraSchool menyediakan lingkungan belajar yang mendukung dan inspiratif bagi siswa-siswi kami. Kami berkomitmen untuk memberikan pendidikan berkualitas dan mempersiapkan generasi mendatang untuk meraih kesuksesan.</p>
            </div>
            <div class="col-md-4 mt-4">
            </div>
        </div>
    </div>
</div>

    <!--Akhir Layout-->
    <br>
    <!--Awal title-->
    <div class="section">
        <div class="container">
            <!-- ROW 1 -->
            <div class="col-12 mb-4 text-center">
                <h2>Berita Terbaru Seputar Pendidikan</h2>
            </div>
            <div class="row">
                @foreach ( $artikel as $data)
                <div class="col-4">
                    <div class="card " style="width: 20rem;">
                        <img src="{{asset ('/storage/artikels/' . $data->image )}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$data ->judul}}</h5>
                            <p class="card-title">{{$data ->tanggal}}</p>
                            <p class="card-title">{{$data ->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--akhir title-->
    <!--teman-->
    <!--Awal Rating-->
    <center>
    <h2>Kerjasama Industri</h2>
    </center>
    <div class="rating mb-5 bg-success">
        <div class="container mt-5 mb-5">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-car-front"></i>
                        <h3>
                            <p>Toyota</p>
                        </h3>
                        <h3><b>
                                <p>Sejak 2014</p>
                            </b></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-car-front"></i>
                        <h3>
                            <p>Mitsubishi</p>
                        </h3>
                        <h3>
                            <p><b>Sejak 2015</b></p>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-truck"></i>
                        <h3>
                            <p>Fuso</p>
                        </h3>
                        <h3>
                            <p><b>Sejak 2016</b></p>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-bicycle"></i>
                        <h3>
                            <p>Suzuki</p>
                        </h3>
                        <h3>
                            <p><b>Sejak 2017</b></p>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-bicycle"></i>
                        <h3>
                            <p>Yamaha</p>
                        </h3>
                        <h3>
                            <p><b>Sejak 2018</b></p>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-bicycle"></i>
                        <h3>
                            <p>Honda</p>
                        </h3>
                        <h3>
                            <p><b>Sejak 2019</b></p>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    @include('layouts.footer')
    <!-- /FOOTER -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>