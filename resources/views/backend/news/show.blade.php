@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="#">ระบบหลังบ้าน</a></li>
                <li><a href="{{ url('home') }}">เมนูผู้ดูแลระบบ</a></li>
                <li><a href="{{ url('backend/news') }}">ระบบจัดการข่าวประชาสัมพันธ์</a></li>
                <li>{{ $news->news_title }}</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="section-title">
        <h2><i class="far fa-newspaper"></i> {{ $news->news_title }}</h2>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('news.update',$news->news_id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="form-row" style="margin-bottom: 1rem;">
                        <div class="form-group col-md-12">
                            <label style="font-weight:bold;">หัวข้อ</label>
                            <input type="text" name="news_title" class="form-control" value="{{ $news->news_title }}">
                        </div>
                    </div>
                    <div class="form-row" style="margin-bottom: 1rem;">
                        <div class="form-group col-md-12">
                            <label style="font-weight:bold;">เนื้อหา</label>
                            <textarea name="news_text" rows="5" class="form-control">{{ $news->news_text }}</textarea>
                        </div>
                    </div>
                    <div class="form-row" style="margin-bottom: 1rem;">
                        <div class="form-group col-md-12">
                            <label style="font-weight:bold;">ไฟล์แนบ</label>
                            @if (!isset($news->news_file) && $news->news_type == 2 || $news->news_type == 3)
                            <input type="file" name="news_file" class="form-control-file">
                            @endif
                            @if ($news->news_type == 2 || $news->news_type == 3)
                            <br>
                            <a href="{{ asset('files/news') }}/{{ $news->news_file }}" target="_blank">
                                <i class="far fa-file-pdf text-danger"></i>
                                {{ $news->news_file }}
                            </a>
                            <a href="#" class="badge bg-danger" data-id='{{ $news->news_id }}' data-name='{{ $news->news_file }}'
                                onclick="Swal.fire({
                                    title: 'ลบไฟล์แนบ ?',
                                    text: '{{ $news->news_file }}',
                                    showCancelButton: true,
                                    confirmButtonText: `ลบไฟล์`,
                                    cancelButtonText: `ยกเลิก`,
                                    icon: 'warning',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        var token = '{{ csrf_token() }}';
                                        $.ajax({
                                            url: '{{ route('news.f_delete') }}',
                                            method: 'POST',
                                            data: {
                                                files_name: $(this).attr('data-name'),
                                                news_id: $(this).attr('data-id'),
                                                _token: token
                                            },
                                            success: function (data) {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'ลบไฟล์',
                                                    showConfirmButton: false,
                                                    timer: 3000
                                                })
                                                window.setTimeout(function () {
                                                    location.reload()
                                                }, 1500);
                                            }
                                        });
                                    } else if (result.isDenied) {
                                        form.reset();
                                    }
                                })">
                                <i class="fa fa-times"></i>
                            </a>
                            @endif
                            @if ($news->news_type == 1)
                            @php $img = explode(',',$news->news_event); @endphp
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="#" class="badge bg-success" data-toggle="modal" data-target="#addImg">
                                            <i class="fa fa-plus-circle"></i>
                                            เพิ่มรูปภาพ
                                        </a>
                                    </div>
                                    @foreach ($img as $imgs)
                                    <div class="col-md-4" style="margin-bottom: 2rem;">
                                        <img src="{{ asset('files/events') }}/{{ $imgs }}" class="img img-fluid" style="height: 100%;">
                                        <a href="#" class="badge bg-danger"
                                        data-id="{{ $news->news_id }}" data-img="{{ $imgs }}"
                                            onclick="
                                            var id = $(this).attr('data-id');
                                            var img = $(this).attr('data-img');
                                            var token = '{{ csrf_token() }}';
                                                event.preventDefault();
                                                Swal.fire({
                                                    icon: 'warning',
                                                    title: 'ลบรูปภาพ ?',
                                                    text: img,
                                                    showCancelButton: true,
                                                    confirmButtonText: `ลบ`,
                                                    cancelButtonText: `ยกเลิก`,
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        $.ajax({
                                                            url: '{{ route('news.img_delete') }}',
                                                            method: 'POST',
                                                            data: {
                                                                id: id,
                                                                img: img,
                                                                _token: token
                                                            },
                                                            success: function (data) {
                                                                Swal.fire({
                                                                    icon: 'error',
                                                                    title: 'ลบรูปภาพแล้ว',
                                                                    showConfirmButton: false,
                                                                    timer: 3000
                                                                })
                                                                window.setTimeout(function () {
                                                                    location.reload()
                                                                }, 1500);
                                                            }
                                                        });
                                                    }
                                                });">
                                            <i class="fa fa-trash"></i>
                                            ลบรูปภาพ
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-row" style="margin-bottom: 1rem;">
                        <div class="form-group col-md-12">
                            <label style="font-weight:bold;">ประเภทข่าว</label>
                            <select name="news_type" class="basic-select2">
                                @foreach ($types as $res)
                                <option value="{{ $news->news_type }}" {{ ($news->news_type == $res->ns_id) ? 'SELECTED' : '' }}>
                                    {{ $res->ns_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row" style="margin-bottom: 1rem;">
                        <div class="form-group col-md-12">
                            <label style="font-weight:bold;">
                                <i class="fa fa-calendar"></i>
                                วันที่สร้าง : 
                            </label>
                            <span>{{ DateTimeThai($news->news_date) }}</span>
                        </div>
                    </div>
                    <div class="form-row" style="margin-bottom: 1rem;">
                        <div class="form-group col-md-12">
                            <label style="font-weight:bold;">
                                <i class="fa fa-edit"></i>
                                ผู้สร้างรายการ : 
                            </label>
                            <span>{{ $news->name." ( ".$news->dep_name." )" }}</span>
                        </div>
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
                        <input type="hidden" name="news_id" class="form-control" value="{{ $news->news_id }}">
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
