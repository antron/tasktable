@extends('tasktable::default')

@section('content')
<h2>Show</h2>
<div class="container-fluid bs-example-bg-classes">
    <p>
        <strong>Status:</strong>&nbsp;{{ $task->status }}
    </p>
    <p>
        <strong>Title:</strong>&nbsp;{{ $task->title }}
    </p>
    <p>
        <strong>Detail:</strong>
    </p>
    <p class="bg-success" style="padding:1em;">
        {{ $task->detail }}
    </p>
</div>
@stop
