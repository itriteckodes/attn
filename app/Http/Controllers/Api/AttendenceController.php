<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Attendence;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AttendenceController extends Controller
{
   public function mark_attendence(Request $request){
       $student = Student::where('roll_no',$request->roll_no)->first();
    Attendence::create([
        'student_id' => $student->id,
        'time' => Carbon::now()
    ]);
    $data = [];
    Mail::send('attendence', $data, function ($message) use ($student) {
        $message->from('uos@support.com', 'Attendence');
        $message->to($student->email, $student->name)
            ->subject('Attendence System');
    });
    return Api::setMessage('attendence marked');
   }
}
