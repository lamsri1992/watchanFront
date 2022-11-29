@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="/">หน้าหลัก</a></li>
                <li>ข่าวสารกิจกรรม</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="section-title">
        <h2>ข่าวสารกิจกรรม</h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach($news as $new)
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card" style="height: 100%;">
                    @php $img = explode(',',$new->news_event); @endphp
                    <img src="{{ asset('files/events') }}/{{ $img[0] }}" class="card-img-top" style="height: 200px;" alt="โรงพยาบาลวัดจันทร์ฯ">
                    <div class="card-body">
                        <div class="col-md-12 row">
                            <small class="text-muted"><i class="far fa-calendar"></i> {{ DateThai($new->news_date) }}</small>
                        </div>
                        <a href="/event/{{ $new->news_id }}" class="card-text">
                            {{ $new->news_title }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
