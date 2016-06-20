@extends('admin')

@section('content')
    <style>
        .cursor{
            cursor:pointer;
        }
    </style>
    <div class="container-fluid" style="margin-top:30px;">
        <div class="row" >
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Combo Product</div>
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/store-time') }} " enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-11">
                                        <div class="form-group append-start-time">
                                            <label class="control-label  col-sm-5 col-xs-3" for="vendor">Vendor_id :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select class="form-control" name="vendor_id">
                                                    <option value="" selected></option>
                                                    @foreach($vendor_id as $id)
                                                        <option value="{{ $id->id }}">{{$id->id}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-start-time">
                                            <label class="control-label  col-sm-5 col-xs-3" for="start">Start time :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="time" class="form-control" name="start_time" id="start_time" placeholder="Combo no">
                                            </div>
                                        </div>
                                        <div class="form-group append-end-time">
                                            <label class="control-label  col-sm-5 col-xs-3" for="end">End time :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="time" class="form-control" name="end_time" id="end_time" placeholder="Combo no" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-4  col-sm-5 col-xs-offset-3">
                                                <button type="submit" name="add_time" class="btn btn-primary" style="width:200px;">Add time</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form><hr>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/store-terms') }} " enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-11">
                                        <div class="form-group append-start-time">
                                            <label class="control-label  col-sm-5 col-xs-3" for="vendor">Vendor_id :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select class="form-control" name="vendor_id">
                                                    <option value="" selected></option>
                                                    @foreach($vendor_id as $id)
                                                        <option value="{{ $id->id }}">{{$id->id}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-start-time">
                                            <label class="control-label  col-sm-5 col-xs-3" for="start">Terms :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" name="terms" id="terms" placeholder="Venue Terms"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-4  col-sm-5 col-xs-offset-3">
                                                <button type="submit" name="add_terms" class="btn btn-primary" style="width:200px;">Add terms</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/store-combo') }} " enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-11">
                                        <div class="form-group">
                                            <label class="control-label  col-sm-5 col-xs-3" for="vendor">Vendor_id :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select class="form-control" name="vendor_id">
                                                    <option value="" selected></option>
                                                    @foreach($vendor_id as $id)
                                                        <option value="{{ $id->id }}">{{$id->id}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-combo">
                                            <label class="control-label  col-sm-5 col-xs-3" for="combo">Combo :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="combo" id="combo" placeholder="Combo name" required>
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="budget">Budget :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="budget" id="budget" placeholder="Budget/person" required>
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="veg">Veg starter avail :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="veg_starter_avail" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="veg_starter">Veg starter :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="5" name="veg_starter"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="veg_num">Veg starter num :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="veg_starter_num" id="" placeholder="veg starter num">
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="non_veg">Non veg starter avail :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="non_veg_starter_avail" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="non_veg_starter">Non veg starter :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="5" name="non_veg_starter"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="non_veg_starter_num">Non veg starter num :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="non_veg_starter_num" id="" placeholder="non_veg_starter_num">
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="veg_main_course_avail">Veg main course avail :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="veg_main_course_avail" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="veg_main_course">Veg main course :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="5" name="veg_main_course"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="veg_main_course_num">Veg main course num :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="veg_main_course_num" id="" placeholder="veg_main_course_num">
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="non_veg_main_course">Non veg main course avail :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="non_veg_main_course_avail" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="non_veg_main_course">Non veg main course :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="5" name="non_veg_main_course"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="non_veg_main_course_num">Non veg main course num :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="non_veg_main_course_num" id="" placeholder="non_veg_main_course_num">
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="bread_avail">Bread avail :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="bread_avail" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="bread">Bread :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="5" name="bread"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="bread">Bread num :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="bread_num" id="" placeholder="bread_num">
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="rice">Rice avail :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="rice_avail" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="rice">Rice :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="5" name="rice"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="rice_num">Rice num :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="rice_num" id="" placeholder="rice_num">
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="salad_avail">Salad avail :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="salad_avail" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="salad">Salad :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="5" name="salad"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="salad_num">Salad :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="salad_num" id="" placeholder="salad_num">
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="desert_avail">Desert avail :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="desert_avail" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="desert">Desert :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="5" name="desert"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="desert_num">Desert num :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="desert_num" id="" placeholder="desert_num">
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="soft_drinks_avail">Soft drinks :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="soft_drinks_avail" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="soft_drinks">Soft drinks :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="5" name="soft_drinks"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="soft_drinks_num">Soft drinks num :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="soft_drinks_num" id="" placeholder="soft_drinks_num">
                                            </div>
                                        </div>
                                        <div class="form-group append-budget">
                                            <label class="control-label  col-sm-5 col-xs-3" for="hard_drinks_avail">Hard drinks :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="hard_drinks_avail" class="form-control">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="hard_drinks">Hard drinks :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <textarea class="form-control" rows="5" name="hard_drinks"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group append-beverage">
                                            <label class="control-label  col-sm-5 col-xs-3" for="hard_drinks_num">Hard drinks num :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <input type="text" class="form-control" name="hard_drinks_num" id="" placeholder="hard_drinks_num">
                                            </div>
                                        </div>
                                        <div class="form-group append-food ">
                                            <label class="control-label  col-sm-5 col-xs-3" for="type">Food type :</label>
                                            <div class=" col-sm-5 col-xs-7">
                                                <select name="type" class="form-control">
                                                    <option value="Veg" selected>Veg</option>
                                                    <option value="Non veg">Non veg</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-4  col-sm-5 col-xs-offset-3">
                                                <button type="submit" name="add_combo" class="btn btn-primary" style="width:200px;">Add combo</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection