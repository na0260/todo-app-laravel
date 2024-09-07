<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = session()->get('todos', []);
        return view('dashboard', ['todos' => $todos]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $todos = session()->get('todos', []);

        $newTodo = [
            'id' => count($todos) + 1,
            'title' => $request->title,
        ];

        $todos[] = $newTodo;
        session()->put('todos', $todos);

        return redirect()->route('todos.index')->with('success', 'Todo added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todos = session()->get('todos', []);

        foreach ($todos as  &$todo) {
            if ($todo['id'] == $id) {
                $todo['title'] = $request->input('title', $todo['title']);
                break;
            }
        }

        session()->put('todos', $todos);

        return redirect()->route('todos.index')->with('success', 'Todo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todos = session()->get('todos', []);

        $todos = array_filter($todos, function ($todo) use ($id) {
            return $todo['id'] != $id;
        });

        session()->put('todos', array_values($todos));

        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully.');
    }
}
