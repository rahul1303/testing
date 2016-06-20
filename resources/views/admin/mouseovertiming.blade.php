<style>
    .hover-demo{text-align: center;}
    .on-hover-content1{display:none;position: absolute;bottom:-110px;left:-260px;background-color: whitesmoke;padding: 10px;border-radius: 5px;z-index:200;}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $("div.on-hover-content1").hide();

        $(".btn").click(function(){

            $(this).siblings("div.on-hover-content1").show( "slow", "linear" );
        })
                .mouseleave(function(){

                    $(this).siblings("div.on-hover-content1").hide( "slow", "linear" );
                });

    });

</script>
<div class="row hover-demo">
    <div class="col-md-4" >
        <?php $val=$show->combos; ?>
        <div class="outer-wrapper">
            <div class="on-hover-content1">
                <div  width="300px" height="300px">
                    <?php $val=$show->timings; ?>
                    <ol>@foreach($val as $value)
                            <li>{{ $value->start_time }} to {{ $value->end_time }}</li> @endforeach</ol>
                </div>
            </div>
            <div class="btn" style="cursor:zoom-in;"><p>Check timing</p></div>
        </div>
    </div>
</div>
