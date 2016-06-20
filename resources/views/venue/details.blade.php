
<div class="row" style="margin-top: 20px;">
    <div class=" col-sm-12 ">
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
            <div class="col-sm-3 col-xs-5">
                <b>Venue Name :</b>
            </div>
            <div class="col-sm-3 col-xs-6">
                {{ $details->venue_name}}
            </div>
        </div>
                <div class="row" style="padding-top: 6px;padding-bottom: 6px;">
                    <div class="col-sm-3 col-xs-5">
                        <b>Location :</b>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        {{ $details->address_1}}, {{ $details->address_2 }}, {{ $details->locality }}, {{ $details->city }}
                    </div>
                </div>
                <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
                    <div class="col-sm-3 col-xs-5">
                        <b>Timing :</b>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <?php $val=$details->timings; ?>
                        @foreach($val as $value)
                            {{ $value->start_time }} to {{ $value->end_time }}<br>
                        @endforeach
                    </div>
                </div>
                <div class="row" style="padding-top: 6px;padding-bottom: 6px;">
                    <div class="col-sm-3 col-xs-5">
                        <b>Manager Name</b>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        {{ $details->manager_name}}
                    </div>
                </div>
                <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
                    <div class="col-sm-3 col-xs-5">
                        <b>Contact :</b>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        0{{ $details->mobile}} <br> {{ $details->tel }}
                    </div>
                </div>
                <div class="row" style="padding-top: 6px;padding-bottom: 6px;">
                    <div class="col-sm-3 col-xs-5">
                        <b>Min Entries :</b>
                    </div>
                    <div class="col-sm-3 col-xs-6" style="color:red">
                        <b>{{ $details->person}}</b>
                    </div>
                </div>
                <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
                    <div class="col-sm-3 col-xs-5">
                        <b>Capacity :</b>
                    </div>
                    <div class="col-sm-3 col-xs-6" style="">
                        {{ $details->capacity}}
                    </div>
                </div>
                <div class="row" style="padding-top: 6px;padding-bottom: 1px;">
                    <div class="col-sm-3 col-xs-5">
                        <b>Party duration:</b>
                    </div>
                    <div class="col-sm-3 col-xs-6" style="">
                        {{ $details->duration}} hours
                    </div>
                </div>

    </div>
</div>