<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students with pagination
    public function index()
    {
        $students = Student::orderBy('created_at', 'desc')->paginate(10);
         return view('Dashboard.students.index', compact('students'));
    }

    // Show create student form
    public function create()
    {
        return view('Dashboard.students.create');
    }

    // Store new student
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'nullable|email|unique:students,email',
            'phone'  => 'nullable|string|max:20',
            'course' => 'nullable|string|max:100',
        ]);

        $student = new Student;
        $student->name   = $request->name;
        // $student->email  = $request->email;
        $student->phone  = $request->phone;
        $student->course = $request->course;
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    // Show edit student form
    public function edit(Student $student)
    {
        return view('Dashboard.students.edit', compact('student'));
    }

    // Update student
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            // 'email'  => 'nullable|email|unique:students,email,' . $student->id,
            'phone'  => 'nullable|string|max:20',
            'course' => 'nullable|string|max:100',
            'institution_id' => 'required|integer', 
        ]);

        $student->name   = $request->name;
         $student->institution_id = 1;
        $student->phone  = $request->phone;
        $student->course = $request->course;
        $student->save();

        return redirect()->route('Dashboard.students.index')->with('success', 'Student updated successfully!');
    }

    // Delete student
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('Dashboard.students.index')->with('success', 'Student deleted successfully!');
    }
}
