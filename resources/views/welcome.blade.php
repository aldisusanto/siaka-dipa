<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="icon" href="{{ asset('admin/assets/dist/img/logo-dipa.png')}}">
    <title>Sistem Informasi Akademik Dipanegara</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <!-- font awesome cdn -->
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/dist/css/style.css')}}"/>
    <!-- jquery cdn -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 navbar ">

            <a href="#" class="logo navbar-brand text-white offset-md-2">
                <img src="{{ asset('admin/assets/dist/img/logo-dipa.png')}}" style="width: 60px"><span
                    style="font-family: Verdana"> SIAKA DIPANEGARA</span></a>
            <ul class="nav">
                <li class="nav-item"><a href="{{ route('landing')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Feedback</a></li>
                <li class="nav-item"><a href="{{ route('login')}}" class="btn btn-primary"
                                        style="border-radius: 20px"><i
                            class="fas fa-users"></i> LOGIN</a></li>
            </ul>
        </div>

        <!-- slider banner	 -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="info">
                        <h1>STMIK DIPANEGARA</h1>
                        <p>Sekolah Tinggi Manajemen Informatika & Komputer Dipanegara</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="info">
                        <h1>SIAKA</h1>
                        <p>Sistem Informasi Manajemen Akademik</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="info">
                        <h1>PROFESSIONAL</h1>
                        <p>Menciptakan Lulusan yang Professional</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>


<!-- scripts -->
<!-- bootstrap javascript cdn -->
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
