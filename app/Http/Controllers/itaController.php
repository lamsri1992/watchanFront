<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class itaController extends Controller
{
    public function index()
    {
        $ita = DB::table('tb_ita')->get();
        return view('backend.ita.index',['ita'=>$ita]);
    }

    public function show($id)
    {
        $ita = DB::table('tb_ita')->where('ita_id',$id)->first();
        return view('backend.ita.show',['ita'=>$ita]);
    }

    public function status(Request $request)
    {
        $id = $request->get('id');
        $stat = $request->get('status');
        DB::table('tb_ita')->where('ita_id', $id)->update(
            [ 'ita_status' => $stat ]
        );
    }

    public function sub_add(Request $request)
    {
        DB::table('tb_ita_sub')->insert(
            [
                "sub_group" => $request->get('sub_group'),
                "sub_year" => $request->get('sub_year'),
                "sub_title" => $request->get('sub_title'),
            ]
        );
        return back()->with('success','เพิ่มหัวข้อย่อยสำเร็จ : '.$request->get('sub_title'));
    }

    public function sub_show($id)
    {
        $sub = DB::table('tb_ita_sub')
                ->join('tb_ita','tb_ita.ita_id','tb_ita_sub.sub_group')
                ->where('sub_id',$id)
                ->first();
        $data = DB::table('tb_ita_data')
                ->join('tb_ita_sub','tb_ita_sub.sub_id','tb_ita_data.ita_sub_id')
                ->where('tb_ita_data.ita_sub_id',$id)
                ->get();
        return view('backend.ita.sub_show',['sub'=>$sub,'data'=>$data]);
    }

    public function sub_edit($id)
    {
        $ita = DB::table('tb_ita')->get();
        $sub = DB::table('tb_ita_sub')
                ->join('tb_ita','tb_ita.ita_id','tb_ita_sub.sub_group')
                ->where('sub_id',$id)
                ->first();
        $data = DB::table('tb_ita_data')
                ->join('tb_ita_sub','tb_ita_sub.sub_id','tb_ita_data.ita_sub_id')
                ->where('tb_ita_data.ita_sub_id',$id)
                ->get();
        return view('backend.ita.sub_edit',['ita'=>$ita,'sub'=>$sub,'data'=>$data]);
    }

    public function sub_update(Request $request,$id)
    {
        DB::table('tb_ita_sub')->where('sub_id',$id)->update(
            [
                "sub_group" => $request->get('sub_group'),
                "sub_year" => $request->get('sub_year'),
                "sub_title" => $request->get('sub_title'),
            ]
        );
        return back()->with('success','แก้ไขหัวข้อย่อยสำเร็จ : '.$request->get('sub_title'));
    }

    public function sub_delete($id)
    {
        DB::table('tb_ita_sub')->where('sub_id',$id)->delete();
        DB::table('tb_ita_data')->where('ita_sub_id',$id)->delete();
    }

    public function data_add(Request $request)
    {
        $file  = $request->file('data_file');
        $fileName  = $request->file('data_file')->getClientOriginalName();
        $file->move('files/ita/'.$request->get('dr_year').'/moit'.$request->get('ita_id'), $fileName);

        DB::table('tb_ita_data')->insert(
            [
                "ita_sub_id" => $request->get('ita_sub_id'),
                "data_title" => $request->get('data_title'),
                "data_file" => $fileName,
            ]
        );
        return back()->with('success','เพิ่มรายการสำเร็จ : '.$request->get('data_title'));
    }

    public function data_edit($id)
    {
        $ita = DB::table('tb_ita')->get();
        $data = DB::table('tb_ita_data')
                ->join('tb_ita_sub','tb_ita_sub.sub_id','tb_ita_data.ita_sub_id')
                ->where('tb_ita_data.data_id',$id)
                ->first();
        $sub = DB::table('tb_ita_sub')->where('sub_group',$data->sub_group)->get();
        return view('backend.ita.data_edit',['ita'=>$ita,'sub'=>$sub,'data'=>$data]);
    }

    public function data_f_delete(Request $request)
    {
        $data = DB::table('tb_ita_data')
                ->join('tb_ita_sub','tb_ita_sub.sub_id','tb_ita_data.ita_sub_id')
                ->where('tb_ita_data.data_id',$request->get('data_id'))
                ->first();
                DB::table('tb_ita_data')->where('data_id',$request->get('data_id'))->update([ "data_file" => NULL ]);

        $files = $request->get('files_name');
        $delete = ('files/ita/'.$data->sub_year.'/moit'.$data->sub_group.'/'.$files);
        @unlink($delete);
    }

    public function data_update(Request $request, $id)
    {
        $result = DB::table('tb_ita_data')->join('tb_ita_sub','tb_ita_sub.sub_id','tb_ita_data.ita_sub_id')
                ->where('data_id',$id)
                ->first();
        if(!empty($request->file('data_file'))){
            $file  = $request->file('data_file');
            $fileName  = $request->file('data_file')->getClientOriginalName();
            $file->move('files/ita/'.$result->sub_year.'/moit'.$result->sub_group, $fileName);
            DB::table('tb_ita_data')->where('data_id',$id)->update([
                "ita_sub_id" => $request->get('ita_sub_id'),
                "data_title" => $request->get('data_title'),
                "data_file" => $fileName,
            ]);
        }else{
            DB::table('tb_ita_data')->where('data_id',$id)->update([
                "ita_sub_id" => $request->get('ita_sub_id'),
                "data_title" => $request->get('data_title'),
            ]);
        }
        return back()->with('success','แก้ไขรายการข้อมูลสำเร็จ : '.$request->get('data_title'));
    }
}
