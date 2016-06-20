$(window).load(function(){
    $('input[type=checkbox]').each(function()
    {

        if($(this).is(':checked'))
        {

            var value=$(this).val();
            function value1()
            {
                return value;
            }
            if($('#order_quantity' + value1() + '').val()=='0')
            {
                $('#order_quantity' + value1() + '').addClass('red_class');
            }
            else if($('#order_quantity' + value1() + '').val()!='0' &&  $('#fabric' + value1() + '').val()!='Inhouse')
            {
                $('#fabric' + value1() + '').addClass('red_class');
            }
            else if($('#fabric' + value1() + '').val()=='Inhouse' && $('#fabric_inhouse' + value1() + '').val()=="")
            {
                $('#fabric_inhouse' + value1() + '').addClass('red_class');
            }
            else if($('#sample' + value1() + '').val()=='-' && $('#fabric_inhouse' + value1() + '').val()!="" || ($('#sample' + value1() + '').val()=='Disapproved' && $('#fabric_inhouse' + value1() + '').val()!=""))
            {
                $('#sample' + value1() + '').addClass('red_class');
            }
            else if(($('#sample' + value1() + '').val()=='Approved' && $('#sample_start_date' + value1() + '').val()==''))
            {
                $('#sample_start_date' + value1() + '').addClass('red_class');
            }
            else if($('#sample_end_date' + value1() + '').val()=="" && $('#sample_start_date' + value1() + '').val()!="")
            {
                $('#sample_end_date' + value1() + '').addClass('red_class');
            }
            else if($('#sample_end_date' + value1() + '').val()!="" && $('#cutting' + value1() + '').val()=="")
            {
                $('#cutting' + value1() + '').addClass('red_class');
            }
            else if($('#trim' + value1() + '').val()=="Not Issued" && $('#cutting' + value1() + '').val()!="")
            {
                $('#trim' + value1() + '').addClass('red_class');
            }
            else if($('#stiching_start_date' + value1() + '').val()=="" && $('#trim' + value1() + '').val()=="Issued")
            {
                $('#stiching_start_date' + value1() + '').addClass('red_class');
            }
            else if($('#stiching_start_date' + value1() + '').val()!="" && $('#stiching_end_date' + value1() + '').val()=="")
            {
                $('#stiching_end_date' + value1() + '').addClass('red_class');
            }
            else if($('#finishing_start_date' + value1() + '').val()=="" && $('#stiching_end_date' + value1() + '').val()!="")
            {
                $('#finishing_start_date' + value1() + '').addClass('red_class');
            }
            else if($('#finishing_start_date' + value1() + '').val()!="" && $('#finishing_end_date' + value1() + '').val()=="")
            {
                $('#finishing_end_date' + value1() + '').addClass('red_class');
            }
            else if($('#qc' + value1() + '').val()=='pending' && $('#finishing_end_date' + value1() + '').val()!="")
            {
                $('#qc' + value1() + '').addClass('red_class');
            }
            else if($('#qc' + value1() + '').val()!='pending' && $('#dispatch' + value1() + '').val()=="")
            {
                $('#dispatch' + value1() + '').addClass('red_class');
            }
            else
            {
                $('#count' + value1() + '').addClass('red_class');
            }

        }


    });
});
