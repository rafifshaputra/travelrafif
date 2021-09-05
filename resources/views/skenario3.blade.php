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
    <script src="js/lightbox.js"></script>
    <script src="js/lightboxhome.js"></script>
    <script src="js/confirmationModal.js"></script>

    <script src="js/pemesananKamar.js"></script>
    <script src="js/detailPage.js"></script>


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

        <div id="myImage" data-u="image" style="width:100%;height:800px;">        </div>
        <div id="myImage2" data-u="image" style="width:100%;height:800px;display:none;" ></div>
        <div id="myImage3" data-u="image" style="width:100%;height:800px;display:none;" ></div>
        <div id="myImage4" data-u="image" style="width:100%;height:800px;display:none;" ></div>
        <div id="myImage5" data-u="image" style="width:100%;height:800px;display:none;" ></div>

        <!--ROW GAMBAR THUMBNAIL-->
        <div class="rows" >
            <div class="column">
                <img id="imgcol1"onclick="gambarGanti1()" src="https://i.ibb.co/TLjvM8Q/hrlobi1.jpg" alt="Snow" style="width:100%;height:150px;">
            </div>
            <div class="column">
                <img id="imgcol2" onclick="gambarGanti2();" src="https://i.ibb.co/d5xMZWb/hrkolamrenang1r.jpg" alt="Mountains" style="width:100%;height:150px;opacity:0.6">
            </div>
            <div class="column">
                <img id="imgcol3" onclick="gambarGanti3();"src="https://i.ibb.co/C8Y6HKS/hrrkamar1.jpg" alt="Mountains" style="width:100%;height:150px;opacity:0.6">
            </div>
            <div class="column">
                <img id="imgcol4" onclick="gambarGanti4();"src="https://i.ibb.co/X72Dj0X/hrrestaurant1r.jpg" alt="Forest" style="width:100%;height:150px;opacity:0.6">
            </div>
            <div onclick="openModals();"class="column" style=" position: relative;text-align: center;color: white;">
                <img id="imgcol5" onclick=""src="/img/hr/hrrestaurant3r.jpg" alt="Forest" style="width:100%;height:150px;">
                <div class="centered" style="font-size:28px;"><u>Lihat Semua </u></div>
            </div>
        </div>
        <br>
    <br>

    <div class="head" style="padding-left:3%;">
        <div style="float:right;padding-right:35px;"> <img src="img/icon/luxury.png" width="300" height="90"> </div>

        <div style="font-size:42px"><b>Hotel Arison</b><img style="padding-left:1%;"src="https://i.ibb.co/FWsH4nf/Group-1-1.png" width="150px;"><br></div><br>
        <b><span style="font-size:36px"> <img src="https://imgur.com/XW23AfN.png" alt="Mountains" style="width:35px">
            Lokasi</b></span>
        <div style="padding-top:1%; font-size:32px;"> Jalan Bogor 123. Bogor Barat. 321 </div><br>
    </div>
    <hr>
    <br>
    <b><span style="font-size:36px">Deskripsi </span><br></b>
      <p style="padding:15px;font-size:32px;" align="justify">
        Hotel Arison merupakan hotel bintang 4. Nuansa klasik dan mewah menjadi ciri khas penginapan ini. <br>
        <br>
        Fasilitas unggulan yang bisa dinikmati adalah Sky Dine and Longe. Selain itu, terdapat kamar-kamar dengan fasilitas mumpuni, kolam renang,
        fasilitas khusus penyandang disabilitas, dan lainnya.<br>
        <br>
        Para tamu Arison Hotel yang menginginkan ketenangan, dapat memesan kamar kedap suara. Kamar ini juga cocok untuk Anda yang membawa bayi dan enggan terganggu kenyamanannya.
      </p>
    <hr>
    <br>
    <b><span style="font-size:36px">Fasilitas Umum</span><br></b>
      <p style="padding:15px;font-size:32px;" align="justify">
        <div class="row" style="padding-left:25px;" >
            <div class="column" style="flex:20%;width:16.5%;" >
                <span><img src="/img/icon/food.png" width="100" height="100"></span><br><br>
                <span style="font-size:24px;">Restoran </span>
            </div>
            <div class="column" align="center"  style="flex:20%;width:20%;" >
                <span><img src="/img/icon/ladder.png" width="100" height="100"></span><br><br>
                <span style="font-size:24px;align-items:center;" >Kolam Renang</span>

            </div>
            <div class="column"   align="center"style="flex:20%;width:20%;">
                <span><img src="/img/icon/24-hours.png" width="100" height="100"></span><br><br>
                <span style="font-size:24px;align-items:center;" >Resepsionis 24 Jam</span>

            </div>
            <div class="column"   style="flex:20%;width:20%;" >
                <span><img src="/img/icon/barbel.png" width="100" height="100"></span><br><br>
                <span style="font-size:24px;align-items:center;" >Mini Gym</span>

            </div>

            <div class="column"   style="flex:20%;width:20%;" >
                <span><img src="/img/icon/spa.png" width="100" height="100"></span><br><br>
                <span style="font-size:24px;align-items:center;" >Spa</span>
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
        <li  style="padding:5px;font-size:32px;"> Deposit Rp100.000</li>
    </ul>
    <br>
    <br>

    <hr>

    <nav id="navhomebawah"class="shadow-lg navbar fixed-bottom navbar-light rounded" style="background-color:#EFECEC;padding-bottom:50px;padding-top:50px;">
        <a class="navbar-brand" href="#" style="font-size:32px;">Hanya tersisa <span style="color:red;">3 kamar lagi! </span><span style="padding-left:15%;">
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

                            <span style="color:white;font-size:38px;"><b>Hotel Arison</b></span><br>
                            <span style="font-size:32px;color:white;">Bogor, Jawa Barat</span>

                    </div>
                    <div id="back2"class="col-sm-2" style="padding:15px;display:none;">
                        <button id="back21"onclick="seeDetail()">
                            <img src="https://imgur.com/aksZmFn.png" width="60px;">
                        </button>
                        <span id="back22"style="font-size:36px;color:white;display:none;">TRAVELRAF</p>
                    </div>

                    <div id="headerdetail2"class="col-sm-10" style="padding:5px;display:none;">
                        <span style="color:white;font-size:38px;"><b>Horison Arison</b></span><br>
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
                    <a href="/mob-hrsk3d-94314"><img src="https://i.ibb.co/Pchrm5P/gambar4.png" alt="Los Angeles" width="1100" height="500" class="hover-shadow cursor"></a>
                  </div>

                  <div class="carousel-item">
                    <a href="/mob-hrsk3d-94314"><img src="https://i.ibb.co/CzxGHrb/20200308-130411.jpg" alt="Chicago" width="1100" height="500" class="hover-shadow cursor"></a>
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
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 2 Single Bed<br>
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
            <span class="navbar-brand" href="#" style="font-size:32px;padding-left:4%;">Hanya tersisa <span style="color:red;">3 kamar lagi! </span></span>
            <br><br><br>
                    <a href="/mob-hrsk3d-94314"><button class="but" style="width:80%;margin-left:10%"> Lihat Detail</button></a>
            <br><br><br>
        </div>
        <br>
        <br>
    </div>


