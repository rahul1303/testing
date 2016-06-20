<script>
    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
        $('#slideshow > div:first')
                .fadeOut(500)
                .next()
                .fadeIn(500)
                .end()
                .appendTo('#slideshow');
    },2000);
</script>
<div class="panel row" style="margin-top: -20px;">
    <div class="panel-heading">
        <span class="fa fa-times fa-2x col-xs-offset-10 col-sm-offset-11 hide-cross" style="cursor: pointer"></span>
    </div>
</div>

<div id="slideshow">
</div>
<div class="row">
    <center><h2 class="slide_venue_name" style="color:lightblue">Name of the Venue</h2></center>
    <ul class="nav nav-tabs" style="font-size: 12px;">
        <li class="active"><a data-toggle="tab" href="#details">Details</a></li>
        <li><a data-toggle="tab" href="#amenities">Amenities</a></li>
        <li><a data-toggle="tab" href="#buffet-packages">Buffet Packages</a></li>
        <li><a data-toggle="tab" href="#check-availability">Availabilty</a></li>
    </ul>

    <div class="tab-content book-now-margin">
        <div id="details" class="tab-pane fade in active">
            <div class="row" style="margin-top: 20px;">
                <div class=" col-sm-12 ">
                    <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
                        <div class="col-sm-6 col-xs-6">
                            <b>Venue Name :</b>
                        </div>
                        <div class="col-sm-6 col-xs-6 sub_slide_venue_name">
                            Name
                        </div>
                    </div>
                    <div class="row" style="padding-top: 6px;padding-bottom: 6px;">
                        <div class="col-sm-6  col-xs-6">
                            <b>Location :</b>
                        </div>
                        <div class="col-sm-6  col-xs-6 slide_location">
                            Location
                        </div>
                    </div>
                    <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
                        <div class="col-sm-6  col-xs-6">
                            <b>Timing :</b>
                        </div>
                        <div class="col-sm-6  col-xs-6 slide_timing">
                            timing
                        </div>
                    </div>
                    <div class="row" style="padding-top: 6px;padding-bottom: 6px;">
                        <div class="col-sm-6  col-xs-6">
                            <b>Min Entries :</b>
                        </div>
                        <div class="col-sm-6  col-xs-6 slide_entries" style="color:red">
                            <b>Entries</b>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
                        <div class="col-sm-6  col-xs-6">
                            <b>Capacity :</b>
                        </div>
                        <div class="col-sm-6  col-xs-6 slide_capacity" style="">
                            capacity
                        </div>
                    </div>
                    <div class="row" style="padding-top: 6px;padding-bottom: 1px;">
                        <div class="col-sm-6  col-xs-6">
                            <b>Party duration:</b>
                        </div>
                        <div class="col-sm-6  col-xs-6 slide_duration" style="">
                            hours
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="amenities" class="tab-pane fade">

            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
                    <div class="row">
                        <div class="col-sm-5 col-xs-6">
                            <b>DJ Available :</b>
                        </div>
                        <div class="col-sm-6 col-xs-6 description slide_dj">
                          </div>
                    </div>
                </div>
                <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: white">
                    <div class="row">
                        <div class="col-sm-5 col-xs-6">
                            <b>Parking :</b>
                        </div>
                        <div class="col-sm-6 col-xs-6 description slide_parking">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
                    <div class="row">
                        <div class="col-sm-5 col-xs-6">
                            <b>Nearest Metro Station :</b>
                        </div>
                        <div class="col-sm-6 col-xs-6 description slide_metro">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: white">
                    <div class="row">
                        <div class="col-sm-5 col-xs-6">
                            <b>Party duration time :</b>
                        </div>
                        <div class="col-sm-6 col-xs-6 slide_duration description">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
                    <div class="row">
                        <div class="col-sm-5 col-xs-6">
                            <b>Bachelor :</b>
                        </div>
                        <div class="col-sm-6 col-xs-6  description slide_bachelor">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: white">
                    <div class="row">
                        <div class="col-sm-5 col-xs-6">
                            <b>Description :</b>
                        </div>
                        <div class="col-sm-6 col-xs-6 description slide_description">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="buffet-packages" class="tab-pane fade">
            <div class="slide_budget">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-12 " style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <b>Primary :</b>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <span class="description fa fa-inr"> 1100 per person</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row check-text" style="margin-bottom:70px;margin-top: 20px;padding: 10px;"></div>

        </div>
        <div id="check-availability" class="tab-pane fade">
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-12" style=" padding-top: 6px;padding-bottom: 6px;">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1 col-xs-6">
                        <input type="date" min="<?php echo date('Y-m-d', time()+2*86400); ?>" id="date" class="form-control">
                        </div>
                        <div class="col-sm-5 col-sm-offset-1 col-xs-6">
                            <button class="btn btn-success check">Check Availability</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="id" value="0"><center>
                <div class="row check-text" style=" margin-left:10px;margin-right:10px;margin-bottom:100px;margin-top: 20px;padding: 10px;"></div></center>
            </div>
        </div>
    </div>
</div>
<div class="row book-now">
    <a href="#" class="a_book"style="color: white;" text-decortion="none">
        <div class="col-sm-6 col-xs-6" style="background-color:red;color: white;padding: 15px;font-size:15px;">
            <b><center>Book Now</center></b>
        </div></a>
    <a href="#" class="a_info" style="color: white;" text-decortion="none">
        <div class="col-sm-6 col-xs-6 bg-info" style="  background-color:lightskyblue;color: white;padding: 15px;font-size:15px;">
            <b><center>More Details</center></b>
        </div></a>
</div>
<script>
    $(document).on('click', ".check", function() {
        var id=$('.id').val();
        var date=$('#date').val();
        $('.check-text').empty();
        $('.check-text').append('Searching...').css('color', 'blue');
        $('.check-text').removeClass('alert alert_danger');
        if(date==''){
            $('.check-text').empty();
            $('.check-text').append('You forget to enter date').css('color', 'red');
        }
        else {
            $.get('{{ asset('ajax-date?date=') }}' + date + '&id=' + id, function (data) {
                $('.check-text').empty();
                if (data == 'Available') {
                    $('.check-text').append('Slot available').css('color', 'green');
                }
                else {
                    $('.check-text').append('There is already some slot booked.Check' +
                            ' if you are comfortable with the slot left in timing field.By clicking on book now button.').css('color', 'red');
                }
            });
        }
    });
</script>