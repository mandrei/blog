@extends('Templates.Frontend.main')

@section('header')


<section class="hero small accent parallax" style="background-image: url(assets/images/hero-blog.jpg);">
 
<div class="hero-content container">
<h1>Search results for '{{ $search_name }}'</h1>
</div> 
 
<div class="sub-hero container">
<span class="line"></span>
</div> 
</section>


<!-- start Search content -->
<section class="content container">

<div class="row">
 
<div class="col-sm-8">

@if($search_name == '')<h4>WE’RE SORRY. THE BLOG POST YOU ARE LOOKING FOR DOES NOT EXIST.</h4>@endif
            
        @if($search_name != '')

            <ul>

              @foreach($search as $s)

                <li>
                   <a href="{{ Request::root() }}/journal/{{ $s->journal_id }}/{{ $s->post_url }}"><img src="{{ Request::root() }}/cms/journal/{{ $s->journal_id }}/journal_photo_small.{{ $s->journal_image_extension }}" alt="{{ $s->title }}"/></a>
                    <h3><a href="{{ Request::root() }}/journal/{{ $s->journal_id }}/{{ $s->post_url }}">{{ $s->title }}</a></h3>
                    <p>Posted by {{ $s->author_name }}<br />
                           In <a href="{{ Request::root() }}/journal/category/{{ $s->category_id }}/{{ $s->category_url }}">{{ $s->category_name }}</a>
                          </p>
                          <br />

                </li>
               
              @endforeach

            </ul>

        @endif

     <!--Pagination-->

    <div class="dividerWidget"></div>
    <div class="wrapper">{{ $paginate_links }}</div>

<!--End Pagination-->

</div>

</div>
        
</section><!-- end section -->

@include('Templates.Frontend.footer')

@stop