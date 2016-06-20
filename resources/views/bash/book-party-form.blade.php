<style>
    @media screen and (max-width: 767px) {
        .text-res{
            font-size: 14px;
        }
    }
    @media screen and (min-width: 767px) {
        .text-res{
            font-size: 20px;
        }
    }
</style>
<img src="{{ asset('storage/app/images/party-people2.jpg') }}" width="100%" height="640px;"  style=" left: 0;  top: 0;">
<div class="text-res" style="z-index: 100;
  position: absolute;
  color: white;
  font-weight: bold;
  left: 15%;
  width: 60%;
  top: 300px;">
    <div class="row">
        <div class=" col-sm-offset-0 col-xs-offset-3 col-lg-12 col-sm-12" >
            <form class="form-horizontal" action="{{url('result')}}" method="get" style="
            background-color: rgba(0,0,0,0.5);
            padding:20px; margin-bottom: 150px;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row text-res">
                    <label class="control-label col-xs-12 col-sm-3"for="SKU">I am looking for</label>
                    <div class="col-sm-offset-0 col-sm-3 col-xs-offset-0 col-xs-12">
                        <label>
                            <select name="type" class="form-control " >
                                <option value="" selected style="color: #B0BEC5;padding-right: -10px;">Select party venue</option>
                                <option value="Pub">PUB</option>
                                <option value="Club">Club</option>
                                <option value="Lounge">Lounge</option>
                                <option value="Bar">Bar</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Banquet" disabled>Banquet</option>
                                <option value="Resort" disabled>Resort</option>
                            </select>
                        </label>
                    </div>
                    <label class="control-label col-sm-1 col-xs-offset-0 col-lg-offset-0 col-xs-7 col-lg-1"  for="location">in</label>
                    <div class=" col-sm-offset-0 col-sm-3 col-xs-offset-0 col-xs-12">
                        <label>
                            <select name="location" class="form-control">
                                <option value="" selected style="color: #B0BEC5">&#xf041; Location</option>
                                <optgroup label="Complete City">
                                <option value="Gurgaon">Gurgaon</option>
                                </optgroup>
                                <optgroup label="Specific locality in city">

                                    @foreach($locality as $city)
                                        <option value="{{ $city->locality }}">{{ $city->locality }}</option>

                                        @endforeach
                                </optgroup>
                            <!--    <option value="delhi" disabled>Delhi</option>
                                <option value="faridabad" disabled>Faridabad</option>
                                <option value="noida" disabled>Noida</option>
                            --></select>
                        </label>
                    </div>
                    <div class="col-lg-2 col-sm-offset-3 col-lg-offset-0 col-xs-offset-0 col-xs-7">
                        <button class=" btn-primary btn" style="padding: 7px 25px;">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>