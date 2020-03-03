<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetCompanyController extends Controller
{
    /**
     * Section where you route your page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('getcompany');
    }

    public function postCompanyData(Request $request)
    {
        $customMessages = [
            'pib.required' => 'Polje za unos PIB-a je obavezno!',
            'pib.numeric' => 'PIB mora da bude broj!',
            'pib.digits' => 'PIB mora da ima tačno 9 cifara!',
        ];

        $validator = Validator::make($request->all(), [
            'pib' => "required|numeric|digits:9"
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->messages()]);
        }
        $pib=$request->pib;
        $url = 'http://support.topcode.rs:8085/Kupac' ;
        $ch = curl_init() ;
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array ( "Accept: application/json" , "Content-Type: text/xml;
charset=utf-8") );
        curl_setopt( $ch, CURLOPT_HEADER , FALSE ) ;
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER , TRUE ) ;
        curl_setopt( $ch, CURLOPT_POST , TRUE ) ;
        curl_setopt( $ch, CURLOPT_USERPWD, 'topcode,tcs.24000');
        curl_setopt( $ch, CURLOPT_URL , $url ) ;
        curl_setopt( $ch, CURLOPT_ENCODING, "gzip");
        $data = '{"pib": '.$pib.'}';
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $company = json_decode(curl_exec( $ch ))->partner[0] ;

        return view('partials.company_data')->with('company',$company);
    }

}
