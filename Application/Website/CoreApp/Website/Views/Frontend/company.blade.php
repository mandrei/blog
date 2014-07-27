@extends('Templates.Frontend.main')

@section('header')


<section class="hero small accent parallax" style="background-image: url(assets/images/hero-about.jpg);">
 
<div class="hero-content container">
<h1>Company</h1>
</div> 
 
<div class="sub-hero container">
<span class="line"></span>
</div> 
</section>
 
 
<section class="content container">
 
<div class="row">
<div class="title center col-sm-12">
<h2>A trully immersive experience.</h2>
<p>Our goal is to delight customers and users with beautiful, functional, and purposeful solutions. real companies, real organizations, and real people.</p>
</div>
</div> 
 
<div class="row center-mobile">
<div class="col-sm-4">
<p class="highlighted"><strong>The foundation.</strong></p>
<p class="small">Quality is our business model and that's why we iterate every task we complete.</p>
</div>
<div class="col-sm-4">
<p class="highlighted"><strong>Competency</strong></p>
<p class="small">If we don’t believe we’re a good fit for a project, we’ll be honest and upfront about it.</p>
</div>
<div class="col-sm-4">
<p class="highlighted"><strong>Result</strong></p>
<p class="small">We’re proud of what we’ve accomplished. Only happy clients, an exceptional team of 5 people. </p>
</div>
</div> 
</section>
 
 
<section class="feature-box light">
<div class="feature-image" style="background-image: url(assets/images/feature-image2.jpg);"></div>
<div class="content container center-mobile">
 
<div class="row">
<div class="title col-sm-6 col-sm-push-6">
<h2>Founders</h2>
<p>We deliver solutions through beautiful, timeless design & thoughtfully crafted code.</p>
</div>
</div> 
 
<div class="row">
<div class="feature col-sm-6 col-sm-offset-6 col-md-3 clearfix">
<h3>Mureșan Andrei</h3>
<p class="small">Andrei is the man responsible for the web and app development. He is also a famous super hero by night.</p>
<ul class="social-list animated fade" data-appear-bottom-offset="100">
<li><a target="_blank" href="https://www.facebook.com/muresan.andrei.18"><i class="fa fa-facebook"></i></a></li>
<li><a target="_blank" href="https://www.linkedin.com/pub/muresan-andrei/85/516/156"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
<div class="feature col-sm-6 col-sm-offset-6 col-md-3 col-md-offset-0 clearfix">
<h3>Perțe Raul</h3>
<p class="small">Raul is responsible for design and project management. His skills are unmatched and precious.</p>
<ul class="social-list animated fade" data-appear-bottom-offset="100">
<li><a target="_blank" href="http://www.facebook.com/perte.raul"><i class="fa fa-facebook"></i></a></li>
<li><a target="_blank" href="https://www.linkedin.com/in/perteraul"><i class="fa fa-linkedin"></i></a></li>
<li><a target="_blank" href="https://www.twitter.com/perteraul"><i class="fa fa-twitter"></i></a></li>
<li><a target="_blank" href="https://www.instagram.com/perteraul"><i class="fa fa-instagram"></i></a></li>
</ul>
</div>
</div> 
 
 
</div>
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
 
<section class="video-background content dark">
<div id="bgVideo"></div>
<div class="container">
 
<div class="row">
<div class="center title col-lg-12">
<h2>The work process.</h2>
<p>This is the path your project will follow. </p>
</div>
</div> 
 
<ul class="center-mobile phases row">
<li class="col-sm-4 clearfix"><h3><i class="icon white light"></i>Inspiration.</h3><p>The first step for any of our projects is inspiration. When this strikes the rest is easy.</p></li>
<li class="col-sm-4 clearfix"><h3><i class="icon white mouse"></i>Design.</h3><p>The second stage is to create our initial design. And after refining them we are ready to move on.</p></li>
<li class="col-sm-4 clearfix"><h3><i class="icon white browser"></i>Development.</h3><p>After the design is refined we jump into the coding stage. Where the design is finally developed.</p></li>
</ul>
 
<div class="row">
<div class="center padded col-lg-12">
<a href="{{ Request::root() }}/work" class="button white">View work</a>
</div>
</div> 
</div>
</section>
 
 
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


@include('Templates.Frontend.footer')

@stop