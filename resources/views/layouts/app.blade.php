<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @yield('meta')
    <title>โรงพยาบาลวัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา</title>
    <link href="{{ asset('img/hospital_logo.png') }}" rel="icon">
    <link href="{{ asset('medilab/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('medilab/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('medilab/assets/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('medilab/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('medilab/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('medilab/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('medilab/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('medilab/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('medilab/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.css' rel='stylesheet' />
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v7.0"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>
</head>

<body>
  @if (Auth::check())
    @include('layouts.header_admin')
  @else
    @include('layouts.header')
  @endif
  @yield('content')
  @include('layouts.footer')
  <div id="fb-root"></div>
  <div id="fb-customer-chat" class="fb-customerchat"></div>
</body>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v12.0" nonce="UkPKznot"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.js'></script>
<script src="{{ asset('medilab/assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('medilab/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('medilab/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('medilab/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('medilab/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('medilab/assets/js/main.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "475415592575845");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // DATATABLES
 $(document).ready(function () {
    $('#tableBasic').dataTable({
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        // scrollX: true,
            oLanguage: {
            oPaginate: {
                sFirst: '<small>หน้าแรก</small>',
                sLast: '<small>หน้าสุดท้าย</small>',
                sNext: '<small>ถัดไป</small>',
                sPrevious: '<small>กลับ</small>'
            },
                sSearch: '<small><i class="fa fa-search"></i> ค้นหา</small>',
                sInfo: '<small>ทั้งหมด _TOTAL_ รายการ</small>',
                sLengthMenu: '<small>แสดง _MENU_ รายการ</small>',
                sInfoEmpty: '<small>ไม่มีข้อมูล</small>'
            },
        });
    });

    $(document).ready(function () {
    $('.tableBasic').dataTable({
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        // scrollX: true,
            oLanguage: {
            oPaginate: {
                sFirst: '<small>หน้าแรก</small>',
                sLast: '<small>หน้าสุดท้าย</small>',
                sNext: '<small>ถัดไป</small>',
                sPrevious: '<small>กลับ</small>'
            },
                sSearch: '<small><i class="fa fa-search"></i> ค้นหา</small>',
                sInfo: '<small>ทั้งหมด _TOTAL_ รายการ</small>',
                sLengthMenu: '<small>แสดง _MENU_ รายการ</small>',
                sInfoEmpty: '<small>ไม่มีข้อมูล</small>'
            },
        });
    });

  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
      console.log( editor );
    } )
    .catch( error => {
      console.error( error );
    } );

$(document).ready(function() {
    $('.basic-select2').select2({ 
        width: '100%',
        placeholder: 'กรุณาเลือก',
    });
});

$(document).ready(function() {
    $('.basic-multiple').select2({
        width: '100%',
        tags: true,
    });
});

$(function() {
    $.datetimepicker.setLocale('th');
    $(".basicDate").datetimepicker({
        format: 'Y-m-d',
        lang: 'th',
        timepicker: false,
    });
});

$(function() {
    $.datetimepicker.setLocale('th');
    $(".basicDateTime").datetimepicker({
        format: 'Y-m-d H:i',
        lang: 'th',
        timepicker: true,
    });
});

</script>
@if($message = Session::get('success'))
<script>
    $(function() {
        var Toast = Swal.mixin({
            position: 'top-end',
            toast: true,
            showConfirmButton: false,
            timer: 10000
        });
            Toast.fire({
            icon: 'success',
            title: '{{ $message }}'
        })
    });
</script>
@endif
@section('script')
@show
</html>
