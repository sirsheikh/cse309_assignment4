<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class weatherController extends Controller
{
    public function index(){
        $response = json_decode(Http::get('http://api.openweathermap.org/geo/1.0/direct?q=dhaka&limit=5&appid=d8af46ec9d5ada331a915898d8f685f0')->body());
        dd($response);
    }
    public function getIntialData(){
        $finalData=array();
        // $response = json_decode(Http::get('api.openweathermap.org/data/2.5/forecast?lat=23.7644025&lon=90.389015&appid=d8af46ec9d5ada331a915898d8f685f0&units=metric')->body());
        $response = Http::get('api.openweathermap.org/data/2.5/forecast?lat=23.7644025&lon=90.389015&appid=d8af46ec9d5ada331a915898d8f685f0&units=metric')->body();
        // foreach ($response->list as $key => $value) {
        //     $finalData[$value->city->name]=$value;
        // }
        // $finalData=$response;
        // $finalData['primary']=$response->list[0];
        // dd(json_decode($response));
        echo $response;
    }
}
