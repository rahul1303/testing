@extends('app')

@section('content')
    @include('bash.nav-top-index')
    <div class="container" style=" margin-top: 80px;margin-bottom: 30px; ">
        <div class="form-group row ticket-group" style="margin-top: 20px;">
            <input type="hidden" id="c" value="qwedsazxc">
            <input type="hidden" id="t" value="2672568">
            <div class="col-sm-offset-4 col-sm-3 col-xs-7 col-xs-offset-2">
                <input type="text" placeholder="Enter Your Ticket Number" class="ticket text-center form-control">
            </div>
        </div>
        <div class="row form-group receive-group" style="margin-top: 20px;">
            <div class="col-sm-offset-4 col-sm-5 col-xs-12 col-xs-offset-0">
                Recieve OTP on :
                <input type="radio" name="receive" class="receive" value="email" > Email
                <input type="radio" name="receive" class="receive" value="whatsapp"> Phone Number
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-offset-4 col-sm-5 col-xs-8 col-xs-offset-2">
                <button class="btn btn-info receive-otp">Send OTP</button>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-offset-4 col-sm-3 col-xs-7 col-xs-offset-2">
                <input type="numeric" required maxlength="6" pattern="\d{6}" id="otp" placeholder="Enter OTP" class="text-center form-control" />
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-offset-4 col-sm-5 col-xs-8 col-xs-offset-2">
                <button class="btn btn-danger cancel-order" disabled>Cancel Order</button>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-offset-3 col-sm-5 col-xs-8 col-xs-offset-1 error">
            </div>
        </div>
        <hr>
        <div class="row" style="margin-top: 20px;padding: 20px;">
            <div class="col-sm-offset-4 col-xs-offset-3">
                <h3 ><b>Terms for order cancellation</b></h3>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-12 txt-small">
                <blockquote>
                    <p>Once order is cancelled,it can't be renewed. i.e you have to book a fresh order(venue).</p>
                </blockquote>
                <blockquote>
                    <p>You will be charged <span style="color:red;">50%</span> from the advance payment(25% of the total amount).If order is being cancelled</p>
                </blockquote>
                <blockquote>
                    <p>You can cancel your order anytime before the party celebration date.</p>
                </blockquote>
                <blockquote>
                    <p>Amount will be refunded in next 48 hours</p>
                </blockquote>
            </div>
        </div>
    </div>n
    @include('footer')
    <script>
        $(document).ready(function(){
           $('#otp').keyup(function(){
               if($(this).val().length=='6'){
                   $('.cancel-order').prop('disabled',false);
               }
               else{
                   $('.cancel-order').prop('disabled',true);
               }
           }) ;
            $('.receive-otp').click(function(){
                var ticket=$('.ticket').val();
                $('.error').removeClass('alert alert-danger alert-success');
                $('.error').empty();
                $('.ticket-group').removeClass(' has-error has-feedback');
                $('.receive-group').removeClass(' has-error has-feedback');
                $('.error').addClass('alert alert-info');
                $('.error').append('Please wait...');
                if($('.receive').is(':checked')) {
                    var receive=$("input[name='receive']:checked").val();
                }
                else{
                    $('.error').removeClass('alert alert-info');
                    $('.error').empty();
                    $('.error').append('Select Option to receive the OTP.<br>');
                    $('.error').addClass('alert alert-danger');
                    $('.receive-group').addClass(' has-error has-feedback');
                }
                if(ticket==''){
                    $('.error').removeClass('alert alert-info');
                    $('.error').empty();
                    $('.error').append('Ticket Number field empty.<br>');
                    $('.error').addClass('alert alert-danger');
                    $('.ticket-group').addClass(' has-error has-feedback');
               }
                if(ticket!='' && $('.receive').is(':checked')){
                    $.get('{{ asset('ajax-cancel-order-otp?ticket=') }}'+ticket+'&receive='+receive,function(data){
                        $('.error').removeClass('alert alert-info');
                        $('.error').empty();
                        var val=data.split(';;');
                        $('.error').append(val[0]+'<br>');
                        $('#c').val(val[1]);
                        $('#t').val(ticket);
                        $('.error').addClass('alert alert-danger');
                    });
                }
            });
            $('.cancel-order').click(function(){
                $('.error').removeClass('alert alert-danger alert-success');
                $('.error').empty();
                $('.error').addClass('alert alert-info');
                $('.error').append('Please wait...');
                if($('#t').val()=='2672568')
                {
                    $('.error').removeClass('alert alert-info');
                    $('.error').empty();
                    $('.error').append('Invalid Ticket Number.<br>');
                    $('.error').addClass('alert alert-danger');
                }
                else
                {
                   if($('#otp').val()==$('#c').val()){
                       var ticket=$('#t').val();
                       $.get('{{ asset('ajax-order-cancel?ticket=') }}'+ticket,function(data){
                           $('.error').removeClass('alert alert-info');
                           $('.error').empty();
                           $('.error').append(data+'<br>');
                           $('.error').addClass('alert alert-success');
                       });
                   }
                    else{
                       $('.error').removeClass('alert alert-info');
                       $('.error').empty();
                       $('.error').append('Wrong OTP.Please enter correct OTP.Or ask for new.<br>');
                       $('.error').addClass('alert alert-danger');
                   }
                }
            });
        });
    </script>
@endsection