<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ $title }}</title>
	<link rel="icon" href="{!! asset('storage/app/images/icon.png') !!}"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<meta property="og:image" content="{!! asset('storage/app/images/icon.png') !!}">
	<meta property="og:description" name="description" content="Book Party Venue">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<style>
	body{
		font-family: century gothic;
	}
</style>

<body>
@yield('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=566643850150654";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="{{ asset('social-share/src/jquery.floating-social-share.js') }}"></script>
<style>
	.top-left{
		z-index:100;
	}
</style>

<link rel="stylesheet" type="text/css" href="{{ asset('social-share/src/jquery.floating-social-share.css') }}" />
<script>
	$("body").floatingSocialShare({
		buttons: ["facebook", "twitter", "google-plus", "linkedin", "pinterest"],
		text: "Book Pub and Club in easy teo steps ",
		url: window.location.href0
	});
</script>
@include('feedback')
@include('google')
</body>
</html>
