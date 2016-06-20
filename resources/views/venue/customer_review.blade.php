<style>
    .text-set{
        border-radius:25%;
        font-size:14px;
        color:black;
        line-height:5px;
        text-align:center;
        border:1px solid darkgrey;
        padding: 10px;
        font-style: italic;
        font-family: serif;

    }
    .t:focus{
        outline: none;
    }
</style>
<div class="row" style="margin-top: 20px;">
    <div class="col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-sm-7 col-xs-12">
                <?php $forum=$details->forums;?>
                @foreach($forum as $forums)
                    @if($forums->show=='Yes')
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-2 col-xs-offset-1 col-xs-3">
                            <img src="{{ asset('storage/app/images/customer-review.jpeg') }}" width="75px" height="75px;">
                        </div><input type="hidden" id="c_star" name="rating" value="{{ $forums->star }}">
                        <div class="col-sm-7 col-xs-8">
                            {{ $forums->name }}<br>
                            <span class="text-info"><b>{{ $forums->created_at }}</b></span><br>
                            {{ $forums->message }}
                        </div>
                    </div>
                    <hr style="border-color: #245269">
                        @endif
                    @endforeach
            </div>
            <div class="col-sm-4 col-sm-offset-1 col-xs-12 " style="border-left: 1px solid lightgray">
                <div class="row" >
                    <div class=" text-set col-sm-offset-1 col-sm-10 col-xs-10 col-xs-offset-1">
                        <h3>Your experience with {{ $details->venue_name }}</h3>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class=" col-sm-offset-1 col-xs-offset-0 col-sm-5 col-xs-5">
                        <input class="form-control " type="text" id="name" placeholder="Your Name">
                    </div>
                    <div class="col-sm-offset-1 col-sm-5 col-xs-6 col-xs-offset-0">
                        <input class="t form-control" type="text" id="email" placeholder="Your Email">
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-offset-0 col-xs-11">
                        <textarea class="form-control" rows="5" cols="20" id="message" placeholder="Your experience"></textarea>
                    </div>
                </div><input type="hidden" id="id" value="{{ $details->id }}">
                <?php date_default_timezone_set('Asia/Kolkata');
                ?><input type="hidden" id="date" value="{{date('Y-m-d H:i:s')}}">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-offset-1 col-xs-offset-0 col-sm-6 col-xs-5">
                        <button class="form-control btn btn-primary" id="share">Share</button>
                    </div>
                </div>
                <div class="error_share" style="margin: 10px;"></div>
            </div>
        </div>
    </div>
</div>
<script>
    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    }
    $(document).ready(function(){
        $('#share').click(function(){
            $('.error_share').empty();
            $('.error_share').removeClass('alert alert-danger');
           var name=$('#name').val();
           var email=$('#email').val();
           var message=$('#message').val();
            var id=$('#id').val();
            var date=$('#date').val();
           if(name=='' || email=='' || message==''){
               $('.error_share').append('You forget to fill your details');
               $('.error_share').addClass('alert alert-danger');
           }
            else if( !isValidEmailAddress( email ) ){
               $('.error_share').append('Invalid email');
               $('.error_share').addClass('alert alert-danger');
               $('#email').addClass('has-error');
           }
            else{
               $.get('{{ asset('ajax-share?name=') }}'+ name +'&email='+ email +'&message='+message+'&id='+id+'&date='+date,function(value){
                   $('.error_share').append('Thanks for your valuable review.It will be live once it is filtered by our team.');
                   $('.error_share').addClass('alert alert-success');
               });
           }
        });
    });
</script>