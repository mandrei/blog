@extends('Templates.Frontend.main')

@section('header')

<!--Homepage head-->
<section class="hero accent parallax" style="background-image: url(assets/images/hero-galore.jpg);">
 
<div class="hero-content container">
<p><em>The power of your brand - back in your hands.</em></p>
<h1>Design. Development. Support.</h1>
</div> 
 
<div class="sub-hero container">
<span class="line"></span>
<a href="{{ Request::root() }}/company" class="button white">Learn More</a>
</div> 
</section>
 <!--end Homepage head-->


<section class="center-mobile content container">
<div class="row">
<div class="col-sm-4">
<h2>Passion</h2>
<p>Our unyielding passion for beautiful design and experiences that delight the consumer make us a great fit for those who believe in what they do. We love working with passionate clients who want to share their passion with others.</p>
</div>
<div class="col-sm-4">
<h2>Purpose</h2>
<p>Yes, we work with CSS3, Frameworks, Modrnizr… None of these matter without purpose. The real question is, how can we leverage these technologies to resonate with your audience? How can we help you make a difference? How can we help you succeed?</p>
</div>
<div class="col-sm-4">
<h2>Diligence</h2>
<p>As the saying goes, genius is 1% inspiration, 99% perspiration. Creative thinking and hard work don’t typically go hand in hand, but that’s where we set ourselves apart. Real artists ship.</p>
</div>
</div>
</section>

<section class="feature-box light absolute clearfix">
<div class="content container center-mobile">
 
<div class="row">
<div class="title col-sm-6 col-sm-push-6">
<h2>Our services</h2>
<p>Let us create for you something meaningful. Something unique. Something real.<br />
	Our goal is to delight costumers and users with beautiful, functional, and purposeful solutions.</p>
</div>
</div> 
 
<div class="row">
<div class="feature col-sm-6 col-sm-push-6 clearfix">
<i class="icon gray target"></i><h3>Brand & Identity</h3>
<p class="small">Rather, every project is specifically tailored to the client’s invididual needs, in a manner that is appropriate, considered, carefully built and enduring.</p>
</div>
</div> 
 
<div class="row">
<div class="feature col-sm-6 col-sm-push-6 clearfix">
<i class="icon gray monitor"></i><h3>Web & UI Design</h3>
<p class="small">Our approach has proven successful because everything we create combines your users’ goals, emotions, and perspectives with the objectives of your business and your product.</p>
</div>
</div> 
 
<div class="row">
<div class="feature col-sm-6 col-sm-push-6 clearfix">
<i class="icon gray browser"></i><h3>Platform Development</h3>
<p class="small">We’ve built dozens of web applications, front-ends and back-ends. We’re capable of developing any technology on any platform and specialize in tackling multi-platform experiences that scale and that users love.</p>
</div>
</div> 
 
<div class="row">
<div class="feature col-sm-6 col-sm-offset-6">
<a href="{{ Request::root() }}/company" class="button gray">Learn More</a>
</div>
</div> 
</div>
<div class="image-absolute"></div>
</section>
 
 
<section class="container">
<div class="row">
 
<div class="milestone col-sm-4">
<span class="timer value" data-from="1000" data-to="2013" data-speed="1000" data-refresh-interval="100">0</span>
<h6>Year Founded</h6>
</div> 
 
<div class="milestone col-sm-4">
<span class="timer value" data-from="0" data-to="5" data-speed="1000" data-refresh-interval="100">0</span>
<h6>Employees</h6>
</div> 
 
<div class="milestone col-sm-4">
<span class="timer value" data-from="0" data-to="21" data-speed="1000" data-refresh-interval="100">0</span>
<h6>Projects</h6>
</div> 
</div>
</section>
 
<!--Portfolio Slideshow-->
<section class="recent-work content dark parallax" style="background-image: url(assets/images/ipad-hands.jpg);">
 
<div class="container center">
<div class="row">
<div class="col-sm-12">
<h2>Our recent work.</h2>
<p>A selection of hand-picked portfolio items. Super-easy to include or remove from your designs.</p>
</div>
</div>
</div> 
 
<div id="recent-gallery" class="royalSlider rsDefault visibleNearby">
<a class="rsImg" href="{{ Request::root() }}/assets/images/work/branding/06.jpg" data-rsw="566" data-rsh="375"></a>
<a class="rsImg" href="{{ Request::root() }}/assets/images/work/branding/04.jpg" data-rsw="566" data-rsh="375"></a>
<a class="rsImg" href="{{ Request::root() }}/assets/images/work/branding/11.jpg" data-rsw="566" data-rsh="375"></a>
<a class="rsImg" href="{{ Request::root() }}/assets/images/work/branding/12.jpg" data-rsw="566" data-rsh="375"></a>
<a class="rsImg" href="{{ Request::root() }}/assets/images/work/branding/08.jpg" data-rsw="566" data-rsh="375"></a>
</div> 
 
<div class="container"> 
<div class="center padded col-sm-12">
<a href="{{ Request::root() }}/work" class="button white">View work</a>
</div>
</div> 
</section>
 <!--End Portfolio Slideshow-->


 <!--Are you impressed section-->
<section class="call-to-action content light">
<div class="container">
 
<div class="row">
<div class="title col-lg-12">
<h2>Are you impressed?</h2>
<p>If so, why don’t you get in touch with us so we can talk about your projects.</p>
</div>
</div> 
 
<div class="row">
<div class="actions padded col-lg-12">
<a class="button accent-alt" href="{{ Request::root() }}/contact">Contact us</a>
<span class="choice">or</span>
<a class="button gray" style="margin-top: 8px;margin-right:46px;" href="{{ Request::root() }}/journal">View Journal</a>
</div>
</div> 
</div>
</section>
 <!--End Are you impressed section-->


@include('Templates.Frontend.footer')

@stop
