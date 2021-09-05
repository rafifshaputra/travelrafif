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
        url : 'https://i.ibb.co/TLjvM8Q/hrlobi1.jpg',
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
        url : '/img/hr/hrkolamrenang1.jpg',
        buildPyramid: false
    }
  });

  var viewer3= OpenSeadragon({
    visibilityRatio: 1.0,
    maxZoomPixelRatio:10,
    minZoomImageRatio:1,
    defaultZoomLevel:1.2,
    navigatorAutoFade:  false,
    constrainDuringPan: true,
    showNavigator:true,
    id:            'myImage3',
    prefixUrl:     '/img/images/',
    tileSources:   {
        type : 'image',
        url : '/img/hr/hrkamar1.png',
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
        url : '/img/hr/hrrestaurant1.jpg',
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
        url : 'https://i.ibb.co/Dw0WdN9/hrrestaurant2r.jpg',
        buildPyramid: false
    }
  });
