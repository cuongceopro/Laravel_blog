@extends('page_default')

@section('page_content')

	<div id="wrapper">
		<section id="main">
			<section class="content">
				<h3 class="heading"><b>Chuyên mục: {{ $post->category->name }}</b></h3>
				<article class="post">
					<!--<p class="dateLabel">2016/11/20</p>-->

					<?php
						//$overview = DB::table('data')->first();
						//echo '<h3>'.$overview->title.'</h3>';
						//echo '<h4>'.$overview->text.'</h4>'
						?>

            <h3>{{ $post->title }}
            	<!--<small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>-->
              <p class="dateLabel">{{ date("d/m/Y",strtotime($post->created_at)) }}</p>
            <?php
            $count = $post->view_count;
            echo "<i> Lượt xem: ";
            echo $count;
            echo "</i>";
            $count = $count + 1;
            DB::table('posts')->where('id', $post->id)->update(['view_count' => $count]);
            ?>

            </h3>
            <!--<p>カテゴリー：{{ $post->category->name }}</p>-->
						<?php
              echo $post->content;
						?>

			<p align="right"><b>{{ $post->author }}</b></p>

      <p class="readmore">{{ link_to("/edit/$post->id", ' Sửa bài', array('class' => 'btn btn-primary')) }}</p>
      @if ($post->status === 1)
      <p class="readmore">{{ link_to("/accept/$post->id", ' Accept', array('class' => 'btn btn-primary')) }}</p>
      @endif
      <p class="readmore">{{ link_to('/waiting_accept', ' List bài đang sửa', array('class' => 'btn btn-primary')) }}</p>
				</article>
			</section>
		</section>

	</div>

@stop
