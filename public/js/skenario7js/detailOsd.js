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
    url : 'img/h8/hrkamar1r.jpg',
    buildPyramid: false
},
{
   type : 'image',
   url : 'img/h8/hrrestaurant2r.jpg',
   buildPyramid: false
},
 {
    type : 'image',
    url : 'img/h8/kamarmandi1r.jpg',
    buildPyramid: false
 },
 {
    type : 'image',
    url : 'img/h8/kamarmandi2r.jpg',
    buildPyramid: false
 }




],
sequenceMode: true,
});



