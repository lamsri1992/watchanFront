@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
                <li><a href="/ita">ITA</a></li>
                <li> {{ $ita->ita_eb }}</li>
            </ol>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="container">
        <div class="section-title">
            <h2 style="font-size: 25px;">{{ $ita->ita_eb }}</h2>
        </div>
        <ul class="list-group">
            @foreach ($sub as $subs)
            @php
                $id = $subs->sub_id;
                for ($i = 0; $i < 10; $i++)
                {
                    $id = base64_encode($id);
                }
            @endphp
            <li class="list-group-item" aria-current="true">
                @if (isset($subs->sub_file))
                <a class="dropdown-item" href="{{ asset('files/ita') }}/{{ $subs->sub_file }}" target="_blank">
                    {{ $subs->sub_title }}
                </a>
                @else
                <a class="dropdown-item" href="{{ $subs->sub_url }}" target="_blank">
                    {{ $subs->sub_title }}
                </a>
                @endif
                @endforeach
            </li>
        </ul>
    </div>
</section>
@endsection
