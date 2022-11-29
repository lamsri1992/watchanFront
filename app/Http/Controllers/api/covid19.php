<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class covid19 extends Controller
{
    public function index()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,'https://static.easysunday.com/covid-19/getTodayCases.json');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if(curl_errno($ch)){ echo 'Error:' . curl_error($ch); }
        curl_close($ch);
        $result = (array)json_decode($result);
        if($result['NewHospitalized']<0){ $result['NewHospitalized']==0; }

        return response()->json($result);
    }
}
