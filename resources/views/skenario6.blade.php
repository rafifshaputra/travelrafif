<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta content='user-scalable=0' name='viewport' />

 <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/rafifshaputra/image-gallery.slider/=edit -->
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/lightboxhome.js"></script>
    <script src="js/confirmationModal.js"></script>
    <script src="js/pemesananKamar.js"></script>
    <script src="js/detailPage.js"></script>
    <script type="text/javascript" src="js/skenario2js/slider.js"></script>
    <script src="js/confirmationModal.js"></script>
    <script src="js/confirmationModalDesk.js"></script>

    <script src="/js/skenario6js/gantiGambarModalDesktop.js"></script>
    <script src="/js/skenario6js/gantiGambarHomeDesktop.js"></script>
    <script src="js/skenario6js/previewHome.js"></script>


    <link rel="stylesheet" href="/css/skenario6.css">
    <link rel="stylesheet" href="/css/lightbox.css">
</head>

<body style="background-color:#F3F6F5">
 <!--INI HALAMAN DESKTOP-->
 <div class="desktop" id="desktop">
    <!-- NAVBAR-->
    <nav class="navbar navbar-default" style="background-color:#3A7765;">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:white;font-size:20px;">TRAVELRAF</a>
        </div>

    </div>
    </nav>
    <div class="contain" style="padding-top:2%;background-color:white;">
        <!--HEADER HOTEL INFO-->
        <div class="head" style="padding-left:3%;">
            <div style="float:right;padding-right:5%;"> <img src="img/icon/new.png" width="70" height="80"> </div>
            <div style="font-size:20px"><b> Hotel Indah </b><img src="/img/icon/bintang2.png" width="50px;"><br></div>
            <div style="padding-top:1%; font-size:16px;"> Jalan Bogor 123. Bogor Barat. 321 </div><br>
        </div>

        <!-- MAIN PICTURE-->
        <img src="/img/h8/hrlobi1.jpg"
        width="100%" style="height:60%"id="myImages">
        <br>

        <!--INI ROW UNTUK GAMBAR THUMBNAIL"-->
        <div class="rows" style="padding-top:1%;">
            <div class="column">
                <img id ="imgcol1d"onclick="gambarGanti1d();"src="/img/h8/hrlobi1.jpg" alt="Snow" style="width:100%;height:120px;opacity:1">
            </div>
            <div class="column">
                <img id ="imgcol2d" onclick="gambarGanti2d();" src="/img/h8/hrkolamrenang1r.jpg" alt="Forest" style="width:100%;height:120px;opacity:0.6">
            </div>
            <div class="column">
                <img id ="imgcol3d" onclick="gambarGanti3d();"  src="/img/h8/hrkamar1r.jpg" alt="Mountains" style="width:100%;height:120px;opacity:0.6">
            </div>
            <div class="column">
                <img id ="imgcol4d" onclick="gambarGanti4d();" src="/img/h8/hrrestaurant1r.jpg" alt="Mountains" style="width:100%;height:120px;opacity:0.6">
            </div>
            <div class="column" style=" position: relative;text-align: center;color: white;">

                <img id ="imgcol5d" onclick="gambarGanti5d();" src="/img/h8/hrrestaurant2r.jpg" alt="Mountains" style="width:100%;height:120px;">
            </div>
        </div>
        <br>
        <hr>
        <!-- ROW INFO KAMAR TERSEDIA-->
        <div class="rows" >
            <span style="font-size:16px;">
                Kamar tersedia dihari yang anda pilih !
            </span>
            <span style="padding-left:30%;">
                <a href="#pilihkamar"><button style="font-size:16px;"> Pilih Kamar anda </button></a>
            </span>
            <br>
        </div>
        <hr>
        <div class="rows" >
            <span style="font-size:18px;"> <b>Fasilitas Utama</b> </span><br><br>
        </div>
        <br>
        <div class="rows" style="padding-left:5%:">
            <div class="column" align="center"style="font-size:10px;">
                <img src="img/icon/food.png" width="60" height="60"><br><br>
                <span  style="font-size:14px;">Mini Restoran </span>
            </div>
            <div class="column" align="center"style="font-size:10px;">
                <img src="img/icon/wi-fi.png" width="60" height="60"><br><br>
                <span style="font-size:14px;">Wifi</span>
            </div>
            <div class="column"align="center" style="font-size:10px;">
                <img src="img/icon/24-hours.png" width="60" height="60"><br><br>
                <span  style="font-size:14px;">Room Service 24 Jam </span>
            </div>
            <div class="column" align="center"style="font-size:10px;">
                <img src="img/icon/car-parking.png" width="60" height="60"><br><br>
                <span style="font-size:14px;">Parkir</span>
            </div>
            <div class="column"align="center" >
                <img src="img/icon/elevator.png" width="60" height="60"><br><br>
                <span style="font-size:14px;">Lift </span>
            </div>
        </div>
        <br>
        <br>
    </div>
    <br>
    <!-- INI SECTION DESKRIPSI dan Kebijakan hotel -->

    <div class="contain" style="background-color:white;padding:20px;">
        <div class="row">
            <div class="column">
                <span style="font-size:16px;"><b>Deskripsi Hotel</b></span>
                <p style="padding:15px;font-size:14px;" align="justify">
                    Hotel Indah adalah pilihan terbaik untuk anda yang mencari penginapan yang terjangkau dengan pelayanan yang memuaskan.<br>
                <br>
                Dengan resepsionis yang tersedia 24 jam untuk melayani kamu, mulai dari check-in sampai check-out, atau melayani kebutuhan anda lainnya. anda
                tidak perlu ragu untuk mengajukan permintaan kepada resepsionis kami.
                <br><br>
                Tersedia WiFi pada area publik yang dapat membuat anda tetap terhubung dengan keluarga atau teman.
                </p>
            </div>
            <div class="column">
                <span style="font-size:16px;"><b>Kebijakan Hotel</b></span>
                <br>
                <ul style="padding-top:2%" class="a">
                    <li  style="padding:5px;font-size:14px;"> Check-in mulai dari jam 14.00</li>
                    <li  style="padding:5px;font-size:14px;"> Check-out maksimal jam 12.00</li>
                    <li  style="padding:5px;font-size:14px;"> Membawa identitas </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="pilihkamar"></div>
    <!-- INI SECTION PILIH KAMAR-->
    <br>
    <div style="background-color:white">
        <div class="contain" style="padding-top:2%;">
            <div class="row">
                <div class="column">
                    <span style="font-size:13px;">Check-in<br></span>
                    <span style="color:#4A4A4A;font-size:14px;"><img src="img/icon/timetable.png" width="20" height="20"> <b style="padding-left:1%">Jum, 16 Okt 2020 </b></span>
                </div>
                <div class="column">
                    <span style="font-size:13px;"> <img src="img/icon/sleep.png" width="20" height="20">2<br></span>
                    <span style="color:#4A4A4A;font-size:14px;"><b>Malam</b></span>
                </div>
                <div class="column">
                    <span style="font-size:13px;">Check-out<br></span>
                    <span style="color:#4A4A4A;font-size:14px;"><img src="img/icon/timetable.png" width="20" height="20"> <b style="padding-left:1%">Min, 18 Okt 2020 </b></span>
                </div>
                <div class="column">
                    <span style="font-size:13px;">Tamu dan Kamar<br></span>
                    <span style="color:#4A4A4A;font-size:14px;"><b >2 Tamu 1 Kamar</b></span>
                </div>
            </div>
            <hr>
            <span style="font-size:18px;"><b>Kamar di Hotel Indah</b> </span>
        </div>
        <br>
        <div class="contain" style="border-style: solid;
        border-width: medium;border-color:#F3F6F5;;">
            <div class="rows" >
                <!--KOLOM PERTAMA UNTUK FOTO KAMAR-->
                <div class="column">
                    <img src="img/h8/hrkamar1r.jpg" onclick="openModalz()"id="myBtn"alt="Snow" style="width:100%;height:200px;"><br>
                    <div class="rows" style="width:100%;padding-top:2%" >
                        <div class="column">
                            <img src="img/h8/hrkamar1r.jpg" onclick="openModalz()"alt="Snow" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="img/h8/kamarmandi2r.jpg" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="img/icon/noimage.png" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="img/icon/noimage.png" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                    </div>
                </div>

                <!--KOLOM KEDUA UNTUK JENIS KAMAR DAN INFO KAMAR DAN LAYANAN-->
                <div class="column" style="padding-left:2%;padding-top:1%">
                    <p style="font-size:16px;"> Deluxe Only Room Package</p>
                    <br>

                    <!--ROW UNTUK INFORMASI KAMAR DAN LAYANAN-->
                    <div class="rows" style="width:100%" >
                        <div class="column" style="font-size:14px;">
                            <b><p style="font-size:14px">Info Kamar </b> </p>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Max 2 Tamu <br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 1 Double Bed<br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 23 sqm<br>
                        </div>

                        <div class="column" style="font-size:14px;">
                            <b><p style="font-size:14px">Layanan</b> </p>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Max 2 Tamu <br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 1 Double Bed<br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 23 sqm<br>
                        </div>
                    </div>
                </div>

                <!--KOLOM KETIGA UNTUK KAMAR TERSISA DAN BUTTON PESAN-->
                <div class="column" style="padding-left:10%;padding-top:10%;font-size:12px;">
                    <span >
                        <button style="width:200px;" onclick="openModalz()"> <span style="font-size:14px;">Lihat Detail</span></button>
                    </span>
                </div>

            </div>
        </div>
        <br>
        <div class="contain" style="border-style: solid;
        border-width: medium;border-color:#F3F6F5;;">
            <div class="rows" >
                <!--KOLOM PERTAMA UNTUK FOTO KAMAR-->
                <div class="column">
                    <img src="img/h8/hrkamar1r.jpg"onclick="openModalz()" alt="Snow" style="width:100%;height:200px;"><br>
                    <div class="rows" style="width:100%;padding-top:2%" >
                        <div class="column">
                            <img src="img/h8/hrkamar1r.jpg" onclick="openModalz()"alt="Snow" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="img/h8/kamarmandi2r.jpg" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="img/icon/noimage.png" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="img/icon/noimage.png" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                    </div>
                </div>

                <!--KOLOM KEDUA UNTUK JENIS KAMAR DAN INFO KAMAR DAN LAYANAN-->
                <div class="column" style="padding-left:2%;padding-top:1%">
                    <p style="font-size:16px;"> Deluxe Room Breakfast Package</p>
                    <br>

                    <!--ROW UNTUK INFORMASI KAMAR DAN LAYANAN-->
                    <div class="rows" style="width:100%" >
                        <div class="column" style="font-size:14px;">
                            <b><p style="font-size:14px">Info Kamar </b> </p>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Max 2 Tamu <br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 1 Double Bed<br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 21 sqm<br>
                        </div>

                        <div class="column" style="font-size:14px;">
                            <b><p style="font-size:14px">Layanan</b> </p>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Max 2 Tamu <br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 1 Double Bed<br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 21 sqm<br>
                        </div>
                    </div>
                </div>

                <!--KOLOM KETIGA UNTUK KAMAR TERSISA DAN BUTTON PESAN-->
                <div class="column" style="padding-left:10%;padding-top:10%;font-size:12px;">
                    <span >
                        <button style="width:200px;" onclick="openModalz()"> <span style="font-size:14px;">Lihat Detail</span></button>
                    </span>
                </div>

            </div>
        </div>
        <br>

