<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classe')->paginate(10); 
        return view('students.index', compact('students')); 
    }

    public function create()
    {
        $classes = Classe::all();
        return view('students.create', compact('classes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'last_name' => 'required|string|max:50',
            'first_name' => 'required|string|max:50',
            'date_of_birth' => 'required|date',
            'parent_phone' => 'required|string|max:20',
            'class_id' => 'required|exists:classes,id',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Sinh viên đã được thêm thành công!');
    }

}
