<?php

namespace App\Http\Controllers;

use App\Task;
use App\Taskdecrypt;
use Illuminate\Http\Request;

use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('kelola',compact('tasks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        // echo json_encode($request->post()['title']);
        Task::create($request->all());
        return redirect()->route('task.index')->with('message','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function show2(Task $task)
    // {
    //     return view('tampil2', compact('task'));
    // }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tampil', compact('task'));
    }


    public function decrypt($id)
    {
        $task = Taskdecrypt::find($id);
        return view('tampildecrypt', compact('task'));
    }
 
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Taskdecrypt $task)
    {
        return view('ubah', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('task.index')->with('message','data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('destroy','data berhasil dihapus');
    }
}
