function seeDetail() {
    var x = document.getElementById("back2");
    var x1 = document.getElementById("headerdetail2");
    var z=document.getElementById("infomenginap");
    var z1=document.getElementById("listkamar");
    var y = document.getElementById("back");
    var y1 = document.getElementById("headerdetail")
    var a= document.getElementById("detailKamar");
    if (x.style.display == "none" && x1.style.display =="none" ) {
      x.style.display = "block";
      x1.style.display = "block";
      y.style.display ="none";
      y1.style.display ="none";
      z.style.display="none";
      z1.style.display="none";
      a.style.display="block";
    } else {
      y.style.display = "block";
      y1.style.display = "block";
      x.style.display = "none";
      x1.style.display = "none";
      z.style.display="block";
      z1.style.display="block";
      a.style.display="none";
    }
  }
