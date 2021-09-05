<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
.contain{
    margin:0px 300px;
    padding:0px 15px;
}
button {
  background-color: #3A7765; /* Green */
  border: none;
  color: white;
  padding: 6px 15px;
  width:200px;

  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
}

.mobile{
    display:none
}

@media screen and (max-width: 1000px) {

    .mobile{
        display:block;
    }

    .desktop{
        display:none;
    }
    .contain{
        margin:0px 0px;
        padding:2px;
    }

    .modal-dialog{
        font-size:32px;
    }
}
</style>

</head>

<body>
    <div class="contain">
        <div class="desktop">
            <div class="card" style="margin-top:20%;padding:50px;width:100%;">
                <div class="card-body">
                    <form method="post" action="get-form-survei" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        <label> <b>Masukkan Nomor Hp/Email </b></label>
                        <img src="img/icon/interface.png" data-toggle="modal" data-target="#exampleModal" style="left:3%;width:20px;height:20px;">

                        <br>
                        <span style="color:red;">*jika sudah pernah membuka survei ini harap memasukkan data yang sama sebelumnya.</span>
                        <br><br>
                        <div class="col-ml" style="display:flex; margin-bottom:25px;flex-direction: row; margin-top:-10px;width:75%">
                            <input type="text" name="responden" class="form-control" placeholder="Masukkan email atau nomor hp" id="responden"  required>
                        </div>

                        <button type="submit" class="btn btn-primary" style="margin-top:10px">Lanjutkan</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mobile">
            <div class="card" style="margin-top:20%;padding:50px;width:100%;">
                <div class="card-body">
                    <form method="post" action="get-form-survei" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        <label style="font-size:32px;"> <b>Masukkan Nomor Hp/Email </b></label>
                        <img src="img/icon/interface.png" data-toggle="modal" data-target="#exampleModal" style="left:3%;width:40px;height:40px;">

                        <br>
                        <span style="color:red;font-size:26px;">*jika sudah pernah membuka survei ini harap memasukkan data yang sama sebelumnya.</span>
                        <br><br>
                        <div class="col-ml" style="display:flex; margin-bottom:25px;flex-direction: row; margin-top:-10px;width:75%;font-size:26px;">
                            <input style="font-size:28px;"type="text" name="responden" class="form-control" placeholder="Masukkan email atau nomor hp" id="responden"  required>
                        </div>

                        <button type="submit" class="btn btn-primary" style="margin-top:10px;font-size:24px;">Lanjutkan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

<div class="modal fade" id="exampleModal">
    <div class="modal-dialog" role="document" >
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Keterangan</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p><b>Mengapa data ini diminta?</b><br>
            </p>
            <li>Sebagai indikasi responden terhadap survei penelitian yang diisi.</li>
            <li>Jika responden tidak sengaja menutup kuesioner, maka responden akan mendapat kuesioner yang sama dengan yang sebelumnya. </li>
            <li>Digunakan untuk mengirim hadiah jika terpilih sebagai pemenang.</li><br>

            <span style="color:red;">*catatan: data hanya digunakan untuk kepentingan penelitian</span>

        </div>
        <br>
        </div>
    </div>
</div>
</body>

</html>
