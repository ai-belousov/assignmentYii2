ymaps.ready(init);
function init () {

    var myMap = new ymaps.Map("map", {
            center: [55.771251, 37.253809],
            zoom: 12
        }),

        myPlacemark0 = new ymaps.Placemark([55.771251, 37.253809], {
        }, {
            iconImageHref: 'images/label.png',
            iconImageSize: [40, 60],
            iconImageOffset: [0, 0],
            balloonContentSize: [40, 60],
            balloonLayout: "default#imageWithContent",
            balloonImageHref: 'images/label.png',
            balloonImageOffset: [0, 0],
            balloonShadow: false,
            balloonAutoPan: false
        });


    myMap.geoObjects
        .add(myPlacemark0);

    myMap.geoObjects.events.add([
        'balloonopen'
    ], function (e) {
        var geoObject = e.get('target');
        myMap.panTo(geoObject.geometry.getCoordinates(), {
            delay: 0
        });
    });

}