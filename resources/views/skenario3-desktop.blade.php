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
    <script src="js/skenario3js/modalDetailDesktop.js"></script>
    <script src="js/skenario3js/filterPreview.js"></script>

    <script src="js/confirmationModalDesk.js"></script>

    <link rel="stylesheet" href="/css/skenario3.css">
    <link rel="stylesheet" href="/css/lightbox.css">

<style>
    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
#zoom-in:active{
    background-color:#E36B38;
}
#zoom-out:active{
    background-color:#E36B38;
}
#home:active{
    background-color:#E36B38;
}
#fullscreen:active{
    background-color:#E36B38;
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
        <div class="head" style="padding-left:3%;">
            <div style="float:right;"> <img src="img/icon/luxury.png" width="180" height="50"> </div>
            <div style="font-size:20px"><b> Hotel Arison</b><img style="padding-left:1%;"src="https://imgur.com/jTq0RbZ.png" width="100px;"><br></div>
            <div style="padding-top:1%; font-size:16px;"> Jalan Bogor 123. Bogor Barat. 321 </div><br>
        </div>

        <!-- MAIN PICTURE-->

        <div id="myImaged" data-u="image" style="width:100%;height:65%;">        </div>
        <div id="myImaged2" data-u="image" style="width:100%;height:65%;display:none;" ></div>
        <div id="myImaged3" data-u="image" style="width:100%;height:65%;display:none;" ></div>
        <div id="myImaged4" data-u="image" style="width:100%;height:65%;display:none;" ></div>
        <div id="myImaged5" data-u="image" style="width:100%;height:65%;display:none;" ></div>
        <br>

        <!--INI ROW UNTUK GAMBAR THUMBNAIL"-->
        <div class="rows" >
            <div class="column">
                <img id ="imgcold1"onclick="gambarGantid1();"src="/img/hr/hrlobi1.jpg" alt="Snow" style="width:100%;height:120px;opacity:1">
            </div>
            <div class="column">
                <img id ="imgcold2" onclick="gambarGantid2();" src="/img/hr/hrkolamrenang1.jpg" alt="Forest" style="width:100%;height:120px;opacity:0.6">
            </div>
            <div class="column">
                <img id ="imgcold3" onclick="gambarGantid3();"  src="/img/hr/hrkamar1.png" alt="Mountains" style="width:100%;height:120px;opacity:0.6">
            </div>
            <div class="column">
                <img id ="imgcold4" onclick="gambarGantid4();" src="/img/hr/hrrestaurant1.jpg" alt="Mountains" style="width:100%;height:120px;opacity:0.6">
            </div>
            <div class="column" style=" position: relative;text-align: center;color: white;">

                <img id ="imgcol5" onclick="openModalzz();" src="/img/hr/hrrestaurant3r.jpg" alt="Mountains" style="width:100%;height:120px;">
                <div class="centered" style="font-size:16px;"><u><a>Lihat Semua </u></div></a>
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
                <img src="/img/icon/meeting.png" width="60" height="60"><br><br>
                <span style="font-size:14px;">Meeting Room </span>
            </div>
            <div class="column" align="center">
                <img src="/img/icon/spa.png" width="60" height="60"><br><br>
                <span  style="font-size:14px;">Spa </span>

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
                            <img src="/img/hr/hrkamar3.jpg" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="/img/hr/hrkmrmndi3.jpg" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
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
                            <img src="/img/hr/hrkamar3.jpg" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="https://i.ibb.co/CzxGHrb/20200308-130411.jpg" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
                        </div>
                        <div class="column">
                            <img src="/img/hr/hrkmrmndi3.jpg" onclick="openModalz()"alt="Forest" style="width:100%;height:60px;">
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
            <div id="previewImaged" data-u="image"width="100%" style="height:400px;" ></div>
            <div id="previewImaged2" data-u="image"width="100%" style="height:400px;display:none;" ></div>
            <div id="previewImaged3" data-u="image"width="100%" style="height:400px;display:none;" ></div>
            <div id="previewImaged4" data-u="image"width="100%" style="height:400px;display:none;" ></div>
            <div id="previewImaged5" data-u="image"width="100%" style="height:400px;display:none;" ></div>
            <div id="previewImaged6" data-u="image"width="100%" style="height:400px;display:none;" ></div>

            <div class="rows" style="padding-top:2%;">
                <br>
                <br>
                <div class="column">
                    <img id="kmrmodal" src="https://i.ibb.co/Pchrm5P/gambar4.png" style="border-style:solid;width:100%;height:100px;" onclick="gantiGambard();" >
                </div>
                <div class="column" >
                    <img id="kmrmodal2"src="/img/hr/hrkamar3.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="gantiGambard2();"  >
                </div>
                <div class="column" >
                    <img id="kmrmodal3"src="/img/hr/hrkamar4.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="gantiGambard3();"  >
                </div>
            </div>
            <div class="rows" style="padding-top:2%;">
                <br>
                <br>
                <div class="column">
                    <img id="kmrmandimodal" src="https://i.ibb.co/CzxGHrb/20200308-130411.jpg" style="width:100%;height:100px;opacity:0.4;" onclick="gantiGambard4();" >
                </div>
                <div class="column" >
                    <img id="kmrmandimodal2"src="/img/hr/hrkmrmndi2.png" style="opacity:0.4;width:100%;height:100px;"onclick="gantiGambard5();"  >
                </div>
                <div class="column" >
                    <img id="kmrmandimodal3"src="/img/hr/hrkmrmndi3.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="gantiGambard6();"  >
                </div>

            </div>
      </div>
            <br>
            <br>
            <br>




        <div class="col-sm-4" style="height:675px;background-color: white;width:10px;padding:15px;">
           <span style="font-size:14px;"> <b> Room Information </b> </span><br>
           <div style="font-size:12px;padding-left:2%;padding-top:3%;padding-right:2%;"><img src="img/size.png" width="14px" height="20px"> 26.0 sqm</div>
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
        Check-out lebih dari jam 1 akan dikenakan charge tiap jamnya.<br><br>
        Anda akan menerima welcome drink pada saat check-in dihotel.</div>
         <br>
         <br>
         <br>

            <button style="width:100%;font-size:16px;" onclick="openModal3();"> Pesan Kamar ini</button>

        </div>
      </div>
    </div>

  </div>

  <div id="myModal4" class="modalss">

    <!-- Modal content -->
    <div class="modalss-content">
      <span class="close" id="closedd">&times;</span>
    <div style="padding-left:100px;padding-right:100px;padding-top:10px;padding-bottom:10px;">
        <div id="gambarutamasd" data-u="image" style="width:100%;height:450px;"> </div>
        <div id="gambarutamasd2" data-u="image" style="width:100%;height:450px;display:none;"> </div>
        <div id="gambarutamasd3" data-u="image" style="width:100%;height:450px;display:none;"> </div>
        <div id="gambarutamasd4" data-u="image" style="width:100%;height:450px;display:none;"> </div>

        <div id="gambarutamasd5" data-u="image" style="width:100%;height:450px;display:none;"> </div>
        <div id="gambarutamasd6" data-u="image" style="width:100%;height:450px;display:none;"> </div>
        <div id="gambarutamasd7" data-u="image" style="width:100%;height:450px;display:none;"> </div>
        <div id="gambarutamasd8" data-u="image" style="width:100%;height:450px;display:none;"> </div>

        <div id="gambarutamasd9" data-u="image" style="width:100%;height:450px;display:none;"> </div>
        <div id="gambarutamasd10" data-u="image" style="width:100%;height:450px;display:none;"> </div>
        <div id="gambarutamasd11" data-u="image" style="width:100%;height:450px;display:none;"> </div>

        <div id="gambarutamasd12" data-u="image" style="width:100%;height:450px;display:none;"> </div>
        <div id="gambarutamasd13" data-u="image" style="width:100%;height:450px;display:none;"> </div>
        <div id="gambarutamasd14" data-u="image" style="width:100%;height:450px; display:none;"> </div>
            <div >
                <span style="color:white;background-color:#3A7765" id="tulislobi"><a href="#" style="color:white"onclick="filterPreview();">Lobi</a> </span>
                <span style="color:white" id="tuliskolamrenang"><a href="#" style="color:white"onclick="filterPreview2();">Kolam Renang </a></span>
                <span style="color:white" id="tulisrestoran"><a href="#" style="color:white"onclick="filterPreview3();">Restoran </a></span>
                <span style="color:white" id="tuliskamartidur"><a href="#" style="color:white"onclick="filterPreview4();">Kamar Tidur</a></span>

            </div>
            <br>
            <div class="rows" id ="lobid" style="padding-top:1%;">

                <div class="column">
                    <img id="lobid1" src="/img/hr/hrlobi1.jpg" style="border-style:solid;width:100%;height:100px;" onclick="previewHomed1();" >
                </div>
                <div class="column" >
                    <img id="lobid2"src="/img/hr/hrlobi2.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="previewHomed2();"  >
                </div>
                <div class="column" >
                    <img id="lobid3"src="/img/hr/hrlobi3.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="previewHomed3();"  >
                </div>
                <div class="column" >
                    <img id="lobid4"src="/img/hr/hrliftlobi.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="previewHomed4();"  >
                </div>
            </div>

            <div class="rows" id ="kolamrenangd"style="padding-top:1%;display:none;">

                <div class="column">
                    <img id="kolamrenangd1" src="/img/hr/hrkolamrenang1r.jpg" style="border-style:solid;width:100%;height:100px;" onclick="previewHomed5();" >
                </div>
                <div class="column" >
                    <img id="kolamrenangd2"src="/img/hr/hrkolamrenang2.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="previewHomed6();"  >
                </div>
                <div class="column" >
                    <img id="kolamrenangd3"src="/img/hr/hrkolamrenang3.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="previewHomed7();"  >
                </div>
                <div class="column" >
                    <img id="kolamrenangd4"src="/img/hr/hrkolamrenang4.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="previewHomed8();"  >
                </div>
            </div>

            <div class="rows" id ="restorand"style="padding-top:1%;display:none;">

                <div class="column">
                    <img id="restorand1" src="/img/hr/hrrestaurant1r.jpg" style="border-style:solid;width:100%;height:100px;" onclick="previewHomed9();" >
                </div>
                <div class="column" >
                    <img id="restorand2"src="/img/hr/hrrestaurant2r.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="previewHomed10();"  >
                </div>
                <div class="column" >
                    <img id="restorand3"src="/img/hr/hrrestaurant3.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="previewHomed11();"  >
                </div>
            </div>

            <div class="rows" id="kamartidurd"style="padding-top:1%;display:none;">

                <div class="column">
                    <img id="kamartidurd1" src="https://i.ibb.co/Pchrm5P/gambar4.png" style="border-style:solid;width:100%;height:100px;" onclick="previewHomed12();" >
                </div>
                <div class="column" >
                    <img id="kamartidurd2"src="/img/hr/hrkamar3.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="previewHomed13();"  >
                </div>
                <div class="column" >
                    <img id="kamartidurd3"src="/img/hr/hrkmrmndi3.jpg" style="opacity:0.4;width:100%;height:100px;"onclick="previewHomed14();"  >
                </div>

            </div>


            <br>
            <br>


    </div>
