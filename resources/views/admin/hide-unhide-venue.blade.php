@extends('admin')

@section('content')
    <div class="container-fluid" style="margin-top:30px;">
        <div class="row" >
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Hide/Unhide Venue</div>
                    <div class="panel-body">
                        <div class="col-lg-12">
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
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row" style="">
                                        <div class=" col-lg-offset-4 col-xs-offset-2 col-sm-offset-3">
                                            <h2 style="color:#d5d5d5;"><b>Hide Venue</b></h2>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:40px;">
                                        <div class=" col-lg-offset-3 col-xs-offset-1 col-sm-offset-2">
                                            To Hide the venue. SELECT venue number and the punch the Hide button.
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:40px;">
                                        <div class="col-lg-12">
                                            <form class="form-role form-horizontal" action="{{ url('admin/venue/hide') }}" method="get">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group">
                                                    <label class="control-label col-lg-offset-3 col-lg-2 col-sm-3  col-xs-4" for="category">Select SKU :</label>
                                                    <div class="  col-sm-5 col-xs-7 col-lg-6">
                                                        <select name="hide[]" id="liveon" class="select-toggle form-control" multiple>
                                                            @foreach($venue_unhidden as $val)
                                                                <option value="{{ $val->id }}">{{ $val->id }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-5 col-xs-offset-4 col-xs-7 col-lg-offset-5">
                                                        <button class="btn btn-warning"> Hide Venue</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row" style="">
                                        <div class=" col-lg-offset-4 col-xs-offset-2 col-sm-offset-3">
                                            <h1 style="color:#d5d5d5;"><b>Unhide Venue</b></h1>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:40px;">
                                        <div class=" col-lg-offset-3 col-xs-offset-1 col-sm-offset-2">
                                            To unhide venue. SELECT venue key and the punch the unhide button.
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:40px;">
                                        <div class="col-lg-12">
                                            <form class="form-role form-horizontal" action="{{ url('admin/venue/unhide') }}" method="get">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group">
                                                    <input type="hidden" name="unhide" value="unhide">
                                                    <label class="control-label col-lg-offset-3 col-lg-2 col-sm-3  col-xs-4" for="category">Select SKU :</label>
                                                    <div class="  col-sm-5 col-xs-7 col-lg-6">
                                                        <select name="unhide[]" id="liveon" class="select-toggle form-control" multiple>
                                                            @foreach($venue_hidden as $val1)
                                                                <option value="{{ $val1->id }}">{{ $val1->id }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-5 col-xs-offset-4 col-xs-7 col-lg-offset-5">
                                                        <button class="btn btn-warning">Unhide Venue</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection