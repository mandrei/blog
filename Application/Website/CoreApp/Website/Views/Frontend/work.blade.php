@extends('Templates.Frontend.main')

@section('header')

<!--Portfolio head-->
<section class="hero small accent parallax" style="background-image: url(assets/images/hero-gallery.jpg);">
 
<div class="hero-content container">
<h1>Work</h1>
</div> 
 
<div class="sub-hero container">
<span class="line"></span>
</div> 
</section>
 
 
<section class="portfolio-block">
 
<div class="container">
<div class="row">
<ul class="filtering col-lg-12">
<li class="filter" data-filter="all">All</li>
<li class="filter" data-filter="category_1">Illustrations</li>
<li class="filter" data-filter="category_2">Branding</li>
<li class="filter" data-filter="category_3">Web</li>
</ul>
</div>
</div> 
 
<ul class="portfolio-grid">
 
<li class="thumbnail mix category_2 mix_all">
<a href="{{ Request::root() }}/assets/images/work/branding/02.png" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/branding/02.png" alt="Malaria Logo">
<div class="projectinfo">
<div class="meta">
<h4>Malaria Logo</h4>
</div>
</div>
</a>
</li>
 
<li class="thumbnail mix category_2 mix_all">
<a href="{{ Request::root() }}/assets/images/work/branding/04.jpg" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/branding/04.jpg" alt="Raw Marketing Branding">
<div class="projectinfo">
<div class="meta">
<h4>Raw Marketing Branding</h4>
</div>
</div>
</a>
</li>
 
<li class="thumbnail mix category_2 mix_all">
<a href="{{ Request::root() }}/assets/images/work/branding/05.jpg" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/branding/05.jpg" alt="Gorg & Suter Logo">
<div class="projectinfo">
<div class="meta">
<h4>Gorg & Suter Logo</h4>
</div>
</div>
</a>
</li>
 
<li class="thumbnail mix category_2 mix_all">
<a href="{{ Request::root() }}/assets/images/work/branding/06.jpg" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/branding/06.jpg" alt="Blosign iOS App">
<div class="projectinfo">
<div class="meta">
<h4>Blosign iOS App</h4>
</div>
</div>
</a>
</li>
 
<li class="thumbnail mix category_2 mix_all">
<a href="{{ Request::root() }}/assets/images/work/branding/07.jpg" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/branding/07.jpg" alt="Peppermint Logo">
<div class="projectinfo">
<div class="meta">
<h4>Peppermint Logo</h4>
</div>
</div>
</a>
</li>
 
<li class="thumbnail mix category_2 mix_all">
<a href="{{ Request::root() }}/assets/images/work/branding/08.jpg" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/branding/08.jpg" alt="School Business Card">
<div class="projectinfo">
<div class="meta">
<h4>School Business Card</h4>
</div>
</div>
</a>
</li>
 
<li class="thumbnail mix category_2 mix_all">
<a href="{{ Request::root() }}/assets/images/work/branding/10.jpg" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/branding/10.jpg" alt="Gameboy">
<div class="projectinfo">
<div class="meta">
<h4>Gameboy</h4>
</div>
</div>
</a>
</li>
 
<li class="thumbnail mix category_2 mix_all">
<a href="{{ Request::root() }}/assets/images/work/branding/11.jpg" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/branding/11.jpg" alt="Minio Technologies">
<div class="projectinfo">
<div class="meta">
<h4>Minio Technologies</h4>
</div>
</div>
</a>
</li>
 
 
<li class="thumbnail last mix category_2 mix_all">
<a href="{{ Request::root() }}/assets/images/work/branding/12.jpg" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/branding/12.jpg" alt="Wheather iOS App">
<div class="projectinfo">
<div class="meta">
<h4>Wheather iOS App</h4>
</div>
</div>
</a>
</li>

<li class="thumbnail last mix category_3 mix_all">
<a href="{{ Request::root() }}/assets/images/work/web/03.jpg" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/web/03.jpg" alt="uptimy®">
<div class="projectinfo">
<div class="meta">
<h4>uptimy®</h4>
</div>
</div>
</a>
</li>

<li class="thumbnail last mix category_3 mix_all">
<a href="{{ Request::root() }}/assets/images/work/web/09.jpg" class="lightbox">
<img src="{{ Request::root() }}/assets/images/work/web/09.jpg" alt="Wheather iOS App">
<div class="projectinfo">
<div class="meta">
<h4>Raul Website</h4>
</div>
</div>
</a>
</li>

</ul> 
</section>
 
 
<!--Our clients-->

<!--End our clients-->
 
 
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