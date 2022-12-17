<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     *
     *タスク一覧
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return Task::orderByDesc('id')->get();
    }



    /**
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(StoreTaskRequest $request)
    {
        $task = Task::create($request->all());

        return $task
        ? response()->json($task, 201)
        : response()->json([], 500);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
