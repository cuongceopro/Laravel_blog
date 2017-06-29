@extends('page_default')

@section('page_content')


	<div id="wrapper">
		<section id="main">

			<section class="content">

				<h3 class="heading"><b>Chuyên mục: {{ $category_posts[0]->category->name }}</b></h3>
				<article class="post">

					@foreach($category_posts as $category_post)



					<h3>{{ $category_post->title }}</h3>
					<!--<p class="dateLabel">{{ date("d/m/Y",strtotime($category_post->created_at)) }}</p> -->
					<!--<p><img src="{{{asset('images/banners/sample1.jpg')}}}" alt="" width="260" height="113" class="alignright" />-->

					<article class="post">	
					<img src=" {{ $category_post->summary_image  }}" alt="" width="260" height="113" class="alignright" />
					<p>

											<?php
            echo $category_post->content_summary;
						?>
						</p>

            <!--{{ $category_post->content_summary }}-->
                        <p class="readmore">{{ link_to("/detail/{$category_post->id}", ' Xem thêm', array('class' => 'btn btn-primary')) }}</p>
						</article>

            <br clear="all" />

						@endforeach

				</article>

		</section>
	</div>

@stop
