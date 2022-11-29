<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class newsController extends Controller
{
    public function index()
    {
        $news = DB::table('tb_news')
                ->join('tb_news_sub','tb_news_sub.ns_id','tb_news.news_type')
                ->join('department','department.dep_id','tb_news.news_create')
                ->get();
         $types = DB::table('tb_news_sub')
                ->get();
        return view('backend.news.index',['news' => $news,'types' => $types]);
    }

    public function add(Request $request)
    {
        if($request->get('news_type') == 1)
        {
            if ($request->hasfile('event_img')) {
                $files = $request->file('event_img');
                foreach($files as $file) {
                    $name = $file->getClientOriginalName();
                    $path = $file->move('files/events/', $name);
                }
                $arr_select = array();
                foreach($request->file('event_img') as $img){
                    $name = $img->getClientOriginalName();
                    $arr_select[] = $name;
                }
                $imgs = implode(",", $arr_select);
            }

            DB::table('tb_news')->insert([
                "news_type" => $request->get('news_type'),
                "news_title" => $request->get('news_title'),
                "news_text" => $request->get('news_text'),
                "news_create" => Auth::user()->department,
                "news_create_id" => Auth::user()->id,
                "news_event" => $imgs,
            ]);
            return back()->with('success','สร้างรายการข่าวประกาศใหม่สำเร็จ : '.$request->get('news_title'));
        }

        if($request->get('news_type') == '2' || $request->get('news_type') == '3')
        {
            $file  = $request->file('news_file');
            $fileName  = $request->file('news_file')->getClientOriginalName();
            // $path = 'files/news';
            $file->move('files/news', $fileName);
    
            DB::table('tb_news')->insert([
                "news_type" => $request->get('news_type'),
                "news_title" => $request->get('news_title'),
                "news_text" => $request->get('news_text'),
                "news_create" => Auth::user()->department,
                "news_create_id" => Auth::user()->id,
                "news_file" => $fileName,
            ]);
            return back()->with('success','สร้างรายการข่าวประกาศใหม่สำเร็จ : '.$request->get('news_title'));
        }
    }

    public function show($id)
    {
        $news = DB::table('tb_news')
                ->join('users','users.id','tb_news.news_create_id')
                ->join('department','department.dep_id','tb_news.news_create')
                ->where('news_id', $id)
                ->first();
        $types = DB::table('tb_news_sub')
                ->get();
        return view('backend.news.show',['news' => $news,'types' => $types]);
    }

    public function visible(Request $request)
    {
        $id = $request->get('id');
        $stat = $request->get('status');
        DB::table('tb_news')->where('news_id', $id)->update(
            [ 'news_visible' => $stat ]
        );
    }

    public function update(Request $request, $id)
    {
        if(!empty($request->file('news_file'))){
            $file  = $request->file('news_file');
            $fileName  = $request->file('news_file')->getClientOriginalName();
            // $path = 'files/news';
            $file->move('files/news', $fileName);
            DB::table('tb_news')->where('news_id',$id)->update([
                "news_type" => $request->get('news_type'),
                "news_title" => $request->get('news_title'),
                "news_text" => $request->get('news_text'),
                "news_file" => $fileName,
            ]);
        }else{
            DB::table('tb_news')->where('news_id',$id)->update([
                "news_type" => $request->get('news_type'),
                "news_title" => $request->get('news_title'),
                "news_text" => $request->get('news_text'),
            ]);
        }
        return back()->with('success','แก้ไขรายการข่าวประกาศสำเร็จ : '.$request->get('news_title'));
    }

    public function f_delete(Request $request)
    {
        DB::table('tb_news')->where('news_id',$request->get('news_id'))->update(
            [
                "news_file" => NULL,
            ]
        );

        $files = $request->get('files_name');
        $delete = ('files/news/'.$files);
        @unlink($delete);
    }

    public function img_delete(Request $request)
    {
        $id = $request->id;
        $img = $request->img;

        $delete = ('files/events/'.$img);
        @unlink($delete);
        $data = DB::table('tb_news')->where('news_id',$request->id)->first();
        $array = (explode(",",$data->news_event));
        if (in_array($img, $array))
        {
            unset($array[array_search($img,$array)]);
        }
        $new = implode(",", $array);
        DB::table('tb_news')->where('news_id',$id)->update([
            "news_event" => $new,
        ]);
    }

    public function img_add(Request $request)
    {
        $news = DB::table('tb_news')->select('news_event')->where('news_id',$request->news_id)->first();
        if ($request->hasfile('event_img')) {
            $files = $request->file('event_img');
            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $file->move('files/events/', $name);
            }
            $arr_select = array();
            foreach($request->file('event_img') as $img){
                $name = $img->getClientOriginalName();
                $arr_select[] = $name;
            }
            $imgs = implode(",", $arr_select);
        }
        $newImg = $news->news_event.",".$imgs;

        DB::table('tb_news')->where('news_id',$request->news_id)->update([
            "news_event" => $newImg,
        ]);
        return back()->with('success','เพิ่มรูปภาพกิจกรรมใหม่สำเร็จ');
    }
}
