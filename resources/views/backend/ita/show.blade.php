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
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <select id="year" name="year" class="form-select">
                                <option>เลือกข้อมูลตามปีงบประมาน</option>
                                @foreach ($ita_year as $res)
                                <option value="{{ $res->y_year }}">
                                    {{ "• ปีงบประมาน ".$res->y_year }}
                                </option>
                                @endforeach
                            </select>
                            <input id="ita_id" type="text" value="{{ $ita->ita_id }}" hidden>
                        </div>
                        <div class="col-md-2">
                            <button id="btn" type="button" class="btn btn-primary" style="width: 100%;">
                                <i class="fa fa-search"></i>
                                ค้นหาข้อมูล
                            </button>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-success" style="width: 100%;"
                                data-toggle="modal" data-target="#add">
                                <i class="fa fa-plus-circle"></i>
                                เพิ่มหัวข้อย่อย
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="col-md-12">
                        <table id="list" class="table table-hover table-borderless table-sm align-middle"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('ita.sub_add') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLabel">
                        เพิ่มหัวข้อย่อย
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">ชื่อหัวข้อย่อย</label>
                        <input type="text" name="sub_title" class="form-control" placeholder="ระบุชื่อหัวข้อย่อย">
                        <input type="hidden" name="sub_group" class="form-control" value="{{ $ita->ita_id }}">
                    </div>
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">ปีงบประมาน</label>
                        <input type="text" name="sub_year" class="form-control" placeholder="ระบุปีงบประมาน">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-success"
                        onclick="Swal.fire({
                            title: 'เพิ่มหัวข้อย่อย ?',
                            text: '{{ $ita->ita_eb }}',
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
    <script>
        $('#btn').click(function () {
            let years = document.getElementById("year").value
            let ita_sub = document.getElementById("ita_id").value
            let id = ita_sub +'_'+ years
            $.ajax({
                url: "/api/get_ita_sub/" + id,
                success: function (data) {
                    if ($.trim(data)) {
                        $('table').html("");
                        $('tbody').html("");
                        $('thead').html("");
                        Swal.fire({
                            icon: 'success',
                            title: 'พบข้อมูล',
                            text: 'ปีงบประมาน ' + years
                        })
                        var header = 
                            $(
                                '<thead>'+
                                    '<tr>'+
                                        '<th class="text-center" width="10%">ปีงบประมาน</th>'+
                                        '<th class="">หัวข้อย่อย</th>'+
                                        '<th colspan="2"></th>'+
                                    '</tr>'+
                                '</thead>'
                            )
                        for (var i = 0; i < data.length; i++) {
                            var row =
                                $(
                                    '<tbody>'+
                                        '<tr>'+
                                            '<td class="text-center">' + data[i].sub_year + '</td>' +
                                            '<td class="">' + data[i].sub_title + '</td>' +
                                            '<td class="text-center"><a href="/backend/ita/sub/edit/'+ data[i].sub_id +'" class="badge bg-danger"><i class="fa fa-edit"></i> Edit</a></td>' +
                                            '<td class="text-center"><a href="/backend/ita/sub/'+ data[i].sub_id +'" class="badge bg-secondary"><i class="fa fa-folder-open"></i> View</a></td>' +
                                        '<tr>'+
                                    '<tbody>'
                                );
                            $('#list').append(header);
                            $('#list').append(row);
                        }
                    }else{
                        $('table').html("");
                        $('tbody').html("");
                        $('thead').html("");
                        Swal.fire({
                            icon: 'warning',
                            title: 'ไม่พบข้อมูล',
                        })
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'ไม่สามารถเชื่อมต่อ API ได้',
                        text: 'Error: ' + textStatus + ' - ' + errorThrown,
                    })
                },
            });
        });
    </script>
@endsection
