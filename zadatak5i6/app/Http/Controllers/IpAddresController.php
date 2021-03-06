<?php

namespace App\Http\Controllers;

use App\Statistic;
use Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Auth;

class IpAddresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ip = Request::ip();
        $object = $this->getIpInfo($ip);
        return view('welcome')->with('object',$object);
    }

    /**
     * Guzzle Section for your IP
     *
     * @param $ip
     * @return array|mixed
     */
    public function getIpInfo($ip)
    {
        $client = new Client();
        try {
            $response = $client->get('https://www.iplocate.io/api/lookup/' . $ip, ['connect_timeout' => 10]);
        } catch (RequestException $e) {
            if ($e->getResponse()->getStatusCode() == '400') {
                return ["error" => "API returned error for your IP address"];
            }
        }
        $object = json_decode($response->getBody()->getContents(), true);
        $statistic = new Statistic($object);
        if (Statistic::where('ip',$statistic->ip)->first() === null)
        $statistic->save($object);
        return $statistic;
    }

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showDataGrid(){
        include(app_path("Classes/phpgrid/jqgrid_dist.php"));
        $db_conf = array(
            "type"  => "mysqli",
            "server" => env("DB_HOST"),
            "user" => env("DB_USERNAME"),
            "password" => env("DB_PASSWORD"),
            "database" => env("DB_DATABASE")
        );

        $grid = new \jqgrid($db_conf);
        $opt["caption"] = "Grid";
        $grid->set_options($opt);
        $grid->table="statistics";
        $opt = $grid->render("list1");
        return view('home')->with('showDatas',$opt);
    }
}
