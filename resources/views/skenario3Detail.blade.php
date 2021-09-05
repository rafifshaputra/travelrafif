<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


    <script src="js/lightbox.js"></script>

    <script src="js/confirmationModal.js"></script>



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
<body>
    <nav id="mynav"class="navbar navbar-default" style="background-color:#3A7765;">
        <div class="container-fluid">
            <div class="navbar-header" >
                <div class="rows">
                    <div id="back"class="col-sm-2" style="padding:15px;">
                        <a href="/mob-hrsk3-94314"><button >
                            <img id="back21" src="https://imgur.com/aksZmFn.png" width="60px;">
                        </button>
                        </a>
                    </div>
                    <div id="headerdetail2"class="col-sm-10" style="padding:5px;">
                        <span style="color:white;font-size:38px;"><b>Horison Arison</b></span><br>
                        <span style="font-size:32px;color:white;">Deluxe Room</span>
                    </div>
                    <span id="back22"style="font-size:36px;color:white;display:none;">TRAVELRAF</p>
                </div>
            </div>
        </div>
    </nav>
<div id="detailKamar">
    <div class="contain" style="font-size:36px;background-color:white">
        <div style="background-color:white;border-radius:15px;height:600px;">
            <div id="detailImage"    alt="Los Angeles" width="1100" height="680" class="hover-shadow cursor"></div>



              <div style="background-color:#4a4a4a;padding-top:10px;padding-bottom:10px;">
                <span id="zoom-in" ><img src="/img/icon/zoom-in.png"  width="40" height="40"></span>
                <span id="zoom-out" ><img src="/img/icon/zoom-out.png"  width="40" height="40"> </span>
                <span id="home" ><img src="/img/icon/homes.png"  width="40" height="40"> </span>
                <span id="previous" ><img src="/img/icon/backk.png"  width="40" height="40"> </span>
                <span id="next" ><img src="/img/icon/next.png"  width="40" height="40"> </span>

                <span id="expand" onclick="openModal();"style="float:right;" ><img src="/img/icon/fullscreen.png"  width="40" height="40" > </span>
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
                <span style="font-size:28px;">  26.0  sqm </span>
            </div>
        </div>
        <hr style="border: 1px solid #D3D3D3;">
        <div class="row" style="padding-left:5%;padding-top:3%;padding-bottom:3%;">
            <div style="float:left;">
                <img src="img/icon/bed.png" width="50px" height="70px">
            </div>
            <div style="float:left;padding-left:5%">
                <span style="font-size:32px;"> <b>Bed Type </b></span><br>
                <span style="font-size:28px;">  2 Single bed or 1 Double Bed </span>
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
    <div class="contain" style="font-size:28px;background-color:white;word-wrap:break-word;padding:15px;height:600px;">
        <div  style="padding-left:5%;padding-top:3%;padding-bottom:3%;">
            <li style="font-size:32px;padding-bottom:2%;"><b> Hot Water</b> </li>
            <hr style="border: 1px solid #D3D3D3;">
            <li style="font-size:32px;padding-top:4%;"><b> Shower</b> </li><br>
            <hr style="border: 1px solid #D3D3D3;">
            <li style="font-size:32px;padding-top:4%;"><b>Toiletries</b> </li><br>
            <hr style="border: 1px solid #D3D3D3;">
            <li style="font-size:32px;padding-top:4%;"><b>Hair Dryer</b> </li><br>
        </div>
    </div><br>
    <!--ROOM AMINITIES -->
    <p style="font-size:32px;padding-left:4%;padding-top:1%;padding-bottom:2%;" ><b> Room Aminities</b> </p>
    <div class="contain" style="font-size:28px;background-color:white;word-wrap:break-word;padding:15px;height:550px;">
        <div  style="padding-left:5%;padding-top:3%;padding-bottom:3%;">
            <li style="font-size:32px;padding-bottom:2%;"><b> Air Conditioning</b> </li>
            <hr style="border: 1px solid #D3D3D3;">
            <li style="font-size:32px;padding-top:4%;"><b> Complimentary Bottled Water</b> </li><br>
            <hr style="border: 1px solid #D3D3D3;">
            <li style="font-size:32px;padding-top:4%;"><b> Coffee/Tea Maker</b> </li><br>
            <hr style="border: 1px solid #D3D3D3;">
        </div>
        <a class="accordion" id="amt"style="color:#3A7765;padding-left:4%;" ><u>More Room Aminities</u></a>
        <div class="panel" style="padding-left:4%;width:100%">
            <li style="font-size:32px;padding-top:4%;"><b> Regrigerator</b> </li><br>
            <hr style="border: 1px solid #D3D3D3;">
            <li style="font-size:32px;padding-top:4%;"><b> Television</b> </li><br>
            <hr style="border: 1px solid #D3D3D3;">
            <li style="font-size:32px;padding-top:4%;"><b> Desk</b> </li><br>
            <hr style="border: 1px solid #D3D3D3;">
            <li style="font-size:32px;padding-top:4%;"><b> In-room safe</b> </li><br>
            <hr style="border: 1px solid #D3D3D3;">
            <li style="font-size:32px;padding-top:4%;"><b> Blackout drapes/curtains</b> </li>
            <br>
            <br>
        </div>
    </div>
    <br>
    <br>
    <!--STICKY BOTTOM NAVBAR-->
    <nav class="shadow-lg navbar fixed-bottom navbar-light rounded" style="background-color:#EFECEC;padding-bottom:50px;padding-top:50px;">
            <button style="width:100%;" onclick="openModal2();"> Pesan Kamar ini</button>
        </span><br></a>
    </nav>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span  class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content" style="margin-top:5%;">


            <div id="textnums"class="numbertext" style="font-size:24px;">1 / 4</div>
            <div id="previewImage" data-u="image"width="100%" style="height:800px;" ></div>
            <div id="previewImage2" data-u="image"width="100%" style="height:800px;display:none;" ></div>
            <div id="previewImage3" data-u="image"width="100%" style="height:800px;display:none;" ></div>
            <div id="previewImage4" data-u="image"width="100%" style="height:800px;display:none;" ></div>
            <div id="previewImage5" data-u="image"width="100%" style="height:800px;display:none;" ></div>
            <div id="previewImage6" data-u="image"width="100%" style="height:800px;display:none;" ></div>



        <div class="caption-container">
            <p id="caption" style="color:white;font-size:24px;">Kamar Tidur</p>
        </div>

        <div class="rows">

            <div class="column">
                <img id="kmrbiasa"class="demo cursor" src="https://i.ibb.co/Pchrm5P/gambar4.png" style="width:100%;height:200px;opacity:1;"   onclick="gantiGambar()" >
            </div>
            <div class="column" >
                <img id="kmrbiasa2"class="demo cursor" src="/img/hr/hrkamar3.jpg"  style="width:100%;height:200px;"  onclick="gantiGambar2()" >
            </div>
            <div class="column" >
                <img id="kmrbiasa3"class="demo cursor" src="/img/hr/hrkamar4.jpg"  style="width:100%;height:200px;"  onclick="gantiGambar3()" >
            </div>

        </div>
        <div class="rows">
            <div class="column" >
                <img id="kmrmandi"class="demo cursor" src="https://i.ibb.co/CzxGHrb/20200308-130411.jpg" style="width:100%;height:200px;"  onclick="gantiGambar4()" >
            </div>
            <div class="column" >
                <img id="kmrmandi2"class="demo cursor" src="/img/hr/hrkmrmndi2.png" style="width:100%;height:200px;"  onclick="gantiGambar5()" >
            </div>
            <div class="column" >
                <img id="kmrmandi3"class="demo cursor" src="/img/hr/hrkmrmndi3.jpg"style="width:100%;height:200px;"  onclick="gantiGambar6()" >
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


            <button type="button" class="btn btn-primary" style="float:right;width:200px;" onclick=pesan2();>Iya, Pesan Hotel</button>


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


<script src="js/skenario3js/previewChangeImage.js"></script>
<script src="js/accordion.js"></script>
<script src="js/openseadragon.min.js"></script>
<script src="js/skenario3js/detailOsd.js"></script>
<script src="js/skenario3js/previewDetOsd.js"></script>
</body>
</html>
