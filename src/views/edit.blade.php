@extends('tasktable::default')

@section('content')

@if(isset($task))
{{ Form::model($task, ['route' => ['tasks.update', $task->id], 'role'=>'form', 'method' => 'PUT']) }}
@else
{{ Form::open(['route' => 'tasks.store', 'role'=>'form']) }}
@endif

<div class="form-group">
    <label>Status</label>
    {{ Form::select('status',Config::get('tasktable::status'),null,['data-rel'=>'chosen','class'=>'form-control']) }}
</div>

<div class="form-group">
    <label>Title</label>
    {{ Form::text('title',Input::old('title'), ['class'=>'form-control']) }}
</div>

<div class="form-group">
    <label>Detail</label>
    {{ Form::textarea('detail',Input::old('detail'), ['class'=>'form-control']) }}
</div>

<button type="submit">Submit</button>

{{ Form::close() }}

@stop