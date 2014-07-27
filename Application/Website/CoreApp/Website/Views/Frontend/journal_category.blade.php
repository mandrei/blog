@extends('Templates.Frontend.main')

@section('header')

<section class="hero small accent parallax" style="background-image: url(../../../cms/journal_category_header/{{ $category_id }}/journal_header.{{ $category_header_image_extension->journal_category_header_image_extension }} );">
 
<div class="hero-content container">
<h1>{{ $category_name }}</h1>
</div> 
 
<div class="sub-hero container">
<span class="line"></span>
</div> 
</section>
 
 
<section class="content container">
<div class="row">
 
<div class="col-sm-8">
 
@foreach($category_posts as $p)

    <div class="post image">
    <span class="date">{{ $date_format->format_date_day_only($p->date_posted) }}<br><small>{{ strtoupper($date_format->format_date_month_only($p->date_posted)) }}</small></span>
    <div class="post-title">
    <h2><a href="{{ Request::root() }}/journal/{{ $p->journal_id }}/{{ $p->post_url }}">{{ $p->title }}</a></h2>
    <div class="post-meta">
    <h6>Posted by <a href="#">{{ $p->author_name }}</a> / <a href="{{ Request::root() }}/journal/category/{{ $p->category_id }}/{{ $p->category_url }}">{{ $p->category_name }}</a></h6>
    </div>
    </div>
    <div class="post-media">
    <a href="{{ Request::root() }}/journal/{{ $p->journal_id }}/{{ $p->post_url }}"><img src="{{ Request::root() }}/cms/journal/{{ $p->journal_id }}/journal_photo_large.{{ $p->journal_image_extension }}" alt="{{ $p->title }}" /></a>
    </div>
    <div class="post-body">
    <p>{{ substr(strip_tags($p->post),0,200) }}</p>
    <div>
    <a href="{{ Request::root() }}/journal/{{ $p->journal_id }}/{{ $p->post_url }}">Continue Reading...</a>
    </div>
    </div>
    </div> 
 
@endforeach

<!--Pagination-->

    <div class="dividerWidget"></div>
    <div class="wrapper">{{ $paginate_links }}</div>

<!--End Pagination-->

</div> 
 
<div class="col-sm-4">
<div class="sidebar">
 
<div class="widget clearfix">
{{ Form::open(array('url' => 'journal-search')) }}

{{ Form::token() }}

    <input name="search" id="s" type="text" class="search" placeholder="Search.." value=""/>
    <input type="submit" value="Go" class="search-submit"/>

{{ Form::close() }}

</div> 
 
<div class="widget">
<h5>We find writing attractive</h5>
<div class="textwidget"><p>In our office, we empower everyone to tell write their stories. That’s why we - blog.</p></div>
</div> 
 
<div class="widget">
<h5>CATEGORIES</h5>
<ul>
@foreach($journal_categories as $jc)

    <li class="cat-item"><a href="{{ Request::root() }}/journal/category/{{ $jc->id }}/{{ $jc->category_url }}">{{ $jc->name }}</a> ({{ $count_posts->count_posts_by_category_id($jc->id) }})</li>

@endforeach

</ul>
</div> 
 
<div class="widget">
<h5>TAGS</h5>
<div class="tagcloud">

@foreach($tags as $t)

    <a href='{{ Request::root() }}/journal/tag/{{ $t->id }}/{{ $t->tag_url }}'>{{ $t->name }}</a>

@endforeach

</div>
</div> 
 
<div class="widget widget-archive">
<h5>Archives</h5>
<ul>
@foreach($journal_archive as $ja)

<li><a href="{{ Request::root() }}/journal/archive/{{ $date_format->format_date_month_number($ja->distinct_date)  }}/{{ $date_format->format_date_year_only($ja->distinct_date) }}">{{ $ja->distinct_date }}</a></li>

@endforeach

</ul>
</div> 
 
 
<div class="widget widget-recent-entries">
<h5>Recent Posts</h5>
<ul>
@foreach($last_5_posts as $lp)

   
    <li>
        <h4><a href="{{ Request::root() }}/journal/{{ $lp->journal_id }}/{{ $lp->post_url }}">{{ $lp->title }}</a></h4>

    </li>
   
@endforeach

</ul>
</div> 
</div>
</div> 
</div>
</section>


@include('Templates.Frontend.footer')

@stop