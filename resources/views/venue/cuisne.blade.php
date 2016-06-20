
<style>
    .cuisines_design{
        border-radius:25%;
        font-size:14px;
        color:black;
        line-height:5px;
        text-align:center;
        background:azure;
        border:1px solid darkgrey;
        padding: 10px;
        margin-left: 6px;
        display: -webkit-inline-box;
        transition: all .2s ease-in-out;z-index:1;
        font-style: italic;
        font-family: serif;
    }
    .cuisines_design:hover{
         border-radius:25%;
         font-size:14px;
         color:black;
         line-height:5px;
         text-align:center;
         background:#337ab7;
         border:1px solid darkgrey;
         padding: 10px;
         margin-left: 6px;
        cursor: pointer;
         display: -webkit-inline-box;
        transform: scale(1.1);  z-index:2;
     }

</style>
<?php $c=$details->maxcombos; ?>

<div class="row" style="margin-top: 20px;">
    <div class=" col-sm-12 ">
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
            <div class="col-sm-3 col-xs-5">
                <b>Veg starter :</b>
            </div>
            <div class="col-sm-9 col-xs-6">
                <?php $a=explode(';',$c->veg_starter) ?>
                    @foreach($a as $v)
                            @if($v!='')
                                <span class="cuisines_design">{{ $v }}</span>
                            @endif
                        @endforeach

            </div>
        </div>
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;">
            <div class="col-sm-3 col-xs-5">
                <b>Non veg Starter :</b>
            </div>
            <div class="col-sm-9 col-xs-6">
                    <?php $a=explode(';',$c->non_veg_starter) ?>
                    @foreach($a as $v)
                            @if($v!='')
                        <span class="cuisines_design">{{ $v }}</span>
                            @endif
                    @endforeach
            </div>
        </div>
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke ">
            <div class="col-sm-3 col-xs-5">
                <b>Veg main course :</b>
            </div>
            <div class="col-sm-9 col-xs-6">
                    <?php $a=explode(';',$c->veg_main_course) ?>
                    @foreach($a as $v)
                            @if($v!='')
                                <span class="cuisines_design">{{ $v }}</span>
                            @endif
                        @endforeach
            </div>
        </div>
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;">
            <div class="col-sm-3 col-xs-5">
                <b>Non Veg main course :</b>
            </div>
            <div class="col-sm-9 col-xs-6">
                    <?php $a=explode(';',$c->non_veg_main_course) ?>
                    @foreach($a as $v)
                            @if($v!='')
                                <span class="cuisines_design">{{ $v }}</span>
                            @endif
                        @endforeach
            </div>
        </div>
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
            <div class="col-sm-3 col-xs-5">
                <b>Breads :</b>
            </div>
            <div class="col-sm-9 col-xs-6">
                    <?php $a=explode(';',$c->bread) ?>
                    @foreach($a as $v)
                            @if($v!='')
                                <span class="cuisines_design">{{ $v }}</span>
                            @endif
                        @endforeach
            </div>
        </div>
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;">
            <div class="col-sm-3 col-xs-5">
                <b>Salads :</b>
            </div>
            <div class="col-sm-9 col-xs-6">
                    <?php $a=explode(';',$c->salad) ?>
                    @foreach($a as $v)
                            @if($v!='')
                            <span class="cuisines_design">{{ $v }}</span>
                        @endif
                    @endforeach
            </div>
        </div>
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
            <div class="col-sm-3 col-xs-5">
                <b>Rice :</b>
            </div>
            <div class="col-sm-9 col-xs-6">
                    <?php $a=explode(';',$c->rice) ?>
                    @foreach($a as $v)
                            @if($v!='')
                                <span class="cuisines_design">{{ $v }}</span>
                            @endif
                        @endforeach
            </div>
        </div>
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;">
            <div class="col-sm-3 col-xs-5">
                <b>Desserts :</b>
            </div>
            <div class="col-sm-9 col-xs-6">
                    <?php $a=explode(';',$c->dessert) ?>
                    @foreach($a as $v)
                            @if($v!='')
                                <span class="cuisines_design">{{ $v }}</span>
                            @endif
                        @endforeach
            </div>
        </div>
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;background-color: whitesmoke">
            <div class="col-sm-3 col-xs-5">
                <b>Soft Drinks :</b>
            </div>
            <div class="col-sm-9 col-xs-6">
                    <?php $a=explode(';',$c->soft_drinks) ?>
                    @foreach($a as $v)
                            @if($v!='')
                                <span class="cuisines_design">{{ $v }}</span>
                            @endif
                        @endforeach
            </div>
        </div>
        <div class="row" style="padding-top: 6px;padding-bottom: 6px;">
            <div class="col-sm-3 col-xs-5">
                <b>Hard Drinks :</b>
            </div>
            <div class="col-sm-9 col-xs-6">
                    <?php $a=explode(';',$c->hard_drinks) ?>
                    @foreach($a as $v)
                            @if($v!='')
                                <span class="cuisines_design">{{ $v }}</span>
                            @endif
                        @endforeach
            </div>
        </div>
    </div>
</div>
