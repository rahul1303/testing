<nav class="navbar navbar-default" style="position: fixed;top:105px;right:0;left: 0;" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Edit record</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
            <ul class="nav navbar-nav">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <li style="padding-left: 30px;">  <input type="checkbox" name="checkbox1" value="" id="selectall"> <b>Select all</b></li>
                <li style="padding-left: 30px;">
                    <select name="edit_item_attribute" class="form-control" id="edit_multiple_item1">
                        <option value="" selected>Select Attribute</option>
                        <option value="event_type">Event_type</option>
                        <option value="pp">PP</option>
                        <option value="min_order">min_order</option>
                        <option value="show">Live</option>
                        <option value="bachelor">Bachelor</option>
                        </select>
                </li>
                <?php $path=Input::has('page')?Input::get('page'):null;?>
                <input type="hidden" name="path" value="{{ $path }}">
                <li style="padding-left: 30px;"><input type="text" name="text" id="text_area" class="form-control">
                    <select name="yn" id="yn" style="display: none" class="form-control">
                        <option value="" selected>Select Value</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>

                    <select name="event_type" id="event_type" style="display: none" class="form-control">
                        <option value="" selected>Event Type</option>
                        @foreach($events as $city)
                            <option value="{{ $city->event_type }}">{{ $city->event_type }}</option>
                        @endforeach
                    </select>
                    <li style="padding-left: 30px;"><button name="edit_multiple" value="edit" class="btn btn-warning" style="width:125px;">
                        Edit multiple item</button></li>
                <li style="padding-left: 30px;"><div class="col-lg-4 col-lg-offset-1 col-xs-12" class="form-control">
                    </div></li>
            </ul>

        </div>
    </div>
</nav>
