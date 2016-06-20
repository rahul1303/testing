<script>

    $(document).ready(function() {

        var lat = $('#lat_val').val();
        var lon = $('#lon_val').val();
        var myCenter = new google.maps.LatLng(lat, lon);
        var info = $('#info').val();
        var map = new google.maps.Map(document.getElementById('map_show'), {
            center: myCenter,
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
            position: myCenter,
            map: map,
        });
        var infowindow = new google.maps.InfoWindow({
            content: info
        });
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
        $('#datepicker').on('change', function (e) {
                $('#timing').val('');
            $('#time_checker').empty();
            $('#date_checker').empty();
            $('#date_avail').val('0');
            var date = $('#datepicker').val();
            var id = $('#id').val();
            $('#date_avail').removeClass('alert alert_danger');
            $.get('{{ asset('ajax-date?date=') }}'+date+'&id='+id  , function (data) {
                if(data=='Available'){
                    $('#date_checker').append(data).css('color', 'green');
                    $('#date_avail').val('1');
                }
                else{
                    $('#date_checker').append('There is already some slot booked.Check' +
                            ' if you are comfortable with the slot left in timing field').css('color', 'red');
                }
            });
        });
        $('#timing').on('change', function (e) {
            $('#time_checker').empty();
            $('#time_avail').val('0');
            if($('#datepicker').val()==''){
                alert('Please select the date');
                $('#timing').val('');
            }
            else{
                if($('#date_avail').val()=='1'){
                    $('#time_avail').val('1');
                    $('#time_checker').append('Timing available').css('color', 'green');
                }
                else {
                    $('#time_checker').append('Searching..').css('color', 'lightblue');
                    var date = $('#datepicker').val();
                    var time = $(this).val();
                    var id = $('#id').val();
                    $.get('{{ asset('ajax-time?date=') }}' + date + '&id=' + id + '&time=' + time, function (data) {
                        $('#time_checker').empty();
                       if(data=='Available'){
                           $('#time_avail').val('1');
                           $('#time_checker').append('Slot available').css('color', 'green');
                       }
                        else{
                           $('#time_avail').val('0');
                           $('#time_checker').append(data).css('color', 'red');
                       }
                    });
                }
            }
        });

        $('#combo').on('change', function () {
            var combo = $(this).val();
            var id = $('#id').val();
            $('.ajax-loader').show();

            $.get('{{asset('ajax-combo?combo=')}}'+combo+'&id='+id, function (data) {
                $('.budget').empty();
                $('.buffet').empty();
                $('.cost_person').empty();
                $('.total_cost').empty();
                $('.advance_payment').empty();
                $('.effective_1').empty();
                $('.effective').empty();
                $('#total_cost').val('0');
                $('#final_cost').val('0');
                $('#hidden_veg_starter').val('0');
                $('#hidden_non_veg_starter').val('0');
                $('#hidden_veg_main_course').val('0');
                $('#hidden_non_veg_main_course').val('0');
                $('#hidden_rice').val('0');
                $('#hidden_bread').val('0');
                $('#hidden_salad').val('0');
                $('#hidden_dessert').val('0');
                $('#hidden_hard_drinks').val('0');
                $('#hidden_soft_drinks').val('0');
                $('#advance_payment').val('0');
                $('#budget_person').val('0');
                $('.ajax-loader').hide();
                function func_num(query) {
                    if (query == '0') {
                        return "<b>:(All will be served)</b>";
                    }
                    else {
                        return '<b>(Choose any ' + query + '):</b>';
                    }
                };
                function func_num_check(query) {
                    if (query == '0') {
                        return 'hidden';
                    }
                    else {
                        return 'checkbox';
                    }
                };
                function func_yes(query) {
                    if (query == 'Yes') {
                        return "Yes";
                    }
                    else {
                        return 'No';
                    }
                };
                $.each(data, function (index, combo) {
                    $('.cost_person').empty();
                    $('.cost_person').css('color','grey');
                    $('.budget').append('<b>Cost</b> :  Rs ' + combo.budget + '/person');
                    $('.cost_person').append('Rs '+ combo.budget );
                    $('#budget_person').val(combo.budget);
                    var min=$('.person_val').val();
                    var total=combo.budget*min;
                    $('#total_cost').val(total);
                    $('#final_cost').val(total);
                    $('.total_cost').append('Rs '+total);
                    var advance=total*3/10;
                    $('#advance_payment').val(advance);
                    $('.advance_payment').append('Rs '+advance);
                    $('.advance_payment').css('color','grey');
                    var bud=$('.budget_person').val();
                    if (func_yes(combo.veg_starter_avail) == 'Yes') {
                        $('.veg_starter').append('<b>Veg Starter</b>' + func_num(combo.veg_starter_num));
                        var veg_starter = combo.veg_starter.split(";");
                        $('#hidden_veg_starter').val(combo.veg_starter_num);
                        var limit = combo.veg_starter_num;
                        for (var i = 0; i < veg_starter.length; i++) {
                            $('.veg_starter').append('<li><input id="veg_starter" class="single-checkbox" type="' + func_num_check(combo.veg_starter_num) + '" name="veg_starter[]" value="' + veg_starter[i] + '">' + veg_starter[i] + '</li>');
                        }

                    }
                    if (func_yes(combo.non_veg_starter_avail) == 'Yes') {
                        $('.non_veg_starter').append('<b>Non Veg Starter </b>' + func_num(combo.non_veg_starter_num));
                        var non_veg_starter = combo.non_veg_starter.split(";");
                        $('#hidden_non_veg_starter').val(combo.non_veg_starter_num);
                        for (var i = 0; i < non_veg_starter.length; i++) {
                            $('.non_veg_starter').append('<li><input id="non_veg_starter" type="' + func_num_check(combo.non_veg_starter_num) + '" name="non_veg_starter[]" value="' + non_veg_starter[i] + '">' + non_veg_starter[i] + '</li>');
                        }
                    }
                    if (func_yes(combo.veg_main_course_avail) == 'Yes') {
                        $('.veg_main_course').append('<b>Veg main course </b>' + func_num(combo.veg_main_course_num));
                        var veg_main_course = combo.veg_main_course.split(";");
                        $('#hidden_veg_main_course').val(combo.veg_main_course_num);
                        for (var i = 0; i < veg_main_course.length; i++) {
                            $('.veg_main_course').append('<li><input id="veg_main_course" type="' + func_num_check(combo.veg_main_course_num) + '" name="veg_main_course[]" value="' + veg_main_course[i] + '">' + veg_main_course[i] + '</li>');
                        }
                    }
                    if (func_yes(combo.non_veg_main_course_avail) == 'Yes') {
                        $('.non_veg_main_course').append('<b>Non Veg main course</b>' + func_num(combo.non_veg_main_course_num));
                        var non_veg_main_course = combo.non_veg_main_course.split(";");
                        $('#hidden_non_veg_main_course').val(combo.non_veg_main_course_num);
                        for (var i = 0; i < non_veg_main_course.length; i++) {
                            $('.non_veg_main_course').append('<li><input type="' + func_num_check(combo.non_veg_main_course_num) + '" id="non_veg_main_course" name="non_veg_main_course[]" value="' + non_veg_main_course[i] + '">' + non_veg_main_course[i] + '</li>');
                        }
                    }
                    if (func_yes(combo.bread_avail) == 'Yes') {
                        $('.bread').append('<b>Bread</b>' + func_num(combo.bread_num));
                        var bread = combo.bread.split(";");
                        $('#hidden_bread').val(combo.bread_num);
                        for (var i = 0; i < bread.length; i++) {
                            $('.bread').append('<li><input type="' + func_num_check(combo.bread_num) + '" id="bread" name="bread[]" value="' + bread[i] + '">' + bread[i] + '</li>');
                        }
                    }
                    if (func_yes(combo.rice_avail) == 'Yes') {
                        $('.rice').append('<b>Rice</b>' + func_num(combo.rice_num));
                        var rice = combo.rice.split(";");
                        $('#hidden_rice').val(combo.rice_num);
                        for (var i = 0; i < rice.length; i++) {
                            $('.rice').append('<li><input type="' + func_num_check(combo.rice_num) + '" id="rice" name="rice[]" value="' + rice[i] + '">' + rice[i] + '</li>');
                        }
                    }
                    if (func_yes(combo.salad_avail) == 'Yes') {
                        $('.salad').append('<b>Salad</b>' + func_num(combo.salad_num));
                        var salad = combo.salad.split(";");
                        $('#hidden_salad').val(combo.salad_num);
                        for (var i = 0; i < salad.length; i++) {
                            $('.salad').append('<li><input type="' + func_num_check(combo.salad_num) + '"id="salad"  name="salad[]" value="' + salad[i] + '">' + salad[i] + '</li>');
                        }
                    }
                    if (func_yes(combo.dessert_avail) == 'Yes') {
                        $('.desert').append('<b>Dessert</b>' + func_num(combo.dessert_num));
                        var dessert = combo.dessert.split(";");
                        $('#hidden_dessert').val(combo.dessert_num);
                        for (var i = 0; i < dessert.length; i++) {
                            $('.desert').append('<li><input type="' + func_num_check(combo.dessert_num) + '" id="dessert" name="dessert[]" value="' + dessert[i] + '">' + dessert[i] + '</li>');
                        }
                    }
                    if (func_yes(combo.soft_drinks_avail) == 'Yes') {
                        $('.soft_drinks').append('<b>Soft Drinks</b>' + func_num(combo.soft_drinks_num));
                        var soft_drinks = combo.soft_drinks.split(";");
                        $('#hidden_soft_drinks').val(combo.soft_drinks_num);
                        for (var i = 0; i < soft_drinks.length; i++) {
                            $('.soft_drinks').append('<li><input type="' + func_num_check(combo.soft_drinks_num) + '" id="soft_drinks" name="soft_drinks[]" value="' + soft_drinks[i] + '">' + soft_drinks[i] + '</li>');
                        }
                    }
                    if (func_yes(combo.hard_drinks_avail) == 'Yes') {
                        $('.hard_drinks').append('<b>Hard Drinks</b>' + func_num(combo.hard_drinks_num));
                        var hard_drinks = combo.hard_drinks.split(";");
                        $('#hidden_hard_drinks').val(combo.hard_drinks_num);
                        for (var i = 0; i < hard_drinks.length; i++) {
                            $('.hard_drinks').append('<li><input type="' + func_num_check(combo.hard_drinks_num) + '" id="hard_drinks" name="hard_drinks[]" value="' + hard_drinks[i] + '">' + hard_drinks[i] + '</li>');
                        }
                    }
                });
                $('#applied').val('0');
                $('.apply_now').removeClass('btn-success').addClass('btn-info');
                $('.apply_now').removeAttr('disabled');
                $('.apply_now').empty();
                $('.apply_now').append('Apply Now');
            });
        });
        var veg_starter_checked = [],
                $veg_starter_check=$(document).on("change", "input[name='veg_starter[]']", function () {
                    var limit=$('#hidden_veg_starter').val();
                    $veg_starter_check.prop('disabled', false);
                    veg_starter_checked.push(this);
                    veg_starter_checked = $(veg_starter_checked);
                    veg_starter_checked.prop('checked', false).slice(-limit).prop('checked', true);
                });
        var non_veg_starter_checked = [],
                $non_veg_starter_check= $(document).on("change", "input[name='non_veg_starter[]']", function () {
                    var limit=$('#hidden_non_veg_starter').val();
                    $non_veg_starter_check.prop('disabled', false);
                    non_veg_starter_checked.push(this);
                    non_veg_starter_checked = $(non_veg_starter_checked);
                    non_veg_starter_checked.prop('checked', false).slice(-limit).prop('checked', true);
                });
        var veg_main_course_checked = [],
                $veg_main_course_check=$(document).on("change", "input[name='veg_main_course[]']", function () {
                    var limit=$('#hidden_veg_main_course').val();
                    $veg_main_course_check.prop('disabled', false);
                    veg_main_course_checked.push(this);
                    veg_main_course_checked = $(veg_main_course_checked);
                    veg_main_course_checked.prop('checked', false).slice(-limit).prop('checked', true);
                });
        var non_veg_main_course_checked = [],
                $non_veg_main_course_check=$(document).on("change", "input[name='non_veg_main_course[]']", function () {
                    var limit=$('#hidden_non_veg_main_course').val();
                    $non_veg_main_course_check.prop('disabled', false);
                    non_veg_main_course_checked.push(this);
                    non_veg_main_course_checked = $(non_veg_main_course_checked);
                    non_veg_main_course_checked.prop('checked', false).slice(-limit).prop('checked', true);
                });
        var bread_checked = [],
                $bread_check=$(document).on("change", "input[name='bread[]']", function () {
                    var limit=$('#hidden_bread').val();
                    $bread_check.prop('disabled', false);
                    bread_checked.push(this);
                    bread_checked = $(bread_checked);
                    bread_checked.prop('checked', false).slice(-limit).prop('checked', true);

                });
        var rice_checked = [],
                $rice_check=$(document).on("change", "input[name='rice[]']", function () {
                    var limit=$('#hidden_rice').val();
                    $rice_check.prop('disabled', false);
                    rice_checked.push(this);
                    rice_checked = $(rice_checked);
                    rice_checked.prop('checked', false).slice(-limit).prop('checked', true);
                });
        var salad_checked = [],
                $salad_check=$(document).on("change", "input[name='salad[]']", function () {
                    var limit=$('#hidden_salad').val();
                    $salad_check.prop('disabled', false);
                    salad_checked.push(this);
                    salad_checked = $(salad_checked);
                    salad_checked.prop('checked', false).slice(-limit).prop('checked', true);
                });
        var dessert_checked = [],
                $dessert_check=$(document).on("change", "input[name='dessert[]']", function () {
                    var limit=$('#hidden_dessert').val();
                    $dessert_check.prop('disabled', false);
                    dessert_checked.push(this);
                    dessert_checked = $(dessert_checked);
                    dessert_checked.prop('checked', false).slice(-limit).prop('checked', true);
                });
        var hard_drinks_checked = [],
                $hard_drinks_check=$(document).on("change", "input[name='hard_drinks[]']", function () {
                    var limit=$('#hidden_hard_drinks').val();
                    $hard_drinks_check.prop('disabled', false);
                    hard_drinks_checked.push(this);
                    hard_drinks_checked = $(hard_drinks_checked);
                    hard_drinks_checked.prop('checked', false).slice(-limit).prop('checked', true);
                });
        var soft_drinks_checked = [],
                $soft_drinks_check=$(document).on("change", "input[name='soft_drinks[]']", function () {
                    var limit=$('#hidden_soft_drinks').val();
                    $soft_drinks_check.prop('disabled', false);
                    soft_drinks_checked.push(this);
                    soft_drinks_checked = $(soft_drinks_checked);
                    soft_drinks_checked.prop('checked', false).slice(-limit).prop('checked', true);
                });

    });
</script>