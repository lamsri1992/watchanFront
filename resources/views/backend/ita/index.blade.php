@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="#">ระบบหลังบ้าน</a></li>
                <li><a href="{{ url('home') }}">เมนูผู้ดูแลระบบ</a></li>
                <li>ระบบจัดการข้อมูล ITA</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="section-title">
        <h2>
            <i class="fa fa-list"></i>
            ระบบจัดการข้อมูล ITA
        </h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($ita as $res)
            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ asset('img/ita.jpg') }}" class="card-img-top" alt="MOIT รพ.วัดจันทร์ฯ">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-weight: bold;">
                            <a href="{{ route('ita.year',$res->y_year) }}">
                                {{ "ปีงบประมาน ".$res->y_year }}
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@section('script')

@endsection