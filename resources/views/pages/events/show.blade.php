@php $img = explode(',',$news->news_event); @endphp
@extends('layouts.app')
@section('meta')
<meta property="og:url"           content="https://wc-hospital.go.th/event/{{ $news->news_id }}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $news->news_title }}" />
<meta property="og:description"   content="{{ $news->news_text }}" />
<meta property="og:image"         content="{{ asset('files/events') }}/{{ $img[0] }}" />
@endsection
@section('content')

<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="/event">ข่าวสารกิจกรรม</a></li>
                <li> {{ $news->news_title }}</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">{{ $news->news_title }}</h4><br>
            </div>
            <div class="col-md-6">
                @foreach ($img as $imgs)
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('files/events') }}/{{ $imgs }}" class="galelry-lightbox">
                                <img src="{{ asset('files/events') }}/{{ $imgs }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <p>{{ $news->news_text }}</p>
                <i class="far fa-calendar"></i> {{ DateThai($news->news_date) }} <hr>
                <div class="fb-share-button" data-href="https://wc-hospital.go.th/event/{{ $news->news_id }}"
                    data-layout="button" data-size="small">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                        target="_blank" class="fb-xfbml-parse-ignore">แชร์
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