</div>
</div>

<!-- DATA UNTUK MOBILE HALAMAN AWAL -->
<div class="mobile" id="mobile" >
    <nav class="navbar navbar-default" style="background-color:#3A7765;">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:white;font-size:36px;">TRAVELRAF</a>
        </div>

    </div>
    </nav>
    <div class="contain" style="background-color:white;">

        <img id="myImage" width="100%" height="700px"src="/img/h8/hrlobi1.jpg">
        <br>
        <br>
        <!--ROW GAMBAR THUMBNAIL-->
        <div class="rows" >
            <div class="column">
                <img id="imgcol1"onclick="gambarGanti1()" src="/img/h8/hrlobi1.jpg" alt="Snow" style="width:100%;height:150px;">
            </div>
            <div class="column">
                <img id="imgcol2" onclick="gambarGanti2();" src="/img/h8/hrkolamrenang1r.jpg" alt="Mountains" style="width:100%;height:150px;opacity:0.6">
            </div>
            <div class="column">
                <img id="imgcol3" onclick="gambarGanti3();"src="/img/h8/hrkamar1r.jpg" alt="Mountains" style="width:100%;height:150px;opacity:0.6">
            </div>
            <div class="column">
                <img id="imgcol4" onclick="gambarGanti4();"src="/img/h8/hrrestaurant1r.jpg" alt="Forest" style="width:100%;height:150px;opacity:0.6">
            </div>
            <div class="column" >
                <img id="imgcol5" onclick="gambarGanti5();"src="/img/h8/hrrestaurant2r.jpg" alt="Forest" style="width:100%;height:150px;opacity:0.6">
            </div>
        </div>
        <br>
    <br>

    <div class="head" style="padding-left:3%;">
        <div style="float:right;padding-right:7%;"> <img src="img/icon/new.png" width="120" height="140"> </div>
        <div style="font-size:42px"><b>Hotel Indah</b><img style="padding-left:1%;"src="img/icon/bintang2.png" width="100px;"><br></div><br>
        <b><span style="font-size:36px"> <img src="https://imgur.com/XW23AfN.png" alt="Mountains" style="width:35px">
            Lokasi</b></span>
        <div style="padding-top:1%; font-size:32px;"> Jalan Bogor 123. Bogor Barat. 321 </div><br>
    </div>
    <hr>
    <br>
    <b><span style="font-size:36px">Deskripsi </span><br></b>
      <p style="padding:15px;font-size:32px;" align="justify">
        Hotel Indah adalah pilihan terbaik untuk anda yang mencari penginapan yang terjangkau dengan pelayanan yang memuaskan.<br>
        <br>
        Dengan resepsionis yang tersedia 24 jam untuk melayani kamu, mulai dari check-in sampai check-out, atau melayani kebutuhan anda lainnya. anda
        tidak perlu ragu untuk mengajukan permintaan kepada resepsionis kami.
        <br><br>
        Tersedia WiFi pada area publik yang dapat membuat anda tetap terhubung dengan keluarga atau teman.
      </p>
    <hr>
    <br>
    <b><span style="font-size:36px">Fasilitas Umum</span><br></b>
      <p style="padding:15px;font-size:32px;" align="justify">
        <div class="row" style="padding-left:25px;" >
            <div class="column" style="flex:20%;width:16.5%;" >
                <span><img src="img/icon/food.png" width="100" height="100"></span><br><br>
                <span style="font-size:24px;">Mini Restoran </span>
            </div>
            <div class="column" align="center"  style="flex:20%;width:20%;" >
                <span><img src="img/icon/wi-fi.png" width="100" height="100"></span><br><br>
                <span style="font-size:24px;align-items:center;" >Wifi</span>

            </div>
            <div class="column"   align="center"style="flex:20%;width:20%;">
                <span><img src="img/icon/24-hours.png" width="100" height="100"></span><br><br>
                <span style="font-size:24px;align-items:center;" >Resepsionis 24 Jam</span>

            </div>
            <div class="column"  align="center" style="flex:20%;width:20%;" >
                <span><img src="img/icon/car-parking.png" width="100" height="100"></span><br><br>
                <span style="font-size:24px;align-items:center;" >Parkir</span>

            </div>
            <div class="column"   style="flex:20%;width:20%;" >
                <span><img src="img/icon/elevator.png" width="100" height="100"></span><br><br>
                <span style="font-size:24px;align-items:center;" >Elevator</span>
            </div>

        </div>
      </p>
    <hr>
    <br>
    <b><span style="font-size:36px">Kebijakan Hotel</span><br></b>
    <br>
    <ul class="a">
        <li  style="padding:5px;font-size:32px;"> Check-in mulai dari jam 14.00</li>
        <li  style="padding:5px;font-size:32px;"> Check-out maksimal jam 12.00</li>
        <li  style="padding:5px;font-size:32px;"> Membawa identitas </li>
    </ul>
    <br>
    <br>
    <br>
    <hr>

    <nav id="navhomebawah"class="shadow-lg navbar fixed-bottom navbar-light rounded" style="background-color:#EFECEC;padding-bottom:50px;padding-top:50px;">
        <a class="navbar-brand" href="#" style="font-size:32px;">Kamar <span style="color:red;">masih tersedia ! </span>
            <span style="padding-left:45%;">
            <button onclick="myFunction();"> Lihat Kamar </button>
            </span><br></a>
      </nav>
