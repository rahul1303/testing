<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Get direction</title>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMiRrDGYah6qSeZT-qC3ObLSTmbvCeb74"
            type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        function calculateRoute(from, to) {
            // Center initialized to Naples, Italy
            var myOptions = {
                zoom: 3,
                center: new google.maps.LatLng(from),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);
            window.setInterval(function(){
                var directionsService = new google.maps.DirectionsService();
                var directionsRequest = {
                    origin: from,
                    destination: to,
                    travelMode: google.maps.DirectionsTravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.METRIC
                };
                directionsService.route(
                        directionsRequest,
                        function(response, status)
                        {
                            if (status == google.maps.DirectionsStatus.OK)
                            {
                                new google.maps.DirectionsRenderer({
                                    map: mapObject,
                                    directions: response
                                });
                            }
                            else
                                $("#error").append("Unable to retrieve your route<br />");
                        }
                );
            }, 2000);
            $('#info').show();
            $('#info_1').show();
        }

        $(document).ready(function() {
            window.setInterval(function(){
                if (navigator.geolocation) {
                    navigator.geolocation.watchPosition(showPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
                function showPosition(position) {
                    $('#from').val(position.coords.latitude + ',' + position.coords.longitude);
                }
            }, 5000);
            if (navigator.geolocation) {
                navigator.geolocation.watchPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
            function showPosition(position) {
                $('#from').val(position.coords.latitude + ',' + position.coords.longitude);
            }
            $("#submit").on('click',function(event) {
                event.preventDefault();
                $(this).hide();

                calculateRoute($("#from").val(), $("#to").val());
            });

        });

    </script>    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">

        #map {
            width: 100%;
            height: 550px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-group">
        <input type="hidden" id="from" name="from">
        <input type="hidden" id="to" value="{{ Input::has('lat')?Input::get('lat'):Null }},{{ Input::has('lon')?Input::get('lon'):Null }}" >
        <div class=" col-sm-12 col-xs-12">
        <button class="form-control btn btn-danger"id="submit"/>Click this button to get location</button>
        </div>
    </div>
<div id="map"></div>
<p id="info" style="text-align:center;font-size:15px;display: none;">Your current position is at <b style="color:green">A</b> and you have to reach at <b style="color:red">B</b> </p>
<p id="error"></p>
</div>
</body>
</html>