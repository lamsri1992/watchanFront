<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ita extends Controller
{
    public function index()
    {
        $result = DB::table('tb_ita_sub')->get();
        return response()->json($result);
    }

    public function show($id)
    {
        $res = explode("_",$id);
        $result = DB::table('tb_ita_sub')
                ->where('sub_group',$res[0])
                ->where('sub_year',$res[1])->get();
        return response()->json($result);
    }
}
