
// Open the Modal
function openModal2() {
    document.getElementById("myModal2").style.display = "block";
    document.getElementById("navdetailbawah").style.display = "none";

  }

  // Close the Modal
  function closeModal2() {
    document.getElementById("myModal2").style.display = "none";
    document.getElementById("navdetailbawah").style.display = "block";
  }

  function pesan(){
    document.getElementById("desktop").style.display = "none";
    document.getElementById("backto").style.display="block";

    document.getElementById("myModal2").style.display = "none";
    document.getElementById("back21").style.display="none";
    document.getElementById("headerdetail2").style.display="none";
    document.getElementById("detailKamar").style.display="none";

    document.getElementById("back22").style.display="block";

  }

  function pesan2(){
    document.getElementById("myModal2").style.display = "none";
    document.getElementById("detailKamar").style.display="none";

    document.getElementById("back21").style.display="none";
    document.getElementById("backto").style.display="block";

    document.getElementById("back22").style.display="block";
    document.getElementById("headerdetail2").style.display="none";
    document.getElementById("myModal").style.display = "none";
    document.getElementById("back").style.display="none";

  }



