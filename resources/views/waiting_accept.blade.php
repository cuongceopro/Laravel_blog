@extends('page_default')

@section('page_content')


<div id="wrapper">
  <section id="main">

    <section class="content">

      <h3 class="heading"><b> Bài đang sửa</b></h3>
      <article class="post">

        @foreach($posts as $post)

        <h3>{{ $post->title }}</h3>
        <article class="post">
          <img src=" {{ asset('storage/detail/' . $post->title . '/' . $post->summary_image) }}" alt="" width="260" height="113" class="alignright" />
          <p>

            <?php
            echo $post->content_summary;
            ?>
          </p>

          <p class="readmore">{{ link_to("/detail_test/{$post->id}", ' Xem thêm', array('class' => 'btn btn-primary')) }}</p>
          <p class="readmore">{{ link_to("/edit/$post->id", ' Sửa bài', array('class' => 'btn btn-primary')) }}</p>
          <p class="readmore">{{ link_to("/accept/$post->id", ' Accept', array('class' => 'btn btn-primary')) }}</p>
        </article>

        <br clear="all" />

        @endforeach

      </article>

    </section>
  </div>

  @stop
