@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="#">ระบบหลังบ้าน</a></li>
                <li><a href="{{ url('home') }}">เมนูผู้ดูแลระบบ</a></li>
                <li>จัดการข้อมูลผู้ใช้งาน</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="section-title">
        <h2><i class="fa fa-user-cog"></i> จัดการข้อมูลผู้ใช้งาน</h2>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#add">
                    <i class="fa fa-user-plus"></i> 
                    เพิ่มรายการผู้ใช้งานใหม่
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <table id="tableBasic" class="display">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>ชื่อผู้ใช้งาน</th>
                                <th>Email</th>
                                <th>ฝ่าย/หน่วยงาน</th>
                                <th>สิทธิ์การใช้งาน</th>
                                <th class="text-center">วันที่สร้าง</th>
                                <th class="text-center"><i class="fa fa-bars"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $res)
                            <tr>
                                <td class="text-center">{{ $res->id }}</td>
                                <td>{{ $res->name }}</td>
                                <td>{{ $res->email }}</td>
                                <td>{{ $res->dep_name }}</td>
                                <td>{{ $res->p_name }}</td>
                                <td class="text-center">{{ DateThai($res->created_at) }}</td>
                                <td class="text-center">
                                    <a href="{{ route('users.show',$res->id) }}" class="badge bg-info">
                                        <i class="fa fa-edit"></i> View
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
    <!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('users.add') }}" method="post" enctype="multipart/form-data">
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
                        <label for="">ชื่อผู้ใช้งาน</label>
                        <input type="text" name="uname" class="form-control" placeholder="ระบุชื่อผู้ใช้งาน">
                    </div>
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">Email <small class="text-danger">ใช้สำหรับลงชื่อเข้าใช้งาน</small> </label>
                        <input type="email" name="uemail" class="form-control" placeholder="ระบุ Email">
                    </div>
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">ฝ่าย/หน่วยงาน</label>
                        <select name="udept" class="form-control">
                            <option>กรุณาเลือก</option>
                            @foreach ($dept as $res)
                            <option value="{{ $res->dep_id }}">• {{ $res->dep_name }}</option>
                            @endforeach
                        </select>
                    </div>
                     <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">กำหนดสิทธิ์การใช้งาน</label>
                        <select name="uperm" class="form-control">
                            <option>กรุณาเลือก</option>
                            @foreach ($perm as $res)
                            <option value="{{ $res->p_id }}">• {{ $res->p_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-success"
                        onclick="Swal.fire({
                            title: 'บันทึกผู้ใช้งานใหม่ ?',
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
                        })"><i class="fa fa-plus-circle"></i> เพิ่มใหม่
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
</section>
@endsection
@section('script')
<script>
    $(function() {
        $("#tableBasic").on("change", "#btnToggle", function() {
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var id = $(this).data('id'); 
            
            $.ajax({
                type: "GET",
                url: '/backend/news/visible',
                data: {'status': status, 'id': id},
                success: function(data){
                    // console.log('update complete')
                }
            });
        })
    })
</script>
@endsection