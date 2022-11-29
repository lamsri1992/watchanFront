@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>
                <i class="fab fa-windows"></i>
                เมนูผู้ดูแลระบบ
            </h2>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="container">
        <div class="card-body">
            <div class="col-md-12 text-center">
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom: 1rem;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fa fa-bullhorn"></i>
                                    ข่าวหน้าเว็บไซต์
                                </h5>
                                <p class="card-text">ระบบจัดการข่าวประกาศหน้าเว็บไซต์</p>
                                <a href="{{ url('/backend/news') }}" class="btn btn-sm btn-secondary">
                                    เริ่มใช้งาน
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="margin-bottom: 1rem;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fa fa-list"></i>
                                    งาน ITA
                                </h5>
                                <p class="card-text">ระบบจัดการข้อมูล ITA</p>
                                <a href="{{ url('backend/ita') }}" class="btn btn-sm btn-secondary ">
                                    เริ่มใช้งาน
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="margin-bottom: 1rem;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fa fa-users"></i>
                                    ข้อมูลผู้ใช้งาน
                                </h5>
                                <p class="card-text">จัดการข้อมูลผู้ใช้งาน</p>
                                <a href="{{ url('backend/users') }}" class="btn btn-sm btn-secondary ">
                                    เริ่มใช้งาน
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="margin-bottom: 1rem;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fa fa-cogs"></i>
                                    ข้อมูลโรงพยาบาล
                                </h5>
                                <p class="card-text">ตั้งค่าข้อมูลโรงพยาบาล</p>
                                <a href="{{ url('backend/org') }}" class="btn btn-sm btn-secondary ">
                                    เริ่มใช้งาน
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
