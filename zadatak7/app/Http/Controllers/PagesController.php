<?php

namespace App\Http\Controllers;

use App\Worker;
use App\Job;
use Request;


class PagesController extends Controller
{
    public function showListWorker()
    {
        $workers = Worker::all();
        return view('list_workers')->with('workers',$workers);
    }
    public function showJobs()
    {
        $jobs = Job::withCount('workers')->orderBy('workers_count', 'desc')->get();
        return view("show_jobs")->with('jobs',$jobs);
    }
    public function showMaxSalary()
    {
        $workers = Worker::orderBy('salary','desc')->first();
        return view('show_max_salary')->with('workers', $workers);
    }
    public function showMinSalary()
    {
        $workers =Worker::orderBy('salary','asc')->first();
        return view('show_min_salary')->with('workers', $workers);
    }
    public function showAvgSalary()
    {
        $salary=Worker::avg('salary');
        return view('show_avg_salary')->with('salary', $salary);
    }

}
