<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function searchBeneficiary(Request $request){
        $nic = request->input('nic');
        $beneficiary = Beneficiary::where('nic', $nic)->first();

        if ($beneficiary) {
            return response()->json([
                'status' => 'success',
                'beneficiary' => $beneficiary
            
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Beneficiary not found'
            ]);}

    }


    public function index()
    {
        
       // $trainings = Training::latest()->paginate(10); // Change 10 to the desired number of records per page
       // return view('training\training_index', compact('trainings'));

       $trainings = Training::with('beneficiary')->latest()->paginate(10); // Change 10 to the desired number of records per page
       return view('training.training_index', compact('trainings'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('training.training_create');
    //     $beneficiary = Beneficiary::all();
    // return view('training.training_create', compact('beneficiary'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $training = new Training;
        $training->program_name = request('program_name');
        $training->date = request('date');
        $training->place = request('place');
        $training->conductor_name = request('conductor_name');
        $training->conductor_payment = request('conductor_payment');
        $training->province = request('province');
        $training->district = request('district');
        $training->ds_division = request('ds_division');
        $training->gn_division = request('gn_division');
        $training->as_center = request('as_center');
        $training->beneficiary_id = request('beneficiary_id');
        $training->save();
       return redirect('/training')->with('success', 'Training registered successfully.');
   }

    // Attach beneficiaries to the training
//     $beneficiaryIds = $request->input('beneficiary_ids');
//     if ($beneficiaryIds) {
//         $training->beneficiaries()->attach($beneficiaryIds);
//     }

//     return redirect('/training')->with('success', 'Training registered successfully.');
// }
   

    /**
     * Display the specified resource.
     */
    public function show(Training $training)
    {
        return view('training.training_show', compact('trainings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training $training)
    {
        //return view('training.training_edit', compact('training'));
        // $training = Training::with('beneficiaries')->findOrFail($training->id);
        // return view('training.training_edit', compact('training'));

        $training = Training::with('beneficiaries')->findOrFail($training->id);
    $beneficiaries = Beneficiary::all();
    return view('training.training_edit', compact('training', 'beneficiaries'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {

        $training->program_name = request('program_name');
        $training->date = request('date');
        $training->place = request('place');
        $training->conductor_name = request('conductor_name');
        $training->conductor_payment = request('conductor_payment');
        $training->province = request('province');
        $training->district = request('district');
        $training->ds_division = request('ds_division');
        $training->gn_division = request('gn_division');
        $training->as_center = request('as_center');
        $training->save();

        //return redirect('/training');
        $beneficiaryIds = $request->input('beneficiary_ids');
        if ($beneficiaryIds) {
            $training->beneficiaries()->sync($beneficiaryIds);
        }

        return redirect('/training')->with('success', 'Training updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        $training->delete();
        return redirect('/training');
    }
}
