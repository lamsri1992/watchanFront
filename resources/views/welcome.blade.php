@extends('layouts.app')
@section('content')
<section class="showcase">
    <div class="container">
        <video src="{{ asset('vdo/Watchan_80year.mp4') }}" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
            <h3 class="mb-3 mt-3 text-left">วิสัยทันศ์/พันธกิจ</h3>
            <p class="mb-4 pr-5">
                <ul class="text-white">
                    <li>ให้การดูแลผู้ป่วยแบบองค์รวม โดยประชาชนในชุมชนเข้ามามีส่วนร่วม</li>
                    <li>พัฒนาเครือข่ายการดูแลผู้ป่วย ระบบการรับ – ส่งต่อผู้ป่วย</li>
                    <li>ส่งเสริม สนับสนุนด้านวิชาการภายในองค์กรและเครือข่าย</li>
                    <li>บริหารจัดการตามหลักธรรมาภิบาล และสนับสนุนการจัดบริการสุขภาพรวมทั้งนำแนวพระราชดำริมาใช้ในการปฏิบัติและพัฒนางาน</li>
                    <li>พัฒนาบุคลากรให้มีสมรรถนะในการทำงานและมีความสุขในการทำงาน</li>
                </ul>
            </p>
        </div>
    </div>
</section>
 <section class="banner" style="margin-top: 3rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-sm letter-spacing">" โรงพยาบาลของพ่อ พอเพียงของหมู่เฮา "</span>
                    <h1 class="mb-3 mt-3 text-center">More Than a Hospital</h1>
                    <h2 class="mb-3 mt-3 text-right">เป็นมากกว่า โรงพยาบาล</h2>
                    <p class="mb-4 pr-5 text-dark">
                        ขับเคลื่อนการดำเนินงานตามแนวปรัชญาของ "เศรษฐกิจพอเพียง" ส่งเสริมการมีจิตอาสา <br>
                        มุ่งพัฒนาสิ่งแวดล้อมสร้างเสริมความสามัคคีโดยภาคีเครือข่ายมีส่วนร่วม <br>
                        เน้นการบริหารที่ยึดหลักธรรมาภิบาล ซื่อสัตย์ โปร่งใส ตรวจสอบได้
                    </p>
                    <p class="mb-4 pr-5 text-dark">
                        มุ่งเน้นให้เจ้าหน้าที่ยึดแนวทางการดำเนินงานตามยุทธศาสตร์ชาติ ระยะ 20 ปี (ด้านสาธารณสุข) <br>
                        โดยสอดคล้องตามบริบทของพื้นที่อำเภอกัลยาณิวัฒนา ร่วมขับเคลื่อนค่านิยม MOPH <br> 
                        บนหลักของความยั่งยืน และหลักการ 5 ข้อ ของโรงพยาบาลเฉลิมพระเกียรติ ๘๐ พรรษา <br> 
                        ช่วยเหลือ ชาวประชาอย่างไร้พรมแดน สร้างการยอมรับ ความเชื่อถือ ทั้งผู้ให้ และผู้รับความสุข
                    </p>
                    <i style="font-size: 14px;">
                        - นายแพทย์ประจินต์ เหล่าเที่ยง - <br>
                        ผู้อำนวยการโรงพยาบาลวัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา
                    </i>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-hospital"></i>
                        </div>
                        <span>ตรวจโรคทั่วไปในเวลาราชการ</span>
                        <h4 class="mb-3">บริการตรวจรักษาโรคทั่วไป</h4>
                        <p class="mb-4">
                            ในเวลาราชการ ตั้งแต่เวลา 08:00น. - 16:00น.
                        </p>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-wall-clock"></i>
                        </div>
                        <span>บริการคลินิกประจำวัน</span>
                        <h4 class="mb-3">บริการด้านปฐมภูมิและองค์รวม</h4>
                        <a href="#" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#ncdservice">
                            <i class="icofont-ui-calendar"></i>
                            ตารางให้บริการคลินิก
                        </a>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <span>เปิดบริการตลอด 24 ชั่วโมง</span>
                        <h4 class="mb-3">ห้องอุบัติเหตุและฉุกเฉิน</h4>
                        <a href="tel:081-980-4841" class="btn btn-danger btn-sm btn-block">
                            <i class="icofont-phone-circle"></i>
                            สายด่วนฉุกเฉิน
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="card-body" style="margin-top: 4rem;">
    <div class="container">
        <div class="feature-block d-lg-flex">
            <div class="col-md-6">
                <h5>
                    <i class="icofont-injection-syringe mr-2"></i>ตารางการให้บริการฉีดวัคซีน Covid-19 <br>
                    <small class="text-muted">ให้บริการตั้งแต่เวลา 08:45น. - 15:30น.</small>
                </h5>
                <div id="calendar"></div>
            </div>
            <div class="col-md-6">
                <h5>
                    <i class="fa fa-chart-line mr-2"></i>รายงานสถานการณ์ Covid-19 <br>
                    <small class="text-muted">อัพเดตเมื่อ <small id="UpdateDate"></small></small>
                </h5>
                <table class="table table-sm table-borderless" style="border-collapse: collapse;border-radius: 1em;overflow: hidden;">
                    <tbody>
                        <tr class="text-center" style="background-color:black;">
                            <td colspan="2" class="text-white">
                                <h3 class="text-white" style="margin-top: 1rem;"><i class="fa fa-calendar-plus mr-2"></i>ติดเชื้อสะสม</h3>
                                <h2 class="text-white"><span id="Confirmed"></span></h2>
                                <h6 class="text-white">เพิ่มขึ้น (<span id="NewConfirmed"></span>)</h6>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td width="50%" style="background-color:green;">
                                <h3 class="text-white" style="margin-top: 1rem;">หายแล้ว</h3>
                                <h2 class="text-white"><span id="Recovered"></span></h2>
                                <h6 class="text-white">เพิ่มขึ้น (<span id="NewRecovered"></span>)</h6>
                            </td>
                            <td width="50%" style="background-color:red;">
                                <h3 class="text-white" style="margin-top: 1rem;">เสียชีวิต</h3>
                                <h2 class="text-white"><span id="Deaths"></span></h2>
                                <h6 class="text-white">เพิ่มขึ้น (<span id="NewDeaths"></span>)</h6>
                            </td>
                        </tr>
                        <tr class="text-center" style="background-color:orange;">
                            <td colspan="2" class="text-white">
                                <h3 class="text-white" style="margin-top: 1rem;"><i class="fa fa-hospital-alt mr-2"></i>รักษาตัวในโรงพยาบาล</h3>
                                <h2 class="text-white"><span id="Hospitalized"></span></h2>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<section class="section service gray-bg">
	<div class="container">
        <div style="margin-bottom: 1rem;">
            <div class="divider mb-3"></div>
            <span class="letter-spacing"><i class="fa fa-bullhorn mr-2" style="font-size: 20px;"></i>ข่าวประชาสัมพันธ์</span>
        </div>
        <div class="col-md-12">
            <div class="media">
                <div class="media-body">
                    <div class="list-group">
                        @foreach ($jobs as $job)
                        <a href="{{ asset('files/news') }}/{{ $job->news_file }}" class="list-group-item list-group-item-action" target="_blank">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">{{ $job->news_title }}</h6>
                                <small class="text-muted">{{ DateThai($job->news_date) }} <i class="far fa-calendar-alt"></i></small>
                            </div>
                            <small class="text-muted"><i class="far fa-edit mr-1"></i>{{ $job->news_create }}</small>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-left">
                <a href="#" class="badge text-white" style="background-color: #710393"><i class="fa fa-plus-circle mr-1"></i>เพิ่มเติม</a>
            </div>
        </div>
	</div>
