<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Nettuts Email Newsletter</title>
    <style type="text/css">
        a {color: #4A72AF;}
        body, #header h1, #header h2, p {margin: 0; padding: 0;}
        #main {border: 1px solid #cfcece;}
        img {display: block;}
        #top-message p, #bottom-message p {color: #3f4042; font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
        #header h1 {color: #ffffff !important; font-family: "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", sans-serif; font-size: 24px; margin-bottom: 0!important; padding-bottom: 0; }
        #header h2 {color: #ffffff !important; font-family: Arial, Helvetica, sans-serif; font-size: 24px; margin-bottom: 0 !important; padding-bottom: 0; }
        #header p {color: #ffffff !important; font-family: "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", sans-serif; font-size: 12px;  }
        h1, h2, h3, h4, h5, h6 {margin: 0 0 0.8em 0;}
        h3 {font-size: 28px; color: #444444 !important; font-family: Arial, Helvetica, sans-serif; }
        h4 {font-size: 22px; color: #4A72AF !important; font-family: Arial, Helvetica, sans-serif; }
        h5 {font-size: 18px; color: #444444 !important; font-family: Arial, Helvetica, sans-serif; }
        p {font-size: 12px; color: #444444 !important; font-family: "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", sans-serif; line-height: 1.5;}
    </style>
</head>



<body>



<table width="100%" cellpadding="0" cellspacing="0" bgcolor="e4e4e4"><tr><td>
            <table id="main" width="600" align="center" cellpadding="0" cellspacing="15" bgcolor="ffffff">
                <tr>
                    <td>
                        <table id="header" cellpadding="10" cellspacing="0" align="center" bgcolor="8fb3e9">
                            <tr>
                                <td width="180" valign="top">
                                    <img src="{{ asset('storage/app/images/icon.png') }}" width="50px" height="40px">
                                </td>
                                <td width="15"></td>
                                <td width="150" valign="top">
                                    <h1>BashIndia</h1>
                                </td>
                                <td width="15"></td>
                                <td width="180" valign="top">
                                </td>
                            </tr>
                            <tr>
                                <td width="10" valign="top">
                                </td>
                                <td width="1"></td>
                                <td width="200" valign="top" style="margin-left: -20px;">
                                    <h5>Search | Book | Enjoy</h5>
                                </td>
                                <td width="15"></td>
                                <td width="180" valign="top">
                                </td>
                            </tr>
                        </table><!-- header -->
                    </td>
                </tr><!-- header -->

                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <table id="content-2" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td width="570">
                                    <h3 style="color:dodgerblue">Hey {{ $customer_name }}!</h3>
                                </td>
                            </tr>
                            <tr>
                                <td width="570">
                                    <p>
                                        Thank you for booking.<br>{{ $venue->manager_name }}(Manager of the venue) will call you,in next 24 hour.If you have any query regarding anything related to
                                        {{ $venue->venue_name }},please feel free to ask them.
                                        Click on the link to <a href="{{ asset('maps?lat='.$venue->venue_lat.'&lon='.$venue->venue_lon ) }}" target="_blank">Get Location on Map</a>
                                        <br>Your order details are below. Thank you again for your order.
                                        <br><br>Your order is booked on {{ $booking_date_time }}
                                    </p>
                                </td>
                            </tr>
                        </table><!-- content-2 -->
                    </td>
                </tr><!-- content-2 -->
                <tr>
                    <td height="5">______________________________________________________________________________</td>
                </tr>
                <tr>
                    <td height="5"><h2>Venue Details</h2></td>
                </tr>
                <tr>
                    <td>
                        <table id="content-3" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Venue Name : </b>{{ $venue->venue_name}}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Location : </b> {{ $venue->address_1}}, {{ $venue->address_2 }},
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td width="300" valign="top"  style="padding:5px;padding-left: 80px;">
                                    {{ $venue->locality }}, {{ $venue->city }}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Manager Name : </b>{{ $venue->manager_name}}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Contact : </b> 0{{ $venue->mobile}},{{ $venue->tel }}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Party duration : </b> {{ $venue->duration}} hours
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Nearest Metro Station : </b> {{ $venue->metro}}
                                </td>
                            </tr>
                        </table><!-- content-3 -->
                    </td>
                </tr><!-- content-3 -->
                <tr>
                    <td height="5">______________________________________________________________________________</td>
                </tr>

                <tr>
                    <td height="5"><h2>Booking Details</h2></td>
                </tr>
                <tr>
                    <td>
                        <table id="content-3" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Ticket Number : </b>{{ $random}}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Booked Date : </b> {{ $booked_date}}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Party Timing : </b>{{ $booked_time}}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Total Person : </b> {{ $total_person}}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Total amount : </b> Rs {{ $final_cost}}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Paid Advance : </b> Rs {{ $advance_payment}}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Buffet Selected : </b>  {{ $buffet}}
                                </td>
                            </tr>
                            <tr>
                                <td width="900" valign="top"  style="padding:5px;">
                                    <b>Selected Buffet : </b>
                                </td>
                            </tr>
                        </table><!-- content-3 -->
                    </td>
                </tr><!-- content-3 -->
                <tr>
                    <td>
                        <table id="content-4" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                @if($vs!='')
                                <td width="180" valign="top">
                                    <b>Veg Starter</b>
                                    <ol>
                                        @foreach($vs as $items)
                                        <li>{{ $items}}</li>
                                        endforeach
                                    </ol></td>
                                endif
                                @if($nvs!='')
                                <td width="15"></td>
                                <td width="180" valign="top">
                                    <b>Non Veg Starter</b>
                                    <ol>
                                        @foreach($nvs as $items)
                                        <li>{{ $items}}</li>
                                        endforeach
                                    </ol>
                                </td>
                                endif
                                @if($vmc!='')
                                <td width="15"></td>
                                <td width="180" valign="top">
                                    <b>Veg Main Course</b>
                                    <ol>
                                        @foreach(vmc as $items)
                                        <li>{{ $items}}</li>
                                        endforeach
                                    </ol>
                                </td>
                                endif
                            </tr>
                            <tr>
                                @if($nvmc!='')
                                <td width="180" valign="top">
                                    <b>Non Veg Main Course</b>
                                    <ol>
                                        @foreach($nvmc as $items)
                                        <li>{{ $items}}</li>
                                        endforeach
                                    </ol>
                                </td>
                                endif
                                @if($salad!='')
                                <td width="15"></td>
                                <td width="180" valign="top">
                                    <b>Salad</b>
                                    <ol>
                                        @foreach($salad as $items)
                                        <li>{{ $items}}</li>
                                        endforeach
                                    </ol>
                                </td>
                                endif
                                @if($rice!='')
                                <td width="15"></td>
                                <td width="180" valign="top">
                                    <b>Rice</b>
                                    <ol>
                                        @foreach($rice as $items)
                                        <li>{{ $items}}</li>
                                        endforeach
                                    </ol>
                                </td>
                                endif
                            </tr>
                            <tr>
                                @if($bread!='')
                                <td width="180" valign="top">
                                    <b>Bread</b>
                                    <ol>
                                        @foreach($bread as $items)
                                        <li>{{ $items}}</li>
                                        endforeach
                                    </ol>
                                </td>
                                endif
                                @if($dessert!='')
                                <td width="15"></td>
                                <td width="180" valign="top">
                                    <b>Dessert</b>
                                    <ol>
                                        @foreach($dessert as $items)
                                        <li>{{ $items}}</li>
                                        endforeach
                                    </ol>
                                </td>
                                endif
                                @if($sd!='')
                                <td width="15"></td>
                                <td width="180" valign="top">
                                    <b>Soft Drinks</b>
                                    <ol>
                                        @foreach($sd as $items)
                                        <li>{{ $items}}</li>
                                        endforeach
                                    </ol>
                                </td>
                                endif
                            </tr>
                            <tr>
                                @if($hd!='')
                                <td width="180" valign="top">
                                    <b>Mocktail</b>
                                    <ol>
                                        @foreach($hd as $items)
                                        <li>{{ $items}}</li>
                                        endforeach
                                    </ol>
                                </td>
                                endif
                            </tr>
                        </table><!-- content-4 -->
                    </td>
                </tr><!-- content-4 -->
                <tr>
                    <td height="30">______________________________________________________________________________</td>
                </tr>
                <tr>
                    <td>
                        <table id="content-5" cellpadding="0" cellspacing="0">
                            <tr><td width="678" valign="top">
                                    <b> The pending amount(Rs {{ $final_cost-$advance_payment}}) is to be paid to the manager beforehand.</b><br><br><br>
                                    Best Regards<br>
                                    Team Bash India<br>
                                    Contact: +91-880 035 5421 | +91-965 418 2422<br>
                                    Email: vikram@bashindia.com</td>
                            </tr>
                        </table><!-- content-5 -->
                    </td>
                </tr><!-- content-5 -->
                <tr>
                    <td height="30"><img src="http://dummyimage.com/570x30/fff/fff" /></td>
                </tr>
                <tr>
                    <td>
                        <table id="content-6" cellpadding="0" cellspacing="0" align="center">
                            <p align="center">Please dont reply to this mail,this is computer generated email. </p>
                            <p align="center" style="font-size: 10px;"><a href="{{ asset('/#about-us') }}">About Us</a> | <a href="http://www.blog.bashindia.com">Blog</a> | <a href="{{ asset('terms-&-conditions') }}">Terms and Condition |  <a href="{{ asset('/privacy-policy') }}">Privacy Policy</a></a>
                            </p>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="1"></td>
                </tr>

            </table><!-- main -->
        </td></tr></table><!-- wrapper -->
</body>
</html>