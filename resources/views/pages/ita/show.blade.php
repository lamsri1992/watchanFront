@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="/ita">ITA</a></li>
                <li>{{ $ita->ita_eb }}</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="container">
        <div class="section-title">
            <h2 style="font-size: 25px;">{{ $ita->ita_eb }}</h2>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="card">
                @foreach ($sub as $item)                
                <div class="card-header" id="heading{{ $item->sub_id }}">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left listClick" type="button" data-toggle="collapse" data-id="{{ $item->sub_id }}"
                            data-target="#collapse{{ $item->sub_id }}" aria-expanded="true" aria-controls="collapse{{ $item->sub_id }}">
                            {{ $item->sub_title }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $item->sub_id }}" class="collapse" aria-labelledby="heading{{ $item->sub_id }}" data-parent="#accordionExample">
                    <div class="card-body">
                        <div id="container{{ $item->sub_id }}"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $('.listClick').click(function () {
        var id = $(this).data('id');
        var conid = "#container"+id;
        
        $(conid).html("");
        $.ajax({
            url: "/api/get_ita_data/" + id,
            success: function (data) {
                var container = document.querySelector(conid);
                    var ul = document.createElement('ul');
                    Array.from(data).forEach(element => {
                        var li = document.createElement('li');
                        const anchor = document.createElement('a');
                        var file = '/files/ita/'+ element.sub_year +'/moit'+ element.sub_group +'/'+ element.data_file;
                            anchor.href = file;
                            anchor.target = "_blank";
                            anchor.innerText = element.data_title;
                        li.appendChild(anchor);
                        ul.appendChild(li);
                    });
                container.appendChild(ul);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                Swal.fire({
                    icon: 'error',
                    title: 'ไม่สามารถเชื่อมต่อ API ได้',
                    text: 'Error: ' + textStatus + ' - ' + errorThrown,
                })
            }
        });
    });
</script>
@endsection
