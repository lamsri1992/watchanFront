<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontController extends Controller
{
    public function index()
    {        
        $news = DB::table('tb_news')
                ->join('department','department.dep_id','tb_news.news_create')
                ->where('news_type', 2)
                ->where('news_visible', 1)
                ->orderBy('news_date', 'desc')
                ->limit(5)
                ->get();
        $event = DB::table('tb_news')
                ->where('news_type', 1)
                ->where('news_visible', 1)
                ->orderBy('news_date', 'desc')
                ->limit(4)
                ->get();
        // dd($event,$news);
        return view('index',['news'=>$news,'event'=>$event]);
    }

    public function ita($year)
    {
        $ita = DB::table('tb_ita')
                ->where('ita_year',$year)
                ->where('ita_status',1)
                ->get();
        return view('pages.ita.index',['ita'=>$ita,'year'=>$year]);
    }

    public function ita_sub($id)
    {
        $exp = explode("_",$id);
        $ita = DB::table('tb_ita')->where('ita_id',$exp[0])->first();
        $sub = DB::table('tb_ita_sub')
            ->where('sub_group',$exp[0])
            ->where('sub_year',$exp[1])->get();
        // dd($ita,$sub,$exp);
        return view('pages.ita.show',['ita'=>$ita,'sub'=>$sub]);
    }

    public function news()
    {
        $jobs = DB::table('tb_news')
                ->join('department','department.dep_id','tb_news.news_create')
                ->where('news_type', 2)
                ->where('news_visible', 1)
                ->orderBy('news_date', 'desc')
                ->get();
        return view('pages.news.index',['jobs'=>$jobs]);
    }

    public function show_news($id)
    {
        $news = DB::table('tb_news')
                ->where('news_id', $id)
                ->first();
        return view('pages.news.show',['news'=>$news]);
    }

    public function events()
    {
        $news = DB::table('tb_news')
                ->where('news_type', 1)
                ->where('news_visible', 1)
                ->orderBy('news_date', 'desc')
                ->get();
        return view('pages.events.index',['news'=>$news]);
    }

    public function event($id)
    {
        $news = DB::table('tb_news')
                ->where('news_id', $id)
                ->first();
        return view('pages.events.show',['news'=>$news]);
    }

    public function ethics()
    {
        $jobs = DB::table('tb_news')
                ->join('department','department.dep_id','tb_news.news_create')
                ->where('news_type', 3)
                ->where('news_visible', 1)
                ->orderBy('news_date', 'desc')
                ->get();
        return view('pages.ethics.index',['jobs'=>$jobs]);
    }

    public function show_ethics($id)
    {
        $news = DB::table('tb_news')
                ->where('news_id', $id)
                ->first();
        return view('pages.ethics.show',['news'=>$news]);
    }
}
