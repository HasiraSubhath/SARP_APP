<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cruds = Crud::all();
        return view('crud.index', compact('cruds'));
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //   return $request->all();
        $crud = new Crud;
        $crud->fname = request('fname');
        $crud->lname = request('lname');
        $crud->phone = request('phone');
        $crud->save();

        return redirect('/crud');
    }

    /**
     * Display the specified resource.
     */
    public function show(Crud $crud)
    {
        return view('crud.show', compact('crud'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crud $crud)
    {
        return view('crud.edit', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crud $crud)
    {
        //dd("updated");
        $crud->fname = request('fname');
        $crud->lname = request('lname');
        $crud->phone = request('phone');
        $crud->save();

        return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crud $crud)
    {
        $crud->delete();
        return redirect('/crud');
    }
}
