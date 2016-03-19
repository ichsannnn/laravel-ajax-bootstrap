<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests;
use Response;

class StudentController extends Controller
{
    public function index()
    {
      $student = Student::orderBy('nama', 'asc')->get();
    	return view('student.index')->with('student', $student);
    }

    public function show($id)
    {
    	$student = Student::where('id', $id)->first();
      return Response::json($student);
    }

    public function store(Request $r)
    {
    	$student = new Student;
      $student->nis = $r->nis;
      $student->nama = $r->nama;
      $student->kelas = $r->kelas;
      $student->save();
    }

    public function update(Request $r)
    {
      $id = $r->id;

    	$student = Student::find($id);
      $student->nis = $r->nis;
      $student->nama = $r->nama;
      $student->kelas = $r->kelas;
      $student->save();

      return "Sukses";
    }

    public function destroy($id)
    {
      // $id = $r->input('id');
    	Student::find($id)->delete();
      return "Sukses";
    }
}
