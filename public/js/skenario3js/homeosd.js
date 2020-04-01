
var viewer = OpenSeadragon({
    visibilityRatio: 1.0,
    maxZoomPixelRatio:10,
    navigatorAutoFade:  false,
    minZoomImageRatio:1,
    defaultZoomLevel:1.5,
    constrainDuringPan: true,
    showNavigator:true,
    navigatorHeight:   "200px",
        navigatorWidth:    "200px",
    id:            'myImage',
    prefixUrl:     '/img/images/',
    tileSources:   {
        type : 'image',
        url : '/hrlobi1.jpg',
        buildPyramid: false
    }

  });



  var viewer2= OpenSeadragon({
    visibilityRatio: 1.0,
    maxZoomPixelRatio:10,
    minZoomImageRatio:1,
    defaultZoomLevel:1.5,
    navigatorAutoFade:  false,
    constrainDuringPan: true,
    showNavigator:true,
    id:            'myImage2',
    prefixUrl:     '/img/images/',
    tileSources:   {
        type : 'image',
        url : '/hrkolamrenang1.jpg',
        buildPyramid: false
    }
  });

  var viewer3= OpenSeadragon({
    visibilityRatio: 1.0,
    maxZoomPixelRatio:10,
    minZoomImageRatio:1,
    defaultZoomLevel:1.5,
    navigatorAutoFade:  false,
    constrainDuringPan: true,
    showNavigator:true,
    id:            'myImage3',
    prefixUrl:     '/img/images/',
    tileSources:   {
        type : 'image',
        url : '/hrkamardet.jpg',
        buildPyramid: false
    }
  });

  var viewer4= OpenSeadragon({
    visibilityRatio: 1.0,
    maxZoomPixelRatio:10,
    minZoomImageRatio:1,
    defaultZoomLevel:1.5,
    navigatorAutoFade:  false,
    constrainDuringPan: true,
    showNavigator:true,
    id:            'myImage4',
    prefixUrl:     '/img/images/',
    tileSources:   {
        type : 'image',
        url : '/hrrestaurant1.jpg',
        buildPyramid: false
    }
});

    var viewer5= OpenSeadragon({
        visibilityRatio: 1.0,
    maxZoomPixelRatio:10,
    minZoomImageRatio:1,
    defaultZoomLevel:1.5,
    navigatorAutoFade:  false,
    constrainDuringPan: true,
    showNavigator:true,
    id:            'myImage5',
    prefixUrl:     '/img/images/',
    tileSources:   {
        type : 'image',
        url : '/hrrestaurant2.jpg',
        buildPyramid: false
    }
  });