</div>

  </div>

<script src="js/skenario3js/previewChangeImage.js"></script>
<script src="js/skenario3js/previewChangeImageDesktop.js"></script>
<script src="js/skenario3js/gantiGambarHome.js"></script>
<script src="js/skenario3js/gantiGambarHomeDesktop.js"></script>


<script src="js/accordion.js"></script>
<script src="js/openseadragon.min.js"></script>
<script src="js/skenario3js/homeosd.js"></script>
<script src="js/skenario3js/homeosdDesktop.js"></script>
<script src="js/skenario3js/previewosd.js"></script>
<script src="js/skenario3js/previewosdDesktop.js"></script>
<script src="js/skenario3js/previewChangeosd.js"></script>
<script src="js/skenario3js/previewChangeosdDesktop.js"></script>
<script src="js/skenario3js/detailOsd.js"></script>
<script src="js/skenario3js/previewDetOsd.js"></script>
<script src="js/skenario3js/previewDetOsdDesktop.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 30000
    })
  });
</script>

<script>
    $(document).ready(function(){
        alert("Mohon Untuk kembali ke halaman survei google form sebelumnya setelah melihat-lihat halaman website ini. Terima kasih atas partisipasinya, semoga hari Anda menyenangkan!");
    });
</script>

<script>
    $(document).ready(function(){
        alert("*Note: Anda dapat zoom pada gambar.");
    });
</script>

</body>
<br>
<br>
<br><br>
<br>


</html>
