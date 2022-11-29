@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="#">ระบบหลังบ้าน</a></li>
                <li><a href="{{ url('home') }}">เมนูผู้ดูแลระบบ</a></li>
                <li>ระบบจัดการข่าวประชาสัมพันธ์</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="section-title">
        <h2><i class="far fa-clipboard"></i> ระบบจัดการข่าวประชาสัมพันธ์</h2>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addNews">
                    <i class="fa fa-plus-circle"></i> 
                    เพิ่มรายการข่าวใหม่
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <table id="tableBasic" class="display">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th width="50%">หัวข้อ</th>
                                <th>วันที่สร้าง</th>
                                <th>ประเภท</th>
                                <th>ผู้สร้าง</th>
                                <th class="text-center">การเผยแพร่</th>
                                <th class="text-center"><i class="fa fa-bars"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $res)
                            <tr>
                                <td class="text-center">{{ $res->news_id }}</td>
                                <td>{{ $res->news_title }}</td>
                                <td>{{ DateThai($res->news_date) }}</td>
                                <td>{{ $res->ns_name }}</td>
                                <td>{{ $res->dep_name }}</td>
                                <td class="text-center">
                                    <input id="btnToggle" type="checkbox"  data-id="{{ $res->news_id }}" 
                                    data-toggle="toggle" data-size="xs" data-onstyle="success" data-on="เปิด" data-off="ปิด" 
                                    {{ $res->news_visible == 1 ? 'checked' : '' }}>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('news.show',$res->news_id) }}" class="badge bg-info">
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
<div class="modal fade" id="addNews" tabindex="-1" aria-labelledby="addNewsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('news.add') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewsLabel">
                        เพิ่มรายการใหม่
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">รายการประกาศ</label>
                        <input type="text" name="news_title" class="form-control" placeholder="ระบุชื่อประกาศ">
                    </div>
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">เลือกประเภท</label>
                        <select id="news_type" name="news_type" class="form-control">
                            <option>กรุณาเลือก</option>
                            @foreach ($types as $res)
                            <option value="{{ $res->ns_id }}">• {{ $res->ns_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 1rem;">
                        <label for="">เนื้อหาประกาศ</label>
                        <textarea name="news_text" rows="5" class="form-control" placeholder="ระบุเนื้อหาประกาศ"></textarea>
                    </div>
                    <div id="news_select" class="form-group" style="margin-bottom: 1rem;">
                        <label for="">ไฟล์แนบ</label>
                        <input type="file" name="news_file" class="form-control-file">
                    </div>
                    <div id="events_select" class="form-group">
                        <label for="">รูปภาพกิจกรรม</label>
                        <input type="file" name="event_img[]" class="form-control-file" multiple>
                        <small class="text-danger">สามารถเลือกได้มากกว่า 1 รูป</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-success"
                        onclick="Swal.fire({
                            title: 'บันทึกรายการข่าวประกาศ ?',
                            text: 'เมื่อบันทึกแล้ว รายการจะถูกเปิดสถานะใช้งานอัตโนมัติ',
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

    $(function() {
        $('#news_select').hide();
        $('#events_select').hide();
        $('#news_type').change(function(){
            if($('#news_type').val() == '1') {
                $('#news_select').hide();
                $('#events_select').show();
            }
            if($('#news_type').val() == '2' || $('#news_type').val() == '3') {
                $('#news_select').show();
                $('#events_select').hide();
            }
        });
    });
</script>
@endsection