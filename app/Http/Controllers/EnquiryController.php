<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{



public function index()
{
    $enquiries = Enquiry::orderBy('created_at', 'desc')->paginate(10);
    return view('Dashboard.addlead', compact('enquiries'));
}


  

public function create()
{
    $enquiries = Enquiry::orderBy('created_at', 'desc')->paginate(10);
    return view('Dashboard.addlead', compact('enquiries'));
}





public function store(Request $request)
{
    // Create new enquiry manually (without using mass assignment)
    $enquiry = new Enquiry;
    $enquiry->student_name   = $request->student_name;
    $enquiry->parent_name    = $request->parent_name;
    $enquiry->contact_number = $request->contact_number;
    $enquiry->email          = $request->email;
    $enquiry->source         = $request->source;
    $enquiry->remarks        = $request->remarks;
    $enquiry->institution_id = 1; // set your institution_id
    $enquiry->status         = 'new'; 
    $enquiry->assigned_to    = null;
    $enquiry->save(); // save to database

    return redirect()->back()->with('success', 'Enquiry added successfully!');
}







}
