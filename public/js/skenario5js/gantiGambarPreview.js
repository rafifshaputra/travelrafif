function gantiGambar1(){
    y= "https://momento360.com/e/u/262ce4718852425cb7ad828fc373353f?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";
    document.getElementById('kmrmandi').style.opacity = "0.4";
    document.getElementById('kmrbiasa').style.opacity = "1";
    document.getElementById("gambarutama").src=y;
    document.getElementById('textnum').innerHTML="1/2";
    document.getElementById('caption').innerHTML= "Kamar Tidur";
}

function gantiGambar(){
    y="https://momento360.com/e/u/af4c0a2f948440d09e82c1ad3e4e6bfb?utm_campaign=embed&utm_source=other&utm_medium=other&heading=-170.2301124386729&pitch=12.711235380481334&field-of-view=75";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = document.getElementById("kmrmandi").alt;
    document.getElementById('gambarutama').src=y;
    document.getElementById('caption').innerHTML= "Kamar Mandi (*Note = Pintu Terpotong)";
    document.getElementById('kmrbiasa').style.opacity = "0.4";
    document.getElementById('kmrmandi').style.opacity = "1";
    document.getElementById('textnum').innerHTML="2/2";

}
