<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::oldest()->paginate(20);

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
       $this->validate($request, [
        'title'     => 'required',
        'description'   => 'required'
    ]);


    //create post
    Task::create([
        'title'     => $request->title,
        'description'   => $request->description,
    ]);


    
    //redirect to index
    return redirect()->route('tasks.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         //get post by ID
         $tasks = Task::findOrFail($id);
         //render view with post
         return view('tasks.show', compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //get post by ID
        $tasks = Task::findOrFail($id);


        //render view with post
        return view('tasks.edit', compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          //validate form
          $this->validate($request, [
            'title'     => 'required',
            'description'   => 'required'
        ]);


        //get post by ID
        $tasks = Task::findOrFail($id);



            //update post with new image
            $tasks->update([
                'title'     => $request->title,
                'description'   => $request->description
            ]);




            //update post without image
            $tasks->update([
                'title'     => $request->title,
                'description'   => $request->description
            ]);
        


        //redirect to index
        return redirect()->route('tasks.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //get post by ID
         $tasks = Task::findOrFail($id);


 
 
         //delete post
         $tasks->delete();
 
 
         //redirect to index
         return redirect()->route('tasks.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
