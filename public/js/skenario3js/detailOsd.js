var viewerr= OpenSeadragon({
    visibilityRatio: 1.0,
maxZoomPixelRatio:10,
minZoomImageRatio:1,
defaultZoomLevel:1,
navigatorAutoFade:  false,
constrainDuringPan: true,
showNavigator:true,
zoomInButton:   "zoom-in",
zoomOutButton:  "zoom-out",
homeButton:     "home",
nextButton:     "next",
previousButton: "previous",
id:            'detailImage',
prefixUrl:     '/img/images/',
tileSources:[
    {
        type : 'image',
    url : 'hrkamar1.png',
    buildPyramid: false
},
 {
    type : 'image',
    url : 'hrkmrmndi2.png',
    buildPyramid: false
 }

],
sequenceMode: true,
});



