@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="#">ระบบหลังบ้าน</a></li>
                <li><a href="{{ url('home') }}">เมนูผู้ดูแลระบบ</a></li>
                <li><a href="{{ url('backend/users') }}">ระบบจัดการผู้ใช้งาน</a></li>
                <li>{{ $user->name }}</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="section-title">
        <h2><i class="far fa-newspaper"></i> {{ $user->name }}</h2>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.update',$user->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">ชื่อผู้ใช้งาน</label>
                        <input type="text" name="uname" class="form-control" placeholder="ระบุชื่อผู้ใช้งาน" value="{{ $user->name }}">
                    </div>
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">Email <small class="text-danger">ใช้สำหรับลงชื่อเข้าใช้งาน</small> </label>
                        <input type="email" name="uemail" class="form-control" placeholder="ระบุ Email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">ฝ่าย/หน่วยงาน</label>
                        <select name="udept" class="form-control">
                            <option>กรุณาเลือก</option>
                            @foreach ($dept as $res)
                            <option value="{{ $res->dep_id }}"
                                {{ ($user->department == $res->dep_id) ? 'SELECTED' : '' }}>
                                • {{ $res->dep_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                     <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">กำหนดสิทธิ์การใช้งาน</label>
                        <select name="uperm" class="form-control">
                            <option>กรุณาเลือก</option>
                            @foreach ($perm as $res)
                            <option value="{{ $res->p_id }}"
                                {{ ($user->permission == $res->p_id) ? 'SELECTED' : '' }}>
                                • {{ $res->p_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div style="margin-top: 1rem;">
                        <button type="button" class="btn btn-sm btn-success"
                                onclick="Swal.fire({
                                    title: 'แก้ไขรายการ ?',
                                    showCancelButton: true,
                                    confirmButtonText: `บันทึก`,
                                    cancelButtonText: `ยกเลิก`,
                                    icon: 'success',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        form.submit();
                                    } else if (result.isDenied) {
                                        form.reset();
                                    }
                                })"><i class="fa fa-save"></i> บันทึกการแก้ไข
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="addImg" tabindex="-1" aria-labelledby="addImgLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('news.img_add') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addImgLabel">เพิ่มรูปกิจกรรม</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">รูปภาพกิจกรรม</label>
                        <input type="file" name="event_img[]" class="form-control-file" multiple>
                        <input type="hidden" name="id" class="form-control" value="{{ $user->id }}">
                        <small class="text-danger">สามารถเลือกได้มากกว่า 1 รูป</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-success"
                        onclick="Swal.fire({
                            title: 'เพิ่มรูปภาพกิจกรรม',
                            showCancelButton: true,
                            confirmButtonText: `เพิ่ม`,
                            cancelButtonText: `ยกเลิก`,
                            icon: 'success',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            } else if (result.isDenied) {
                                form.reset();
                            }
                        })"><i class="fa-solid fa-save"></i> เพิ่มใหม่
                    </button>
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal"><i class="fa-solid fa-times"></i> ปิดหน้าต่าง</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
