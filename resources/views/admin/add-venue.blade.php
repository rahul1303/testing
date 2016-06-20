    @extends('admin')

    @section('content')
        <style>
            .cursor{
                cursor:pointer;
            }
        </style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMiRrDGYah6qSeZT-qC3ObLSTmbvCeb74&libraries=places"
        type="text/javascript"></script>
        <script>
            $(window).load(function(){
                $('.select-toggle').each(function(){
                    var select = $(this), values = {};
                    $('option',select).each(function(i, option){
                        values[option.value] = option.selected;
                    }).click(function(event){
                        values[this.value] = !values[this.value];
                        $('option',select).each(function(i, option){
                            option.selected = values[option.value];
                        });
                    });
                });
            });
        </script>

    <div class="container-fluid" style="margin-top:30px;">
        <div class="row" >
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Product</div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/store') }} " enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $count+1 }}">
                                <input type="hidden" name="unique" value="{{ $random }}">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-11">
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="name">Manager :</label>
                                            <div class="  col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="manager_name" id="manager_name" placeholder="manager name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="mobile">Mobile :</label>
                                            <div class="  col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="mobile" id="mobile"placeholder="mobile">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="tel">Tel :</label>
                                            <div class="  col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="tel" id="tel" placeholder="tel">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="address">Address 1 :</label>
                                            <div class="  col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="address_1" id="address_1" placeholder="address_1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="address">Address 2 :</label>
                                            <div class="  col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="address_2" id="address_2" placeholder="address_2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="locality">Locality :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="locality" id="locality" placeholder="Locality">
                                                <input type="hidden" name="locality_1" id="locality_1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="city">City :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <select name="city" id="city" class="form-control">
                                                    <option value="" selected style="color: #B0BEC5">Location</option>
                                                    <option value="Gurgaon">Gurgaon</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Faridabad">Faridabad</option>
                                                    <option value="Noida">Noida</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="type">Type :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <select name="type[]" id="type" class="select-toggle form-control" multiple required>
                                                    <option value="" selected style="color: #B0BEC5">Select party venue</option>
                                                    <option value="Pub">PUB</option>
                                                    <option value="Club">Club</option>
                                                    <option value="Lounge">Lounge</option>
                                                    <option value="Bar">Bar</option>
                                                    <option value="Banquet">Banquet</option>
                                                    <option value="Restaurant">Restaurant</option>
                                                    <option value="Resort" >Resort</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="capacity">Capacity :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="capacity" id="capacity" placeholder="capacity">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="dj">Dj :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <select name="dj" id="dj" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2 col-xs-2 charges" style="display: none;">
                                                <input type="text" class="form-control" name="dj_charge" id="dj_charge" placeholder="dj charges">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="bachelor">Bachelor :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <select name="bachelor" id="bachelor" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="parking">Parking :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="parking" id="parking" placeholder="parking">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="person">Person :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="person" id="parking" placeholder="min-person">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="profit">PP :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="pp" id="pp" placeholder="p%">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="discount">Rupee :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="rupee" id="rupee" placeholder="minimum per person">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="email">Email :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email id">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="password">Password :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="password" id="password" placeholder="enter password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="duration">Duration :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="duration" id="duration" placeholder="Duration">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="account no">Account No :</label>
                                            <div class="col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="account" id="account" placeholder="account">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5 col-xs-3" for="show">Buffet fixed :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="fixed_buffet" id="fixed_buffet" class="form-control">
                                                    <option value="Yes" >Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-11">
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="venue_name">Venue Name :</label>
   routes                                         <div class="  col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="venue_name" placeholder="Venue Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5  col-xs-3" for="netro">Metro Station :</label>
                                            <div class="  col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="metro" id="metro" placeholder="Metro">
                                                <input type="hidden" name="metro_1" id="metro_1">
                                                <input type="hidden" name="metro_lat" id="metro_lat">
                                                <input type="hidden" name="metro_lon" id="metro_lon">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="  col-sm-11 col-sm-offset-1 col-xs-offset-1 col-xs-11">
                                                <div id="map-canvas" style=" width:450px;height:350px;"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5 col-xs-3" for="lat">Venue Lat :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="venue_lat" id="lat" placeholder="Venue_lat">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5 col-xs-3" for="lon">Venue Lon :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="venue_lon" id="lon" placeholder="Venue_lon">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5 col-xs-3" for="distance">Metro Distance :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="metro_dis" id="distance" placeholder="Distance from metro">
                                            </div>
                                        </div>
                                        <div class="form-group append-image">
                                            <label class="control-label  col-sm-5 col-xs-3" for="image">Image :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                {!! Form::file('images[]', array('multiple'=>true)) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5 col-xs-3" for="description">Description :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="10" name="description" placeholder="Description" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5 col-xs-3" for="description">Time to prepare(in days) :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="time_to_prepare" value="2" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5 col-xs-3" for="description">Cancellation percent :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="c_percent" value="15" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5 col-xs-3" for="show">Show :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="show" id="show" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="height:10px">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4  col-sm-5 col-xs-offset-4">
                                        <button type="submit" name="add_product" class="btn btn-primary" style="width:200px;">Add Product</button></div>
                                </div>
                            </form>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
       $('#dj').on('change',function(){

          if($('#dj').val()=='No')
          {
              $('.charges').show();
          }
           else
          {
              $('.charges').hide();
          }
       });
            var myCenter=new google.maps.LatLng(28.489102091115228,77.09340570918027);

        var map=new google.maps.Map(document.getElementById('map-canvas'),{
            center:myCenter,
            zoom:16,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        });var marker=new google.maps.Marker({
            position:myCenter,
            map:map,
            draggable:true
        });
        var searchBox=new google.maps.places.SearchBox(document.getElementById('metro'));
        var locality=new google.maps.places.SearchBox(document.getElementById('locality'));

        google.maps.event.addListener(locality,'places_changed',function() {

            var locality_1=$('#locality').val();
            $('#locality_1').val(locality_1);
        });

        google.maps.event.addListener(searchBox,'places_changed',function(){

            var places=searchBox.getPlaces();
            var bounds= new google.maps.LatLngBounds();
            var i, place;

            for(i=0;place=places[i];i++){
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(16);

            var lat=marker.getPosition().lat();
            var lng=marker.getPosition().lng();

            $('#metro_lat').val(lat);
            var metro_name=$('#metro').val();

            $('#metro_lon').val(lng);
            $('#metro_1').val(metro_name);
         });
        google.maps.event.addListener(marker,'position_changed',function(){

            var lat=marker.getPosition().lat();
            var lng=marker.getPosition().lng();

            $('#lat').val(lat);
            $('#lon').val(lng);
            var distance_val=distance( $('#metro_lat').val(),$('#metro_lon').val(), $('#lat').val(),$('#lon').val(), 'K');
            $('#distance').val(distance_val);
        });
        function distance(lat1, lon1, lat2, lon2, unit) {
            var radlat1 = Math.PI * lat1/180
            var radlat2 = Math.PI * lat2/180
            var radlon1 = Math.PI * lon1/180
            var radlon2 = Math.PI * lon2/180
            var theta = lon1-lon2
            var radtheta = Math.PI * theta/180
            var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
            dist = Math.acos(dist)
            dist = dist * 180/Math.PI
            dist = dist * 60 * 1.1515
            if (unit=="K") { dist = dist * 1.609344 }
            if (unit=="N") { dist = dist * 0.8684 }
            var dis=dist.toFixed(2);
            return dis
        }
    });
</script>
@endsection