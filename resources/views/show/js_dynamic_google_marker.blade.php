
<script>
    $(document).ready(function(){

        var marker;
        var latlon=$('#latlon').val();
        var arraylatlon=latlon.split(';;');
        for(i=0;i<arraylatlon.length-1;i++) {
            var latlon = arraylatlon[i].split(',');
        }
        var lon=latlon[1]-0.03;
        var myCenter=new google.maps.LatLng(latlon[0],lon);
        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:13,
                panControl:true,
                zoomControl:true,
                mapTypeControl:true,
                scaleControl:true,
                streetViewControl:true,
                overviewMapControl:true,
                rotateControl:true,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("map_show"),mapProp);
            for(i=0;i<arraylatlon.length-1;i++){
                var latlon=arraylatlon[i].split(',');
                var myVenue=new google.maps.LatLng(latlon[0],latlon[1]);

                var marker=new google.maps.Marker({
                    position:myVenue,
                    icon:'{{ asset('storage/app/images/map_dot.png') }}'
                });
                marker.setMap(map);

                var infowindow = new google.maps.InfoWindow({
                    content:latlon[2]
                });
                marker.addListener('click', function() {
                    infowindow.open(map, this);
                });

            }


            var myCity = new google.maps.Circle({
                center:myVenue,
                radius:5000,
                strokeColor:"#0000FF",
                strokeOpacity:0.4,
                strokeWeight:1,
                fillColor:"#0000FF",
                fillOpacity:0.2
            });
            myCity.setMap(map);
            var i;
            var markers=[];
            var id=$('#venue_id').val();

            $('#relevance').change(function(){
                var relevance=$(this).val();
                if(relevance!='')
                {
                    var budget=$('#budget').val();
                    var capacity=$('#capacity').val();
                    var type=$('#type').val();
                    var location=$('#location').val();
                    $('.filter_venue').empty();
                    var img=$('#img').val();
                    $('.filter_venue').prepend('<center><img class="ajax-loader" src="'+ img +'" ></center>');
                    $.get('{{ asset('ajax-relevance?r=') }}'+relevance+'&type='+type+'&location='+location+'&budget='+budget+'&capacity='+capacity,function(data){
                        $('.ajax-loader').hide();
                        $.each(data, function(index, venue){
                            $('.filter_venue').append('<div class="row get_venue" id="'+venue.id+'">' +
                                    '<div class="row" style="margin-bottom: 10px;">' +
                                    '<div class="col-sm-6 col-xs-5" > <b>'+venue.venue_name+'</b> </div>' +
                                    '<div class="col-sm-6 col-xs-7" ><span class="fa fa-inr"></span> '+venue.rupee+' per person </div> ' +
                                    '</div>' +
                                    ' <div class="row" style="margin-bottom: 10px;color: gray"> ' +
                                    '<div class="col-sm-3 col-xs-5">Address: </div> ' +
                                    '<div class="col-sm-9 col-xs-6 col-xs-offset-1"  style="color: grey">' +(venue.address_1+','+venue.address_2+','+venue.locality).substring(0,50)+'</div>' +
                                    ' </div>' +
                                    ' <div class="row" style="margin-bottom: 10px;color: gray">' +
                                    ' <div class="col-sm-3 col-xs-5">Desrciption: </div>' +
                                    ' <div class="col-sm-9 col-xs-6 col-xs-offset-1"  style="color: grey"> '+(venue.discription).substring(0,50)+'</div>' +
                                    ' </div>' +
                                    '</div>'
                            );
                        })  ;
                        if (history.pushState) {
                            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?'+relevance+'=ASC';
                            window.history.pushState({path:newurl},'',newurl);
                        }
                    });
                    $('.showHide').fadeOut(100);
                    for(i=0;i<=markers.length;i++){
                        if(markers[i].visible){
                            markers[i].setVisible(false);
                            markers[i+1].close();
                        }
                    }
                }
            });
            function samefunction(id){
                $('#slideshow').empty();
                $.get('{{asset('ajax-image?id=')}}'+id,function(image) {
                    $.each(image,function(index,images) {
                        var img = images.path;
                        if(img!='') {
                            $('#slideshow').append(' <div><img class="img-slide" src="http://localhost/bashindia/storage/app/' + img + '"> </div>');
                        }
                    });
                });
                $.get('{{asset('ajax-budget?id=')}}'+id,function(combo) {
                    $('.slide_budget').empty();
                    $.each(combo,function(index,combos) {
                        $('.slide_budget').append(
                                '<div class="row" style="margin-top: 20px;"> ' +
                                '<div class="col-sm-12 " style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">' +
                                ' <div class="row">' +
                                ' <div class="col-sm-6 col-xs-6">' +
                                '<b>'+combos.combo+'</b> ' +
                                '</div>' +
                                ' <div class="col-sm-6 col-xs-6"> ' +
                                '<span class="description fa fa-inr">'+combos.budget+' per person ('+combos.type +')</span> ' +
                                '</div>' +
                                ' </div>' +
                                ' </div> ' +
                                '</div>'
                        );
                    });
                });

                $.get('{{asset('ajax-latlon?id=')}}'+id,function(data) {
                    $('.slide_venue_name').empty();
                    $('.slide_venue_name').append(data.venue_name);
                    $('.sub_slide_venue_name').empty();
                    $('.sub_slide_venue_name').append(data.venue_name);
                    $('.slide_location').empty();
                    $('.slide_location').append(data.address_1+','+data.address_2+','+data.locality);
                    $('.slide_timing').empty();
                    $('.slide_timing').append(data.address_1+','+data.address_2+','+data.locality);
                    $('.slide_capacity').empty();
                    $('.slide_capacity').append(data.capacity);
                    $('.slide_entries').empty();
                    $('.slide_entries').append(data.person);
                    $('.slide_duration').empty();
                    $('.slide_duration').append(data.duration+' hours');
                    $('.slide_duration').empty();
                    $('.slide_duration').append(data.duration+' hours');
                    $('.slide_dj').empty();
                    $('.slide_dj').append(data.dj);
                    $('.slide_parking').empty();
                    $('.slide_parking').append(data.parking+' cars');
                    $('.slide_metro').empty();
                    $('.slide_metro').append(data.metro);
                    $('.slide_bachelor').empty();
                    $('.slide_bachelor').append(data.bachelor);
                    $('.slide_description').empty();
                    $('.slide_description').append(data.discription);
                    $(".a_book").removeAttr("href");
                    $(".a_info").removeAttr("href");
                    $('.a_book').attr("href",data.venue_type+'/'+data.city+'/'+data.slug+'/'+data.unique+'/book-now');
                    $('.a_info').attr("href",data.venue_type+'/'+data.city+'/'+data.slug+'/'+data.unique);
                    $('.id').val(data.id);
                    $('.showHide').fadeIn(300);
                    var marker1 = new google.maps.Marker({
                        position: new google.maps.LatLng(data.venue_lat, data.venue_lon),
                    }); 
                    marker1.setMap(map);
                    markers.push(marker1);
                    var infowindow = new google.maps.InfoWindow({
                        content: data.venue_name
                    });
                    infowindow.open(map, marker1);
                    markers.push(infowindow);
                    if (history.pushState) {
                        var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?name='+data.slug+'&id='+id;
                        window.history.pushState({path:newurl},'',newurl);
                    }
                });

                for(i=0;i<=markers.length;i++){
                    if(markers[i].visible){
                        markers[i].setVisible(false);
                        markers[i+1].close();
                    }
                }
            }

            $('.hide-cross').click(function(){
                $('.showHide').fadeOut();
                if (history.pushState) {
                    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname;
                    window.history.pushState({path:newurl},'',newurl);
                }
                for(i=0;i<=markers.length;i++){
                    if(markers[i].visible){
                        markers[i].setVisible(false);
                        markers[i+1].close();
                    }
                }
            });
            $(document).on('click', ".get_venue", function() {
                $('.showHide').fadeOut(100);
                var id=this.id;
               samefunction(id);
            });
            if(id!=''){
                samefunction(id);
            }
        }
        google.maps.event.addDomListener(window, 'load', initialize);

    });
</script>