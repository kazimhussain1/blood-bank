<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use Illuminate\Http\Request;
use Validator;

class BloodRequestController extends Controller
{
    public $successStatus = 200;
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'blood_type' => ['required','regex:/(A|B|AB|O) (\+ve|\-ve)/'],
            'num_of_bottles' => 'required|numeric',
            'location' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $bloodRequest = $request->all();

        $bloodRequest = BloodRequest::create($bloodRequest);

        return response()->json(['success',$bloodRequest],201);
    }


}
