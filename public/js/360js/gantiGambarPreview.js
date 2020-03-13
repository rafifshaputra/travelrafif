function gantiGambar1(){
    y= "https://momento360.com/e/u/55df697591334df5a53db4b3fa6ea9cd?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";
    document.getElementById('kmrmandi').style.opacity = "0.4";
    document.getElementById('kmrbiasa').style.opacity = "1";
    document.getElementById("gambarutama").src=y;
    document.getElementById('textnum').innerHTML="1/2";
    document.getElementById('caption').innerHTML= "Kamar Tidur";
}

function gantiGambar(){
    y="https://momento360.com/e/u/3c26621f3fc74286a6c32dc0769e3ee7?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = document.getElementById("kmrmandi").alt;
    document.getElementById('gambarutama').src=y;
    document.getElementById('caption').innerHTML= "Kamar Mandi";
    document.getElementById('kmrbiasa').style.opacity = "0.4";
    document.getElementById('kmrmandi').style.opacity = "1";
    document.getElementById('textnum').innerHTML="2/2";

}
