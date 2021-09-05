 // 2. This code loads the IFrame Player API code asynchronously.
 var tag = document.createElement('script');

 tag.src = "https://www.youtube.com/iframe_api";
 var firstScriptTag = document.getElementsByTagName('script')[0];
 firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

 // 3. This function creates an <iframe> (and YouTube player)
 //    after the API code downloads.
 var player;
 function onYouTubeIframeAPIReady() {
   player = new YT.Player('player', {
     width: '100%',
     videoId: 'An0Wvvnppco',
     playerVars: { 'autoplay': 1, 'playsinline': 1 ,'mute':1, 'controls':0,'playlist':'HBh5CJukaig','loop':1,'showinfo':0},
     events: {
       'onReady': onPlayerReady
     }
   });
 }

 // 4. The API will call this function when the video player is ready.
 function onPlayerReady(event) {
    event.target.mute();
   event.target.playVideo();
 }


 // =================LOBI ===================
 var player1;
 function onYouTubeIframeAPIReady1(vidid) {
   player1 = new YT.Player('player1', {
     width: '100%',
     videoId: vidid,
     playerVars: { 'autoplay': 1, 'playsinline': 1 ,'mute':1, 'controls':0,'playlist':'HBh5CJukaig','loop':1,'showinfo':0},
     events: {
       'onReady': onPlayerReady1
     }
   });
 }

 // 4. The API will call this function when the video player is ready.
 function onPlayerReady1(event) {
    event.target.mute();
   event.target.playVideo();
 }

 // ===============RESTAURANT====================

 var player2;
 function onYouTubeIframeAPIReady2(vidid) {
   player2 = new YT.Player('player2', {
     width: '100%',
     videoId: vidid,
     playerVars: { 'autoplay': 1, 'playsinline': 1 ,'mute':1, 'controls':0,'playlist':'ZW3DlXjMyYg','loop':1,'showinfo':0},
     events: {
       'onReady': onPlayerReady2
     }
   });
 }

 // 4. The API will call this function when the video player is ready.
 function onPlayerReady2(event) {
    event.target.mute();
   event.target.playVideo();
 }

 // =============== KAMAR ===========================

 var player3;
 function onYouTubeIframeAPIReady3(vidid) {
   player3 = new YT.Player('player3', {
     width: '100%',
     videoId: vidid,
     playerVars: { 'autoplay': 1, 'playsinline': 1 ,'mute':1, 'controls':0,'playlist':'HBh5CJukaig','loop':1,'showinfo':0},
     events: {
       'onReady': onPlayerReady3
     }
   });
 }

 // 4. The API will call this function when the video player is ready.
 function onPlayerReady3(event) {
    event.target.mute();
   event.target.playVideo();
 }

  // =============== LOBI KAMAR ===========================

  var player4;
  function onYouTubeIframeAPIReady4(vidid) {
    player4 = new YT.Player('player4', {
      width: '100%',
      videoId: vidid,
      playerVars: { 'autoplay': 1, 'playsinline': 1 ,'mute':1, 'controls':0,'playlist':'QZYg-cNM3OI','loop':1,'showinfo':0},
      events: {
        'onReady': onPlayerReady4
      }
    });
  }

  // 4. The API will call this function when the video player is ready.
  function onPlayerReady4(event) {
     event.target.mute();
    event.target.playVideo();
  }








