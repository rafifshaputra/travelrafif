<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="js/skenario1js/360changeImage.js"></script>
    <script src="js/skenario1js/gantiGambarPreview.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/pemesananKamar.js"></script>
    <script src="js/detailPage.js"></script>
    <script src="/js/skenario5js/gantiGambarHome.js"></script>
    <script src="/js/skenario5js/gantiGambarHomeDesktop.js"></script>
    <script src="/js/skenario5js/gantiGambarModal.js"></script>
    <script src="/js/skenario5js/modalDetailDesktop.js"></script>

    <script src="js/confirmationModal.js"></script>

    <script src="js/confirmationModalDesk.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="/css/lightbox.css">
    <link rel="stylesheet" href="/css/360css.css">
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
                <div style="font-size:20px"><b> Hotel Indah</b><img style="padding-left:1%;"src="img/icon/bintang2.png" width="60px;"><br></div>

                <div style="padding-top:1%; font-size:16px;"> Jalan Bogor 123. Bogor Barat. 321 </div><br>
            </div>
            <div style="background-color:rgba(0,0,0,0.3);position:absolute;top:25%;left:71%;">
                <img src="/img/icon/360-degree.png" style="width:95px;height:95px;">
            </div>
            <!-- MAIN PICTURE-->
            <iframe
            width="100%" style="height:70%"id="myImages"
            allowfullscreen="allowfullscreen"
                mozallowfullscreen="mozallowfullscreen"
                msallowfullscreen="msallowfullscreen"
                oallowfullscreen="oallowfullscreen"
                webkitallowfullscreen="webkitallowfullscreen"
            src="https://momento360.com/e/u/81366179e19b4951906ed05d4b41a265?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"></iframe>
            <br>

            <!--INI ROW UNTUK GAMBAR THUMBNAIL"-->
            <div class="rows" >
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
                <div class="column">
                    <img id ="imgcol5d" onclick="gambarGanti5d();" src="/img/h8/hrrestaurant2r.jpg" alt="Mountains" style="width:100%;height:120px;opacity:0.6">
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
                                <img src="img/icon/noimage.png" alt="Mountains"onclick="openModalz()" style="width:100%;height:60px;">
                            </div>
                            <div class="column">
                                <img src="img/icon/noimage.png" alt="Mountains" onclick="openModalz()"style="width:100%;height:60px;">
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
                                <img src="img/icon/noimage.png" alt="Mountains"onclick="openModalz()" style="width:100%;height:60px;">
                            </div>
                            <div class="column">
                                <img src="img/icon/noimage.png" alt="Mountains" onclick="openModalz()"style="width:100%;height:60px;">
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
            <div style="background-color:rgba(0,0,0,0.3);position:absolute;top:54%;left:5%;">
                <img src="/img/icon/360-degree.png" style="width:95px;height:95px;">
            </div>
            <iframe
            width="100%" style="height:400px;" id="deskModalImage"
            allowfullscreen="allowfullscreen"
                mozallowfullscreen="mozallowfullscreen"
                msallowfullscreen="msallowfullscreen"
                oallowfullscreen="oallowfullscreen"
                webkitallowfullscreen="webkitallowfullscreen"
                src="https://momento360.com/e/u/262ce4718852425cb7ad828fc373353f?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"></iframe>
            <div class="warn" id="warn"style="color:white;font-size:14px;display:none;">
                <span style="color:red;"> *Note :</span>Terdapat kesalahan pada gambar kamar mandi, terdapat pintu diantara wastafel dengan closet.
            </div>
            <div class="rows">
                <br>
                <br>
                <div class="column">
                    <img id="kmrmodal" src="img/h8/hrkamar1r.jpg" style="border-style:solid;width:250px;height:120px;" onclick="gambarModal();" >
                </div>
                <div class="column" >
                    <img id="kmrmandimodal"src="img/h8/kamarmandi2r.jpg" style="opacity:0.4;width:250px;height:120px;"onclick="gambarModal2();"  >
                </div>
            </div>
      </div>
            <br>
            <br>
            <br>




        <div class="col-sm-4" style="height:600px;background-color: white;width:10px;padding:15px;">
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
                    <li style="font-size:12px;padding-top:4%;">Shower</li>
                    <li style="font-size:12px;padding-top:4%;">Toiletries</li>
                </div>
            </div>
         <hr>
           <span style="font-size:14px;"> <b> Deskripsi Kamar</b> </span><br>
           <div style="font-size:12px;padding-top:2%">  Kamar Deluxe termasuk sarapan pagi 2 orang. Jika melakukan
        Check-out lebih dari jam 1 akan dikenakan charge tiap jamnya.</div>
         <br>

            <button style="width:100%;font-size:14px;" onclick="openModal3();"> Pesan Kamar ini</button>

        </div>
      </div>
    </div>

  </div>

<script src="js/skenario5js/nextimages.js"></script>
<script src="js/accordion.js"></script>
<script>
    $(document).ready(function(){
        alert("Mohon Untuk kembali ke halaman survei google form sebelumnya setelah melihat-lihat halaman website ini. Terima kasih atas partisipasinya, semoga hari Anda menyenangkan!");
    });
   </script>
</body>
<br><br><br>
</html>
