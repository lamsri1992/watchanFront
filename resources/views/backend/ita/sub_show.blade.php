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
        <div class="card">
            <div class="card-body">
                <div class="container text-end">
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#add">
                        <i class="fa fa-folder-plus"></i> 
                        เพิ่มรายการข้อมูล
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <table id="tableBasic" class="table table-borderless table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">ID</th>
                                <th width="60%">รายการ</th>
                                <th>ไฟล์</th>
                                <th width="10%">วันที่สร้าง</th>
                                <th class="text-center">สถานะ</th>
                                <th class="text-center"><i class="fa fa-bars"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $res)
                            <tr>
                                <td class="text-center">{{ $res->data_id }}</td>
                                <td>{{ $res->data_title }}</td>
                                <td>
                                    @if (isset($res->data_file))
                                    <a href="{{ asset('files/ita/'.$sub->sub_year.'/moit'.$sub->ita_id.'/'.$res->data_file) }}" target="_blank">
                                        <i class="far fa-file-pdf text-danger"></i>
                                        {{ $res->data_file }}
                                    </a>
                                    @endif
                                    @if (isset($res->data_url))
                                    <a href="{{ $res->data_url }}" target="_blank">
                                        <i class="fas fa-link text-info"></i>
                                        คลิกเพื่อดูตัวอย่าง
                                    </a>
                                    @endif
                                <td>{{ DateThai($res->created_at) }}</td>
                                <td class="text-center">
                                    <input id="btnToggle" type="checkbox"  data-id="{{ $res->data_id }}" 
                                    data-toggle="toggle" data-size="xs" data-onstyle="success" data-on="เปิด" data-off="ปิด" 
                                    {{ $res->data_status == 1 ? 'checked' : '' }}>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('ita.data_edit',$res->data_id) }}" class="badge bg-danger">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('ita.data_add') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLabel">
                        เพิ่มรายการใหม่
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">ชื่อรายการ</label>
                        <input type="text" name="data_title" class="form-control" placeholder="ระบุชื่อรายการ">
                        <input type="hidden" name="ita_sub_id" class="form-control" value="{{ $sub->sub_id }}">
                        <input type="hidden" name="ita_id" class="form-control" value="{{ $sub->ita_id }}">
                        <input type="hidden" name="dr_year" class="form-control" value="{{ $sub->sub_year }}">
                    </div>
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">ไฟล์แนบ</label>
                        <input type="file" name="data_file" class="form-control-file">
                    </div>
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">URL</label>
                        <input type="text" name="data_url" class="form-control" placeholder="หากมีไฟล์แนบ ไม่ต้องใส่ช่องนี้">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-success"
                        onclick="Swal.fire({
                            title: 'บันทึกรายการใหม่ ?',
                            text: '{{ $sub->sub_title }}',
                            showCancelButton: true,
                            confirmButtonText: `บันทึก`,
                            cancelButtonText: `ยกเลิก`,
                            icon: 'success',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                                Swal.fire({
                                    title: 'กำลังสร้างรายการ',
                                    timerProgressBar: true,
                                    didOpen: () => {
                                        Swal.showLoading()
                                        timerInterval = setInterval(() => {
                                        const content = Swal.getContent()
                                        if (content) {
                                            const b = content.querySelector('b')
                                            if (b) {
                                            b.textContent = Swal.getTimerLeft()
                                            }
                                        }
                                        }, 100)
                                    },
                                        willClose: () => {
                                            clearInterval(timerInterval)
                                        }
                                    })
                            } else if (result.isDenied) {
                                form.reset();
                            }
                        })"><i class="fa fa-plus-circle"></i> เพิ่มรายการใหม่
                    </button>
                    <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">
                        <i class="fa fa-times"></i> 
                        ปิดหน้าต่าง
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')

@endsection
