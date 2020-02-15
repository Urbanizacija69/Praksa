<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class TopCodeController extends Controller
{

    public function showPage(){
        $numbers=$this->writeOutput();
        return view('welcome')->with('number',$numbers);
    }

    public function writeOutput(){
        $numbers=collect();
        for ($i=1;$i<=100;$i++){
            if($i % 5 == 0  && $i % 3 == 0){
                $numbers->push("VTSTOPCODE");
            }
            else if ($i % 3 == 0){
                $numbers->push("VTS");
            }
            else if($i % 5 == 0){
                $numbers->push("TOPCODE");
            }
            else if ($i % 2 == 0){
                $numbers->push($i);
            }
        }
        return $numbers;
    }
}
