<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Beneficiary;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // return view('beneficiary.beneficiary_index');
        $beneficiaries = Beneficiary::all();
        $beneficiaries = Beneficiary::paginate(8); // Change 10 to the desired number of records per page
        return view('beneficiary\beneficiary_index', compact('beneficiaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('beneficiary.beneficiary_create');
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
        {
            $beneficiary = new Beneficiary;

            $beneficiary->nic = request('nic');
            $beneficiary->first_name = request('first_name');
            $beneficiary->last_name = request('last_name');
            $beneficiary->gender = request('gender');
            $beneficiary->dob = request('dob');
            $beneficiary->address = request('address');
            $beneficiary->phone = request('phone');
            $beneficiary->income = request('income');
            $beneficiary->family_members_count = request('family_members_count');
            $beneficiary->education = request('education');
            $beneficiary->land_ownership = request('land_ownership');
            $beneficiary->age = request('age');
            // $beneficiary->province = request('province');
            // $beneficiary->district = request('district');
            // $beneficiary->ds_division = request('ds_division');

            // $beneficiary->province_name = request('province_name');
            // $beneficiary->district_name = request('district_name');
            // $beneficiary->ds_division_name = request('ds_division_name');

            $beneficiary->province_name = $request->input('province_name');
            $beneficiary->district_name = $request->input('district_name');
            $beneficiary->ds_division_name = $request->input('ds_division_name');
            $beneficiary->save();

        return redirect('/beneficiary');

        // After saving the beneficiary, get its ID
        $beneficiaryId = $beneficiary->id; // Assuming you've saved the $beneficiary instance

        // Redirect to the family creation form for the newly created beneficiary
        //return redirect()->route('family/create', ['beneficiaryId' => $beneficiaryId]);
        
        }

    /**
     * Display the specified resource.
     */
    public function show(Beneficiary $beneficiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beneficiary $beneficiary)
    {
        //return view('beneficiary.beneficiary_edit', compact('beneficiary'));

       // $beneficiary = Beneficiary::findOrFail($id);
        return view('beneficiary.beneficiary_edit', compact('beneficiary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beneficiary $beneficiary)
    {
        //dd("updated");
       $beneficiary->nic = request('nic');
        $beneficiary->first_name = request('first_name');
        $beneficiary->last_name = request('last_name');
        $beneficiary->gender = request('gender');
        $beneficiary->dob = request('dob');
        $beneficiary->address = request('address');
        $beneficiary->phone = request('phone');
        $beneficiary->income = request('income');
        $beneficiary->family_members_count = request('family_members_count');
        $beneficiary->education = request('education');
        $beneficiary->land_ownership = request('land_ownership');
        $beneficiary->age = request('age');
        // $beneficiary->province_name = $request->input('province_name');
        // $beneficiary->district_name = $request->input('district_name');
        // $beneficiary->ds_division_name = $request->input('ds_division_name');

        $beneficiary->province_name = request('province_name');
            $beneficiary->district_name = request('district_name');
            $beneficiary->ds_division_name = request('ds_division_name');

         $beneficiary->save();

        return redirect('/beneficiary')->with('success', 'Beneficiary updated successfully');
     

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beneficiarymodel $beneficiarymodel)
    {
        
    }
}
