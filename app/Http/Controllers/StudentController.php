<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        $student = Student::simplepaginate(3);
        return view('Students',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AddStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $student = new student;
        // $student->name=$request->name;
        // $student->email=$request->email;
        // $student->address=$request->address;
        // $student->phone=$request->phone;
        // $student->grades=$request->grades;
        // $student->gender=$request->gender;
        // $student->save();
        $request->validate([
            'name'=>'required |alpha',
            'email'=>'required |email',
            'address'=>'required',
            'phone'=>'required |numeric',
            'grades'=>'required',
            'gender'=>'required',
        ]);
        student::create([
'name'=>$request->name,
'email'=>$request->email,
'address'=>$request->address,
'phone'=>$request->phone,
'grades'=>$request->grades,
'gender'=>$request->gender

        ]);
        return redirect()->route('student.index')
        ->with('stauts','Student Added Successfuly');

    
    
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('SingleStudent',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('UpdateStudent',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required |string',
            'email'=>'required |email',
            'address'=>'required',
            'phone'=>'required |numeric',
            'grades'=>'required',
            'gender'=>'required',
        ]);
        $student = student::where('id',$id);
        $student->update([
            'name'=>$request->name,
'email'=>$request->email,
'address'=>$request->address,
'phone'=>$request->phone,
'grades'=>$request->grades,
'gender'=>$request->gender

        ]);
        return redirect()->route('student.index')
        ->with('stauts','Student Added Successfuly');
    

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student =Student::destroy($id);
        
    
    if($student){
        return redirect()->route('student.index');
    }else
    echo "not deleted";
}
}