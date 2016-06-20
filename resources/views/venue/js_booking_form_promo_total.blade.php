<script>
    $(document).ready(function() {
        $(".person_val").bind('keyup mouseup', function () {
            $('.total_cost').empty();
            $('.effective_1').empty();
            $('.effective').empty();
            $('.advance_payment').empty();
            $('#total_cost').val('0');
            $('#final_cost').val('0');
            $('#advance_payment').val('0');
            var min=$(this).val();
            var total=$('#budget_person').val()*min;
            $('#total_cost').val(total);
            $('#final_cost').val(total);
            $('.total_cost').append('Rs '+total);
            var advance=total*3/10;
            $('#advance_payment').val(advance);
            $('.advance_payment').append('Rs '+advance);
            var bud=$('#budget_person').val();
            $('.cost_person').empty();
            $('.cost_person').append('Rs '+bud);
            $('.advance_payment').css('color','grey');
            $('.cost_person').css("color","grey");
            $('#applied').val('0');
            $('.apply_now').removeClass('btn-success').addClass('btn-info');
            $('.apply_now').removeAttr('disabled');
            $('.apply_now').empty();
            $('.apply_now').append('Apply Now');
        });

        $('.apply_now').click(function(){
            var applied=$('#applied').val();
            var promo = $('#promo_code').val();
            if(promo==''){
                alert('Promo code field empty');
            }
            else {
                if (applied == '1') {
                    alert('Promo code is already applied');
                }
                else {
                    var promo = $('#promo_code').val();
                    var date = $('#date').val();
                    var id=$('#id').val();
                    var buffet=$('#combo').val();
                    $.get('{{asset('ajax-promo?date=')}}' + date + '&promo=' + promo+'&id=' + id+'&buffet=' + buffet, function (value) {
                        var data = value.split(",;");
                        var val = data[1];
                        var details=data[0];
                        var exit = data[2];
                        var allowed=data[3];
                        var applied=data[4];
                        var vendor_id=data[5];
                        if (val>'0' && applied != allowed)
                        {
                            if(vendor_id=='0'){
                                $('.total_cost').empty();
                                $('.cost_person').empty();
                                $('.advance_payment').empty();
                                $('#final_cost').val('0');
                                $('#advance_payment').val('0');
                                var min=$('.person_val').val();
                                var bud=$('#budget_person').val();
                                var sub_total=bud*min;
                                var total=sub_total-sub_total*details/100;
                                $('#final_cost').val(total);
                                $('#total_cost').val(sub_total);
                                $('.total_cost').append('Rs '+sub_total);
                                $('.effective_1').append('Total amount after promo code applied :');
                                $('.effective').append('Rs '+total);
                                $('.cost_person').append('Rs '+ bud);
                                var advance=total*3/10;
                                $('#advance_payment').val(advance);
                                $('.advance_payment').append('Rs '+advance);
                                $('.advance_payment').css("color","green");
                                $('.cost_person').css("color","green");
                                $('.effective').css("color","green");
                                $('#coupon_name').val(promo);
                                $('#applied').val('1');
                                $('#bashindia').val('bashindia');
                                $('#coupon_discount').val(details);
                                $('.apply_now').removeClass('btn-info').addClass('btn-success');
                                $('.apply_now').attr('disabled','disabled');
                                $('.apply_now').empty();
                                $('.apply_now').append('Coupon Applied');
                            }
                            else
                            {
                                $('.total_cost').empty();
                                $('.cost_person').empty();
                                $('.advance_payment').empty();
                                $('#final_cost').val('0');
                                $('#advance_payment').val('0');
                                var min=$('.person_val').val();
                                var bud=$('#budget_person').val();
                                var sub_total=bud*min;
                                var budget_person=bud-details;
                                var total=budget_person*min;
                                $('#final_cost').val(total);
                                $('#total_cost').val(sub_total);
                                $('.total_cost').append('Rs '+sub_total);
                                $('.effective_1').append('Total amount after promo code applied :');
                                $('.effective').append('Rs '+total);
                                $('.cost_person').append('Rs '+ budget_person);
                                var advance=total*3/10;
                                $('#advance_payment').val(advance);
                                $('.advance_payment').append('Rs '+advance);
                                $('.advance_payment').css("color","green");
                                $('.cost_person').css("color","green");
                                $('.effective').css("color","green");
                                $('#coupon_name').val(promo);
                                $('#applied').val('1');
                                $('#coupon_discount').val(details);
                                $('.apply_now').removeClass('btn-info').addClass('btn-success');
                                $('.apply_now').attr('disabled','disabled');
                                $('.apply_now').empty();
                                $('.apply_now').append('Coupon Applied');
                            }
                        }
                        else if (exit > 0) {
                            alert('Code expired');
                        }
                        else {
                            alert('Either code doesnot exit or this code is not applicable for this venue package');
                        }
                    });
                }
            }
        });

        $("#booking_form").submit(function() {
            $('.error').empty();
            $('.error').removeClass('alert alert-danger');
            $('#timing').removeClass('alert alert-danger');
            $('.timing').removeClass(' has-error has-feedback');
            $('.date123').removeClass(' has-error has-feedback');

            if($('#time_avail').val()=='0')
            {
                $('.error').append('<li>This time slot is already booked.Please check for other timing or go for other date.</li>');
                $('#timing').addClass('alert alert_danger');
                $('.timing').addClass(' has-error has-feedback');
            }
            if($('input:checkbox')){
                if($('input[id="veg_starter"]:checked').length!=$('#hidden_veg_starter').val()) {
                    $('.error').append('<li>Veg starter field incomplete.</li>');
                    $(this).addClass('alert alert_danger');
                }
                if($('input[id="non_veg_starter"]:checked').length!=$('#hidden_non_veg_starter').val())
                {
                    $('.error').append('<li>Non veg starter field incomplete.</li>');
                }
                if($('input[id="veg_main_course"]:checked').length!=$('#hidden_veg_main_course').val())
                {
                    $('.error').append('<li>Veg main course field incomplete.</li>');
                }
                if($('input[id="non_veg_main_course"]:checked').length!=$('#hidden_non_veg_main_course').val())
                {
                    $('.error').append('<li>Non veg main course field incomplete.</li>');
                }
                if($('input[id="bread"]:checkbox:checked').length!=$('#hidden_bread').val())
                {
                    $('.error').append('<li>Bread field incomplete.</li>');
                }
                if($('input[id="rice"]:checkbox:checked').length!=$('#hidden_rice').val())
                {
                    $('.error').append('<li>Rice field incomplete.</li>');
                }
                if($('input[id="salad"]:checkbox:checked').length!=$('#hidden_salad').val())
                {
                    $('.error').append('<li>Salad field incomplete.</li>');
                }
                if($('input[id="dessert"]:checkbox:checked').length!=$('#hidden_dessert').val())
                {
                    $('.error').append('<li>Dessert field incomplete.</li>');
                }
                if($('input[id="soft_drinks"]:checkbox:checked').length!=$('#hidden_soft_drinks').val())
                {
                    $('.error').append('<li>Soft drinks field incomplete.</li>');
                }
                if($('input[id="hard_drinks"]:checkbox:checked').length!=$('#hidden_hard_drinks').val())
                {
                    $('.error').append('<li>Hard drinks field incomplete.</li>');
                }
                if($('input[id="hard_drinks"]:checked').length!=$('#hidden_hard_drinks').val()
                        || $('input[id="soft_drinks"]:checked').length!=$('#hidden_soft_drinks').val()
                        || $('input[id="dessert"]:checked').length!=$('#hidden_dessert').val() ||
                        $('input[id="salad"]:checked').length!=$('#hidden_salad').val() ||
                        $('input[id="rice"]:checked').length!=$('#hidden_rice').val() ||
                        $('input[id="bread"]:checked').length!=$('#hidden_bread').val() ||
                        $('input[id="non_veg_main_course"]:checked').length!=$('#hidden_non_veg_main_course').val() ||
                        $('input[id="veg_main_course"]:checked').length!=$('#hidden_veg_main_course').val() ||
                        $('input[id="non_veg_starter"]:checked').length!=$('#hidden_non_veg_starter').val() ||
                        $('input[id="veg_starter"]:checked').length!=$('#hidden_veg_starter').val() ||
                        $('#time_avail').val()=='0'){
                    $('.error').addClass('alert alert-danger');
                    return false;
                }
            }
        });
    });
</script>