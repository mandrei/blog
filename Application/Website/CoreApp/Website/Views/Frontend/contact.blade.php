@extends('Templates.Frontend.main')

@section('header')

<style type="text/css">
    
    
.socialIcons { float:right; }

.socialIcons li {
    display:inline;
    margin-right:10px;
}

.socialIcons li a img:hover { 
    opacity:0.7;
}

.form-control:-moz-placeholder{color:#999}.form-control::-moz-placeholder{color:#999}
.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}
.form-control{
  display:block;width:100%;height:46px;padding:6px 12px;
  font-size:16px;line-height:1.428571429;color:#D1D1CA;
  vertical-align:middle;background-color:#fff;border:1px solid #e0e0dd;border-radius:4px;
  -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);
  -webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
  transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}
  .form-control:focus{border-color:#66afe9;outline:0;
  -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6)}
  .form-control[disabled],.form-control[readonly],
  fieldset[disabled] .form-control{cursor:not-allowed;background-color:#eee}
  #contact fieldset{padding:0;margin:0;border:none;}


</style>

<section class="hero small accent parallax" style="background-image: url(assets/images/hero-contact.jpg);">
 
<div class="hero-content container">
<h1>Get in touch.</h1>
</div> 
 
<div class="sub-hero container">
<span class="line"></span>
</div> 
</section>
 
 
<section class="container content">
 
<div class="row">
<div class="center title col-sm-12">
<h2>Contact us.</h2>
<p>We have a passion for open conversation and dialogue. Let's chat.</p>
</div>
</div> 
 

<ul class="socialIcons" style="text-align:center; float:none; margin-top:-35px;">
        <li><a href="http://www.facebook.com/webrisingstudio" target="_blank"><img src="{{ Request::root() }}/assets/images/fbIcon.png" alt="facebook" /></a></li>
        <li><a href="http://www.twitter.com/webrisingco" target="_blank"><img src="{{ Request::root() }}/assets/images/twitterIcon.png" alt="twitter" /></a></li>
        <li><a href="http://plus.google.com/+webrisingRo" target="_blank"><img src="{{ Request::root() }}/assets/images/googleIcon.png" alt="google" /></a></li>
</ul><br /><br />



@foreach( $errors->all() as $e )

            <span style="color:rgb(201, 30, 30);">{{ $e }}</span><br/><br />

@endforeach



@if(Session::has('success'))

    <p style="text-align:center;color:rgb(0, 141, 0);">Your message has been sent out successfully!<br />Thank you for contacting us.</p>
      
    <br />

@endif

{{ Form::open(array('contact', 'POST', 'id' => 'contact','class' => 'row' )) }}


<fieldset>
<div class="form-field col-sm-6">
<label for="name">Name</label>
<span><input type="text" name="name" value="{{ Input::old('name') }}" placeholder="Your name"/></span>
</div>

<div class="form-field col-sm-6">
<label for="email">Email</label>
<span><input type="text" name="email" value="{{ Input::old('email') }}" placeholder="Your email"/></span>
</div>

<div class="form-field col-sm-6">
<label for="email">Subject</label>
<span><input type="text" name="subject" value="{{ Input::old('subject') }}" placeholder="Subject"/></span>
</div>

<div class="form-field col-sm-6">
        <label for="project_type">Project Category</label>
        <span>
            <select class="form-control" name="project_type">

                <option value="0">Select a project category</option>

                <option value="1" <?php if(1 == Input::old('project_type')) echo 'selected="selected"';?> >Website</option>

                <option value="2" <?php if(2 == Input::old('project_type')) echo 'selected="selected"';?> >Application</option>

                <option value="3" <?php if(3 == Input::old('project_type')) echo 'selected="selected"';?> >Design</option>

                <option value="4" <?php if(4 == Input::old('project_type')) echo 'selected="selected"';?> >Something else</option>

            </select>
        </span>
    </div>

<div class="form-field col-sm-12">
<label for="message">Message</label>
<span><textarea name="message" placeholder="Your message">{{ Input::old('message') }}</textarea></span>
</div>
</fieldset>
<div class="form-click center col-sm-12">
<span><input type="submit" name="submit" value="Send it"/></span>

</div>
<!-- <div id="alert" class="col-sm-12"></div> -->
</form>
</section>

<!--Google Map-->
<section id="map" class="clearfix">

</section>

@include('Templates.Frontend.footer')

@stop

@section('footer_js')

@parent

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript">
            function initialize() {
              var myLatlng = new google.maps.LatLng(46.777528,23.629659);
              var mapOptions = {
                zoom: 13,
                scrollwheel: false,
                center: myLatlng,
                styles: [{"stylers":[{"hue": "#2db4d8", "lightness" : 100}]}]
              }
              var map = new google.maps.Map(document.getElementById('map'), mapOptions);

              var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  title: 'Form'
              });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
            google.maps.event.addDomListener(window, 'resize', initialize);

    </script>

@stop