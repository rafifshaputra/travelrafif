<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <meta content='user-scalable=0' name='viewport' />

    <script src="js/lightbox.js"></script>
    <script src="js/lightboxhome.js"></script>
    <script src="js/pemesananKamar.js"></script>
    <script src="js/skenario8js/previewHome.js"></script>
    <script src="js/detailPage.js"></script>
    <script src="/js/skenario8js/gantiGambarHomeDesktop.js"></script>
    <script src="/js/skenario8js/gantiGambarModal.js"></script>

    <script src="js/confirmationModal.js"></script>



    <link rel="stylesheet" href="/css/skenario8.css">
    <link rel="stylesheet" href="/css/lightbox.css">


    <style>
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Make the youtube video responsive */
.iframe-container{
    position: relative;
    width: 100%;
    padding-bottom: 56.25%;
    height: 0;
  }
  .iframe-container iframe{
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
  }
    </style>
</head>
<body style="background-color:#F3F6F5">
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

        <div class="iframe-container">
            <div id="player"></div>
            <div id="player2"></div>
            <div id="player3"></div>
            <div id="player4"></div>
          </div>
        <br>
        <br>
        <!--ROW GAMBAR THUMBNAIL-->
        <div class="rows" >
            <div class="column">
                <img id="imgcol1"onclick="gambarGanti1();onYouTubeIframeAPIReady1('An0Wvvnppco');" src="/img/h8/hrlobi1.jpg" alt="Snow" style="width:100%;height:150px;">
            </div>
            <div class="column">
                <img id="imgcol2" onclick="gambarGanti2();onYouTubeIframeAPIReady2('ZW3DlXjMyYg');" src="/img/h8/hrkolamrenang1r.jpg" alt="Mountains" style="width:100%;height:150px;opacity:0.6">
            </div>
            <div class="column">
                <img id="imgcol3" onclick="gambarGanti3();onYouTubeIframeAPIReady3('3Vk_z0sRHWY');"src="/img/h8/hrkamar1r.jpg" alt="Mountains" style="width:100%;height:150px;opacity:0.6">
            </div>
            <div class="column">
                <img id="imgcol4" onclick="gambarGanti4();onYouTubeIframeAPIReady4('QZYg-cNM3OI');"src="/img/h8/hrrestaurant1r.jpg" alt="Forest" style="width:100%;height:150px;opacity:0.6">
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
    <br>
    <hr>

    <nav id="navhomebawah"class="shadow-lg navbar fixed-bottom navbar-light rounded" style="background-color:#EFECEC;padding-bottom:50px;padding-top:50px;">
        <a class="navbar-brand" href="#" style="font-size:32px;">Kamar<span style="color:red;">masih tersedia ! </span><span style="padding-left:35%;">
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
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 26 sqm<br>
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
            <span class="navbar-brand" href="#" style="font-size:32px;padding-left:4%;">Kamar<span style="color:red;">masih tersedia! </span></span>
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
                    <ul id="indikator2"class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>

                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/gif/h8/kamar.gif" alt="Los Angeles" width="1100" height="680" class="hover-shadow cursor">
                      </div>
                      <div class="carousel-item">
                        <img src="/gif/h8/kamar2.gif"alt="Chicago" width="1100" height="680" class="hover-shadow cursor">
                      </div>
                      <div class="carousel-item">
                        <img src="/gif/h8/kmrmandi.gif" alt="Chicago" width="520" height="680" style="margin-left:25%;" class="hover-shadow cursor">
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
                <span style="font-size:28px;">  1 Double Bed </span>
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
                <button style="width:100%;" onclick="openModal2();"> Pesan Kamar ini</button>
            </span><br></a>
        </nav>
    </div>

</div>
<br>
<br>


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


            <button type="button" onclick="pesan2()"class="btn btn-primary" style="float:right;width:200px;" >Iya, Pesan Hotel</button>


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
<script src="/js/skenario8js/ytVideo.js"></script>
<script src="/js/skenario8js/gantiGambarPreview.js"></script>
<script src="/js/skenario8js/gantiGambarHome.js"></script>
<script src="/js/skenario8js/modalDetailDesktop.js"></script>
<script src="js/accordion.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('.carousel').carousel({
        interval: 30000
      })
    });

  </script>
</body>
<br>
<br>
<br><br>
<br>



</html>
