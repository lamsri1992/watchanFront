@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>ITA</h2>
            <span>Integrity and Transparency Assessment การประเมินคุณธรรม และความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ</span>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="container">
        <ul class="list-group">
            @foreach ($ita as $eb)
            <li class="list-group-item" aria-current="true">
                <a class="dropdown-item" href="{{ route('ita.sub',$eb->ita_id ) }}">{{ $eb->ita_eb }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
