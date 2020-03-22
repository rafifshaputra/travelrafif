var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
      document.getElementById('amt').innerHTML= "More Room Aminities";
      document.getElementById('amt').style.textDecoration = "underline";


    } else {
      panel.style.display = "block";
      document.getElementById('amt').innerHTML= "Less Room Aminities";
      document.getElementById('amt').style.textDecoration = "underline";


    }
  });
}
