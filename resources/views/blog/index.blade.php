@extends('layouts.refraction')
@section('title')
    {{ $title }}
@stop

@section('content')
<!-- Games Page Starts here -->
<div class="games">
	<div class="container">
		<div class="page-path">
			<ul class="path-list">
				<li><a href="{{ route('index') }}">Главная</a></li>&nbsp;&nbsp;/&nbsp;&nbsp;
				<li class="act">Новости</li>
			</ul>
			<p><a href="{{ route('index') }}">На главную</a></p>
			<div class="clearfix"></div>
		</div>
		<h3 class="page-header">
			Новости проекта
		</h3>
		<div class="blog-content">
		@foreach($news as $entry)
            <div class="blog-post">
                <h3><a href="single.html">{{ $entry->title }}</a></h3>
                <div class="post-details">
                    <p>Опубликовано <span>{{ $entry->created_at->format('j.m.Y') }}</span> </p>
                </div>
                <img src="{{ $entry->image }}" alt="{{ $entry->title }}">

                <nav class="cl-effect-3 text-right"><a href="{{ route('blog.show', ['slug' => $entry->slug]) }}">Подробнее</a></nav>
            </div>
		@endforeach
		</div>
		<div class="blog-sidebar">
			<h3 class="page-header">Catgeories</h3>
			<ul class="product-categories color"><li class="cat-item cat-item-42"><a href="#">Shooting</a> <span class="count">(14)</span></li>
				<li class="cat-item cat-item-60"><a href="#">Action</a> <span class="count">(2)</span></li>
				<li class="cat-item cat-item-63"><a href="#">Gloves</a> <span class="count">(2)</span></li>
				<li class="cat-item cat-item-54"><a href="#">Cars</a> <span class="count">(8)</span></li>
				<li class="cat-item cat-item-55"><a href="#">Racing</a> <span class="count">(11)</span></li>
				<li class="cat-item cat-item-64"><a href="#">Sports</a> <span class="count">(3)</span></li>
				<li class="cat-item cat-item-61"><a href="#">Style</a> <span class="count">(3)</span></li>
				<li class="cat-item cat-item-56"><a href="#">Bikes</a> <span class="count">(6)</span></li>
				<li class="cat-item cat-item-57"><a href="#">Zombies</a> <span class="count">(13)</span></li>
				<li class="cat-item cat-item-58"><a href="#">Wressling</a> <span class="count">(7)</span></li>
				<li class="cat-item cat-item-62"><a href="#">Watchers</a> <span class="count">(2)</span></li>
				<li class="cat-item cat-item-41"><a href="#">Women</a> <span class="count">(17)</span></li>
			 </ul>
			<h3 class="page-header">Subscribe</h3>
			<div class="subscribe">
				<h4>Subscribe For News</h4>
				<input type="text" placeholder="Email.." required="" />
				<input type="submit" value="Subscribe" />
			</div>
			<h3 class="page-header">Papular Tags</h3>
			<ul class="tags_links">
					<li><a href="#">Design</a></li>
					<li><a href="#">Branding</a></li>
					<li><a href="#">Art</a></li>
					<li><a href="#">Developing</a></li>
					<li><a href="#">CSS</a></li>
					<li><a href="#">HTML</a></li>
					<li><a href="#">Wordpress</a></li>
					<li><a href="#">Photography</a></li>
			</ul>

		</div>
		<div class="clearfix"></div>
		
	</div>
</div>
<!-- What New Part Endss Here -->

@stop