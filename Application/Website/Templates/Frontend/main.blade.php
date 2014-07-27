<!doctype html>
<!--[if IE 8 ]><html class="ie no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if IE 9]> <html class="ie9 no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
<meta charset="utf-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>{{$meta_title}}</title>
<link rel="shortcut icon" href="{{ Request::root() }}/assets/images/favicon.ico"/>
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords }}">
<meta name="author" content="webrising">
<meta property="og:title" content="{{ $meta_title }}" />
<meta property="og:description" content="{{ $meta_description }}"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="{{ Request::root() }}"/>
<link rel="publisher" href="https://plus.google.com/+WebrisingRo"/>

<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
 
<script src="{{ Request::root() }}/assets/theme_js/jquery.js" type="text/javascript" charset="utf-8"></script>
 
<link href='http://fonts.googleapis.com/css?family=Lato:300,400|Montserrat' rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" type="text/css" href="{{ Request::root() }}/assets/theme_css/framework.css">
<link rel="stylesheet" type="text/css" href="{{ Request::root() }}/assets/theme_css/style.css">

</head>
<body>

<!--menu--> 
<nav class="mobile">

<ul class="nav-content clearfix">
<li id="magic-line"></li>

<!--Home-->
<li class="@if($current_page == 'home') echo current-page @endif upper"><a href="{{ Request::root() }}">Home</a></li>

<!--Portfolio-->
<li class="@if($current_page == 'work') echo current-page @endif upper"><a href="{{ Request::root() }}/work">Work</a></li>

<!--Jurnal-->
<li class="@if($current_page == 'journal') echo current-page @endif upper"><a href="{{ Request::root() }}/journal">Journal</a></li>

<!--Company-->
<li class="@if($current_page == 'company') echo current-page @endif upper"><a href="{{ Request::root() }}/company">Company</a></li>

<!--Contact-->
<li class="@if($current_page == 'contact') echo current-page @endif upper"><a href="{{ Request::root() }}/contact">Contact</a></li>
</ul> 
</nav>
<!--end menu-->

<!--logo-->
<header class="mobile">
 
<a href="{{ Request::root() }}/home"><img class="logo" src="{{ Request::root() }}/assets/images/logo.png" alt="Webrising Logo" width="96" height="35"/></a>
 
<button type="button" class="nav-button">
<div class="button-bars"></div>
</button> 
</header>

<!--end logo-->

<div class="sticky-head"></div>

@yield('header')


@section('footer_js')

<!-- JavaScript file links -->
<script src="{{ Request::root() }}/assets/theme_js/retina.js"></script>
<script src="{{ Request::root() }}/assets/theme_js/backgroundcheck.js"></script>
<script src="{{ Request::root() }}/assets/theme_js/plugins.js"></script>
<script src="{{ Request::root() }}/assets/theme_js/main.js"></script>
<script src="{{ Request::root() }}/assets/theme_js/up.js"></script>

<!-- Google analythics -->
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-43843606-7', 'webrising.co');
 ga('send', 'pageview');

</script>


@show

</body>
</html>