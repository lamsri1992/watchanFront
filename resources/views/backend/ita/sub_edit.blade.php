@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="#">ระบบหลังบ้าน</a></li>
                <li><a href="{{ url('home') }}">เมนูผู้ดูแลระบบ</a></li>
                <li><a href="{{ url('backend/ita') }}">ระบบจัดการข้อมูล ITA</a></li>
                <li><a href="{{ url('backend/ita',$sub->ita_id) }}">{{ $sub->ita_eb }}</a></li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="section-title">
        <h5 style="font-weight: bold;">
            <i class="far fa-newspaper"></i>
            {{ $sub->ita_eb }}
        </h5>
        <span>
            {{ $sub->sub_title }}
        </span>
    </div>
    <div class="container">
        <div class="card-body">
            <div class="container">
                <form action="{{ route('ita.sub_update',$sub->sub_id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addLabel">
                               {{ $sub->sub_title }}
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label for="">หัวข้อหลัก</label>
                                <select name="sub_group" class="basic-select2">
                                    <option></option>
                                    @foreach ($ita as $res)
                                    <option value="{{ $res->ita_id }}" {{ ($res->ita_id == $sub->sub_group) ? 'SELECTED' : '' }}>
                                        {{ $res->ita_eb }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label for="">ชื่อหัวข้อย่อย</label>
                                <input type="text" name="sub_title" class="form-control" value="{{ $sub->sub_title }}">
                            </div>
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label for="">ปีงบประมาน</label>
                                <input type="text" name="sub_year" class="form-control" value="{{ $sub->sub_year }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-success"
                                onclick="Swal.fire({
                                    title: 'แก้ไขหัวข้อย่อย ?',
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
                                })"><i class="fa fa-edit"></i> แก้ไขรายการ
                            </button>
                            <a href="#" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#list">
                                <i class="fa fa-list"></i> 
                                ข้อมูลในหัวข้อนี้
                            </a>
                            <a href="#" class="btn btn-sm btn-danger" data-id="{{ $sub->sub_id }}"
                                onclick="
                                var id = $(this).attr('data-id');
                                var token = '{{ csrf_token() }}';
                                    event.preventDefault();
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'ลบหัวข้อ {{ $sub->sub_title }} ?',
                                        text: 'เมื่อลบแล้ว รายการข้อมูลที่อยู่ในหัวข้อนี้จะถูกลบออกไปด้วย',
                                        showCancelButton: true,
                                        confirmButtonText: `ยืนยันการลบ`,
                                        cancelButtonText: `ยกเลิก`,
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            $.ajax({
                                                url: '{{ route('ita.sub_delete',$sub->sub_id) }}',
                                                method: 'POST',
                                                data: {
                                                    id: id,
                                                    _token: token
                                                },
                                                success: function (data) {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'ลบหัวข้อแล้ว',
                                                        showConfirmButton: false,
                                                    })
                                                    window.setTimeout(function () {
                                                        window.location.href = '/backend/ita/'+{{ $sub->sub_group }};
                                                    }, 3000);
                                                }
                                            });
                                        }
                                    });">
                                <i class="fa fa-trash"></i>
                                ลบหัวข้อนี้
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="list" tabindex="-1" aria-labelledby="listLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="listLabel">
                    <i class="fa fa-list"></i>
                    รายการข้อมูลในหัวข้อ
                </h5>
            </div>
            <div class="modal-body">
                <table class="table table-borderless table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">ID</th>
                            <th width="60%">รายการ</th>
                            <th>ไฟล์</th>
                            <th width="10%">วันที่สร้าง</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $res)
                        <tr>
                            <td class="text-center">{{ $res->data_id }}</td>
                            <td>{{ $res->data_title }}</td>
                            <td>
                                <a href="{{ asset('files/ita/'.$sub->sub_year.'/moit'.$sub->ita_id.'/'.$res->data_file) }}" target="_blank">
                                    <i class="far fa-file-pdf text-danger"></i>
                                    {{ $res->data_file }}
                                </a>
                            </td>
                            <td>{{ DateThai($res->created_at) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">
                    <i class="fa fa-times text-danger"></i> 
                    ปิดหน้าต่าง
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection
