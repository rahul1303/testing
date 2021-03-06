    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>



        ol, ul { list-style: none; }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        caption, th, td {
            text-align: left;
            font-weight: normal;
            vertical-align: middle;
        }

        q, blockquote { quotes: none; }

        q:before, q:after, blockquote:before, blockquote:after {
            content: "";
            content: none;
        }

        a img { border: none; }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary { display: block; }

        * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        a { text-decoration: none; }


        a.close {
            z-index: 10;
            color: rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 0px;
            right: 0px;
            font-weight: 600;
            padding: 20px;
            display: inline-block;
            -moz-transition: color 0.3s ease;
            -o-transition: color 0.3s ease;
            -webkit-transition: color 0.3s ease;
            transition: color 0.3s ease;
        }

        a.close:hover { color: rgba(0, 0, 0, 0.7); }

        .heading {
            text-align: center;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            width: 90%;
            height: 100px;
        }

        .heading h1 {
            color: #d35400;
            font-size: 60px;
            font-weight: 600;
            margin-bottom: 25px;
            letter-spacing: .05em;
            text-shadow: 1px 1px 0 #fcdab5, 2px 2px 0 #F58F23, 3px 3px 0 #f1c40f;
        }

        .heading p {
            font-size: 24px;
            font-weight: 300;
        }

        .heading p span { color: #e74c3c; }

        button {
            background-color: #F58F23;
            color: #fff;
            border: none;
            padding: 10px 30px;
            cursor: pointer;
            font-weight: 300;
            font-size: 16px;
            -moz-transition: background-color 0.3s ease;
            -o-transition: background-color 0.3s ease;
            -webkit-transition: background-color 0.3s ease;
            transition: background-color 0.3s ease;
        }

        button:active, button:focus { outline: none; }

        button#feedback {
            position: fixed;
            bottom: 0;
            right: 0;
            display: inline-block;
            -moz-border-radius: 4px 0 0 0;
            -webkit-border-radius: 4px;
            border-radius: 4px 0 0 0;
        }

        button:hover { background-color: #f3830b; }

        .feedback-box {
            z-index: 1000;
            position: fixed;
            bottom:0;
            right: 0;
            display: inline-block;
            width: 500px;
            -moz-perspective: 1000;
            -webkit-perspective: 1000;
            perspective: 1000;
            pointer-events: none;
        }

        .feedback-box .content {
            height: 335px;
            filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
            opacity: 0;
            background: white;
            border: 1px solid #ddd;
            border-right: none;
            border-bottom: none;
            -moz-transform-style: preserve-3d;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -moz-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
            -moz-transform: rotateY(-180deg);
            -webkit-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -moz-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
            -o-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
            -webkit-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
            transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
        }

        .feedback-box .confirm {
            z-index: 100;
            color: #fff;
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: #41C289;
            -moz-transform: scale(0, 0);
            -ms-transform: scale(0, 0);
            -webkit-transform: scale(0, 0);
            transform: scale(0, 0);
            filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
            opacity: 0;
            -moz-border-radius: 20px;
            -webkit-border-radius: 20px;
            border-radius: 20px;
            -moz-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
            -o-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
            -webkit-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
            transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
        }

        .feedback-box .confirm h1 {
            text-align: center;
            font-weight: 600;
            Text-transform: uppercase;
            font-size: 70px;
            margin-top: 115px;
            letter-spacing: -.08em;
            line-height: 1.2;
        }

        .feedback-box .confirm h1 i { vertical-align: 3px; }

        .feedback-box .confirm h1 span {
            display: block;
            font-size: 40%;
            font-weight: 300;
            text-transform: none;
            letter-spacing: .02em;
        }

        .feedback-box.show {
            z-index: 100;
            pointer-events: auto; }

        .feedback-box.show .content {
            -moz-transform: rotateY(0deg);
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
            opacity: 1;
        }

        .feedback-box.show-confirm .confirm {
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
            opacity: 1;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        .feedback-box.error textarea { border-color: red; }

        .feedback-box header {
            z-index: 1000;
            background-color: #F7F7F7;
            color: #F58F23;
            font-weight: 400;
            font-size: 18px;
            height: 55px;
            line-height: 55px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .feedback-box section {
            padding: 30px;
            overflow: hidden;
            -moz-transition: all ease;
            -o-transition: all ease;
            -webkit-transition: all ease;
            transition: all ease;
        }

        .feedback-box section textarea {
            z-index: 1000;
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            font-size: 16px;
            line-height: 1.5;
            resize: none;
            color: #333;
            border: 1px solid #ddd;
            height: 150px;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .feedback-box section textarea:focus {
            outline: none;
            border: 1px solid #999;
        }

        .feedback-box section button {
            display: block;
            padding: 15px;
            text-align: center;
            width: 100%;
        }
    </style>
</head>

<body>
<div class="feedback-box" style="z-index:10000">
    <div class="content"> <div class='close' style="cursor: pointer;"><i class="fa fa-times"></i></div>
        <div class="confirm">
            <h1><i class="fa fa-thumbs-up"></i> <strong>Thanks!</strong> <span>We'll get on that</span></h1>
        </div>
        <header><i class="fa fa-bullhorn"></i> What can we Improve here for you!</header>
        <section>
            <textarea name="feedback"></textarea>
            <button id='submit'>Send Feedback</button>
        </section>
    </div>
</div>
<button id="feedback"><i class="fa fa-bullhorn"></i> Feedback</button>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    (function($){
        var words = ["Thanks"];
        var feedback = $(".feedback-box");

        //Feedback Toggle
        $("#feedback").on("click" , function(){
            feedback.addClass("show");
        });

        //Close Trigger
        $(".close").on("click" , function(){
            feedback.removeClass("show");
            setTimeout(function(){
                feedback.removeClass("show-confirm").find("textarea").val('');
                console.log("reset")
            }, 1000);
        });

//Submit
        $("#submit").on("click" , function(){
            if( !$("textarea").val() ) {
                feedback.addClass("error");
                setTimeout(function(){
                    feedback.removeClass("error");
                }, 500)
            }else{
                feedback.addClass("show-confirm");
                var message=$("textarea").val();
                var randomWord = words[Math.floor(Math.random() * words.length)];
                $(".feedback-box h1 strong").text(randomWord);

                setTimeout(function(){
                    feedback.removeClass("show").find("textarea").val('').delay(1000);
                },2000);

                setTimeout(function(){
                    feedback.removeClass("show-confirm");
                },2200);
                $.get('{{asset('ajax-feedback?message=')}}'+message,function(value){
                });
            }
        })
    })(jQuery);
</script>
