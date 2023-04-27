<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\MyTodo;
use Illuminate\Http\Request;

class MytodoController extends Controller
{
    public function index()
    {   
        $todos = MyTodo::all();
        return view('todos.index', ['todos' => $todos]);
    }
    public function create()
    {
        return view('todos.create');
    }
    public function store(TodoRequest $request)
    {
           // $return->validated();
        MyTodo::create([
        'Title' => $request->title, 
        'Description' => $request->description, 
        'Done' => 0
        ]);

        $request->session()->flash('alert-success', 'Todo Created!');
        
             return to_route('todos.index');
        return redirect()->route('todos.index');
        
    }
    public function show($id)
    {
        $todos = MyTodo::find($id);
        if(! $todos){
            return to_route('todos.index')->withErrors([
                'error' => 'Unable to locate the Todo'
            ]);
        }
        return view('todos.show', ['todos' => $todos]);
    }
}
