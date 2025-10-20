<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use App\Models\Institution;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Show all teachers with pagination
    public function index()
    {
        $teachers = Teacher::with(['user', 'institution'])->paginate(10);
        return view('Dashboard.teachers.index', compact('teachers'));
    }

    // Store new teacher
    public function store(Request $request)
    {
        $request->validate([
            'institution_id' => 'required|exists:institutions,id',
            'user_id' => 'required|exists:users,id',
            'department' => 'nullable|string|max:100',
            'designation' => 'nullable|string|max:100',
            'contact_number' => 'nullable|string|max:20',
            'joining_date' => 'nullable|date',
            'status' => 'required|in:active,inactive',
        ]);

        Teacher::create($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully.');
    }

    // Edit teacher (return JSON for AJAX)
    public function edit(Teacher $teacher, Request $request)
    {
        if ($request->ajax()) {
            return response()->json($teacher);
        }

        $users = User::all();
        $institutions = Institution::all();
        return view('Dashboard.teachers.edit', compact('teacher', 'users', 'institutions'));
    }

    // Update teacher (supports AJAX)
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'institution_id' => 'required|exists:institutions,id',
            'user_id' => 'required|exists:users,id',
            'department' => 'nullable|string|max:100',
            'designation' => 'nullable|string|max:100',
            'contact_number' => 'nullable|string|max:20',
            'joining_date' => 'nullable|date',
            'status' => 'required|in:active,inactive',
        ]);

        $teacher->update($request->all());

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Teacher updated successfully']);
        }

        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
    }

    // Delete teacher
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
    }

    // Optional: your custom methods
    public function passed()
    {
        $teachers = Teacher::with(['user', 'institution'])->where('status', 'passed')->paginate(10);
        return view('Dashboard.teachers.index', compact('teachers'));
    }

    public function dropped()
    {
        $teachers = Teacher::with(['user', 'institution'])->where('status', 'dropped')->paginate(10);
        return view('Dashboard.teachers.index', compact('teachers'));
    }

    public function migration()
    {
        $teachers = Teacher::with(['user', 'institution'])->where('status', 'migration')->paginate(10);
        return view('Dashboard.teachers.index', compact('teachers'));
    }
}