</div>
</div>


 <!-- HALAMAN PEMESANAN KAMAR-->

 <div class="mobile2" id="mobile2" >
    <nav id="mynav"class="navbar navbar-default" style="background-color:#3A7765;">
        <div class="container-fluid">
            <div class="navbar-header" >
                <div class="rows">
                    <div id="back"class="col-sm-2" style="padding:15px;">
                        <button onclick="myFunction()">
                            <img src="https://imgur.com/aksZmFn.png" width="60px;">
                        </button>
                    </div>
                    <div id="headerdetail"class="col-sm-10" style="padding:5px;">

                            <span style="color:white;font-size:38px;"><b>Hotel Indah</b></span><br>
                            <span style="font-size:32px;color:white;">Bogor, Jawa Barat</span>

                    </div>
                    <div id="back2"class="col-sm-2" style="padding:15px;display:none;">
                        <button id="back21"onclick="seeDetail()">
                            <img src="https://imgur.com/aksZmFn.png" width="60px;">
                        </button>
                        <span id="back22"style="font-size:36px;color:white;display:none;">TRAVELRAF</p>
                    </div>
                    <div id="headerdetail2"class="col-sm-10" style="padding:5px;display:none;">
                        <span style="color:white;font-size:38px;"><b>Hotel Indah</b></span><br>
                        <span style="font-size:32px;color:white;">Deluxe Room</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!--INFORMASI SEPUTAR MENGINAP-->
    <div id="infomenginap" >
        <div  class="rows" style="background-color:white;padding:5px;border-radius:10px;">
            <div style="width:300px;height:100px;border:1px solid #4A4A4A;font-size:32px;padding:5px;" class="column3">
                <span><b>Check-in:</b><br></span>
                <span style="color:#3A7765;">{{  now()->toDateString('Y-m-d') }}</span>
            </div>
            <div style="width:300px;height:100px;border:1px solid #4A4A4A;font-size:32px;padding:5px;" class="column3">
                <span><b>Durasi:</b><br></span>
                <span style="color:#3A7765;">2 Malam</span>
            </div>
            <div style="width:300px;height:100px;border:1px solid #4A4A4A;font-size:32px;padding-bottom:15px;" class="column3">
                <span><b>Jumlah Tamu:</b><br></span>
                <span style="color:#3A7765;">2 Tamu</span>
            </div>
        </div>
    </div>

    <div id="listkamar" class="contain" style="padding:25px;">
        <div style="background-color:white;border-radius:15px;">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/h8/hrkamar1r.jpg" onclick="seeDetail();" alt="Los Angeles" width="1100" height="500" class="hover-shadow cursor">
                  </div>

                  <div class="carousel-item">
                    <img src="img/h8/kamarmandi1r.jpg" onclick="seeDetail();"alt="Chicago" width="1100" height="500" class="hover-shadow cursor">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
        </div>

        <div style="padding:10px;background-color:white;">
            <p style="font-size:45px;padding-top:2%;padding-left:4%;"><b>Deluxe Room</b><br>
            <hr size="100">
            </p>
            <br>
        </div>
        <div style="padding:2px;background-color:white;">
            <div class="rows" style="width:100%;padding-left:4%;"  >
                <div class="column4" style="font-size:34px;">
                    <b><p style="font-size:36px">Info Kamar </b> </p>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Max 2 Tamu <br>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 1 Double Bed<br>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 21 sqm<br>
                </div>
                <div class="column4" style="font-size:34px;">
                    <b><p style="font-size:36px">Layanan</b> </p>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Without Breakfast <br>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Non Refundable<br>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Free Wifi<br>
                </div>
            </div>
            <br>
            <br>
            <span class="navbar-brand" href="#" style="font-size:32px;padding-left:4%;">Kamar<span style="color:red;">masih tersedia ! </span></span>
            <br><br><br>
                    <button class="but" style="width:80%;margin-left:10%"onclick="seeDetail();"> Lihat Detail</button>
            <br><br><br>
        </div>
        <br>
        <br>
    </div>
    <div id="detailKamar" style="display:none;">
        <div class="contain" style="font-size:36px;background-color:white">
            <div style="background-color:white;border-radius:15px;height:600px;">
                <div id="demos" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators" id="indikator2">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                      <li data-target="#demo" data-slide-to="3"></li>
                      <li data-target="#demo" data-slide-to="4"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/h8/hrkamar1r.jpg" onclick="openModal()" alt="Los Angeles" width="1100" height="680" class="hover-shadow cursor">
                      </div>
                      <div class="carousel-item">
                        <img src="img/h8/hrrestaurant2r.jpg" onclick="openModal()"alt="Chicago" width="1100" height="680" class="hover-shadow cursor">
                      </div>

                      <div class="carousel-item">
                        <img src="img/h8/kamarmandi1r.jpg" onclick="openModal()"alt="Chicago" width="1100" height="680" class="hover-shadow cursor">
                      </div>
                      <div class="carousel-item">
                        <img src="img/h8/kamarmandi2r.jpg" onclick="openModal()"alt="Chicago" width="1100" height="680" class="hover-shadow cursor">
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demos" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demos" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  </div>
            </div>

            <br>
            <p style="font-size:38px;margin-top:3%;padding:20px;"><b>Deluxe Room</b> </span><br>
                <hr style="border: 1px solid gray;">
            <span class="navbar-brand" href="#" style="font-size:28px;padding-left:2%;padding-top:2%;"> <img src="https://imgur.com/K5sza9m.png" height="30px" width="30px"> Tamu 2 orang</span><br>
            <span class="navbar-brand" href="#" style="font-size:28px;padding-left:2%;"><span style="color:red;">Belum </span>termasuk sarapan!</span><br>
            <hr style="border: 1px solid gray;">
            <span style="font-size:28px;padding-left:2%;margin-top:20%;padding-bottom:2%"><img src="https://i.ibb.co/zhwNWVp/money-2.png" height="30px" width="30px"> Pesan sekarang dan dapatkan sebanyak <span style="color:#3A7765">103 poin </span></span>
            <br><br>
        </div>
        <p style="font-size:32px;padding-left:4%;padding-top:4%;padding-bottom:2%;" ><b> Room Overview </b> </p>
        <div class="contain" style="font-size:28px;background-color:white;word-wrap:break-word;padding:15px;height:360px;">
            <div class="row" style="padding-left:5%;padding-top:3%;padding-bottom:3%;">
                <div style="float:left;">
                    <img src="img/icon/size.png" width="60px" height="80px">
                </div>
                <div style="float:left;padding-left:5%">
                    <span style="font-size:32px;"> <b>Room size </b></span><br>
                    <span style="font-size:28px;">  21.0  sqm </span>
                </div>
            </div>
            <hr style="border: 1px solid #D3D3D3;">
            <div class="row" style="padding-left:5%;padding-top:3%;padding-bottom:3%;">
                <div style="float:left;">
                    <img src="img/icon/bed.png" width="50px" height="70px">
                </div>
                <div style="float:left;padding-left:5%">
                    <span style="font-size:32px;"> <b>Bed Type </b></span><br>
                    <span style="font-size:28px;"> 1 Double Bed </span>
                </div>
            </div>
        </div>
        <br>
        <!--BASIC FACILITIES -->
        <p style="font-size:32px;padding-left:4%;padding-top:1%;padding-bottom:2%;" ><b> Basic Facilities </b> </p>
        <div class="contain" style="font-size:28px;background-color:white;word-wrap:break-word;padding:15px;height:120px;">
            <div class="row" style="padding-left:5%;padding-top:3%;padding-bottom:3%;">
                <div style="float:left;">
                    <img src="img/icon/wi-fi.png" width="50px" height="50px">
                </div>
                <div style="float:left;padding-left:5%">
                    <span style="font-size:32px;"> <b>Wifi surcharge</b></span><br>
                </div>
            </div>
        </div>
        <br>
        <!-- BATHROOM AMINITIES -->
        <p style="font-size:32px;padding-left:4%;padding-top:1%;padding-bottom:2%;" ><b> Bathroom Aminities</b> </p>
        <div class="contain" style="font-size:28px;background-color:white;word-wrap:break-word;padding:15px;height:360px;">
            <div  style="padding-left:5%;padding-top:3%;padding-bottom:3%;">
                <li style="font-size:32px;padding-top:4%;"><b> Shower</b> </li><br>
                <hr style="border: 1px solid #D3D3D3;">
                <li style="font-size:32px;padding-top:4%;"><b>Toiletries</b> </li><br>
            </div>
        </div><br>
        <!--ROOM AMINITIES -->
        <p style="font-size:32px;padding-left:4%;padding-top:1%;padding-bottom:2%;" ><b> Room Aminities</b> </p>
        <div class="contain" style="font-size:28px;background-color:white;word-wrap:break-word;padding:15px;height:400px;">
            <div  style="padding-left:5%;padding-top:3%;padding-bottom:3%;">
                <li style="font-size:32px;padding-bottom:2%;"><b> Air Conditioning</b> </li>
                <hr style="border: 1px solid #D3D3D3;">
                <li style="font-size:32px;padding-top:4%;"><b> Television</b> </li><br>
                <hr style="border: 1px solid #D3D3D3;">
                <li style="font-size:32px;padding-top:4%;"><b> Desk</b> </li><br>
                <hr style="border: 1px solid #D3D3D3;">
            </div>
        </div>
        <br>
        <br>
        <!--STICKY BOTTOM NAVBAR-->
        <nav id="navdetailbawah" class="shadow-lg navbar fixed-bottom navbar-light rounded" style="background-color:#EFECEC;padding-bottom:50px;padding-top:50px;">
                <button style="width:100%;" onclick="openModal2()"> Pesan Kamar ini</button>
            </span><br></a>
        </nav>
    </div>

