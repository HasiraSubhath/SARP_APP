<?php

namespace App\Http\Controllers;

use App\Models\TankRehabilation;
use Illuminate\Http\Request;

class TankRehabilationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
       // $tankRehabilations = TankRehabilation::all();
        $tankRehabilations = TankRehabilation::paginate(10); // Change 10 to the desired number of records per page
        return view('tank\tank_rehabilation_index', compact('tankRehabilations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tank.tank_rehabilation_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tankRehabilation = new TankRehabilation;
        $tankRehabilation->tank_name = request('tank_name');
        $tankRehabilation->river_basin = request('river_basin');
        $tankRehabilation->cascade_name = request('cascade_name');
        $tankRehabilation->province = request('province');
        $tankRehabilation->district = request('district');
        $tankRehabilation->ds_division = request('ds_division');
        $tankRehabilation->gn_division = request('gn_division');
        $tankRehabilation->as_centre = request('as_centre');
        $tankRehabilation->agency = request('agency');
        $tankRehabilation->no_of_family = request('no_of_family');
        $tankRehabilation->longitude = request('longitude');
        $tankRehabilation->latitude = request('latitude');
        $tankRehabilation->progress = request('progress');
        $tankRehabilation->contractor = request('contractor');
        $tankRehabilation->payment = request('payment');
        $tankRehabilation->eot = request('eot');
        $tankRehabilation->contract_period = request('contract_period');
        $tankRehabilation->status = request('status');
        $tankRehabilation->remarks = request('remarks');
        $tankRehabilation->save();

        return redirect('/tank_rehabilation');
    }

    /**
     * Display the specified resource.
     */
    public function show(TankRehabilation $tankRehabilation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TankRehabilation $tankRehabilation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TankRehabilation $tankRehabilation)
    {
        $tankRehabilation->tank_name = request('tank_name');
        $tankRehabilation->river_basin = request('river_basin');
        $tankRehabilation->cascade_name = request('cascade_name');
        $tankRehabilation->province = request('province');
        $tankRehabilation->district = request('district');
        $tankRehabilation->ds_division = request('ds_division');
        $tankRehabilation->gn_division = request('gn_division');
        $tankRehabilation->as_centre = request('as_centre');
        $tankRehabilation->agency = request('agency');
        $tankRehabilation->no_of_family = request('no_of_family');
        $tankRehabilation->longitude = request('longitude');
        $tankRehabilation->latitude = request('latitude');
        $tankRehabilation->progress = request('progress');
        $tankRehabilation->contractor = request('contractor');
        $tankRehabilation->payment = request('payment');
        $tankRehabilation->eot = request('eot');
        $tankRehabilation->contract_period = request('contract_period');
        $tankRehabilation->status = request('status');
        $tankRehabilation->remarks = request('remarks');
        $tankRehabilation->save();

        return redirect('/tank_rehabilation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TankRehabilation $tankRehabilation)
    {
        //
    }
}
