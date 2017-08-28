function initMap() {
    var map = new google.maps.Map(document.getElementById('carteObservationMap'), {
        center: new google.maps.LatLng(47.236634, 2.058567), // centrage sur la France
        zoom: 5
    });

    $markers = $.ajax({
        url: url,
        dataType: "xml",
        data : objData,
        type: 'GET',

        success: function (data) {
            response($.map(data, function (data) {
                return data;
            }));
        },

        error: function (jqXHR, textStatus, errorThrown) {
            /*console.log("jqXHR => ");
            console.log( jqXHR );
            console.log(textStatus, errorThrown);*/
        }
    }); // fin de l'ajax

    downloadUrl('/assets/fnat/xml/point.xml', function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');
        Array.prototype.forEach.call(markers, function(markerElem) {

            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));

            var marker = new google.maps.Marker({
                map: map,
                position: point
            });
        });
    });
}

function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };

    request.open('GET', url, true);
    request.send(null);
}

function doNothing() {}