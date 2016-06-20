@extends('app')

@section('content')
    <style>
        /* Icon when the collapsible content is shown */
        .tes:after {
            font-family: "Glyphicons Halflings";
            content: "\e114";
            float: right;
            margin-left: 15px;
        }
        /* Icon when the collapsible content is hidden */
        .tes.collapsed:after {
            content: "\e080";
        }
        a:hover{
            text-decoration: none;
        }
        a:link {
            text-decoration: none;
        }

        /* visited link */
        a:visited {
            text-decoration: none;
        }

        /* selected link */
        a:active {
            text-decoration: none;
        }
    </style>
    @include('bash.nav-top-index')
    <div class="container" style="margin-top: 80px;margin-bottom: 30px;">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading ">
                    <h4 class="panel-title">
                        <a class="tes" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            Q1. WHat is bashindia?</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body"><b>B</b>ashIndia is an online platform for Delhi/NCR individuals which allows easy access to
                        various party veneus online. Bashindia helps you to hunt and book your functions at best suited
                        prices in Delhi/NCR in a couple of scrolls and clicks.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="tes" data-toggle="collapse" text-decoration="none" data-parent="#accordion" href="#collapse2">
                            Q2. How booking can be done through bashindia?</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">It is very easy to book a party here,the booking is done in 3 easy steps.<br>
                        <ol type="1">
                            <li>1. Enter venue type & location on homepage,press search.</li>
                            <li>2. Compare various features of different venue.</li>
                            <li>3. Finalise the venue,which suits you.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="tes" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            Q3. Is there any advance payment?</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Yes,you have to pay in advance, 30% of the total amount.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="tes" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            Q4.If we pay 30% to you, then how the remaining amount is to be paid?</a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">Remaining 70% of the total
                        amount is to be paid to the venue owner/manager directly on the same day of party,just before starting of your party</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="tes" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                            Q5.What if someone want to cancel their party,is there any cancellation policy?</a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">Yes, we have a cancellation policy,the cancellation can be applicable only before 24 hours of the
                        booked party date.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="tes" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                            Q6.Is there any cancellation charges,if yes,what amount would you charge ?</a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">Yes, there are some cancellation charges.We will be charging 25% of the total amount.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="tes" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                            Q7.How much time does it take to refund the remaining amount back to us?</a>
                    </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                    <div class="panel-body">We usually take less then 3 days.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="tes" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                            Q8.Are there any special offers, if the booking amount is very high?</a>
                    </h4>
                </div>
                <div id="collapse8" class="panel-collapse collapse">
                    <div class="panel-body">Yes there is always offer for everyone,you
                        can connect to our sales team, and avail the best offer before booking from our site.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="tes" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                            Q9.Are you responsible for providing complete services to customer?</a>
                    </h4>
                </div>
                <div id="collapse9" class="panel-collapse collapse">
                    <div class="panel-body">No, we are not responsible for any type of services provided to customer at the venue,we just act as an inter-mediator between you and venue.We just provide description of various venue so that you can book in more convenient way..</div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
@endsection