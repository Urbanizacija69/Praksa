<?php

namespace App\Http\Controllers;
use App\Worker;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AddWorkerController extends Controller
{
    public function getWorker()
    {
        $jobs = Job::all();
        return view('add_worker')->with('jobs',$jobs);
    }

    public function storeWorker(Request $request){

        $validatedData = $request->validate([
            'firstname' => 'required|max:64|alpha',
            'lastname' => 'required|max:64|alpha',
            'email' => 'required|max:64|email:rfc,dns',
            'salary' => 'required|gt:0|numeric',
            'birthday' => 'required|date',
            'id_job' => 'required|exists:jobs,id_job',
            'color' => 'required|size:7'
        ]);

        $worker = new Worker($request->all());
        $worker->save();
        return Redirect::back();
    }
}
