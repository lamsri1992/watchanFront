@extends('layouts.app')
@section('meta')
<meta property="og:url"           content="https://wc-hospital.go.th/news/{{ $news->news_id }}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $news->news_title }}" />
<meta property="og:description"   content="{{ $news->news_text }}" />
<meta property="og:image"         content="https://wc-hospital.go.th/img/hospital_logo.png" />
@endsection
@section('content')

<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="/news">ข่าวประชาสัมพันธ์</a></li>
                <li> {{ $news->news_title }}</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="container">
        <div class="col-md-12" style="margin-bottom:1rem;">
            <h4 class="text-center">{{ $news->news_title }}</h4>
            <div class="text-center">
                <span>{{ $news->news_title }}</span><br>
                <i class="far fa-calendar"></i> {{ DateThai($news->news_date) }}
            </div>
        </div>
        <div class="col-md-12">
            <object data="{{ asset('files/news') }}/{{ $news->news_file }}" width="100%" height="1000"></object>
        </div>
        @if (isset($news->news_file))
        <div class="col-md-12 text-center">
            <small class="text-danger" style="font-weight:bold;">หากเปิดใน Browser บน IOS (Safari) ไฟล์อาจจะไม่แสดง ให้ดาวน์โหลดไฟล์เพื่อดูรายละเอียด</small><br>
            <a class="btn btn-sm text-white" href="{{ asset('files/news') }}/{{ $news->news_file }}" 
                target="_blank" style="background-color: #710393">
               <i class="fa fa-download"></i> ดาวน์โหลดไฟล์
            </a>
        </div>
        <div class="col-md-12 text-center">
            <div class="fb-share-button" data-href="https://wc-hospital.go.th/news/{{ $news->news_id }}"
                data-layout="button_count" data-size="small">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                    target="_blank" class="fb-xfbml-parse-ignore">แชร์
                </a>
            </div>
        </div>
        @else
        <div class="text-center">
            <h5 class="text-danger">
                ไม่มีไฟล์
            </h5>
        </div>
        @endif
    </div>
</section>
@endsection
