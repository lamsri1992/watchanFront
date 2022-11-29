<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    public function index()
    {
        $user = DB::table('users')
                ->join('department','department.dep_id','users.department')
                ->join('permission','permission.p_id','users.permission')
                ->get();
        $dept = DB::table('department')->get(); 
        $perm = DB::table('permission')->get();

        return view('backend.users.index',['user'=>$user,'dept'=>$dept,'perm'=>$perm]);
    }

    public function add(Request $request)
    {
        DB::table('users')->insert(
            [
                "name" => $request->get('uname'),
                "email" => $request->get('uemail'),
                "department" => $request->get('udept'),
                "permission" => $request->get('uperm'),
                "password" => Hash::make('watchan@23736'),
            ]
        );
        return back()->with('success','เพิ่มผู้ใช้งานสำเร็จ : '.$request->get('uname'));
    }

    public function show($id)
    {
        $user = DB::table('users')
                ->join('department','department.dep_id','users.department')
                ->join('permission','permission.p_id','users.permission')
                ->where('id',$id)
                ->first();
        $dept = DB::table('department')->get(); 
        $perm = DB::table('permission')->get();

        return view('backend.users.show',['user'=>$user,'dept'=>$dept,'perm'=>$perm]);
    }

    public function update(Request $request,$id)
    {
        DB::table('users')->where('id',$id)->update(
            [
                "name" => $request->uname,
                "email" => $request->uemail,
                "department" => $request->udept,
                "permission" => $request->uperm,
            ]
        );
        return back()->with('success','แก้ไขผู้ใช้งานสำเร็จ : '.$request->uname);
    }
}
