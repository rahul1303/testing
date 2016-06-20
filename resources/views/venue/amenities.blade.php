<style>
    .no_dj{
        border-radius:25%;
        font-size:14px;
        color:red;
        line-height:5px;
        text-align:center;
        background:lightsalmon;
        border:1px solid red;
        padding: 5px;
        margin-left: 6px;
        font-style: italic;
        font-family: serif;
    }
    .yes_dj{
        border-radius:25%;
        font-size:14px;
        color:green;
        line-height:5px;
        text-align:center;
        background:lightgreen;
        border:1px solid green;
        padding: 5px;
        margin-left: 6px;
        font-style: italic;
        font-family: serif;
    }
    .parking{
        border-radius:25%;
        font-size:16px;
        color:green;
        line-height:5px;
        text-align:center;
        padding: 5px;
        margin-left: 6px;
        font-style: italic;
        font-family: serif;
    }
    .description{
         border-radius:25%;
         font-size:16px;
         color:grey;
         line-height:5px;
         text-align:center;
         padding: 5px;
         margin-left: 6px;
         font-style: italic;
         font-family: serif;
     }
</style>

<div class="row" style="margin-top: 20px;">
    <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
        <div class="row">
            <div class="col-sm-3 col-xs-5">
                <b>DJ Available :</b>
            </div>
            <div class="col-sm-9 col-sm-7">
                @if($details->dj=='No')
                    <span class="no_dj">No</span>
                @else
                    <span class="yes_dj">Yes</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: white">
        <div class="row">
            <div class="col-sm-3 col-xs-5">
                <b>Parking :</b>
            </div>
            <div class="col-sm-9 col-sm-7">
                @if($details->parking=='0')
                    <span class="no_dj">No</span>
                @else
                    <span class="parking">{{ $details->parking }} Cars</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
        <div class="row">
            <div class="col-sm-3 col-xs-5">
                <b>Nearest Metro Station :</b>
            </div>
            <div class="col-sm-9 col-sm-7">
                @if($details->metro=='')
                    <span class="parking">Coming Soon</span>
                @else
                    <span class="parking">{{ $details->metro }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: white">
        <div class="row">
            <div class="col-sm-3 col-xs-5">
                <b>Party duration time :</b>
            </div>
            <div class="col-sm-9 col-sm-7">
                @if($details->duration=='0')
                    <span class="parking">Minimum of three hours</span>
                @else
                    <span class="parking">{{ $details->duration }} hours</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
        <div class="row">
            <div class="col-sm-3 col-xs-5">
                <b>Bachelor :</b>
            </div>
            <div class="col-sm-9 col-sm-7">
                @if($details->bachelor=='No')
                    <span class="no_dj">{{ $details->bachelor }}</span>
                @else
                    <span class="yes_dj">{{ $details->bachelor }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-sm-12" style="padding-top: 6px;padding-bottom: 6px;background-color: white">
        <div class="row">
            <div class="col-sm-3 col-xs-5">
                <b>Description :</b>
            </div>
            <div class="col-sm-9 col-sm-7">
                <span class="description">{{ $details->discription }}</span>
            </div>
        </div>
    </div>

</div>