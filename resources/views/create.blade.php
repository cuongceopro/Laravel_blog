@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

      <!--{{ Form::open(['url' => 'store'], array('class' => 'form')) }}-->
      {{ Form::open(['url' => 'store','method' => 'post','files' => true], array('class' => 'form')) }}


      <div class="form-group">
        <label for="title" class="">タイトル</label>
        <div class="">
          {{ Form::text('title', null, array('class' => '')) }}
        </div>
      </div>

      <div class="form-group">
        <label for="author" class="">編集者</label>
        <div class="">
          {{ Form::text('author', null, array('class' => '')) }}
        </div>
      </div>

      <div class="form-group">
        <label for="cat_id" class="">カテゴリー</label>
        <div class="">
          <select name="cat_id" type="text" class="">
            <option></option>
            <option value="1" name="1">Vấn đề xã hội</option>
            <option value="2" name="2">Dịch thuật</option>
            <option value="3" name="2">Project</option>
            <option value="4" name="2">Suy ngẫm</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="content" class="">本文</label>
        <div class="">
          {{ Form::textarea('content', null, array('class' => '')) }}
        </div>
      </div>

      <div class="form-group">
        <label for="content" class="">略文</label>
        <div class="">
          {{ Form::textarea('content_summary', null, array('class' => '')) }}
        </div>
      </div>


      <!--{!! Form::open(['url' => '/image/store', 'method' => 'post', 'enctype'=>'multipart/form-data','files' => true]) !!}-->

      {{--成功時のメッセージ--}}
      @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      {{-- エラーメッセージ --}}
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div class="form-group">
        {!! Form::label('file', 'サムネイル画像', ['class' => 'control-label']) !!}
        {!!  Form::file('file', array('multiple'=>true))  !!}
        <br />
        {!! Form::label('file1', '画像１', ['class' => 'control-label']) !!}
        {!!  Form::file('file1', array('multiple'=>true))  !!}
        <br />
        {!! Form::label('file2', '画像２', ['class' => 'control-label']) !!}
        {!!  Form::file('file2', array('multiple'=>true))  !!}
        <br />
        {!! Form::label('file3', '画像３', ['class' => 'control-label']) !!}
        {!!  Form::file('file3', array('multiple'=>true))  !!}
        <br />
        {!! Form::label('file4', '画像４', ['class' => 'control-label']) !!}
        {!!  Form::file('file4', array('multiple'=>true))  !!}
        <br />
        {!! Form::label('file5', '画像５', ['class' => 'control-label']) !!}
        {!!  Form::file('file5', array('multiple'=>true))  !!}
      </div>
      <!--
      <div class="form-group">
      {!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
  -->

  <div class="form-group">
    <button type="submit" class="btn btn-primary">投稿する</button>
  </div>

  {{ Form::close() }}

</div>
</div>
</div>
@endsection
