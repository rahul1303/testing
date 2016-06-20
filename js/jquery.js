
$(window).load(function(){
alert('fjk');
    $('input[type=checkbox]').on("change",function(){
        var value="";
        value=$(this).val();
        $('#' +value+ '').toggleClass("grey");

    });

    $("#selectall").click(function () {
        $(":checkbox").prop('checked', $(this).prop('checked'));

    });


    $("#edit_multiple_item1").on(change,function() {

        if ($("#edit_multiple_item1").val() == '' || $("#edit_multiple_item1").val() == 'pp' || $("#edit_multiple_item1").val() == 'min_order' ) {
            $("#text_area").show();
            $("#yn").hide();
            $("#event_type").hide();
        }
        else if ($("#edit_multiple_item1").val() == 'show' || $("#edit_multiple_item1").val() == 'bachelor' ) {
            $("#text_area").hide();
            $("#event_type").hide();
            $("#yn").show();
        }
         else  {
            $("#text_area").hide();
            $("#yn").hide();
            $("#event_type").show();
            }
    });
});
