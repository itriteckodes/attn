<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
   public function index(){
       $attendences = Attendence::all();
       return view('admin.attendence.index')->with('attendences',$attendences);
   }
}
