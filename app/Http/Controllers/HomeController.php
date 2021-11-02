<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function test()
    {
        echo 222;
    }

    public function getInsertForm(){
        return view('insert');
    }
    public function insertTask(Request $request)
    {
        $content = $request->input('content', '');
        $owner = $request->input('owner', '');

        $task = new Task();
        $task->content = $content;
        $task->owner = $owner;
        $task->save();

        return redirect()->route('select-all');
    }

    public function selectTask($id)
    {
        $task = Task::find($id);
        return view('select',['task'=>$task]);

    }

    public function selectAll()
    {

        $tasks = Task::all()->sortBy('created_at');
        return view('select-all',['tasks'=>$tasks]);
    }

    public function updateTask(Request $request)
    {
        $id = $request ->input('id', 1);

        $content = $request->input('content', '');
        $owner = $request->input('owner', '');

        $task = Task::findOrFail($id);
        $task->content = $content;
        $task->owner =$owner;
        $task->update();

        return redirect()->route('select', ['id'=>$id]);
    }

    public function getUpdateForm($id){
        $task = Task::find($id);
        return view('update', ['task'=>$task]);
    }

    public function deleteTask($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('select-all');

    }
}
