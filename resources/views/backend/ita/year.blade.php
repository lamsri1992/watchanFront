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
                <li>MOIT - ITA ปีงบประมาน {{ $id }}</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="section-title">
        <h2>
            <i class="fa fa-list"></i>
            MOIT - ITA ปีงบประมาน {{ $id }}
        </h2>
    </div>
    <div class="container-fluid">
      <div class="card">
            <div class="card-body">
                <div class="row">
                    <table id="tableBasic" class="table table-borderless table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">ปีงบ</th>
                                <th>ชื่อหัวข้อ ITA</th>
                                <th class="text-center">สถานะ</th>
                                <th class="text-center"><i class="fa fa-bars"></i></th>
                                <th class="text-center"><i class="fa fa-cog"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ita as $res)
                            <tr>
                                <td class="text-center">{{ $res->ita_year }}</td>
                                <td>{{ $res->ita_eb }}</td>
                                <td class="text-center">
                                    <input id="btnToggle" type="checkbox"  data-id="{{ $res->ita_id }}" 
                                    data-toggle="toggle" data-size="xs" data-onstyle="success" data-on="เปิด" data-off="ปิด" 
                                    {{ $res->ita_status == 1 ? 'checked' : '' }}>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('ita.show',$res->ita_id) }}" class="badge bg-secondary">
                                        <i class="fa fa-folder-open"></i> View
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('ita.edit',$res->ita_id) }}" class="badge bg-danger">
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
@endsection
@section('script')
<script>
    $(function() {
        $("#tableBasic").on("change", "#btnToggle", function() {
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var id = $(this).data('id'); 
            // console.log(status,id)
            $.ajax({
                type: "GET",
                url: '/backend/ita/status',
                data: {'status': status, 'id': id},
                success: function(data){
                    console.log('update complete')
                }
            });
        })
    })
</script>
@endsection