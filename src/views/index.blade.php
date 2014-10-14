@extends('tasktable::default')

@section('content')
        <h2>Index</h2>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->status }}</td>
                        <td><a href="{{ URL::to('tasks/' . $task->id) }}">{{ $task->title }}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@stop
