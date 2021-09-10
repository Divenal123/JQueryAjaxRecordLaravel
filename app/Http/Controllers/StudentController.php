<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function ajaxRequest()
    {
        return view('ajaxExample');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequestStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password'=>'required',
            'email'=>'required',
            'address'=>'required',
        ]);

        if($validator->passes())
        {
            return response()->json(['success'=>'Add new records']);
        }
        return response()->json(['error'=>$validator->errors()]);
    }
}
