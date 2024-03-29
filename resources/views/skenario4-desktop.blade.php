<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

 <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/rafifshaputra/image-gallery.slider/=edit -->
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/lightboxhome.js"></script>
    <script src="js/pemesananKamar.js"></script>
    <script src="js/skenario4js/previewHome.js"></script>
    <script src="js/detailPage.js"></script>
    <script src="/js/skenario4js/gantiGambarHomeDesktop.js"></script>
    <script src="/js/skenario4js/gantiGambarModal.js"></script>
    <script src="js/confirmationModal.js"></script>
    <script src="js/confirmationModalDesk.js"></script>
    <script type="text/javascript" src="js/skenario2js/slider.js"></script>





    <link rel="stylesheet" href="/css/skenario4.css">
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
        <div style="float:right;"> <img src="img/icon/luxury.png" width="180" height="50"> </div>

        <div class="head" style="padding-left:3%;">
            <div style="font-size:20px"><b> Hotel Arison</b><img style="padding-left:1%;"src="https://imgur.com/jTq0RbZ.png" width="100px;"><br></div>
            <div style="padding-top:1%; font-size:16px;"> Jalan Bogor 123. Bogor Barat. 321 </div><br>
        </div>

        <!-- MAIN PICTURE-->
        <div class="iframe-container">
            <div id="player"></div>
            <div id="player2"></div>
            <div id="player3"></div>
            <div id="player4"></div>
            <div id="player5"></div>
          </div>
        <br>


        <!--INI ROW UNTUK GAMBAR THUMBNAIL"-->
        <div class="rows" >
            <div class="column">
                <img id ="imgcol1d"onclick="gambarGanti1d();onYouTubeIframeAPIReady1('3CLBZaYMSfk');"src="/img/hr/hrlobi1.jpg" alt="Snow" style="width:100%;height:120px;opacity:1">
            </div>
            <div class="column">
                <img id ="imgcol2d" onclick="gambarGanti2d();onYouTubeIframeAPIReady2('SDOhQeSVe7M');" src="/img/hr/hrkolamrenang1r.jpg" alt="Forest" style="width:100%;height:120px;opacity:0.6">
            </div>
            <div class="column">
                <img id ="imgcol3d" onclick="gambarGanti3d();onYouTubeIframeAPIReady3('74X_wSupr0w');"  src="/img/hr/hrkamar1.png" alt="Mountains" style="width:100%;height:120px;opacity:0.6">
            </div>
            <div class="column">
                <img id ="imgcol4d" onclick="gambarGanti4d();onYouTubeIframeAPIReady4('YtLcnrV5Xxo');" src="/img/hr/hrrestaurant1r.jpg" alt="Mountains" style="width:100%;height:120px;opacity:0.6">
            </div>
            <div class="column">
                <img id ="imgcol5d" onclick="gambarGanti5d();onYouTubeIframeAPIReady5('p11rS7mgDS8');" src="/img/hr/hrrestaurant2.jpg" alt="Mountains" style="width:100%;height:120px;opacity:0.6">
            </div>
        </div>
        <br>
        <hr>
        <!-- ROW INFO KAMAR TERSEDIA-->
        <div class="rows" >
            <span style="font-size:16px;">
                Kamar tersedia dihari yang anda pilih tersisa sebanyak <span style="color:red">3 Kamar!</span>
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
                <img src="/img/icon/food.png" width="60" height="60"><br><br>
                <span  style="font-size:14px;">Restoran </span>
            </div>
            <div class="column" align="center"style="font-size:10px;">
                <img src="/img/icon/ladder.png" width="60" height="60"><br><br>
                <span style="font-size:14px;">Kolam Renang </span>
            </div>
            <div class="column"align="center" style="font-size:10px;">
                <img src="/img/icon/24-hours.png" width="60" height="60"><br><br>
                <span  style="font-size:14px;">Room Service 24 Jam </span>
            </div>
            <div class="column" align="center"style="font-size:10px;">
                <img src="/img/icon/barbel.png" width="60" height="60"><br><br>
                <span style="font-size:14px;">Pusat Kebugaran</span>
            </div>
            <div class="column"align="center" >
                <img src="/img/icon/spa.png" width="60" height="60"><br><br>
                <span style="font-size:14px;">Spa</span>
            </div>
            <div class="column" align="center">
                <img src="/img/icon/meeting.png" width="60" height="60"><br><br>
                <span  style="font-size:14px;">Meeting Room </span>

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
            Hotel Arison merupakan hotel bintang 4. Nuansa klasik dan mewah menjadi ciri khas penginapan ini. <br>
            <br>
            Fasilitas unggulan yang bisa dinikmati adalah Sky Dine and Longe. Selain itu, terdapat kamar-kamar dengan fasilitas mumpuni, kolam renang,
            fasilitas khusus penyandang disabilitas, dan lainnya.<br>
            <br>
            Para tamu Arison Hotel yang menginginkan ketenangan, dapat memesan kamar kedap suara. Kamar ini juga cocok untuk Anda yang membawa bayi dan enggan terganggu kenyamanannya.
          </p>
            </div>
            <div class="column">
                <span style="font-size:16px;"><b>Kebijakan Hotel</b></span>
                <br>
                <ul style="padding-top:2%" class="a">
                    <li  style="padding:5px;font-size:14px;"> Check-in mulai dari jam 14.00</li>
                    <li  style="padding:5px;font-size:14px;"> Check-out maksimal jam 12.00</li>
                    <li  style="padding:5px;font-size:14px;"> Membawa identitas </li>
                    <li  style="padding:5px;font-size:14px;"> Deposit Rp100.000</li>
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
                    <span style="color:#4A4A4A;font-size:14px;"><img src="/img/icon/timetable.png" width="20" height="20"> <b style="padding-left:1%">Jum, 16 Okt 2020 </b></span>
                </div>
                <div class="column">
                    <span style="font-size:13px;"> <img src="/img/icon/sleep.png" width="20" height="20">2<br></span>
                    <span style="color:#4A4A4A;font-size:14px;"><b>Malam</b></span>
                </div>
                <div class="column">
                    <span style="font-size:13px;">Check-out<br></span>
                    <span style="color:#4A4A4A;font-size:14px;"><img src="/img/icon/timetable.png" width="20" height="20"> <b style="padding-left:1%">Min, 18 Okt 2020 </b></span>
                </div>
                <div class="column">
                    <span style="font-size:13px;">Tamu dan Kamar<br></span>
                    <span style="color:#4A4A4A;font-size:14px;"><b >2 Tamu 1 Kamar</b></span>
                </div>
            </div>
            <hr>
            <span style="font-size:18px;"><b>Kamar di Hotel Arison</b> </span>
        </div>
        <br>
        <div class="contain" style="border-style: solid;
        border-width: medium;border-color:#F3F6F5;;">
            <div class="rows" >
                <!--KOLOM PERTAMA UNTUK FOTO KAMAR-->
                <div class="column">
                    <img src="https://i.ibb.co/Pchrm5P/gambar4.png" onclick="openModalz()"id="myBtn"alt="Snow" style="width:100%;height:200px;"><br>
                    <div class="rows" style="width:100%;padding-top:2%" >
                        <div class="column">
                            <img src="https://i.ibb.co/Pchrm5P/gambar4.png" onclick="openModalz()"alt="Snow" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="https://i.ibb.co/CzxGHrb/20200308-130411.jpg" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="/img/hr/hrkmrmndi2.png" alt="Mountains"onclick="openModalz()" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="/img/icon/noimage.png" alt="Mountains" onclick="openModalz()"style="width:100%;height:60px;">
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
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 2 Single Bed<br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 26 sqm<br>
                        </div>

                        <div class="column" style="font-size:14px;">
                            <b><p style="font-size:14px">Layanan</b> </p>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Max 2 Tamu <br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 2 Single Bed<br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 26 sqm<br>
                        </div>
                    </div>
                </div>

                <!--KOLOM KETIGA UNTUK KAMAR TERSISA DAN BUTTON PESAN-->
                <div class="column" style="padding-left:10%;padding-top:10%;font-size:12px;">
                    <span style="color:red;font-size:14px;">Tersisa 3 kamar lagi! </span><br>
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
                    <img src="https://i.ibb.co/Pchrm5P/gambar4.png"onclick="openModalz()" alt="Snow" style="width:100%;height:200px;"><br>
                    <div class="rows" style="width:100%;padding-top:2%" >
                        <div class="column">
                            <img src="https://i.ibb.co/Pchrm5P/gambar4.png" onclick="openModalz()"alt="Snow" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="https://i.ibb.co/CzxGHrb/20200308-130411.jpg" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="/img/hr/hrkmrmndi2.png" alt="Mountains"onclick="openModalz()" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="/img/icon/noimage.png" alt="Mountains" onclick="openModalz()"style="width:100%;height:60px;">
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
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 2 Single Bed<br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 26 sqm<br>
                        </div>

                        <div class="column" style="font-size:14px;">
                            <b><p style="font-size:14px">Layanan</b> </p>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Max 2 Tamu <br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 2 Single Bed<br>
                            <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 26 sqm<br>
                        </div>
                    </div>
                </div>

                <!--KOLOM KETIGA UNTUK KAMAR TERSISA DAN BUTTON PESAN-->
                <div class="column" style="padding-left:10%;padding-top:10%;font-size:12px;">
                    <span style="color:red;font-size:14px;">Tersisa 3 kamar lagi! </span><br>
                    <span >
                        <button style="width:200px;" onclick="openModalz()"> <span style="font-size:14px;">Lihat Detail</span></button>
                    </span>
                </div>

            </div>
        </div>
        <br>

