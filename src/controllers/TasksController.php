<?php

class TasksController extends \BaseController {

    /**
     * Display a listing of tasks
     *
     * @return Response
     */
    public function index()
    {
        $tasks = Tt_task::all();

        return View::make('tasktable::index', compact('tasks'));

    }

    /**
     * Show the form for creating a new test
     *
     * @return Response
     */
    public function create()
    {
        return View::make('tasktable::edit');

    }

    /**
     * Store a newly created test in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make($data = Input::all(), Tt_task::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Tt_task::create($data);

        return Redirect::to('tasks');

    }

    /**
     * Display the specified test.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $task = Tt_task::findOrFail($id);

        return View::make('tasktable::show', compact('task'));

    }

    /**
     * Show the form for editing the specified test.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $task = Tt_task::find($id);

        return View::make('tasktable::edit', compact('task'));

    }

    /**
     * Update the specified test in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {

        $task = Tt_task::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Tt_task::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $task->update($data);

        return Redirect::action('TasksController@show', array($id));

    }

    /**
     * Remove the specified test from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Task::destroy($id);

        return Redirect::route('tasks.index');

    }

}
