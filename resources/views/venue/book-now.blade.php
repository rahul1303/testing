<style>
    .query-book{
        font-size:16px;
        color:black;
        padding: 10px;
        font-style: italic;
        font-family: serif;
    }
</style>
<div class="row " style="margin-top: 20px;">
    <div class="col-sm-12">
        <div class="row">
            <div class="query-book col-sm-7 col-sm-offset-1 col-xs-offset-0 col-xs-6">
                If you have any query.Please Feel free to contact us at +91-8800 355 421  |   +91-9654 182 422
            </div>
            <div class="query-book col-sm-1 col-xs-1">
                OR
            </div>
            <div class=" col-sm-2 col-sm-offset-0 col-xs-offset-0 col-xs-4">
                <a href="{{ asset('view/'.$details->venue_type.'/'.$details->city.'/'.$details->slug.'/'.$details->unique.'/book-now') }}"><button class="form-control btn " style="background-color: red;color: white;padding-top: 10px;padding-bottom: 30px; "><b>Book Now</b></button></a>
            </div>
        </div>
    </div>
</div>