</div>
</div>


<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span  class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content" style="margin-top:5%;">
            <img id="gambarutama"
                width="100%" style="height:800px;" src="hrkamar1.jpg">
            <div id="textnums"class="numbertext" style="font-size:24px;">1 / 4</div>

        <div class="caption-container">
            <p id="caption" style="color:white;font-size:24px;">Kamar Tidur</p>
        </div>

        <div class="rows">
            <div class="column">
                <img id="kmrbiasa"class="demo cursor" src="/img/hr/hrkamar1.png" style="width:100%;height:200px;opacity:1;"   onclick="gantiGambars()" >
            </div>
            <div class="column" >
                <img id="kmrbiasa2"class="demo cursor" src="/img/hr/hrkamar3.jpg"  style="width:100%;height:200px;"  onclick="gantiGambar()" >
            </div>
            <div class="column" >
                <img id="kmrbiasa3"class="demo cursor" src="/img/hr/hrkamar4.jpg"  style="width:100%;height:200px;"  onclick="gantiGambar2()" >
            </div>
            <div class="column" >
                <img id="kmrmandi"class="demo cursor" src="https://i.ibb.co/CzxGHrb/20200308-130411.jpg" style="width:100%;height:200px;"  onclick="gantiGambar3()" >
            </div>
        </div>
        <div class="rows">
            <div class="column" >
                <img id="kmrmandi2"class="demo cursor" src="/img/hr/hrkmrmndi2.png" style="width:100%;height:200px;"  onclick="gantiGambar4()" >
            </div>
            <div class="column" >
                <img id="kmrmandi3"class="demo cursor" src="/img/hr/hrkmrmndi3.jpg"style="width:100%;height:200px;"  onclick="gantiGambar5()" >
            </div>
        </div>
    </div>
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


            <button type="button" class="btn btn-primary" style="float:right;width:200px;" onclick="pesan();">Iya, Pesan Hotel</button>


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
            <img src="https://s5.gifyu.com/images/kamar.gif"
            width="100%" style="height:400px;" id="deskModalImage">
            <div class="rows" style="padding-top:1%;">
                <br>
                <br>
                <div class="column">
                    <img id="kmrmodal" src="/img/hr/hrkamardet.jpg" style="border-style:solid;width:100%;height:120px;" onclick="gambarModal();" >
                </div>
                <div class="column" >
                    <img id="kmrmandimodal"src="/img/hr/hrkmrmndi2.png" style="opacity:0.4;width:100%;height:120px;"onclick="gambarModal2();"  >
                </div>
                <div class="column" >
                    <img id="kmrmandimodal2"src="https://i.ibb.co/CzxGHrb/20200308-130411.jpg" style="opacity:0.4;width:100%;height:120px;"onclick="gambarModal3();"  >
                </div>
            </div>
      </div>
            <br>
            <br>
            <br>




        <div class="col-sm-4" style="height:600px;background-color: white;width:10px;padding:15px;">
           <span style="font-size:14px;"> <b> Room Information </b> </span><br>
           <div style="font-size:12px;padding-left:2%;padding-top:3%;padding-right:2%;"><img src="img/icon/size.png" width="14px" height="20px"> 26.0 sqm</div>
           <div style="font-size:12px;padding-left:2%;padding-top:2%;padding-right:2%;"><img src="https://imgur.com/K5sza9m.png" width="15px" height="15px"> 2 Tamu</div>

           <hr>
           <span style="font-size:14px;"> <b> Fasilitas Kamar</b> </span><br>
           <div class="row">
                <div class="column" style="padding-top:2%">
                    <li style="font-size:12px;padding-bottom:2%;"> Air Conditioning</li>
                    <li style="font-size:12px;padding-top:4%;">Bottled Water</li>
                    <li style="font-size:12px;padding-top:4%;">Coffee/Tea Maker</li>
                    <li style="font-size:12px;padding-top:4%;">Regrigerator </li>
                    <li style="font-size:12px;padding-top:4%;">Television</li>
                </div>

                <div class="column">
                    <li style="font-size:12px;padding-top:4%;">Desk</li>
                    <li style="font-size:12px;padding-top:4%;">In-room safe </li>
                    <li style="font-size:12px;padding-top:4%;">Blackout drapes/curtains </li>
                </div>
           </div>
           <hr>
           <span style="font-size:14px;"> <b> Bathroom Amenities</b> </span><br>

           <div class="row">
            <div class="column" style="padding-top:2%">
                <li style="font-size:12px;padding-bottom:2%;">Hot Water</li>
                <li style="font-size:12px;padding-top:4%;">Toiletries</li>
            </div>

            <div class="column">
                <li style="font-size:12px;padding-top:4%;">Shower</li>
                <li style="font-size:12px;padding-top:4%;">Hair Dryer </li>
            </div>
         </div>
         <hr>
           <span style="font-size:14px;"> <b> Deskripsi Kamar</b> </span><br>
           <div style="font-size:12px;padding-top:2%">  Kamar Deluxe termasuk sarapan pagi 2 orang dan tersedia welcome drink. Jika melakukan
        Check-out lebih dari jam 1 akan dikenakan charge tiap jamnya.</div>
         <br>
         <br>
         <br>
            <button style="width:100%;font-size:16px;" onclick="openModal3();"> Pesan Kamar ini</button>

        </div>
      </div>
    </div>

  </div>

  <script>
    $(document).ready(function(){
        alert("Mohon Untuk kembali ke halaman survei google form sebelumnya setelah melihat-lihat halaman website ini. Terima kasih atas partisipasinya, semoga hari Anda menyenangkan!");
    });
</script>
<script src="/js/skenario4js/gantiGambarPreview.js"></script>
<script src="/js/skenario4js/ytVideo.js"></script>
<script src="/js/skenario4js/gantiGambarHome.js"></script>
<script src="/js/skenario4js/modalDetailDesktop.js"></script>
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
