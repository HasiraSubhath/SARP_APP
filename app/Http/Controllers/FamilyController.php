<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use App\Models\Beneficiary;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $families = Family::all();
        $families = Family::latest()->paginate(10); // Change 10 to the desired number of records per page
        return view('family\family_index', compact('families'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($beneficiaryId)
    {
        return view('family.family_create', ['beneficiaryId' => $beneficiaryId]);
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

         // Get the beneficiary ID from the request
          $beneficiaryId = $request->input('beneficiary_id');

         // Find the beneficiary
         $beneficiary = Beneficiary::findOrFail($beneficiaryId);

         // Associate the family member with the beneficiary
          $family->beneficiary()->associate($beneficiary);

       try {
        $family->save();
    } catch (\Exception $e) {
        dd($e->getMessage()); // This will print any error messages
    }
        return redirect('/family');

   
    return redirect('/family');


    }

    // public function store(Request $request)
    // {
    //     // Retrieve the beneficiary ID from the request
    //     $beneficiaryId = $request->input('beneficiary_id');
    
    //     // Find the beneficiary
    //     $beneficiary = Beneficiary::findOrFail($beneficiaryId);
    
    //     // Check if input data for family members exists
    //     if ($request->has('first_name')) {
    //         // Loop through the submitted data to create and associate family members
    //         foreach ($request->input('first_name') as $key => $firstName) {
    //             $family = new Family;
    
    //             // Populate family member details
    //             $family->first_name = $firstName;
    //             $family->last_name = $request->input('last_name')[$key];
    //             $family->phone = $request->input('phone')[$key];
    //             $family->gender = $request->input('gender')[$key];
    //             $family->dob = $request->input('dob')[$key];
    //             // Here, you don't need to include the 'youth' field as it will be calculated based on the date of birth.
    //             $family->education = $request->input('education')[$key];
    //             $family->employment = $request->input('employment')[$key];
    //             $family->nutrition_level = $request->input('nutrition_level')[$key];
    
    //             // Associate the family member with the beneficiary
    //             $family->beneficiary()->associate($beneficiary);
    
    //             // Calculate age and determine youth status
    //             $dob = new DateTime($family->dob);
    //             $now = new DateTime();
    //             $age = $dob->diff($now)->y;
    //             $family->youth = ($age < 35) ? "Youth" : "Not Youth";
    
    //             // Save the family member
    //             try {
    //                 $family->save();
    //             } catch (\Exception $e) {
    //                 dd($e->getMessage()); // This will print any error messages
    //             }
    //         }
    //     }
    
    //     return redirect('/family');
    // }


    /**
     * Display the specified resource.
     */
    public function show(Family $family)
    {
        return view('family.family_show', compact('family'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Family $family)
    {
        return view('family.family_edit', compact('family'));
    }
    // public function editDetails(Family $family)
    // {
    //     return view('family.family_edit', compact('family'));
    // }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Family $family)
    {
        $family->first_name = request('first_name');
        $family->last_name = request('last_name');
        $family->phone = request('phone');
        $family->gender = request('gender');
        $family->dob = request('dob');
        $family->youth = request('youth');
        $family->education = request('education');
        $family->employment = request('employment');
        $family->nutrition_level = request('nutrition_level');
        $family->save();

        return redirect('/family');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Family $family)
    {
        $family->delete();
        return redirect('/family');
    }
}
