<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Timetable $timetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Timetable $timetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Timetable $timetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timetable $timetable)
    {
        //
    }


        // Collect Fees
    public function collectFees()
    {
        return view('Dashboard.fees.collectFees');
    }

    // Fees Defaulters
    public function feesDefaulters()
    {
        return view('Dashboard.fees.feesDefaulters');
    }

    // Collect Fees Lags
    public function collectFeesLags()
    {
        return view('Dashboard.fees.collectFeesLags');
    }

    // Fees Collection Report
    public function feesCollectionReport()
    {
        return view('Dashboard.fees.feesCollectionReport');
    }

    // Fees Structure Setup
    public function feesStructureSetup()
    {
        return view('Dashboard.fees.feesStructureSetup');
    }

    // Fees Structure Report
    public function feesStructureReport()
    {
        return view('Dashboard.fees.feesStructureReport');
    }

    // Fees Collection Monthly
    public function feesCollectionMonthly()
    {
        return view('Dashboard.fees.feesCollectionMonthly');
    }

    // Online Fees Structure
    public function onlineFeesStructure()
    {
        return view('Dashboard.fees.onlineFeesStructure');
    }
}
