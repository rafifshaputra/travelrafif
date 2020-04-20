function gambarModal(){
    y="https://momento360.com/e/u/262ce4718852425cb7ad828fc373353f?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";
    document.getElementById('deskModalImage').src="";
    document.getElementById('deskModalImage').src=y;
    document.getElementById('kmrmodal').style.opacity = "1";
    document.getElementById('warn').style.display="none";
    document.getElementById('kmrmodal').style.borderStyle ="solid";
    document.getElementById('kmrmandimodal').style.opacity = "0.6";
    document.getElementById('kmrmandimodal').style.borderStyle ="none";

}

function gambarModal2(){
    y="https://momento360.com/e/u/af4c0a2f948440d09e82c1ad3e4e6bfb?utm_campaign=embed&utm_source=other&utm_medium=other&heading=-170.2301124386729&pitch=12.711235380481334&field-of-view=75";
    document.getElementById('deskModalImage').src="";
    document.getElementById('warn').style.display="block";
    document.getElementById('deskModalImage').src=y;
    document.getElementById('kmrmodal').style.opacity = "0.6";
    document.getElementById('kmrmodal').style.borderStyle ="none";
    document.getElementById('kmrmandimodal').style.opacity = "1";
    document.getElementById('kmrmandimodal').style.borderStyle ="solid";

}
