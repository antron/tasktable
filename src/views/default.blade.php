<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TASKTABLE</title>
        {{ HTML::style('bootstrap/css/bootstrap.css') }}
    </head>
    <body>
        <header class="navbar navbar-static-top bs-docs-nav">
            <div class="container">
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ URL::to('./tasks') }}">Tasks</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('./comments') }}">Comments</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('./tasks/create') }}">Create</a>
                        </li>
                        @if(isset($task))
                        <li>
                            <a href="{{ URL::to('./tasks/' . $task->id) }}">Show</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('./tasks/' . $task->id . '/edit') }}">Edit</a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </header>
        <div class="container">
                <h1 class="page-header">TASKTABLE</h1>

                @yield('content')
        </div>
    </body>
</html>