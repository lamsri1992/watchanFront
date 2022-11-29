@extends('layouts.app')
@section('content')
<style>
    .blink_me {
        animation: blinker 1s linear infinite;
    }
    
    @keyframes blinker {
        50% {
            opacity: 0;
        }
}
</style>
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="/">หน้าหลัก</a></li>
                <li>ชมรมจริยธรรม</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="section-title">
        <h2>ชมรมจริยธรรม</h2>
    </div>
    <div class="container">
        <div class="media">
            <div class="media-body">
                <div class="list-group">
                    @foreach ($jobs as $job)
                    <a href="/ethics/{{ $job->news_id }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">
                                {{ $job->news_title }}
                            </h6>
                            <small class="text-muted">{{ DateThai($job->news_date) }} <i class="far fa-calendar-alt"></i></small>
                        </div>
                        <small class="text-muted"><i class="far fa-edit mr-1"></i>{{ $job->dep_name }}</small>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
