
window.onload = function () {
    getLocationsData();
}

function getLocationsData(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:"/getLocationData",
        method:"POST",
        cache:false,
        success:function(data) {
            LoadMap(data);
        }
    });
}


function LoadMap(markers) {
    var mapOptions = {
        zoom: 10,
        center: new google.maps.LatLng(-1.23444,36.7456 ),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

    var infoWindow = new google.maps.InfoWindow();

    for (var i = 0; i < markers.length; i++) {
        var data = markers[i];
        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: data.title
        });

        //Attach click event to the marker.
        (function (marker, data) {
            google.maps.event.addListener(marker, "click", function (e) {
                //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                infoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
                infoWindow.open(map, marker);
            });
        })(marker, data);
    }

}
