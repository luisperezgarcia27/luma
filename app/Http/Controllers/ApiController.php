<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class ApiController extends Controller
{
  public function create(Request $request){
   	$students = new Student();
   	$students->name = $request->input('name');
   	$students->lastname = $request->input('lastname');
   	$students->email = $request->input('email');
   	$students->password = $request->input('password');

   	$students->save();
   	return response()->json($students);
  }
}