</div>
<br>
<br>

<div id="myModals" class="modal">
    <span  class="close cursor" onclick="closeModals()">&times;</span>
    <div class="modal-content" style="margin-top:5%;">
        <div class="mySlides2">

            <div id="gambarutamas" data-u="image" style="width:100%;height:800px;"> </div>
            <div id="gambarutamas2" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas3" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas4" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas5" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas6" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas7" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas8" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas9" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas10" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas11" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas12" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas13" data-u="image" style="width:100%;height:800px;display:none;"> </div>
            <div id="gambarutamas14" data-u="image" style="width:100%;height:800px;display:none;"> </div>


        </div>


        <div class="caption-container">
            <br>
            <p id="caption" style="color:white;font-size:24px;">Lobi Hotel</p>
        </div>
        <div class="rows">
            <div class="column">
                <img id="lobi1"class="demos cursor" src="https://i.ibb.co/TLjvM8Q/hrlobi1.jpg" style="width:100%;height:200px;opacity:1;"   onclick="previewHome1()" >
            </div>
            <div class="column" >
                <img id="lobi2"class="demos cursor" src="https://i.ibb.co/2NfQXVd/hrlobi2.jpg"  style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome2()" >
            </div>
            <div class="column" >
                <img id="lobi3"class="demos cursor" src="https://i.ibb.co/k9jjg9q/hrlobi3.jpg"  style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome3()" >
            </div>
            <div class="column" >
                <img id="lobi4"class="demos cursor" src="https://i.ibb.co/f14sswg/hrliftlobi.jpg"  style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome4()" >
            </div>
        </div>

        <div class="caption-container">
            <br>
            <p id="caption" style="color:white;font-size:24px;">Kolam Renang</p>
        </div>
        <div class="rows">
            <div class="column" >
                <img id="kolamrenang1"class="demos cursor" src="https://i.ibb.co/d5xMZWb/hrkolamrenang1r.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome5()" >
            </div>
            <div class="column" >
                <img id="kolamrenang2"class="demos cursor" src="https://i.ibb.co/YfDXkgQ/hrkolamrenang2.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome6()" >
            </div>
            <div class="column" >
                <img id="kolamrenang3"class="demos cursor" src="https://i.ibb.co/VStfVqk/hrkolamrenang3.jpg"style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome7()" >
            </div>
            <div class="column" >
                <img id="kolamrenang4"class="demos cursor" src="https://i.ibb.co/rGRVNvd/hrkolamrenang4.jpg"style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome8()" >
            </div>
        </div>

        <div class="caption-container">
            <br>
            <p id="caption" style="color:white;font-size:24px;">Restaurant</p>
        </div>
        <div class="rows">
            <div class="column" >
                <img id="restaurant1"class="demos cursor" src="https://i.ibb.co/X72Dj0X/hrrestaurant1r.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome9()" >
            </div>
            <div class="column" >
                <img id="restaurant2"class="demos cursor" src="https://i.ibb.co/Dw0WdN9/hrrestaurant2r.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome10()" >
            </div>
            <div class="column" >
                <img id="restaurant3"class="demos cursor" src="https://i.ibb.co/zQVJCCj/hrrestaurant3.jpg"style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome11()" >
            </div>
        </div>
        <div class="caption-container">
            <br>
            <p id="caption" style="color:white;font-size:24px;">Kamar</p>
        </div>
        <div class="rows">
            <div class="column" >
                <img id="kamar1"class="demos cursor" src="https://i.ibb.co/C8Y6HKS/hrrkamar1.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome12()" >
            </div>
            <div class="column" >
                <img id="kamar2"class="demos cursor" src="https://i.ibb.co/NTngH3s/hrkmrmndi2.jpg" style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome13()" >
            </div>
            <div class="column" >
                <img id="kamar3"class="demos cursor" src="https://i.ibb.co/Ry7N77J/hrkmrmndi3.jpg"style="width:100%;height:200px;opacity:0.6;"  onclick="previewHome14()" >
            </div>
        </div>
    </div>
    <br>
    <br>
</div>




<div class="contain" id="backto" style="padding:15px;background-color:white;display:none;">
    <p style="font-size:36px;" align="center">Pada titik ini, anda diasumsikan sudah melakukan pemesanan hotel. <br><br>
        Tahap selanjutnya, anda <b><span style="color:blue ;">dapat  kembali </span> ke <span style="color:blue ;">survei google form</span></b> yang sedang anda isinya sebelumnya
        untuk <b> menyelesaikan beberapa pertanyaan kembali. </b>
        <br><br> Terima kasih atas partisipasinya!.
    </p>
</div>


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

<script src="js/skenario3js/previewChangeImage.js"></script>
<script src="js/skenario3js/gantiGambarHome.js"></script>
<script src="js/accordion.js"></script>
<script src="js/openseadragon.min.js"></script>
<script src="js/skenario3js/homeosd.js"></script>
<script src="js/skenario3js/previewosd.js"></script>
<script src="js/skenario3js/previewChangeosd.js"></script>
<script src="js/skenario3js/detailOsd.js"></script>
<script src="js/skenario3js/previewDetOsd.js"></script>



</body>
<br>
<br>
<br><br>
<br>


</html>
