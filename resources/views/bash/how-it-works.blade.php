<style xmlns="http://www.w3.org/1999/html">
    .number_circle {
        border-radius: 50%;
        behavior: url(PIE.htc); /* remove if you don't care about IE8 */
        width: 30px;
        height: 30px;
        border: 1px solid black;
        color: black;
        padding: 3px;
        background-color: lightgreen;
        text-align: center;
        font: 20px Arial, sans-serif;
        display: inline-block;
    }

</style>

<style>
    .hover-large { background-color:white;transition: all .2s ease-in-out;z-index:1; }
    .hover-large:hover { transform: scale(1.1);  z-index:2;}

</style>
<div class="gradient1" id='how-it-works' style="background-color: whitesmoke;padding-top: 50px;">
    <div class="container" style="margin-bottom: -30px;">
        <div class="row text-info" >
            <div class="col-xs-offset-0 col-sm-offset-0">
                <center><h2><b><i>How It Works</i></b></h2>
                    <svg  width="200" height="2">
                        <line x1="0" y1="0" x2="200" y2="00" style="stroke:grey;stroke-width:2" />
                    </svg></center>
            </div>
        </div>
        <div class="row" style=" margin-top: 70px;margin-bottom: 130px;">
            <div class="col-xs-offset-2  col-xs-8 col-sm-offset-1 col-sm-3 hover-large"
                 style="border: 1px solid darkgray;">
                <div class="row">
                    <div class="col-xs-offset-2 col-sm-offset-2">
                       <center> <h4 color="grey"><b><i>Step <span class="number_circle">1</span></i></b></h4>
                        <svg  width="180" height="1">
                            <line x1="50" y1="0" x2="130" y2="00" style="stroke:grey;stroke-width:2" />
                        </svg></center>
                    </div>
                </div>
                <div class="row" style="color: grey; margin-top:10px; margin-left: 0px;margin-bottom: 30px;">
                    <div class="col-xs-offset-0 col-sm-offset-0">
                        <center>
                            <p style="margin-top: 20px;"><b>Search a Venue</b></p>
                            <img src="{{ asset('storage/app/images/look.jpg') }}" alt="look"style="height: 100px;width: 100px;border-radius: 10%" ></center><br>
                    </div>
                </div>
            </div>

            <div class="col-xs-offset-2  col-xs-8 col-sm-offset-0 col-sm-3 hover-large"
                 style="border: 1px solid darkgray;">
                <div class="row">
                    <div class="col-xs-offset-2 col-sm-offset-2">
                        <center><h4 color="grey"><i><b>Step <span class="number_circle">2</span></b></i></h4>
                        <svg  width="180" height="1">
                            <line x1="50" y1="0" x2="130" y2="00" style="stroke:grey;stroke-width:2" />
                        </svg></center>
                    </div>
                </div>
                <div class="row" style="color: grey; margin-top:10px; margin-left: 0px;margin-bottom: 30px;">
                    <div class="col-xs-offset-0 col-sm-offset-0">
                        <center>
                            <p style="margin-top: 20px;"><b>Compare Feature</b></p>
                            <img src="{{ asset('storage/app/images/compare.png') }}" alt="look"style="height: 100px;width: 100px;border-radius: 10%" ></center><br>
                    </div>
                </div>
            </div>

            <div class="col-xs-offset-2  col-xs-8 col-sm-offset-0 col-sm-3 hover-large"
                 style="
                         border: 1px solid darkgray;">
                <div class="row">
                    <div class="col-xs-offset-2 col-sm-offset-2">
                   <center>    <h4 color="grey"><b><i>Step <span class="number_circle">3</span></i></b></h4>
                        <svg  width="180" height="1">
                            <line x1="50" y1="0" x2="130" y2="00" style="stroke:grey;stroke-width:2" />
                        </svg></center>
                    </div>
                </div>
                <div class="row" style="color: grey; margin-top:10px; margin-left: 0px;margin-bottom: 30px;">
                    <div class="col-xs-offset-0 col-sm-offset-0">
                        <center>
                            <p style="margin-top: 20px;"><b>Book Venue</b></p>
                            <img src="{{ asset('storage/app/images/book.png') }}" alt="look"style="height: 100px;width: 100px;border-radius: 10%" ></center><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>