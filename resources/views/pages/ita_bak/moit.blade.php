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
       @if ($ita->ita_id == 1) @include('pages.ita.mo_1') @endif
       @if ($ita->ita_id == 2) @include('pages.ita.mo_2') @endif
       @if ($ita->ita_id == 3) @include('pages.ita.mo_3') @endif
       @if ($ita->ita_id == 4) @include('pages.ita.mo_4') @endif
       @if ($ita->ita_id == 5) @include('pages.ita.mo_5') @endif
       @if ($ita->ita_id == 6) @include('pages.ita.mo_6') @endif
       @if ($ita->ita_id == 7) @include('pages.ita.mo_7') @endif
       @if ($ita->ita_id == 8) @include('pages.ita.mo_8') @endif
       @if ($ita->ita_id == 9) @include('pages.ita.mo_9') @endif
       @if ($ita->ita_id == 10) @include('pages.ita.mo_10') @endif
       @if ($ita->ita_id == 11) @include('pages.ita.mo_11') @endif
       @if ($ita->ita_id == 12) @include('pages.ita.mo_12') @endif
       @if ($ita->ita_id == 13) @include('pages.ita.mo_13') @endif
       @if ($ita->ita_id == 14) @include('pages.ita.mo_14') @endif
       @if ($ita->ita_id == 15) @include('pages.ita.mo_15') @endif
       @if ($ita->ita_id == 16) @include('pages.ita.mo_16') @endif
       @if ($ita->ita_id == 17) @include('pages.ita.mo_17') @endif
       @if ($ita->ita_id == 18) @include('pages.ita.mo_18') @endif
       @if ($ita->ita_id == 19) @include('pages.ita.mo_19') @endif
       @if ($ita->ita_id == 20) @include('pages.ita.mo_20') @endif
       @if ($ita->ita_id == 21) @include('pages.ita.mo_21') @endif
       @if ($ita->ita_id == 22) @include('pages.ita.mo_22') @endif
       @if ($ita->ita_id == 23) @include('pages.ita.mo_23') @endif
    </div>
</section>
@endsection
