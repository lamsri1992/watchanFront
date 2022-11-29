<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ita_data extends Controller
{
    public function show($id)
    {
        $result = DB::table('tb_ita_data')
                ->join('tb_ita_sub','tb_ita_sub.sub_id','tb_ita_data.ita_sub_id')
                ->where('ita_sub_id',$id)->get();
        return response()->json($result);
    }
}