</section>
<section class="section service gray-bg" style="padding-bottom: 5rem;">
	<div class="container">
        <div style="margin-bottom: 1rem;">
            <div class="divider mb-3"></div>
            <span class="letter-spacing"><i class="fa fa-bullhorn mr-2" style="font-size: 20px;"></i>ข่าวสารกิจกรรมภายในโรงพยาบาลวัดจันทร์ฯ</span>
        </div>
        <div class="col-md-12">
            <div class="media">
                <div class="media-body">
                    <div class="list-group">
                        @foreach ($news as $new)
                <ul class="list-unstyled">
                    <li class="media">
                        <img src="{{ asset('files/news') }}/{{ $new->news_file }}" class="mr-3" alt="{{ $new->news_title }}" width="5%">
                        <div class="media-body">
                            <a href="{{ asset('files/news') }}/{{ $new->news_file }}" target="_blank">
                                <h5 class="mt-0 mb-1">{{ $new->news_title }}</h5>
                            </a>
                            <p>
                                <i class="far fa-calendar mr-1"></i>{{ DateThai($new->news_date) }} <br>
                                <i class="far fa-edit mr-1"></i>{{ $new->news_create }}
                            </p>
                        </div>
                    </li>
                </ul>
                @endforeach
                    </div>
                </div>
            </div>
            <div class="text-left">
                <a href="#" class="badge text-white" style="background-color: #710393"><i class="fa fa-plus-circle mr-1"></i>เพิ่มเติม</a>
            </div>
        </div>
	</div>
