<!----Show filter form on view product---->
<nav class="navbar navbar-default" style="z-index:100;position: fixed;top: 52px; right: 0px;left: 0px;background-color: #f9f9f9;" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Filter</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <form action="{{ url('admin/view-venue') }}" method="GET">
                <ul class="nav navbar-nav ">
                    <li style="padding-right:5px;"> <input type="text" name="key" id="sku" placeholder="enter key" style="width:105px;" class="form-control"></li>
                    <li style="padding-right:5px;"> <input type="text" name="min_budget" id="sku" placeholder="enter min_budget" style="width:105px;" class="form-control"></li>
                    <li style="padding-right:5px;"> <input type="text" name="max_budget" id="sku" placeholder="enter max_budget" style="width:105px;" class="form-control"></li>
                    <li style="padding-right:5px;"> <select name="show" class="form-control"  style="width:105px;">
                            <option value="" selected>Live</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </li>
                    <li style="padding-right:5px;"> <select name="type" class="form-control" style="width:115px;">
                            <option value="" selected>Type</option>
                            <option value="Veg">Veg</option>
                            <option value="Non Veg">Non Veg</option>
                        </select>
                    </li>
                    <li style="padding-right:5px;"><select name="capacity" class="form-control" style="width:105px;">
                            <option value="" selected>Capacity</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                            <option value="150">150</option>
                            <option value="200">200</option>
                            <option value="250">250</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                            <option value="500">500</option>
                        </select></li>
                    <li style="padding-right:5px;"><select name="city" class="form-control" style="width:105px;">
                            <option value="" selected>City</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->city }}">{{ $city->city }}</option>
                            @endforeach
                        </select></li>
                    <li style="padding-right:5px;"><select name="event_type" class="form-control" style="width:105px;">
                            <option value="" selected>Event type</option>
                            @foreach($events as $city)
                                <option value="{{ $city->event_type }}">{{ $city->event_type }}</option>
                            @endforeach
                            </select></li>
                    <li style="padding-right:5px;"><button class="btn btn-primary">Apply Filter</button></li>
                </ul>
            </form>
        </div>
    </div>
</nav>
