<?php

namespace App\Http\Controllers;
use App\Activity;
use Validator;
use Illuminate\Http\Request;
use Auth;

class ActivityController extends Controller
{
    
    public function activity_index()
    {
        $activities=Activity::orderBy('created_at','asc')->get();
        return view('activityRegist', [
            'activities'=>$activities
        ]);
    }
    
    
    public function activity_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'activity_name_kana'     =>'required',    
            'activity_name'          =>'required',
            'activity_state'         =>'required',
            'activity_city'          =>'required',
            'activity_addres1'       =>'required',
            'activity_addres2'       =>'required',
            'activity_date'          =>'required',
            'activity_fee'           =>'required',
            'activity_start_time'    =>'required',
            'activity_end_time'      =>'required',
            'target_min_age'         =>'required',
            'target_max_age'         =>'required',
            'target_recommend_age'   =>'required',
            'parent_attendant'       =>'required',
            'target_min_age'         =>'required'
         ]);
         
        //バリデーション：エラー
        if ($validator->fails()) {
            return redirect('/activity')
                ->withInput()
                ->withErrors($validator);
        }

        $activities =new Activity;
        $activities->school_id="1";
        $activities->activity_id=rand(1, 15);
        $activities->activity_name_kana=$request->activity_name_kana;
        $activities->activity_name=$request->activity_name;
        $activities->activity_state=$request->activity_state;
        $activities->activity_city=$request->activity_city;
        $activities->activity_addres1=$request->activity_addres1;
        $activities->activity_addres2=$request->activity_addres2;
        $activities->activity_date=$request->activity_date;
        $activities->activity_fee=$request->activity_fee;
        $activities->activity_start_time=$request->activity_start_time;
        $activities->activity_end_time=$request->activity_end_time;
        $activities->target_min_age=$request->target_min_age;
        $activities->target_max_age=$request->target_max_age;
        $activities->target_recommend_age=$request->target_recommend_age;
        $activities->parent_attendant=$request->parent_attendant;
        $activities->capacity_members=$request->capacity_members;
        $activities->activity_detail=$request->activity_detail;
        $activities->save();
        
     }
}