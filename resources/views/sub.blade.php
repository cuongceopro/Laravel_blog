@extends('page_default')

@section('page_content')


	<div id="wrapper">
		<section id="main">

			<section class="content">

				<h3 class="heading">{{ $category_posts[0]->category->name }}</h3>
				<article class="post">

					@foreach($category_posts as $category_post)


					<h3>{{ $category_post->title }}</h3>
					<p class="dateLabel">2016/11/20</p>
					<p><img src="{{{asset('images/detail/detail_1_1.jpg')}}}" alt="" width="260" height="113" class="alignright" />
            {{ $category_post->content_summary }}
						</p>
            <p class="readmore">{{ link_to("/detail/{$category_post->id}", ' Xem thêm', array('class' => 'btn btn-primary')) }}</p>
            <br clear="all" />

						@endforeach

				</article>

		</section>
	</div>

@stop