</section>
<!-- Modal Service Time -->
<div class="modal fade" id="ncdservice" tabindex="-1" aria-labelledby="ncdserviceLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ncdserviceLabel">
                    <i class="icofont-ui-calendar mr-2"></i>ตารางให้บริการคลินิก ในเวลาราชการ (08:00น. - 16:00น.)
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-borderless table-sm">
                    <thead>
                        <tr>
                            <th width="25%">
                                <span class="badge badge-dark btn-block" style="font-size: 18px;">วันจันทร์</span>
                            </th>
                            <th width="25%">
                                <span class="badge badge-info btn-block" style="font-size: 18px;">วันอังคาร</span>
                            </th>
                            <th width="25%">
                                <span class="badge badge-success btn-block" style="font-size: 18px;">วันพุธ</span>
                            </th>
                            <th width="25%">
                                <span class="badge badge-danger btn-block" style="font-size: 18px;">วันพฤหัสบดี</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody style="font-weight: lighter; font-size: 14px;">
                        <tr>
                            <td>
                                <span style="font-weight: bold">ภาคเช้า</span>
                                <ul>
                                    <li>คลินิกวางแผนครอบครัว</li>
                                    <li>คลินิกโรคไต</li>
                                </ul>
                                <span style="font-weight: bold">ภาคบ่าย</span>
                                <ul>
                                    <li>คลินิกวางแผนครอบครัว</li>
                                    <li>เยี่ยมบ้านหญิงหลังคลอด</li>
                                </ul>
                            </td>
                            <td>
                                <span style="font-weight: bold">ภาคเช้า</span>
                                <ul>
                                    <li>คลินิกฝากครรภ์</li>
                                    <li>โรงเรียนพ่อแม่</li>
                                </ul>
                                <span style="font-weight: bold">ภาคบ่าย</span>
                                <ul>
                                    <li>คลินิกฝากครรภ์</li>
                                </ul>
                            </td>
                            <td>
                                <span style="font-weight: bold">ทั้งวัน</span>
                                <ul>
                                    <li>คลินิกสร้างเสริมภูมิคุ้มกัน (ทุกสัปดาห์ที่ 1 และ 3 ของเดือน)</li>
                                    <li>คลินิกโรคปอดอุดกั้นเรื้อรัง และหอบหืด (ทุกวันพุธที่ 2 ของเดือน)</li>
                                    <li>คลินิกวัคซีนผู้ใหญ่ (ทุกสัปดาห์ที่ 2 ของเดือน)</li>
                                    <li>คลินิกคัดกรองพัฒนาการ (ทุกวันพุธที่ 4 ของเดือน)</li>
                                </ul>
                            </td>
                            <td>
                                <span style="font-weight: bold">ทั้งวัน</span>
                                <ul>
                                    <li>คลินิกเบาหวานความดัน</li>
                                    <li>คลินิกผู้สูงอายุ ทุกสัปดาห์ที่ 4 ของเดือน</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        hiddenDays: [ 0, 6 ],
        dayMaxEventRows: true,
        views: {
            timeGrid: {
                dayMaxEventRows: 6
            }
        },
        displayEventTime: false,
        initialView: 'dayGridMonth',
        eventSources: [
            {
                // url: '/api/calendar_api',
                color: 'purple',
                textColor: 'white'
            }
        ]
    });
    calendar.setOption('locale', 'th');
    calendar.render();
});

$(document).ready(function(){
    $.ajax({
        url:"/api/covid19",
        type: "GET",
        async: false,
        data: {
            
        },
        success: function (data) {
            document.getElementById("Confirmed").innerHTML = data.Confirmed;
            document.getElementById("NewConfirmed").innerHTML = data.NewConfirmed;
            document.getElementById("Recovered").innerHTML = data.Recovered;
            document.getElementById("NewRecovered").innerHTML = data.NewRecovered;
            document.getElementById("Deaths").innerHTML = data.Deaths;
            document.getElementById("NewDeaths").innerHTML = data.NewDeaths;
            document.getElementById("Hospitalized").innerHTML = data.Hospitalized;
            document.getElementById("UpdateDate").innerHTML = data.UpdateDate;
            // console.log(data)
        }
    });
});
</script>
@endsection