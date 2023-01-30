@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="#">ระบบหลังบ้าน</a></li>
                <li><a href="{{ url('home') }}">เมนูผู้ดูแลระบบ</a></li>
                <li><a href="{{ route('ita.home') }}">ระบบจัดการข้อมูล ITA</a></li>
                <li><a href="{{ route('ita.year',$ita->ita_year) }}">{{ "MOIT - ITA ปีงบประมาน ".$ita->ita_year }}</a></li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="section-title">
        <h5 style="font-weight: bold;">
            <i class="far fa-newspaper"></i>
            {{ $ita->ita_eb }}
        </h5>
    </div>
    <div class="container">
        <div class="card-body">
            <div class="container">
                <form action="{{ route('ita.update',$ita->ita_id) }}" method="get">
                    {{ csrf_field() }}
                    {{ method_field('get') }}
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label for="">ชื่อหัวข้อ</label>
                                <input type="text" name="ita_eb" class="form-control" value="{{ $ita->ita_eb }}">
                            </div>
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label for="">ปีงบประมาน</label>
                                <input type="text" name="ita_year" class="form-control" value="{{ $ita->ita_year }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-success"
                                onclick="Swal.fire({
                                    title: 'แก้ไขหัวข้อ ?',
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