</div>
<br>
<br>
<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span  class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content" style="margin-top:5%;">
            <img id="gambarutama"
                width="100%" style="height:800px;" src="img/h8/hrkamar1r.jpg">
            <div id="textnums"class="numbertext" style="font-size:24px;">1 / 4</div>

        <div class="caption-container">
            <p id="caption" style="color:white;font-size:24px;">Kamar Tidur</p>
        </div>

        <div class="rows">
            <div class="column">
                <img id="kmrbiasa"class="demo cursor" src="img/h8/hrkamar1r.jpg" style="width:100%;height:180px;opacity:1;"   onclick="gantiGambars()" >
            </div>
            <div class="column" >
                <img id="kmrbiasa2"class="demo cursor" src="img/h8/hrrestaurant2r.jpg"  style="width:100%;height:180px;"  onclick="gantiGambar()" >
            </div>
            <div class="column" >
                <img id="kmrbiasa3"class="demo cursor" src="img/h8/kamarmandi1r.jpg"  style="width:100%;height:180px;"  onclick="gantiGambar2()" >
            </div>
            <div class="column" >
                <img id="kmrmandi"class="demo cursor" src="img/h8/kamarmandi2r.jpg" style="width:100%;height:180px;"  onclick="gantiGambar3()" >
            </div>
        </div>

    </div>
