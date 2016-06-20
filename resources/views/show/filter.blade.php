<style>
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
    select {
        background:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='50px' height='50px'><polyline points='46.139,15.518 25.166,36.49 4.193,15.519'/></svg>");
        background-color:#3498DB;
        background-repeat:no-repeat;
        background-position: right 10px top 15px;
        background-size: 13px 13px;
        color:white;
        margin-left: 15px;
        padding:10px;
        padding-bottom: 15px;
        width:auto;
        font-family:arial,tahoma;
        font-size:13px;
        font-weight:bold;
        color:#fff;
        text-align:center;
        text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);
        border-radius:3px;
        -webkit-border-radius:3px;
        -webkit-appearance: none;
        border:0;
        outline:0;
        -webkit-transition:0.3s ease all;
        -moz-transition:0.3s ease all;
        -ms-transition:0.3s ease all;
        -o-transition:0.3s ease all;
        transition:0.3s ease all;
    }

    #blue {
        background-color: #204d74;
    }

    #blue:hover {
        background-color:#2980B9;
    }

    select:focus, select:active {
        border:0;
        outline:0;
    }
</style>
<nav class="navbar navbar-default" style="margin-top: 50px; font-size: 13px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="font-size: 14px;">Filter Venue's</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
           <form method="get">
                <ul class="nav navbar-nav">
                    <li >
                        <select name="budget" id="blue">
                            <option value="" selected="selected">Budget per person&nbsp;&nbsp;&nbsp;&nbsp;  </option>
                            <option value="500-1000">500-1000</option>
                            <option value="1000-1500">1000-1500</option>
                            <option value="1500-2000">1500-2000</option>
                            <option value="2000-3000">2000-3000</option>
                            <option value="3000-5000">3000-5000</option>
                            <option value="5000">5000+</option>
                        </select>
                    </li>
                    <li >
                        <select name="capacity" id="blue">
                            <option value="" selected="selected">Capacity&nbsp;&nbsp;&nbsp;&nbsp; </option>
                            <option value="50-100">50-100</option>
                            <option value="100-150">100-150</option>
                            <option value="150-200">150-200</option>
                            <option value="200-300">200-300</option>
                            <option value="300-500">300-500</option>
                            <option value="500">500+</option>
                        </select>
                    </li>
                    <li >
                        <select name="guest" id="blue">
                            <option value="" selected="selected">Guest Entry&nbsp;&nbsp;&nbsp;&nbsp; </option>
                            <option value="5-10">5-10</option>
                            <option value="10-20">10-20</option>
                            <option value="20-30">20-30</option>
                            <option value="30-50">30-50</option>
                            <option value="50">50+</option>
                        </select>
                    </li>
                    <li>
                       <button class="form-control btn btn-success" style="margin-left: 20px;margin-top: 5px">Apply filter</button>
                    </li>
                </ul>
           </form>
        </div>
    </div>
</nav>
