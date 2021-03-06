<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>jQuery NiceScroll Test 2.2.0</title>
    <style type="text/css">
        #boxscroll {
            padding: 0px;
            height: 450px;
            width: 420px;
            border: 2px solid #669900;
            overflow: auto;
            margin: 0px;
        }
    </style>

    <script src="{{ asset('nicescroll/js/jquery.min.js') }}"></script>
    <script src="{{ asset('nicesroll/js/jquery.nicescroll.js') }}"></script>
    <script>
        //  document.addEventListener('touchmove',function(e){e.preventDefault();},false); // for touch devices
    </script>

    <script>
        $(document).ready(function() {

            $("#boxscroll").niceScroll("#boxframe2",{autohidemode:false});

        });

        /*
         function resize(dom) {
         $(dom).height("");  //reset height to fix browser bug
         var cc=$(dom).contents();
         var hh=Math.max(cc.find('html').attr('scrollHeight'),cc.find('body').attr('scrollHeight'));
         $(dom).height(hh);
         $(dom).parent().getNiceScroll().onResize();
         $(dom).parent().scrollTop(0);  // always on top
         }
         */

    </script>

    <script>
        var hh=200;
        function toggle(me) {
            $(me).animate({height:hh},function(){$(this).getNiceScroll().onResize()});
            hh=600-hh;
        }
    </script>

    <meta name="viewport" content="user-scalable=no" />

</head>

<body>
<h2>IFRAME WITH WRAPPER</h2>
<p>
    <input type="submit" name="button" id="button" value="TOGGLE" onclick="toggle('#boxscroll')" />
</p>
<div id="boxscroll">
    <iframe id="boxframe2" src="iframe/short.html" width="100%" height="300px" frameborder="0"></iframe>
</div>


<div>See the code on &quot;iframe onload&quot;  event to autoresize the content.</div>
</body>
</html>
