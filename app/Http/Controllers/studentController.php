<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    protected $student;
    public function __construct()
    {
        $this->student = new Student();
    }

    public function save(Request $request){
        $this->student->create($request->all());
        return redirect()->back();
    }

    public function showdata(){
        $response['students'] = $this->student->all();
        return view('pages.student.index')->with($response);
    }

    public function edit($stu_id){
        $responce['student'] = $this->student->find($stu_id);
        return view('pages.student.edit')->with($responce);
    }
    public function update(Request $request, $stu_id){
        $student = $this->student->find($stu_id);
        $student->update(array_merge($student->toArray(),$request->toArray()));
        return redirect('student');
    }

    public function delete($stu_id){
        $student = $this->student->find($stu_id);
        $student->delete();
        return redirect()->back();
    }
}
