<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Data_application;
use App\Models\Status_lookup;
class HomeController extends Controller
{
    public function index()
    {
        $applications=Data_application::with('status')->get();
      /* return response()->json($applications);
       exit;*/
        return view('home.index')->with(['applicant_data'=>$applications]);
    }

    public function detail($tid)
    {
        $application=Data_application::with('status')->find($tid);
        /* return response()->json($applications);
         exit;*/
        return view('home.detail')->with(['data'=>$application]);
    }
    public function update(Request $request,$tid){
        $data_application = [];
       // $data_application->id=$tid;
        $data_application['application_status']=$request->application_status;
        $data_application['comments']=$request->comments;
        //print_r($data_application);die;
        try {
            Data_application::where('id', $tid)->update($data_application);
            return redirect('/')->with('success', 'Data Updated');
        } catch (\Exception $e) {
            array_push($err, $e->getMessage());
        }

    }
}
