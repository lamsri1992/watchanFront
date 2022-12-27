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
<section class="showcase" style="margin-top: 7.5rem;">
    <div class="container">
        <video src="{{ asset('vdo/Watchan_80year.mp4') }}" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
            <div class="container">
                <h2>MORE THAN A HOSPITAL</h2>
                <h3>โรงพยาบาลวัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา</h3>
                <h3>เป็นมากกว่าโรงพยาบาล</h3>
            </div>
        </div>
    </div>
</section>
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" style="background: #f0f0f0;">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <img src="{{ asset('img/wc_logo_2.png') }}" class="img img-fluid" width="40%">
                            <h4>โรงพยาบาลแห่งการมีส่วนร่วมและเยียวยาสุขภาพ</h4>
                            <p class="mb-4 pr-5">
                                สร้างการมีส่วนร่วมของบุคลากรและเครือข่ายชุมชน ตามแนวทางพระราชดำริ ปรัญชาเครษฐกิจพอเพียง <br>
                                และตอบสนองนโยบายสุขภาพของกระทรวงสาธารณสุข เพื่อพัฒนาระบบบริการสุขภาพในชุมชนให้มีคุณภาพ <br>
                                ตามบริบทพื้นที่อำเภอกัลยาณิวัฒนา
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <img src="{{ asset('img/dr.jpg') }}" class="img img-fluid img-thumbnail rounded mx-auto d-block" width="75%">
                            <span style="font-weight: bold;">นายแพทย์ดิเรก อกิญจนานนท์</span> <br>
                            <small>ผู้อำนวยการโรงพยาบาลวัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>
                    <i class="fa fa-stethoscope"></i>
                    การให้บริการตรวจรักษา
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="icon-box" style="height: 100%;">
                        <div class="icon"><i class="fas fa-user-md text-white"></i></div>
                        <h4><a href="">บริการตรวจรักษาโรคทั่วไป</a></h4>
                        <p>บริการตรวจรักษาโรคทั่วไปในเวลาราชการ <br> ตั้งแต่เวลา 08:00น. - 16:00น.</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="icon-box" style="height: 100%;">
                        <div class="icon"><i class="fas fa-pills text-white"></i></div>
                        <h4><a href="">บริการด้านปฐมภูมิและองค์รวม</a></h4>
                        <p>
                            บริการคลินิกประจำวัน <br>
                            สามารถตรวจสอบวันให้บริการได้ตามตารางให้บริการคลินิก
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="icon-box" style="height: 100%;">
                        <div class="icon"><i class="fas fa-ambulance text-white"></i></div>
                        <h4><a href="">ห้องอุบัติเหตุและฉุกเฉิน</a></h4>
                        <p>เปิดบริการตลอด 24 ชั่วโมง <br> สายด่วนฉุกเฉิน 081-980-4841</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="icon-box" style="height: 100%;">
                        <div class="icon"><i class="fas fa-tooth text-white"></i></div>
                        <h4><a href="">บริการคลินิกทันตกรรม</a></h4>
                        <p>บริการคลินิกทันตกรรมในเวลาราชการ <br> ตั้งแต่เวลา 08:00น. - 16:00น.</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="icon-box" style="height: 100%;">
                        <div class="icon"><i class="fas fa-spa text-white"></i></div>
                        <h4><a href="">บริการแพทย์แผนไทย และกายภาพบำบัด</a></h4>
                        <p>บริการแพทย์แผนไทย และกายภาพบำบัดในเวลาราชการ <br> ตั้งแต่เวลา 08:00น. - 16:00น.</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="icon-box" style="height: 100%;">
                        <div class="icon"><i class="fas fa-syringe text-white"></i></div>
                        <h4><a href="">หน่วยบริการฉีดวัคซีนโควิด19</a></h4>
                        <p>หน่วยบริการฉีดวัคซีนโควิด19 <br> สามารถตรวจสอบวันให้บริการได้ตามตารางการฉีดวัคซีนโควิด19</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="appointment">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @for ($i = 1; $i < 10; $i++)
                    <div class="carousel-item {{ ($i == 1) ? 'active' : '' }}">
                        <img src="{{ asset('img/slide/'.$i.'.jpg') }}" class="d-block w-100">
                    </div>
                    @endfor
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section id="news" class="appointment">
        <div class="container">
            <div class="section-title">
                <h2>
                    <i class="fa fa-newspaper"></i>
                    ข่าวประชาสัมพันธ์
                </h2>
            </div>
            <div class="col-md-12">
                <div class="media">
                    <div class="media-body">
                        <div class="list-group">
                            @foreach($news as $res)
                                <a href="/news/{{ $res->news_id }}"
                                    class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">
                                            {{ $res->news_title }}
                                            @php
                                                $month = date('m');
                                                $n_month = date("m",strtotime($res->news_date));
                                            @endphp
                                            @if ($month == $n_month)
                                            <span class="badge bg-danger blink_me">
                                                ประกาศใหม่
                                            </span>
                                            @endif
                                        </h6>
                                        <small class="text-muted">
                                            {{ DateThai($res->news_date) }}
                                            <i class="far fa-calendar-alt"></i>
                                        </small>
                                    </div>
                                    <small class="text-muted"><i class="far fa-edit"></i> {{ $res->dep_name }}</small>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-end">
                    <a href="/news" class="badge btn-info" style="background-color: #710393">
                        <i class="fa fa-plus-circle"></i> เพิ่มเติม
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="event" class="appointment">
        <div class="container">
            <div class="section-title">
                <h2>
                    <i class="fa fa-calendar-day"></i>
                    ข่าวสารกิจกรรม
                </h2>
            </div>
            <div class="col-md-12">
                <div class="row">
                    @foreach($event as $events)
                    <div class="col-md-3">
                        <div class="card" style="height: 100%;">
                            @php $img = explode(',',$events->news_event); @endphp
                            <img src="{{ asset('files/events') }}/{{ $img[0] }}" class="card-img-top" style="height: 200px;" alt="โรงพยาบาลวัดจันทร์ฯ">
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <small class="text-muted"><i class="far fa-calendar"></i> {{ DateThai($events->news_date) }}</small>
                                </div>
                                <a href="/event/{{ $events->news_id }}" class="card-text">
                                    {{ $events->news_title }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-12 text-end">
                    <a href="/event" class="badge btn-info" style="background-color: #710393">
                        <i class="fa fa-plus-circle"></i> เพิ่มเติม
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-title">
                <h2>
                    <i class="fas fa-clinic-medical"></i>
                    รอบรั้วโรงพยาบาล
                </h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('img/activity/IMG_1751.jpg') }}" class="galelry-lightbox">
                            <img src="{{ asset('img/activity/IMG_1751.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('img/activity/IMG_1968.jpg') }}" class="galelry-lightbox">
                            <img src="{{ asset('img/activity/IMG_1968.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('img/activity/IMG_1992.jpg') }}" class="galelry-lightbox">
                            <img src="{{ asset('img/activity/IMG_1992.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('img/activity/IMG_2094.jpg') }}" class="galelry-lightbox">
                            <img src="{{ asset('img/activity/IMG_2094.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('img/activity/IMG_2963.jpg') }}" class="galelry-lightbox">
                            <img src="{{ asset('img/activity/IMG_2963.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('img/activity/IMG_3002.jpg') }}" class="galelry-lightbox">
                            <img src="{{ asset('img/activity/IMG_3002.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Modal -->
<div class="modal fade" id="show" tabindex="-1" aria-labelledby="showLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{ asset('img/activity/2aug.jpg') }}" class="img img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    // $(window).on('load', function() {
    //     $('#show').modal('show');
    // });
</script>
@endsection
