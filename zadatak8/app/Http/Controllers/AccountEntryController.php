<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountEntryController extends Controller
{
    /**
     * Section where you route your page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        return view('account');

    }
}