</div>

<div id="myModals" class="modal">
    <span  class="close cursor" onclick="closeModals()">&times;</span>
    <div class="modal-content" style="margin-top:5%;">
        <div class="mySlides2">

            <img id="gambarutamas"
                width="100%" style="height:800px;" src="hrlobi1.jpg">
        </div>


        <div class="caption-container">
            <br>
            <p id="caption" style="color:white;font-size:24px;">Lobi Hotel</p>
        </div>
        <div class="rows">
            <div class="column">
                <img id="lobi1"class="demos cursor" src="hrlobi1.jpg" style="width:100%;height:200px;opacity:1;"   onclick="previewHome1()" >
            </div>
            <div class="column" >
                <img id="lobi2"class="demos cursor" src="hrlobi2.jpg"  style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome2()" >
            </div>
            <div class="column" >
                <img id="lobi3"class="demos cursor" src="hrlobi3.jpg"  style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome3()" >
            </div>
            <div class="column" >
                <img id="lobi4"class="demos cursor" src="hrliftlobi.jpg"  style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome4()" >
            </div>
        </div>

        <div class="caption-container">
            <br>
            <p id="caption" style="color:white;font-size:24px;">Kolam Renang</p>
        </div>
        <div class="rows">
            <div class="column" >
                <img id="kolamrenang1"class="demos cursor" src="hrkolamrenang1.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome5()" >
            </div>
            <div class="column" >
                <img id="kolamrenang2"class="demos cursor" src="hrkolamrenang2.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome6()" >
            </div>
            <div class="column" >
                <img id="kolamrenang3"class="demos cursor" src="hrkolamrenang3.jpg"style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome7()" >
            </div>
            <div class="column" >
                <img id="kolamrenang4"class="demos cursor" src="hrkolamrenang4.jpg"style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome8()" >
            </div>
        </div>

        <div class="caption-container">
            <br>
            <p id="caption" style="color:white;font-size:24px;">Restaurant</p>
        </div>
        <div class="rows">
            <div class="column" >
                <img id="restaurant1"class="demos cursor" src="hrrestaurant1.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome9()" >
            </div>
            <div class="column" >
                <img id="restaurant2"class="demos cursor" src="hrrestaurant2.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome10()" >
            </div>
            <div class="column" >
                <img id="restaurant3"class="demos cursor" src="hrrestaurant3.jpg"style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome11()" >
            </div>
        </div>
        <div class="caption-container">
            <br>
            <p id="caption" style="color:white;font-size:24px;">Kamar</p>
        </div>
        <div class="rows">
            <div class="column" >
                <img id="kamar1"class="demos cursor" src="hrkamar1.png" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome12()" >
            </div>
            <div class="column" >
                <img id="kamar2"class="demos cursor" src="hrkamar3.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome13()" >
            </div>
            <div class="column" >
                <img id="kamar3"class="demos cursor" src="hrkmrmndi3.jpg"style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome14()" >
            </div>
        </div>
    </div>
    <br>
    <br>
