<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\_epresence;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
class EpesenceController extends Controller
{
    public $successStatus = 200;
    public function insert_absen(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'Type' => 'required',

            ]);
 
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);            
            }
            if ($request->Type == 'IN' || $request->Type == 'OUT') {
                $time=time();
                $input['Type'] = $request->Type;
                $input['Waktu'] = date('d-m-Y H:i:s',$time);
            }else{
                return response()->json(['error'=>'Input Type Salah'], 401); 
            }
            
            // $user = _epresence::create($input);
            // $success['token'] =  $user->createToken('nApp')->accessToken;
            // $success['name'] =  $user->name;
            // $success['npp'] =  $user->npp;
            // $success['npp_supervisor'] =  $user->npp_supervisor;
            
 
            return response()->json(['success'=>$input]);
        }
}
