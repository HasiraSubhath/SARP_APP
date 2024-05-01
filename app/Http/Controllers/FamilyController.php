<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $families = Family::all();
        return view('family\family_index', compact('families'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('family.family_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $family = new Family;

        $family->first_name = request('first_name');
        $family->last_name = request('last_name');
        $family->phone = request('phone');
        $family->gender = request('gender');
        $family->dob = request('dob');
        $family->youth = request('youth');
        $family->education = request('education');
        $family->employment = request('employment');
        $family->nutrition_level = request('nutrition_level');
       // $family->beneficiary_id = request('beneficiary_id');
       try {
        $family->save();
    } catch (\Exception $e) {
        dd($e->getMessage()); // This will print any error messages
    }
        return redirect('/family');


    }

    /**
     * Display the specified resource.
     */
    public function show(Family $family)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Family $family)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Family $family)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Family $family)
    {
        //
    }
}