</div>

<div id="myModal2" class="modal" >
    <span  class="close cursor" onclick="closeModal2()">&times;</span>
    <div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content" style="width:100%">
        <div class="modal-header">
            <h2 class="modal-title">Konfirmasi Pemesanan</h5>

            </button>
        </div>
        <div class="modal-body" >
            <br>
            <p style="font-size:28px;">Apakah anda telah selesai melihat-melihat detail seperti foto atau lainnya dan ingin melanjutkan memesan hotel ini?</p>
        </div>
        <div class="modal-footer">


            <button type="button" class="btn btn-secondary" onclick="closeModal2();" style="float:left;width:120px;" >Kembali</button>


            <button type="button" class="btn btn-primary" style="float:right;width:200px;" onclick=pesan();>Iya, Pesan Hotel</button>


        </div>
        </div>
    </div>
</div>


<div class="contain" id="backto" style="padding:15px;background-color:white;display:none;">
    <p style="font-size:36px;" align="center">Pada titik ini, anda diasumsikan sudah melakukan pemesanan hotel. <br><br>
        Tahap selanjutnya, anda <b><span style="color:blue ;">dapat  kembali </span> ke <span style="color:blue ;">survei google form</span></b> yang sedang anda isinya sebelumnya
        untuk <b> menyelesaikan beberapa pertanyaan kembali. </b>
        <br><br> Terima kasih atas partisipasinya!.
    </p>
