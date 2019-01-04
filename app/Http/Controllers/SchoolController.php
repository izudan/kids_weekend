<?php

namespace App\Http\Controllers;

use App\School;
use Validator;
use Illuminate\Http\Request;
use Auth;

class SchoolController extends Controller
{

    public function school_index()
    {
        $schools=School::orderBy('created_at','asc')->get();
        return view('schoolRegist', [
            'schools'=>$schools
        ]);
    }
    
    public function school_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'school_name'     => 'required',
            'school_name_kana'=>'required',
            'school_name'     =>'required',
            'school_email'    =>'required',
            // 'school_hp'       =>'required',
            'school_tel'      =>'required',
            'school_state'    =>'required',
            'school_city'     =>'required',
            'school_addres1'  =>'required',
            'school_addres2'  =>'required',
            'school_detail'   =>'required'
         ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        $schools=new School;
        $schools->school_name_kana=$request->school_name_kana;
        $schools->school_name=$request->school_name;
        $schools->school_email=$request->school_email;
        $schools->school_hp=$request->school_hp;
        $schools->school_tel=$request->school_tel;
        $schools->school_state=$request->school_state;
        $schools->school_city=$request->school_city;
        $schools->school_addres1=$request->school_addres1;
        $schools->school_addres2=$request->school_addres2;
        $schools->school_detail=$request->school_detail;
        $schools->save();
    }

}