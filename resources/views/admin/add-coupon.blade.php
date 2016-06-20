@extends('admin')

@section('content')


    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row form-group ">
                    <div class="col-xs-5 col-sm-3 col-xs-offset-1">
                        Coupon Name:
                    </div>
                    <div class="col-xs-5 col-sm-3">
                        <input type="text" name="name" class="form-control name" placeholder="Name of code">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-5 col-sm-3 col-xs-offset-1">
                        Enter amount:
                    </div>
                    <div class="col-xs-5 col-sm-3">
                        <input type="text" name="percent" class="form-control percent" placeholder="Amount of buffet">
                    </div>
                </div>  <div class="row form-group ">
                    <div class="col-xs-5 col-sm-3 col-xs-offset-1">
                        Vendor id:
                    </div>
                    <div class="col-xs-5 col-sm-3">
                        <input type="text" name="id" class="form-control id" placeholder="enter vendor_id">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-5 col-sm-3 col-xs-offset-1">
                        Bufffet:
                    </div>
                    <div class="col-xs-5 col-sm-3">
                        <input type="text" name="buffet" class="form-control buffet" placeholder="buffet name">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-5 col-sm-3 col-xs-offset-1">
                        No of times allowed:
                    </div>
                    <div class="col-xs-5 col-sm-3">
                        <input type="text" name="allowed" class="form-control allowed" placeholder="No of times Allowed ">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-5 col-sm-3 col-xs-offset-1">
                        Enter Date:
                    </div>
                    <div class="col-xs-5 col-sm-3">
                        <input type="date" name="date" class="form-control date">
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-xs-5 col-sm-3 col-xs-offset-4">
                    <button class="btn btn-info form-control add">ADD</button>
                </div>
            </div>
            <div class="row">
                <div class="error col-xs-10 col-xs-offset-4 col-sm-8 col-xs-offset-2">

                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-offset-5 col-xs-offset-4">
                <h3>No of coupons</h3>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-10 col-md-offset-1 table-responsive">
                <table class="table table-hover table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Percent</th>
                        <th>Vendor_id</th>
                        <th>Allowed</th>
                        <th>Applied</th>
                        <th>Vallid till</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($promo as $info)
                        <tr>
                            <td>{{ $info->code }}</td>
                            <td>{{ $info->amount }}</td>
                            <td>{{ $info->vendor_id }}</td>
                            <td>{{ $info->allowed }}</td>
                            <td>{{ $info->applied }}</td>
                            <td>{{ $info->valid }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){

            $('.add').click(function(){
                var date=$('.date').val();
                var name=$('.name').val();
                var percent=$('.percent').val();
                var allowed=$('.allowed').val();
                var id=$('.id').val();
                var buffet=$('.buffet').val();
               $('.error').removeClass('alert alert-danger alert-success');
                $('.error').empty();
                if(date==''){
                    $('.error').addClass(' alert alert-danger');
                    $('.error').append('<li>You forgot to enter date.</li>');
                }
                else if(name==''){
                    $('.error').addClass(' alert alert-danger');
                    $('.error').append('<li>You forgot to enter code.</li>');
                }
                else if(percent==''){
                    $('.error').addClass(' alert alert-danger');
                    $('.error').append('<li>You forgot to enter percent amount.</li>');
                }
                else if(allowed==''){
                    $('.error').addClass(' alert alert-danger');
                    $('.error').append('<li>You forgot to enter no of times.</li>');
                }
                else{
                    $.get('{{ asset('admin/ajax-coupon?date=') }}'+date+'&name='+name+'&percent='+percent+'&allowed='+allowed+
                            '&id='+id+'&buffet='+buffet,function(data){
                        $('.error').addClass(' alert alert-success');
                        $('.error').append('<li>'+data+'</li>');
                    });
                }
            });
        });
    </script>
@endsection
