function myFunction() {
    var x = document.getElementById("mobile");
    var y = document.getElementById("mobile2");
    if (x.style.display === "none") {
      x.style.display = "block";
      y.style.display ="none"
    } else {
      y.style.display = "block";
      x.style.display = "none";

    }
  }
