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
            <form action="{{ url('admin/booking-details') }}" method="GET">
                <ul class="nav navbar-nav ">
                    <li style="padding-right:5px;"> <input type="date" name="after_date" id="sku" placeholder="enter min_budget" style=" width:145px;" class="form-control"></li>
                    <li style="padding-right:5px;"> <input type="date" name="website_booking_date" id="sku" placeholder="enter max_budget" style="width:145px;" class="form-control"></li>
                    <li style="padding-right:5px;"> <input type="date" name="party_booking_date" id="sku" placeholder="enter max_budget" style=" width:145px;"  class="form-control"></li>
                    <li style="padding-right:5px;"> <select name="money_to_manager" class="form-control"  style=" width:145px;">
                            <option value="" selected>Money to manager</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </li>
                    <li style="padding-right:5px;"><button class="btn btn-primary">Apply Filter</button></li>
                </ul>
            </form>
        </div>
    </div>
</nav>
