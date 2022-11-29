@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>ตารางให้บริการคลินิก</h2>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 align-items-stretch" style="border: 1px solid black;">
                <div class="icon-box" style="margin-top: 1rem;">
                    <h4><a href="#">วันจันทร์</a></h4>
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
                </div>
            </div>
            <div class="col-lg-6 col-md-6 align-items-stretch" style="border: 1px solid black;">
                <div class="icon-box" style="margin-top: 1rem;">
                    <h4><a href="#">วันอังคาร</a></h4>
                    <span style="font-weight: bold">ภาคเช้า</span>
                    <ul>
                        <li>คลินิกฝากครรภ์</li>
                        <li>โรงเรียนพ่อแม่</li>
                    </ul>
                    <span style="font-weight: bold">ภาคบ่าย</span>
                    <ul>
                        <li>คลินิกฝากครรภ์</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 align-items-stretch" style="border: 1px solid black;">
                <div class="icon-box" style="margin-top: 1rem;">
                    <h4><a href="#">วันพุธ</a></h4>
                    <span style="font-weight: bold">ทั้งวัน</span>
                    <ul>
                        <li>คลินิกสร้างเสริมภูมิคุ้มกัน (ทุกสัปดาห์ที่ 1 และ 3 ของเดือน)</li>
                        <li>คลินิกโรคปอดอุดกั้นเรื้อรัง และหอบหืด (ทุกวันพุธที่ 2 ของเดือน)</li>
                        <li>คลินิกวัคซีนผู้ใหญ่ (ทุกสัปดาห์ที่ 2 ของเดือน)</li>
                        <li>คลินิกคัดกรองพัฒนาการ (ทุกวันพุธที่ 4 ของเดือน)</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 align-items-stretch" style="border: 1px solid black;">
                <div class="icon-box" style="margin-top: 1rem;">
                    <h4><a href="#">วันพฤหัสบดี</a></h4>
                    <span style="font-weight: bold">ทั้งวัน</span>
                    <ul>
                        <li>คลินิกเบาหวานความดัน</li>
                        <li>คลินิกผู้สูงอายุ ทุกสัปดาห์ที่ 4 ของเดือน</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
