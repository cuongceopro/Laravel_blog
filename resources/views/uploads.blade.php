{!! Form::open(['url' => '/image/store', 'method' => 'post', 'enctype'=>'multipart/form-data','files' => true]) !!}

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
    {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
    {!!  Form::file('file', array('multiple'=>true))  !!}
    <br />
    {!! Form::label('file1', '画像アップロード', ['class' => 'control-label']) !!}
    {!!  Form::file('file1', array('multiple'=>true))  !!}
</div>

<div class="form-group">
    {!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!}
</div>
{!! Form::close() !!}