</div>
<div id="myModal3" class="modals">

    <!-- Modal content -->
    <div class="modals-content">
      <span class="close" id="closed">&times;</span>
      <div class="row">
        <div class="col-sm-8" style="padding:30px;">
            <img src="img/h8/hrkamar1r.jpg"
            width="100%" style="height:400px;" id="deskModalImage">
            <div class="rows" style="padding-top:2%;">
                <br>
                <br>
                <div class="column">
                    <img id="kmrmodal" src="img/h8/hrkamar1r.jpg" style="border-style:solid;width:100%;height:100px;" onclick="gambarModal();" >
                </div>
                <div class="column" >
                    <img id="kmrmodal2"src="img/h8/hrrestaurant2r.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="gambarModal2();"  >
                </div>
                <div class="column" >
                    <img id="kmrmodal3"src="img/h8/kamarmandi1r.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="gambarModal3();"  >
                </div>
                <div class="column">
                    <img id="kmrmandimodal" src="img/h8/kamarmandi2r.jpg" style="width:100%;height:100px;opacity:0.4;" onclick="gambarModal4();" >
                </div>
            </div>

      </div>
            <br>
            <br>
            <br>




        <div class="col-sm-4" style="height:580px;background-color: white;width:10px;padding:15px;">
           <span style="font-size:14px;"> <b> Room Information </b> </span><br>
           <div style="font-size:12px;padding-left:2%;padding-top:3%;padding-right:2%;"><img src="img/icon/size.png" width="14px" height="20px"> 21.0 sqm</div>
           <div style="font-size:12px;padding-left:2%;padding-top:2%;padding-right:2%;"><img src="https://imgur.com/K5sza9m.png" width="15px" height="15px"> 2 Tamu</div>

           <hr>
           <span style="font-size:14px;"> <b> Fasilitas Kamar</b> </span><br>
           <div class="row">
            <div class="column" style="padding-top:2%">
                <li style="font-size:12px;padding-bottom:2%;">Air Conditioning</li>
                <li style="font-size:12px;padding-top:4%;">Complimentary Bottled Water</li>
                <li style="font-size:12px;padding-top:4%;">Television</li>
                <li style="font-size:12px;padding-top:4%;">Desk</li>

            </div>
           </div>
           <hr>
           <span style="font-size:14px;"> <b> Bathroom Amenities</b> </span><br>

           <div class="row">
            <div class="column" style="padding-top:2%">
                <li style="font-size:12px;padding-bottom:2%;">Shower</li>
                <li style="font-size:12px;padding-top:4%;">Toiletries</li>
            </div>
         </div>
         <hr>
           <span style="font-size:14px;"> <b> Deskripsi Kamar</b> </span><br>
           <div style="font-size:12px;padding-top:2%">  Kamar Deluxe termasuk sarapan pagi 2 orang dan tersedia welcome drink. Jika melakukan
        Check-out lebih dari jam 1 akan dikenakan charge tiap jamnya.<br><br></div>
         <br>
            <button style="width:100%;font-size:14px;" onclick="openModal3();"> Pesan Kamar ini</button>

        </div>
      </div>
    </div>

  </div>
<script>
$(document).ready(function(){
    alert("Mohon Untuk kembali ke halaman survei google form sebelumnya setelah melihat-lihat halaman website ini. Terima kasih atas partisipasinya, semoga hari Anda menyenangkan!");
});
</script>
<script src="/js/skenario6js/gantiGambarPreview.js"></script>
<script src="/js/skenario6js/gantiGambarHome.js"></script>
<script src="js/accordion.js"></script>
<script src="js/skenario6js/modalDetailDesktop.js"></script>
</body>
<br>
<br>
<br><br>
<br>



</html>
