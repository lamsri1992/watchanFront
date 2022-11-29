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
                <li><a href="{{ url('backend/ita/sub/',$data->sub_id) }}">{{ $data->data_title }}</a></li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="container">
        <div class="card-body">
            <div class="container">
                <form action="{{ route('ita.data_update',$data->data_id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addLabel">
                               {{ $data->sub_title }}
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label for="">หัวข้อหลัก</label>
                                <select name="" class="basic-select2" disabled>
                                    <option></option>
                                    @foreach ($ita as $res)
                                    <option value="{{ $res->ita_id }}" {{ ($res->ita_id == $data->sub_group) ? 'SELECTED' : '' }}>
                                        {{ $res->ita_eb }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label for="">หัวข้อย่อย</label>
                                <select name="ita_sub_id" class="basic-select2">
                                    <option></option>
                                    @foreach ($sub as $res)
                                    <option value="{{ $res->sub_id }}" {{ ($res->sub_id == $data->ita_sub_id) ? 'SELECTED' : '' }}>
                                        {{ $res->sub_title }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label for="">ปีงบประมาน</label>
                                <input type="text" name="" class="form-control" value="{{ $data->sub_year }}" disabled>
                            </div>
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label for="">ชื่อรายการ</label>
                                <input type="text" name="data_title" class="form-control" value="{{ $data->data_title }}">
                            </div>
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label style="font-weight:bold;">ไฟล์แนบ</label>
                                @if (!isset($data->data_file))
                                <input type="file" name="data_file" class="form-control-file">
                                @else
                                <a href="{{ asset('files/ita/'.$data->sub_year.'/moit'.$data->sub_group) }}/{{ $data->data_file }}" target="_blank">
                                    <i class="far fa-file-pdf text-danger"></i>
                                    {{ $data->data_file }}
                                </a>
                                <a href="#" class="badge bg-danger" data-id='{{ $data->data_id }}' data-name='{{ $data->data_file }}'
                                    onclick="Swal.fire({
                                        title: 'ลบไฟล์แนบ ?',
                                        text: '{{ $data->data_file }}',
                                        showCancelButton: true,
                                        confirmButtonText: `ลบไฟล์`,
                                        cancelButtonText: `ยกเลิก`,
                                        icon: 'warning',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            var token = '{{ csrf_token() }}';
                                            $.ajax({
                                                url: '{{ route('ita.data_f_delete') }}',
                                                method: 'POST',
                                                data: {
                                                    files_name: $(this).attr('data-name'),
                                                    data_id: $(this).attr('data-id'),
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
                                        }
                                    })">
                                    <i class="fa fa-times"></i>
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-success"
                                onclick="Swal.fire({
                                    title: 'แก้ไขรายการข้อมูล ?',
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
                            <a href="#" class="btn btn-sm btn-danger" data-id="{{ $data->sub_id }}"
                                onclick="
                                var id = $(this).attr('data-id');
                                var token = '{{ csrf_token() }}';
                                    event.preventDefault();
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'ลบข้อมูล {{ $data->sub_title }} ?',
                                        showCancelButton: true,
                                        confirmButtonText: `ยืนยันการลบ`,
                                        cancelButtonText: `ยกเลิก`,
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            $.ajax({
                                                url: '',
                                                method: 'POST',
                                                data: {
                                                    id: id,
                                                    _token: token
                                                },
                                                success: function (data) {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'ลบข้อมูลแล้ว',
                                                        showConfirmButton: false,
                                                    })
                                                    window.setTimeout(function () {
                                                        window.location.href = '/backend/ita/sub'+{{ $data->sub_id }};
                                                    }, 3000);
                                                }
                                            });
                                        }
                                    });">
                                <i class="fa fa-trash"></i>
                                ลบข้อมูลนี้
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')

@endsection
